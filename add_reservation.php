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
    $menu_id = $_POST['menu_id'] ?? null; 
    $user_id = 1; 
    $date = $_POST['date'] ?? null;
    $time = $_POST['time'] ?? null;
    $nbrPerson = $_POST['nbrPerson'] ?? null;
    $status = "pending"; 

    if (!$menu_id || !$date || !$time || !$nbrPerson) {
        die("All fields are required.");
    }

    $stmt = $conn->prepare("INSERT INTO reservations (user_id, menu_id, date, time, number_of_people, status) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("iissis", $user_id, $menu_id, $date, $time, $nbrPerson, $status);

    if ($stmt->execute()) {
        echo "Reservation added successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>