<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลการคำนวณพื้นที่รูปเรขาคณิต</title>
    <style>
        
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #f8fbff, #e6f0ff);
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            font-size: 28px;
            color: #34495e;
            margin-bottom: 20px;
        }

        h3 {
            font-size: 20px;
            color: #7f8c8d;
            margin-bottom: 10px;
        }

        .result {
            font-size: 24px;
            color: #3498db;
            margin-top: 20px;
            font-weight: bold;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #95a5a6;
        }

        .footer a {
            text-decoration: none;
            color: #3498db;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>พื้นที่รูปสามเหลี่ยม</h1>
        <?php
            if (isset($_POST['height']) && isset($_POST['width'])) {
                $height = floatval($_POST['height']); 
                $width = floatval($_POST['width']); 

               
                if ($height > 0 && $width > 0) {
                    $area = 0.5 * $height * $width;
                    echo "<h3>รูปสามเหลี่ยมที่มี</h3>";
                    echo "<h3>ความสูง: <span class='result'>$height</span> หน่วย</h3>";
                    echo "<h3>ความยาวฐาน: <span class='result'>$width</span> หน่วย</h3>";
                    echo "<div class='result'>พื้นที่: $area ตารางหน่วย</div>";
                } else {
                    echo "<h3 style='color: #e74c3c;'>กรุณากรอกค่าความสูงและความยาวฐานให้ถูกต้อง</h3>";
                }
            } else {
                echo "<h3 style='color: #e74c3c;'>กรุณากรอกค่าผ่านแบบฟอร์ม</h3>";
            }
        ?>
        <div class="footer">
            © 2024 <a href="#">YourBrand</a>. All rights reserved.
        </div>
    </div>
</body>
</html>