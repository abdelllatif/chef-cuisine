<?php
// Database connection settings
$servername = "localhost";  // Usually 'localhost' or your server's IP address
$username = "root";         // Your MySQL username (default: 'root')
$password = "";             // Your MySQL password (default: empty)
$dbname = "chef_cuisine";     // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Your further code to interact with the database goes here...
?>
