<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Reservations</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
        <!-- Navbar -->
        <nav class="bg-gray-900 text-white p-4 flex justify-between items-center shadow-md">
        <div class="text-lg font-semibold flex items-center">
            <img src="img/ligo.png" alt="Logo" class="w-16 h-16 mr-2"> 
        </div>
        <div>
            <a href="index.php" class="px-4 text-yellow-400 hover:text-yellow-500 transition-all">Home</a>
            <a href="Menu.php" class="px-4 hover:text-yellow-500 transition-all">Menu</a>
            <a href="user.php" class="px-4 hover:text-yellow-500 transition-all">Reservations</a>
        </div>
        <div>
            <a href="SignIn.html">
                <button class="bg-green-600 px-5 py-2 ml-2 rounded-xl hover:bg-green-700 transition-all">
                    Sign In
                </button>
            </a>
            <a href="SignUp.html">
                <button class="bg-green-600 px-5 py-2 ml-2 rounded-xl hover:bg-green-700 transition-all">
                    Sign Up
                </button>
            </a>
        </div>
    </nav>
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold text-center mb-6">My Reservations</h1>

        <div class="overflow-x-auto bg-white shadow-md rounded-lg p-6">
            <table class="table-auto w-full border-collapse border border-gray-200">
                <thead>
                    <tr class="bg-gray-100 text-gray-700">
                        <th class="border border-gray-300 px-4 py-2">#</th>
                        <th class="border border-gray-300 px-4 py-2">Date</th>
                        <th class="border border-gray-300 px-4 py-2">Time</th>
                        <th class="border border-gray-300 px-4 py-2">Guests</th>
                        <th class="border border-gray-300 px-4 py-2">Status</th>
                        <th class="border border-gray-300 px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example Reservation -->
                    <tr class="text-center">
                        <td class="border border-gray-300 px-4 py-2">1</td>
                        <td class="border border-gray-300 px-4 py-2">2024-12-20</td>
                        <td class="border border-gray-300 px-4 py-2">19:00</td>
                        <td class="border border-gray-300 px-4 py-2">4</td>
                        <td class="border border-gray-300 px-4 py-2 text-green-500 font-semibold">Confirmed</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Modify</button>
                            <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Cancel</button>
                        </td>
                    </tr>
                    <!-- Repeat for each reservation -->
                </tbody>
            </table>
        </div>
    </div>
    
<footer class="bg-gray-800 text-white mt-10">
    <div class="container mx-auto px-6 py-8">
      <!-- Logo -->
      <div class=" mb-6">
        <img class="w-24 mx-auto" src="img/logo.jpg" alt="Logo">
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
</body>
</html>
