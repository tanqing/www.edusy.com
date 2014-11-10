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

    protected function isFieldExist($table, $filedName)
    {
        $sql = "DESCRIBE `{$table}` `{$filedName}`;";
        $result = $this->getConnection()->fetchAssoc($sql);
        return empty($result) ? false : true;
    }

     private function updateScheme()
     {
        $connection = $this->getConnection();

         if (!$this->isFieldExist('course_lesson','replayStatus')) {

            $connection->exec(" 
                ALTER TABLE `course_lesson` ADD `replayStatus` ENUM('ungenerated','generating','generated') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'ungenerated' AFTER `memberNum`;"
            );
         }

        $connection->exec("
              
               CREATE TABLE IF NOT EXISTS `course_lesson_replay` (
                  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
                  `lessonId` int(10) unsigned NOT NULL COMMENT '所属课时',
                  `courseId` int(10) unsigned NOT NULL COMMENT '所属课程',
                  `title` varchar(255) NOT NULL COMMENT '名称',
                  `replayId` text NOT NULL COMMENT '云直播中的回放id',
                  `userId` int(10) unsigned NOT NULL COMMENT '创建者',
                  `createdTime` int(10) unsigned NOT NULL COMMENT '创建时间',
                  PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ");
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