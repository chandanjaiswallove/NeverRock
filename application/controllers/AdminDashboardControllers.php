<?php

defined('BASEPATH') or exit('no direct script access allowed');

/**
 * 
 */
class AdminDashboardControllers extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

    }


    public function loaDadmin_coursedetails()
    {
        // 1️⃣ URL se course_unique_id uthao
        $course_uid = $this->input->get('course_uid');  // ?course_uid=ZIVJJC

        // 2️⃣ Data array me dal do, view me use karne ke liye
        $data['course_unique_id'] = $course_uid;

        // 3️⃣ View load karo aur course_unique_id bhejo
        $this->load->view('dashboard/dAdmin/admin_coursedetails', $data);
    }


    public function modeLDetailData()  /// Create course details data  
    {
        $this->load->model('Admin_Model');
        $this->Admin_Model->insertDetailsData();
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
        // URL se course_uid lena
        $uid = $this->input->get('course_uid');  // unique variable

        // Database se row fetch karna
        $courseData = $this->db->get_where('course_directory', [
            'course_unique_id' => $uid
        ])->row();  // yaha bhi naam change

        // View me `$row` naam se bhejna
        $data['row'] = $courseData;

        // Extra bhi bhejna ho to:
        $data['course_uid'] = $uid;

        // View load
        $this->load->view('dashboard/dAdmin/admin_courseView', $data);
    }





    public function loaDadmin_cdetailsedit()
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