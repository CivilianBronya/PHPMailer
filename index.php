<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>发送邮件测试</title>
</head>
<body>
<h1>发送邮件测试</h1>
<form action="PHPMailer/public/send_email.php" method="post">
    <label for="to_email">收件人邮箱:</label>
    <input type="email" id="to_email" name="to_email" required><br><br>

    <label for="subject">主题:</label>
    <input type="text" id="subject" name="subject" required><br><br>

    <label for="message">邮件内容:</label><br>
    <textarea id="message" name="message" rows="10" cols="30" required></textarea><br><br>

    <input type="submit" value="发送邮件">
</form>
</body>
</html>
