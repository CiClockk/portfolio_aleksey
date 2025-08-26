<?php
        $conn = @new mysqli("localhost", "root", "mysql", "user");
        if (mysqli_connect_errno()) {
          die("Ошибка: ".mysqli_connect_error());
        };
        echo "Подключение успешно установлено ";
        if (isset($_POST["stud_log_new"]) && isset($_POST["stud_pass_new"]) && isset($_POST["stud_email"])) {
          $login = $conn->real_escape_string($_POST["stud_log_new"]);
          $email = $conn->real_escape_string($_POST["stud_email"]);
          $pass = $conn->real_escape_string($_POST["stud_pass_new"]);
          $pass = hash('md5', $pass);
          $pass = hash('md5', $pass);
          echo $login, " " , $pass;
          if(mysqli_query($conn, "INSERT INTO `user` (`name`, `email`, `password`) VALUES ('$login', '$email', '$pass')")){
            echo "Данные успешно добавлены";
          } 
          else{
            echo "Ошибка: " . mysqli_error($conn);
          }
        };
        $conn->close();
      ?>