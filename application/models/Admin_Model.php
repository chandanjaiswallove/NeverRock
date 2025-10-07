<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admn_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // ============================================================
    // ✅ ADMIN LOGIN FUNCTION (Individual field validation)
    // ============================================================
    public function adminAuth()
    {
        if (isset($_POST['adminLOGIN'])) {

            $adminUID = trim($this->input->post('adminUID', true));
            $adminEmail = trim($this->input->post('adminEMAIL', true));
            $adminPassword = trim($this->input->post('adminPASSWORD', true));

            // ---- Empty field validation ----
            if (empty($adminUID)) {
                return $this->sweetAlert('Missing UID!', 'Please enter your Admin UID.', 'warning', base_url('admin_login'));
            }
            if (empty($adminEmail)) {
                return $this->sweetAlert('Missing Email!', 'Please enter your registered Email.', 'warning', base_url('admin_login'));
            }
            if (empty($adminPassword)) {
                return $this->sweetAlert('Missing Password!', 'Please enter your password.', 'warning', base_url('admin_login'));
            }

            // ---- Check UID existence ----
            $uidCheck = $this->db->get_where('admin_directory', ['portal_uid' => $adminUID]);
            if ($uidCheck->num_rows() == 0) {
                return $this->sweetAlert('Invalid UID!', 'No admin found with this UID.', 'error', base_url('admin_login'));
            }

            // ---- Check Email existence ----
            $emailCheck = $this->db->get_where('admin_directory', ['admin_email' => $adminEmail]);
            if ($emailCheck->num_rows() == 0) {
                return $this->sweetAlert('Invalid Email!', 'This email is not registered.', 'error', base_url('admin_login'));
            }

            // ---- Check combination (UID + Email) ----
            $query = $this->db->get_where('admin_directory', [
                'portal_uid' => $adminUID,
                'admin_email' => $adminEmail
            ]);

            if ($query->num_rows() == 0) {
                return $this->sweetAlert('UID & Email Mismatch!', 'Entered UID and Email do not belong to the same account.', 'error', base_url('admin_login'));
            }

            $row = $query->row();
            $hashedPassword = $row->portal_credentials;
            $adminName = $row->director_name;
            $passwordStatus = $row->password_update_status;

            // ---- Check password correctness ----
            if (!password_verify($adminPassword, $hashedPassword)) {
                return $this->sweetAlert('Invalid Password!', 'Entered password is incorrect.', 'error', base_url('admin_login'));
            }

            // ✅ If everything correct
            $_SESSION['activeAdmin'] = $adminUID;

            // ---- Case 1: Default password ----
            if ($passwordStatus == 'To be Updated') {
                return $this->sweetAlert(
                    'Password Verified!',
                    'We have verified your credentials. Please update your password now.',
                    'warning',
                    base_url('admin_setting')
                );
            }

            // ---- Case 2: Updated password ----
            if ($passwordStatus == 'Updated By User') {
                return $this->sweetAlert(
                    'Login Successful!',
                    'Welcome Onboard ' . $adminName . ', enjoy your dashboard experience.',
                    'success',
                    base_url('admin_dashboard')
                );
            }
        }
    }

    // ============================================================
    // ✅ PASSWORD CHANGE FUNCTION (Individual error validation)
    // ============================================================
    public function changeProfilePassword()
    {
        if (isset($_POST['updatePassword'])) {

            $currentPassword = trim($this->input->post('currentPassword', true));
            $newPassword = trim($this->input->post('newPassword', true));
            $confirmPassword = trim($this->input->post('retypePassword', true));
            $adminUID = $_SESSION['activeAdmin'];

            // ---- Empty fields check ----
            if (empty($currentPassword)) {
                return $this->sweetAlert('Missing Field!', 'Please enter your current password.', 'warning', base_url('admin_setting'));
            }
            if (empty($newPassword)) {
                return $this->sweetAlert('Missing Field!', 'Please enter a new password.', 'warning', base_url('admin_setting'));
            }
            if (empty($confirmPassword)) {
                return $this->sweetAlert('Missing Field!', 'Please confirm your new password.', 'warning', base_url('admin_setting'));
            }

            // ---- Fetch record ----
            $query = $this->db->get_where('admin_directory', ['portal_uid' => $adminUID]);
            $row = $query->row();

            if (!$row) {
                return $this->sweetAlert('Error!', 'Admin record not found.', 'error', base_url('admin_setting'));
            }

            // ---- Current password check ----
            if (!password_verify($currentPassword, $row->portal_credentials)) {
                return $this->sweetAlert('Incorrect Current Password!', 'Your current password does not match.', 'error', base_url('admin_setting'));
            }

            // ---- Prevent reusing old password ----
            if (password_verify($newPassword, $row->portal_credentials)) {
                return $this->sweetAlert('Password Reuse Detected!', 'New password cannot be same as your old password.', 'warning', base_url('admin_setting'));
            }

            // ---- Match new and confirm ----
            if ($newPassword !== $confirmPassword) {
                return $this->sweetAlert('Password Mismatch!', 'New password and confirm password do not match.', 'error', base_url('admin_setting'));
            }

            // ✅ Update password
            $newHashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

            $this->db->update('admin_directory', [
                'portal_credentials' => $newHashedPassword,
                'password_update_status' => 'Updated By User'
            ], ['portal_uid' => $adminUID]);

            return $this->sweetAlert(
                'Password Updated!',
                'You have successfully updated your password. Please login again.',
                'success',
                base_url('logoutAdmin')
            );
        }
    }

    // ============================================================
    // ✅ ADMIN LOGOUT FUNCTION
    // ============================================================
    public function logoutAdmin()
    {
        session_unset();
        unset($_SESSION['activeAdmin']);
        session_destroy();
        redirect(base_url('admin_login'));
    }

    // ============================================================
    // ✅ SWEETALERT HELPER FUNCTION
    // ============================================================
    private function sweetAlert($title, $text, $icon, $redirect)
    {
        echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
        echo '<script>
        document.addEventListener("DOMContentLoaded", function() {
            swal({
                title: "' . $title . '",
                text: "' . $text . '",
                icon: "' . $icon . '",
            }).then(function() {
                window.location.href = "' . $redirect . '";
            });
        });
        </script>';
    }
}
?>
