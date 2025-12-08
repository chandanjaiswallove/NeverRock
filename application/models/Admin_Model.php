<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // Fetch all table features for a course
    public function getCourseFeatures($course_uid)
    {
        return $this->db->get_where('course_features', ['course_unique_id' => $course_uid])->result();
    }


    // Insert new feature
    public function insertFeature($data)
    {
        return $this->db->insert('course_features', $data);
    }

    // Update existing feature
    public function updateFeature($id, $data)
    {
        return $this->db->where('id', $id)->update('course_features', $data);
    }

    // Delete feature
    public function deleteFeature($id)
    {
        return $this->db->delete('course_features', ['id' => $id]);
    }

    // Save all features (insert + update + delete)
    public function saveAllFeatures($course_uid, $ids, $headings, $values, $delete_ids = [])
    {
        // DELETE
        if (!empty($delete_ids)) {
            foreach ($delete_ids as $del) {
                $this->deleteFeature($del);
            }
        }

        // INSERT + UPDATE
        for ($i = 0; $i < count($headings); $i++) {
            if (empty($headings[$i]) && empty($values[$i]))
                continue;

            if ($ids[$i] == 0) {
                $this->insertFeature([
                    'course_unique_id' => $course_uid,
                    'feature_heading' => $headings[$i],
                    'feature_value' => $values[$i]
                ]);
            } else {
                $this->updateFeature($ids[$i], [
                    'feature_heading' => $headings[$i],
                    'feature_value' => $values[$i]
                ]);
            }
        }

        // **Hamesha alert dikhaye, chahe arrays empty ho**
        $this->sweetAlert(
            "Success!",
            "Features updated successfully!",
            "success",
            base_url('admin_coursedetails?course_uid=' . $course_uid)
        );
    }



    ///==============FAQS=================////

    // Fetch all table faqs for a course
    public function getCourseFaqs($course_uid)
    {
        return $this->db->get_where('course_faqs', ['course_unique_id' => $course_uid])->result();
    }

    // Insert new feature
    public function insertFaqs($data)
    {
        return $this->db->insert('course_faqs', $data);
    }

    // Update existing feature
    public function updateFaqs($id, $data)
    {
        return $this->db->where('id', $id)->update('course_faqs', $data);
    }

    // Delete feature
    public function deleteFaqs($id)
    {
        return $this->db->delete('course_faqs', ['id' => $id]);
    }


    // Save all faqs (insert + update + delete)
    public function saveAllFaqs($course_uid, $faq_id, $faq_question, $faq_answer, $faq_remove = [])
    {
        // DELETE
        if (!empty($faq_remove)) {
            foreach ($faq_remove as $del) {
                $this->deleteFaqs($del);
            }
        }

        // INSERT + UPDATE
        for ($i = 0; $i < count($faq_question); $i++) {
            if (empty($faq_question[$i]) && empty($faq_answer[$i]))
                continue;

            if ($faq_id[$i] == 0) {
                $this->insertFaqs([
                    'course_unique_id' => $course_uid,
                    'faq_Question' => $faq_question[$i],
                    'faq_Answer' => $faq_answer[$i]
                ]);
            } else {
                $this->updateFaqs($faq_id[$i], [
                    'faq_Question' => $faq_question[$i],
                    'faq_Answer' => $faq_answer[$i]
                ]);
            }
        }

        // **Hamesha alert dikhaye, chahe arrays empty ho**
        $this->sweetAlert(
            "Success!",
            "Faqs updated successfully!",
            "success",
            base_url('admin_coursedetails?course_uid=' . $course_uid)
        );
    }




    ///================= DESCRIPATIONS HEADINGS ========================///
    // Fetch all table Descripations for a course
    public function getCourseHeadings($course_uid)
    {
        return $this->db->get_where('course_headings', ['course_unique_id' => $course_uid])->result();
    }

    // Insert new descriptions
    public function insertHeadings($data)
    {
        return $this->db->insert('course_headings', $data);
    }

    // Update existing descriptions
    public function updateHeadings($id, $data)
    {
        return $this->db->where('id', $id)->update('course_headings', $data);
    }

    // Delete descriptions
    public function deleteHeadings($id)
    {
        return $this->db->delete('course_headings', ['id' => $id]);
    }

    public function saveAllHeadings($course_uid, $heading_id, $headingTitle, $headingDescription, $delete_heading_ids = [])
    {
        // DELETE
        if (!empty($delete_heading_ids)) {
            foreach ($delete_heading_ids as $del) {
                $this->deleteHeadings($del);
            }
        }

        // INSERT + UPDATE
        if (!empty($headingTitle)) {

            for ($i = 0; $i < count($headingTitle); $i++) {

                // Skip only if both empty
                if (empty($headingTitle[$i]) && empty($headingDescription[$i]))
                    continue;

                // Insert new
                if ($heading_id[$i] == 0) {
                    $this->insertHeadings([
                        'course_unique_id' => $course_uid,
                        'dimpHeading' => $headingTitle[$i],
                        'dimpDescription' => $headingDescription[$i]
                    ]);
                }
                // Update old
                else {
                    $this->updateHeadings($heading_id[$i], [
                        'dimpHeading' => $headingTitle[$i],
                        'dimpDescription' => $headingDescription[$i]
                    ]);
                }
            }
        }

        // 🔥 ALERT ALWAYS RUNS — चाहे सिर्फ delete हो, सिर्फ update हो, सिर्फ insert हो, या कुछ भी ना हो
        $this->sweetAlert(
            "Success!",
            "Headings updated successfully!",
            "success",
            base_url('admin_coursedetails?course_uid=' . $course_uid)
        );
    }


    // ============================================================
    // -------------- IMPORTANT TOPICS & KEYS ---------------------
    // ============================================================

    public function getImportantTopics($course_uid)
    {
        $topic = $this->db
            ->where('course_unique_id', $course_uid)
            ->get('course_topics')
            ->row();

        if ($topic) {
            $topic->keys = $this->db
                ->where('topic_id', $topic->id)
                ->get('course_keys')
                ->result();
        }

        return $topic;
    }


    public function saveImportantTopicAndKeys($course_uid, $topic_id, $topic_name, $existing_keys, $new_keys, $deleted_keys)
    {
        // ---- 1. INSERT OR UPDATE TOPIC ----
        if ($topic_id == 0) {
            // Insert new topic
            $this->db->insert('course_topics', [
                'course_unique_id' => $course_uid,
                'importantTopic' => $topic_name
            ]);
            $topic_id = $this->db->insert_id();
        } else {
            // Update existing topic
            $this->db->where('id', $topic_id)->update('course_topics', [
                'importantTopic' => $topic_name
            ]);
        }

        // ---- 2. UPDATE EXISTING KEYS ----
        if (!empty($existing_keys)) {
            foreach ($existing_keys as $key_id => $value) {
                $this->db->where('id', $key_id)->update('course_keys', [
                    'dimpDescription' => $value
                ]);
            }
        }

        // ---- 3. INSERT NEW KEYS ----
        if (!empty($new_keys)) {
            foreach ($new_keys as $value) {
                if (trim($value) == "")
                    continue;

                $this->db->insert('course_keys', [
                    'topic_id' => $topic_id,
                    'dimpDescription' => $value
                ]);
            }
        }

        // ---- 4. DELETE REMOVED KEYS ----
        if (!empty($deleted_keys)) {
            $this->db->where_in('id', $deleted_keys)->delete('course_keys');
        }
        /// Succes Message 
        $this->sweetAlert(
            "Success!",
            "Topics & Keys updated successfully!",
            "success",
            base_url('admin_coursedetails?course_uid=' . $course_uid)
        );
    }


    // ============================================================
    // -------------- COURSE SUBJECTS -----------------------------
    // ============================================================



    public function getcourseSubjects($course_uid)
    {
        return $this->db
            ->where('course_unique_id', $course_uid)
            ->order_by('id', 'ASC')
            ->get('course_subjects')
            ->result();
    }

    public function saveSubjects($course_uid, $subject_ids, $subject_names, $deleted_subject_ids)
    {
        // Delete removed subjects
        if (!empty($deleted_subject_ids)) {
            $this->db->where_in('id', $deleted_subject_ids)->delete('course_subjects');
        }
        $subject_unique_id = "SUBJ_" . strtoupper(substr(md5(time() . rand()), 0, 7));


        // Insert or Update subjects
        foreach ($subject_names as $index => $name) {
            $id = $subject_ids[$index];

            if (trim($name) == "")
                continue;

            if (!$id || $id == "0") {
                $this->db->insert('course_subjects', [
                    'course_unique_id' => $course_uid,
                    'subject_unique_id' => $subject_unique_id,
                    'subject_name' => $name
                ]);
            } else {
                $this->db->where('id', $id)->update('course_subjects', [
                    'subject_name' => $name
                ]);
            }
        }

        $this->sweetAlert(
            "Success!",
            "Subjects updated successfully!",
            "success",
            base_url('admin_coursedetails?course_uid=' . $course_uid)
        );
    }


    // ============================================================
    // -- fetch data from instructo_directory for teacher dropdwon ---
    // ============================================================
    public function getAllInstructors()
    {
        return $this->db
            ->order_by('instructor_name', 'ASC')
            ->get('instructor_directory')
            ->result();
    }

    // -- --- fetch course_instructor ----------------------------

    public function getCourseInstructors($course_uid)
    {
        return $this->db->where('course_unique_id', $course_uid)
            ->get('course_instructors')
            ->result();
    }

    // -----------------------------
// Insert teacher into course_instructors
// -----------------------------
    public function addCourseInstructor($course_uid, $teacher_id)
    {
        // 1️⃣ Check karo ki ye teacher already course me assigned hai ya nahi
        $exists = $this->db->where('course_unique_id', $course_uid)
            ->where('teacher_unique_id', $teacher_id)
            ->get('course_instructors')
            ->row();

        if (!$exists) {
            // 2️⃣ Teacher ka data instructor_directory se fetch karo
            $teacher = $this->db->where('teacher_unique_id', $teacher_id)
                ->get('instructor_directory')
                ->row();
            if ($teacher) {
                // 3️⃣ Agar teacher exist karta hai, to course_instructors me insert karo
                $this->db->insert('course_instructors', [
                    'course_unique_id' => $course_uid,
                    'teacher_unique_id' => $teacher->teacher_unique_id,
                    'instructor_name' => $teacher->instructor_name,
                    'registration_date' => date('Y-m-d H:i:s') // current date-time
                ]);
            }
        }


    }

    // -----------------------------
// Remove teacher(s) from course_instructors
// -----------------------------
    public function removeCourseInstructors($course_uid, $teacher_ids_to_keep)
    {
        // 1️⃣ Delete all instructors for this course except jo teacher_ids_to_keep me hain
        $this->db->where('course_unique_id', $course_uid)
            ->where_not_in('teacher_unique_id', $teacher_ids_to_keep)
            ->delete('course_instructors');
    }





    // ============================================================
    // -- GET subject_teacher_assign---
    // ============================================================

    public function getSubjectTeacher($course_uid)
    {
        return $this->db
            ->where('course_unique_id', $course_uid)
            ->order_by('id', 'ASC')
            ->get('subject_teacher_assign')
            ->result();
    }

    // public function getCourseInstructors($course_uid)
    // {
    //     return $this->db->where('course_unique_id', $course_uid)
    //         ->get('course_instructors')
    //         ->result();
    // }


    // public function getcourseSubjects($course_uid)
    // {
    //     return $this->db
    //         ->where('course_unique_id', $course_uid)
    //         ->order_by('id', 'ASC')
    //         ->get('course_subjects')
    //         ->result();
    // }



    // public function assignSubjectTeacher($course_uid, $subject_name, $teacher_ids)
    // {
       
    // }
























    // ============================================================
    // ✅ admin profile Update Here 
    // ============================================================

    public function adminProfileUpdate()
    {
        // 1️⃣ Get logged-in admin
        $portal_uid = $_SESSION['activeAdmin'];
        $admin = $this->db->get_where('admin_directory', ['portal_uid' => $portal_uid])->row();
        $oldImage = $admin->admin_photo ?? null;

        // 2️⃣ Collect POST data safely
        $data = array(
            'nick_name' => $this->input->post('nickName', true),
            'expert_as' => $this->input->post('expertAs', true),
            'admin_biography' => $this->input->post('biography', true),
            'facebook_url' => $this->input->post('facebook', true),
            'twitter_url' => $this->input->post('xtwitter', true),
            'admin_linkdin_url' => $this->input->post('linkedin', true),
            'admin_github_url' => $this->input->post('github', true),
            'instagram_url' => $this->input->post('instagram', true),
            'youtube_url' => $this->input->post('youtube', true),
            'admin_website_url' => $this->input->post('website', true),
        );

        // 3️⃣ Handle profile image upload
        if (!empty($_FILES['profilePhoto']['name'])) {
            $config['upload_path'] = 'modules/adminProfilePhoto/';
            $config['allowed_types'] = 'jpg|jpeg|png|webp';
            $config['remove_spaces'] = TRUE;
            $config['file_ext_tolower'] = TRUE;
            $config['file_name'] = uniqid() . "_" . $_FILES['profilePhoto']['name'];

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('profilePhoto')) {
                // Delete old image if exists
                if (!empty($oldImage) && file_exists('modules/adminProfilePhoto/' . $oldImage)) {
                    unlink('modules/adminProfilePhoto/' . $oldImage);
                }

                $uploadData = $this->upload->data();
                $data['admin_photo'] = $uploadData['file_name']; // Save new filename in DB
            } else {
                // Handle upload error
                $error = $this->upload->display_errors('', '');
                return $this->sweetAlert('Upload Failed!', $error, 'error', base_url('admin_profile'));
            }
        }

        // 4️⃣ Update database
        $this->db->where('portal_uid', $portal_uid);
        $updated = $this->db->update('admin_directory', $data);

        // 5️⃣ SweetAlert + redirect
        if ($updated) {
            return $this->sweetAlert(
                'Update Successful!',
                'Profile has been updated successfully!',
                'success',
                base_url('admin_profile')
            );
        } else {
            return $this->sweetAlert(
                'Update Failed!',
                'Sorry, something went wrong. Please try again.',
                'error',
                base_url('admin_setting')
            );
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


    // ============================================================
    // ================= Create an Instructor =====================
    // ============================================================
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
            $teacherUniqueId = "INST_" . strtoupper(substr(md5(uniqid() . time()), 0, 10));


            // ✅ 5. Prepare data
            $instructorData = array(
                'instructor_name' => $fullName,
                'teacher_unique_id' => $teacherUniqueId,
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
    // ✅ Course info Create Coure course card Bundle 
    // ============================================================

    public function createCourse()
    {
        // Sanitize input
        $courseTitle = $this->input->post('course_name', true);
        $courseShortDescription = $this->input->post('courseDescription');
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

        $courseUID = strtoupper(random_string('alnum', 6));

        // ==============================
        // ✅ Insert Data
        // ==============================
        $courseData = array(
            'course_name' => $courseTitle,
            'course_description' => $courseShortDescription,
            'course_unique_id' => $courseUID,
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
    // ✅ Course info Update Here 
    // ============================================================

    public function updateCourse()
    {
        $courseID = $this->input->post('courseID', true);
        $oldImage = $this->input->post('oldImage');
        $oldVideo = $this->input->post('oldVideo');

        $courseType = $this->input->post('courseType', true);

        // ==========================================================
        //  DATA ARRAY
        // ==========================================================
        $data = array(
            'course_name' => $this->input->post('course_name', true),
            'course_description' => $this->input->post('courseDescription'),
            'course_type' => $courseType,
            'course_category' => $this->input->post('courseCategory', true),
            'starting_date' => $this->input->post('startDate', true),
            'ending_date' => $this->input->post('finishDate', true),
            'course_mode' => $this->input->post('avilability', true),
            'course_language' => $this->input->post('language', true),
            'enquiry_number' => $this->input->post('enquiryNumber', true),
        );

        // ==========================================================
        // PRICE & DISCOUNT LOGIC
        // ==========================================================
        if ($courseType == 'free') {
            $data['course_actual_cost'] = 0;
            $data['discount_applied'] = 0;
            $data['course_selling_cost'] = 0;
        } else {
            $data['course_actual_cost'] = $this->input->post('regularPrice', true);
            $data['discount_applied'] = $this->input->post('discountPercent', true);
            $data['course_selling_cost'] = $this->input->post('finalPrice', true);
        }

        // ==========================================================
        // 1️⃣ UPDATE IMAGE
        // ==========================================================
        if (!empty($_FILES['courseImage']['name'])) {
            $config['upload_path'] = 'modules/courseThumbnail/';
            $config['allowed_types'] = 'jpg|jpeg|png|webp';
            $config['remove_spaces'] = TRUE;
            $config['file_ext_tolower'] = TRUE;
            $config['file_name'] = uniqid() . "_" . $_FILES['courseImage']['name'];

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('courseImage')) {
                if (!empty($oldImage) && file_exists('modules/courseThumbnail/' . $oldImage)) {
                    unlink('modules/courseThumbnail/' . $oldImage);
                }
                $data['course_thumbnail'] = $config['file_name'];
            }
        }

        // ==========================================================
        // 2️⃣ UPDATE VIDEO
        // ==========================================================
        $videoUrl = $this->input->post('courseVideoUrl', true);

        if (!empty($_FILES['courseVideoFile']['name'])) {
            $config2['upload_path'] = 'modules/courseVideo/';
            $config2['allowed_types'] = 'mp4|mov|avi|mkv';
            $config2['max_size'] = 500000;
            $config2['remove_spaces'] = TRUE;
            $config2['file_ext_tolower'] = TRUE;

            $cleanName = preg_replace("/[^A-Za-z0-9\.\-_]/", "_", $_FILES['courseVideoFile']['name']);
            $config2['file_name'] = uniqid() . "_" . $cleanName;

            $this->upload->initialize($config2);

            if ($this->upload->do_upload('courseVideoFile')) {
                if (!empty($oldVideo) && file_exists('modules/courseVideo/' . $oldVideo)) {
                    unlink('modules/courseVideo/' . $oldVideo);
                }

                $video = $this->upload->data();

                $data['course_preview_video'] = $video['file_name'];
                $data['course_video_content'] = $video['file_name'];
            }
        } else if (!empty($videoUrl)) {
            $data['course_preview_video'] = $videoUrl;
            $data['course_video_content'] = $videoUrl;
        }

        // ==========================================================
        // 3️⃣ DATABASE UPDATE
        // ==========================================================
        $this->db->where('id', $courseID);
        $updated = $this->db->update('course_directory', $data);

        // ==========================================================
        // 4️⃣ SWEET ALERT + REDIRECT
        // ==========================================================
        if ($updated) {
            return $this->sweetAlert(
                'Update Successful!',
                'Course has been updated successfully!',
                'success',
                base_url('admin_dashboard')
            );
        } else {
            return $this->sweetAlert(
                'Update Failed!',
                'Sorry, something went wrong. Please try again.',
                'error',
                base_url('admin_courseWork')
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