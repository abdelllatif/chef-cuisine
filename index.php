<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef's Culinary Experience</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
       <!-- Navbar -->
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
    <!-- Hero Section -->
    <section class="relative w-full h-[95vh] bg-cover bg-center" style="background-image: url('https://i.pinimg.com/736x/35/e4/d0/35e4d0612e2def859fd0c16ccd91359d.jpg');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-10 flex justify-center items-center h-full text-center text-white">
            <div>
                <h1 class="text-5xl font-extrabold mb-4">Welcome to Chef's Culinary Experience</h1>
                <p class="text-xl mb-6">Indulge in a dining journey like no other, where every bite tells a story.</p>
                <a href="#reserve" class="px-8 py-3 text-lg font-semibold bg-orange-600 rounded-full hover:bg-orange-700 transition">Reserve Your Table</a>
            </div>
        </div>
    </section>

  <!-- Food Gallery Section -->
<section class="py-16 px-4 bg-gray-100">
    <h2 class="text-4xl font-bold text-center mb-12">Discover Our Dishes</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        <div class="relative overflow-hidden rounded-xl">
            <img src="https://i.pinimg.com/736x/c1/14/9a/c1149a0d6096f8ddc81f42d5d8e44f55.jpg" alt="Dish 1" class="w-full h-80 object-cover transform hover:scale-105 transition duration-300 ease-in-out">
        </div>
        <div class="relative overflow-hidden rounded-xl">
            <img src="https://i.pinimg.com/236x/02/9f/c8/029fc8e1507f50b13686d0f8bc257e0a.jpg" alt="Dish 2" class="w-full h-80 object-cover transform hover:scale-105 transition duration-300 ease-in-out">
        </div>
        <div class="relative overflow-hidden rounded-xl">
            <img src="https://i.pinimg.com/474x/56/e4/4a/56e44a1b6b50545f2b13f96b48254c8f.jpg" alt="Dish 3" class="w-full h-80 object-cover transform hover:scale-105 transition duration-300 ease-in-out">
        </div>
        <div class="relative overflow-hidden rounded-xl">
            <img src="https://i.pinimg.com/236x/22/47/54/224754ff3af08409669364582697eecc.jpg" alt="Dish 4" class="w-full h-80 object-cover transform hover:scale-105 transition duration-300 ease-in-out">
        </div>
    </div>
    
    <!-- Button to go to reservation page -->
    <div class="text-center mt-12">
        <a href="#reserve" class="px-8 py-3 text-lg font-semibold bg-orange-600 text-white rounded-full hover:bg-orange-700 transition">Reserve Now</a>
    </div>
</section>


    <!-- About Section -->
    <section class="py-16 px-4 bg-gray-200">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl font-bold mb-8">About My Culinary Philosophy</h2>
            <p class="text-lg text-gray-700 mb-6">My passion for food goes beyond cooking; it’s about creating an unforgettable experience for every guest. I believe in using the finest ingredients and combining them with creativity to craft culinary masterpieces.</p>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section id="reserve" class="bg-orange-600 py-16 text-center text-white">
        <h2 class="text-4xl font-bold mb-6">Ready to Experience the Best?</h2>
        <p class="text-xl mb-6">Book your reservation today and embark on a culinary adventure!</p>
        <a href="#contact" class="px-8 py-3 text-lg font-semibold bg-white text-orange-600 rounded-full hover:bg-orange-200 transition">Check Menu Now</a>
    </section>

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
</body>
</html>
