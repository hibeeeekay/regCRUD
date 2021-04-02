<?php

session_start();
require 'config/db.php';

$errors = array();
$Firstname = '';
$Lastname = '';
$Email = '';
$Number = '';

//if users clicks on the signup button
if(isset($_POST['signup-btn'])){
    $Firstname = $_POST['firstname'];
    $Lastname =  $_POST['lastname'];
    $Email =  $_POST['email'];
    $Number =  $_POST['number'];
    $Password =  $_POST['password'];
    $PasswordConf =  $_POST['password-conf'];

   //validation
   if(empty($Firstname)){
    $errors['firstname'] = "firstname required";
  }
  if(empty($Lastname)){
    $errors['lastname'] = "lastname required";
  }
  if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
    $errors['email'] = "Email address is invalid";
  }
  if(empty($email)){
    $errors['email'] = "email required";
  }
  if(empty($Number)){
    $errors['Number'] = "number required";
  }
  if(empty($Password)){
    $errors['password'] = "firstname required";
  }

  if($Password !== $PasswordConf){
    $errors['password'] = "The two password do not match";
  }


    //To know if users did not signup with the same email
    $emailQuery = "SELECT * FROM user WHERE email=? LIMIT 1";
    $stmt = $conn->prepare($emailQuery);
    $stmt->bind_param('s', $Email);
    $stmt->execute();
    $result = $stmt->get_result();
    $userCount = $result->num_rows;
    $stmt->close();

    if ($userCount > 0) {
      $errors['email'] = "email already exist";
    }

    //Encryption of password
    if(count($errors) === 0){
      $password = password_hash($Password, PASSWORD_DEFAULT);
      $token = bin2hex(random_bytes(50));
      $verified = false;

      $sql ="INSERT INTO user (Firstname, Lastname, Email, Number, Verified, Token, Password) VALUES (?, ?, ?, ?, ?, ?, ?)";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param('ssssbss',$Firstname, $Lastname, $Email, $Number, $Verified, $Token, $Password );
      
      if ($stmt->execute()) {
         //login
      $user_id = $conn->insert_id;
      $_SESSION['id'] = $user_id;
      $_SESSION['Firstname'] = $Firstname;
      $_SESSION['Lastname'] = $Lastname;
      $_SESSION['Email'] = $Email;
      $_SESSION['Number'] = $Number;
      $_SESSION['Verified'] = $Verified;
      //Set flash message
      $_SESSION['message'] = "You are now logged in!";
      $_SESSION['alert_class'] = "alert-success";
      header('location: index.php');
      exit();
      } else{
        $errors['db_error'] = "Database error: failed to register";
      }
    }
}