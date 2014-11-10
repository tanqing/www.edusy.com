<?php

use Symfony\Component\Filesystem\Filesystem;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Topxia\Service\Common\ServiceKernel;

class EduSohoUpgrade extends AbstractUpdater
{
    public function update()
    {
        $this->getConnection()->beginTransaction();
        try{
            $this->updateScheme();
            $this->getConnection()->commit();
        } catch(\Exception $e) {
            $this->getConnection()->rollback();
            throw $e;
        }

        PluginUtil::refresh();
    }

    private function updateScheme()
    {
        $connection = $this->getConnection();

        $connection->exec("ALTER TABLE `course` ADD `maxStudentNum` INT NOT NULL DEFAULT '0' COMMENT '直播课程最大学员数上线' AFTER `status`;");

        $connection->exec("ALTER TABLE `course_lesson` ADD `startTime` INT UNSIGNED NOT NULL DEFAULT '0' COMMENT '直播课时开始时间' AFTER `viewedNum`, ADD `endTime` INT UNSIGNED NOT NULL DEFAULT '0' COMMENT '直播课时结束时间' AFTER `startTime`;");

        $connection->exec("ALTER TABLE `course_lesson` ADD `memberNum` INT UNSIGNED NOT NULL DEFAULT '0' COMMENT '直播课时加入人数' AFTER `endTime`;");

        $connection->exec("ALTER TABLE `course` ADD `type` VARCHAR(255) NOT NULL DEFAULT 'normal' COMMENT '课程类型' AFTER `status`;");

        $connection->exec("ALTER TABLE `category` ADD `icon` VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '图标' AFTER `name`;");

        $connection->exec("ALTER TABLE `block` ADD `mode` ENUM('html','template') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'html' COMMENT '模式' AFTER `title`, ADD `template` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '模板' AFTER `mode`, ADD `templateData` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '模板数据' AFTER `template`;");

        $connection->exec("ALTER TABLE `block_history` ADD `templateData` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '模板历史数据' AFTER `blockId`;");


        $service = ServiceKernel::instance()->createService('Content.BlockService');

        $block = $service->createBlock(array(
            'code'=>'live_top_banner',
            'title'=>'直播频道首页图片轮播'
        ));

        $content = <<<'EOD'
<a href="#"><img src="../assets/img/placeholder/live-slide-1.jpg" /></a>
<a href="#"><img src="../assets/img/placeholder/live-slide-2.jpg" /></a>
EOD;
        $service->updateContent($block['id'], $content);

    }

 }

abstract class AbstractUpdater
{
    protected $kernel;
    public function __construct ($kernel)
    {
        $this->kernel = $kernel;
    }

    public function getConnection()
    {
        return $this->kernel->getConnection();
    }

    protected function createService($name)
    {
        return $this->kernel->createService($name);
    }

    protected function createDao($name)
    {
        return $this->kernel->createDao($name);
    }

    abstract public function update();
   
}

class PluginUtil
{
    private static $filesystem;
    private static $kernel;

    public static function refresh ()
    {
        self::$filesystem = new Filesystem();
        self::$kernel = ServiceKernel::instance();

        $count = self::getAppService()->findAppCount();
        $apps = self::getAppService()->findApps(0, $count);

        self::refreshMetaFile($apps);
        self::refreshRoutingFile($apps);
    }

    public static function refreshMetaFile($apps)
    {
        $pluginMetas = array(
            'protocol' => '1.0',
            'installed' => array()
        );

        foreach ($apps as $app) {
            if ($app['code'] == 'MAIN') {
                continue;
            }

            $pluginMetas['installed'][] = $app['code'];
        }

        $dataDirectory = realpath(self::$kernel->getParameter('kernel.root_dir') . '/data/');
        if (empty($dataDirectory)) {
            throw new \RuntimeException('app/data目录不存在，请先创建');
        }

        $metaFilePath = $dataDirectory . '/plugin_installed.php';
        if (self::$filesystem->exists($metaFilePath)) {
            self::$filesystem->remove($metaFilePath);
        }

        $fileContent = "<?php \nreturn " . var_export($pluginMetas, true) . ";";
        file_put_contents($metaFilePath, $fileContent);
    }

    public static function refreshRoutingFile($apps)
    {
        $pluginRootDirectory = realpath(self::$kernel->getParameter('kernel.root_dir') . '/../plugins');

        $config = '';

        foreach ($apps as $app) {
            if ($app['code'] == 'MAIN') {
                continue;
            }
            $code = $app['code'];


            $routingPath = sprintf("{$pluginRootDirectory}/%s/%sBundle/Resources/config/routing.yml", ucfirst($code), ucfirst($code));
            if (self::$filesystem->exists($routingPath)) {
                $config .= "_plugin_{$code}_web:\n";
                $config .= sprintf("    resource: \"@%sBundle/Resources/config/routing.yml\"\n", ucfirst($code));
                $config .= "    prefix:   /\n";
            }

            $routingPath = sprintf("{$pluginRootDirectory}/%s/%sBundle/Resources/config/routing_admin.yml", ucfirst($code), ucfirst($code));
            if (self::$filesystem->exists($routingPath)) {
                $config .= "_plugin_{$code}_admin:\n";
                $config .= sprintf("    resource: \"@%sBundle/Resources/config/routing_admin.yml\"\n", ucfirst($code));
                $config .= "    prefix:   /admin\n";
            }
        }

        $pluginRouteFilePath = self::$kernel->getParameter('kernel.root_dir') . '/config/routing_plugins.yml';
        if (!self::$filesystem->exists($pluginRouteFilePath)) {
            self::$filesystem->touch($pluginRouteFilePath);
        }

        file_put_contents($pluginRouteFilePath, $config);

    }



    private static function getAppService()
    {
        return self::$kernel->createService('CloudPlatform.AppService');
    }

}