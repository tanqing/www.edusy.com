<?php
namespace Topxia\Service\User\Impl;

use Topxia\Service\Common\BaseService;
use Topxia\Service\User\StatusService;
use EdusohoNet\Common\ArrayToolkit;

class StatusServiceImpl extends BaseService implements StatusService
{
    public function publishStatus($status)
    {
        $user = $this->getCurrentUser();

        $status['userId'] = $user['id'];
        $status['createdTime'] = time();

        return $this->getStatusDao()->addStatus($status);
    }

    public function findStatusesByUserIds($userIds, $start, $limit)
    {
        return $this->getStatusDao()->findStatusesByUserIds($userIds, $start, $limit);
    }

    private function getStatusDao()
    {
        return $this->createDao('User.StatusDao');
    }

}