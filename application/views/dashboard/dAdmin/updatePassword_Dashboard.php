
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reset Password</title>
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

    .back-home {
      display: block;
      text-align: center;
      margin-top: 12px;
      font-size: 0.95rem;
    }

    .back-home span {
      color: #000;
      /* "Back to" black */
    }

    .back-home a {
      color: #553cdf;
      /* "Home" purple */
      text-decoration: none;
      font-weight: 500;
    }

    .back-home a:hover {
      text-decoration: underline;
    }

    @media (max-width:768px) {
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

  <?php
  $fetchMyAdminData = $this->db->query("SELECT * FROM admin_directory WHERE portal_uid = '{$_SESSION['acitveAdmin']}'");
  foreach ($fetchMyAdminData->result() as $row) {
    $portalUID = $row->portal_uid;
  }
  ?>


  <div class="auth-container">
    <div class="auth-left">
      <img class="auth-illustration"
        src="https://st2.depositphotos.com/2171279/9264/i/450/depositphotos_92644432-stock-photo-businesswoman-typing-on-laptop-at.jpg"
        alt="Illustration" />
    </div>

    <div class="auth-right bg-white">
      <div class="text-center mb-3">
        <img class="brand-logo mb-1" src="<?php echo base_url('modules/assets/images/logo/logo_1.png'); ?>" alt="Logo">
        <h4 class="title">Update Your Password </h4>
      </div>

      <!-- Update Your Password Form -->
      <form method="POST" action="<?php echo base_url('passwordUpdate'); ?>">

        <div class="mb-3">
          <label class="form-label">Active User</label>
          <input type="text" class="form-control" id="activeUserUID" name="activeUserUID"
            value="<?php echo $portalUID; ?>" readonly>
        </div>

        <div class="mb-3">
          <label class="form-label">Set New Password</label>
          <div class="input-group">
            <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="New password"
              maxlength="30" pattern="^(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z0-9]).{8,}$" required>
            <button type="button" class="btn btn-outline-secondary"
              onclick="togglePassword('newPassword', this)">Show</button>
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Confirm New Password</label>
          <div class="input-group">
            <input type="password" class="form-control" id="cnfPassword" name="cnfPassword"
              placeholder="Confirm password" maxlength="30" required>
            <button type="button" class="btn btn-outline-secondary"
              onclick="togglePassword('cnfPassword', this)">Show</button>
          </div>
        </div>

        <button class="btn btn-primary w-100" type="submit" name="updatePassword">Submit</button>
      </form>


    </div>
  </div>

  <script>
    function togglePassword(id, btn) {
      const inp = document.getElementById(id);
      inp.type = inp.type === 'password' ? 'text' : 'password';
      btn.textContent = inp.type === 'password' ? 'Show' : 'Hide';
    }
  </script>
</body>

</html>