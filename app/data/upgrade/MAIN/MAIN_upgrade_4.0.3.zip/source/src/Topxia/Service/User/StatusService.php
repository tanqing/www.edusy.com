<?php
namespace Topxia\Service\User;

interface StatusService
{
    public function publishStatus($status);

    public function findStatusesByUserIds($userIds, $start, $limit);
}