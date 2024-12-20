<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "chef_cuisine";

// إنشاء اتصال بقاعدة البيانات
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// التحقق من طريقة الطلب
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // الحصول على البيانات من النموذج
    $menu_id = $_POST['menu_id'] ?? null; // Assuming the menu is sent as an ID
    $user_id = 1; // Defaulting to user_id 1, change as needed
    $date = $_POST['date'] ?? null;
    $time = $_POST['time'] ?? null;
    $nbrPerson = $_POST['nbrPerson'] ?? null;
    $status = "pending"; // Default status, can be changed as needed

    // التحقق من وجود جميع الحقول
    if (!$menu_id || !$date || !$time || !$nbrPerson) {
        die("All fields are required.");
    }

    // إعداد الاستعلام
    $stmt = $conn->prepare("INSERT INTO reservations (user_id, menu_id, date, time, number_of_people, status) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("iissis", $user_id, $menu_id, $date, $time, $nbrPerson, $status);

    // تنفيذ الاستعلام والتحقق من النتيجة
    if ($stmt->execute()) {
        echo "Reservation added successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // إغلاق البيان
    $stmt->close();
}

// إغلاق الاتصال بقاعدة البيانات
$conn->close();
?>