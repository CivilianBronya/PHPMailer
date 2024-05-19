# PHPMailer
![](https://img.shields.io/badge/license-MIT-blue)
![License](https://img.shields.io/badge/license-MIT-yellow) #静态badge图标
![Twitter](https://img.shields.io/twitter/follow/:user? style=social) #采用社交图标
![Language](https://img.shields.io/badge/language-php-brightgreen)
## 简介

- 编写了简单的作用与网站的邮件发送！使用 PHPMailer 库在网页上发送邮件。只需填写表单并点击发送按钮，邮件就会通过 Outlook 的 SMTP 服务器发送出去！

## 功能描述

- 功能：可以利用outlook的邮箱，给自己的网站发布对某人或某群人指定的邮件，也可以自定义格式

## 说明

- SMTP.php 文件目前是一个简化版本，显示了类定义和一些主要方法。
- Exception.php 是用于处理邮件发送过程中可能出现的异常，用于捕捉和处理 PHPMailer 中发生的错误。
- - 安全性：不要在代码中硬编码密码，考虑使用环境变量或安全存储服务来管理敏感信息。
- - 防止滥用：确保修改代码不会被恶意利用来发送垃圾邮件。
- - 错误处理：适当的错误处理可以对可能的连接问题或认证失败，确保使用正常。

通常情况下，你不需要修改这个文件。它是 PHPMailer 库的一部分，当你安装 PHPMailer 时，它已经包含在库中了。

### Markdown 表格

```Markdown
| 头像 | 名字 | 角色 | GitHub |
| ---- | ---- | ---- | ------ |
| ![avatar1](https://github.com/CivilianBronya.png?size=50) | User1 | 项目开发者 | [@username1](https://github.com/CivilianBronya) |
