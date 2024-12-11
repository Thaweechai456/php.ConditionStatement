<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำนวณค่า BMI</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to bottom, #ff6f61, #ff8a75);
            color: #333;
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
            max-width: 400px;
            padding: 40px;
            box-sizing: border-box;
            text-align: center;
            border: 3px solid #ff6f61;
        }

        h1 {
            font-size: 24px;
            color: #ff3e30;
            margin-bottom: 25px;
        }

        label {
            font-size: 14px;
            color: #555;
            margin-bottom: 8px;
            display: block;
            text-align: left;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            margin: 8px 0 16px 0;
            border: 2px solid #ff8a75;
            border-radius: 12px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus {
            border-color: #ff3e30;
        }

        input[type="submit"], input[type="reset"] {
            background: #ff6f61;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            cursor: pointer;
            width: 48%;
            margin: 10px 1%;
            transition: background 0.3s ease-in-out;
        }

        input[type="submit"]:hover, input[type="reset"]:hover {
            background: #ff3e30;
        }

        .reset-btn {
            background: #ffb3aa;
        }

        .reset-btn:hover {
            background: #ff6f61;
        }

        .form-footer {
            margin-top: 20px;
            font-size: 13px;
            color: #777;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>คำนวณค่า BMI</h1>

    <form action="bmi.php" method="POST">
        <label for="firstname">ชื่อ</label>
        <input type="text" name="firstname" id="firstname" placeholder="กรอกชื่อ" required>

        <label for="lastname">นามสกุล</label>
        <input type="text" name="lastname" id="lastname" placeholder="กรอกนามสกุล" required>

        <label for="age">อายุ</label>
        <input type="text" name="age" id="age" placeholder="กรอกอายุ" required>

        <label for="weight">น้ำหนัก (kg)</label>
        <input type="text" name="weight" id="weight" placeholder="กรอกน้ำหนัก" required>

        <label for="height">ส่วนสูง (cm)</label>
        <input type="text" name="height" id="height" placeholder="กรอกส่วนสูง" required>

        <input type="submit" value="คำนวณ BMI">
        <input type="reset" value="รีเซ็ต" class="reset-btn">
    </form>
    
    <div class="form-footer">
        <p>กรุณากรอกข้อมูลให้ครบถ้วน</p>
    </div>
</div>

</body>
</html>