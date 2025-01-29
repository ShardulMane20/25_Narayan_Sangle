<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Farmer Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to right, #6a11cb, #2575fc);
      color: #fff;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .form-section {
      background: #fff;
      color: #000;
      padding: 30px;
      border-radius: 10px;
      width: 100%;
      max-width: 500px;  
      margin-top: 5%;
      margin-bottom: 5%;
      margin-left: 30%;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }
    .btn-custom {
      background-color: #6a11cb;
      border: none;
    }
    .btn-custom:hover {
      background-color: #2575fc;
    }
  </style>
</head>
<body>
  <div style="height: 700px;width: 100%;">
    <form action="backend/save_register.php" method="GET" role="form">
      <div class="form-section">
        <h2 class="text-center mb-4">Farmer Registration</h2>
        <div class="mb-3">
          <label for="farmerName" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="farmerName" name="farmerName" placeholder="Enter your name" required>
        </div>
        <div class="mb-3">
          <label for="country" class="form-label">Country</label>
          <select class="form-select" id="country" name="country" required onchange="loadStates()">
            <option value="" disabled selected>Select your country</option>
            <option value="usa">USA</option>
            <option value="india">India</option>
            <option value="canada">Canada</option>
            <option value="uk">United Kingdom</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="state" class="form-label">State</label>
          <select class="form-select" id="state" name="state" required onchange="loadDistricts()">
            <option value="" disabled selected>Select your state</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="district" class="form-label">District</label>
          <select class="form-select" id="district" name="district" required>
            <option value="" disabled selected>Select your district</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="area" class="form-label">Area</label>
          <input type="text" class="form-control" id="area" name="area" placeholder="Enter your area" required>
        </div>
        <div class="mb-3">
          <label for="pincode" class="form-label">Pincode</label>
          <input type="text" class="form-control" id="pincode" name="pincode"placeholder="Enter your pincode" required>
        </div>
        <div class="mb-3">
          <label for="registrationEmail" class="form-label">Email</label>
          <input type="email" class="form-control" id="registrationEmail" name="registrationEmail" placeholder="Enter your email" required>
        </div>
        <div class="mb-3">
          <label for="phone" class="form-label">Phone Number</label>
          <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <div class="mb-3">
          <label for="confirmPassword" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" placeholder="Re-enter your password" required>
        </div>
        <button type="save" value="save" name="save" class="btn btn-custom w-100">Register</button>
        <div class="text-center mt-3">
          <p>Already have an account? <a href="login.php" class="text-primary">Login here</a></p>
        </div>
      </div>
    </form>
  </div>
  <script src="address.js"></script>
</body>
</html>
