<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // ✅ Admin Login
    public function adminAuth()
    {
        $adminUniqueID = $_POST['adminUID'];
        $adminEmail = $_POST['adminEMAIL'];
        $adminPassword = $_POST['adminPASSWORD'];

        $findAdminCredentials = $this->db->query("SELECT * FROM admin_directory WHERE admin_email = '$adminEmail' AND portal_uid = '$adminUniqueID'");
        foreach ($findAdminCredentials->result() as $row)
        {
            $hashedPassword  = $row->portal_credentials;
            $adminName = $row->director_name;
            $passwordStatus = $row->password_update_status;
        }

        if(isset($_POST['adminLOGIN']))
        {
            if($findAdminCredentials->num_rows()>0 AND password_verify($adminPassword, $hashedPassword) AND $passwordStatus = 'To be Updated')
            {
                $_SESSION['activeAdmin'] =  $adminUniqueID;

                echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
                echo '<script>';
                echo 'document.addEventListener("DOMContentLoaded", function() {';
                echo '  swal({';
                echo '    title: "Password Verified!",';
                echo '    text: "We have successfully verified your entered password, for security reasons please update your password soon after login.",';
                echo '    icon: "warning",';
                echo '  }).then(function() {';
                echo '    window.location.href = "' . base_url('admin_setting') . '";';
                echo '  });';
                echo '});';
                echo '</script>';
            }
            elseif($findAdminCredentials->num_rows()>0 AND password_verify($adminPassword, $hashedPassword) AND $passwordStatus = 'Updated By User')
            {
                $_SESSION['activeAdmin'] =  $adminUniqueID;

                echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
                echo '<script>';
                echo 'document.addEventListener("DOMContentLoaded", function() {';
                echo '  swal({';
                echo '    title: "Password Verified!",';
                echo '    text: "Welcome Onboard '.$adminName.',we have successfully verified your credentials, now enjoy seamless features in our Dashboard.",';
                echo '    icon: "success",';
                echo '  }).then(function() {';
                echo '    window.location.href = "' . base_url('admin_dashboard') . '";';
                echo '  });';
                echo '});';
                echo '</script>';
            }
            else
            {
                echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
                echo '<script>';
                echo 'document.addEventListener("DOMContentLoaded", function() {';
                echo '  swal({';
                echo '    title: "Credentials Verification",';
                echo '    text: "Credentials Failed, please provide correct Details",';
                echo '    icon: "error",';
                echo '  }).then(function() {';
                echo '    window.location.href = "' . base_url('admin_login') . '";';
                echo '  });';
                echo '});';
                echo '</script>';
            }
        }        
    }

    public function changeProfilePassword()
    {   
        // $systemPassword 
        $portalPassword = $_POST['newPassword'];
        $cnfPassword = $_POST['retypePassword'];

       $fetchHashedPassword = $this->db->query("SELECT * FROM admin_directory WHERE portal_uid = '{$_SESSION['activeAdmin']}'");
       foreach ($fetchHashedPassword->result() as $row)
       {
           $hashedPswd = $row->portal_credentials;
       }

       $newhashedPassword = password_hash($portalPassword, PASSWORD_DEFAULT);

        if(isset($_POST['updatePassword']))
        {
            if($cnfPassword === $portalPassword)
            {
                $this->db->query("UPDATE admin_directory SET password_update_status = 'Updated By User',portal_credentials = '$newhashedPassword' WHERE portal_uid = '{$_SESSION['activeAdmin']}'");
                echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
                echo '<script>';
                echo 'document.addEventListener("DOMContentLoaded", function() {';
                echo '  swal({';
                echo '    title: "User Verified!",';
                echo '    text: "You have successfully registered the Admin to the Portal. Now admin can use their dashboard to manage their institution.",';
                echo '    icon: "success",';
                echo '  }).then(function() {';
                echo '    window.location.href = "' . base_url('logoutAdmin') . '";';
                echo '  });';
                echo '});';
                echo '</script>';
            }
            else
            {
                echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
                echo '<script>';
                echo 'document.addEventListener("DOMContentLoaded", function() {';
                echo '  swal({';
                echo '    title: "Password Update Failed!",';
                echo '    text: "Could not update the password, please try again.",';
                echo '    icon: "error",';
                echo '  }).then(function() {';
                echo '    window.location.href = "' . base_url('set_new_password') . '";';
                echo '  });';
                echo '});';
                echo '</script>';
            }
        }
    }

    // ✅ Logout
    public function logoutAdmin()
    {
        session_unset();
        unset($_SESSION['activeAdmin']);
        session_destroy();
        redirect(base_url('admin_login'));
    }
}
?>



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