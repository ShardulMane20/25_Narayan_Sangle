<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crop Health Identification</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
        <!-- Navigation Bar -->
    
    <nav class="bg-green-600 p-2 shadow-lg">
        <div class="container mx-7 flex justify-between items-center">
        <img src="img/logo1.png" alt="Paris" style="width:79px;height:65px;">
            <a href="#" class="text-white text-2xl  font-bold ">Smart AgriTech</a>
            <div class="hidden md:flex space-x-8 md:space-x-12 text-lg">
                <a href="#home" class="text-white hover:text-gray-200">Home</a>
                <a href="login.php" class="text-white hover:text-gray-200">Log In</a>
                <a href="register.php" class="text-white hover:text-gray-200">Register</a>
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
            <a href="#soil-testing" class="block text-white py-2">Soil Testing</a>
            <a href="#disease-detection" class="block text-white py-2">Crop Leaf Disease Detection</a>
            <a href="#login" class="block text-white py-2">Log In</a>
            <a href="#register" class="block text-white py-2">Register</a>
        </div>
    </nav>
    <div id="h1" style="height: 450px; background-color: white;">
        <img src="crop2.jpg" alt="crop" style="width: 100%; height: 100%;opacity: 70%;margin: 2%;">
        

    </div>

    <!-- Main Content -->
    <section class="container mx-auto py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Soil Testing Module -->
            <a href="#soil-testing" class="block p-8 bg-green-400 shadow-lg rounded-lg hover:shadow-2xl transition duration-300" style="background-image: url('https://via.placeholder.com/600x400?text=Soil+Testing'); background-size: cover; background-position: center;">
                <div class="bg-white bg-opacity-75 p-4 rounded">
                    <h2 class="text-3xl font-bold text-green-600">Soil Testing</h2>
                    <p class="mt-4 text-gray-600">Analyze the quality of your soil to ensure optimal crop growth.</p>
                </div>
            </a>
            <!-- Crop Leaf Disease Detection Module -->
            <a href="#disease-detection" class="block p-8 bg-green-600 shadow-lg rounded-lg hover:shadow-2xl transition duration-300" style="background-image: url('https://via.placeholder.com/600x400?text=Crop+Leaf+Disease+Detection'); background-size: cover; background-position: center;">
                <div class="bg-white bg-opacity-75 p-4 rounded">
                    <h2 class="text-3xl font-bold text-green-600">Crop Leaf Disease Detection</h2>
                    <p class="mt-4 text-gray-600">Identify diseases in crop leaves early to prevent crop loss.</p>
                </div>
            </a>
        </div>
    </section>
    

    <script>
        // Mobile menu toggle
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
    <div id="footer">
    <?php
    include 'footer.php';
    ?>
    </div>
</body>
</html>