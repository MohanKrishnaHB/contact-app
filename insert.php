<?php
$servername = "sql12.freemysqlhosting.net"; //localhost
$username = "sql12530105"; //root
$password = "RJRTlL9Qr4"; //root
$database = "sql12530105"; //cpntact
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$id= $_POST['id'];
$name= $_POST['name'];
$email= $_POST['email'];
$phno= $_POST['phoneNumber'];

$sql = "INSERT INTO contact (id, name, email, phoneNumber)VALUES ($id, $name, $email, $phno)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


