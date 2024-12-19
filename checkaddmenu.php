<?php
// checkaddmenu.php
include 'connected.php'; // تأكد من أن هذا هو اسم ملف الاتصال الصحيح

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $menuTitle = $_POST['menuTitle'];
    $menuDescription = $_POST['menuDescription'];
    $plats = $_POST['plats']; // This will be an array of plat IDs

    // Insert the new menu into the menu table
    $stmt = $conn->prepare("INSERT INTO menu (title, description) VALUES (?, ?)");
    $stmt->bind_param("ss", $menuTitle, $menuDescription);
    
    if ($stmt->execute()) {
        $menuId = $stmt->insert_id; // Get the ID of the newly created menu

        // Now insert the plats into the menu_plats table
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