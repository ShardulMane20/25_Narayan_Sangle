<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Shop Keeper Desk</title>
        
        <!-- Bootstrap 5 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                background-color: #f8f9fa;
            }
            .panel {
                max-width: 800px;
                margin: auto;
                margin-top: 20px;
                padding: 20px;
                border-radius: 10px;
                background: white;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            }
            .marquee-text {
                color: blue;
                font-size: 24px;
                font-weight: bold;
            }
            .table-responsive {
                overflow-x: auto;
            }
        </style>
    </head>
    <body>
    <div class="panel">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Shop Keeper Desk</h2>
            <a class="btn btn-danger" href="../../backend/logout.php" role="button">Logout</a>
        </div>
        
        <ul class="nav nav-tabs mt-3" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#addProduct" data-bs-toggle="tab">Add Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#orders" data-bs-toggle="tab">Orders</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#pro" data-bs-toggle="tab">Produt managment</a>
            </li>
        </ul>

        <div class="tab-content mt-3">
            <div class="tab-pane fade show active" id="addProduct">
                <form action="productsave.php" method="post" enctype="multipart/form-data" onsubmit="return product()">
                    <legend>Add Product</legend>
                    <div class="mb-3">
                        <label class="form-label">Product Name</label>
                        <input type="text" class="form-control" name="pname" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Company</label>
                        <input type="text" class="form-control" name="pcompany" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Price</label>
                        <input type="number" class="form-control" name="pprice" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Photo</label>
                        <input type="file" class="form-control" name="file">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Description</label>
                        <textarea class="form-control" name="description" rows="7" required maxlength="5000"></textarea>
                    </div>
                    <button type="submit" id="save" name="save" class="btn btn-primary">Submit</button>
                </form>
            </div>

            <div class="tab-pane fade" id="orders">
                <div class="table-responsive mt-3">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>Product Name</th>
                                <th>Shop Name</th>
                                <th>Name</th>
                                <th>Contact No</th>
                                <th>State</th>
                                <th>District</th>
                                <th>Subdistrict</th>
                                <th>Area</th>
                                <th>Pincode</th>
                                <th>Payment</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                require "dbcon.php";
                                $sql="SELECT * FROM orderproduct";
                                $res= mysqli_query($con, $sql);
                                while ($r=mysqli_fetch_array($res)) {
                                    echo "<tr>";
                                    for ($i = 0; $i < 10; $i++) {
                                        echo "<td>".$r[$i]."</td>";
                                    }
                                    echo "</tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="pro">
        <table class="table table-hover" id="display">
            <thead>
                <tr>
                    <h1>Product Records</h1>
                    
                    <th></th>
                    <th> 
                           
                    </th>
                </tr>
            </thead>
            <tbody>
            <?php
                    require "dbcon.php";
                    $sql="select *from product";
                   $res= mysqli_query($con,$sql);
                   while ($r=mysqli_fetch_array($res)) {
                    echo "<tr id='t1'>";
                    echo "<td style='padding: 14px;'><img src='product_img/".$r[0]."' alt='Product Image' style='width: 140px; height: 110px; border-radius: 10px; box-shadow: 3px 3px 8px rgba(0,0,0,0.1); transition: transform 0.3s;'></td>";
                    echo "<td>".$r[1]."</td>";
                    echo "<td>".$r[2]."</td>";
                    echo "<td>".$r[3]."</td>";
                    echo "<td>".$r[4]."</td>";
                    echo "<td><a href='../database/productsave.php?action=remove&pname=".$r[1]."'role='button'class='btn btn-danger'><span class='glyphicon glyphicon-trash'aria-hidden='true'></span></button></td>";
                    echo "</tr>";
                
                   }
                   
                    ?>
          
                </tbody>
        </table></div>
        
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
