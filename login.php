<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Farmer Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f5f7fa;
      height: 100vh;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    header {
      width: 100%;
      background-color: rgb(160, 82, 178);
      color: #fff;
      padding: 10px 0;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .content {
      margin-top: 80px;
    }
    .login-card {
      background-color: #ffffff;
      border-radius: 15px;
      padding: 40px;
      max-width: 600px;
      width: 100%;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }
    .btn-custom {
      background-color: #6a11cb;
      color: #fff;
      border: none;
    }
    .btn-custom:hover {
      background-color: #2575fc;
      color: #fff;
    }
    .form-header {
      font-size: 24px;
      font-weight: bold;
      color: #333;
      text-align: center;
      margin-bottom: 20px;
    }
    .tab-content {
      margin-top: 20px;
    }
    .form-footer {
      text-align: center;
      margin-top: 20px;
    }
    footer {
      margin-top: 40px;
      text-align: center;
    }
  </style>
</head>
<body>
  <header>
    <nav class="bg-green-600 p-2 shadow-lg">
      <div class="container mx-7 flex justify-between items-center">
        <img src="img/logo1.png" alt="Logo" style="width:79px;height:65px;">
        <a href="#" class="text-white text-2xl font-bold">Smart AgriTech</a>
        <div class="hidden md:flex space-x-8 md:space-x-12 text-lg">
          <a href="#home" class="text-white hover:text-gray-200">Home</a>
          <a href="login.php" class="text-white hover:text-gray-200">Log In</a>
          <a href="register.php" class="text-white hover:text-gray-200">Register</a>
        </div>
      </div>
    </nav>
  </header>

  <div class="content">
    <div class="login-card">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Login</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="register-farmer-tab" data-bs-toggle="tab" data-bs-target="#register-farmer" type="button" role="tab" aria-controls="register-farmer" aria-selected="false">Register as </button>
        </li>
        <!-- <li class="nav-item" role="presentation">
          <button class="nav-link" id="register-shopkeeper-tab" data-bs-toggle="tab" data-bs-target="#register-shopkeeper" type="button" role="tab" aria-controls="register-shopkeeper" aria-selected="false">Register as Shopkeeper</button>
        </li> -->
        <!-- <li class="nav-item" role="presentation">
          <button class="nav-link" id="register-rental-tab" data-bs-toggle="tab" data-bs-target="#register-rental" type="button" role="tab" aria-controls="register-rental" aria-selected="false">Register as Rental Services</button>
        </li> -->
      </ul>

      <div class="tab-content" id="myTabContent">
        <!-- Login Tab -->
        <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
          <h3 class="form-header">Login</h3>
          <form action="backend/savelogin.php" method="GET" id="f1">
            <div class="mb-3">
              <label for="userType" class="form-label">User Type</label>
              <select class="form-control" id="userType" name="userType" required>
                <option value="" disabled selected>Select User Type</option>
                <option value="farmer">Farmer</option>
                <option value="shopkeeper">Shopkeeper</option>
                <option value="rental services">Rental Services</option>
                <option value="admin">Admin</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="uname" class="form-label">Username</label>
              <input type="text" class="form-control" id="uname" name="uname" placeholder="Enter your username" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-custom w-100" id="save" value="save" name="save">Login</button>
          </form>
        </div>

        <!-- Register as Farmer Tab -->
        <div class="tab-pane fade" id="register-farmer" role="tabpanel" aria-labelledby="register-farmer-tab">
          <h3 class="form-header">Register as</h3>
          <a href="register.php" class="btn btn-info" role="button">Farmer</a>
          <a href="Shopmodule\backend\shop.php" class="btn btn-primary" role="button">Shopkeeper</a>
          <a href="Rental_services\backend\shop.php" class="btn btn-success" role="button">Rental Servicess</a>
        </div>

        <!-- Register as Shopkeeper Tab -->
        <div class="tab-pane fade" id="register-shopkeeper" role="tabpanel" aria-labelledby="register-shopkeeper-tab">
          <h3 class="form-header">Register as Shopkeeper</h3>
          <p>Content for registering as a shopkeeper goes here.</p>
        </div>

        <!-- Register as Rental Services Tab -->
        <div class="tab-pane fade" id="register-rental" role="tabpanel" aria-labelledby="register-rental-tab">
          <h3 class="form-header">Register as Rental Services</h3>
          <p>Content for registering as rental services goes here.</p>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <?php include 'footer.php'; ?>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
