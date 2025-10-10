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
      <img class="auth-illustration" src="<?php echo base_url('modules/assets/images/logo/Authleft.jpg'); ?>"
        alt="Illustration" />
    </div>


    <div class="auth-right bg-white">
      <div class="text-center mb-3">
        <img class="brand-logo mb-1" src="<?php echo base_url('modules/assets/images/logo/logo_1.png'); ?>" alt="Logo">
        <h4 class="title">Create Your Account 🚀</h4>
      </div>

      <form id="studentFormEl" action="<?php echo base_url('add_student') ?> " method="POST">
        <div class="mb-3">
          <label class="form-label">Full Name</label>
          <input type="text" class="form-control" id="studentName" name="studentName" maxlength="50"
            placeholder="Enter full name" onkeyup="generateInstructorCredentials()" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Email Address</label>
          <input type="email" class="form-control" id="studentEmail" name="studentEmail" maxlength="35"
            placeholder="Enter email" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Phone Number</label>
          <input type="tel" class="form-control" id="studentPhone" name="studentPhone" maxlength="10"
            placeholder="Enter phone number" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Password</label>
          <div class="input-group">
            <input type="password" class="form-control" id="studentPassword" maxlength="25" name="studentPassword"
              placeholder="Create password" required>
            <button type="button" class="btn btn-outline-secondary rounded-end"
              onclick="togglePassword('studentPassword', this)">Show</button>
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Confirm Password</label>
          <div class="input-group">
            <input type="password" class="form-control" id="studentConfirm" name="studentConfirm"
              placeholder="Confirm password" maxlength="25" required>
            <button type="button" class="btn btn-outline-secondary rounded-end"
              onclick="togglePassword('studentConfirm', this)">Show</button>
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Student UID</label>
          <input type="text" class="form-control" id="studentUsername" name="studentUsername" maxlength="9"
            placeholder="Student UID" required readonly>
        </div>

        <div class="mb-3">
          <label class="form-label">State</label>
          <select class="form-select" id="studentState" name="studentState" required>
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

        <button class="btn btn-primary w-100" type="submit" name="studentSignupData">Sign
          Up</button>

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

    function generateInstructorCredentials() {
      const studentNameInput = document.getElementById('studentName');
      const studentUsername = document.getElementById('studentUsername');

      // Auto-capitalize name input
      studentNameInput.value = studentNameInput.value.replace(/\w\S*/g, function (txt) {
        return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
      });

      // UID generation
      const uidChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
      const shuffledUID = uidChars.split('').sort(() => Math.random() - 0.5).join('');
      const namePart = studentNameInput.value.replace(/\s+/g, '').substr(0, 3).toUpperCase();
      const uniqueCode = shuffledUID.substr(0, 3);
      studentUsername.value = "EDU" + namePart + uniqueCode;

    }


  </script>
</body>

</html>