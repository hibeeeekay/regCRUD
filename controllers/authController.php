<?php

$errors = array();
$Firstname = '';
$Lastname = '';
$Email = '';
$Number = '',

//if users clicks on the signup button
if(isset($_POST)){
    $Firstname = $_POST['Firstname'];
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
    if(empty($Email)){
      $errors['email'] = "email required";
    }
    if(empty($Number)){
      $errors['Number'] = "number required";
    }
    if(empty($Password)){
      $errors['password'] = "firstname            required";
    }
}