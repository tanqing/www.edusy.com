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

        if (!$this->isFieldExist('groups_thread_post', 'fromUserId')) {
            $connection->exec("ALTER TABLE `groups_thread_post` ADD `fromUserId` INT(10) UNSIGNED NOT NULL  DEFAULT '0' AFTER `userId`;");
        }

        $connection->exec("ALTER TABLE `groups_thread` CHANGE `lastPostMemberId` `lastPostMemberId` INT(10) UNSIGNED NOT NULL DEFAULT '0';");
        $connection->exec("ALTER TABLE `groups_thread` CHANGE `lastPostTime` `lastPostTime` INT(10) UNSIGNED NOT NULL DEFAULT '0';");
        $connection->exec("ALTER TABLE `groups_thread` CHANGE `hitNum` `hitNum` INT(10) UNSIGNED NOT NULL DEFAULT '0';");
     }

    protected function isFieldExist($table, $filedName)
    {
        $sql = "DESCRIBE `{$table}` `{$filedName}`;";
        $result = $this->getConnection()->fetchAssoc($sql);
        return empty($result) ? false : true;
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