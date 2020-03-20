<?php
namespace app\controller\guestbook;

use app\service\GuestbookService;

class IndexAction extends Controller
{
	/**
	 * 初始化
	 */
	protected function __action()
	{}

	/**
	 * 表单注册
	 */
	public function registerForms()
	{
        $this->form('form_edit')
             ->init(ocUrl('/guestbook/index'));
    }

	/**
	 * GET输出
	 */
	public function display()
	{
	    $vars = array('title' => '添加留言');
	    $this->assign($vars);
    }

	/**
	 * 提交后处理
	 */
	public function submit()
	{
        $data = $this->request->getPost();
        $this->validator
            ->addRule('telephone', 'notEmpty') //校验联系电话
            ->addRule('content', 'notEmpty') //校验留言内容
            ->validate($data);

        $result = GuestbookService::build()->addRow($data);
        $this->send($result ? 'success' : 'fail');
    }

	/**
	 * Ajax处理
	 */
	public function api()
	{}
}