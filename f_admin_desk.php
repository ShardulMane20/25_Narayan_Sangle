<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<!-- Navigation Bar -->
    
<nav class="bg-green-600 p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
        <img src="img/ns6.png" alt="Paris" style="width:95px;height:80pxa;">
            <a href="#" class="text-white text-5xl font-bold">Farmer Desk</a>
            <div class="hidden md:flex space-x-8 md:space-x-12 text-lg">
                <a href="#home" class="text-white hover:text-gray-200">Home</a>
                <a href="#soil-testing" class="text-white hover:text-gray-200">Soil Testing</a>
                <a href="#disease-detection" class="text-white hover:text-gray-200">Crop Leaf Disease Detection</a>
                <a href="login.html" class="text-white hover:text-gray-200">Log In</a>
                <a href="register.html" class="text-white hover:text-gray-200">Register</a>
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

<body>
    
</body>
</html>