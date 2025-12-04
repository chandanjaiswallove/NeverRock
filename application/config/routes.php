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
$route['academics_results'] = 'UiPagesControllers/loaDacademics_results'; // Load academics results page
$route['contact_us'] = 'UiPagesControllers/loaDcontact_us'; // Contact us page
$route['courses_all'] = 'UiPagesControllers/loaDcourses_all'; // Courses listing page
$route['curriculums'] = 'UiPagesControllers/loaDcurriculums'; // Curriculum page
$route['gallerys'] = 'UiPagesControllers/loaDgallerys'; // Gallery page
$route['instructors'] = 'UiPagesControllers/loaDinstructors'; // Instructors listing
$route['principal_message'] = 'UiPagesControllers/loaDprincipal_message'; // Principal message page
$route['success_stories'] = 'UiPagesControllers/loaDsuccess_stories'; // Success stories page
$route['course_details'] = 'UiPagesControllers/loaDcourse_details'; // course_details page





//// ==================== E-Commerce ==================== ////  
// Controller: ECommerceControllers
$route['our_products'] = 'ECommerceControllers/loaDour_products'; // Products listing page



//// ==================== Developer Section ==================== ////  
// Controller: DeveloperOnBoardingControllers
$route['deve_loper'] = 'DeveloperOnBoardingControllers/loaDdevelopers'; // Developer onboarding page

// Controller: DeveloperDashboardControllers
$route['developer_dashboard'] = 'DeveloperDashboardControllers/loaDdeveloper_dashboard'; // Developer main dashboard
$route['developer_createInstitue'] = 'DeveloperDashboardControllers/loaDdeveloper_createInstitue'; // Create new institute
$route['developer_enrollInstitues'] = 'DeveloperDashboardControllers/loaDdeveloper_enrollInstitues'; // Enroll institutes page
$route['developer_message'] = 'DeveloperDashboardControllers/loaDdeveloper_message'; // Developer messages
$route['developer_profile'] = 'DeveloperDashboardControllers/loaDdeveloper_profile'; // Developer profile page
$route['developer_setting'] = 'DeveloperDashboardControllers/loaDdeveloper_setting'; // Developer settings page

// Developer_Model/Auth Methods for Developer
$route['developerLogin'] = 'DeveloperDashboardControllers/modeLdeveloperAuth'; // Developer login action (calls model)
$route['developerLogout'] = 'DeveloperDashboardControllers/modeLlogoutUser'; // Developer logout
$route['add_institute'] = 'DeveloperDashboardControllers/modeLregisterInstitute'; // Register new admin (developer action)



//// ==================== Admin Section ==================== ////  
// Controller: AdminOnBoardingControllers
$route['admin_login'] = 'AdminOnBoardingControllers/loaDadmin_login'; // Admin login page
$route['admin_forgot'] = 'AdminOnBoardingControllers/loaDadmin_forgot'; // Admin forgot password
$route['admin_verify'] = 'AdminOnBoardingControllers/loaDadmin_verify'; // Verify OTP / code
$route['admin_reset'] = 'AdminOnBoardingControllers/loaDadmin_reset'; // Reset password page

// Controller: AdminDashboardControllers
$route['admin_announcement'] = 'AdminDashboardControllers/loaDadmin_announcement'; // Announcements page

$route['admin_course'] = 'AdminDashboardControllers/loaDadmin_courses'; // Course management insert model
$route['admin_courseedit'] = 'AdminDashboardControllers/loaDadmin_courseedit'; // All Course card edit form
$route['updateCourse'] = 'AdminDashboardControllers/loaDupdateCourse'; //  Course update function calling here


$route['admin_coursework'] = 'AdminDashboardControllers/loaDadmin_coursework'; // All Course Listed Here and Add Edit $ Delte
$route['admin_courseView'] = 'AdminDashboardControllers/loaDadmin_courseView'; // All Course Detials View Here 

/// Testing here to url for feth edit remove insert all table for here
$route['admin_coursedetails'] = 'AdminDashboardControllers/loaDadmin_coursedetails';
$route['verifyCourseData'] = 'AdminDashboardControllers/verifyCourseData';
$route['verifyCourseFaqs'] = 'AdminDashboardControllers/loaDverifyCourseFaqs';
$route['verifyCourseHeadings'] = 'AdminDashboardControllers/loaDverifyCourseHeadings';
$route['verifyCourseImportantTopic'] = 'AdminDashboardControllers/loaDverifyCourseImportantTopic';
$route['ajaxDeleteImportantTopic'] = 'AdminDashboardControllers/ajaxDeleteImportantTopic';





// Save Course Data (Insert + Update + Delete)
$route['save-course-details'] = 'AdminDashboardControllers/saveCourseDetails';


$route['admin_cdetailsedit'] = 'AdminDashboardControllers/loaDadmin_cdetailsedit'; // All Course Detials form insert model

$route['admin_createInstructors'] = 'AdminDashboardControllers/loaDadmin_createInstructors'; // Create instructors
$route['admin_createAcademicResults'] = 'AdminDashboardControllers/loaDadminAcademicResults'; // Create academic results
$route['admin_dashboard'] = 'AdminDashboardControllers/loaDadmin_dashboard'; // Main admin dashboard
$route['admin_message'] = 'AdminDashboardControllers/loaDadmin_message'; // Admin messages

$route['admin_profile'] = 'AdminDashboardControllers/loaDadmin_profile'; // Admin profile
$route['profile_updated'] = 'AdminDashboardControllers/loaDadminProfileUpdate'; // Admin profile Update

$route['admin_setting'] = 'AdminDashboardControllers/loaDadmin_setting'; // Admin settings

// Admin_Model/Auth Methods for Admin
$route['adminAuth'] = 'AdminDashboardControllers/modeLadminAuth'; // Login authentication 
$route['passwordUpdate'] = 'AdminDashboardControllers/modeLchangeProfilePassword'; // Update password in database
$route['logoutAdmin'] = 'AdminDashboardControllers/modeLlogoutAdmin'; // Logout admin
$route['add_instructor'] = 'AdminDashboardControllers/modeLregisterInstructor'; // Register instructor 
$route['createCourse'] = 'AdminDashboardControllers/modeLcreateCourse'; // Create Course Bundle
// $route['verifyCourseData'] = 'AdminDashboardControllers/modeLDetailData'; // Create Course Details Data



//// ==================== Instructor Section ==================== ////  
// Controller: InstructorOnBoardingControllers
$route['instructor_login'] = 'InstructorOnBoardingControllers/loaDinstructor_login'; // Instructor login page
$route['instructor_forgot'] = 'InstructorOnBoardingControllers/loaDinstructor_forgot'; // Forgot password
$route['instructor_verify'] = 'InstructorOnBoardingControllers/loaDinstructor_verify'; // Verify OTP / code
$route['instructor_reset'] = 'InstructorOnBoardingControllers/loaDinstructor_reset'; // Reset password

// Controller: InstructorDashboardControllers
$route['instructor_dashboard'] = 'InstructorDashboardControllers/loaDinstructor_dashboard'; // Instructor dashboard
$route['instructor_message'] = 'InstructorDashboardControllers/loaDinstructor_message'; // Messages

$route['instructor_myCourse'] = 'InstructorDashboardControllers/loaDinstructor_myCourse'; // Instructor courses
$route['course_subjects'] = 'InstructorDashboardControllers/loaDcourse_subjects'; // Instructor courses Subjects
$route['instructor_courseV'] = 'InstructorDashboardControllers/loaDinstructor_courseV'; // Instructor courses details View

$route['instructor_profile'] = 'InstructorDashboardControllers/loaDinstructor_profile'; // Profile page
$route['instructor_setting'] = 'InstructorDashboardControllers/loaDinstructor_setting'; // Settings page 
$route['create_lesson'] = 'InstructorDashboardControllers/loaDcreate_lesson'; // create_lesson page 
$route['create_quiz'] = 'InstructorDashboardControllers/loaDcreate_quiz'; // create_create_quiz


// Instructor_Model/Auth Methods for Instructor
$route['instructorAuth'] = 'InstructorDashboardControllers/modeLloginINSTRUCTOR'; // Instructor login (calls model)
$route['instPasswordUpdate'] = 'InstructorDashboardControllers/modeLchangeProfilePassword';// update passowrd funciton 

$route['instProfileUpdate'] = 'InstructorDashboardControllers/loaDinstProfileUpdate';// instructor profile update 

$route['logoutInstructor'] = 'InstructorDashboardControllers/modeLinstructor_logout'; // Logout instructor



//// ==================== Student Section ==================== ////  
// Controller: StudentOnBoardingControllers
$route['student_signup'] = 'StudentOnBoardingControllers/loaDstudent_signup'; // Signup page
$route['student_login'] = 'StudentOnBoardingControllers/loaDstudent_login'; // Login page
$route['student_forgot'] = 'StudentOnBoardingControllers/loaDstudent_forgot'; // Forgot password
$route['student_verify'] = 'StudentOnBoardingControllers/loaDstudent_verify'; // Verify OTP / code
$route['student_reset'] = 'StudentOnBoardingControllers/loaDstudent_reset'; // Reset password
/// Student_Model for add student
$route['add_student'] = 'StudentOnBoardingControllers/modeLregisterStudent'; // Signup action (calls model)

// Controller: StudentDashboardControllers
$route['student_dashboard'] = 'StudentDashboardControllers/loaDstudent_dashboard'; // Student dashboard
$route['student_enrollCourse'] = 'StudentDashboardControllers/loaDstudent_enrollCourse'; // Enroll course page
$route['student_message'] = 'StudentDashboardControllers/loaDstudent_message'; // Messages page
$route['student_profile'] = 'StudentDashboardControllers/loaDstudent_profile'; // Profile page
$route['student_setting'] = 'StudentDashboardControllers/loaDstudent_setting'; // Settings page

// Student_Model/Auth Methods for Student
$route['studentAuth'] = 'StudentDashboardControllers/modeLloginStudent'; // Student login (calls model)
$route['logoutStudent'] = 'StudentDashboardControllers/modeLstudent_logout'; // Logout student
