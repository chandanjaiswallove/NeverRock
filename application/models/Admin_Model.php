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
    public function courseDetails()
    {
        if (isset($_POST['adminLOGIN'])) {

            $adminUID = trim($this->input->post('adminUID', true));
            $adminEmail = trim($this->input->post('adminEMAIL', true));
            $adminPassword = trim($this->input->post('adminPASSWORD', true));








        }
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












  public function createCourse()
{
    // Sanitize input
    $courseTitle = $this->input->post('course_name', true);
    $courseType = $this->input->post('courseType', true);
    $courseCategory = $this->input->post('courseCategory', true);
    $startDate = $this->input->post('startDate', true);
    $finishDate = $this->input->post('finishDate', true);
    $courseAvailability = $this->input->post('avilability', true);
    $languageMedium = $this->input->post('language', true);
    $regularPrice = $this->input->post('regularPrice', true);
    $discountPrice = $this->input->post('discountPercent', true);
    $finalPrice = $this->input->post('finalPrice', true);
    $enquiryNumber = $this->input->post('enquiryNumber', true);

    // ==============================
    // ✅ Upload Course Image
    // ==============================
    $config['upload_path'] = 'modules/courseThumbnail/';
    $config['allowed_types'] = 'jpg|jpeg|png|webp';
    $config['remove_spaces'] = TRUE;
    $config['file_ext_tolower'] = TRUE;
    $config['file_name'] = uniqid() . "_" . preg_replace('/\s+/', '_', $_FILES['courseImage']['name']);

    $this->load->library('upload', $config);

    $courseImage = '';
    if ($this->upload->do_upload('courseImage')) {
        $courseImage = $config['file_name'];
    }

    // ==============================
    // ✅ Upload Course Video (Intro)
    // ==============================
    $courseVideoFile = '';
    $videoUrl = $this->input->post('courseVideoUrl', true);

    if (!empty($_FILES['courseVideoFile']['name'])) {

        $config2['upload_path'] = 'modules/courseVideo/';
        $config2['allowed_types'] = 'mp4|mov|avi|mkv';
        $config2['max_size'] = 500000;
        $config2['remove_spaces'] = TRUE;
        $config2['file_ext_tolower'] = TRUE;

        // ✅ Remove emojis & special characters from file name
        $originalName = $_FILES['courseVideoFile']['name'];
        $cleanName = preg_replace("/[^A-Za-z0-9\.\-_]/", "_", $originalName);

        $config2['file_name'] = uniqid() . "_" . $cleanName;

        $this->upload->initialize($config2);

        if ($this->upload->do_upload('courseVideoFile')) {
            $uploadData = $this->upload->data();
            $courseVideoFile = $uploadData['file_name'];
        } else {
            echo $this->upload->display_errors();
        }
    }

    $courseVideoFinal = !empty($courseVideoFile) ? $courseVideoFile : $videoUrl;

    // ==============================
    // ✅ Insert Data
    // ==============================
    $courseData = array(
        'course_name' => $courseTitle,
        'course_type' => $courseType,
        'course_category' => $courseCategory,
        'course_thumbnail' => $courseImage,
        'starting_date' => $startDate,
        'ending_date' => $finishDate,
        'course_mode' => $courseAvailability,
        'course_language' => $languageMedium,
        'course_actual_cost' => $regularPrice,
        'discount_applied' => $discountPrice,
        'course_selling_cost' => $finalPrice,
        'enquiry_number' => $enquiryNumber,
        'course_description' => 'To be Updated',
        'course_large_description' => 'To be Updated',
        'course_preview_video' => $courseVideoFinal,
        'course_video_content' => $courseVideoFinal,
    );

    $inserted = $this->db->insert('course_directory', $courseData);

    if ($inserted) {
        echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
        echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                swal({
                    title: "Course Created!",
                    text: "You have successfully created a new course.",
                    icon: "success",
                }).then(function() {
                    window.location.href = "' . base_url('admin_course') . '";
                });
            });
        </script>';
    } else {
        echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
        echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                swal({
                    title: "Error!",
                    text: "There was a problem saving the course. Please try again.",
                    icon: "error",
                }).then(function() {
                    window.location.href = "' . base_url('admin_course') . '";
                });
            });
        </script>';
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