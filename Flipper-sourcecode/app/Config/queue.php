<?php
/**
 * 队列配置文件
 * 用于配置异步任务处理
 */
return array(
	'Queue' => array(
		'default' => array(
			'engine' => 'Redis',  // 队列引擎类型
			'host' => 'localhost',  // Redis服务器地址
			'port' => 6379,  // Redis端口
			'timeout' => 30  // 连接超时时间（秒）
		)
	)
);
