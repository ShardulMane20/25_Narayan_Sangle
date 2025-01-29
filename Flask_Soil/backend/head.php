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
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>

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
        <div class="container mx-7 flex justify-between items-center">
        <img src="../img/logo1.png" alt="Paris" style="width:79px;height:65px;">
            <a href="#" class="text-white text-2xl font-bold">Crop Health</a>
            <div class="hidden md:flex space-x-8 md:space-x-12 text-lg">
                <a href="#home" class="text-white hover:text-green-900">Home</a>
                <a href="../templates\Soil_Fertilizer.php" class="text-white hover:text-gray-200">Soil Testing</a>
                <a href="../templates\CropDisease.php" class="text-white hover:text-gray-200">Crop Leaf Disease Detection</a>
               
                <div>
            <div class="dropdown justify-items-end">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username']; ?></button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="../profile.php">View Profile</a>
                    <a class="dropdown-item" href="settings.php">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
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
            <a href="#" class="block text-white py-2">Soil Testing</a>
            <a href="#disease-detection" class="block text-white py-2">Crop Leaf Disease Detection</a>
            <a href="#login" class="block text-white py-2">Log In</a>
            <a href="#register" class="block text-white py-2">Register</a>
        </div>
    </nav>

</body>
</html>


