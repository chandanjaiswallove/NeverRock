<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminDashboardControllers extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Model', 'admin'); // Load model
        $this->load->database();
    }

    // Load UI and fetch features
    public function loaDadmin_coursedetails()
    {
        $course_uid = $this->input->get('course_uid');
        if (!$course_uid) {
            echo "Invalid Course UID!";
            return;
        }

        $data['course_unique_id'] = $course_uid;

        // Existing Data
        $data['features'] = $this->admin->getCourseFeatures($course_uid);
        $data['faqs'] = $this->admin->getCourseFaqs($course_uid);
        $data['descripations'] = $this->admin->getCourseHeadings($course_uid);
        $data['important_topics'] = $this->admin->getImportantTopics($course_uid); // topics + keys

        // ⭐ Instructor list for dropdown
        $data['instructors'] = $this->admin->getAllInstructors(); /// from instructors_diectory

        $data['course_subjects'] = $this->admin->getcourseSubjects($course_uid); /// from course_subjects

        $data['assignedInstructors'] = $this->admin->getCourseInstructors($course_uid); // from course_instructors

        $data['subjectAssignTeacher'] = $this->admin->getSubjectTeacher($course_uid); // from subject_teacher_assign


        // Load View
        $this->load->view('dashboard/dAdmin/admin_coursedetails', $data);
    }


public function assignSubjectTeacher()
{
    $data = json_decode(file_get_contents("php://input"), true);

    $course_uid  = $data['course_uid'];
    $subject_uid = $data['subject_uid'];
    $subject_name = $data['subject_name'];
    $teachers = $data['teachers'];

    if (!$course_uid || !$subject_uid) {
        echo json_encode(['status' => 'error']);
        return;
    }

    $final = [];
    foreach ($teachers as $t) {
        $final[] = [
            'teacher_uid' => $t['uid'],
            'teacher_name' => $t['name'],
            'subject_name' => $subject_name
        ];
    }

    $this->admin->saveSubjectTeacher($course_uid, $subject_uid, $final);

    echo json_encode(['status' => 'success']);
}














    // Handle form submit: insert, update, delete
    //  taking data from ui form name field &  load model in function and model function in data passed for model function
    // all section input name store here 

    public function verifyCourseData()
    {
        $course_uid = $this->input->post('course_unique_id');
        $ids = $this->input->post('feature_id') ?? [];
        $headings = $this->input->post('featureHeading') ?? [];
        $values = $this->input->post('featureKey') ?? [];
        $delete_ids = $this->input->post('deleteCode') ?? [];

        $this->admin->saveAllFeatures($course_uid, $ids, $headings, $values, $delete_ids);
    }


    ///=========== COURSE FAQS ==================///
    public function loaDverifyCourseFaqs()
    {
        $course_uid = $this->input->post('course_unique_id');
        $faq_id = $this->input->post('faqs_id') ?? [];
        $faq_question = $this->input->post('faqQuestion') ?? [];
        $faq_answer = $this->input->post('faqAnswer') ?? [];
        $faq_remove = $this->input->post('deleteRemove') ?? [];

        $this->admin->saveAllFaqs($course_uid, $faq_id, $faq_question, $faq_answer, $faq_remove);
    }


    ///=========== Headings DESCRIPTIONS ==================///
    public function loaDverifyCourseHeadings()
    {
        $course_uid = $this->input->post('course_unique_id');

        $heading_id = $this->input->post('heading_id');
        $headingTitle = $this->input->post('headingTitle');
        $headingDescription = $this->input->post('headingDescription');
        $delete_heading_ids = $this->input->post('delete_heading_ids');

        $this->admin->saveAllHeadings($course_uid, $heading_id, $headingTitle, $headingDescription, $delete_heading_ids);
    }




    ///=========== topics DESCRIPTIONS ==================///
    public function verifyCourseImportantTopic()
    {
        $course_uid = $this->input->post('course_unique_id');
        $topic_id = $this->input->post('topic_id');
        $topic_name = $this->input->post('important_topic');

        $existing_keys = $this->input->post('important_keys_existing'); // [id => value]
        $new_keys = $this->input->post('important_keys_new'); // array
        $deleted_keys = json_decode($this->input->post('deleted_key_ids'));

        // Send to model
        $this->admin->saveImportantTopicAndKeys(
            $course_uid,
            $topic_id,
            $topic_name,
            $existing_keys,
            $new_keys,
            $deleted_keys
        );
    }


    ///=========== course subjects ==================///

    public function verifyCourseSubject()
    {
        $course_uid = $this->input->post('course_unique_id');
        $subject_ids = $this->input->post('subject_id');
        $subject_names = $this->input->post('subjectName');
        $deleted_subject_ids = $this->input->post('delete_subject_ids');

        $this->load->model('Admin_Model', 'admin');

        $this->admin->saveSubjects(
            $course_uid,
            $subject_ids,
            $subject_names,
            $deleted_subject_ids
        );
    }


    ///=========== course Instructor ==================///

    public function saveCourseInstructors()
    {
        $course_uid = $this->input->post('course_unique_id');
        $selectedIds = $this->input->post('instructors'); // array of teacher_unique_id

        // 1️⃣ Delete removed instructors
        $this->admin->removeCourseInstructors($course_uid, $selectedIds);

        // 2️⃣ Insert new instructors
        if (!empty($selectedIds)) {
            foreach ($selectedIds as $teacher_id) {
                $this->admin->addCourseInstructor($course_uid, $teacher_id);
            }
        }
        // 3️⃣ SweetAlert (controller me)
        $this->sweetAlertC(
            "Success!",
            "Instructors updated successfully!",
            "success",
            base_url('admin_coursedetails?course_uid=' . $course_uid)
        );

    }

































    // ============================================================
    // ✅ SWEETALERT HELPER FUNCTION
    // ============================================================
    private function sweetAlertC($title, $text, $icon, $redirect)
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























    //// dAdmin Dashboard  pages loading here////

    public function loaDadmin_announcement()
    {
        $this->load->view('dashboard/dAdmin/admin_announcement');
    }

    public function loaDadmin_courses()
    {
        $this->load->view('dashboard/dAdmin/admin_courses');
    }

    public function loaDadmin_coursework()
    {
        $this->load->view('dashboard/dAdmin/admin_coursework');
    }

    public function loaDadmin_courseView()
    {
        $uid = $this->input->get('course_uid');

        // Course details
        $courseData = $this->db->get_where('course_directory', ['course_unique_id' => $uid])->row();

        // Course Headings
        $headings = $this->db->get_where('course_headings', ['course_unique_id' => $uid])->result();

        // Course Topics
        $topics = $this->db->get_where('course_topics', ['course_unique_id' => $uid])->result();

        // Course FAQs (optional, agar pehle wale accordion chahiye)
        $faqs = $this->db->get_where('course_faqs', ['course_unique_id' => $uid])->result();

        // Course Features
        $features = $this->db->get_where('course_features', ['course_unique_id' => $uid])->result();

        $data = [
            'row' => $courseData,
            'headings' => $headings,
            'topics' => $topics,
            'faqs' => $faqs,
            'features' => $features,
            'course_uid' => $uid
        ];

        $this->load->view('dashboard/dAdmin/admin_courseView', $data);
    }







    public function loaDadmin_cdetailsedit() /// Extra page this one 
    {
        $this->load->view('dashboard/dAdmin/admin_cdetailsedit');
    }
    public function loaDadmin_courseedit()
    {
        $this->load->view('dashboard/dAdmin/admin_courseedit');
    }



    public function loaDadmin_createInstructors()
    {
        $this->load->view('dashboard/dAdmin/admin_createInstructors');
    }

    public function loaDadminAcademicResults()
    {
        $this->load->view('dashboard/dAdmin/academic_results');
    }



    public function loaDadmin_dashboard()
    {
        $this->load->view('dashboard/dAdmin/admin_dashboard');
    }

    public function loaDadmin_message()
    {
        $this->load->view('dashboard/dAdmin/admin_message');
    }

    public function loaDadmin_profile()
    {
        $this->load->view('dashboard/dAdmin/admin_profile');
    }

    public function loaDadmin_setting()
    {
        $this->load->view('dashboard/dAdmin/admin_setting');
    }


    //// Admin_Model loading here /////
    public function modeLadminAuth()
    {
        $this->load->model('Admin_Model');
        $this->Admin_Model->adminAuth();
    }

    public function modeLlogoutAdmin()
    {
        $this->load->model('Admin_Model');
        $this->Admin_Model->logoutAdmin();
    }


    public function modeLchangeProfilePassword()
    {
        $this->load->model('Admin_Model');
        $this->Admin_Model->changeProfilePassword();
    }

    //// RegisterInstitute Admin_Model and Fuction loading here ////
    public function modeLregisterInstructor()
    {
        $this->load->model('Admin_Model');
        $this->Admin_Model->registerInstructor();
    }

    public function modeLcreateCourse() /// Create Course Bundle 
    {
        $this->load->model('Admin_Model');
        $this->Admin_Model->createCourse();
    }


    public function loaDupdateCourse()  ///  Create Course Bundle  update  
    {
        $this->load->model('Admin_Model');
        $this->Admin_Model->updateCourse();
    }
    public function loaDadminProfileUpdate()   ///  admin profile update 
    {
        $this->load->model('Admin_Model');
        $this->Admin_Model->adminProfileUpdate();

    }




}



?>