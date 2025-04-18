<?php
  require_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Create Account</h1>
  <form method="post" action="create.php">
    <input type="text" name="name" placeholder="Name">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="submit" value="Create Account">
  </form>

  <?php
    $query = "SELECT * FROM users;";
    $result = $conn->query($query);
    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        echo "id : ". $row["id"]. " - Name: ".$row["name"]. " - Password: ". $row["password"]. "<br>";
      }
    } else {
      echo "0 results";
    }
  ?>
</body>
</html>
