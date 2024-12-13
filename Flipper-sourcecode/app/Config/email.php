<?php

/**
 * 邮件配置文件
 * 用于配置邮件发送服务
 */
return array(
    'EmailConfig' => array(
        'default' => array(
            'transport' => 'Mail',  // 邮件传输方式
            'from' => array('site@localhost' => '网站名称'),  // 发件人信息
            'charset' => 'utf-8',  // 字符编码
            'headerCharset' => 'utf-8'  // 邮件头编码
        )
    )
);

