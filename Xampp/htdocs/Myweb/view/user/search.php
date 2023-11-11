<?php
    include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <title>Cửa Hàng MoTusts</title>
    <style>
        .product {
            margin: 10px;
            width: 15rem;
            height: 20rem;
            border: 1px;
        }

        .product-img {
            width: 100%;
            height: 192px;
            border-radius: 0.125rem;
            top: 0;
            left: 0;
        }

        .product-info {
            padding: 8px;

        }

        .product-name {
            align-items: center;
            line-height: 3rem;
            font-size: 1.5rem;
        }

        .product-price {
            align-items: center;
            line-height: 3rem;
            font-size: 1.2rem;
            font-weight: bold;
        }
     </style>
</head>
<body>
    <?php include "header.php"; ?>


    <?php

        

        if (isset($_POST['submit'])){
            $noidung = $_POST['search'];
        } else {
            $noidung = false;
        }

        $sql = "SELECT * from product where TenSP like '%$noidung%'";
        $result = mysqli_query($conn, $sql);



        while ($row = mysqli_fetch_array($result)) { ?>

        <?php echo $row['TenSP'];?>
            <div class="product-item" id="tui-5">
                <div class="product shadow bg-body">
                    <div class="product-img">
                        <?php echo $row['image'];?>
                    </div>

                    <div class="product-info">
                        <div class="product-name"> <?php echo $row['TenSP']; ?> </div>
                        <div class="product-price"> <?php echo $row['gia']; ?> </div>
                    </div>
                </div>
            </div>
        <?php } ?>
      <br>

    <?php include "footer.php"; ?>
</body>
</html>