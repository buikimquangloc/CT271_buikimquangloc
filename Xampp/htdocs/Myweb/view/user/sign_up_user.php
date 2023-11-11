<?php
include "connect.php";
    if (isset($_POST['username'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $rpassword = $_POST['rpassword'];

        $sql = "insert into customer (username, email, password) values('$username', '$email', '$password)";
        $query = mysqli_query($conn, $sql);
    }
?>


<!DOCTYPE html>
<html>
<head>
    <title>Đăng ký tài khoản</title>
    <style>
        body {
            padding: 3rem;
            font-family: Arial, sans-serif;
            /* background-color: #f2f2f2;   */
            background-image: url("");
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
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin: 10px;
        }
        input {
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
        <h2>Đăng ký tài khoản</h2>
        <form>
            <div class="form-group">
                <label for="username">Tên đăng nhập:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="password">Nhập lại mật khẩu:</label>
                <input type="password" id="password" name="rpassword" required>
            </div>
            <div class="form-group">
                <button type="submit">Đăng ký</button>
            </div>
        </form>
    </div>
</body>
</html>