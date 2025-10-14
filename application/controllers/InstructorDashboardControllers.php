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

}



?>