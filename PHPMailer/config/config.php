<?php
return [
    'smtp_host' => 'smtp.office365.com',   // SMTP服务器
    'smtp_auth' => true,                   // 启用SMTP认证
    'smtp_username' => 'your_email@outlook.com', // SMTP用户名
    'smtp_password' => 'your_password',    // SMTP密码
    'smtp_secure' => 'tls',                // 启用TLS加密，ssl也接受
    'smtp_port' => 587,                    // 端口号
    'from_email' => 'your_email@outlook.com', // 发件人邮箱
    'from_name' => '发件人姓名',            // 发件人姓名
];
