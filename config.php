<?php
$host = "localhost:3306";  // Replace with your host
$db = "conference_db";  // Replace with your database name
$user = "root";  // Replace with your database username
$password = "";  // Replace with your database password

// Establish database connection
$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>



