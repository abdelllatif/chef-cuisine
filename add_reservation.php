<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "chef_cuisine";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $menu = $_POST['menu'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $nbrPerson = $_POST['nbrPerson'];

    $stmt = $conn->prepare("INSERT INTO reservations (menu, date, time, nbr_person) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $menu, $date, $time, $nbrPerson);
    
    if ($stmt->execute()) {
        echo "Reservation added successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>