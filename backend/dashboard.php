<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['usertype'] !== 'farmer'){
    header("Location: ../login.php"); // Redirect to login if not authenticated
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crop Health Identification</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <style>
        .dropdown-menu a {
            color: #000;
            text-decoration: none;
        }

        .dropdown-menu a:hover {
            background-color: #f8f9fa;
            color: #007bff;
        }

        .navbar {
            background-color: #2E7D32;
            padding: 10px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        .navbar .dropdown-menu {
            background-color: #fff;
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Navigation Bar -->
    <nav class="bg-green-600 p-2 shadow-lg">
        <div class="container mx-3 flex justify-between items-center">
            <img src="../img/logo1.png" alt="Paris" style="width:79px;height:65px;">
            <a href="#" class="text-white text-2xl font-bold">Crop Health</a>
            <div class="hidden md:flex space-x-8 md:space-x-12 text-lg">
                <a href="../templates/Soil_Fertilizer.php" class="text-white hover:text-gray-200">Soil Testing</a>
                <a href="../templates/CropDisease.php" class="text-white hover:text-gray-200">Crop Disease Detection</a>
                <a href="..\Shopmodule\backend\index.php" class="text-white hover:text-gray-200">Market Place</a>
                <div class="dropdown justify-items-end">
                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $_SESSION['username']; ?>!
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="../profile.php">View Profile</a>
                        <a class="dropdown-item" href="settings.php">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../nav.php">Logout</a>
                    </div>
                </div>
            </div>
            <div class="md:hidden">
                <button class="text-white mobile-menu-button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="hidden mobile-menu">
            <a href="#home" class="block text-white py-2">Home</a>
            <a href="../templates/Soil_Fertilizer.php" class="block text-white py-2">Soil Testing</a>
            <a href="../templates/CropDisease.php" class="block text-white py-2">Crop Leaf Disease Detection</a>
            <a href="logout.php" class="block text-white py-2">Log Out</a>
        </div>
    </nav>
    <div id="h1" style="height: 450px; background-color: white;">
        <img src="../img/crop2.jpg" alt="crop" style="width: 100%; height: 100%; opacity: 70%; margin: 2%;">
    </div>

    <!-- Main Content -->
    <section class="container mx-auto py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Soil Testing Module -->
            <a href="../templates/index.html" class="block p-8 bg-green-400 shadow-lg rounded-lg hover:shadow-2xl transition duration-300" style="background-image: url('../img/soil.jpg'); background-size: cover; background-position: center;">
                <div class="bg-white bg-opacity-75 p-4 rounded">
                    <h2 class="text-3xl font-bold text-green-600">Soil Testing</h2>
                    <p class="mt-4 text-gray-600">Analyze the quality of soil to ensure optimal crop growth.</p>
                </div>
            </a>
            <!-- Crop Leaf Disease Detection Module -->
            <a href="#disease-detection" class="block p-8 bg-green-600 shadow-lg rounded-lg hover:shadow-2xl transition duration-300" style="background-image: url('../img/leaf.jpg'); background-size: cover; background-position: center;">
                <div class="bg-white bg-opacity-75 p-4 rounded">
                    <h2 class="text-3xl font-bold text-green-600">Crop Leaf Disease Detection</h2>
                    <p class="mt-4 text-gray-600">Identify diseases in crop leaves early to prevent crop loss.</p>
                </div>
            </a>
        </div>
    </section>

    <!-- Footer -->
    <div id="footer">
        <?php include '../footer.php'; ?>
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.dropdown-toggle').dropdown();
        });

        // Mobile menu toggle
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
</body>
</html>
