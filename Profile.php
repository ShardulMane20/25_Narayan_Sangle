<?php
require 'backend/dbcon.php';
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username']) || $_SESSION['usertype'] != 'farmer') {
    echo "<script>alert('Please log in first.');</script>";
    $extra = "login.php";
    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    echo "<script>window.location.href = 'http://$host$uri/$extra';</script>";
    exit();
}

$username = $_SESSION['username'];

// Fetch farmer details from the database
$query = "SELECT * FROM farmer WHERE email='$username'";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) {
    $farmer = mysqli_fetch_assoc($result);
} else {
    echo "<script>alert('Farmer details not found.');</script>";
    $extra = "login.php";
    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    echo "<script>window.location.href = 'http://$host$uri/$extra';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Farmer Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
        background: linear-gradient(to right, #6a11cb, #2575fc);
        color: #fff;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        }
        .profile-section {
        background: #fff;
        color: #000;
        padding: 30px;
        border-radius: 10px;
        width: 100%;
        max-width: 600px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .profile-header {
        text-align: center;
        margin-bottom: 20px;
        }
        .btn-back {
  background-color:rgb(36, 93, 159);
  color: #fff;
  border: none;
}
.btn-back:hover {
  background-color:rgb(98, 179, 230);
}
.btn-logout {
  background-color: #ff4d4d;
  color: #fff;
  border: none;
}
.btn-logout:hover {
  background-color: #ff1a1a;
}

    </style>
</head>
<body>
<div class="profile-section">
    <div class="profile-header">
      <h2>Farmer Profile</h2>
      <p>Welcome, <?php echo htmlspecialchars($farmer['fname']); ?>!</p>
    </div>
    <table class="table table-borderless">
      <tbody>
        <tr>
          <th>Full Name:</th>
          <td><?php echo htmlspecialchars($farmer['fname']); ?></td>
        </tr>
        <tr>
          <th>Email:</th>
          <td><?php echo htmlspecialchars($farmer['email']); ?></td>
        </tr>
        <tr>
          <th>Phone:</th>
          <td><?php echo htmlspecialchars($farmer['phonno']); ?></td>
        </tr>
        <tr>
          <th>Country:</th>
          <td><?php echo htmlspecialchars($farmer['countryname']); ?></td>
        </tr>
        <tr>
          <th>State:</th>
          <td><?php echo htmlspecialchars($farmer['state']); ?></td>
        </tr>
        <tr>
          <th>District:</th>
          <td><?php echo htmlspecialchars($farmer['districtname']); ?></td>
        </tr>
        <tr>
          <th>Area:</th>
          <td><?php echo htmlspecialchars($farmer['area']); ?></td>
        </tr>
        <tr>
          <th>Pincode:</th>
          <td><?php echo htmlspecialchars($farmer['pincode']); ?></td>
        </tr>
      </tbody>
    </table>
    <div class="text-center mt-4">
  <!-- Back Button -->
  <a href="javascript:history.back()" class="btn btn-back me-2">Back</a>

  <!-- Logout Button -->
  <form method="post" action="backend/logout.php" class="d-inline">
    <button type="submit" class="btn btn-logout">Logout</button>
  </form>
</div>

  </div>
</body>
</html>
