<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php /*include_once("index.html");*/
echo("<h1>Hi</h1>")
?>
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
?>

<!-- dfgdf -->

</body>
</html>