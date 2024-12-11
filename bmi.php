<!-- หน้าผลลัพธ์ -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลลัพธ์การคำนวณ BMI</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #ff6f61, #ff8a75);
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 450px;
            padding: 40px;
            box-sizing: border-box;
            text-align: center;
        }

        h1 {
            color: #ff3e30;
            font-size: 22px;
            margin-bottom: 20px;
        }

        .result {
            font-size: 20px;
            font-weight: bold;
            margin: 15px 0;
            color: #ff6f61;
        }

        .category {
            font-size: 16px;
            font-weight: normal;
            color: #ff3e30;
        }

        .back-link {
            margin-top: 20px;
            font-size: 16px;
            text-decoration: none;
            color: #fff;
            background: #ff6f61;
            padding: 10px 20px;
            border-radius: 12px;
            transition: background 0.3s ease;
        }

        .back-link:hover {
            background: #ff3e30;
        }
    </style>
</head>
<body>

<div class="container">
<h1>ผลลัพธ์การคำนวณ BMI</h1>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];

    $heightInMeters = $height / 100;
    $bmi = $weight / ($heightInMeters * $heightInMeters);

    echo "<div class='result'>";
    echo "<p>ชื่อ: $firstname $lastname</p>";
    echo "<p>อายุ: $age ปี</p>";
    echo "<p>น้ำหนัก: $weight กิโลกรัม</p>";
    echo "<p>ส่วนสูง: $height เซนติเมตร</p>";
    echo "<p>BMI: " . number_format($bmi, 2) . "</p>";

    if ($bmi < 18.5) {
        echo "<p class='category'>ผลการประเมิน: น้ำหนักน้อยกว่ามาตรฐาน</p>";
    } elseif ($bmi >= 18.5 && $bmi < 24.9) {
        echo "<p class='category'>ผลการประเมิน: น้ำหนักปกติ</p>";
    } elseif ($bmi >= 25 && $bmi < 29.9) {
        echo "<p class='category'>ผลการประเมิน: น้ำหนักเกิน</p>";
    } else {
        echo "<p class='category'>ผลการประเมิน: โรคอ้วน</p>";
    }

    echo "</div>";
} else {
    echo "<p>กรุณากรอกข้อมูลในฟอร์มเพื่อคำนวณ BMI</p>";
}
?>

    <a href="bmi_form.php" class="back-link">กลับไปหน้าคำนวณ BMI</a>
</div>

</body>
</html>