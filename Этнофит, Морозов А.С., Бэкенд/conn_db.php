<?php
  $conn = @new mysqli("localhost", "root", "mysql", "users_managers");
  if (mysqli_connect_errno()) {
    die("Ошибка: " . mysqli_connect_error());
  };