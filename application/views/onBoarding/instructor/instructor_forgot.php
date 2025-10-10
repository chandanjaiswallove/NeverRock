<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Forgot Password</title>
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
      color: #553cdf; /* Forgot Password text color */
      margin: 8px 0 4px
    }

    .back-home {
      display: block;
      text-align: center;
      margin-top: 12px;
      font-size: 0.95rem;
    }

    .back-home span {
      color: #000; /* "Back to" black */
    }

    .back-home a {
      color: #553cdf; /* "Home" purple */
      text-decoration: none;
      font-weight: 500;
    }

    .back-home a:hover {
      text-decoration: underline;
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
    <div class="auth-left">
      <img class="auth-illustration"
        src="https://st2.depositphotos.com/2171279/9264/i/450/depositphotos_92644432-stock-photo-businesswoman-typing-on-laptop-at.jpg"
        alt="Illustration" />
    </div>

    <div class="auth-right bg-white">
      <div class="text-center mb-3">
        <img class="brand-logo mb-1" src="<?php echo base_url('modules/assets/images/logo/logo_1.png'); ?>" alt="Logo">
        <h4 class="title">Forgot Password 🔑</h4>
      </div>

      <!-- Form with PHP action Oadmin_login -->
      <form id="forgotFormEl" method="post" action="<?php echo base_url('instructor_verify'); ?>">
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" id="forgotEmail" name="email" placeholder="Enter email" required>
        </div>
        <button class="btn btn-primary w-100" type="submit">Send OTP</button>
      </form>

      <!-- Back to Home -->
      <div class="back-home">
        <span>Back to </span><a href="<?php echo base_url('admin_login'); ?>">Login</a>
      </div>

    </div>
  </div>
</body>
</html>
