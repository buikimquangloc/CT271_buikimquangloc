<?php

    include 'connect.php';
    session_start();

    if (!isset($_SESSION['username'])) {
        header('location:loginadmin.php');
    }
    $sql = "SELECT * FROM product";
    $query = mysqli_query($conn,$sql);
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
            <div class="col-2 m-2">
                    <h3>Danh mục</h3>
                    <ul style=" list-style: none;">
                        <li><a href="addpro.php">Thêm sản phẩm</a></li>
                        <li><a href="editpro.php">Chỉnh sửa sản phẩm</a></li>
                        <li><a href="">Xem sản phẩm</a></li>
                        <li><a href="thongke.php">Thống kê số lượng người dùng</a></li>
                    </ul>
            </div>
            
            <div class="row col-9 m-2">
               <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <h2>Danh sách sản phẩm</h2>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark ">
                                    <tr class="bg-dark text-white">
                                        <th></th>
                                        <th>Mã sản phẩm</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Ảnh sản phẩm</th>
                                        <th>Giá sản phẩm</th>
                                        <th>Số lượng sản phẩm</th>
                                        <th>Thông tin sản phẩm</th>
                                        <th>Sửa</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    while($row = mysqli_fetch_assoc($query)) { ?>
                                        <td><?php echo $i++;?></td>
                                        <td><?php echo $row['MaSP'];?></td>
                                        <td><?php echo $row['TenSP'];?></td>
                                        <td>
                                            <img style="width: 100px" src="/Myweb/view/img/"<?php echo $row['image'];?>" alt="">

                                        </td>
                                        <td><?php echo $row['gia'];?></td>
                                        <td><?php echo $row['soluong'];?></td>
                                        <td><?php echo $row['thongtin'];?></td>
                                        <td><a href="editpro.php"> <?php $row['MaSP'] ?>Sửa</a></td>
                                        <td><a onclick="return Xoa('<?php echo $row['TenSP']?>')" href="deletepro.php"> <?php $row['MaSP'] ?>Xóa</a></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                
               </div>
            </div>
        </div>        
    </div>
    <script>
        function Xoa(TenSP) {
            return confirm("Bạn muốn xóa" + TenSP + "?");
        }
    </script>
</body>
</html>