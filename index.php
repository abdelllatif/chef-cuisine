<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef's Culinary Experience</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom Styles for Carousel */
        .carousel {
            display: flex;
            overflow: hidden;
            position: relative;
        }
        .carousel-item {
            flex: 0 0 100%;
            transition: transform 0.5s ease-in-out;
        }
        .carousel-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            z-index: 10;
            border-radius: 50%;
        }
              /* Custom Hover Animation */
              .hover-scale {
            transition: transform 0.3s ease-in-out;
        }
        .hover-scale:hover {
            transform: scale(1.2);
        }
        .carousel-button.left {
            left: 20px;
        }
        .carousel-button.right {
            right: 20px;
        }

        .carousel {
            display: flex;
            overflow: hidden;
            position: relative;
            width: 100%;
            height: 100vh;
        }
        .carousel-inner {
            display: flex;
            width: 300%; /* 3 slides */
            animation: slide 12s infinite;
        }
        .carousel-item {
            flex: 1 0 100%;
            position: relative;
        }
        .carousel-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            z-index: 5;
        }

        @keyframes slide {
            0% { transform: translateX(0); }
            25% { transform: translateX(0); }
            33.33% { transform: translateX(-100%); }
            58.33% { transform: translateX(-100%); }
            66.66% { transform: translateX(-200%); }
            91.66% { transform: translateX(-200%); }
            100% { transform: translateX(0); }
        }

    </style>
</head>
<body class="font-sans bg-gray-50">
    
      <!-- Navbar -->
      <nav class="bg-gray-900 text-white p-4 flex justify-between items-center shadow-md">
        <div class="text-lg font-semibold flex items-center">
            <img src="/img/ligo.png" alt="Logo" class="w-16 h-16 mr-2"> 
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

    <!-- Header Carousel Section -->
    <header class="relative">
        <div class="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item">
                    <img src="https://i.pinimg.com/736x/35/e4/d0/35e4d0612e2def859fd0c16ccd91359d.jpg" alt="Chef Slide 1" class="w-full h-screen object-cover">
                    <div class="carousel-content">
                        <h1 class="text-5xl font-bold mb-4">Welcome to Chef's Table</h1>
                        <p class="text-lg mb-8">Experience the art of fine dining like never before.</p>
                        <a href="#reserve" class="bg-yellow-500 text-black font-bold py-3 px-6 rounded-full hover:bg-yellow-600 transition">Reserve Now</a>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="https://i.pinimg.com/236x/26/71/91/267191144134ec48fc8e2f2856a37029.jpg" alt="Chef Slide 2" class="w-full h-screen object-cover">
                    <div class="carousel-content">
                        <h1 class="text-5xl font-bold mb-4">Crafted with Passion</h1>
                        <p class="text-lg mb-8">Savor flavors prepared by world-renowned chefs.</p>
                        <a href="#menu" class="bg-yellow-500 text-black font-bold py-3 px-6 rounded-full hover:bg-yellow-600 transition">Explore Menu</a>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item">
                    <img src="https://i.pinimg.com/236x/24/27/8a/24278a0eb915c37560f32d2b8fb88e04.jpg" alt="Chef Slide 3" class="w-full h-screen object-cover">
                    <div class="carousel-content">
                        <h1 class="text-5xl font-bold mb-4">Exclusive Culinary Events</h1>
                        <p class="text-lg mb-8">Join us for private and exclusive dining experiences.</p>
                        <a href="#contact" class="bg-yellow-500 text-black font-bold py-3 px-6 rounded-full hover:bg-yellow-600 transition">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
<!-- Circular Image Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Explore Our Dishes</h2>
        <div class="flex flex-wrap justify-center gap-8">
            <!-- Circle 1 -->
            <div class="rounded-full w-48 h-48 overflow-hidden hover-scale">
                <img src="https://i.pinimg.com/736x/c1/14/9a/c1149a0d6096f8ddc81f42d5d8e44f55.jpg" alt="Dish 1" class="object-cover w-full h-full">
            </div>
            <!-- Circle 2 -->
            <div class="rounded-full w-48 h-48 overflow-hidden hover-scale">
                <img src="https://i.pinimg.com/236x/02/9f/c8/029fc8e1507f50b13686d0f8bc257e0a.jpg" alt="Dish 2" class="object-cover w-full h-full">
            </div>
            <!-- Circle 3 -->
            <div class="rounded-full w-48 h-48 overflow-hidden hover-scale">
                <img src="https://i.pinimg.com/474x/56/e4/4a/56e44a1b6b50545f2b13f96b48254c8f.jpg" alt="Dish 3" class="object-cover w-full h-full">
            </div>
            <!-- Circle 4 -->
            <div class="rounded-full w-48 h-48 overflow-hidden hover-scale">
                <img src="https://i.pinimg.com/236x/22/47/54/224754ff3af08409669364582697eecc.jpg" alt="Dish 4" class="object-cover w-full h-full">
            </div>
        </div>
    </div>
</section>

<!-- Feature Section -->
<section class="py-20 bg-gray-100">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between px-6">
        <!-- Left Column (Text) -->
        <div class="md:w-1/2 mb-8 md:mb-0">
            <h3 class="text-4xl font-bold mb-4 text-gray-800">Learn More About My Experience</h3>
            <p class="text-gray-700 mb-6">
                Discover the unique and personalized culinary experiences I offer. From family dinners to large events, every meal is tailored to your preferences.
            </p>
            <a href="#contact" class="bg-green-500 text-white px-6 py-2 rounded-full hover:bg-green-600 transition ease-in-out duration-300">Learn More</a>
        </div>
        
        <!-- Right Column (Image) -->
        <div class="md:w-1/2">
            <img src="img/chefwork (2).png" alt="Private Experience" class="rounded-lg  w-48 transform transition duration-300 hover:scale-105">
        </div>
    </div>
</section>



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
  
    <!-- JavaScript for Carousel -->
    <script>
        let currentIndex = 0;

        function moveSlide(step) {
            const carousel = document.getElementById('carousel');
            const slides = document.querySelectorAll('.carousel-item');
            currentIndex = (currentIndex + step + slides.length) % slides.length;
            const offset = -currentIndex * 100;
            carousel.style.transform = `translateX(${offset}%)`;
        }
    </script>

</body>
</html>
