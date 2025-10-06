<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * StudentOnBoardingController
 * 
 * Purpose: Handles **all onboarding pages** (signup, login, forgot, verify, reset)
 * Only for actions **before student login**
 */
class StudentOnBoardingControllers extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Student_Model'); // Load Student model for DB operations
    }

    // ----- Onboarding page loaders -----

    // Load signup page UI
    public function loaDstudent_signup()
    {
        $this->load->view('onBoarding/student/student_signup');
    }

    // Load login page UI
    public function loaDstudent_login()
    {
        $this->load->view('onBoarding/student/student_login');
    }

    // Load forgot password UI
    public function loaDstudent_forgot()
    {
        $this->load->view('onBoarding/student/student_forgot');
    }

    // Load verification page UI (OTP / email verify)
    public function loaDstudent_verify()
    {
        $this->load->view('onBoarding/student/student_verify');
    }

    // Load reset password page UI
    public function loaDstudent_reset()
    {
        $this->load->view('onBoarding/student/student_reset');
    }

    // ----- Form submission handlers -----

    // Handle signup form submit
    public function loaDregisterStudent()
    {
        $this->Student_Model->registerStudent(); // call model to insert student into DB
    }

    
}

?>
