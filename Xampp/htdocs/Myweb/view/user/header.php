<?php
    include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
        crossorigin="anonymous">
    <style>
        header {
            /* background-color: rgb(237, 237, 244); */
            background-image: url("view/img/bg.jpg");
            color: rgba(0, 0, 0, 0.684);
            padding: 8px;
            text-align: center;
        }
        .hea {
            display: flex;
        }
        .nav {
            justify-content: center;
            background-color: rgb(202, 223, 223);
            font-weight: 700;
        }
        .list-nav {
            display: flex;
            list-style: none;
        }
        .nav-item {
            padding: 6px;
        }
        .m1 {
            color: black;
            font-size: 2.4ch;
            padding: 3px;
        }
        .csearch {
            margin: auto;
            width: 35%;
            padding: 10px;
        }
        .im1 img {
            
        }
        .im1 {
            padding: 30px;
            flex: 1;
            height: 80%;
            filter: drop-shadow(0 0 3px blue);
            border-radius:50%;
            -moz-border-radius:50%;
            -webkit-border-radius:50%
        }
        .he1 {
            flex: 4;
            /* margin-top: ; */
            padding: 15px;
        }
        h1 {
            font-size: 1.4ch;
        }
    </style>
</head>

<body>
    <header >
       
        <div class="hea container">
                <div class="he1">
                    <h1><b>Hello, MoTusts!!!!!!!</b> </h1> 
                </div>
        </div>
    </header>
    <div class="nav">
        <ul class="list-nav">
            <li class="nav-item">
                <a class="m1" href="index.php">Trang chủ</a>
            </li>
            <li class="nav-item">
                <a class="m1" href="hangxe.php">Hãng xe</a>
            </li>
            <li class="nav-item">
                <a class="m1" href="thongtincuahang.php"">Thông tin cửa hàng</a>
            </li>
            <li class="nav-item">
                <a class="m1" href="thongtinlienhe.php">Thông tin liên hệ</a>
            </li>
            
        </ul>
    </div>

    <div class="container d-flex">
        <div class="p-3">
            <button class="btn btn-info">
            <a href="login_user.php">Đăng nhập</a></button>
            <button class="btn btn-info">Đăng xuất
            <a href="login.php"></a></button>
        </div>
        <div class="csearch">
            <form class="d-flex" role="search" action="search.php" method="POST">
                <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit" name="submit">Search</button>
            </form> 
        </div>
    </div>

    <div>
        
        
    </div>
</body>
</html>