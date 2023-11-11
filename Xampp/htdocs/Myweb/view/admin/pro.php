<?php

    session_start();

    if (!isset($_SESSION['username'])) {
        header('location:loginadmin.php');
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <title>Trang quản lý xe máy</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        .header {
            background-color: #333;
            color: #fff;
            padding: 2px;
            text-align: center;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        
        .vehicle-list {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
        }
        
        .vehicle-card {
            border: 1px solid #ccc;
            padding: 20px;
            text-align: center;
        }
        
        .vehicle-card img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }
        
        .vehicle-card h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }
        
        .vehicle-card p {
            font-size: 14px;
            color: #666;
        }
        
        .add-vehicle-form {
            margin-top: 20px;
        }
        
        .add-vehicle-form input[type="text"],
        .add-vehicle-form input[type="submit"] {
            margin-bottom: 10px;
        }
        .btn {
            flex: 5;
            color: red;
        }
        .bd {
            margin: 3px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Quản lý xe máy</h1>
    </div>
    
    <div class="bd">
        <div class="m-3 ">
            <a href="logout_admin.php"><button class="btn btn-info text-dark">Đăng xuất </button></a>
        </div>
    
        <div class="row">
            <div class="col-3 m-3">
                    <h3>Danh mục</h3>
                    <ul style=" list-style: none;">
                        <li><a href="addpro.php">Thêm sản phẩm</a></li>
                        <li><a href="editpro.php">Chỉnh sửa sản phẩm</a></li>
                        <li><a href="">Xem sản phẩm</a></li>
                        <li><a href="thongke.php">Thống kê số lượng người dùng</a></li>
                    </ul>
            </div>
            
            <div class="row col-8">
               <?php

                

               ?>
            </div>
        </div>
        
    </div>

    
</body>
</html>