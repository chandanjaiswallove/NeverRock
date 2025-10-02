<?php
if (!isset($_SESSION['activeDeveloper'])) {
        redirect(base_url('developerLogout'));
}
?>

<!-- Developer Dashboard Header section developer_header  -->
<?php
$this->load->view('dashboard/master_contents/dDeveloper_master/developer_header');
?>


<!-- main body -->
<main class="bg-transparent">
<!-- Developer Dashboard  section developer_banner  -->
<?php
$this->load->view('dashboard/master_contents/dDeveloper_master/developer_banner');
?>







</main>



<!-- Developer Dashboard Footer section developer_footer  -->
<?php
$this->load->view('dashboard/master_contents/dDeveloper_master/developer_footer');
?>
