<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Instructor_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }



    // ============================================================
    // ✅ get all data from course_directory 
    // ============================================================
    public function getCourseFromDirectory($course_uid)
    {
        return $this->db
            ->where('course_unique_id', $course_uid)
            ->get('course_directory')
            ->row(); // single course
    }

    // ============================================================
// ✅ get subjects by course_unique_id
// ============================================================
    public function getCourseSubjects($course_uid)
    {
        return $this->db
            ->where('course_unique_id', $course_uid)
            ->order_by('id', 'ASC')
            ->get('course_subjects')
            ->result();   // multiple subjects
    }


// ============================================================
// ✅ get chapters by course + subject
// ============================================================
public function getSubjectChapters($course_uid, $subject_uid)
{
    return $this->db
        ->where('course_unique_id', $course_uid)
        ->where('subject_unique_id', $subject_uid)
        ->order_by('id', 'ASC')
        ->get('course_subjects_chapters')
        ->result();
}


















    // ============================================================
    // ✅ Instructor profile Update Here 
    // ============================================================
    public function instProfileUpdate()
    {
        // 1️⃣ Get logged-in Instructor
        $instructor_uid = $_SESSION['activeInstructor'];
        $instructor = $this->db->get_where('instructor_directory', ['instructor_uid' => $instructor_uid])->row();
        $oldImage = $instructor->instructor_photo ?? null;

        // 2️⃣ Collect POST data safely
        $data = array(
            'nick_name' => $this->input->post('nickName', true),
            'expert_as' => $this->input->post('expertAs', true),
            'biography_bio' => $this->input->post('biography', true),
            'facebook_url' => $this->input->post('facebook', true),
            'twitter_url' => $this->input->post('xtwitter', true),
            'linkdin_url' => $this->input->post('linkedin', true),
            'github_url' => $this->input->post('github', true),
            'instagram_url' => $this->input->post('instagram', true),
            'youtube_url' => $this->input->post('youtube', true),
            'website_url' => $this->input->post('website', true),
        );

        // 3️⃣ Handle profile image upload
        if (!empty($_FILES['profilePhoto']['name'])) {
            $config['upload_path'] = 'modules/instructorPrPhoto/';
            $config['allowed_types'] = 'jpg|jpeg|png|webp';
            $config['remove_spaces'] = TRUE;
            $config['file_ext_tolower'] = TRUE;
            $config['file_name'] = uniqid() . "_" . $_FILES['profilePhoto']['name'];

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('profilePhoto')) {
                // Delete old image if exists
                if (!empty($oldImage) && file_exists('modules/instructorPrPhoto/' . $oldImage)) {
                    unlink('modules/instructorPrPhoto/' . $oldImage);
                }

                $uploadData = $this->upload->data();
                $data['instructor_photo'] = $uploadData['file_name']; // Save new filename in DB
            } else {
                // Handle upload error
                $error = $this->upload->display_errors('', '');
                return $this->sweetAlert('Upload Failed!', $error, 'error', base_url('instructor_profile'));
            }
        }

        // 4️⃣ Update database
        $this->db->where('instructor_uid', $instructor_uid);
        $updated = $this->db->update('instructor_directory', $data);

        // 5️⃣ SweetAlert + redirect
        if ($updated) {
            return $this->sweetAlert(
                'Update Successful!',
                'Profile has been updated successfully!',
                'success',
                base_url('instructor_profile')
            );
        } else {
            return $this->sweetAlert(
                'Update Failed!',
                'Sorry, something went wrong. Please try again.',
                'error',
                base_url('instructor_setting')
            );
        }
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