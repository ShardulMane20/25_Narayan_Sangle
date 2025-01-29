<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin - Agriculture Shops</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                margin: 0;
                padding: 0;
                height: 100vh;
                width: 100vw;
                display: flex;
                justify-content: center;
                align-items: center;
                background: url('agriculture-bg.jpg') no-repeat center center/cover;
                position: relative;
            }

            /* Dark overlay for better contrast */
            body::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.3);
            }

            .container {
                position: relative;
                background: rgba(12, 216, 111, 0.6);
                padding: 30px;
                border-radius: 15px;
                width: 85vw;
                height: 85vh;
                box-sizing: border-box;
                overflow: auto;
                box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
                backdrop-filter: blur(5px);
            }

            .btn-danger{
                background-color: red;
                color: white;
            }

            h2 {
                color: rgb(1, 106, 13);te;
                text-align: center;
                font-weight: bold;
            }

            table {
                background: white;
                color: black;
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.2);
            }

            thead {
                background: rgb(180, 180, 180);
                color: black; /* Changed column header text color to black */
                font-size: 16px; /* Increased font size */
                font-weight: bold;
            }

            th {
                padding: 12px;
                text-align: center;
            }

            .form-group input {
                border-radius: 20px;
                border: 2px solid #528c18;
            }

            .btn-danger {
                border-radius: 20px;
                transition: 0.3s;
            }

            .btn-danger:hover {
                background-color: darkred;
            }

            .search-container {
                display: flex;
                justify-content: flex-end;
                margin-bottom: 15px;
            }

            .input-group {
                width: 300px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>Agriculture Shop Management</h2>
            <hr>

            <div class="search-container">
                <div class="form-group input-group">
                    <input type="search" name="search" id="search" class="form-control" placeholder="Search Product" onkeyup="return search()">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                </div>
            </div>

            <table class="table table-hover" id="display">
                <thead>
                    <tr>
                        <th>Shopkeeper</th>
                        <th>Shop Name</th>
                        <th>Shop Address</th>
                        <th>Phone No</th>
                        <th>Shop GST No</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require "dbcon.php";
                        $sql = "SELECT * FROM shop";
                        $res = mysqli_query($con, $sql);
                        while ($r = mysqli_fetch_array($res)) {
                            echo "<tr id='t1'>";
                            echo "<td>".$r[0]."</td>";
                            echo "<td>".$r[1]."</td>";
                            echo "<td>".$r[2]."</td>";
                            echo "<td>".$r[3]."</td>";
                            echo "<td>".$r[4]."</td>";
                            echo "<td><a href='shopsave.php?action=remove&owner=".$r[0]."' role='button' class='btn btn-danger'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a></td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
