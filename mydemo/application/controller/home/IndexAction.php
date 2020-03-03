<?php
namespace app\controller\home;

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
	{}

	/**
	 * GET输出
	 */
	public function display()
	{
	    $this->response->setBody('Hello World!');
	    $this->response->send();
    }

	/**
	 * 提交后处理
	 */
	public function submit()
	{}

	/**
	 * Ajax处理
	 */
	public function api()
	{}
}