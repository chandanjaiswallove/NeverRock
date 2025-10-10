<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Model extends CI_Model
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
                    'We have verified your credentials. Please update your password & Complete Your Profile now.',
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


    // ================= Create an Instructor =================
    public function registerInstructor()
    {
        if (isset($_POST['instructorData'])) {

            // Collect form data
            $fullName = trim($this->input->post('instructorName', true));
            $email = trim($this->input->post('instructorEmail', true));
            $contact = trim($this->input->post('instructorContact', true));
            $password = trim($this->input->post('instructorPassword', true));
            $uidPortal = trim($this->input->post('portalUID', true));
            $dummyData = 'To be Updated';

            // ✅ 1. Check empty fields
            if (empty($fullName) || empty($email) || empty($contact) || empty($password) || empty($uidPortal)) {
                return $this->sweetAlert(
                    'Missing Fields!',
                    'Please fill all required fields before submitting.',
                    'warning',
                    base_url('admin_createInstructors')
                );
            }

            // ✅ 2. Check duplicate email
            $checkEmail = $this->db->get_where('instructor_directory', ['instructor_email' => $email]);
            if ($checkEmail->num_rows() > 0) {
                return $this->sweetAlert(
                    'Duplicate Email!',
                    'This email is already registered. Please use another email address.',
                    'error',
                    base_url('admin_createInstructors')
                );
            }

            // ✅ 3. Check duplicate phone
            $checkPhone = $this->db->get_where('instructor_directory', ['instructor_phone' => $contact]);
            if ($checkPhone->num_rows() > 0) {
                return $this->sweetAlert(
                    'Duplicate Phone!',
                    'This phone number is already registered. Please use another contact number.',
                    'error',
                    base_url('admin_createInstructors')
                );
            }

            // ✅ 4. Hash password
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            // ✅ 5. Prepare data
            $instructorData = array(
                'instructor_name' => $fullName,
                'instructor_email' => $email,
                'instructor_phone' => $contact,
                'instructor_uid' => $uidPortal,
                'instructor_SystemPassword' => $password,
                'portal_credentials' => $hashedPassword,
                'password_update_status' => $dummyData,
                'profile_active_status' => 'Active',
            );

            // ✅ 6. Insert into database
            $insert = $this->db->insert('instructor_directory', $instructorData);

            if ($insert) {
                return $this->sweetAlert(
                    'Registration Successful!',
                    'Instructor has been registered successfully.',
                    'success',
                    base_url('admin_dashboard')
                );
            } else {
                return $this->sweetAlert(
                    'Database Error!',
                    'Something went wrong while registering the instructor. Please try again.',
                    'error',
                    base_url('admin_createInstructors')
                );
            }
        }
    }


    // ============================================================
    // ✅ COURSE ENROLLMENT MODEL
    // ============================================================

    public function createCourse()
    {
        $courseTitle = $_POST['courseTitle'];
        $CourseType = $_POST['courseType'];
        $startDate = $_POST['startDate'];
        $finishDate = $_POST['finishDate'];
        $courseAvailability = $_POST['avilability'];
        $languageMedium = $_POST['language'];
        $regularPrice = $_POST['regularPrice'];
        $discountPrice = $_POST['discountPercent'];
        $finalPrice = $_POST['finalPrice'];

        // image Configuration for uploading course
        $config['upload_path'] = 'modules/courseThumbnail/';
        $config['allowed_types'] = 'jpg|png|jpeg|webp';
        $config['max_height'] = 650;
        $config['max_width'] = 1200;
        $config['remove_spaces'] = TRUE;
        $config['file_ext_tolower'] = TRUE;
        $config['file_name'] = uniqid() . "_" . preg_replace('/\s+/', '_', $_FILES['courseImage']['name']);

        $this->load->library('upload', $config);

        if (isset($_POST['registerCourse'])) {
            if (is_uploaded_file($_FILES['file_name']['tmp_name'])) {
                echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
                echo '<script>';
                echo 'document.addEventListener("DOMContentLoaded", function() {';
                echo '  swal({';
                echo '    title: "No Image Uploaded!",';
                echo '    text: "Please Try again.",';
                echo '    icon: "success",';
                echo '  }).then(function() {';
                echo '    window.location.href = "' . base_url('admin_course') . '";';
                echo '  });';
                echo '});';
                echo '</script>';
            } else {

                $this->upload->do_upload('courseImage');

                $courseData = array(
                    'course_name' => $courseTitle,
                    'course_type' => $CourseType,
                    'course_thumbnail' => $config['file_name'],
                    'starting_date' => $startDate,
                    'ending_date' => $finishDate,
                    'course_mode' => $courseAvailability,
                    'course_language' => $languageMedium,
                    'course_description' => 'To be Updated',
                    'course_actual_cost' => $regularPrice,
                    'course_selling_cost' => $finalPrice,
                    'discount_applied' => $discountPrice,
                    'course_large_description' => 'To be Updated',
                    'course_preview_video' => 'To be Updated'
                );
                $this->db->insert('course_directory', $courseData);

                echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
                echo '<script>';
                echo 'document.addEventListener("DOMContentLoaded", function() {';
                echo '  swal({';
                echo '    title: "Course Created!",';
                echo '    text: "You have successfully created a course.",';
                echo '    icon: "success",';
                echo '  }).then(function() {';
                echo '    window.location.href = "' . base_url('admin_course') . '";';
                echo '  });';
                echo '});';
                echo '</script>';
            }
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