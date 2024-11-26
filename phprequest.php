<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การใช้ PHP Request        $_REQUEST</title>
</head>
<body>
    <h1>โปรดกรอกชื่อของท่าน</h1>
    <from action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        โปรดกรอกชื่อ : <input type="text" name="fname">
        <input type="submit">
    </from>
    <?php
    if($_SERVER ['REQUEST_METHOD']=='POST'){
        $name = htmlspecialchars($_REQUEST[['fname']]);
        $ma,e = htmlspecialchars ($_POST['fname']);
        if (empty($name)) {
            echo "ชื่อเป็นที่ว่าง";
        } else {
            echo 'ยินดีต้องรับทุกคน'.$name;
        }
    }
    ?>
</body>
</html>