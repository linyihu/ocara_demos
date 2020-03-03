<?php
namespace app\modules\admin\service;

use app\model\database\GuestbookModel;

class GuestbookService extends BaseService
{
    /**
     * 搜索
     * @param array $search
     * @return mixed
     */
    public function getList($search = array(), $pageInfo)
    {
        $condition = array();
        $model = GuestbookModel::build();

        //手机号搜索
        if (!empty($search['telephone'])) {
            $condition['telephone'] = $search['telephone'];
        }

        //查询数据
        $result = $model
            ->where($condition)
            ->page($pageInfo)
            ->getAll();

        return $result;
    }
}