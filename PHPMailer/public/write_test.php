<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $test_code = $_POST['test_code'];

    // 将用户编写的测试代码保存到 PHPUnit.php
    $file = __DIR__ . '/../tests/UserTest.php';
    file_put_contents($file, $test_code);

    echo "测试用例保存成功!";
} else {
    // 显示一个表单，允许用户编写测试代码
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>编写测试用例</title>
    </head>
    <body>
    <form action="write_test.php" method="POST">
        <h3>编写你的测试用例:</h3>
        <textarea name="test_code" rows="20" cols="100"></textarea><br>
        <input type="submit" value="保存测试用例">
    </form>
    </body>
    </html>
    <?php
}
?>
