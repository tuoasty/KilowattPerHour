<?php
  require_once "connection.php";

  $query = "SELECT * FROM users;";
    $result = $conn->query($query);
    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        echo "id : ". $row["id"]. " - Name: ".$row["name"]. " - Password: ". $row["password"]. "<br>";
      }
    } else {
      echo "0 results";
    }

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
