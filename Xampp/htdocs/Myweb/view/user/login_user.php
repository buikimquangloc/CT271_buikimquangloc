<?php

    include "connect.php";
    session_start();

    if(isset($_POST['dangnhap'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM customer where username = '$username' and password = '$password'";
        $result = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result) == 1) {
          $_SESSION['username'] = $username;
            header("Location: index.php");
        } else {
            $mess = "Bạn  nhập sai tên hoặc mật khẩu!!!";
            echo "<script>alert('$mess');</script>";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Đăng nhập</title>
  <style>
    body {
      padding: 3rem;
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
      text-align: center;
    }
    label {
      display: block;
      margin: 10px;
    }
    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    button {
      padding: 12px;
      background-color: #367738;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
      width: 150px;
    }
    button:hover {
      background-color: #45a049;
    }
    .log {
        display: flex;
        justify-content: center;
        vertical-align: middle;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Đăng nhập</h2>
    <form action="login_user.php" method="post">
      <label for="username">Tên đăng nhập:</label>
      <input type="text" id="username" name="username" required>
      <label for="password">Mật khẩu:</label>
      <input type="password" id="password" name="password" required>
      <button type="submit">Đăng nhập</button>
      <div class="log">
        <p>Bạn chưa đăng ký tài khoản? <a href="sign_up_user.php">Hãy Đăng Ký!</a>
        </p>
      </div>
    </form>
  </div>
</body>
</html>