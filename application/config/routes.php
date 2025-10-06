<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| Default CodeIgniter routes
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = 'ErrorControllers';
$route['translate_uri_dashes'] = FALSE;


//// ==================== UI Pages ==================== ////  
// Controller: UiPagesControllers
$route['academics_results'] = 'UiPagesControllers/loadAcademics_results'; // Load academics results page
$route['contact_us'] = 'UiPagesControllers/loadContact_us'; // Contact us page
$route['courses_all'] = 'UiPagesControllers/loadCourses_all'; // Courses listing page
$route['curriculums'] = 'UiPagesControllers/loadCurriculums'; // Curriculum page
$route['gallerys'] = 'UiPagesControllers/loadGallerys'; // Gallery page
$route['instructors'] = 'UiPagesControllers/loadInstructors'; // Instructors listing
$route['principal_message'] = 'UiPagesControllers/loadPrincipal_message'; // Principal message page
$route['success_stories'] = 'UiPagesControllers/loadSuccess_stories'; // Success stories page



//// ==================== E-Commerce ==================== ////  
// Controller: ECommerceControllers
$route['our_products'] = 'ECommerceControllers/loadOur_products'; // Products listing page



//// ==================== Developer Section ==================== ////  
// Controller: DeveloperOnBoardingControllers
$route['deve_loper'] = 'DeveloperOnBoardingControllers/loadDevelopers'; // Developer onboarding page

// Controller: DeveloperDashboardControllers
$route['developer_dashboard'] = 'DeveloperDashboardControllers/loadDeveloper_dashboard'; // Developer main dashboard
$route['developer_createInstitue'] = 'DeveloperDashboardControllers/loadDeveloper_createInstitue'; // Create new institute
$route['developer_enrollInstitues'] = 'DeveloperDashboardControllers/loadDeveloper_enrollInstitues'; // Enroll institutes page
$route['developer_message'] = 'DeveloperDashboardControllers/loadDeveloper_message'; // Developer messages
$route['developer_profile'] = 'DeveloperDashboardControllers/loadDeveloper_profile'; // Developer profile page
$route['developer_setting'] = 'DeveloperDashboardControllers/loadDeveloper_setting'; // Developer settings page

// Developer_Model/Auth Methods for Developer
$route['developerLogin'] = 'DeveloperDashboardControllers/developerLogin'; // Developer login action (calls model)
$route['developerLogout'] = 'DeveloperDashboardControllers/developerLogout'; // Developer logout
$route['add_institute'] = 'DeveloperDashboardControllers/registerAdmin'; // Register new admin (developer action)



//// ==================== Admin Section ==================== ////  
// Controller: AdminOnBoardingControllers
$route['admin_login'] = 'AdminOnBoardingControllers/loadAdmin_login'; // Admin login page
$route['admin_forgot'] = 'AdminOnBoardingControllers/loadAdmin_forgot'; // Admin forgot password
$route['admin_verify'] = 'AdminOnBoardingControllers/loadAdmin_verify'; // Verify OTP / code
$route['admin_reset'] = 'AdminOnBoardingControllers/loadAdmin_reset'; // Reset password page

// Controller: AdminDashboardControllers
$route['admin_announcement'] = 'AdminDashboardControllers/loadAdmin_announcement'; // Announcements page
$route['admin_course'] = 'AdminDashboardControllers/loadAdmin_course'; // Course management
$route['admin_createInstructors'] = 'AdminDashboardControllers/loadAdmin_createInstructors'; // Create instructors
$route['admin_dashboard'] = 'AdminDashboardControllers/loadAdmin_dashboard'; // Main admin dashboard
$route['admin_message'] = 'AdminDashboardControllers/loadAdmin_message'; // Admin messages
$route['admin_profile'] = 'AdminDashboardControllers/loadAdmin_profile'; // Admin profile
$route['admin_setting'] = 'AdminDashboardControllers/loadAdmin_setting'; // Admin settings

// Admin_Model/Auth Methods for Admin
$route['adminAuth'] = 'AdminDashboardControllers/loadAdminAuth'; // Login authentication (calls Admin_Model)
$route['set_new_password'] = 'AdminDashboardControllers/updateAdminPassword'; // Update password (form action)
$route['passwordUpdate'] = 'AdminDashboardControllers/updateNewPassword'; // Update password in database
$route['logoutAdmin'] = 'AdminDashboardControllers/loadLogoutAdmin'; // Logout admin
$route['add_instructor'] = 'AdminDashboardControllers/loadRegisterInstructor'; // Register instructor (calls model)



//// ==================== Instructor Section ==================== ////  
// Controller: InstructorOnBoardingControllers
$route['instructor_login'] = 'InstructorOnBoardingControllers/loadInstructor_login'; // Instructor login page
$route['instructor_forgot'] = 'InstructorOnBoardingControllers/loadInstructor_forgot'; // Forgot password
$route['instructor_verify'] = 'InstructorOnBoardingControllers/loadInstructor_verify'; // Verify OTP / code
$route['instructor_reset'] = 'InstructorOnBoardingControllers/loadInstructor_reset'; // Reset password

// Controller: InstructorDashboardControllers
$route['instructor_dashboard'] = 'InstructorDashboardControllers/loadInstructor_dashboard'; // Instructor dashboard
$route['instructor_message'] = 'InstructorDashboardControllers/loadInstructor_message'; // Messages
$route['instructor_myCourse'] = 'InstructorDashboardControllers/loadInstructor_myCourse'; // Instructor courses
$route['instructor_profile'] = 'InstructorDashboardControllers/loadInstructor_profile'; // Profile page
$route['instructor_setting'] = 'InstructorDashboardControllers/loadInstructor_setting'; // Settings page

// Instructor_Model/Auth Methods for Instructor
$route['instructorAuth'] = 'InstructorDashboardControllers/loadLoginInstructor'; // Instructor login (calls model)
$route['logoutInstructor'] = 'InstructorDashboardControllers/loadInstructor_logout'; // Logout instructor



//// ==================== Student Section ==================== ////  
// Controller: StudentOnBoardingControllers
$route['student_signup'] = 'StudentOnBoardingControllers/loadStudent_signup'; // Signup page
$route['student_login'] = 'StudentOnBoardingControllers/loadStudent_login'; // Login page
$route['student_forgot'] = 'StudentOnBoardingControllers/loadStudent_forgot'; // Forgot password
$route['student_verify'] = 'StudentOnBoardingControllers/loadStudent_verify'; // Verify OTP / code
$route['student_reset'] = 'StudentOnBoardingControllers/loadStudent_reset'; // Reset password
/// Student_Model for add student
$route['add_student'] = 'StudentOnBoardingControllers/loaDregisterStudent'; // Signup action (calls model)

// Controller: StudentDashboardControllers
$route['student_dashboard'] = 'StudentDashboardControllers/loadStudent_dashboard'; // Student dashboard
$route['student_enrollCourse'] = 'StudentDashboardControllers/loadStudent_enrollCourse'; // Enroll course page
$route['student_message'] = 'StudentDashboardControllers/loadStudent_message'; // Messages page
$route['student_profile'] = 'StudentDashboardControllers/loadStudent_profile'; // Profile page
$route['student_setting'] = 'StudentDashboardControllers/loadStudent_setting'; // Settings page

// Student_Model/Auth Methods for Student
$route['studentAuth'] = 'StudentDashboardControllers/loaDloginStudent'; // Student login (calls model)
$route['logoutStudent'] = 'StudentDashboardControllers/loaDstudent_logout'; // Logout student
