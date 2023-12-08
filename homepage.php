<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <link rel="stylesheet" href="css/header.css">
    <!-- Include your custom CSS file -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="background-color: rgb(237, 243,217);">

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(247, 249,230);">
    <div class="container-fluid">
        <img src="image/bg.png" alt="Logo" height="70">

        <ul class="navbar-nav me-auto ms-5">
            <!-- Add an ID to the button for handling in JavaScript -->
            <li class="nav-item">
            <button type="button" class="btn ms-2" style="border-radius: 8px; background-color: #B6EA75;" onclick="showSection('section2')">จัดการข้อมูลหลักสูตรระยะสั้น</button>
            </li>
            <li class="nav-item">
                <button type="button" class="btn ms-2" style="border-radius: 8px; background-color: #B6EA75;" onclick="showSection('section2')">จัดการประกาศรับสมัครหลักสูตรระยะสั้น</button>
            </li>
            <li class="nav-item">
                <button type="button" class="btn ms-2" style="border-radius: 8px; background-color: #B6EA75;" onclick="showSection('section2')">แสดงข้อมูลผู้สมัครหลักสูตรระยะสั้น</button>
            </li>
            <li class="nav-item">
                <button type="button" class="btn ms-2" style="border-radius: 8px; background-color: #B6EA75;" onclick="showSection('section2')">ยืนยันหลักสูตรระยะสั้น</button>
            </li>
            <li class="nav-item">
                <button type="button" class="btn ms-2" style="border-radius: 8px; background-color: #B6EA75;" onclick="showSection('section2')">จัดการรายชื่อผู้ที่ผ่านการอบรม</button>
            </li>
        
            <li class="conteiner mt-1 ms-5">
            <div class="dropdown">
            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown">
            ผู้ใช้งาน
            </button>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="login/login.php">ออกจากระบบ</a>
            </li>
            <!-- Add more buttons as needed -->
        </ul>
        </div>
        </div>
</nav>

<br><br><br>


    <!-- Section 1 content -->
    <center>
        <h2>หลักสูตรวิชาชีพระยะสั้น(Lemuna Chefi)</h2>
    </center>

    <div class="container mt-4">
        <div class="row">

        <div class="col-md-4">
            <img src="image/sewing.jpg" alt="Image 3" class="text-center ms-4" height="250">
            <br><br>
                <h3 class="text-center">หลักสูตร: การตัดเย็บ</h3>
                <h5 class="text-center ms-2" >ค่าลงทะเบียนเรียน: 250฿</h5>
                <h5 class="text-center ms-2" >สามารถดาวน์โหลดเกียรติบัตรผ่านหลักสูตร</h5>
        </div>

        <div class="col-md-4">
            <img src="image/bakery.jpg" alt="Image 1" class="text-center ms-1" height="250">
            <br><br>
                <h3 class="text-center">หลักสูตร: เบเกอร์รี่</h3>
                <h5 class="text-center ms-2" >ค่าลงทะเบียนเรียน: 200฿</h5>
                <h5 class="text-center ms-2" >สามารถดาวน์โหลดเกียรติบัตรผ่านหลักสูตร</h5>
        </div>
        
        <div class="col-md-4">
            <img src="image/ขนมไทย.webp" alt="Image 1" class="text-center ms-5" height="250">
            <br><br>
                <h3 class="text-center">หลักสูตร: ขนมพื้นบ้าน</h3>
                <h5 class="text-center ms-2" >ค่าลงทะเบียนเรียน: 200฿</h5>
                <h5 class="text-center ms-2" >สามารถดาวน์โหลดเกียรติบัตรผ่านหลักสูตร</h5>
        </div>
        </div>
    </div>
