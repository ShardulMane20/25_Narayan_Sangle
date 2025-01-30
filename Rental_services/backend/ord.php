<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rent Agricultural Equipment</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #e0f7fa, #80cbc4);
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 60%;
            background: #ffffff;
            padding: 30px;
            border-radius: 12px;
            margin-top: 50px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
        }

        .form-control {
            border-radius: 8px;
            padding: 12px;
            font-size: 16px;
        }

        .btn-primary {
            background-color: #00796b;
            border: none;
            padding: 12px;
            font-size: 18px;
            border-radius: 8px;
        }

        .btn-primary:hover {
            background-color: #004d40;
        }

        .form-label {
            font-weight: 600;
        }

        .panel-heading {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: #00796b;
            margin-bottom: 20px;
        }

        @media (max-width: 768px) {
            .container {
                max-width: 90%;
                padding: 20px;
            }
        }
    </style>
</head>

<body>

    <?php
    require "dbcon.php";
    session_start();

    if (isset($_GET["action"])) {
        $dname = $_GET["dname"];
        $pname = "SELECT * FROM r_product WHERE R_pname='$dname'";
        $sql = mysqli_query($con, $pname);
        $num_count = mysqli_num_rows($sql);

        if ($num_count) {
            $pass = mysqli_fetch_assoc($sql);
            $sp = $pass["R_pcompany"];
            $base_price = $pass["R_pprice"]; // Fetch base rental price from database
        }
    }
    ?>

    <div class="container">
        <div class="panel-heading">Rent Agricultural Equipment</div>
        <form action="saveorder.php" method="POST" role="form">
            <div class="mb-3">
                <label for="pname" class="form-label">Rental Product Name</label>
                <input type="text" class="form-control" id="pname" name="pname" readonly value="<?php echo $dname; ?>">
            </div>
            <div class="mb-3">
                <label for="sname" class="form-label">Rental Product Shop Name</label>
                <input type="text" class="form-control" id="sname" name="sname" readonly value="<?php echo $sp; ?>">
            </div>
            <div class="mb-3">
                <label for="fname" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter Your Full Name"
                    required>
            </div>
            <div class="mb-3">
                <label for="num" class="form-label">Contact Number</label>
                <input type="text" class="form-control" id="num" name="num" placeholder="Enter Your Contact Number"
                    required>
            </div>
            <div class="mb-3">
                <label for="state" class="form-label">State</label>
                <input type="text" class="form-control" id="state" name="state" required>
            </div>
            <div class="mb-3">
                <label for="dis" class="form-label">District</label>
                <input type="text" class="form-control" id="dis" name="dis" required>
            </div>
            <div class="mb-3">
                <label for="pcode" class="form-label">PIN Code</label>
                <input type="text" class="form-control" id="pcode" name="pcode" required>
            </div>

            <!-- Rental Duration Selection -->
            <div class="mb-3">
                <label for="rental_days" class="form-label">Rental Duration (in Days)</label>
                <input type="number" class="form-control" id="rental_days" name="rental_days" required min="1">
            </div>

            <!-- Base Rental Price (Per Day) -->
            <div class="mb-3">
                <label for="base_price" class="form-label">Base Price Per Day </label>
                <input type="text" class="form-control" id="base_price" name="base_price" readonly
                    value="<?php echo $base_price; ?>">
            </div>

            <!-- Bargain Offer Price -->
            <div class="mb-3">
                <label for="offer_price" class="form-label">Your Offer Price Per Day (Bargain)</label>
                <input type="number" class="form-control" id="offer_price" name="offer_price" required>
            </div>

            <div class="mb-3">
                <label for="pm" class="form-label">Payment Method</label>
                <select name="pm" id="pm" class="form-select" required>
                    <option value="Credit Card">Credit Card</option>
                    <option value="Debit Card">Debit Card</option>
                    <option value="UPI">UPI</option>
                    <option value="Cash on Delivery">Cash on Delivery</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary w-100" name="rent">Rent Now</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>