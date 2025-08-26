<?php
        $conn = @new mysqli("localhost", "root", "mysql", "students_etnofit");
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
          $hash_check = hash('md5', $pass);
          $hash_check = hash('md5', $email);
          echo $login, " " , $pass;
          if(mysqli_query($conn, "INSERT INTO `students` (`stu_login`, `stud_email`, `stu_pass`) VALUES ('$login', '$email', '$pass')") & mysqli_query($conn, "INSERT INTO `student_info` (`stu_login`, `stu_pass`, `hash`) VALUES ('$login', '$pass', '$hash_check')")){
            echo "Данные успешно добавлены";
          } 
          else{
            echo "Ошибка: " . mysqli_error($conn);
          }
        };
        $conn->close();
      ?>