<?php
  require_once "connection.php";
  
  if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $password = $_POST["password"];

    print($name);
    print($password);

    $q = $conn->query("INSERT INTO users (name, password) VALUES('$name', '$password')");

    if($q){
      echo "<script>alert('Account Created')</script>";
    } else {
      echo "Error :". $conn->error;
    }
  } 
  echo "<script>window.location.href='index.php'</script>";

?>
