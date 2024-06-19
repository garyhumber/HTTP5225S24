<?php
  if(isset($_POST['addSchool'])){
    // print_r($_POST);
    $schoolName = $_POST['schoolName'];
    $schoolLevel = $_POST['schoolLevel'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // Connection string
    include('../reusable/con.php');
    $query = "INSERT INTO schools 
                  (`School Name`, 
                    `School Level`, 
                    `Phone`, 
                    `Email`) 
                  VALUES (
                    '"  . mysqli_real_escape_string($connect, $_POST['schoolName']) . "',
                    '"  . mysqli_real_escape_string($connect, $_POST['schoolLevel']) . "',
                    '"  . mysqli_real_escape_string($connect, $_POST['phone']) . "',
                    '"  . mysqli_real_escape_string($connect, $_POST['email']) . "')";

    $school = mysqli_query($connect, $query);

    if($school){
      header("Location: ../index.php"); 
    }else{
      echo "Failed: " . mysqli_error($connect);
  }
  }else{
    echo "You should not be here!";
  }
?>