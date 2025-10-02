<?php

defined('BASEPATH') or exit('no direct script access allowed');

/**
 * 
 */
class DeveloperDashboardControllers extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }


    //// Develoepr/Dashboard pages loading here////

    public function loaDdeveloper_dashboard()
    {
        $this->load->view('dashboard/dDeveloper/developer_dashboard');
    }

    public function loaDdeveloper_createInstitue()
    {
        $this->load->view('dashboard/dDeveloper/developer_createInstitue');
    }

    public function loaDdeveloper_enrollInstitues()
    {
        $this->load->view('dashboard/dDeveloper/developer_enrollInstitues');
    }

    public function loaDdeveloper_message()
    {
        $this->load->view('dashboard/dDeveloper/developer_message');
    }

    public function loaDdeveloper_profile()
    {
        $this->load->view('dashboard/dDeveloper/developer_profile');
    }

    public function loaDdeveloper_setting()
    {
        $this->load->view('dashboard/dDeveloper/developer_setting');
    }

    //// Developer_Model loading here /////
    public function developerLogin()
    {
        $this->load->model('Developer_Model');
        $this->Developer_Model->developerAuth();
    }

    public function developerLogout()
    {
        $this->load->model('Developer_Model');
        $this->Developer_Model->logoutUser();
    }

    public function registerAdmin()
    {
        $this->load->model('Developer_Model');
        $this->Developer_Model->registerInstitute();
    }
    

}



?>