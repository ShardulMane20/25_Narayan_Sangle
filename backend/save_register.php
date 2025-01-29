<?php
require "dbcon.php";
if (isset($_GET["save"])) {
    $fname=$_GET["farmerName"];
$countryname=$_GET["country"];
$state=$_GET["state"];
$districtname=$_GET["district"];
$area=$_GET["area"];
$pincode=$_GET["pincode"];
$phonno=$_GET["phone"];
$email=$_GET["registrationEmail"];

$sql="insert into farmer(fname,countryname,state,districtname,area,pincode,email,phonno,password) values('$fname','$countryname','$state','$districtname','$area','$pincode','$email','$phonno','$pass')";



mysqli_query($con,$sql);
//mysqli_close($con);
echo "<script> 
    var name='$fname';
    alert('Registration Successfull $fname');
</script>";
$extra="../login.php";
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
echo "<script>open('http://$host$uri/$extra','self')</script>";

}
if (isset($_GET["save"])) {
    $email=$_GET["registrationEmail"];
    $pass=$_GET["password"];
    $sql="insert into login(usertype,user_name,password) values('farmer','$email','$pass')";
    mysqli_query($con,$sql);
    mysqli_close($con);
}
// elseif (isset($_GET["action"]))
// {
//     //require "dbcon.php";
//     $name=$_GET["name"];
//     $sql="delete from labour where name='$name'";
//      echo "record delete";
// $extra="../admine/labourrecord.php";
// $host=$_SERVER['HTTP_HOST'];
// $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
// echo "<script>open('http://$host$uri/$extra','self')</script>";
// mysqli_query($con,$sql);

//     mysqli_close($con);

// }


// elseif (isset($_GET["action"]))
// {
//     //require "dbcon.php";
//     $dname= $_GET["dname"];
//     $sql="delete from doctor where dname='$dname'";
//     echo "record delete";
//        $extra="../admine/agrrecord.php";
// $host=$_SERVER['HTTP_HOST'];
// $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
// echo "<script>open('http://$host$uri/$extra','self')</script>";
// mysqli_query($con,$sql);

//     mysqli_close($con);

// }
// //else{
  // $sql="update doctor set dname='$dname'";
   // mysqli_query($con,$sql);
    //mysqli_close($con)
//}
?>
