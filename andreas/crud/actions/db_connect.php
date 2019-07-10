<?php

  define('DBHOST', '127.0.0.1');
  define('DBUSER', 'root');
  define('DBPW', '');
  define('DBNAME', 'cr09_andreas_harasztosi_carrental');

  // create connection
  $connect = new mysqli(DBHOST, DBUSER, DBPW, DBNAME);

  // check connection
  if($connect->connect_error) {
      die("connection failed: " . $connect->connect_error);
  }
