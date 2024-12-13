<?php
/**
 * 路由配置文件
 * 定义应用程序的URL路由规则
 */

// 设置默认首页路由
Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));

// API路由配置
Router::connect('/api/:controller/:action/*', array(
    'prefix' => 'api'  // API前缀
));

// 后台管理路由
Router::connect('/admin/:controller/:action/*', array(
    'prefix' => 'admin'  // 管理后台前缀
));