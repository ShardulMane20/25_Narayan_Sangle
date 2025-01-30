<?php

echo "hii";
require "dbcon.php";
if (isset($_GET["save"])) {
    $fname=$_GET["farmerName"];
$countryname=$_GET["country"];
$state=$POST$_GET["state"];
$districtname=$_GET["district"];
$area=$_GET["area"];
$pincode=$_GET["pincode"];
$email=$_GET["registrationEmail"];
$phonno=$_GET["phone"];
$pass=$_GET["password"];
$conpass=$_GET["confirmPassword"];
$sql="insert into farmer(fname,countryname,state,districtname,area,pincode,email,phonno,password) values('$fname','$countryname','$state','$districtname','$area','$pincode','$email','$phonno','$pass')";