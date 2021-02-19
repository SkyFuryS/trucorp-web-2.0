<?php
$servername = "172.17.0.2";
$username = "root";
$password = "dockerskyfury";
$dbname   = "Trucorpdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if($result ->num_rows>0){
  echo "Total User: <br>" . $result->num_rows . "Users According to Database <br>";
      }
}else{
  echo "Database Kosong";
}
$conn->close();
?>
