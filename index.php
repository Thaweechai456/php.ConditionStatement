<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>การใช้คำสั่งแบบ Condition (กลุ่มคำสั่ง if)</h1>
    <?php
    echo "<h2?>คำสั่ง if</h2><br><br>";
    $x = 5;
    $y = 8;
    echo "\$x = $x<br>";
    echo "\$y = $y<br>";
    if($x<$y){
        echo "ค่าในตัวแปร x น้อยกว่าค่าในตัวแปร y<br>";
    }
    else{
        echo "ค่าในตัวแปร x น้อยกว่าค่าในตัวแปร x<br>";
    }
    echo "----------------------------------------------------";
    echo "<h2>Short hand if</h2>" ;
    $score = 55;
    if ($score >= 50) echo "ขอแสดงความยินดีคุณสอบผ่าน";
    echo "<br>";
    $result = $score>=50 ? "ได้เรกด P": "ได้เกรด F";
    echo "<br>";
    echo "ผลการเรียนของคุณ".$result;
    echo "<br>";
    echo "----------------------------------------------------";
    ?>
</body>
</html>