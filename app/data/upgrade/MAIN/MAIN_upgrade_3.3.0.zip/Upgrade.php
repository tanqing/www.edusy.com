<?php

use Symfony\Component\Filesystem\Filesystem;

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
     }

     private function updateScheme()
     {
        $connection = $this->getConnection();

        if (!$this->isFieldExist('course_lesson', 'giveCredit')) {
            $connection->exec("ALTER TABLE  `course_lesson` ADD  `giveCredit` INT UNSIGNED NOT NULL DEFAULT  '0' COMMENT  '学完课时获得的学分' AFTER  `content`;");
        }

        if (!$this->isFieldExist('course_lesson', 'requireCredit')) {
            $connection->exec("ALTER TABLE  `course_lesson` ADD  `requireCredit` INT UNSIGNED NOT NULL DEFAULT  '0' COMMENT  '学习课时前，需达到的学分' AFTER  `giveCredit`;");
        }

        if (!$this->isFieldExist('course', 'giveCredit')) {
            $connection->exec("ALTER TABLE  `course` ADD  `giveCredit` INT UNSIGNED NOT NULL DEFAULT  '0' COMMENT  '学完课程所有课时，可获得的总学分' AFTER  `lessonNum`;");
        }

        if (!$this->isFieldExist('course_member', 'credit')) {
            $connection->exec("ALTER TABLE  `course_member` ADD  `credit` INT UNSIGNED NOT NULL DEFAULT  '0' COMMENT  '学员已获得的学分' AFTER  `learnedNum`;");
        }

        $connection->exec("
            CREATE TABLE IF NOT EXISTS `user_field` (
              `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
              `fieldName` varchar(100) NOT NULL DEFAULT '',
              `title` varchar(1024) NOT NULL DEFAULT '',
              `seq` int(10) unsigned NOT NULL,
              `enabled` int(10) unsigned NOT NULL DEFAULT '0',
              `createdTime` int(100) unsigned NOT NULL,
              PRIMARY KEY (`id`)
            ) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
        ");

        if (!$this->isFieldExist('category', 'description')) {
            $connection->exec("ALTER TABLE `category` ADD `description` TEXT NULL; ");
        }
        $connection->exec("ALTER TABLE `user_profile` CHANGE `idcard` `idcard` VARCHAR(24) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '' COMMENT '身份证号码';");

        if (!$this->isFieldExist('user_profile', 'intField1')) {
          $connection->exec("ALTER TABLE `user_profile`  ADD `intField1` INT(11) NULL DEFAULT NULL ,  ADD `intField2` INT(11) NULL DEFAULT NULL ,  ADD `intField3` INT(11) NULL DEFAULT NULL,  ADD `intField4` INT(11) NULL DEFAULT NULL,  ADD `intField5` INT(11) NULL DEFAULT NULL ;");

        }

        if (!$this->isFieldExist('user_profile', 'dateField1')) {
          $connection->exec("ALTER TABLE `user_profile` ADD `dateField1` Date NULL , ADD `dateField2` Date NULL , ADD `dateField3` Date NULL , ADD `dateField4` Date NULL , ADD `dateField5` Date NULL ;");
        }

        if (!$this->isFieldExist('user_profile', 'floatField1')) {
          $connection->exec("ALTER TABLE `user_profile` ADD `floatField1` FLOAT(10,2) NULL DEFAULT NULL , ADD `floatField2` FLOAT(10,2) NULL DEFAULT NULL , ADD `floatField3` FLOAT(10,2) NULL DEFAULT NULL , ADD `floatField4` FLOAT(10,2) NULL DEFAULT NULL, ADD `floatField5` FLOAT(10,2) NULL DEFAULT NULL ;");
        }

        if (!$this->isFieldExist('user_profile', 'varcharField1')) {
            $connection->exec("ALTER TABLE `user_profile` ADD `varcharField1` VARCHAR(1024) NULL , ADD `varcharField2` VARCHAR(1024) NULL , ADD `varcharField3` VARCHAR(1024) NULL , ADD `varcharField4` VARCHAR(1024) NULL , ADD `varcharField5` VARCHAR(1024) NULL,ADD `varcharField6` VARCHAR(1024) NULL,ADD `varcharField7` VARCHAR(1024) NULL,ADD `varcharField8` VARCHAR(1024) NULL,ADD `varcharField9` VARCHAR(1024) NULL,ADD `varcharField10` VARCHAR(1024) NULL ;");

        }

        if (!$this->isFieldExist('user_profile', 'textField1')) {
            $connection->exec("ALTER TABLE `user_profile` ADD `textField1` TEXT NULL , ADD `textField2` TEXT NULL , ADD `textField3` TEXT NULL , ADD `textField4` TEXT NULL , ADD `textField5` TEXT NULL , ADD `textField6` TEXT NULL , ADD `textField7` TEXT NULL , ADD `textField8` TEXT NULL , ADD `textField9` TEXT NULL , ADD `textField10` TEXT NULL ;");
        }

        if (!$this->isFieldExist('upload_files', 'convertParams')) {
            $connection->exec("ALTER TABLE `upload_files` ADD  `convertParams` TEXT NULL DEFAULT NULL COMMENT  '文件转换参数' AFTER  `convertStatus`;");
        }

        $connection->exec("ALTER TABLE  `theme_config` CHANGE  `config`  `config` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
CHANGE  `confirmConfig`  `confirmConfig` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
CHANGE  `allConfig`  `allConfig` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL");
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

    protected function isFieldExist($table, $filedName)
    {
        $sql = "DESCRIBE `{$table}` `{$filedName}`;";
        $result = $this->getConnection()->fetchAssoc($sql);
        return empty($result) ? false : true;
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

