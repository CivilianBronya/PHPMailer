<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to_email = $_POST['to_email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        // 服务器设置
        $mail->SMTPDebug = 0;                                       // 关闭调试输出
        $mail->isSMTP();                                            // 使用SMTP
        $mail->Host       = 'smtp.office365.com';                   // SMTP服务器
        $mail->SMTPAuth   = true;                                   // 启用SMTP认证
        $mail->Username   = 'your_email@outlook.com';               // SMTP用户名
        $mail->Password   = 'your_password';                        // SMTP密码
        $mail->SMTPSecure = 'tls';                                  // 启用TLS加密，ssl也接受
        $mail->Port       = 587;                                    // 端口号

        // 收件人设置
        $mail->setFrom('your_email@outlook.com', '发件人姓名');
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
?>
<?php
