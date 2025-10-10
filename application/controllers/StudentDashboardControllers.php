<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * StudentDashboardControllers
 * 
 * Purpose: Handles **all pages after student login**
 * Dashboard pages, enrolled courses, profile, logout
 */
class StudentDashboardControllers extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        // $this->load->model('Student_Model'); // Load model for login/logout and other DB actions
    }

    // ----- Dashboard pages ----
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

    // ----- Login / Logout actions -----

    // Handle login form submit
    public function modeLloginStudent()
    {
        $this->load->model('Student_Model');
        $this->Student_Model->loginStudent(); // Calls model to validate login credentials
    }

    // Handle logout
    public function modeLstudent_logout()
    {
        $this->load->model('Student_Model');
        $this->Student_Model->student_logout(); // Calls model to destroy session
    }

    
}



?>