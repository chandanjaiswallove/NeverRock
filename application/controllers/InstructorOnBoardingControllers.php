<?php

defined('BASEPATH') or exit('not direct script access allowed');

/**
 * 
 */
class InstructorOnBoardingControllers extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }


    ///// onBoarding instructor loading here /////
    public function loaDinstructor_login()
    {
        $this->load->view('onBoarding/instructor/instructor_login');
    }

    public function loaDinstructor_forgot()
    {
        $this->load->view('onBoarding/instructor/instructor_forgot');
    }

    public function loaDinstructor_verify()
    {
        $this->load->view('onBoarding/instructor/instructor_verify');
    }

    public function loaDinstructor_reset()
    {
        $this->load->view('onBoarding/instructor/instructor_reset');
    }



}

?>