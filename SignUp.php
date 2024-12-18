<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Custom modal styling */
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
            <img src="img/logo.jpg" alt="Logo" class="w-14 h-14 mr-2"> 
            <span class="text-xl font-bold">Chef's Dashboard</span>
        </div>
        <div>
            <a href="index.php" class="px-4 text-yellow-400 hover:text-yellow-500 transition-all">Home</a>
            <a href="Menu.php" class="px-4 hover:text-yellow-500 transition-all">Menu</a>
            <a href="reservation.php" class="px-4 hover:text-yellow-500 transition-all">Reservations</a>
        </div>
        <div>
            <a href="SignIn.php">
                <button class="bg-green-600 px-5 py-2 ml-2 rounded-xl hover:bg-green-700 transition-all">
                    Sign In
                </button>
            </a>
            <a href="SignUp.php">
                <button class="bg-green-600 px-5 py-2 ml-2 rounded-xl hover:bg-green-700 transition-all">
                    Sign Up
                </button>
            </a>
        </div>
    </nav>

  <section class="flex items-center justify-center h-screen">
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-lg">
      <h2 class="text-2xl font-bold text-center text-gray-700">Sign Up</h2>
      <form id="signup-form">
        <div class="space-y-4">
          <div>
            <label for="username" class="block text-sm font-medium text-gray-600">Username</label>
            <input type="text" id="username" name="username" required class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none" placeholder="Choose a username" />
          </div>
          <div>
            <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
            <input type="email" id="email" name="email" required class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none" placeholder="Enter your email" />
          </div>
          <div>
            <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
            <input type="password" id="password" name="password" required class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none" placeholder="Create a password" />
          </div>
          <div>
            <label for="confirm-password" class="block text-sm font-medium text-gray-600">Confirm Password</label>
            <input type="password" id="confirm-password" name="confirm-password" required class="w-full p-3 mt-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none" placeholder="Confirm your password" />
          </div>
        </div>
        <button type="submit" class="w-full p-3 mt-4 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">Sign Up</button>
      </form>
      <p class="text-center text-sm text-gray-600">Already have an account? <a href="SignIn.html" class="text-indigo-600 hover:underline">Sign In</a></p>
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

  <script>
    // Regex patterns for validation
    const usernameRegex = /^[a-zA-Z0-9_]{3,15}$/; // Alphanumeric and underscore, 3-15 characters
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/; // Email pattern
    const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/; // At least 8 characters, 1 letter, 1 number

    const modal = document.getElementById("alert-modal");
    const closeBtn = document.getElementById("close-btn");

    // Function to display the custom modal with message
    function showModal(title, message) {
        document.getElementById("alert-title").innerText = title;
        document.getElementById("alert-message").innerText = message;
        modal.style.display = "flex";
    }

    // Hide the modal when clicking close button
    closeBtn.addEventListener("click", () => {
        modal.style.display = "none";
    });

    document.getElementById("signup-form").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent form submission to check validation

        const username = document.getElementById("username").value;
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;
        const confirmPassword = document.getElementById("confirm-password").value;

        // Validate fields
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

        // If all validations pass, show success modal
        showModal('Success!', 'You have successfully registered.');
        setTimeout(() => {
            window.location.href = 'SignIn.php'; // Redirect to SignIn page after success
        }, 2000);
    });
  </script>
</body>
</html>
