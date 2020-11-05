<?php
$servername = "192.168.1.212";
$username = "root";
$password = "root";
$dbseclted = $_POST['db_use_sel']; // database selected by user 
$dbname = $dbseclted; //  systeme chose the database of user selected 





// delete varbile
$tbcreate = $_POST['tbcreate']; // name table removed


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// name of table 

//$table_name = $_POST['tbname'];

// sql to create table
$sql = "CREATE TABLE $tbcreate (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
Phone INT(8),
CIN INT(8),
Data_inscrption  TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table $tbcreate created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();

// --------------- to check in sql ------------------------------//
//DESCRIBE alienx;



?>

