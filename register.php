<?php
session_start();
include 'connected.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);    
    $role_id = 2; // Assuming 2 is the default role for regular users

    // Update the SQL query to include role_id
    $stmt = $conn->prepare("INSERT INTO users (name, email, password, role_id) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $username, $email, $password, $role_id); // Add role_id to the bind_param

    if ($stmt->execute()) {
        $userId = $stmt->insert_id; 

        $_SESSION['user_id'] = $userId; 
        if ($userId == 1) {
            header("Location: dashboard.php");
        } else {
            header("Location: index.php"); 
        }
        exit();
    } else {
        echo "error: " . $stmt->error;
    }

    $stmt->close();

}
$conn->close();
?>