<?php
require "dbcon.php";

if (isset($_POST["save"])) {
    $pname = $_POST["pname"];
    $pcompany = $_POST["pcompany"];
    $description = $_POST["description"];
    $pprice = $_POST["pprice"];
    
    $files = $_FILES['file'];
    $filename = $files['name'];
    $fileerror = $files['error'];
    $filetemp = $files['tmp_name'];
    $fileext = explode('.', $filename);
    $filecheck = strtolower(end($fileext));
    $fileextstored = array('png', 'jpg', 'jpeg');

    if (in_array($filecheck, $fileextstored)) {
        $destinationfile = 'product_img/' . $filename;
        move_uploaded_file($filetemp, $destinationfile);
        
        $sql = "INSERT INTO r_product(R_pimg,R_pname,R_pcompany,R_pprice,R_description) VALUES ('$filename', '$pname', '$pcompany', '$pprice', '$description')";
        mysqli_query($con, $sql);
        mysqli_close($con);
        
        // Show alert before redirecting
        echo "<script>
                alert('Product Added!');
                open('http://{$_SERVER['HTTP_HOST']}" . rtrim(dirname($_SERVER['PHP_SELF']), '/\\') . "/product.php', 'self');
              </script>";
        exit();
    }
} elseif (isset($_GET["action"])) {
    $pname = $_GET["R_pname"];
    $uname = "SELECT * FROM r_product WHERE R_pname='$pname'";
    $query = mysqli_query($con, $uname);
    $num_count = mysqli_num_rows($query);

    if ($num_count) {
        $pass = mysqli_fetch_assoc($query);
        $img = $pass['R_pimg'];
        unlink("product_img/$img");

        $sql = "DELETE FROM r_product WHERE R_pname='$pname'";
        mysqli_query($con, $sql);

        echo "<script>
                alert('Record Deleted');
                open('http://{$_SERVER['HTTP_HOST']}" . rtrim(dirname($_SERVER['PHP_SELF']), '/\\') . "/product.php', 'self');
              </script>";

        mysqli_close($con);
    }
}
?>
