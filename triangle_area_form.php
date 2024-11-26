<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle Area Calculator</title>
    <style>
       
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #f8fbff, #e6f0ff);
            color: #333;
        }

        
        .container {
            max-width: 400px;
            margin: 50px auto;
            background: #fff;
            padding: 20px 30px;
            border-radius: 12px;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        
        h2 {
            font-size: 24px;
            color: #34495e;
            margin-bottom: 10px;
        }

        h3 {
            font-size: 18px;
            color: #7f8c8d;
            margin-bottom: 20px;
        }

        
        form label {
            font-size: 14px;
            display: block;
            text-align: left;
            margin-bottom: 5px;
            color: #2c3e50;
        }

        form input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        form input[type="submit"],
        form input[type="reset"] {
            width: 48%;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            margin: 5px 1%;
        }

        form input[type="submit"] {
            background-color: #3498db;
            color: #fff;
        }

        form input[type="submit"]:hover {
            background-color: #2980b9;
        }

        form input[type="reset"] {
            background-color: #e74c3c;
            color: #fff;
        }

        form input[type="reset"]:hover {
            background-color: #c0392b;
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
        <h2>Triangle Area Calculator</h2>
        <h3>คำนวณพื้นที่รูปสามเหลี่ยมอย่างง่าย</h3>
        <form action="triangle_area.php" method="post">
            <label for="height">ความสูงของสามเหลี่ยม (หน่วย):</label>
            <input type="text" id="height" name="height" placeholder="กรอกความสูง เช่น 12">
            
            <label for="width">ความยาวฐานของสามเหลี่ยม (หน่วย):</label>
            <input type="text" id="width" name="width" placeholder="กรอกความยาวฐาน เช่น 8">
            
            <div>
                <input type="submit" value="คำนวณ">
                <input type="reset" value="ล้างค่า">
            </div>
        </form>
        <div class="footer">
            © 2024 <a href="#">YourBrand</a>. All rights reserved.
        </div>
    </div>
</body>
</html>