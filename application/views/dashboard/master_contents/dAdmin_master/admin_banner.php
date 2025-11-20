<!-- Developer dashboard Banner section -->
<section>
    <div class="container-fluid-2 py-5">
        <?php
        $fetchAdmin = $this->db->query("SELECT * FROM admin_directory WHERE portal_uid = '{$_SESSION['activeAdmin']}'");
        $admin = $fetchAdmin->row();
        ?>
        <div
            class="bg-naveBlue p-5 md:p-10 rounded-standard flex justify-center md:justify-between items-center flex-wrap gap-2">
            <div class="flex items-center flex-wrap justify-center sm:justify-start">

                <?php
                $adminPhotoPath = 'modules/adminProfilePhoto/' . $admin->admin_photo;
                // अगर database में profile image नहीं है या file missing है
                if (empty($admin->admin_photo) || !file_exists(FCPATH . $adminPhotoPath)) {
                    // default avatar show करो
                    $finalImage = 'modules/avatar/default.png';
                } else {
                    // database वाली photo show करो
                    $finalImage = $adminPhotoPath;
                }
                ?>

                <div class="mr-5">
                    <img src="<?php echo base_url($finalImage); ?>" alt="Admin Photo"
                        class="w-27 h-27 md:w-22 md:h-22 lg:w-27 lg:h-27 rounded-full p-1 border-2 border-darkdeep7 box-content">
                </div>


                <div class="text-whiteColor font-bold text-center sm:text-start">
                    <h5 class="text-xl leading-1.2 mb-5px text-secondaryColor ">Welcome </h5>
                    <h2 class="text-2xl leading-1.24"><?php echo $admin->director_name; ?></h2>

                </div>





            </div>

            <div>
                <a href="<?php echo base_url('admin_createInstructors'); ?>"
                    class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor rounded group text-nowrap flex gap-1 items-center">
                    Enroll New Instructor
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-arrow-right">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>


        </div>
    </div>
</section>

<!-- Developer dashboard Banner section -->