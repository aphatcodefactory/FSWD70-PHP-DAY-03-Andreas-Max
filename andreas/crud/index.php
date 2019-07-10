<?php

  ob_start();
  session_start();
  $sessId = $_SESSION['user'];

  if (isset($sessId) && !empty($sessId)) {
    include_once 'home.php';
  } else {
    require_once 'actions/db_connect.php';
    include_once 'login.php';
  }
