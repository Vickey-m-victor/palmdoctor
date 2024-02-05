<?php

use PDO;
$servername = "localhost";
$username = "root";
$password = "toor";


  $con = new PDO("mysql:host=$servername;dbname=mediplus", $username, $password);
  // set the PDO error mode to exception
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
?>