<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rental Farm Equipment Desk</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f0f8eb;
            /* Light green background */
            font-family: 'Arial', sans-serif;
        }

        .panel {
    width: 92%; /* Adjusted width to fit the screen with 4% margin on each side */
    margin: 4% auto; /* 4% margin from all sides */
    padding: 30px;
    border-radius: 10px;
    background: white;
    box-shadow: 0px 0px 15px rgba(0, 128, 0, 0.2);
    border-left: 5px solid rgb(35, 204, 75); /* Fixed typo in border-left property */
}

        

        h2 {
            font-weight: bold;
            color: #155724;
            /* Dark green */
        }

        .nav-tabs {
            border: none;
            background: rgba(63, 230, 60, 0.77);
            /* Green tab background */
            border-radius: 10px;
            padding: 5px;
        }

        .nav-link {
            font-size: 16px;
            font-weight: bold;
            color: white;
        }

        .nav-link.active {
            background-color: #155724;
            color: white;
            border-radius: 5px;
        }

        .table th {
            background-color: #28a745;
            /* Green */
            color: white;
        }

        .table-striped tbody tr:hover {
            background-color: #f1f1f1;
        }

        .form-label {
            font-weight: bold;
            color: #155724;
            /* Dark green */
        }

        .btn-primary {
            background-color: #28a745;
            border: none;
        }

        .btn-primary:hover {
            background-color: #218838;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .product-img {
            width: 60px;
            height: 60px;
            border-radius: 5px;
        }

        .btn-sm {
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="panel">
        <div class="d-flex justify-content-between align-items-center">
        <a class="btn btn-secondary" href="Rental_product.php" role="button">Rental Product</a>
            <h2>Rental Farm Equipment Desk</h2>
            <a class="btn btn-danger" href="../../backend/logout.php" role="button">Logout</a>
        </div>

        <ul class="nav nav-tabs mt-4" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#addProduct" data-bs-toggle="tab">Add Rental Equipment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#orders" data-bs-toggle="tab">Rental Orders</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#pro" data-bs-toggle="tab">Equipment Management</a>
            </li>
        </ul>

        <div class="tab-content mt-3">
            <!-- Add Product Tab -->
            <div class="tab-pane fade show active" id="addProduct">
                <form action="productsave.php" method="post" enctype="multipart/form-data">
                    <legend class="mb-4">Add Rental Equipment</legend>
                    <div class="mb-3">
                        <label class="form-label">Equipment Name</label>
                        <input type="text" class="form-control" name="pname" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Equipment Brand</label>
                        <input type="text" class="form-control" name="pcompany" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Rental Price (per day)</label>
                        <input type="number" class="form-control" name="pprice" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Equipment Image</label>
                        <input type="file" class="form-control" name="file" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description" rows="10" required maxlength="5000"></textarea>
                    </div>
                    <button type="submit" id="save" name="save" class="btn btn-primary">Submit</button>
                </form>
            </div>

            <!-- Orders Tab -->
            <div class="tab-pane fade" id="orders">
                <div class="table-responsive mt-3">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>No.</th>
                                <th>Equipment Name</th>
                                <th>Agency Name</th>
                                <th>Customer Name</th>
                                <th>Contact No</th>
                                <th>State</th>
                                <th>District</th>
                                <th>Pincode</th>
                                <th>Rental Days</th>
                                <th>Base Price</th>
                                <th>Offer Price</th>
                                <th>Payment</th>
                                <th>Reqest date</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require "dbcon.php";
                            $sql = "SELECT * FROM r_orderproduct";
                            $res = mysqli_query($con, $sql);
                            while ($r = mysqli_fetch_array($res)) {
                                echo "<tr>";
                                for ($i = 0; $i < 13; $i++) {
                                    echo "<td>" . $r[$i] . "</td>";
                                }
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Product Management Tab -->
            <div class="tab-pane fade" id="pro">
                <div class="table-responsive mt-3">
                    <h3 class="text-center mb-4">Rental Equipment Records</h3>
                    <table class="table table-hover table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>Image</th>
                                <th>Equipment Name</th>
                                <th>Brand</th>
                                <th>Rental Price</th>
                                <th>Description</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require "dbcon.php";
                            $sql = "SELECT * FROM r_product";
                            $res = mysqli_query($con, $sql);
                            while ($r = mysqli_fetch_array($res)) {
                                echo "<tr>";
                                echo "<td><img class='product-img' src='product_img/" . $r[0] . "'></td>";
                                echo "<td>" . $r[1] . "</td>";
                                echo "<td>" . $r[2] . "</td>";
                                echo "<td>" . $r[3] . "</td>";
                                echo "<td>" . $r[4] . "</td>";
                                echo "<td><a href='productsave.php?action=remove&R_pname=" . urlencode($r[1]) . "' role='button' class='btn btn-danger btn-sm'><i class='fas fa-trash'></i></a></td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>