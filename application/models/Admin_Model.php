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

        $findFirstTimeUser = $this->db->query("SELECT * FROM admin_directory WHERE portal_uid = '$adminUniqueID' AND admin_email = '$adminEmail'");

        foreach ($findFirstTimeUser->result() as $row)
        {
           $passwordStatus = $row->password_update_status;
           $adminPassword = $row->system_generated_password;
           $portalCredentials = $row->portal_credentials;
           $adminName = $row->director_name;
        }

        if(isset($_POST['adminLOGIN']))
        {
           if($findFirstTimeUser->num_rows()>0 AND password_verify($adminPassword, $portalCredentials) AND $passwordStatus == 'To be Updated')
           {             
                $_SESSION['activeAdmin'] = $adminUniqueID;

                echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () {';
                echo '  swal({';
                echo '      title: "System Password Accepted!",';
                echo '      text: "We found you are using system generated password, please update the password to access the dashboard.",';
                echo '      icon: "warning"';
                echo '  }).then(function() {';
                echo '      window.location.href = "'.base_url('set_new_password').'";';  
                echo '  });';
                echo '}, 100);';
                echo '</script>';
           }
           else if($findFirstTimeUser->num_rows()>0 AND password_verify($adminPassword, $portalCredentials) AND $passwordStatus === 'Updated By User')
           {
                $_SESSION['activeAdmin'] = $adminUniqueID;

                echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () {';
                echo '  swal({';
                echo '      title: "Welcome Onboard!",';
                echo '      text: "Welcome onboard '.$adminName.' your password has been verified, now you can seamlessly access your dashboard.",';
                echo '      icon: "success"';
                echo '  }).then(function() {';
                echo '      window.location.href = "'.base_url('admin_dashboard').'";';  
                echo '  });';
                echo '}, 100);';
                echo '</script>';
           }
           else
           {
            echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () {';
                echo '  swal({';
                echo '      title: "Wrong Credentials",';
                echo '      text: "Password Error, Login Failed",';
                echo '      icon: "error"';
                echo '  }).then(function() {';
                echo '      window.location.href = "'.base_url('admin_login').'";';  
                echo '  });';
                echo '}, 100);';
                echo '</script>';
           }
        }
    }

    public function changeProfilePassword()
    {
        $portalPassword = $_POST['newPassword'];
        $cnfPassword = $_POST['cnfPassword'];

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
