<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
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
        <nav class="bg-gray-900 text-white p-4 flex justify-between items-center shadow-md">
        <div class="text-lg font-semibold flex items-center">
            <img src="img/ligo.png" alt="Logo" class="w-16 h-16 mr-2"> 
        </div>
        <div>
            <a href="index.php" class="px-4 py-2 text-orange-200 hover:bg-yellow-500 hover:text-white border border-transparent hover:border-[#FF7F50] rounded-lg transition-all duration-300">Home</a>
            <a href="Menu.php" class="px-4 py-2 text-orange-200 hover:bg-yellow-500 hover:text-white border border-transparent hover:border-[#FF7F50] rounded-lg transition-all duration-300">Menu</a>
            <a href="reservation.php" class="px-4 py-2 text-orange-200 hover:bg-yellow-500 hover:text-white border border-transparent hover:border-[#FF7F50] rounded-lg transition-all duration-300">Reservations</a>
        </div>
        <div>
            <a href="SignIn.php">
                <button class="bg-orange-500 px-5 py-2 ml-2 rounded-xl hover:bg-black transition-all">
                    Sign In
                </button>
            </a>
            <a href="SignUp.php">
                <button class="bg-orange-500 px-5 py-2 ml-2 rounded-xl hover:bg-black transition-all">
                    Sign Up
                </button>
            </a>
        </div>
    </nav>

  <section class="flex items-center justify-center h-screen">
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-lg">
      <h2 class="text-2xl font-bold text-center text-gray-700">Sign Up</h2>
      <form id="signup-form"  action="register.php" method="POST">
        <div class="space-y-4">
          <div>
            <label for="username" class="block text-sm font-medium text-gray-600">Username</label>
            <input type="text" id="username" name="username" required class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:outline-none" placeholder="Choose a username" />
          </div>
          <div>
            <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
            <input type="email" id="email" name="email" required class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:outline-none" placeholder="Enter your email" />
          </div>
          <div>
            <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
            <input type="password" id="password" name="password" required class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:outline-none" placeholder="Create a password" />
          </div>
          <div>
            <label for="confirm-password" class="block text-sm font-medium text-gray-600">Confirm Password</label>
            <input type="password" id="confirm-password" name="confirm-password" required class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:outline-none" placeholder="Confirm your password" />
          </div>
        </div>
        <button type="submit" class="w-full p-3 mt-4 bg-yellow-600 text-white rounded-lg hover:bg-yellow-700">Sign Up</button>
      </form>
      <p class="text-center text-sm text-gray-600">Already have an account? <a href="SignIn.html" class="text-yellow-600 hover:underline">Sign In</a></p>
    </div>
  </section>

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
      <!-- Logo -->
      <div class=" mb-6">
        <img class="w-24 mx-auto" src="img/ligo.png" alt="Logo">
      </div>
  
      <!-- Footer Sections -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
        
        <!-- About Us & Contact Info -->
        <div>
          <h4 class="text-xl font-bold mb-4">About Us</h4>
          <ul class="space-y-2">
            <li><a href="#" class="hover:text-gray-400">Call: (456) 789-12301</a></li>
            <li><a href="mailto:info@Saadastaurant.com" class="hover:text-gray-400">info@Saadastaurant.com</a></li>
          </ul>
        </div>
  
        <!-- Explore & Recent News -->
        <div>
          <h4 class="text-xl font-bold mb-4">Explore</h4>
          <ul class="space-y-2">
            <li><a href="resturant.html" class="hover:text-gray-400">Home</a></li>
            <li><a href="#" class="hover:text-gray-400">Services</a></li>
          </ul>
        </div>
  
        <!-- Customer Support -->
        <div>
          <h4 class="text-xl font-bold mb-4">Customer Support</h4>
          <ul class="space-y-2">
            <li><a href="#" class="hover:text-gray-400">FAQs</a></li>
            <li><a href="#" class="hover:text-gray-400">Return Policy</a></li>
          </ul>
        </div>
      </div>
  
      <!-- Social Media Icons -->
      <div class="flex justify-center mt-6 space-x-6">
        <a href="#" class="text-white hover:text-blue-500">
          <i class="bx bxl-facebook text-2xl"></i>
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
    const usernameRegex = /^[a-zA-Z0-9_]{3,15}$/; 
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/; 
    const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/; 

    const modal = document.getElementById("alert-modal");
    const closeBtn = document.getElementById("close-btn");
    const signupForm = document.getElementById("signup-form");

    function showModal(title, message) {
        document.getElementById("alert-title").innerText = title;
        document.getElementById("alert-message").innerText = message;
        modal.style.display = "flex";
    }

    closeBtn.addEventListener("click", () => {
        modal.style.display = "none";
    });

    signupForm.addEventListener("submit", function(event) {
        event.preventDefault(); 
        const username = document.getElementById("username").value;
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;
        const confirmPassword = document.getElementById("confirm-password").value;

        if (!usernameRegex.test(username)) {
            showModal('Invalid Username', 'Username should be alphanumeric and between 3-15 characters.');
            return;
        }

        if (!emailRegex.test(email)) {
            showModal('Invalid Email', 'Please enter a valid email address.');
            return;
        }

        if (!passwordRegex.test(password)) {
            showModal('Invalid Password', 'Password must be at least 8 characters long and contain at least 1 number.');
            return;
        }

        if (password !== confirmPassword) {
            showModal('Password Mismatch', 'Passwords do not match.');
            return;
        }

        // إذا كانت جميع المدخلات صحيحة، قم بإرسال البيانات
        signupForm.submit(); // هذا سيقوم بإرسال النموذج إلى register.php
    });
</script>
</body>
</html>
