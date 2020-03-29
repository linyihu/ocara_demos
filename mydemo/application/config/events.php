<?php
/*
 * ----------------------------------------------------------------------------
 * 开发级配置-事件处理器中间件
 * ----------------------------------------------------------------------------
 */

return array(
    'EVENTS' => array(
        /*
         * 应用启动事件
         */
        'bootstrap' => array(
            //应用启动前回调
            'beforeBootstrap' => array(),
        ),

        /*
         * 路由分发事件
         */
        'dispatch' => array(
            //路由分发前回调
            'beforeDispatch' => array(),

            //路由分发后回调
            'afterDispatch' => array(),
        ),

        /*
         * 错误输出事件
         */
        'error' => array(
            //日志打印回调
            'report' => array(),

            //打印错误前回调
            'beforeOutput' => array(),

            //打印错误回调
            'output' => array(),

            //打印错误后回调
            'afterOutput' => array(),
        ),

        /*
         * 数据库相关事件
         */
        'database' => array(
            //执行SQL语句前回调，适合于写SQL语句日志
            'beforeExecuteSql' => array(),

            //执行SQL语句后回调，适合于写SQL执行结果日志
            'afterExecuteSql' => array(),
        ),

        /*
         * 安全过滤事件
         */
        'filters' => array(
            //SQL关键字过滤回调，必须返回值
            'sqlKeywordsFilter' => array(),

            //前端脚本关键字过滤回调，必须返回值
            'scriptKeywordsFilter' => array(),
        ),

        /*
         * 数据模型Model相关事件
         */
        'model' => array(),
    )
);