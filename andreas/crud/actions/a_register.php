<?php

  require_once 'db_connect.php';

  if ($_POST) {
    $name = htmlspecialchars(strip_tags(trim($_POST['email'])));
    $pass = htmlspecialchars(
              strip_tags(
                trim($_POST['pass'])
              )
            );

    //basic email validation
  if ( !filter_var($name, FILTER_VALIDATE_EMAIL) ) {
      $error = true;
      $errMSG = "Please enter a valid email address." ;
     } else {
      // checks whether the email/user name exists or not
      $query = "SELECT userName FROM user WHERE userName = '$name'";
      $result = mysqli_query($connect, $query);
      $count = mysqli_num_rows($result);
      if($count != 0){
       $error = true;
       $errMSG = "Username (Emailaddress: $name) already exists.";
      }
     }
  }

  // password validation
  if (empty($pass)) {
    $error = true;
    $errMSG = "Please enter password.";
  } else if(strlen($pass) < 2) {
    $error = true;
    $errMSG = "Password must have atleast 6 characters." ;
  }

  $pw = password_hash($pass, PASSWORD_DEFAULT);

  // if there's no error, continue to signup
 if(!$error) {

  echo $query = "INSERT INTO user(userName, userPW) VALUES('$name','$pw')";
  $res = mysqli_query($connect, $query);

  if ($res) {
  echo "success";
  } else  {
   echo "error";
  }

 }
 mysqli_close($connect);
