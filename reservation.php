<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Reservation Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
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

    <div class="max-w-4xl mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Your Reservations</h1>

    <form action="add_reservation.php" method="post" id="reservationForm" class="bg-white p-6 rounded-lg shadow-md mb-6">
        <h2 class="text-lg font-semibold mb-4">Add a Reservation</h2>
        <div class="flex flex-wrap gap-4 mb-4">
            <div class="flex-1 min-w-[200px]">
                <label for="menu" class="block text-sm font-medium text-gray-700">Menu</label>
                <select name="plats[]" class="w-full p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-green-500" required>
                    <?php
                    include 'connected.php'; 

                    $query = "SELECT id, title FROM menu"; 
                    $result = $conn->query($query);

                    if ($result->num_rows > 0) {
                        while ($plat = $result->fetch_assoc()) {
                            echo "<option value='" . $plat['id'] . "'>" . htmlspecialchars($plat['title']) . "</option>";
                        }
                    } else {
                        echo "<option value=''>No plats available</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="flex-1 min-w-[200px]">
    <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
    <input type="date" id="date" name="date" required class="w-full p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-green-500">
</div>
<div class="flex-1 min-w-[200px]">
    <label for="time" class="block text-sm font-medium text-gray-700">Time</label>
    <input type="time" id="time" name="time" required class="w-full p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-green-500">
</div>
<div class="flex-1 min-w-[200px]">
    <label for="nbrPerson" class="block text-sm font-medium text-gray-700">Number of Persons</label>
    <input type="number" id="nbrPerson" name="nbrPerson" min="1" required class="w-full p-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-green-500">
</div>

        </div>
        <button type="submit" id="submit" class="w-full bg-yellow-500 text-white font-semibold py-2 rounded-md hover:bg-yellow-800">Add Reservation</button>
    </form>
</div>


        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-lg font-semibold mb-4">Reservations</h2>
            <table class="w-full table-auto border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200 text-left">
                        <th class="border border-gray-300 p-2">Dish</th>
                        <th class="border border-gray-300 p-2">Date</th>
                        <th class="border border-gray-300 p-2">Time</th>
                        <th class="border border-gray-300 p-2">Number of Persons</th>
                        <th class="border border-gray-300 p-2">Status</th>
                        <th class="border border-gray-300 px-4 py-2">Actions</th>

                    </tr>
                </thead>
                <tbody id="reservationsTableBody">
                </tbody>
            </table>
        </div>
    </div>

 
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
reservationForm.addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent default submission

    const menuSelect = reservationForm.querySelector('select[name="plats[]"]');
    const selectedPlatName = menuSelect.options[menuSelect.selectedIndex].text;

    const date = document.querySelector('#date').value;
    const time = document.querySelector('#time').value;
    const nbrPerson = document.querySelector('#nbrPerson').value;

    // Add row to the table
    const newRow = document.createElement('tr');
    newRow.innerHTML = `
        <td class="border border-gray-300 p-2">${selectedPlatName}</td>
        <td class="border border-gray-300 p-2">${date}</td>
        <td class="border border-gray-300 p-2">${time}</td>
        <td class="border border-gray-300 p-2">${nbrPerson}</td>
        <td class="border border-gray-300 p-2 text-yellow-500 font-semibold">Pending</td>
        <td class="border border-gray-300 p-2">
            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Modify</button>
            <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Cancel</button>
        </td>
    `;
    document.getElementById('reservationsTableBody').appendChild(newRow);

    // Proceed with server submission
    reservationForm.submit();
});


</script>
</body>
</html>
