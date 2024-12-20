<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "chef_cuisine";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 $query = "SELECT * FROM menu";  
$result = $conn->query($query);
$menu = $conn->query("SELECT * FROM menu");
$plats = $plats = $conn->query("SELECT * FROM plats");

?>


<!DOCTYPE php>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusive Culinary Experiences</title>
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

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

    <section class="bg-[#F5F5F5] py-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-black mb-4">Exclusive Culinary Experiences</h2>
                <p class="text-lg text-black opacity-80">Indulge in gourmet dining experiences crafted just for you. Explore bespoke menus, and book a private culinary journey.</p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
           
            <?php while ($row = $menu->fetch_assoc() && $plat = $plats->fetch_assoc()): ?>                  ?>
                  <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                   
                  <img  src="<?php echo $plat['image']; ?>" alt="Gourmet Dish" class="w-full h-60 object-cover rounded-t-xl">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-black mb-4"><?php echo htmlspecialchars($row['title']); ?></h3>
                        <p class="text-gray-600 mb-6"><?php echo htmlspecialchars($row['description']); ?></p>
                        <button onclick="reserveDish('Signature Dish: Truffle Risotto')" class="w-full bg-orange-500 text-white py-2 rounded-full hover:bg-orange-800 transition duration-300">Reserve This Dish</button>
                    </div>
                </div>
          
    <?php endwhile; ?>





             
            </div>

            <div id="reserve" class="text-center mt-16">
                <a href="reservation-page.php" class="text-white  bg-orange-500  py-3 px-10 rounded-full text-2xl hover:bg-orange-800 transition">Book Your Experience Now</a>
            </div>
        </div>
    </section>

   
    <footer class="bg-gray-800 mt-32 text-white mt-10">
    <div class="container mx-auto px-6 py-8">
      <div class=" mb-6">
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
    <!-- JavaScript for SweetAlert and Reservation -->
    <script>
        function reserveDish(dishName) {
            Swal.fire({
                title: 'Are you sure?',
                text: `You are about to reserve: ${dishName}`,
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#FF7F50',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, reserve it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Reserved!',
                        `${dishName} has been reserved for you.`,
                        'success'
                    );
                }
            });
        }
    </script>

</body>
</php>
