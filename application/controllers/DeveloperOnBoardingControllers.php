<?php

defined('BASEPATH') or exit('no direct script access allowed');

/**
 * 
 */
class DeveloperOnBoardingControllers extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }


    ///// OnBoarding developer  loading here /////
    public function loaDdevelopers()
    {
        $this->load->view('onBoarding/developer/developers');
    }




}

?>