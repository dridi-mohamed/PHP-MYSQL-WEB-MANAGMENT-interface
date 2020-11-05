<?php
$servername = "192.168.1.212";
$username = "root";
$password = "root";
$dbseclted = $_POST['deldb']; // database selected by user 
$dbname = $dbseclted; //  systeme chose the database of user selected 





// delete varbile
$tbdelete = $_POST['tbdelete']; // name table removed

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "DROP TABLE $tbdelete";
if ($conn->query($sql) === TRUE) {
  echo "Tabel Called $tbdelete delete successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>