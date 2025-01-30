<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order Product</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(to bottom right, #d4edda, #a8df65);
            font-family: sans-serif;
        }
        .panel-success {
            border-color: #43a047;
        }
        .panel-heading {
            background-color: #43a047;
            color: white;
            font-size: 24px;
            text-align: center;
            padding: 15px;
        }
        .panel-body {
            background-color: #ffffff;
            padding: 30px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .form-control {
            border-radius: 25px;
            margin-bottom: 15px;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #43a047;
            border: none;
            padding: 12px 20px;
            border-radius: 25px;
            font-size: 16px;
            width: 100%;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #388e3c;
        }
        .container {
            width: 50%;
            margin: auto;
            padding: 40px;
        }
        select.form-control {
            background-color: #f1f1f1;
            font-size: 16px;
            padding: 10px;
        }
    </style>
</head>
<body>

<?php
require "dbcon.php";
if (isset($_GET["action"])) {
    $dname = $_GET["dname"];
}
?>

<?php
session_start();
if (isset($_GET["action"])) {
    $dname = $_GET["dname"];
    $pname = "SELECT * FROM product WHERE pname='$dname'";
    $sql = mysqli_query($con, $pname);
    $num_count = mysqli_num_rows($sql);
    if ($num_count) {
        $pass = mysqli_fetch_assoc($sql);
        $sp = $pass["pcompany"];
    }
}
?>

<div class="container">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h2 class="panel-title">Order Product</h2>
        </div>
        <div class="panel-body">
            <form action="saveorder.php" method="POST" role="form" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="pname">Product Name</label>
                    <input type="text" class="form-control" id="pname" name="pname" readonly="readonly" value="<?php echo $dname; ?>" placeholder="Input field">
                </div>
                <div class="form-group">
                    <label for="sname">Shop Name</label>
                    <input type="text" class="form-control" id="sname" name="sname" readonly="readonly" value="<?php echo $sp; ?>" placeholder="Input field">
                </div> 

                <div class="form-group">
                    <label for="fname">Full Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="Input field">
                </div>
                <div class="form-group">
                    <label for="num">Contact Number</label>
                    <input type="text" class="form-control" id="num" name="num" placeholder="Input field">
                </div>
                <div class="form-group">
                    <label for="state">State</label>
                    <input type="text" class="form-control" id="state" name="state" placeholder="Input field">
                </div>
                <div class="form-group">
                    <label for="dis">District</label>
                    <input type="text" class="form-control" id="dis" name="dis" placeholder="Input field">
                </div>
                <div class="form-group">
                    <label for="sdis">Sub District</label>
                    <input type="text" class="form-control" id="sdis" name="sdis" placeholder="Input field">
                </div>
                <div class="form-group">
                    <label for="area">Area</label>
                    <input type="text" class="form-control" id="area" name="area" placeholder="Input field">
                </div>
                <div class="form-group">
                    <label for="pcode">PIN Code</label>
                    <input type="text" class="form-control" id="pcode" name="pcode" placeholder="Input field">
                </div>

                <label for="pm">Payment Method</label>
                <select name="pm" id="pm" class="form-control" required="required">
                    <option value="Credit Card">Credit Card</option>
                    <option value="Debit Card">Debit Card</option>
                    <option value="UPI">UPI</option>
                    <option value="CASH ON DELIVERY">CASH ON DELIVERY</option>
                </select><br>

                <button type="submit" class="btn btn-primary" value="save" name="save">Buy Now</button>
            </form>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
