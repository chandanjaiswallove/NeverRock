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
        $adminUniqueID = $this->input->post('adminUID', true);
        $adminEmailID = $this->input->post('adminEMAIL', true);
        $adminPassword = $this->input->post('adminPASSWORD', true);

        if (isset($_POST['adminLOGIN'])) {
            // Load SweetAlert
            echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';

            // Query database for matching admin
            $this->db->where('portal_uid', $adminUniqueID);
            $this->db->where('admin_email', $adminEmailID);
            $this->db->where('system_generated_password', $adminPassword);
            $query = $this->db->get('admin_directory');

            if ($query->num_rows() == 1) {
                // ✅ Successful Login
                $_SESSION['activeAdmin'] = $adminEmailID;

                echo '<script>
                    setTimeout(function () {
                        swal("Login Success", "Welcome Admin!", "success")
                        .then(function() {
                            window.location.href = "' . base_url('admin_dashboard') . '";
                        });
                    }, 100);
                </script>';
            } else {
                // ❌ Login Failed
                echo '<script>
                    setTimeout(function () {
                        swal("Login Failed", "Invalid Credentials", "error")
                        .then(function() {
                            window.location.href = "' . base_url('admin_login') . '";
                        });
                    }, 100);
                </script>';
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
