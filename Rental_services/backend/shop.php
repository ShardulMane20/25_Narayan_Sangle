<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agri Shop Registration</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        body {
            background: url('https://source.unsplash.com/1600x900/?farm,agriculture') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Poppins', sans-serif;
        }
        .container {
            margin-top: 5%;
        }
        .panel {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .panel-heading {
            background: #4CAF50;
            color: white;
            font-size: 20px;
            text-align: center;
            padding: 15px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .btn-primary {
            background: #4CAF50;
            border: none;
            transition: 0.3s;
        }
        .btn-primary:hover {
            background: #388E3C;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel">
                <div class="panel-heading">Register Rental Service</div>
                <div class="panel-body">
                    <form action="shopsave.php" method="GET" role="form" onsubmit="return shop()">
                        <div class="form-group">
                            <label for="owner">Service Provider Name</label>
                            <input type="text" class="form-control" id="owner" name="owner" placeholder="Enter Shopkeeper Name" required>
                        </div>
                        <div class="form-group">
                            <label for="sname">Agency Name</label>
                            <input type="text" class="form-control" id="sname" name="sname" placeholder="Shop Name" required>
                        </div>
                        <div class="form-group">
                            <label for="saddress">Agency Address</label>
                            <input type="text" class="form-control" id="saddress" name="saddress" placeholder="Shop Address" required>
                        </div>
                        <div class="form-group">
                            <label for="ownumber">Service Provider Phone No.</label>
                            <input type="number" class="form-control" id="ownumber" name="ownumber" placeholder="Shopkeeper Phone No" required>
                        </div>
                        <div class="form-group">
                            <label for="gst">Agency GST No</label>
                            <input type="text" class="form-control" id="gst" name="gst" placeholder="GST No" required>
                        </div>
                        <div class="form-group">
                            <label for="txtid">User Name</label>
                            <input type="text" class="form-control" id="txtid" name="txtid" placeholder="Enter User Name" required>
                        </div>
                        <div class="form-group">
                            <label for="txtpas">Password</label>
                            <input type="password" class="form-control" id="txtpas" name="txtpas" placeholder="Enter Password" required>
                        </div>
                        <div class="form-group">
                            <label for="txtpass">Re-enter Password</label>
                            <input type="password" class="form-control" id="txtpass" name="txtpass" placeholder="Re-enter Password" required>
                        </div>
                        <button type="submit"  name="save" id="save" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
