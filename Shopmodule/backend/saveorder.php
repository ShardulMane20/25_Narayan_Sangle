<?php
    require "dbcon.php"; 
    if (isset($_POST["save"])) echo""; {
    $pname=$_POST["pname"];
    $sname=$_POST["sname"];
    $name=$_POST["fname"]; 
    $number=$_POST["num"];
    $state=$_POST["state"];
    $distric=$_POST["dis"];
    $sdistric=$_POST["sdis"];
    $area=$_POST["area"];
    $pincode=$_POST["pcode"];
    $pay=$_POST["pm"];
    $sql="insert into orderproduct(pname,sname,fullname,contact,state,district,subdistrict,area,pincode,payment) value('$pname','$sname','$name','$number','$state','$distric','$sdistric','$area','$pincode','$pay')";
    mysqli_query($con,$sql);
    
    



    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Order Submited!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($con) . "');</script>";
    }

    mysqli_close($con);
    }
?>