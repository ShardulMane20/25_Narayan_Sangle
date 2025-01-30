<?php
require "dbcon.php";

if (isset($_POST["rent"])) {
    $pname = $_POST["pname"];
    $sname = $_POST["sname"];
    $name = $_POST["fname"];
    $number = $_POST["num"];
    $state = $_POST["state"];
    $district = $_POST["dis"];
    $pincode = $_POST["pcode"];
    $rental_days = $_POST["rental_days"];
    $base_price = $_POST["base_price"];
    $offer_price = $_POST["offer_price"];
    $pay = $_POST["pm"];

    // SQL query
    $sql = "INSERT INTO r_orderproduct (R_pname, R_sname, R_fullname, R_contact, R_state, R_district, R_pincode, R_rental_days, R_base_price, R_offer_price, R_payment) 
            VALUES ('$pname', '$sname', '$name', '$number', '$state', '$district', '$pincode', '$rental_days', '$base_price', '$offer_price', '$pay')";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Rental request saved successfully!'); window.location.href='Rental_product.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($con) . "');</script>";
    }

    mysqli_close($con);
}
?>
