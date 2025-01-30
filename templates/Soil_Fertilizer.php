<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crop Health Identification</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
         <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #9fa4ed, #e8f5e9);
            
        }

        header {
            background: linear-gradient(90deg, #38b6ff, #2ecc71);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .input-section {
            background: #ffffff;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        .output-section {
            background: #fdfaf6;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            font-weight: bold;
            color: #ffffff;
        }

        h2 {
            color: #2c3e50;
        }

        label {
            font-weight: 600;
            color: #2c3e50;
        }

        .input-section input {
            border: 2px solid #dce775;
            padding: 10px;
            border-radius: 8px;
            background: #fafafa;
            transition: border-color 0.3s;
        }

        .input-section input:focus {
            border-color: #2ecc71;
            outline: none;
        }

        .result-title {
            font-size: 1.8rem;
            font-weight: bold;
            color: #388e3c;
            margin-bottom: 15px;
        }

        .result-container p {
            color: #6a1b9a;
        }

        .download-btn {
            margin-top: 20px;
            text-decoration: none;
            padding: 12px 24px;
            background-color: #388e3c;
            color: white;
            border-radius: 8px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .download-btn:hover {
            background-color: #2e7d32;
        }
    </style>

</head>
<body>
<div>
<?php include "C:/xampp/htdocs/Flask_Soil/backend/head.php"; ?>

</div>    

    <header class="py-6 text-center">
        <h1 class="text-4xl">Crop & Fertilizer Prediction Tool</h1>
    </header>

    <section class="py-12">
        <div class="container">
            <!-- Input Section -->
            <div class="input-section" style="background-color: #f33e5684; border: 2px solid #d1fad8; border-radius: 8px; padding: 20px; margin-bottom: 20px;">
                <h2 class="text-2xl font-bold mb-6" style="color: #8c0505;">Enter Crop Data</h2>
                <form id="cropForm">
                    <div class="mb-5">
                        <label for="nitrogen" style="color: #131312; font-weight: bold;">Nitrogen (kg/ha):</label>
                        <input type="number" id="nitrogen" name="nitrogen" class="w-full mt-1 p-2 rounded-md border border-green-500 focus:ring-2 focus:ring-green-400 focus:outline-none" required>
                    </div>
                    <div class="mb-5">
                        <label for="phosphorus" style="color: #131312; font-weight: bold;">Phosphorus (kg/ha):</label>
                        <input type="number" id="phosphorus" name="phosphorus" class="w-full mt-1 p-2 rounded-md border border-green-500 focus:ring-2 focus:ring-green-400 focus:outline-none" required>
                    </div>
                    <div class="mb-5">
                        <label for="potassium" style="color: #131312; font-weight: bold;">Potassium (kg/ha):</label>
                        <input type="number" id="potassium" name="potassium" class="w-full mt-1 p-2 rounded-md border border-green-500 focus:ring-2 focus:ring-green-400 focus:outline-none" required>
                    </div>
                    <div class="mb-5">
                        <label for="ph" style="color: #131312; font-weight: bold;">pH Level:</label>
                        <input type="number" step="0.01" id="ph" name="ph" class="w-full mt-1 p-2 rounded-md border border-green-500 focus:ring-2 focus:ring-green-400 focus:outline-none" required>
                    </div>
                    <div class="mb-5">
                        <label for="rainfall" style="color: #131312; font-weight: bold;">Rainfall (mm):</label>
                        <input type="number" id="rainfall" name="rainfall" class="w-full mt-1 p-2 rounded-md border border-green-500 focus:ring-2 focus:ring-green-400 focus:outline-none" required>
                    </div>
                    <div class="mb-5">
                        <label for="temperature" style="color: #131312; font-weight: bold;">Temperature (°C):</label>
                        <input type="number" step="0.1" id="temperature" name="temperature" class="w-full mt-1 p-2 rounded-md border border-green-500 focus:ring-2 focus:ring-green-400 focus:outline-none" required>
                    </div>
                    <button type="button" id="predictButton" class="bg-gradient-to-r from-green-400 to-blue-500 text-white px-6 py-2 rounded-md shadow-lg hover:from-green-600 hover:to-blue-700">
                        Predict
                    </button>
                </form>
            </div>
            
            <!-- Output Section -->
            <!-- Updated Output Section -->
<div class="output-section hidden" id="result" style="background-color:rgba(201, 219, 202, 0.74); border-color: #d1fad8; border-radius: 8px; padding: 20px; margin-bottom: 20px;">
    <div class="result-container" style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
        <div class="result-title" style="color: #07681f; margin-bottom: 20px;">Prediction Results</div>
        <p class="text-lg font-semibold" style="color: #131312; margin-bottom: 10px;">
            <span>Crop:</span> <span id="cropResult"></span>
        </p>
        <p class="text-lg font-semibold" style="color: #131312; margin-bottom: 10px;">
            <span>Fertilizer:</span> <span id="fertilizerResult"></span>
        </p>
        <p class="text-lg font-semibold" style="color: #131312; margin-bottom: 20px;">
            <span>Fertilizer Usage:</span> <span id="usageResult"></span>
        </p>
        <img id="cropImage" alt="Crop Image" class="rounded" 
            style="height: 250px; width: 300px; margin-bottom: 20px; border: 2px solid #10b981; border-radius: 8px;">
        <a id="pdfLink" class="download-btn" target="_blank" 
            style="background-color: #10b981; color: white; border: 1px solid #047857; padding: 10px 20px; font-size: 1rem; text-align: center; border-radius: 5px; transition: background-color 0.3s;">
            Download Report
        </a>
    </div>
</div>
        </div>
    </section>

    <script>
        $('#predictButton').on('click', function () {
            const formData = {
                nitrogen: $('#nitrogen').val(),
                phosphorus: $('#phosphorus').val(),
                potassium: $('#potassium').val(),
                ph: $('#ph').val(),
                rainfall: $('#rainfall').val(),
                temperature: $('#temperature').val()
            };

            $.ajax({
                url: 'http://127.0.0.1:5000/predict_fertilizer',
                type: 'POST',
                data: formData,
                success: function (response) {
                    $('#result').removeClass('hidden');
                    $('#cropResult').text(response.crop);
                    $('#fertilizerResult').text(response.fertilizer);
                    $('#usageResult').text(response.fertilizer_usage);
                    $('#cropImage').attr('src', `http://127.0.0.1:5000/static/crop_images/${response.crop}.jpg`);
                    $('#pdfLink').attr('href', `http://127.0.0.1:5000/static/pdf_reports/${response.pdf_filename}`);
                },
                error: function (xhr, status, error) {
                    alert('An error occurred: ' + error);
                }
            });
        });
    </script>
    <div>
     <?php include "C:/xampp/htdocs/Flask_Soil/footer.php"; ?>
    </div>
</body>
</html>
