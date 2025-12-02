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
        $course_uid = $this->input->get('course_uid'); // ?course_uid=ZIVJJC

        if (!$course_uid) {
            echo "Invalid Course UID!";
            return;
        }

        // Fetch features data from coure_unique_id order to model in function by course_uid and
        //  pass data in view page with key variable course_unique_id 
        // features data come from databse help fetch from model and data pass now view page 
        $data['course_unique_id'] = $course_uid;
        $data['features'] = $this->admin->getCourseFeatures($course_uid);

        // load view and data pass 
        $this->load->view('dashboard/dAdmin/admin_coursedetails', $data);
    }

    // Handle form submit: insert, update, delete
    //  taking data from ui form name field &  load model in function and model function in data passed for model function
    public function verifyCourseData()
    {
        $course_uid = $this->input->post('course_unique_id');
        $ids = $this->input->post('feature_id') ?? [];
        $headings = $this->input->post('featureHeading') ?? [];
        $values = $this->input->post('featureKey') ?? [];
        $delete_ids = $this->input->post('delete_ids') ?? [];

        $this->admin->saveAllFeatures($course_uid, $ids, $headings, $values, $delete_ids);
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