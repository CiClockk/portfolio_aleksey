<?php
  $conn = @new mysqli("localhost", "root", "mysql", "user");
  if (mysqli_connect_errno()) {
    die("Ошибка: " . mysqli_connect_error());
  };