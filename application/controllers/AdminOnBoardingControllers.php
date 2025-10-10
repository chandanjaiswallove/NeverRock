<?php

defined('BASEPATH') or exit('not direct script access allowed');

/**
 * 
 */
class AdminOnBoardingControllers extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }


    ///// onBoarding admin loading here /////
    public function loaDadmin_login()
    {
        $this->load->view('onBoarding/admin/admin_login');
    }

    public function loaDadmin_forgot()
    {
        $this->load->view('onBoarding/admin/admin_forgot');
    }

    public function loaDadmin_verify()
    {
        $this->load->view('onBoarding/admin/admin_verify');
    }

    public function loaDadmin_reset()
    {
        $this->load->view('onBoarding/admin/admin_reset');
    }

}

?>