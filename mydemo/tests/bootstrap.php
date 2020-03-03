<?php
/**
 * 单元测试启动文件
 */
use Ocara\Core\Ocara;

//程序执行开始时间
define('OC_EXECUTE_START_TIME', microtime(true));

//定义根目录
define('OC_ROOT', dirname(__DIR__));

/**
 * 加载框架
 * 请修改和确定以下路径
 */
require(dirname(dirname(__DIR__)) . '../gaoshou_api/vendor/linyihu/ocara/system/library/Core/Ocara.php');
//require_once OC_ROOT . '/vendor/autoload.php';

Ocara::start('Ocara\Bootstraps\Tests');