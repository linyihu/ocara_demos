<?php
namespace app\service;

use app\model\entity\database\GuestbookEntity;

class GuestbookService extends BaseService
{
    /**
     * 添加一行
     * @param $data
     * @return mixed
     */
    public function addRow($data)
    {
        $entity = GuestbookEntity::build();
        $entity->data($data);
        return $entity->save();
    }
}