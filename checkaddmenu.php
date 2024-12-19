<?php
// الاتصال بقاعدة البيانات
$host = "localhost"; // اسم الخادم
$user = "root";      // اسم المستخدم
$password = "";      // كلمة المرور
$dbname = "chef_cuisine"; // اسم قاعدة البيانات

$conn = new mysqli($host, $user, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// التحقق من إرسال البيانات
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $menuTitle = $conn->real_escape_string($_POST['menuTitle']);
    $menuDescription = $conn->real_escape_string($_POST['menuDescription']);
    $plats = $_POST['plats']; // مصفوفة الأطباق المختارة

    // إدخال القائمة في جدول menu
    $sql = "INSERT INTO menu (title, description) VALUES ('$menuTitle', '$menuDescription')";
    if ($conn->query($sql) === TRUE) {
        $menuId = $conn->insert_id; // الحصول على ID الخاص بالقائمة

        // إدخال الأطباق المرتبطة بالقائمة
        foreach ($plats as $plat) {
            $plat = $conn->real_escape_string($plat);
            $sqlPlat = "INSERT INTO plats (menu_id, title, ingredients, image) VALUES ('$menuId', '$plat', 'Sample Ingredients', 'default.jpg')";
            $conn->query($sqlPlat);
        }

        echo "Menu and associated plats added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// إغلاق الاتصال
$conn->close();
?>
