<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEMUNA CHEFI</title>
    <link rel="stylesheet" href="css/course.css">

    <!-- <link href="../image/profile.jpg" rel="icon">
    <link href="../image/profile.jpg" rel="apple-touch-icon"> -->

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
<?php 
       include 'header.php';//ดึง header มาแสดง
    ?>
    <div>
        <div class="text"><h1>จัดการข้อมูลหลักสูตรระยะสั้น</h1></div>
    </div>

<div class="col-md-6 text-md-end">
    <a href="#" class="btn btn-success my-3 me-3"><i class="fas fa-user-plus"></i> เพิ่มข้อมูล </a>
</div>
</div>
</div>
</div><br>
    <div class="col-sm-12">
        <div class="p-3 border bg-light mx-auto"> <!-- Added 'mx-auto' class to center the table -->
            <table class="table table-bordered table-sm table-dark">
                <thead>
                    <tr align="center">
                        <th>รหัส</th>
                        <th>ชื่อ-สกุล</th>
                        <th>เพศ</th>
                        <th>วันเกิด</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>อีเมล</th>
                        <th>เครื่องมือ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Hi Sugar</td>
                        <td>หญิง</td>
                        <td>26-5-2566</td>
                        <td>098675895</td>
                        <td>john@example.com</td>
                        <td align="center">
                            <button type="button" class="btn btn-danger ms-2">ลบข้อมูล</button>
                            <button type="button" class="btn btn-warning ms-2">แก้ไข</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>



    
    <!-- <div class="search-container">
        <input type="text" placeholder="Search...">
        <button type="submit">Search</button>
    </div> -->
</body>
</html>