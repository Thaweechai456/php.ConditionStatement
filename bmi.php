<?php
// ฟังก์ชันคำนวณ BMI
function calculateBMI($weight, $height) {
    $heightInMeters = $height / 100; // แปลงความสูงเป็นเมตร
    return $weight / ($heightInMeters * $heightInMeters);
}

// ฟังก์ชันแปลผล BMI และคำแนะนำ
function interpretBMI($bmi) {
    if ($bmi < 18.5) {
        return ["น้ำหนักน้อยกว่ามาตรฐาน", "ควรรับประทานอาหารที่มีประโยชน์ให้มากขึ้นและปรึกษาแพทย์หากจำเป็น"];
    } elseif ($bmi >= 18.5 && $bmi < 24.9) {
        return ["น้ำหนักปกติ", "ควรรักษาน้ำหนักและออกกำลังกายอย่างสม่ำเสมอ"];
    } elseif ($bmi >= 25 && $bmi < 29.9) {
        return ["น้ำหนักเกิน", "ควรควบคุมอาหาร ออกกำลังกาย และปรึกษาแพทย์เพื่อคำแนะนำเพิ่มเติม"];
    } else {
        return ["โรคอ้วน", "ควรรีบปรึกษาแพทย์และเริ่มแผนการควบคุมน้ำหนักอย่างเหมาะสม"];
    }
}

?>

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

        // เรียกใช้ฟังก์ชันคำนวณ BMI
        $bmi = calculateBMI($weight, $height);

        // เรียกใช้ฟังก์ชันแปลผล BMI
        list($bmiResult, $bmiAdvice) = interpretBMI($bmi);

       // แสดงผลลัพธ์
    echo "<div class='result'>";
    echo "<p>ชื่อ: $firstname $lastname</p>";
    echo "<p>อายุ: $age ปี</p>";
    echo "<p>น้ำหนัก: $weight กิโลกรัม</p>";
    echo "<p>ส่วนสูง: $height เซนติเมตร</p>";
    echo "<p>BMI: " . number_format($bmi, 2) . "</p>";
    echo "<p class='category'>ผลการประเมิน: $bmiResult</p>";
    echo "<p style='color: #777; font-size: 14px;'>คำแนะนำ: $bmiAdvice</p>";
    echo "</div>";
    } else {
        echo "<p>กรุณากรอกข้อมูลในฟอร์มเพื่อคำนวณ BMI</p>";
    }
    ?>

    <a href="bmi_form.php" class="back-link">กลับไปหน้าคำนวณ BMI</a>
</div>
</body>
</html>
