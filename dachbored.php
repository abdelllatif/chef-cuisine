<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "chef_cuisine";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT id, title FROM plats";  
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chef's Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .dashboard-section {
            display: none;
        }
        .dashboard-section.active {
            display: block;
        }
    </style>
</head>
<body class="bg-gray-50">

    <div class="flex flex-wrap min-h-screen">
        <aside class="bg-white w-full md:w-1/4 shadow rounded-lg p-4">
            <h3 class="text-xl font-semibold mb-4 text-center text-gray-700">Gestion</h3>
            <div id="partiegestionDash" class="flex flex-col gap-4 w-full bg-gray-200 p-4 rounded">
                <button onclick="openSection('chefDashboard')" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Gestion des Réservations</button>
                <button onclick="openSection('addMenu')" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Ajouter menu</button>
                <button onclick="openSection('addPlate')" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Ajouter plat</button>
                <button onclick="openSection('viewClients')" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Voir tous les clients</button>
                <button onclick="openSection('acceptedRequests')" class="bg-blue-500 text-white p-2 rounded hover:bg-green-600">Clients Demande</button>
                <button onclick="openSection('editMenu')" class="bg-blue-500 text-white p-2 rounded hover:bg-purple-600">Modifier menu</button>
            </div>
        </aside>

        <main class="flex-1 p-6">
            <div id="chefDashboard" class="dashboard-section active">
                <h2 class="text-3xl font-semibold mb-8 text-gray-800">Gestion des Réservations</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-8">
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                        <h3 class="text-lg font-bold mb-2">Demandes en Attente</h3>
                        <p class="text-5xl text-yellow-500 font-bold">5</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                        <h3 class="text-lg font-bold mb-2">Demandes Approuvées Aujourd'hui</h3>
                        <p class="text-5xl text-green-500 font-bold">8</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                        <h3 class="text-lg font-bold mb-2">Demandes Approuvées pour Demain</h3>
                        <p class="text-5xl text-blue-500 font-bold">3</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                        <h3 class="text-lg font-bold mb-2">Nombre de Clients Inscrits</h3>
                        <p class="text-5xl text-purple-500 font-bold">50</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg mb-8">
                    <h3 class="text-2xl font-bold mb-4 text-gray-700">Prochain Client ```html
                    <p><strong>Nom:</strong> Jean Dupont</p>
                    <p><strong>Heure de Réservation:</strong> 19:00</p>
                    <p><strong>Table:</strong> 5</p>
                </div>

                <h3 class="text-xl font-semibold mb-4">Demandes en Attente</h3>
                <div class="overflow-auto">
                    <table class="min-w-full bg-white rounded-lg shadow-lg text-center">
                        <thead class="bg-gray-200">
                            <tr>
                                <th class="py-3 px-4">Nom Client</th>
                                <th class="py-3 px-4">Heure</th>
                                <th class="py-3 px-4">Table</th>
                                <th class="py-3 px-4">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-3 px-4">Marie Claire</td>
                                <td class="py-3 px-4">20:00</td>
                                <td class="py-3 px-4">3</td>
                                <td class="py-3 px-4">
                                    <button class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition-all">Accepter</button>
                                    <button class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition-all ml-2">Refuser</button>
                                </td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-3 px-4">Lucas Martin</td>
                                <td class="py-3 px-4">21:30</td>
                                <td class="py-3 px-4">8</td>
                                <td class="py-3 px-4">
                                    <button class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition-all">Accepter</button>
                                    <button class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition-all ml-2">Refuser</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="addMenu" class="dashboard-section">
                <section class="bg-white p-8 rounded-lg shadow-lg mb-6 max-w-2xl mx-auto">
                    <h2 class="text-3xl font-semibold text-gray-800 mb-6 text-center">Create a New Menu</h2>
                    <form action="checkaddmenu.php" method="POST" class="space-y-6">
                        <div class="flex flex-col">
                            <label for="menuTitle" class="text-lg text-gray-700">Menu Title</label>
                            <input type="text" name="menuTitle" id="menuTitle" class="mt-2 p-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 w-full" placeholder="Enter Menu Title" required>
                        </div>
                        <div class="flex flex-col">
                            <label for="menuDescription" class="text-lg text-gray-700">Menu Description</label>
                            <textarea id="menuDescription" name="menuDescription" rows="4" required class="mt-2 p-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 w-full" placeholder="Describe your menu items here"></textarea>
                        </div>
                        <div id="platsContainer" class="space-y-4">
                            <h3 class="text-xl font-semibold text-gray-700">Plats</h3>
                            <div class="flex space-x-4 items-center">
                                <select name="plats[]" class="p-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 flex-grow" required>
                                    <?php
                                    include 'connected.php'; 

                                    $query = "SELECT id, title FROM plats"; 
                                    $result = $conn->query($query);

                                    if ($result->num_rows > 0) {
                                        while ($plat = $result->fetch_assoc()) {
                                            echo "<option value='" . $plat['id'] . "'>" . htmlspecialchars($plat['title']) . "</option>";
                                        }
                                    } else {
                                        echo "<option value=''>No plats available</option>";
                                    }
                                    ?>
                               
                                <button type="button" class="removePlatButton text-red-500 font-semibold hover:underline">Remove</button>
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <button type="button" id="addPlatsButton" class="bg-green-600 text-white px-6 py-4 rounded-lg hover:bg-green-700 transition-all focus:outline-none focus:ring-2 focus:ring-green-500">
                                Add Another Plat
                            </button>
                        </div>
                        <div class="flex justify-center">
                            <button type="submit" class="bg-blue-600 text-white px-8 py-4 rounded-lg hover:bg-blue-700 transition-all focus:outline-none focus:ring-2 focus:ring-blue-500">
                                Create Menu
                            </button>
                        </div>
                    </form>
                </section>
            </div>
            <!-- <div id="addPlate" class="dashboard-section">
                <section class="bg-white p-8 rounded-lg shadow-lg mb-6 max-w-2xl mx-auto">
                    <h2 class="text-3xl font-semibold text-gray-800 mb-6 text-center">Ajouter un Plat</h2>
                    <form action="check_plat.php" method="POST" enctype="multipart/form-data" class="space-y-6">
                        <div class="flex flex-col">
                            <label for="platTitle" class="text-lg text-gray-700">Title of Plat</label>
                            <input type="text" name="platTitle" id="platTitle" class="mt-2 p-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 w-full" placeholder="Enter Plat Title" required>
                        </div>
                        <div class="flex flex-col">
                            <label for="platIngredients" class="text-lg text-gray-700">Ingredients</label>
                            <textarea id="platIngredients" name="platIngredients" rows="4" required class="mt-2 p-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 w-full" placeholder="List the ingredients"></textarea>
                        </div>
                        <div class="flex flex-col">
                            <label for="platImage" class="text-lg text-gray-700">Plat Image</label>
                            <input type="file" name="platImage" id="platImage" accept="image/*" required class="mt-2 p-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 w-full">
                        </div>
                        <div class="flex justify-center">
                            <button type="submit" class="bg-blue-600 text-white px-8 py-4 rounded-lg hover:bg-blue-700 transition-all focus:outline-none focus:ring-2 focus:ring-blue-500">
                                Ajouter Plat
                            </button>
                        </div>
                    </form>
                </section>
            </div> -->

            <div id="viewClients" class="dashboard-section">
                <section class="bg-white p-8 rounded-lg shadow-lg mb-6 max-w-4xl mx-auto">
                    <h2 class="text-3xl font-semibold text-gray-800 mb-6 text-center">Voir Tous les Clients</h2>
                    <div class="overflow-x-auto">
                        <table class="min-w-full table-auto">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Nom</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Email</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Téléphone</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Adresse</th>
                                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-800">John Doe</td>
                                    <td class="px-6 py-4 text-sm text-gray-800">johndoe@gmail.com</td>
                                    <td class="px-6 py-4 text-sm text-gray-800">+1234567890</td>
                                    <td class="px-6 py-4 text-sm text-gray-800">123 Main Street</td>
                                    <td class="px-6 py-4 text-sm text-gray-800 ```html
">
                                        <button class="text-yellow-500 hover:text-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                                            <span class="material-icons">edit</span>
                                        </button>
                                        <button class="text-red-500 hover:text-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 ml-2">
                                            <span class="material-icons">delete</span>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 text-sm text-gray-800">Jane Smith</td>
                                    <td class="px-6 py-4 text-sm text-gray-800">janesmith@gmail.com</td>
                                    <td class="px-6 py-4 text-sm text-gray-800">+0987654321</td>
                                    <td class="px-6 py-4 text-sm text-gray-800">456 Oak Avenue</td>
                                    <td class="px-6 py-4 text-sm text-gray-800">
                                        <button class="text-yellow-500 hover:text-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                                            <span class="material-icons">edit</span>
                                        </button>
                                        <button class="text-red-500 hover:text-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 ml-2">
                                            <span class="material-icons">delete</span>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>

            <div id="acceptedRequests" class="dashboard-section">
                <div class="flex justify-center space-x-4 mb-6">
                    <button id="demandsButton" class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition-all">Voir les Demandes</button>
                    <button id="acceptedButton" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-all">Clients Acceptés</button>
                    <button id="rejectedButton" class="bg-red-600 text-white px-6 py-2 rounded-lg hover:bg-red-700 transition-all">Clients Refusés</button>
                </div>

                <div id="clientsDemands" class="clients-section hidden">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Clients Demandés</h3>
                    <table class="min-w-full table-auto border-collapse">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="px-4 py-2 border">Nom</th>
                                <th class="px-4 py-2 border">Email</th>
                                <th class="px-4 py-2 border">Demande</th>
                                <th class="px-4 py-2 border">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-4 py-2 border">Client 1</td>
                                <td class="px-4 py-2 border">client1@gmail.com</td>
                                <td class="px-4 py-2 border">polet</td>
                                <td class="px-4 py-2 border">
                                    <button class="bg-blue-500 text-white px-4 py-2 rounded-lg">Accepter</button>
                                    <button class="bg-red-500 text-white px-4 py-2 rounded-lg">Refuser</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">Client 2</td>
                                <td class="px-4 py-2 border">client2@gmail.com</td>
                                <td class="px-4 py-2 border">viend</td>
                                <td class="px-4 py-2 border">
                                    <button class="bg-blue-500 text-white px-4 py-2 rounded-lg">Accepter</button>
                                    <button class="bg-red-500 text-white px-4 py-2 rounded-lg">Refuser</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div id="clientsAccepted" class="clients-section hidden">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Clients Acceptés</h3>
                    <table class="min-w-full table-auto border-collapse">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="px-4 py-2 border ">Nom</th>
                                <th class="px-4 py-2 border">Email</th>
                                <th class="px-4 py-2 border">Demande</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-4 py-2 border">Client 1</td>
                                <td class="px-4 py-2 border">client1@gmail.com</td>
                                <td class="px-4 py-2 border">fish</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">Client 3</td>
                                <td class="px-4 py-2 border">client3@gmail.com</td>
                                <td class="px-4 py-2 border">viend</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div id="clientsRejected" class="clients-section hidden">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Clients Refusés</h3>
                    <table class="min-w-full table-auto border-collapse">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="px-4 py-2 border">Nom</th>
                                <th class="px-4 py-2 border">Email</th>
                                <th class="px-4 py-2 border">Demande</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-4 py-2 border">Client 2</td>
                                <td class="px-4 py-2 border">sami@gmail.com</td>
                                <td class="px-4 py-2 border">fish</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

    <script>
        function openSection(sectionId) {
            const sections = document.querySelectorAll('.dashboard-section');
            sections.forEach(section => section.classList.remove('active'));
            document.getElementById(sectionId).classList.add('active');
        }

        document.getElementById('demandsButton').addEventListener('click', function() {
            document.getElementById('clientsDemands').classList.remove('hidden');
            document.getElementById('clientsAccepted').classList.add('hidden');
            document.getElementById('clientsRejected').classList.add('hidden');
        });

        document.getElementById('acceptedButton').addEventListener('click', function() {
            document.getElementById('clientsAccepted').classList.remove('hidden');
            document.getElementById('clientsDemands').classList.add('hidden');
            document.getElementById('clientsRejected').classList.add('hidden');
        });

        document.getElementById('rejectedButton').addEventListener('click', function() {
            document.getElementById('clientsRejected').classList.remove('hidden');
            document.getElementById('clientsDemands').classList.add('hidden');
            document.getElementById('clientsAccepted').classList.add('hidden');
        });

        document.getElementById("addPlatsButton").addEventListener("click", () => {
            const platsContainer = document.getElementById("platsContainer");
            const allDropdowns = platsContainer.querySelectorAll('select');

            for (let dropdown of allDropdowns) {
                if (dropdown.value === "") {
                    alert("Please select a plat before adding another.");
                    return;
                }
            }

            const platDiv = document.createElement("div");
            platDiv.classList.add("flex", "space-x-4", "items-center");

            const platSelect = document.createElement("select");
            platSelect.name = "plats[]";
            platSelect.required = true;
            platSelect.classList.add("p-4", "border", "border-gray-300", "rounded-md", "focus:outline-none", "focus:ring-2", "focus:ring-green-500", "flex-grow");

            platSelect.innerHTML = `
                <option value="" disabled selected>Select a Plat</option>
                <?php
                if ($result->num_rows > 0) {
                    while ($plat = $result->fetch_assoc()) {
                        echo "<option value='" . $plat['id'] . "'>" . $plat['name'] . "</option>";
                    }
                } else {
                    echo "<option value=''>No plats available</option>";
                }
                ?>
            `;

            const removeButton = document.createElement("button");
            removeButton.type = "button";
            removeButton.classList.add("removePlatButton", " text-red-500", "font-semibold", "hover:underline");
            removeButton.textContent = "Remove";

            platDiv.appendChild(platSelect);
            platDiv.appendChild(removeButton);
            platsContainer.appendChild(platDiv);

            removeButton.addEventListener("click", () => {
                platDiv.remove();
            });
        });

    </script>
</body>
</html>