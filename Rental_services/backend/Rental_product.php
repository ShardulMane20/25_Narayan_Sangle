<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rent Equipment</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200 text-gray-900 font-sans">
    <div> 
    <?php include "C:/xampp/htdocs/Flask_Soil/backend/head.php"; ?>
    </div>
    
    <!-- Header -->
    <div class="py-3 shadow-md text-center">
        <h1 class="text-4xl font-bold text-black ml-12">Rent Equipment</h1>
    </div>
    
    <!-- Search Bar -->
    <div class="flex justify-end my-2 mx-auto">
        <input type="search" id="search" placeholder="Search Equipment..." 
               class="w-1/7 p-1 rounded-full text-black-900 border-2 border-green-500 focus:ring-2 focus:ring-green-600 shadow-md mx-3">
    </div>
    
    <!-- Product Grid -->
    <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 p-6">
        <?php
        require "dbcon.php";
        $sql = "SELECT * FROM r_product";
        $res = mysqli_query($con, $sql);
        while ($r = mysqli_fetch_array($res)) {
            $shortDesc = substr($r[4], 0, 100); // Show only 100 characters initially
            $fullDesc = $r[4]; // Full description
        ?>
        <div class="bg-white p-6 rounded-lg shadow-xl transition transform hover:scale-105 border border-gray-300">
            <img src="product_img/<?php echo $r[0]; ?>" alt="Equipment Image" 
                 class="w-full h-40 object-cover rounded-lg">
            <h2 class="text-xl font-bold mt-4 text-green-600"> <?php echo $r[1]; ?> </h2>
            <p class="text-gray-600">Company: <span class="font-semibold"> <?php echo $r[2]; ?> </span></p>
            <p class="text-yellow-500 font-bold mt-2">₹<?php echo $r[3]; ?></p>

            <!-- Description Section -->
            <p class="text-sm text-gray-700 mt-2" id="desc-<?php echo $r[1]; ?>">
                <?php echo $shortDesc; ?>...
            </p>
            <button onclick="toggleDescription('<?php echo $r[1]; ?>', '<?php echo addslashes($fullDesc); ?>')" 
                    id="btn-<?php echo $r[1]; ?>"
                    class="text-blue-500 mt-2 cursor-pointer underline hover:text-blue-700">
                Read More
            </button>
            
            <a href="ord.php?action=remove&dname=<?php echo $r[1]; ?>" 
               class="block text-center mt-4 py-2 bg-gradient-to-r from-green-500 to-blue-600 text-white 
                      rounded-lg font-bold hover:opacity-90 transition">
                Rent Now
            </a>
        </div>
        <?php }
        mysqli_close($con);
        ?>
    </div>

    <script>
        function toggleDescription(id, fullDesc) {
            let desc = document.getElementById('desc-' + id);
            let btn = document.getElementById('btn-' + id);

            if (desc.innerText.includes('...')) {
                desc.innerText = fullDesc; // Expand full description
                btn.innerText = "Read Less";
            } else {
                desc.innerText = fullDesc.substring(0, 100) + "..."; // Collapse back
                btn.innerText = "Read More";
            }
        }
    </script>
    <div>
    <?php include "C:/xampp/htdocs/Flask_Soil/footer.php"; ?>
    </div>
</body>
</html>
