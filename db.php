<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "harbhole"; 

$con = new mysqli($host, $username, $password, $database,3306);

if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "connected successfully";
?>
