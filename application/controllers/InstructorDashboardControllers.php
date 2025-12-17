<?php

defined('BASEPATH') or exit('no direct script access allowed');

/**
 * 
 */
class InstructorDashboardControllers extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Instructor_Model', 'instructor'); // Load model
        $this->load->database();
    }
    
    
    public function loaDcourse_subjects()
    {
        $course_uid = $this->input->get('course_uid');

        if (!$course_uid) {
            echo "Invalid Course UID!";
            return;
        }

        $data['course_unique_id'] = $course_uid;

        $data['courseDirectory'] = $this->instructor->getCourseFromDirectory($course_uid);

        $this->load->view('dashboard/dInstructor/course_subjects', $data);
    }


    //// dashboard/dInstructor pages loading here////

    public function loaDinstructor_dashboard()
    {
        $this->load->view('dashboard/dInstructor/instructor_dashboard');
    }

    public function loaDinstructor_message()
    {
        $this->load->view('dashboard/dInstructor/instructor_message');
    }

    public function loaDinstructor_myCourse()
    {
        $this->load->view('dashboard/dInstructor/instructor_myCourse');
    }




    public function loaDinstructor_courseV()
    {
        $this->load->view('dashboard/dInstructor/instructor_courseV');
    }

    public function loaDinstructor_profile()
    {
        $this->load->view('dashboard/dInstructor/instructor_profile');
    }

    public function loaDinstructor_setting()
    {
        $this->load->view('dashboard/dInstructor/instructor_setting');
    }

    public function loaDcreate_lesson()
    {
        $this->load->view('dashboard/dInstructor/create_lesson');
    }

    public function loaDcreate_quiz()
    {
        $this->load->view('dashboard/dInstructor/create_quiz');
    }

    //// Instructor_Model loading here /////

    public function modeLloginINSTRUCTOR()
    {
        $this->load->model('Instructor_Model');
        $this->Instructor_Model->loginINSTRUCTOR();
    }

    public function modeLchangeProfilePassword()
    {
        $this->load->model('Instructor_Model');
        $this->Instructor_Model->changeProfilePassword();
    }
    public function modeLinstructor_logout()
    {
        $this->load->model('Instructor_Model');
        $this->Instructor_Model->instructor_logout();
    }

    public function loaDinstProfileUpdate()    /// Instructor Profile Update
    {
        $this->load->model('Instructor_Model');
        $this->Instructor_Model->instProfileUpdate();
    }

}



?>