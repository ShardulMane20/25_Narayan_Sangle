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
      
      top: 0;
      left: 0;
      width: 100%;
      background-color:rgb(160, 82, 178); /* Adjust header background color */
      color: #fff;  
      z-index: 1000;
      padding:2px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      
    }
    .content {
      margin-top: 80px; /* Space to avoid overlapping content with the fixed header */
    }
    .login-card {
      background-color: #ffffff;
      border-radius: 15px;
      padding: 40px;
      max-width: 500px;
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
    .form-footer {
      text-align: center;
      margin-top: 20px;
      font-size: 14px;
    }
    .form-footer a {
      text-decoration: none;
      color: #6a11cb;
    }
    .form-footer a:hover {
      color: #2575fc;
    }
    footer {
      margin-top: 40px;
      text-align: center;
    }
  </style>
</head>
<body>
  <header>
           <!-- Navigation Bar -->
    
           <nav class="bg-green-600 p-2 shadow-lg">
        <div class="container mx-7 flex justify-between items-center">
        <img src="img/logo1.png" alt="Paris" style="width:79px;height:65px;">
            <a href="#" class="text-white text-2xl  font-bold ">Smart AgriTech</a>
            <div class="hidden md:flex space-x-8 md:space-x-12 text-lg">
                <a href="#home" class="text-white hover:text-gray-200">Home</a>
                <a href="login.php" class="text-white hover:text-gray-200">Log In</a>
                <a href="register.php" class="text-white hover:text-gray-200">Register</a>
            </div>
            <div class="md:hidden">
                <button class="text-white mobile-menu-button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>
        <div class="hidden mobile-menu">
            <a href="#home" class="block text-white py-2">Home</a>
            <a href="#soil-testing" class="block text-white py-2">Soil Testing</a>
            <a href="#disease-detection" class="block text-white py-2">Crop Leaf Disease Detection</a>
            <a href="#login" class="block text-white py-2">Log In</a>
            <a href="#register" class="block text-white py-2">Register</a>
        </div>
    </nav>
   
  </header>

  <div class="content" style="margin-top: 70px;">
    <div class="login-card">
      <h3 class="form-header">Farmer Login</h3>
      <form action="backend/savelogin.php" method="GET" role="form" id="f1">
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
      <div class="form-footer">
        Don't have an account? <a href="register.php">Register here</a>
      </div>
    </div>
  </div>

  <footer>
    <?php include 'footer.php'; ?>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
