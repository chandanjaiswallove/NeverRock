<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Instructor_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // ✅ Instructor Login (Plain text password)
    public function loginINSTRUCTOR()
    {
        if (isset($_POST['instructorLOGIN'])) {

            // Load SweetAlert
            echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';

            // Collect form data
            $username = $this->input->post('loginUniqueID', true);
            $email = $this->input->post('loginEmail', true);
            $password = $this->input->post('loginPassword', true);

            // Check if instructor exists with matching UID & Email
            $this->db->where('instructor_uid', $username);
            $this->db->where('instructor_email', $email);
            $query = $this->db->get('instructor_directory');

            if ($query->num_rows() == 0) {
                echo '<script>
                setTimeout(function () {
                    swal("Login Failed", "Unique UID or Email not registered", "error")
                    .then(function() {
                        window.location.href = "' . base_url('instructor_login') . '";
                    });
                }, 100);
                </script>';
                return;
            }

            $instructor = $query->row();

            // ✅ Check plain-text password directly
            if ($password !== $instructor->instructor_password) {
                echo '<script>
                setTimeout(function () {
                    swal("Login Failed", "Incorrect Password", "error")
                    .then(function() {
                        window.location.href = "' . base_url('instructor_login') . '";
                    });
                }, 100);
                </script>';
                return;
            }

            // ✅ Successful Login — Set session with email
            $this->session->set_userdata('activeInstructor', $instructor->instructor_email);

            echo '<script>
            setTimeout(function () {
                swal("Login Success", "Welcome ' . $instructor->instructor_name . '!", "success")
                .then(function() {
                    window.location.href = "' . base_url('instructor_dashboard') . '";
                });
            }, 100);
            </script>';
        }
    }

    // ✅ Logout Instructor
    public function instructor_logout()
    {
        // Unset the instructor session
        $this->session->unset_userdata('activeInstructor');

        // Destroy full session (optional)
        $this->session->sess_destroy();

        // Redirect to login page
        redirect(base_url('instructor_login'));
    }
}
?>
