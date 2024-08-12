<?php
$servername = "mariadb";
$username = "user";
$password = "password";
$dbname = "mydb";

//establish a connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check the connection
if ($conn->connect_error) {
    die("connection failed:" .$conn->connect_error);
}
echo "connected successfully";
?>
<?