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
  echo "Database: <br>";
  echo "<table>";
  echo "<tr><td> Id </td><td> Nama </td><td> Kantor </td></tr>";
  while($row = $result->fetch_assoc()){
    echo "<tr><td>" .$row["Id"]."</td><td>" . $row["Nama"]. "</td><td>" . $row["Kantor"]. "</td></tr>";
      }
}else{
  echo "Database Kosong";
}
$conn->close();
?>
