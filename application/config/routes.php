<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/



$route['default_controller'] = 'welcome';
$route['404_override'] = 'ErrorControllers';
$route['translate_uri_dashes'] = FALSE;

//// UiPagesControllers Routing  here ////
$route['academics_results'] = 'UiPagesControllers/loadAcademics_results';
$route['contact_us'] = 'UiPagesControllers/loadContact_us';
$route['courses_all'] = 'UiPagesControllers/loadCourses_all';
$route['curriculums'] = 'UiPagesControllers/loadCurriculums';
$route['gallerys'] = 'UiPagesControllers/loadGallerys';
$route['instructors'] = 'UiPagesControllers/loadInstructors';
$route['principal_message'] = 'UiPagesControllers/loadPrincipal_message';
$route['success_stories'] = 'UiPagesControllers/loadSuccess_stories';


//// ECommereceControllers routing here /////
$route['our_products'] = 'ECommerceControllers/loadOur_products';


//// DeveloperOnBoardingControllers routing here   ////
$route['deve_loper'] = 'DeveloperOnBoardingControllers/loadDevelopers';


//// AdminOnBoardingControllers routing here   ////
$route['admin_login'] = 'AdminOnBoardingControllers/loaDadmin_login';
$route['admin_forgot'] = 'AdminOnBoardingControllers/loaDadmin_forgot';
$route['admin_verify']  = 'AdminOnBoardingControllers/loaDadmin_verify';
$route['admin_reset'] = 'AdminOnBoardingControllers/loaDadmin_reset';


//// InstructorOnBoardingControllers routing here  ///
$route['instructor_login'] = 'InstructorOnBoardingControllers/loaDinstructor_login';
$route['instructor_forgot'] ='InstructorOnBoardingControllers/loaDinstructor_forgot';
$route['instructor_verify'] = 'InstructorOnBoardingControllers/loaDinstructor_verify';
$route['instructor_reset'] = 'InstructorOnBoardingControllers/loaDinstructor_reset';


//// StudentOnBoardingControllers  ///
$route['student_signup'] = 'StudentOnBoardingControllers/loaDstudent_signup';
$route['student_login'] = 'StudentOnBoardingControllers/loaDstudent_login';
$route['student_forgot'] = 'StudentOnBoardingControllers/loaDstudent_forgot';
$route['student_verify'] = 'StudentOnBoardingControllers/loaDstudent_verify';
$route['student_reset'] = 'StudentOnBoardingControllers/loaDstudent_reset';


////Dashboards routing here ////
//// DeveloperDashboard Controller routing here ////
$route['developer_dashboard'] = 'DeveloperDashboardControllers/loaDdeveloper_dashboard';
$route['developer_createInstitue'] = 'DeveloperDashboardControllers/loaDdeveloper_createInstitue';
$route['developer_enrollInstitues'] = 'DeveloperDashboardControllers/loaDdeveloper_enrollInstitues';
$route['developer_message'] = 'DeveloperDashboardControllers/loaDdeveloper_message';
$route['developer_profile'] = 'DeveloperDashboardControllers/loaDdeveloper_profile';
$route['developer_setting'] = 'DeveloperDashboardControllers/loaDdeveloper_setting';
//// Developer_Model Authentication routing here /////
$route['developerLogin'] = 'DeveloperDashboardControllers/developerLogin';
$route['developerLogout'] = 'DeveloperDashboardControllers/developerLogout';
// Registering New Admin by DeveloperDashboard
$route['add_institute'] = 'DeveloperDashboardControllers/registerAdmin';


///// AdminDashboardControllers  routing here ////
$route['admin_announcement'] = 'AdminDashboardControllers/loaDadmin_announcement';
$route['admin_course'] = 'AdminDashboardControllers/loaDadmin_course';
$route['admin_createInstructors'] = 'AdminDashboardControllers/loaDadmin_createInstructors';
$route['admin_dashboard'] = 'AdminDashboardControllers/loaDadmin_dashboard';
$route['admin_message'] = 'AdminDashboardControllers/loaDadmin_message';
$route['admin_profile'] = 'AdminDashboardControllers/loaDadmin_profile';
$route['admin_setting'] = 'AdminDashboardControllers/loaDadmin_setting';
$route['set_new_password'] = 'AdminDashboardControllers/updateAdminPassword';
//// Admin_Model Authentication routing here /////
$route['adminAuth'] = 'AdminDashboardControllers/loaDadminAuth';
$route['passwordUpdate'] = 'AdminDashboardControllers/updateNewPassword';
$route['logoutAdmin'] = 'AdminDashboardControllers/loaDlogoutAdmin';



//// InstructorDashboardControllers routing here ////
$route['instructor_dashboard'] = 'InstructorDashboardControllers/loaDinstructor_dashboard';
$route['instructor_message'] = 'InstructorDashboardControllers/loaDinstructor_message';
$route['instructor_myCourse'] = 'InstructorDashboardControllers/loaDinstructor_myCourse';
$route['instructor_profile'] = 'InstructorDashboardControllers/loaDinstructor_profile';
$route['instructor_setting'] = 'InstructorDashboardControllers/loaDinstructor_setting';


///// StudentDashboardControllers routing here ////
$route['student_dashboard'] = 'StudentDashboardControllers/loaDstudent_dashboard';
$route['student_enrollCourse'] = 'StudentDashboardControllers/loaDstudent_enrollCourse';
$route['student_message'] = 'StudentDashboardControllers/loaDstudent_message';
$route['student_profile'] = 'StudentDashboardControllers/loaDstudent_profile';
$route['student_setting'] = 'StudentDashboardControllers/loaDstudent_setting';
