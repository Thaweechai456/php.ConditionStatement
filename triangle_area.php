<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงผลการคำนวณพื้นที่รูปเรขาคณิต</title>
</head>
<body>
    <h1>พื้นที่รูปสามเหลี่ยม</h1>
    <?php
        $height = $_POST['height'];
        $width = $_POST['width'];
        $area = 0.5*$height*$width;
        echo "<h3>รูปสามเหลี่ยมที่มีความสูง $height และความยาวฐาน $width </h3>";
        echo "<br><br>";
        echo "<h3>คำนวณพื้นที่ได้ $area ตารางหน่วย </h3>";
    ?>
</body>
</html>