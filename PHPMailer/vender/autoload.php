<?php
require 'vendor/autoload.php';

// 现在你可以使用由 Composer 管理的库
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
