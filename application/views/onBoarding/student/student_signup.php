<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Signup</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('modules/assets/images/favicon.ico'); ?>">

  <style>
    :root {
      --primary: #553cdf;
      --soft-border: #dcd8ff;
    }

    body {
      background: #f9f9ff;
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
      border: 1px solid var(--soft-border);
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
      padding: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .auth-illustration {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 10px;
    }

    .btn-primary {
      background: var(--primary) !important;
      border-color: var(--primary) !important;
      transition: .25s;
    }

    .btn-primary:hover {
      background: #fff !important;
      color: var(--primary) !important;
      border: 1px solid var(--primary) !important;
    }

    .btn-outline-secondary {
      border-color: var(--soft-border);
    }

    .btn-outline-secondary:hover {
      background: #fff;
      color: var(--primary);
      border-color: var(--primary);
    }

    .form-control:focus,
    .form-select:focus {
      border-color: var(--primary);
      box-shadow: 0 0 0 .2rem rgba(85, 60, 223, .2);
    }

    .brand-logo {
      width: 110px;
    }

    .title {
      color: var(--primary);
      margin: 8px 0 4px;
    }

    .login-link {
      margin-top: 12px;
      text-align: center;
      font-size: 14px;
    }

    .login-link a {
      color: var(--primary);
      text-decoration: none;
      font-weight: 500;
    }

    .login-link a:hover {
      text-decoration: underline;
    }

    @media (max-width: 768px) {
      .auth-container {
        flex-direction: column;
        max-width: 100%;
      }

      .auth-left {
        order: -1;
        padding: 18px;
      }

      .auth-right {
        padding: 20px;
      }

      .brand-logo {
        width: 80px;
      }
    }
  </style>
</head>

<body>
  <div class="auth-container">
    <div class="auth-left">
      <img class="auth-illustration"
        src="https://st2.depositphotos.com/2171279/9264/i/450/depositphotos_92644432-stock-photo-businesswoman-typing-on-laptop-at.jpg"
        alt="Illustration" />
    </div>

    <div class="auth-right bg-white">
      <div class="text-center mb-3">
        <img class="brand-logo mb-1" src="<?php echo base_url('modules/assets/images/logo/logo_1.png'); ?>"
          alt="Logo">
        <h4 class="title">Create Your Account 🚀</h4>
      </div>

      <form id="signupFormEl">
        <div class="mb-3">
          <label class="form-label">Full Name</label>
          <input type="text" class="form-control" id="signupName" placeholder="Enter full name" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Email Address</label>
          <input type="email" class="form-control" id="signupEmail" placeholder="Enter email" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Phone Number</label>
          <input type="tel" class="form-control" id="signupPhone" placeholder="Enter phone number" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Password</label>
          <div class="input-group">
            <input type="password" class="form-control" id="signupPassword" placeholder="Create password" required>
            <button type="button" class="btn btn-outline-secondary rounded-end"
              onclick="togglePassword('signupPassword', this)">Show</button>
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Confirm Password</label>
          <div class="input-group">
            <input type="password" class="form-control" id="signupConfirm" placeholder="Confirm password" required>
            <button type="button" class="btn btn-outline-secondary rounded-end"
              onclick="togglePassword('signupConfirm', this)">Show</button>
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" class="form-control" id="signupUsername" placeholder="Choose a username" required>
        </div>

        <div class="mb-3">
          <label class="form-label">State</label>
          <select class="form-select" id="signupState" required>
            <option value="" disabled selected>Select your state</option>
            <option>Andhra Pradesh</option>
            <option>Arunachal Pradesh</option>
            <option>Assam</option>
            <option>Bihar</option>
            <option>Chhattisgarh</option>
            <option>Goa</option>
            <option>Gujarat</option>
            <option>Haryana</option>
            <option>Himachal Pradesh</option>
            <option>Jharkhand</option>
            <option>Karnataka</option>
            <option>Kerala</option>
            <option>Madhya Pradesh</option>
            <option>Maharashtra</option>
            <option>Manipur</option>
            <option>Meghalaya</option>
            <option>Mizoram</option>
            <option>Nagaland</option>
            <option>Odisha</option>
            <option>Punjab</option>
            <option>Rajasthan</option>
            <option>Sikkim</option>
            <option>Tamil Nadu</option>
            <option>Telangana</option>
            <option>Tripura</option>
            <option>Uttar Pradesh</option>
            <option>Uttarakhand</option>
            <option>West Bengal</option>
          </select>
        </div>

        <button class="btn btn-primary w-100" type="submit">Sign Up</button>

        <!-- Already have an account -->
        <div class="login-link">
          Already have an account? <a href="<?php echo base_url('student_login'); ?>">Login</a>
        </div>
      </form>
    </div>
  </div>

  <script>
    function togglePassword(id, btn) {
      const inp = document.getElementById(id);
      if (inp.type === 'password') { inp.type = 'text'; btn.textContent = 'Hide'; }
      else { inp.type = 'password'; btn.textContent = 'Show'; }
    }
  </script>
</body>
</html>
