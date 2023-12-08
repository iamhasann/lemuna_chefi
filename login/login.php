<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
</head>

<body>
    <img src="../image/bg.png" alt="Logo" height="650">
    <div class="card">
        <div class="cake">
            <img src="../image/cake.png" alt="Cake" height="100" width="100">
        </div>

        <h1>เข้าสู่ระบบ</h1>
        <p>ยินดีตอนรับเข้าสู่บัญชีผู้ใช้ Lemuna chefi</p>

        <form method="post" action="login_process.php">
            <label for="email">อีเมล:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="password">รหัสผ่าน:</label>
            <input type="password" id="password" name="password" required><br>

            <button type="submit">เข้าสู่ระบบ<a href="#"></a></button>
        </form>
        <p>ไม่มีบัญชี? <a href="../user/register/register.php">สมัคร</a></p>


    </div>

</body>

</html>



