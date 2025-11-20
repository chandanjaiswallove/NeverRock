<!-- Admin Dashboard Header section admin_header  -->
<?php
$this->load->view('dashboard/master_contents/dAdmin_master/admin_header');
?>


<!-- main body -->
<main class="bg-transparent">
    <!-- Admin Dashboard  section admin_banner  -->
    <?php
    $this->load->view('dashboard/master_contents/dAdmin_master/admin_banner');
    ?>

    <section>
        <div class="container-fluid-2">
            <?php
            $fetchAdmin = $this->db->query("SELECT * FROM admin_directory WHERE portal_uid = '{$_SESSION['activeAdmin']}'");
            $admin = $fetchAdmin->row();
            ?>

            <!-- Profile area -->
            <div
                class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-standard">
                <div class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark" data-aos="fade-up">
                    <h2 class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                        My Profile
                    </h2>
                </div>

                <div data-aos="fade-up">
                    <form action="">
                        <ul>
                            <li
                                class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px">
                                <div class="md:col-start-1 md:col-span-4">
                                    <span class="inline-block">Registration Date</span>
                                </div>
                                <div class="md:col-start-5 md:col-span-8">
                                    <span
                                        class="inline-block"><?php echo date("d, F Y h:i A", strtotime($admin->registration_date)); ?></span>
                                </div>
                            </li>

                            <li
                                class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                                <div class="md:col-start-1 md:col-span-4">
                                    <span class="inline-block">Full Name</span>
                                </div>
                                <div class="md:col-start-5 md:col-span-8">
                                    <span class="inline-block"><?php echo $admin->director_name; ?></span>
                                </div>
                            </li>

                            <li
                                class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                                <div class="md:col-start-1 md:col-span-4">
                                    <span class="inline-block">Nick Name</span>
                                </div>
                                <div class="md:col-start-5 md:col-span-8">
                                    <span class="inline-block"><?php echo $admin->nick_name; ?></span>
                                </div>
                            </li>



                            <li
                                class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                                <div class="md:col-start-1 md:col-span-4">
                                    <span class="inline-block">Email</span>
                                </div>
                                <div class="md:col-start-5 md:col-span-8">
                                    <span class="inline-block"><?php echo $admin->admin_email; ?></span>
                                </div>
                            </li>

                            <li
                                class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                                <div class="md:col-start-1 md:col-span-4">
                                    <span class="inline-block">Phone Number</span>
                                </div>
                                <div class="md:col-start-5 md:col-span-8">
                                    <span class="inline-block"><?php echo $admin->organisation_contact; ?></span>
                                </div>
                            </li>

                            <li
                                class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                                <div class="md:col-start-1 md:col-span-4">
                                    <span class="inline-block">Expert</span>
                                </div>
                                <div class="md:col-start-5 md:col-span-8">
                                    <span class="inline-block"><?php echo $admin->expert_as; ?></span>
                                </div>
                            </li>

                            <li
                                class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                                <div class="md:col-start-1 md:col-span-4">
                                    <span class="inline-block">Social Links</span>
                                </div>
                                <div class="md:col-start-5 md:col-span-8">
                                    <ul class="flex gap-10px items-center">

                                        <?php if ($admin->facebook_url): ?>
                                            <li>
                                                <a href="<?php echo $admin->facebook_url; ?>"
                                                    class="w-35px h-35px leading-35px text-center border border-borderColor2 text-contentColor hover:text-whiteColor hover:bg-primaryColor dark:text-contentColor-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:border-borderColor2-dark rounded"><i
                                                        class="icofont-facebook"></i></a>
                                            </li>
                                        <?php endif; ?>

                                        <?php if ($admin->youtube_url): ?>
                                            <li>
                                                <a href="<?php echo $admin->youtube_url; ?>"
                                                    class="w-35px h-35px leading-35px text-center border border-borderColor2 text-contentColor hover:text-whiteColor hover:bg-primaryColor dark:text-contentColor-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:border-borderColor2-dark rounded"><i
                                                        class="icofont-youtube-play"></i></a>
                                            </li>
                                        <?php endif; ?>


                                        <?php if ($admin->instagram_url): ?>
                                            <li>
                                                <a href="<?php echo $admin->instagram_url; ?>"
                                                    class="w-35px h-35px leading-35px text-center border border-borderColor2 text-contentColor hover:text-whiteColor hover:bg-primaryColor dark:text-contentColor-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:border-borderColor2-dark rounded"><i
                                                        class="icofont-instagram"></i></a>
                                            </li>
                                        <?php endif; ?>

                                        <?php if ($admin->admin_linkdin_url): ?>
                                            <li>
                                                <a href="<?php echo $admin->admin_linkdin_url; ?>"
                                                    class="w-35px h-35px leading-35px text-center border border-borderColor2 text-contentColor hover:text-whiteColor hover:bg-primaryColor dark:text-contentColor-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:border-borderColor2-dark rounded"><i
                                                        class="icofont-linkedin"></i></a>
                                            </li>
                                        <?php endif; ?>

                                        <?php if ($admin->admin_website_url): ?>
                                            <li>
                                                <a href="<?php echo $admin->admin_website_url; ?>"
                                                    class="w-35px h-35px leading-35px text-center border border-borderColor2 text-contentColor hover:text-whiteColor hover:bg-primaryColor dark:text-contentColor-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:border-borderColor2-dark rounded"><i
                                                        class="icofont-globe"></i></a>
                                            </li>
                                        <?php endif; ?>

                                        <?php if ($admin->admin_github_url): ?>
                                            <li>
                                                <a href="<?php echo $admin->admin_github_url; ?>"
                                                    class="w-35px h-35px leading-35px text-center border border-borderColor2 text-contentColor hover:text-whiteColor hover:bg-primaryColor dark:text-contentColor-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:border-borderColor2-dark rounded"><i
                                                        class="icofont-github"></i></a>
                                            </li>
                                        <?php endif; ?>


                                        <?php if ($admin->twitter_url): ?>
                                            <li>
                                                <a href="<?php echo $admin->twitter_url; ?>" class="w-35px h-35px leading-35px text-center border border-borderColor2 text-contentColor 
                                            hover:text-whiteColor hover:bg-primaryColor dark:text-contentColor-dark 
                                            dark:hover:text-whiteColor dark:hover:bg-primaryColor 
                                            dark:border-borderColor2-dark rounded">

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="currentColor" class="inline-block">
                                                        <path
                                                            d="M18 2H21L13 11L22 22H15L9.5 15.5L4 22H1L9 12L1 2H8L13.5 8.5L18 2Z" />
                                                    </svg>
                                                </a>
                                            </li>
                                        <?php endif; ?>


                                    </ul>
                                </div>
                            </li>

                            <li
                                class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                                <div class="md:col-start-1 md:col-span-4">
                                    <span class="inline-block">Biography</span>
                                </div>
                                <div class="md:col-start-5 md:col-span-8">
                                    <span class="inline-block"><?php echo $admin->admin_biography; ?></span>
                                </div>
                            </li>


                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </section>






</main>



<!-- Admin Dashboard Footer section admin_footer  -->
<?php
$this->load->view('dashboard/master_contents/dAdmin_master/admin_footer');
?>