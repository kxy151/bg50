<?php
/**
 * 数据库配置文件
 * 包含所有数据库连接配置
 */
class DATABASE_CONFIG {
    public $default = array(
        'datasource' => 'Database/Mysql',  // 数据库类型
        'persistent' => false,  // 是否使用持久连接
        'host' => 'localhost',  // 数据库主机
        'login' => 'user',  // 数据库用户名
        'password' => 'password',  // 数据库密码
        'database' => 'database_name',  // 数据库名
        'prefix' => '',  // 表前缀
        'encoding' => 'utf8'  // 数据库编码
    );
}