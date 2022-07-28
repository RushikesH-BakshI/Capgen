<?php
    $Username = $_POST['Username'];
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registrationdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = ("INSERT INTO registration (Username, pass, cpass) VALUES ('$Username', '$pass', '$cpass')");

if ($conn->query($sql) === TRUE) {
  echo "Registered successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
