<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agro Products</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<div>
<?php include '../../backend/head.php' ?>
</div>

<body style="background: linear-gradient(to bottom right, #d4edda, #a8df65); font-family: sans-serif;">
    <div style="max-width: 1200px; margin: auto; padding: 40px;">
        <h1 style="text-align: center; font-size: 40px; font-weight: bold; color: #2d6a4f; margin-bottom: 30px; text-shadow: 2px 2px 3px rgba(0,0,0,0.2);">🌾 Agro Products 🌿</h1>
        
        <!-- Search Bar -->
        <div style="display: flex; justify-content: center; margin-bottom: 30px;">
            <input type="search" id="search" placeholder="Search Product Name Here" onkeyup="search()"
                style="width: 400px; padding: 12px; border-radius: 25px; border: 2px solid #4caf50; outline: none; box-shadow: 3px 3px 6px rgba(0,0,0,0.15); font-size: 16px;">
        </div>
        
        <!-- Product Table -->
        <div style="overflow-x: auto;">
            <table style="width: 100%; background: white; box-shadow: 3px 3px 12px rgba(0,0,0,0.15); border-radius: 12px; overflow: hidden; border: 2px solid #4caf50; font-size: 16px; text-align: center;">
                <thead style="background: #2d6a4f; color: white; font-size: 18px;">
                    <tr>
                        <th style="padding: 14px;">Product Name</th>
                        <th style="padding: 14px;">Product Picture</th>
                        <th style="padding: 14px;">Product Company</th>
                        <th style="padding: 14px;">Product Price</th>
                        <th style="padding: 14px;">Product Description</th>
                        <th style="padding: 14px;">Buy Now</th>
                    </tr>
                </thead>
                <tbody style="font-size: 16px;">
                    <?php
                    require "dbcon.php";
                    $sql = "SELECT * FROM product";
                    $res = mysqli_query($con, $sql);
                    while ($r = mysqli_fetch_array($res)) {
                        echo "<tr style='border-bottom: 2px solid #ddd; background: #ffffff; transition: background 0.3s;'>";
                        echo "<td style='padding: 14px; font-weight: bold; color: #1b4332;'>".$r[1]."</td>";
                        echo "<td style='padding: 14px;'><img src='product_img/".$r[0]."' alt='Product Image' style='width: 120px; height: 90px; border-radius: 10px; box-shadow: 3px 3px 8px rgba(0,0,0,0.1); transition: transform 0.3s;'></td>";
                        echo "<td style='padding: 14px; font-weight: bold; color: #6d4c41;'>".$r[2]."</td>";
                        echo "<td style='padding: 14px; font-weight: bold; color: #ff9800;'>₹".$r[3]."</td>";
                        echo "<td style='padding: 14px; color: #3e2723; max-width: 400px; text-overflow: ellipsis; white-space: nowrap; overflow: hidden;'>".$r[4]."</td>";
                        echo "<td style='padding: 14px;'><a href='ord.php?action=remove&dname=".$r[1]."' style='background: linear-gradient(to right, #43a047, #2e7d32); color: white; padding: 10px 16px; border-radius: 25px; text-decoration: none; font-weight: bold; transition: background 0.3s;'>Buy Now</a></td>";
                        echo "</tr>";
                    }
                    mysqli_close($con);
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
