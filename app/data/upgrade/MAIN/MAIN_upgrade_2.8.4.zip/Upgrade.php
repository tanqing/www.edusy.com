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

        $connection->exec("ALTER TABLE  `course_material` ADD  `link` VARCHAR( 1024 ) NOT NULL DEFAULT  '' COMMENT  '外部链接地址' AFTER  `description`;");

        $connection->exec("ALTER TABLE  `course_chapter` ADD  `parentId` INT UNSIGNED NOT NULL DEFAULT  '0' COMMENT  'parentId大于０时为单元' AFTER  `courseId`");

        $connection->exec("ALTER TABLE  `course_chapter` ADD  `type` ENUM(  'chapter',  'unit' ) NOT NULL DEFAULT  'chapter' COMMENT  '章节类型：chapter为章节，unit为单元。' AFTER  `courseId`");
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
