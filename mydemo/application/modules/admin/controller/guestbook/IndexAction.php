<?php
namespace app\modules\admin\controller\guestbook;

use app\modules\admin\service\GuestbookService;

class IndexAction extends Controller
{
	/**
	 * 初始化
	 */
	protected function __action()
	{
        //搜索列表不需要验证表单
        $this->isCheckForm(false);
    }

	/**
	 * 表单注册
	 */
	public function registerForms()
	{
        $this->form('form_search')
             ->init(ocUrl('/admin/guestbook/index'));
    }

	/**
	 * GET输出
	 */
	public function display()
	{
	    $search = $this->request->getGet();

        //分页设置
        $pager = $this->pager; //分页类是非单例模式
        $pageInfo = $pager->getInfo();

        //查询数据
        $result = GuestbookService::build()->getList($search, $pageInfo);
        $data 	= $result['data'];
        $total 	= $result['total'];

        //生成分页HTML
        $currentRoute = $this->getRoute();
        $currentCondition   = $this->request->getGet();
        $pager->setHtml($total, array($currentRoute, $currentCondition));

        //设置模板变量
        $this->assign(compact('pager', 'data'));
    }

	/**
	 * Ajax处理
	 */
	public function api()
	{
        $result = $this->getList();
        $data 	= $result['data'];
        $total 	= $result['total'];
        return $data;
    }
}