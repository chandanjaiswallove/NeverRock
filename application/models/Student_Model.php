<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student_Model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    // Register student
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

            // Password match check
            if ($password !== $confirmPass) {
                echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
                echo '<script>
                        document.addEventListener("DOMContentLoaded", function() {
                            swal({
                                title: "Password Mismatch!",
                                text: "Password and Confirm Password do not match.",
                                icon: "error"
                            }).then(function(){ window.location.href = "' . base_url('student_signup') . '"; });
                        });
                      </script>';
                return;
            }

            // Check for duplicate email or phone
            $this->db->where('student_email', $email);
            $this->db->or_where('student_phone', $phone);
            $existing = $this->db->get('student_directory');

            if ($existing->num_rows() > 0) {
                echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
                echo '<script>
                        document.addEventListener("DOMContentLoaded", function() {
                            swal({
                                title: "Registration Failed",
                                text: "Email or Phone already registered.",
                                icon: "error"
                            }).then(function(){ window.location.href = "' . base_url('student_login') . '"; });
                        });
                      </script>';
                return;
            }

            // Hash password
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);



            // Prepare data array
            $studentData = array(
                'student_fullname' => $fullName,
                'student_email' => $email,
                'student_phone' => $phone,
                'student_password' => $hashedPassword,
                'student_username' => $username,
                'student_state' => $state,
            );

            // Insert into database
            $this->db->insert('student_directory', $studentData);

            // Success alert
            echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
            echo '<script>
                    document.addEventListener("DOMContentLoaded", function() {
                        swal({
                            title: "Registration Successful!",
                            text: "Student registered successfully. You can now login.",
                            icon: "success"
                        }).then(function(){ window.location.href = "' . base_url('student_login') . '"; });
                    });
                  </script>';

        }
    }

    public function loginStudent()
    {
        if (isset($_POST['studentLOGIN'])) {

            // Load SweetAlert
            echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';

            // Collect form data
            $username = $this->input->post('stUsername', true);
            $email = $this->input->post('loginEmail', true);
            $password = $this->input->post('loginPassword', true);

            // Check username + email in DB
            $this->db->where('student_username', $username);
            $this->db->where('student_email', $email);
            $query = $this->db->get('student_directory');

            if ($query->num_rows() == 0) {
                echo '<script>
            setTimeout(function () {
                swal("Login Failed", "Username or Email not registered", "error")
                .then(function() {
                    window.location.href = "' . base_url('student_login') . '";
                });
            }, 100);
            </script>';
                return;
            }

            $student = $query->row();

            // Verify password
            if (!password_verify($password, $student->student_password)) {
                echo '<script>
            setTimeout(function () {
                swal("Login Failed", "Incorrect Password", "error")
                .then(function() {
                    window.location.href = "' . base_url('student_login') . '";
                });
            }, 100);
            </script>';
                return;
            }

            // ✅ Successful Login — Set session with email only
            $this->session->set_userdata('activeStudent', $student->student_email);

            echo '<script>
        setTimeout(function () {
            swal("Login Success", "Welcome ' . $student->student_fullname . '!", "success")
            .then(function() {
                window.location.href = "' . base_url('student_dashboard') . '";
            });
        }, 100);
        </script>';
        }
    }


    public function student_logout()
    {
        // Unset the activeStudent session
        $this->session->unset_userdata('activeStudent');

        // Destroy entire session (optional)
        $this->session->sess_destroy();

        // Redirect to login page
        redirect(base_url('student_login'));

    }

}

?>