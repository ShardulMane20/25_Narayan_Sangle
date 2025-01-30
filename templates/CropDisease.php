<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crop Disease Identification</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #9fa4ed, #e8f5e9);
        }

        header {
            background: linear-gradient(90deg, #38b6ff, #2ecc71);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .container {
            display: grid;
            grid-template-columns: 1fr 1fr; /* Align input and output sections side by side */
            gap: 30px;
            max-width: 1200px;
            margin: 30px auto;
            padding: 20px;
        }

        .input-section, .output-section {
            background: #ffffff;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .input-section:hover, .output-section:hover {
            transform: translateY(-5px); /* Subtle hover effect */
        }

        h1, h2 {
            font-weight: 700;
        }

        h1 {
            color: #ffffff;
        }

        h2 {
            font-size: 1.5rem;
            color: #2c3e50;
            margin-bottom: 15px;
        }

        label {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 8px;
            display: block;
        }

        input {
            border: 2px solid #dce775;
            padding: 12px;
            border-radius: 8px;
            background: #fafafa;
            transition: border-color 0.3s;
            width: 100%;
        }

        input:focus {
            border-color: #2ecc71;
            outline: none;
        }

        .result-title {
            font-size: 1.8rem;
            font-weight: bold;
            color: #388e3c;
            margin-bottom: 15px;
        }

        .result-container {
            text-align: left;
            border-left: 4px solid #388e3c;
            padding: 15px 20px;
            background: #f4f9f4;
            border-radius: 8px;
            margin: 20px 0;
        }

        .result-container p {
            color: #6a1b9a;
            font-weight: 500;
            margin: 5px 0;
        }

        .download-btn {
            margin-top: 20px;
            text-decoration: none;
            padding: 12px 24px;
            background-color:rgb(15, 220, 25);
            color: white;
            border-radius: 8px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .download-btn:hover {
            background-color:rgb(173, 215, 175);
        }

        #pdfLink {
            font-size: 1rem;
            color: #3498db;
            font-weight: 600;
        }

        #pdfLink:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body class="bg-gray-10">
    <div  style="height: auto; ">
    <?php include "C:/xampp/htdocs/Flask_Soil/backend/head.php"; ?>
    </div>

    <header class="bg-green-500 text-white text-center py-6">
        <h1 class="text-3xl font-bold">Crop Disease Identification</h1>
        <p class="text-lg">Upload a crop image to detect diseases and get solutions</p>
    </header>

    <section class="container">
        <!-- Input Section -->
        <form id="uploadForm" class="input-section" enctype="multipart/form-data">
            <h2>Upload Crop Image</h2>
            <div class="mb-4">
                <label for="cropImage" class="block">Select Image:</label>
                <input type="file" id="cropImage" name="cropImage" accept="image/*" required>
                <img id="imagePreview" src="" alt="Image Preview" class="mt-4 hidden max-w-full rounded">
            </div>
            <button type="button" id="detectButton" class="bg-green-500 text-white px-4 py-2 rounded shadow hover:bg-green-600">Upload and Detect</button>
        </form>

        <!-- Output Section -->
        <div id="resultSection" class="output-section hidden">
            <h2 class="result-title">Prediction Results</h2>
            <div class="result-container">
                <p id="diseaseResult"><strong>Disease:</strong> Loading...</p>
                <p id="symptomsResult"><strong>Symptoms:</strong> Loading...</p>
                <p id="solutionResult"><strong>Solution:</strong> Loading...</p>
                <p id="pesticideResult"><strong>Pesticide:</strong> Loading...</p>
            </div>
            <a id="pdfLink" href="#" class="download-btn">Download Report</a>
        </div>
    </section>

    <script>
        // Preview Image on Upload
        $('#cropImage').on('change', function () {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onloadend = () => {
                    $('#imagePreview').attr('src', reader.result).removeClass('hidden');
                };
                reader.readAsDataURL(file);
            }
        });

        // Handle Form Submission
        $('#detectButton').on('click', function () {
            const formData = new FormData();
            const fileInput = $('#cropImage')[0].files[0];

            if (!fileInput) {
                alert('Please select an image to upload.');
                return;
            }

            formData.append('cropImage', fileInput);

            $.ajax({
                url: 'http://127.0.0.1:5000/predict_disease', 
                type: 'POST',
                data: formData,
                processData: false, 
                contentType: false, 
                success: function (response) {
                    if (response.error) {
                        alert(`Error: ${response.error}`);
                        return;
                    }

                    $('#resultSection').removeClass('hidden');
                    $('#diseaseResult').text(`Disease: ${response.disease}`);
                    $('#symptomsResult').text(`Symptoms: ${response.symptoms}`);
                    $('#solutionResult').text(`Solution: ${response.solution}`);
                    $('#pesticideResult').text(`Pesticide: ${response.pesticide}`);
                    $('#pdfLink').attr('href', `http://127.0.0.1:5000/static/reports/${response.pdf_filename}`).text('Download Report');
                },
                error: function (xhr, status, error) {
                    alert(`Error ${xhr.status}: ${xhr.responseText || error}`);
                }
            });
        });
    </script>
    <div style = "height: auto;">
        <?php include "C:/xampp/htdocs/Flask_Soil/footer.php"; ?>
    </div>
</body>
</html>
