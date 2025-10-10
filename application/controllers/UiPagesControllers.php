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
	public function loaDacademics_results()
	{
		$this->load->view('uiPages/academics_results');
	}

	public function loaDcontact_us()
	{
		$this->load->view('uiPages/contact_us');
	}

	public function loaDcourses_all()
	{
		$this->load->view('uiPages/courses_all');
	}

	public function loaDcurriculums()
	{
		$this->load->view('uiPages/curriculums');
	}

	public function loaDgallerys()
	{
		$this->load->view('uiPages/gallerys');
	}

	public function loaDinstructors()
	{
		$this->load->view('uiPages/instructors');
	}

	public function loaDprincipal_message()
	{
		$this->load->view('uiPages/principal_message');
	}

	public function loaDsuccess_stories()
	{
		$this->load->view('uiPages/success_stories');
	}

	public function loaDcourse_details()
	{
		$this->load->view('uiPages/course_details');
	}
}

?>