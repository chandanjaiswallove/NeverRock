<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('modules/assets/images/favicon.ico'); ?>">

  <style>
    body {
      background: #f9f9ff;
      color: #000;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 16px;
      margin: 0;
    }

    .auth-container {
      width: 100%;
      max-width: 920px;
      border: 1px solid #dcd8ff;
      border-radius: 10px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, .08);
      overflow: hidden;
      display: flex;
      flex-direction: row;
      background: #fff;
    }

    .auth-left,
    .auth-right {
      flex: 1;
      padding: 32px 36px;
      box-sizing: border-box;
    }

    .auth-left {
      background: #f3f4ff;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .auth-illustration {
      width: 100%;
      height: 100%;
      border-radius: 8px;
      object-fit: cover;
    }

    .btn-primary {
      background: #553cdf !important;
      border-color: #553cdf !important;
    }

    .btn-primary:hover {
      background: #fff !important;
      color: #553cdf !important;
      border: 1px solid #553cdf !important
    }

    .brand-logo {
      width: 110px
    }

    .title {
      color: #553cdf;
      margin: 8px 0 4px
    }

    .extra-text {
      margin-top: 10px;
      text-align: center;
      font-size: 14px;
    }

    .extra-text a {
      color: #553cdf;;
      text-decoration: none;
      font-weight: bold;
    }

    @media (max-width: 768px) {
      .auth-container {
        flex-direction: column;
        max-width: 100%
      }

      .auth-left {
        order: -1
      }
    }
  </style>
</head>

<body>

  <div class="auth-container">
    <!-- Left: Image -->
    <div class="auth-left">
      <img class="auth-illustration"
        src="https://st2.depositphotos.com/2171279/9264/i/450/depositphotos_92644432-stock-photo-businesswoman-typing-on-laptop-at.jpg"
        alt="Illustration" />
    </div>

    <!-- Right: Login -->
    <div class="auth-right bg-white">
      <div class="text-center mb-3">
        <img class="brand-logo mb-1" src="<?php echo base_url('modules/assets/images/logo/logo_1.png'); ?>" alt="Logo">
        <h4 class="title">Login to Your Account 👋</h4>
      </div>

      <form id="loginFormEl" action="<?php echo base_url('studentAuth'); ?>" method="POST" >
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" class="form-control" id="stUsername" name="stUsername" placeholder="Enter Username" maxlength="25" required
            oninput="this.value = this.value.toUpperCase()">
        </div>

        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" id="loginEmail" name="loginEmail" placeholder="Enter email" maxlength="35"  required>
        </div>

        <div class="mb-3">
          <label class="form-label">Password</label>
          <div class="input-group">
            <input type="password" class="form-control" id="loginPassword" name="loginPassword" placeholder="Enter password" maxlength="25"  required>
            <button type="button" class="btn btn-outline-secondary rounded-end"
              onclick="togglePassword('loginPassword', this)">Show</button>
          </div>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="rememberCheck">
            <label class="form-check-label" for="rememberCheck">Remember me</label>
          </div>
          <a href="<?php echo base_url('student_forgot'); ?>" class="text-primary" style="cursor:pointer;">Forgot Password</a>
        </div>

        <button class="btn btn-primary w-100 mb-3" type="submit" name="studentLOGIN">Login</button>
      </form>

      <!-- Extra text -->
      <div class="extra-text">
        Don’t have an account? <a href="<?php echo base_url('student_signup'); ?>"> Signup</a>
      </div>

    </div>
  </div>

  <!-- JS -->
  <script>
    // Password show/hide
    function togglePassword(id, btn) {
      const inp = document.getElementById(id);
      inp.type = inp.type === 'password' ? 'text' : 'password';
      btn.textContent = inp.type === 'password' ? 'Show' : 'Hide';
    }
  </script>
</body>

</html>
