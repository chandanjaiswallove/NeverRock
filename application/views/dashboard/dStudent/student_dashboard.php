<?php

if (!$this->session->userdata('activeStudent')) {
    redirect(base_url('student_login'));
}
?>

<!-- Student Dashboard Header section student_header  -->
<?php
$this->load->view('dashboard/master_contents/dStudent_master/student_header');
?>


<!-- main body -->
<main class="bg-transparent">
<!-- Student Dashboard  section student_banner  -->
<?php
$this->load->view('dashboard/master_contents/dStudent_master/student_banner');
?>







</main>



<!-- Student Dashboard Footer section student_footer  -->
<?php
$this->load->view('dashboard/master_contents/dStudent_master/student_footer');
?>
