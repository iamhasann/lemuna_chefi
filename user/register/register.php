<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
    <link rel="stylesheet" href="css/register.css">
</head>

    <body>
    <img src="../../image/bg.png" alt="Logo" height="650"> 
        <div class="card">
            <h1>สมัครสมาชิก</h1>
            <form method="post" action="register_process.php">
                <label for="name">ชื่อ - สกุล:</label>
                <input type="text" id="name" name="name" required><br>

                <label for="tel">เบอร์โทรศัพท์:</label>
                <input type="text" id="tel" name="tel" required><br>

                <label for="email">อีเมล:</label>
                <input type="email" id="email" name="email" required><br>

                <label for="password">รหัสผ่าน:</label>
                <input type="password" id="password" name="password" required><br>
                <!-- เพิ่มฟิลด์อื่นๆ ที่ต้องการ -->

                <button type="submit">สมัครสมาชิก</button>
            </form>
        </div>
    </body>
</html>

