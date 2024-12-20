<?php
session_start();
include 'connected.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $stmt = $conn->prepare("SELECT id, password, role_id FROM users WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $stmt->store_result();

  if ($stmt->num_rows > 0) {
      $stmt->bind_result($userId, $hashedPassword, $roleId);
      $stmt->fetch();

      if (password_verify($password, $hashedPassword)) {
          $_SESSION['user_id'] = $userId;
          $_SESSION['role_id'] = $roleId; 

   
      
      } else {
          $_SESSION['login_error'] = "Invalid email or password.";
      }
  } else {
      $_SESSION['login_error'] = "Invalid email or password.";
  }

  
    $email = $_POST['email'];
    $password = $_POST['password'];

    error_log("Email: $email");
    error_log("Password: $password");

    $stmt = $conn->prepare("SELECT id, password, role_id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($userId, $hashedPassword, $roleId);
        $stmt->fetch();

        error_log("User  ID: $userId, Hashed Password: $hashedPassword, Role ID: $roleId");

        if (password_verify($password, $hashedPassword)) {
            $_SESSION['user_id'] = $userId;
            $_SESSION['role_id'] = $roleId; 
                var_dump($_SESSION['user_id']);
            if ( $_SESSION['user_id'] == 1) {
                header("Location: dachbored.php");
            } else {
                header("Location: index.php");
            }
            exit();
        } else {
            $_SESSION['login_error'] = "Invalid email or password.";
        }
    } else {
        $_SESSION['login_error'] = "Invalid email or password.";
    }

   
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      justify-content: center;
      align-items: center;
    }

    .modal-content {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      text-align: center;
      width: 80%;
      max-width: 400px;
    }

    .modal-header {
      font-size: 1.5rem;
      font-weight: bold;
    }

    .modal-body {
      margin: 10px 0;
    }

    .modal-footer {
      margin-top: 20px;
    }

    .close-btn {
      background-color: #ff5c5c;
      color: white;
      padding: 10px 20px;
      border-radius: 8px;
      cursor: pointer;
    }

    .close-btn:hover {
      background-color: #e04e4e;
    }
  </style>
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-gray-900 text-white p-4 flex justify-between items-center shadow-md">
        <div class="text-lg font-semibold flex items-center">
            <img src="img/ligo.png" alt="شعار" class="w-16 h-16 mr-2"> 
        </div>
        <div>
            <a href="index.php" class="px-4 py-2 text-orange-200 hover:bg-yellow-500 hover:text-white border border-transparent hover:border-[#FF7F50] rounded-lg transition-all duration-300">Home</a>
            <a href="Menu.php" class="px-4 py-2 text-orange-200 hover:bg-yellow-500 hover:text-white border border-transparent hover:border-[#FF7F50] rounded-lg transition-all duration-300">Menu</a>
            <?php if (isset($_SESSION['role_id']) && $_SESSION['role_id'] == 1): ?>
                <a href="dashboard.php" class="px-4 py-2 text-orange-200 hover:bg-yellow-500 hover:text-white border border-transparent hover:border-[#FF7F50] rounded-lg transition-all duration-300">Dashboard</a>
            <?php endif; ?>
            <a href="SignIn.php" class="px-4 py-2 text-orange- 200 hover:bg-yellow-500 hover:text-white border border-transparent hover:border-[#FF7F50] rounded-lg transition-all duration-300">Sign In</a>
            <a href="SignUp.php" class="px-4 py-2 text-orange-200 hover:bg-yellow-500 hover:text-white border border-transparent hover:border-[#FF7F50] rounded-lg transition-all duration-300">Sign Up</a>
            <a href="logout.php" class="px-4 py-2 text-orange-200 hover:bg-yellow-500 hover:text-white border border-transparent hover:border-[#FF7F50] rounded-lg transition-all duration-300">Logout</a>
        </div>
    </nav>

  <section class="flex items-center justify-center h-screen">
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-lg">
      <h2 class="text-2xl font-bold text-center text-gray-700">Sign In</h2>
      <form id="signin-form" action="" method="POST">
        <div class="space-y-4">
          <div>
            <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
            <input type="email" id="email" name="email" required class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none" placeholder="Enter your email" />
          </div>
          <div>
            <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
            <input type="password" id="password" name="password" required class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none" placeholder="Enter your password" />
          </div>
        </div>
        <button type="submit" class="w-full p-3 mt-4 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700">Sign In</button>
      </form>
      <p class="text-center text-sm text-gray-600">Don't have an account? <a href="SignUp.html" class="text-indigo-600 hover:underline">Sign Up</a></p>
    </div>
  </section>

  <!-- Custom Alert Modal -->
  <div id="alert-modal" class="modal">
    <div class="modal-content">
      <div class="modal-header" id="alert-title"></div>
      <div class="modal-body" id="alert-message"></div>
      <div class="modal-footer">
        <button class="close-btn" id="close-btn">Close</button>
      </div>
    </div>
  </div>

  <footer class="bg-gray-800 mt-32 text-white mt-10">
    <div class="container mx-auto px-6 py-8">
      <div class="mb-6">
        <img class="w-24 mx-auto" src="img/ligo.png" alt="Logo">
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
        <div>
          <h4 class="text-xl font-bold mb-4">About Us</h4>
          <ul class="space-y-2">
            <li><a href="#" class="hover:text-gray-400">Call: (456) 789-12301</a></li>
            <li><a href="mailto:info@Saadastaurant.com" class="hover:text-gray-400">info@Saadastaurant.com</a></li>
          </ul>
        </div>
        <div>
          <h4 class="text-xl font-bold mb-4">Explore</h4>
          <ul class="space-y-2">
            <li><a href="resturant.html" class="hover:text-gray-400">Home</a></li>
            <li><a href="#" class="hover:text-gray-400">Services</a></li>
          </ul>
        </div>
        <div>
          <h4 class="text-xl font-bold mb-4">Customer Support</h4>
          <ul class="space-y-2">
            <li><a href="#" class="hover:text-gray-400">FAQs</a></li>
            <li><a href="#" class="hover:text-gray-400">Return Policy</a></li>
          </ul>
        </div>
      </div>
      <div class="flex justify-center mt-6 space-x-6">
        <a href="#" class="text-white hover:text-blue-500">
          <i class="bx ```html
          bxl-facebook text-2xl"></i>
        </a>
        <a href="#" class="text-white hover:text-pink-500">
          <i class="bx bxl-instagram text-2xl"></i>
        </a>
        <a href="#" class="text-white hover:text-blue-700">
          <i class="bx bxl-linkedin text-2xl"></i>
        </a>
        <a href="#" class="text-white hover:text-blue-400">
          <i class="bx bxl-twitter text-2xl"></i>
        </a>
      </div>
    </div>
  </footer>

  <script>
    const modal = document.getElementById("alert-modal");
    const closeBtn = document.getElementById("close-btn");

    function showModal(title, message) {
        document.getElementById("alert-title").innerText = title;
        document.getElementById("alert-message").innerText = message;
        modal.style.display = "flex";
    }

    closeBtn.addEventListener("click", () => {
        modal.style.display = "none";
    });

    <?php if (isset($_SESSION['login_error'])): ?>
        showModal('Login Failed', '<?php echo $_SESSION['login_error']; ?>');
        <?php unset($_SESSION['login_error']); ?> 
    <?php endif; ?>

    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    const signinform = document.getElementById("signin-form");
    signinform.addEventListener("submit", function(event) {
        event.preventDefault(); 

        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;

        if (!emailRegex.test(email)) {
            showModal('Invalid Email', 'Please enter a valid email address.');
            return;
        }

        if (password.length < 8) {
            showModal('Invalid Password', 'Password must be at least 8 characters long.');
            return;
        }

        signinform.submit();
    });
  </script>

</body>
</html>