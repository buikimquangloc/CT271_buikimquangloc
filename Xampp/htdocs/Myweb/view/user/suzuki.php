<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <title>Cửa Hàng MoTust</title>
</head>
<body>
    <?php include_once "header.php"; ?>

    <h2 class="text-center">Cửa hàng xe máy MoTusts</h2>

    <div class="container">
        <br>
        <div class="row p-2">
           <div class="row col-6 p-3">
             <div class="text-center">
                <img class="mb-2" src="/Myweb/view/img/honda1.png" alt="" width="200px" high="200px">
                <a href="honda.php"><h2>XE HONDA</h2></a>
             </div>
           </div>
           <div class="row col-6 p-3">
             <div class="text-center">
                <img class="mb-2" src="/Myweb/view/img/su.png" alt="" width="200px" high="200px">
                <a href="suzuki.php"><h2>XE SUZUKI</h2></a>
             </div>
           </div>
           <div class="row col-12">
             <div class="text-center">
                <img class="mb-2" src="/Myweb/view/img/yamaha.jpg" alt="" width="200px" high="200px">
                <a href="yamaha.php"><h2>XE YAMAHA</h2></a>
             </div>
           </div>
        </div>
        <br> <br>
    </div>

    <?php include_once "footer.php"; ?>
</body>
</html>