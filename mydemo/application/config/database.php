<?php
return array(
    /*
     * 数据库操作配置
     */
    'DATABASE_FILTER_SQL_KEYWORDS' => 1, //是否过滤指定的SQL关键字
    'DATABASE_LIMIT_CONNECT_TIMES' => 3, //连接数据库失败尝试次数

    /*
     * 数据库连接配置
     * 如果是大型分布式数据库，请配置回调函数动态生成配置
     */
    'DATABASE' => array(
        //默认服务器
        'defaults' => array(
            'type' 		=> 'mysql', //数据库类型
            'host' 		=> '127.0.0.1', //数据库服务器主机和端口，默认端口可以省略
            'username' 	=> 'root', //数据库用户名
            'password' 	=> 'root', //数据库用户密码
            'name' 		=> 'db_guestbook', //数据库名称
            'charset' 	=> 'utf8', //数据库编码，如果是utf8不要写成utf-8
            'prefix' 	=> '', //表名前缀
            'keywords'  => array(), //要过滤的SQL关键字
        )
    )
);
