<?php

use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    private $config;

    protected function setUp():
    {
        $this->config = require __DIR__ . '/../config/config.php';
    }

    public function testEmailSending()
    {
        $to_email = 'test@example.com';
        $subject = 'Test Subject';
        $message = 'This is a test message.';

        $mail = new PHPMailer\PHPMailer\PHPMailer(true);

        try {
            // 使用配置文件中的参数
            $mail->isSMTP();
            $mail->Host       = $this->config['smtp_host'];
            $mail->SMTPAuth   = $this->config['smtp_auth'];
            $mail->Username   = $this->config['smtp_username'];
            $mail->Password   = $this->config['smtp_password'];
            $mail->SMTPSecure = $this->config['smtp_secure'];
            $mail->Port       = $this->config['smtp_port'];

            $mail->setFrom($this->config['from_email'], $this->config['from_name']);
            $mail->addAddress($to_email);

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $message;

            $this->assertTrue($mail->send());
        } catch (Exception $e) {
            $this->fail("邮件发送失败: " . $mail->ErrorInfo);
        }
    }
}
