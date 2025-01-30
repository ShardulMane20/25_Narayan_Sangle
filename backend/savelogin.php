<?php
require 'dbcon.php';
session_start(); // Start the session

if (isset($_GET["save"])) {
    $uname = $_GET["uname"];
    $password = $_GET["pass"];
    $selectedUserType = $_GET["userType"]; // Get the selected user type from the dropdown

    $query = "SELECT * FROM login WHERE user_name='$uname'";
    $result = mysqli_query($con, $query);
    $num_count = mysqli_num_rows($result);

    if ($num_count) {
        $pass = mysqli_fetch_assoc($result);
        $db_pass = $pass['password'];
        $db_userType = $pass['usertype'];
        $username = $pass['user_name'];

        if ($db_pass == $password) {
            if ($db_userType == $selectedUserType) { // Check if the selected user type matches the database
                // Set session for the logged-in user
                $_SESSION['username'] = $username;
                $_SESSION['usertype'] = $db_userType;

                echo "<script>
                alert('Login Successful, $username');
                </script>";

                // Redirect based on user type
                if ($db_userType == "farmer") {
                    $extra = "dashboard.php"; // Redirect to the farmer dashboard
                } elseif ($db_userType == "shopkeeper") {
                    $extra = "../Shopmodule/backend/product.php"; // Redirect to the shopkeeper dashboard
                } elseif ($db_userType == "rental services") {
                    $extra = "../Rental_services/backend/product.php"; 
                } elseif ($db_userType == "admin") {
                    $extra = "../Rental_services\backend\.php"; 
                    // Redirect to the rental services dashboard
                } else {
                    $extra = "dashboard.php"; // Default redirect
                }

                $host = $_SERVER['HTTP_HOST'];
                $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                echo "<script>window.location.href = 'http://$host$uri/$extra';</script>";
            } else {
                echo "<script>alert('User Type does not match');</script>";
                $extra = "../login.php";
                $host = $_SERVER['HTTP_HOST'];
                $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                echo "<script>open('http://$host$uri/$extra','self')</script>";
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
