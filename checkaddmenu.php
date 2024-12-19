<?php
include 'connected.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $menuTitle = $_POST['menuTitle'];
    $menuDescription = $_POST['menuDescription'];
    $plats = $_POST['plats']; 

    $stmt = $conn->prepare("INSERT INTO menu (title, description) VALUES (?, ?)");
    $stmt->bind_param("ss", $menuTitle, $menuDescription);
    
    if ($stmt->execute()) {
        $menuId = $stmt->insert_id; 
        foreach ($plats as $platId) {
            $stmt = $conn->prepare("INSERT INTO menu_plats (menu_id, plat_id) VALUES (?, ?)");
            $stmt->bind_param("ii", $menuId, $platId);
            $stmt->execute();
        }

        echo "Menu created successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>