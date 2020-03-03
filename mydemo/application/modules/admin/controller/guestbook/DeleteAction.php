<?php
namespace app\modules\admin\controller\guestbook;

use app\model\entity\database\GuestbookEntity;

class DeleteAction extends Controller
{
	/**
	 * 初始化
	 */
	protected function __action()
	{}

	/**
	 * Ajax处理
	 */
	public function api()
	{
        $id = $this->request->getPost('id');
        $entity = GuestbookEntity::build()->select($id);

        if (empty($entity->id)) {
            $this->error->show('找不到该记录！');
        } else {
            $entity->delete();
        }
    }
}