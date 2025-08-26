<?php
  $conn = @new mysqli("localhost", "root", "mysql", "students_etnofit");
  if (mysqli_connect_errno()) {
    die("Ошибка: " . mysqli_connect_error());
  };
  if (isset($_POST["stud_log"]) && isset($_POST["stud_pass"])) {
    $login = $conn->real_escape_string($_POST["stud_log"]);
    $pass = $conn->real_escape_string($_POST["stud_pass"]);
    $pass = hash('md5', $pass);
    $pass = hash('md5', $pass);
    $result = mysqli_query($conn, "SELECT * FROM `students` WHERE `stu_login` = '$login'");
    $ch_log = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    $check = false;
    do {
      if ($ch_log) {
        $result = mysqli_query($conn, "SELECT * FROM `students` WHERE `stu_pass` = '$pass'");
        $ch_pass = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        if ($ch_pass) {
          $hash_numb = hash('md5', rand(0,10000));
          $httponly = true;
          $expires = time() + 60*60*24*7;
          setcookie("hash_numb", $hash_numb, $expires, "/");
          $result = mysqli_query($conn, "SELECT `hash` FROM `student_info` WHERE `stu_login` = '$login'");
          $hash_ch = mysqli_fetch_assoc($result);
          mysqli_free_result($result);
          setcookie("hash_check", $hash_ch['hash'], $expires, "/");
          $new_url = 'http://localhost/';
          header('Location: '.$new_url);
          exit();
        }      
        else {
          echo "Пароль неверный";
          $check = true;
        }
      }
      else {
        echo "Пользователь не найден";
        $check = true;
      }
    } while ($check == false);
  };