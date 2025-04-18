<?php
  $servername = "localhost";
  $username = "T047";
  $password = "T047KH24-2";
  $db_name = "kilowattperhour";;
  $conn = new mysqli($servername, $username, $password, $db_name);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>
