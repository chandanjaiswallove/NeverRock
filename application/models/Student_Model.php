<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    // =================== Signup Student ===================
    public function registerStudent()
    {
        
        if (isset($_POST['studentSignupData'])) {

            // Collect form data
            $fullName = $this->input->post('studentName', true);
            $email = $this->input->post('studentEmail', true);
            $phone = $this->input->post('studentPhone', true);
            $password = $this->input->post('studentPassword', true);
            $confirmPass = $this->input->post('studentConfirm', true);
            $username = $this->input->post('studentUsername', true);
            $state = $this->input->post('studentState', true);

            echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';

            // 1️⃣ Password Match Check
            if ($password !== $confirmPass) {
                $this->swalRedirect("Password Mismatch!", "Password and Confirm Password do not match.", "error", "student_signup");
                return;
            }

            // 2️⃣ Duplicate Email & Phone Check Separately
            $emailExists = $this->db->where('student_email', $email)->get('student_directory')->num_rows() > 0;
            $phoneExists = $this->db->where('student_phone', $phone)->get('student_directory')->num_rows() > 0;

            if ($emailExists && $phoneExists) {
                $this->swalRedirect("Registration Failed", "Email and Phone already registered.", "error", "student_login");
                return;
            } elseif ($emailExists) {
                $this->swalRedirect("Registration Failed", "Email already registered.", "error", "student_login");
                return;
            } elseif ($phoneExists) {
                $this->swalRedirect("Registration Failed", "Phone already registered.", "error", "student_login");
                return;
            }

            // 3️⃣ Hash Password & Insert
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $studentData = [
                'student_fullname' => $fullName,
                'student_email' => $email,
                'student_phone' => $phone,
                'student_password' => $hashedPassword,
                'student_username' => $username,
                'student_state' => $state,
            ];



            $this->db->insert('student_directory', $studentData);

            $this->swalRedirect("Registration Successful!", "Student registered successfully. You can now login.", "success", "student_login");
        }
    }

    // =================== Login Student ===================
    public function loginStudent()
    {
        if (isset($_POST['studentLOGIN'])) {


            echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';


            $username = $this->input->post('stUsername', true);
            $email = $this->input->post('loginEmail', true);
            $password = $this->input->post('loginPassword', true);

            // Check username
            $userByUsername = $this->db->where('student_username', $username)->get('student_directory')->row();
            $userByEmail = $this->db->where('student_email', $email)->get('student_directory')->row();

            if (!$userByUsername && !$userByEmail) {
                $this->swalRedirect("Login Failed", "Username and Email not registered.", "error", "student_login");
                return;
            } elseif (!$userByUsername) {
                $this->swalRedirect("Login Failed", "Username not registered.", "error", "student_login");
                return;
            } elseif (!$userByEmail) {
                $this->swalRedirect("Login Failed", "Email not registered.", "error", "student_login");
                return;
            }

            // Now check password
            $student = $this->db->where('student_username', $username)->where('student_email', $email)->get('student_directory')->row();
            if (!$student || !password_verify($password, $student->student_password)) {
                $this->swalRedirect("Login Failed", "Incorrect Password.", "error", "student_login");
                return;
            }

            // ✅ Successful Login
            $this->session->set_userdata('activeStudent', $student->student_email);
            $this->swalRedirect("Login Success", "Welcome " . $student->student_fullname . "!", "success", "student_dashboard");
        }
    }

    // =================== Logout Student ===================
 public function student_logout()
{
    $this->session->unset_userdata('activeStudent');
    $this->session->sess_destroy();
    redirect(base_url('student_login'));
}


    // =================== Helper: SweetAlert + Redirect ===================
    private function swalRedirect($title, $text, $icon, $redirectPage)
    {
        echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                swal({
                    title: '$title',
                    text: '$text',
                    icon: '$icon'
                }).then(function(){ window.location.href = '" . base_url($redirectPage) . "'; });
            });
        </script>";
    }
}
?>