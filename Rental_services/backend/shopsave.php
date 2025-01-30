<?php
require "dbcon.php";

if (isset($_GET["save"])) {
    $owner = $_GET["owner"];
    $sname = $_GET["sname"];
    $saddress = $_GET["saddress"];
    $ownumber = $_GET["ownumber"];
    $gst = $_GET["gst"];
    
    // Insert shop details into shop table
    $sql = "INSERT INTO R_shop(R_owner, R_sname, R_saddress, R_ownumber,R_gst) VALUES('$owner', '$sname', '$saddress', '$ownumber', '$gst')";
    mysqli_query($con, $sql);
    
    // Now, insert the shopkeeper login into the login table
    $id = $_GET["txtid"];
    $pass = $_GET["txtpass"];
    $utype = "rental services"; // User type is set as "shopkeeper"
    $sql = "INSERT INTO login(usertype, user_name, password) VALUES('$utype', '$id', '$pass')";
    mysqli_query($con, $sql);
    
    mysqli_close($con);

    // Show alert message and redirect
    echo "<script>
            alert('Registration Completed!');
            window.location.href='../../login.php';
          </script>";
    exit();
}

elseif (isset($_GET["action"])) {
    $owner = $_GET["owner"];
    $sql = "DELETE FROM r_shop WHERE R_owner='$owner'";
    mysqli_query($con, $sql);
    
    mysqli_close($con);

    // Show alert message and redirect
    echo "<script>
            alert('Record Deleted Successfully!');
            window.location.href='../../login.php';
          </script>";
    exit();
}
?>
