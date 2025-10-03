<?php

defined('BASEPATH') or exit('not direct script access allowed');

/**
 * 
 */
class StudentOnBoardingControllers extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }


    ///// onBoarding student loading here /////
    public function loaDstudent_signup()
    {
        $this->load->view('onBoarding/student/student_signup');
    }

    public function loaDstudent_login()
    {
        $this->load->view('onBoarding/student/student_login');
    }

    public function loaDstudent_forgot()
    {
        $this->load->view('onBoarding/student/student_forgot');
    }

    public function loaDstudent_verify()
    {
        $this->load->view('onBoarding/student/student_verify');
    }

    public function loaDstudent_reset()
    {
        $this->load->view('onBoarding/student/student_reset');
    }


    //// Student_Model loading here /////
    public function loaDregisterStudent()
    {
        $this->load->model('Student_Model');
        $this->Student_Model->registerStudent();
    }


}

?>