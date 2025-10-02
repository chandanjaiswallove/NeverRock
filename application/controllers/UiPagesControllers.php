<?php

defined('BASEPATH') or exit('no direct script access allowed');

/**
 * 
 */
class UiPagesControllers extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	////  UiPages loading here  ////
	public function loadAcademics_results()
	{
		$this->load->view('uiPages/academics_results');
	}

	public function loadContact_us()
	{
		$this->load->view('uiPages/contact_us');
	}

	public function loadCourses_all()
	{
		$this->load->view('uiPages/courses_all');
	}

	public function loadCurriculums()
	{
		$this->load->view('uiPages/curriculums');
	}

	public function loadGallerys()
	{
		$this->load->view('uiPages/gallerys');
	}

	public function loadInstructors()
	{
		$this->load->view('uiPages/instructors');
	}

	public function loadPrincipal_message()
	{
		$this->load->view('uiPages/principal_message');
	}

	public function loadSuccess_stories()
	{
		$this->load->view('uiPages/success_stories');
	}


}

?>