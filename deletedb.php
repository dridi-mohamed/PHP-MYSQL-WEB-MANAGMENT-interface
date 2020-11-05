

<?php
$servername = "192.168.1.212";
$username = "root";
$password = "root";




$delete = $_POST['delete'];

// Create connection



$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Delete DataBases
$sql = "DROP DATABASE $delete" ;



if ($conn->query($sql) === TRUE) {
  echo "Database $delete Delete  successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>







