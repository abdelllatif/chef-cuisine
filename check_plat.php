<?php
// check_plat.php
include 'connected.php'; // تأكد من أن هذا هو اسم ملف الاتصال الصحيح

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $platTitle = $_POST['platTitle'];
    $platIngredients = $_POST['platIngredients'];
    $platImage = $_FILES['platImage'];

    // Handle file upload
    $targetDir = "uploads/"; // تأكد من أن هذا المجلد موجود
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true); // إنشاء المجلد إذا لم يكن موجودًا
    }
    
    $targetFile = $targetDir . basename($platImage["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($platImage["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size (limit to 5MB)
    if ($platImage["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (!in_array($imageFileType, ['jpg', 'png', 'jpeg', 'gif'])) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($platImage["tmp_name"], $targetFile)) {
            // Insert the new plat into the plats table
            $stmt = $conn->prepare("INSERT INTO plats (title, ingredients, image) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $platTitle, $platIngredients, $targetFile);

            if ($stmt->execute()) {
                echo "Plat added successfully!";
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

$conn->close();
?>