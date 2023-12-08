<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEMUNA CHEFI</title>
    <link rel="stylesheet" href="css/confirm_applicant.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- css -->
    <style>
                * {
            box-sizing: border-box;
        }
        
        body {
            
            font-family: Arial, Helvetica, sans-serif;
        }
        
        /* Float four columns side by side */
        .column {
            float: left;
            width: 25%;
            padding: 0 10px;
        }
        
        /* Remove extra left and right margins, due to padding */
        .row {margin: 0 -5px;
        margin: 2%;}
        
        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        
        /* Responsive columns */
        @media screen and (max-width: 600px) {
            .column {
            width: 100%;
            display: block;
            margin-bottom: 20px;
            }
        }
        
        /* Style the counter cards */
        .card {
            margin-right: -235%;
            margin-left: 100%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 16px;
            text-align: center;
            background-color: #f1f1f1;
        }

        .button-container {
            display: flex;
            flex-direction: column; /* จัดปุ่มให้อยู่ในแนวตั้ง */
            align-items: center; /* จัดให้ปุ่มอยู่ตรงกลางแนวนอน */
            margin-top: 10px; /* ระยะห่างด้านบน */
        }

        .edit-button {
            background-color: yellow; /* สีของปุ่มแก้ไข */
            padding: 8px 16px;
            text-decoration: none;
            color: black;
            border-radius: 5px;
            margin-bottom: 5px; /* ระยะห่างด้านล่างของปุ่ม */
        }

        .delete-button {
            background-color: red; /* สีของปุ่มลบ */
            padding: 8px 16px;
            text-decoration: none;
            color: white;
            border-radius: 5px;
        }

        /* ปรับสไตล์ของปุ่ม "เพิ่มข้อมูล" */
        .add-data-btn {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-left: 750px;
        }

        .add-data-btn:hover {
            background-color: #0056b3;
        }

    </style>
</head>
<body>
<?php 
       include 'header.php';//ดึง header มาแสดง
    ?>
    <div>
        <div class="text">
            <h1>ยืนยันการสมัครหลักสูตร</h1>
        </div>
        <div class="insert-buttom">
            <button class="add-data-btn">เพิ่มข้อมูล</button>
        </div>
    </div>
    <div class="row">
    <div class="column">
        <div class="card">
            <h3>ข้อมูลผู้สมัคร</h3>
            <p>รายละเอียด</p>
            <p>รายละเอียด</p>
            <div class="button-container">
                <a href="#" class="edit-button">แก้ไข</a>
                <a href="#" class="delete-button">ลบ</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>