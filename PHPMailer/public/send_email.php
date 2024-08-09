<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../src/Exception.php';
require '../src/PHPMailer.php';
require '../src/SMTP.php';

// 加载配置
$config = require '../config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to_email = $_POST['to_email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        // 服务器设置
        $mail->SMTPDebug = 0;                                       // 关闭调试输出
        $mail->isSMTP();                                            // 使用SMTP
        $mail->Host       = $config['smtp_host'];                   // SMTP服务器
        $mail->SMTPAuth   = $config['smtp_auth'];                   // 启用SMTP认证
        $mail->Username   = $config['smtp_username'];               // SMTP用户名
        $mail->Password   = $config['smtp_password'];               // SMTP密码
        $mail->SMTPSecure = $config['smtp_secure'];                 // 启用TLS加密
        $mail->Port       = $config['smtp_port'];                   // 端口号

        // 收件人设置
        $mail->setFrom($config['from_email'], $config['from_name']);
        $mail->addAddress($to_email);                               // 添加收件人

        // 内容
        $mail->isHTML(true);                                        // 设置邮件格式为HTML
        $mail->Subject = $subject;
        $mail->Body    = nl2br($message);                           // 将换行符转换为<br>标签
        $mail->AltBody = strip_tags($message);                      // 纯文本版本

        $mail->send();
        echo '邮件发送成功';
    } catch (Exception $e) {
        echo "邮件发送失败: {$mail->ErrorInfo}";
    }
} else {
    echo "非法访问";
}
?>
