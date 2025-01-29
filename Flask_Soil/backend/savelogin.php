<?php
require 'dbcon.php';
session_start(); // Start the session

if (isset($_GET["save"])) {
    $uname = $_GET["uname"];
    $password = $_GET["pass"];
    $query = "SELECT * FROM login WHERE user_name='$uname'";
    $result = mysqli_query($con, $query);
    $num_count = mysqli_num_rows($result);

    if ($num_count) {
        $pass = mysqli_fetch_assoc($result);
        $db_pass = $pass['password'];
        $utype = $pass['usertype'];
        $username = $pass['user_name'];

        if ($db_pass == $password) {
            // Set session for the logged-in user
            $_SESSION['username'] = $username;
            $_SESSION['usertype'] = $utype;

            echo "<script>
            alert('Login Successful, $username');
            </script>";

            if ($utype == "farmer") {
                $extra = "dashboard.php"; // Redirect to the farmer dashboard
                $host = $_SERVER['HTTP_HOST'];
                $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                echo "<script>window.location.href = 'http://$host$uri/$extra';</script>";
            }
            
        } else {
            echo "<script>alert('Password is Incorrect');</script>";
            $extra = "../login.php";
            $host = $_SERVER['HTTP_HOST'];
            $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
            echo "<script>open('http://$host$uri/$extra','self')</script>";
        }
    } else {
        echo "<script>alert('Invalid User Name');</script>";
        $extra = "../login.php";
        $host = $_SERVER['HTTP_HOST'];
        $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        echo "<script>open('http://$host$uri/$extra','self')</script>";
    }
}
?>
