<?php
/*
 * ----------------------------------------------------------------------------
 * 开发级配置-事件处理器中间件
 * ----------------------------------------------------------------------------
 */

return array(
    /**
     * 资源获取事件
     */
    'RESOURCE' => array(
        /*
         * 运行环境配置
         */
        'env' => array(
            'getEnv' => '', //获取环境类型回调
        ),

        /*
         * 请求处理
         */
        'request' => array(
            'afterGetMethod' => '', //获取请求方法后回调
        ),

        /*
         * URL处理
         */
        'url' => array(
            'parseUrlParams' => '', //解析URL参数时回调。为空时默认为Ocara\Handlers\UrlHandler的parseQueryParams()
            'createUrl' => '', //新建URL时回调。为空时默认为Ocara\Handlers\UrlHandler的createUrl()
            'appendQueryParams' => '', //追加URL参数时回调。为空时默认为Ocara\Handlers\UrlHandler的appendQueryParams()
        ),

        /*
         * ROUTE处理
         */
        'route' => array(
            'afterGetRoute' => '', //获取控制器路由后回调，为空时默认为Ocara\Handlers\RouteHandler的afterGetRoute()
        ),

        /*
         * 表单使用
         */
        'form' => array(
            'generateToken' => '', //表单令牌加密处理回调
        ),

        /*
         * 数据库相关
         */
        'database' => array(
            'getConfig' => '', //获取数据库配置回调
        ),

        /*
         * 缓存相关
         */
        'cache' => array(
            'getConfig' => '', //获取缓存配置回调
        ),
    )
);