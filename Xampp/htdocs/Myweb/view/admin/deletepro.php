<?php
    include 'connect.php';
    $MaSP = $_GET['MaSP'];
    $sql = "DELETE FROM product WHERE 'MaSP' = '$MaSP'";

    $query = mysqli_query($conn, $sql);
    header('location: pro.php');
?>