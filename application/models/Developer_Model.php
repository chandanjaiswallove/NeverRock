<?php
defined('BASEPATH') or exit('not direct script access allowed');

class Developer_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //     public function developerAuth() {
    //     $devEmailID   = $_POST['loginEmail'];
    //     $devPassword  = $_POST['loginPassword'];
    //     $devUniqueId  = $_POST['developerUniqueId'];

    //     $developerUId = array('Dev1234','ROOT');
    //     $developerEmail = array('developer@gmail.com');
    //     $developerPassword = array('Devasdf','Admin1234#@');

    //     if(isset($_POST['developerLogin']))
    //     {
    //       if(in_array($devEmailID, $developerEmail) && in_array($devUniqueId , $developerUId) && in_array($devPassword, $developerPassword))
    //       {
    //         $_SESSION['activeDeveloper'] = $devEmailID;
    //         echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
    //         echo '<script type="text/javascript">
    //             setTimeout(function () {
    //                 swal("WOW!", "Login Verified!", "success")
    //                 .then(function() {
    //                     window.location.href = "'.base_url('developer_dashboard').'"; 
    //                 });
    //             }, 100);
    //         </script>';
    //         // redirect(base_url('developer_dashboard'));
    //       }
    //       else
    //       {
    //         echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
    //         echo '<script type="text/javascript">
    //             setTimeout(function () {
    //                 swal("WOW!", "Login Failed", "error")
    //                 .then(function() {
    //                     window.location.href = "'.base_url('deve_loper').'"; 
    //                 });
    //             }, 100);
    //         </script>';
    //       }
    //     }
    // }



    public function developerAuth()
    {
        $devEmailID = $_POST['loginEmail'];
        $devPassword = $_POST['loginPassword'];
        $devUniqueId = $_POST['developerUniqueId'];

        $developerUId = array('DEV2025', 'ADMIN2025');
        $developerEmail = array('developer@gmail.com');
        $developerPassword = array('Admin1234#@', 'Developer1234#@');

        if (isset($_POST['developerLogin'])) {
            // Load SweetAlert
            echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';

            // Validation
            if (!in_array($devEmailID, $developerEmail)) {
                echo '<script>
                setTimeout(function () {
                    swal("Login Failed", "Invalid Email", "error")
                    .then(function() {
                        window.location.href = "' . base_url('deve_loper') . '";
                    });
                }, 100);
            </script>';
                return;
            }

            if (!in_array($devUniqueId, $developerUId)) {
                echo '<script>
                setTimeout(function () {
                    swal("Login Failed", "Invalid Unique ID", "error")
                    .then(function() {
                        window.location.href = "' . base_url('deve_loper') . '";
                    });
                }, 100);
            </script>';
                return;
            }

            if (!in_array($devPassword, $developerPassword)) {
                echo '<script>
                setTimeout(function () {
                    swal("Login Failed", "Invalid Password", "error")
                    .then(function() {
                        window.location.href = "' . base_url('deve_loper') . '";
                    });
                }, 100);
            </script>';
                return;
            }

            // ✅ All Good — Successful Login
            $_SESSION['activeDeveloper'] = $devEmailID;

            echo '<script>
            setTimeout(function () {
                swal("Login Success", "Welcome Developer!", "success")
                .then(function() {
                    window.location.href = "' . base_url('developer_dashboard') . '";
                });
            }, 100);
        </script>';
        }
    }

    //// Register Institute ////
    public function registerInstitute()
    {
        $instituteName = $_POST['instituteName'];
        $adminName = $_POST['adminName'];
        $adminEmail = $_POST['adminEmail'];
        $adminContact = $_POST['adminContact'];
        $portalUID = $_POST['portalUID'];
        $portalPassword = $_POST['systemPassword'];
        $dummyData = 'To be Updated';
        $emailOTP = strtoupper(random_string('alnum', 6));
        $mobileOTP = random_string('numeric', 6);

        $adminAvatar = array('avatar1.png', 'avatar2.png', 'avatar3.png', 'avatar4.png', 'avatar5.png');

        $completeAvatarAddress = base_url() . "modules/avatar/" . $adminAvatar[array_rand($adminAvatar, 1)];

        $matchExistingData = $this->db->query("SELECT * FROM admin_directory WHERE admin_email = '$adminEmail' AND admin_whatsapp_number = '$adminContact'");

        if (isset($_POST['registerAdmin'])) {
            if ($matchExistingData->num_rows() > 0) {
                echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
                echo '<script>';
                echo 'document.addEventListener("DOMContentLoaded", function() {';
                echo '  swal({';
                echo '    title: "Registration Failed",';
                echo '    text: "Duplicate Data Found. To avoid data redundancy, we avoid registering same data twice.",';
                echo '    icon: "error",';
                echo '  }).then(function() {';
                echo '    window.location.href = "' . base_url('developer_createInstitue') . '";';
                echo '  });';
                echo '});';
                echo '</script>';
            } else {
                $instituteData = array(
                    'institute_name' => $instituteName,
                    'director_name' => $adminName,
                    'admin_email' => $adminEmail,
                    'email_otp' => $emailOTP,
                    'email_otp_verification' => 'Pending',
                    'admin_whatsapp_number' => $adminContact,
                    'whatsapp_otp' => $mobileOTP,
                    'whatsapp_verification_status' => 'Pending',
                    'admin_avatar' => $completeAvatarAddress,
                    'organisation_logo' => $completeAvatarAddress,
                    'organisation_address' => $dummyData,
                    'organisation_contact' => $dummyData,
                    'organisation_email' => $dummyData,
                    'portal_uid' => $portalUID,
                    'facebook_url' => 'https://www.facebook.com/',
                    'twitter_url' => 'https://x.com/',
                    'instagram_url' => 'https://www.instagram.com/',
                    'youtube_url' => 'https://www.youtube.com/',
                    'organisation_foundation_year' => $dummyData,
                    'about_us' => $dummyData,
                    'our_mission' => $dummyData,
                    'our_vision' => $dummyData,
                    'principal_message' => $dummyData,
                    'director_message' => $dummyData,
                    'google_map_embeded' => $dummyData,
                    'onboarding_date' => $dummyData,
                    'total_tenure' => $dummyData,
                    'expiry_date' => $dummyData,
                    'subscription_amount' => $dummyData,
                    'payment_method' => $dummyData,
                    'dues_if_any' => $dummyData,
                    'profile_completion_percent' => $dummyData,
                    'system_generated_password' => $portalPassword,
                    'password_update_status' => $dummyData,
                    'portal_credentials' => $dummyData,
                    'profile_active_status' => 'Active'
                );
                $this->db->insert('admin_directory', $instituteData);
                echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
                echo '<script>';
                echo 'document.addEventListener("DOMContentLoaded", function() {';
                echo '  swal({';
                echo '    title: "Admin Registered!",';
                echo '    text: "You have successfully registered the Admin to the Portal. Now admin can use their dashboard to manage their institution.",';
                echo '    icon: "success",';
                echo '  }).then(function() {';
                echo '    window.location.href = "' . base_url('developer_dashboard') . '";';
                echo '  });';
                echo '});';
                echo '</script>';
            }
        }
    }


    // ✅ Logout
    public function logoutUser()
    {
        session_unset();
        unset($_SESSION['activeDeveloper']);
        session_destroy();
        // redirect(base_url('deve_loper'));

        echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
        echo '<script>
        setTimeout(function () {
            swal("Logged Out", "You have successfully logged out.", "success")
            .then(function() {
                window.location.href = "' . base_url('deve_loper') . '";
            });
        }, 100);
    </script>';

    }


}

?>