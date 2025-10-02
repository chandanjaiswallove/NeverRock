<?php

defined('BASEPATH') or exit('no direct script access allowed');

/**
 * 
 */
class ECommerceControllers extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }


    //// eCommerce/Product pages loading here////

    public function loadOur_products()
    {
        $this->load->view('eCommerce/our_products');
    }


}



?>