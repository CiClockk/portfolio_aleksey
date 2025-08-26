<?php
    $conn = @new mysqli("localhost", "root", "mysql", "students_etnofit");
    $stud_id = isset($_COOKIE['hash_check']);
    $sql = "SELECT * FROM `student_info` WHERE `hash` = '$stud_id'";
    if (isset($_POST["weight"]) && isset($_POST["height"]) && isset($_POST["body"]) && isset($_POST["arm"]) && isset($_POST["foot"]) && isset($_POST["shoulders"]) && isset($_POST["pelvis"])) {
      $Weight = $_POST["weight"];
      $Height = $_POST["height"];
      $Body = $_POST["body"];
      $Arm = $_POST["arm"];
      $Foot = $_POST["foot"];
      $Shoulders = $_POST["shoulders"];
      $Pelvis = $_POST["pelvis"];
      $InPenie = $Height - ($Weight + $Body);
      $SMT = 'B';
      if ($InPenie < 10) {
        $SMT = 'B';
      }
      else if ($InPenie > 10 & $InPenie < 30){
        $SMT = 'M';
      }
      else {
        $SMT = 'D';
      }
      $IMT = $Weight/pow(($Height/100), 2);
      if(mysqli_query($conn, "UPDATE `student_info` SET `body_lenght` = '$Body', `legs_lenght` = '$Foot', `hands_lenght` = '$Arm', `shoulders_width` = '$Shoulders', `hip_width` = '$Pelvis', `weight` = '$Weight', `height` = '$Height', `somatotype` = '$SMT', `IMT` = '$IMT'")){
        $new_url = '../call/';
        header('Location: '.$new_url);
      } 
      else{
        echo "Ошибка: " . mysqli_error($conn);
      }
    }