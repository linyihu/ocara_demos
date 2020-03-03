<?php
namespace app\modules\admin\controller;

use Base\Controller\CommonController;

class AdminModule extends CommonController
{
	/**
	 * 初始化模块
	 */
	public function __module()
	{
        $this->setLayout('admin');
    }
}