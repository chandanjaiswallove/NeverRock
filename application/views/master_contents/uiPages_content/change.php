<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // ✅ Admin Login
    public function adminAuth()
    {
        $adminUniqueID = $_POST['adminUID'];
        $adminEmail = $_POST['adminEMAIL'];
        $adminPassword = $_POST['adminPASSWORD'];

        $findFirstTimeUser = $this->db->query("SELECT * FROM admin_directory WHERE portal_uid = '$adminUniqueID' AND admin_email = '$adminEmail'");

        foreach ($findFirstTimeUser->result() as $row) {
            $passwordStatus = $row->password_update_status;
            $systemPassword = $row->system_generated_password;
            $portalCredentials = $row->portal_credentials;
        }

        if (isset($_POST['adminLOGIN'])) {
            if ($findFirstTimeUser->num_rows() > 0 and $passwordStatus = 'To be Updated' and $adminPassword == $systemPassword) {

                $_SESSION['acitveAdmin'] = $adminUniqueID;
                echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
                echo '<script>';
                echo 'document.addEventListener("DOMContentLoaded", function() {';
                echo '  swal({';
                echo '    title: "User Verified!",';
                echo '    text: "You have successfully registered the Admin to the Portal. Now admin can use their dashboard to manage their institution.",';
                echo '    icon: "success",';
                echo '  }).then(function() {';
                echo '    window.location.href = "' . base_url('set_new_password') . '";';
                echo '  });';
                echo '});';
                echo '</script>';

            } else if ($findFirstTimeUser->num_rows() > 0 and $passwordStatus = 'Updated By User' and $adminPassword == password_verify($adminPassword, $portalCredentials)) {
                $_SESSION['acitveAdmin'] = $adminUniqueID;
                echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
                echo '<script>';
                echo 'document.addEventListener("DOMContentLoaded", function() {';
                echo '  swal({';
                echo '    title: "User Verified!",';
                echo '    text: "You have successfully registered the Admin to the Portal. Now admin can use their dashboard to manage their institution.",';
                echo '    icon: "success",';
                echo '  }).then(function() {';
                echo '    window.location.href = "' . base_url('admin_dashboard') . '";';
                echo '  });';
                echo '});';
                echo '</script>';

                // echo "Logged in through Hashed Password";
            } else {
                echo "Wrong Credentials";
            }
        }
    }

    public function changeProfilePassword()
    {
        $portalPassword = $_POST['newPassword'];
        $cnfPassword = $_POST['cnfPassword'];

        $hashedPassword = password_hash($portalPassword, PASSWORD_DEFAULT);

        if (isset($_POST['updatePassword'])) {
            if ($cnfPassword === $portalPassword) {
                $this->db->query("UPDATE admin_directory SET password_update_status = 'Updated By User',portal_credentials = '$hashedPassword' WHERE portal_uid = '{$_SESSION['activeAdmin']}'");
                echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
                echo '<script>';
                echo 'document.addEventListener("DOMContentLoaded", function() {';
                echo '  swal({';
                echo '    title: "User Verified!",';
                echo '    text: "You have successfully registered the Admin to the Portal. Now admin can use their dashboard to manage their institution.",';
                echo '    icon: "success",';
                echo '  }).then(function() {';
                echo '    window.location.href = "' . base_url('logoutAdmin') . '";';
                echo '  });';
                echo '});';
                echo '</script>';
            } else {
                echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
                echo '<script>';
                echo 'document.addEventListener("DOMContentLoaded", function() {';
                echo '  swal({';
                echo '    title: "Password Update Failed!",';
                echo '    text: "Could not update the password, please try again.",';
                echo '    icon: "error",';
                echo '  }).then(function() {';
                echo '    window.location.href = "' . base_url('set_new_password') . '";';
                echo '  });';
                echo '});';
                echo '</script>';
            }
        }
    }

    //// Create an Instructor 
    public function registerInstructor()
    {
        if (isset($_POST['instructorData'])) {

            // Collect form data
            $fullName = $this->input->post('instructorName', true);
            $email = $this->input->post('instructorEmail', true);
            $contact = $this->input->post('instructorContact', true);
            $password = $this->input->post('instructorPassword', true);
            $uidPortal = $this->input->post('portalUID', true);

            // ✅ Check for duplicate email or phone
            $this->db->group_start();
            $this->db->where('instructor_email', $email);
            $this->db->or_where('instructor_phone', $contact);
            $this->db->group_end();
            $existing = $this->db->get('instructor_directory'); // ✅ correct table name

            if ($existing->num_rows() > 0) {
                echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
                echo '<script>
                    document.addEventListener("DOMContentLoaded", function() {
                        swal({
                            title: "Registration Failed",
                            text: "Email or Phone already registered.",
                            icon: "error"
                        }).then(function(){ 
                            window.location.href = "' . base_url('admin_createInstructors') . '"; 
                        });
                    });
                  </script>';
                return;
            }

            // ✅ Hash password
            // $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            // Prepare data array
            $instructorData = array(
                'instructor_name' => $fullName,
                'instructor_email' => $email,
                'instructor_phone' => $contact,
                'instructor_uid' => $uidPortal,
                'instructor_password' => $password,
            );

            // ✅ Insert into database
            $this->db->insert('instructor_directory', $instructorData);

            // Success alert
            echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
            echo '<script>
                document.addEventListener("DOMContentLoaded", function() {
                    swal({
                        title: "Registration Successful!",
                        text: "Instructor registered successfully.",
                        icon: "success"
                    }).then(function(){ 
                        window.location.href = "' . base_url('admin_dashboard') . '"; 
                    });
                });
              </script>';
        }
    }



    // ✅ Logout
    public function logoutAdmin()
    {
        session_unset();
        unset($_SESSION['activeAdmin']);
        session_destroy();
        redirect(base_url('admin_login'));

    }

}

?>



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

    //login student
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

     // ✅ Logout
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




