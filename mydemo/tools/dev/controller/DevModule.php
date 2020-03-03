<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/12
 * Time: 23:22
 */
namespace app\tools\dev\controller;

use Ocara\Controllers\Common;
use Ocara\Core\ExceptionHandler;

class DevModule extends Common
{
    /**
     * 初始化模块
     */
    public function __module()
    {
        ocContainer()->bindSingleton('fileCache', 'Ocara\Service\FileCache');

        ocService()->exceptionHandler
            ->event(ExceptionHandler::EVENT_BEFORE_OUTPUT)
            ->append(array($this, 'exceptionHandler'));

        defined('OC_MODULE_NAME') OR define('OC_MODULE_NAME', $this->getRoute('module'));

        $this->view
            ->setModuleRootViewPath(OC_EXT . 'resource/tools/develop/view/');

        $this->checkLogin();
    }

    /**
     * 检测登录
     */
    public function checkLogin()
    {
        $isLogin = $this->isLogin();
        $action = $this->getRoute('action');
        $this->view->assign('isLogin', $isLogin);

        if (!$isLogin && !in_array($action, array('login', 'logout', 'error'))) {
            return $this->response->jump('generate/login');
        }
    }

    /**
     * 是否登录
     * @return bool
     */
    public function isLogin()
    {
        return !empty($_SESSION['OC_DEV_LOGIN']);
    }

    /**
     * 异常处理
     * @param $exception
     * @param $event
     * @param $eventTarget
     */
    public function exceptionHandler($exception, $event, $eventTarget)
    {
        if ($this->getRoute('action') != 'error') {
            $this->response->jump('generate/error', array('content' => htmlspecialchars($exception->getMessage())));
        }
    }
}