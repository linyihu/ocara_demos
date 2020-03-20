<?php
namespace app\service;

use Ocara\Exceptions\Exception;
use app\model\entity\database\GuestbookEntity;

class GuestbookService extends BaseService
{
    /**
     * 添加一行
     * @param $data
     * @return bool
     * @throws Exception
     */
    public function addRow($data)
    {
        $entity = GuestbookEntity::build();
        $entity->data($data);
        return $entity->save();
    }
}