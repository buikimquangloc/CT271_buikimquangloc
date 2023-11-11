<?php

    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'motus';

    $conn = new mysqLi($server, $user, $pass, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      echo "";

?>