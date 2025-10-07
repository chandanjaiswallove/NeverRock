<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Instructor_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // ============================================================
    // ✅ INSTRUCTOR LOGIN FUNCTION (exactly like adminAuth)
    // ============================================================
    public function loginINSTRUCTOR()
    {
        if (isset($_POST['instructorLOGIN'])) {

            $uid = trim($this->input->post('loginUniqueID', true));
            $email = trim($this->input->post('loginEmail', true));
            $password = trim($this->input->post('loginPassword', true));

        
            // ---- Check UID existence ----
            $uidCheck = $this->db->get_where('instructor_directory', ['instructor_uid' => $uid]);
            if ($uidCheck->num_rows() == 0) {
                return $this->sweetAlert('Invalid UID!', 'No instructor found with this UID.', 'error', base_url('instructor_login'));
            }

            // ---- Check Email existence ----
            $emailCheck = $this->db->get_where('instructor_directory', ['instructor_email' => $email]);
            if ($emailCheck->num_rows() == 0) {
                return $this->sweetAlert('Invalid Email!', 'This email is not registered.', 'error', base_url('instructor_login'));
            }

            // ---- Check combination (UID + Email) ----
            $query = $this->db->get_where('instructor_directory', [
                'instructor_uid' => $uid,
                'instructor_email' => $email
            ]);

            if ($query->num_rows() == 0) {
                return $this->sweetAlert('UID & Email Mismatch!', 'Entered UID and Email do not belong to the same account.', 'error', base_url('instructor_login'));
            }

            $row = $query->row();
            $hashedPassword = $row->portal_credentials;
            $instructorName = $row->instructor_name;
            $passwordStatus = $row->password_update_status;
            $systemPassword = $row->instructor_SystemPassword;

            // ---- Step 1: Allow plain text (first login) ----
            if ($passwordStatus == 'To be Updated') {
                if ($password !== $systemPassword) {
                    return $this->sweetAlert('Incorrect Password!', 'Entered system password is invalid.', 'error', base_url('instructor_login'));
                }

                // ✅ Set session and redirect to password update page
                $_SESSION['activeInstructor'] = $uid;

                return $this->sweetAlert(
                    'Password Verified!',
                    'Welcome ' . $instructorName . '!Please update your password & Complete Your Profile now.',
                    'warning',
                    base_url('instructor_setting')
                );
            }

            // ---- Step 2: After user updates password (hashed login) ----
            if ($passwordStatus == 'Updated By User') {
                if (!password_verify($password, $hashedPassword)) {
                    return $this->sweetAlert('Invalid Password!', 'Entered password is incorrect.', 'error', base_url('instructor_login'));
                }

                $_SESSION['activeInstructor'] = $uid;

                return $this->sweetAlert(
                    'Login Successful!',
                    'Welcome back, ' . $instructorName . '! Enjoy your dashboard.',
                    'success',
                    base_url('instructor_dashboard')
                );
            }
        }
    }

    // ============================================================
    // ✅ PASSWORD CHANGE FUNCTION (Instructor)
    // ============================================================
    public function changeProfilePassword()
    {
        if (isset($_POST['updatePassword'])) {

            $currentPassword = trim($this->input->post('currentPassword', true));
            $newPassword = trim($this->input->post('newPassword', true));
            $confirmPassword = trim($this->input->post('retypePassword', true));
            $instructorUID = $_SESSION['activeInstructor'];

            // ---- Fetch record ----
            $query = $this->db->get_where('instructor_directory', ['instructor_uid' => $instructorUID]);
            $row = $query->row();

            if (!$row) {
                return $this->sweetAlert('Error!', 'Instructor record not found.', 'error', base_url('instructor_setting'));
            }

            // ---- For first login (plain text match) ----
            if ($row->password_update_status == 'To be Updated') {
                if ($currentPassword !== $row->instructor_SystemPassword) {
                    return $this->sweetAlert('Incorrect Current Password!', 'Your current password does not match system-generated one.', 'error', base_url('instructor_setting'));
                }
            } else {
                // ---- For updated password (hashed verify)
                if (!password_verify($currentPassword, $row->portal_credentials)) {
                    return $this->sweetAlert('Incorrect Current Password!', 'Your current password does not match.', 'error', base_url('instructor_setting'));
                }
            }

            // ---- Prevent reusing old password ----
            if (password_verify($newPassword, $row->portal_credentials)) {
                return $this->sweetAlert('Password Reuse Detected!', 'New password cannot be same as your old password.', 'warning', base_url('instructor_setting'));
            }

            // ---- Match new and confirm ----
            if ($newPassword !== $confirmPassword) {
                return $this->sweetAlert('Password Mismatch!', 'New password and confirm password do not match.', 'error', base_url('instructor_setting'));
            }

            // ✅ Update password
            $newHashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

            $this->db->update('instructor_directory', [
                'portal_credentials' => $newHashedPassword,
                'password_update_status' => 'Updated By User'
            ], ['instructor_uid' => $instructorUID]);

            return $this->sweetAlert(
                'Password Updated!',
                'Your password has been successfully updated. Please login again.',
                'success',
                base_url('logoutInstructor')
            );
        }
    }

    // ============================================================
    // ✅ INSTRUCTOR LOGOUT FUNCTION
    // ============================================================
    public function instructor_logout()
    {
        session_unset();
        unset($_SESSION['activeInstructor']);
        session_destroy();
        redirect(base_url('instructor_login'));
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
