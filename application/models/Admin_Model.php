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

        foreach ($findFirstTimeUser->result() as $row) {
            $passwordStatus = $row->password_update_status;
            $systemPassword = $row->system_generated_password;
            $portalCredentials = $row->portal_credentials;
            $adminName = $row->director_name;
        }

        if (isset($_POST['adminLOGIN'])) {
            if ($findFirstTimeUser->num_rows() > 0 and password_verify($adminPassword, $portalCredentials) and $passwordStatus == 'To be Updated') {
                $_SESSION['activeAdmin'] = $adminUniqueID;

                echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () {';
                echo '  swal({';
                echo '      title: "System Password Accepted!",';
                echo '      text: "We found you are using system generated password, please update the password to access the dashboard.",';
                echo '      icon: "warning"';
                echo '  }).then(function() {';
                echo '      window.location.href = "' . base_url('set_new_password') . '";';
                echo '  });';
                echo '}, 100);';
                echo '</script>';
            } else if ($findFirstTimeUser->num_rows() > 0 and password_verify($adminPassword, $portalCredentials) and $passwordStatus === 'Updated By User') {
                $_SESSION['activeAdmin'] = $adminUniqueID;

                echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () {';
                echo '  swal({';
                echo '      title: "Welcome Onboard!",';
                echo '      text: "Welcome onboard ' . $adminName . ' your password has been verified, now you can seamlessly access your dashboard.",';
                echo '      icon: "success"';
                echo '  }).then(function() {';
                echo '      window.location.href = "' . base_url('admin_dashboard') . '";';
                echo '  });';
                echo '}, 100);';
                echo '</script>';
            } else {
                echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () {';
                echo '  swal({';
                echo '      title: "Wrong Credentials",';
                echo '      text: "Password Error, Login Failed",';
                echo '      icon: "error"';
                echo '  }).then(function() {';
                echo '      window.location.href = "' . base_url('admin_login') . '";';
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
        foreach ($fetchHashedPassword->result() as $row) {
            $hashedPswd = $row->portal_credentials;
        }

        $newhashedPassword = password_hash($portalPassword, PASSWORD_DEFAULT);

        if (isset($_POST['updatePassword'])) {
            if ($cnfPassword === $portalPassword) {
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
            } else {
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


    //// Create an Instructor 
    public function registerInstructor()
    {
        if (isset($_POST['instructorData'])) {

            // Collect form data
            $fullName = $this->input->post('instructorName', true);
            $email = $this->input->post('instructorEmail', true);
            $contact = $this->input->post('instructorContact', true);
            $password = $this->input->post('instructorPassword', true);
            $uidPortal = $this->input->post('portalUID', true);

            // ✅ Check for duplicate email or phone
            $this->db->group_start();
            $this->db->where('instructor_email', $email);
            $this->db->or_where('instructor_phone', $contact);
            $this->db->group_end();
            $existing = $this->db->get('instructor_directory'); // ✅ correct table name

            if ($existing->num_rows() > 0) {
                echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
                echo '<script>
                    document.addEventListener("DOMContentLoaded", function() {
                        swal({
                            title: "Registration Failed",
                            text: "Email or Phone already registered.",
                            icon: "error"
                        }).then(function(){ 
                            window.location.href = "' . base_url('admin_createInstructors') . '"; 
                        });
                    });
                  </script>';
                return;
            }

            // ✅ Hash password
            // $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            // Prepare data array
            $instructorData = array(
                'instructor_name' => $fullName,
                'instructor_email' => $email,
                'instructor_phone' => $contact,
                'instructor_uid' => $uidPortal,
                'instructor_password' => $password,
            );

            // ✅ Insert into database
            $this->db->insert('instructor_directory', $instructorData);

            // Success alert
            echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
            echo '<script>
                document.addEventListener("DOMContentLoaded", function() {
                    swal({
                        title: "Registration Successful!",
                        text: "Instructor registered successfully.",
                        icon: "success"
                    }).then(function(){ 
                        window.location.href = "' . base_url('admin_dashboard') . '"; 
                    });
                });
              </script>';
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