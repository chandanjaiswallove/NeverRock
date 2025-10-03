<?php

defined('BASEPATH') or exit('no direct script access allowed');

/**
 * 
 */
class StudentDashboardControllers extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }


    //// dashboard/dStudent pages loading here ////
    public function loaDstudent_dashboard()
    {
        $this->load->view('dashboard/dStudent/student_dashboard');
    }

    public function loaDstudent_enrollCourse()
    {
        $this->load->view('dashboard/dStudent/student_enrollCourse');
    }

    public function loaDstudent_message()
    {
        $this->load->view('dashboard/dStudent/student_message');
    }

    public function loaDstudent_profile()
    {
        $this->load->view('dashboard/dStudent/student_profile');
    }

    public function loaDstudent_setting()
    {
        $this->load->view('dashboard/dStudent/student_setting');
    }


    //// Student_Model loading here /////

    public function loaDloginStudent()
    {
        $this->load->model('Student_Model');
        $this->Student_Model->loginStudent();
    }


    public function loaDstudent_logout()
    {
        $this->load->model('Student_Model');
        $this->Student_Model->student_logout();
    }



}



?>