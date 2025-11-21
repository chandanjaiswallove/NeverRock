<!-- Instructor Dashboard Header section instructor_header  -->
<?php
$this->load->view('dashboard/master_contents/dInstructor_master/instructor_header');
?>


<!-- main body -->
<main class="bg-transparent">
    <!-- Instructor Dashboard  section instructor_banner  -->
    <?php
    $this->load->view('dashboard/master_contents/dInstructor_master/instructor_banner');
    ?>


    <section>
        <div class="container-fluid-2">
            <?php
            $fetchInstructor = $this->db->query("SELECT * FROM instructor_directory WHERE instructor_uid = '{$_SESSION['activeInstructor']}'");
            $instructor = $fetchInstructor->row();
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
                                        class="inline-block"><?php echo date("d, F Y h:i A", strtotime($instructor->registration_date)); ?></span>
                                </div>
                            </li>

                            <li
                                class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                                <div class="md:col-start-1 md:col-span-4">
                                    <span class="inline-block">Full Name</span>
                                </div>
                                <div class="md:col-start-5 md:col-span-8">
                                    <span class="inline-block"><?php echo $instructor->instructor_name; ?></span>
                                </div>
                            </li>

                            <li
                                class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                                <div class="md:col-start-1 md:col-span-4">
                                    <span class="inline-block">Nick Name</span>
                                </div>
                                <div class="md:col-start-5 md:col-span-8">
                                    <span class="inline-block"><?php echo $instructor->nick_name; ?></span>
                                </div>
                            </li>



                            <li
                                class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                                <div class="md:col-start-1 md:col-span-4">
                                    <span class="inline-block">Email</span>
                                </div>
                                <div class="md:col-start-5 md:col-span-8">
                                    <span class="inline-block"><?php echo $instructor->instructor_email; ?></span>
                                </div>
                            </li>

                            <li
                                class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                                <div class="md:col-start-1 md:col-span-4">
                                    <span class="inline-block">Phone Number</span>
                                </div>
                                <div class="md:col-start-5 md:col-span-8">
                                    <span class="inline-block"><?php echo $instructor->instructor_phone; ?></span>
                                </div>
                            </li>

                            <li
                                class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                                <div class="md:col-start-1 md:col-span-4">
                                    <span class="inline-block">Expert</span>
                                </div>
                                <div class="md:col-start-5 md:col-span-8">
                                    <span class="inline-block"><?php echo $instructor->expert_as; ?></span>
                                </div>
                            </li>

                            <li
                                class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                                <div class="md:col-start-1 md:col-span-4">
                                    <span class="inline-block">Social Links</span>
                                </div>
                                <div class="md:col-start-5 md:col-span-8">
                                    <ul class="flex gap-10px items-center">

                                        <?php if ($instructor->facebook_url): ?>
                                            <li>
                                                <a href="<?php echo $instructor->facebook_url; ?>"
                                                    class="w-35px h-35px leading-35px text-center border border-borderColor2 text-contentColor hover:text-whiteColor hover:bg-primaryColor dark:text-contentColor-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:border-borderColor2-dark rounded"><i
                                                        class="icofont-facebook"></i></a>
                                            </li>
                                        <?php endif; ?>

                                        <?php if ($instructor->youtube_url): ?>
                                            <li>
                                                <a href="<?php echo $instructor->youtube_url; ?>"
                                                    class="w-35px h-35px leading-35px text-center border border-borderColor2 text-contentColor hover:text-whiteColor hover:bg-primaryColor dark:text-contentColor-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:border-borderColor2-dark rounded"><i
                                                        class="icofont-youtube-play"></i></a>
                                            </li>
                                        <?php endif; ?>


                                        <?php if ($instructor->instagram_url): ?>
                                            <li>
                                                <a href="<?php echo $instructor->instagram_url; ?>"
                                                    class="w-35px h-35px leading-35px text-center border border-borderColor2 text-contentColor hover:text-whiteColor hover:bg-primaryColor dark:text-contentColor-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:border-borderColor2-dark rounded"><i
                                                        class="icofont-instagram"></i></a>
                                            </li>
                                        <?php endif; ?>

                                        <?php if ($instructor->linkdin_url): ?>
                                            <li>
                                                <a href="<?php echo $instructor->linkdin_url; ?>"
                                                    class="w-35px h-35px leading-35px text-center border border-borderColor2 text-contentColor hover:text-whiteColor hover:bg-primaryColor dark:text-contentColor-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:border-borderColor2-dark rounded"><i
                                                        class="icofont-linkedin"></i></a>
                                            </li>
                                        <?php endif; ?>

                                        <?php if ($instructor->website_url): ?>
                                            <li>
                                                <a href="<?php echo $instructor->website_url; ?>"
                                                    class="w-35px h-35px leading-35px text-center border border-borderColor2 text-contentColor hover:text-whiteColor hover:bg-primaryColor dark:text-contentColor-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:border-borderColor2-dark rounded"><i
                                                        class="icofont-globe"></i></a>
                                            </li>
                                        <?php endif; ?>

                                        <?php if ($instructor->github_url): ?>
                                            <li>
                                                <a href="<?php echo $instructor->github_url; ?>"
                                                    class="w-35px h-35px leading-35px text-center border border-borderColor2 text-contentColor hover:text-whiteColor hover:bg-primaryColor dark:text-contentColor-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:border-borderColor2-dark rounded"><i
                                                        class="icofont-github"></i></a>
                                            </li>
                                        <?php endif; ?>


                                        <?php if ($instructor->twitter_url): ?>
                                            <li>
                                                <a href="<?php echo $instructor->twitter_url; ?>" class="w-35px h-35px leading-35px text-center border border-borderColor2 text-contentColor 
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
                                    <span class="inline-block"><?php echo $instructor->biography_bio; ?></span>
                                </div>
                            </li>


                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </section>






</main>



<!-- Instructor Dashboard Footer section instructor_footer  -->
<?php
$this->load->view('dashboard/master_contents/dInstructor_master/instructor_footer');
?>