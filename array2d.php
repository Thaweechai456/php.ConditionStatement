<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 2D</title>
</head>
<body>
    <h1>Array 2D</h1>
    <?php 
    $foods = array(
        array("ตำไทย",22,18),
        array("ตำลาว",15,13),
        array("ตำป่า",5,2),
        array("ตำป่า",17,15),
    );
    echo "<h2>ปริมาณการสั่งซื้อส้มตำ</h2>";
    for ($i=0; $i < 4; $i++) { 
            echo $foods[$i][0]." : จำนวนที่รอปรุง : ".$foods[$i][1]. "จำนวนที่เสร็จแล้ว :".$foods[$i][2];
            echo "<br>\n";

    }
    echo "<hr>";

    echo "<h2>ปริมาณการสั่งซื้อสินค้า</h2>\n";
    for ($i=0; $i < 4; $i++) { 
        for ($j=0; $j <3 ; $j++) { 
            echo $foods [$i] [$j]." ";
        }
        echo "<br>";
    }

    echo "<hr>";
    ?>
</body>
</html>