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


    <!-- course create  -->

    <section>
        <div class="container-fluid-2">
            <!-- setting area -->
            <div
                class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-standard">
                <!-- heading -->
                <div class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark" data-aos="fade-up">
                    <h2 class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                        Create Course
                    </h2>
                </div>

                <div class="tab">
                    <div class="tab-links flex flex-wrap mb-10px lg:mb-50px rounded gap-10px" data-aos="fade-up">
                        <button
                            class="is-checked relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300 whitespace-nowrap active">
                            ALL COURSES
                        </button>
                        <a href="<?php echo base_url('admin_course'); ?>" id="courseDetailsTab" class="is-checked relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base 
                                text-blackColor bg-whiteColor shadow-overview-button 
                                dark:bg-whiteColor-dark dark:text-blackColor-dark 
                                before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 
                                before:left-0 before:bg-primaryColor hover:before:w-full 
                                before:transition-all before:duration-300 whitespace-nowrap">
                            + ADD NEW
                        </a>
                    </div>
                    <div class="tab-contents">
                        <div class="transition-all duration-300" data-aos="fade-up">

                            <!-- course info data -->
                            <!-- course info data -->
                            <!-- course info data -->
                            <div class="container p-0  flex flex-wrap sm:-mx-15px" data-aos="fade-up">
                                <!-- card 1 -->
                                <?php
                                $fetchEnrolledCourse = $this->db->query("SELECT * FROM course_directory ORDER BY RAND() LIMIT 6");
                                foreach ($fetchEnrolledCourse->result() as $row) { ?>

                                    <div
                                        class="w-full md:w-1/2 lg:w-1/3  group grid-item <?php echo $row->course_category; ?>">
                                        <div class="tab-content-wrapper sm:px-15px mb-30px">
                                            <div
                                                class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark rounded-standard">
                                                <!-- card image -->
                                                <div class="relative mb-4">
                                                    <a href="<?php echo base_url('admin_courseView?id=' . $row->id); ?> "
                                                        class="w-full overflow-hidden rounded">
                                                        <img src="<?php echo base_url() . "modules/courseThumbnail/" . $row->course_thumbnail; ?>"
                                                            alt=""
                                                            class="w-full transition-all duration-300 group-hover:scale-110">
                                                    </a>
                                                    <div
                                                        class="absolute left-0 top-1 flex justify-between w-full items-center px-2">
                                                        <div>
                                                            <p
                                                                class="text-xs text-whiteColor px-4 py-[3px] bg-primaryColor rounded font-semibold capitalize  ">
                                                                <?php echo $row->course_type; ?>
                                                            </p>
                                                        </div>
                                                        <!-- 3 dots menu wrapper -->
                                                        <div class="relative group/nested">

                                                            <!-- three dots button -->
                                                            <button
                                                                class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor px-2 py-1">
                                                                <span class="text-xl font-bold leading-none">⋮</span>
                                                            </button>

                                                            <!-- dropdown menu (same style as your sidebar menu) -->
                                                            <div class="nested-dropdown absolute right-0 top-full z-50 hidden opacity-0 group-hover/nested:block group-hover/nested:opacity-100"
                                                                style="transition: 0.3s">
                                                                <div
                                                                    class="shadow-dropdown max-w-dropdown2 w-auto  py-14px rounded-standard bg-white dark:bg-whiteColor-dark">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="<?php echo base_url('admin_courseedit?id=' . $row->id); ?>"
                                                                                class="text-sm font-semibold text-black border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">
                                                                                Edit
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="<?php echo base_url('admin_courseedit?id=' . $row->id); ?>"
                                                                                class="text-sm font-semibold text-black border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">
                                                                                Delete
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="<?php echo base_url('admin_coursedetails'); ?>"
                                                                                class="text-sm font-semibold text-black border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">
                                                                                Mange Details
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                                <!-- card content -->
                                                <div>
                                                    <a href="<?php echo base_url('admin_courseView?id=' . $row->id); ?>"
                                                        class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                                                        <?php echo $row->course_name; ?>
                                                    </a>

                                                    <!-- STart and end date  -->
                                                    <div class="text-lg font-semibold text-primaryColor font-inter">
                                                        <span class="text-sm text-black dark:text-blackColor-dark"> <i
                                                                class="icofont-calendar  text-primaryColor text-lg"></i>
                                                            Start On
                                                            <?php echo date('d-m-y', strtotime($row->starting_date)); ?></span>
                                                        &nbsp;
                                                        <span class="text-sm text-black dark:text-blackColor-dark"> <i
                                                                class="icofont-clock-time text-primaryColor text-lg"></i>
                                                            Ends On
                                                            <?php echo date('d-m-y', strtotime($row->ending_date)); ?></span>

                                                    </div>

                                                    <!-- Online and offline medium  -->
                                                    <div
                                                        class="text-lg font-semibold text-primaryColor font-inter mb-3 capitalize ">
                                                        <span class="text-sm text-black dark:text-blackColor-dark"><i
                                                                class="icofont-badge pr-5px text-primaryColor text-lg"></i><?php echo $row->course_mode; ?></span>
                                                        &nbsp;
                                                        <span class="text-sm text-black dark:text-blackColor-dark">
                                                            <i
                                                                class="icofont-globe-alt pr-5px text-primaryColor text-lg"></i><?php echo $row->course_language; ?></span>

                                                    </div>

                                                    <!-- Price -->
                                                    <!-- Price -->
                                                    <div class="text-lg font-semibold text-primaryColor font-inter mb-4">
                                                        <?php if (strtolower($row->course_type) == 'paid') { ?>
                                                            <?php echo $this->config->item('indianRupee') . $row->course_selling_cost; ?>
                                                            <del class="text-sm text-lightGrey4 font-semibold">
                                                                /<?php echo $this->config->item('indianRupee') . $row->course_actual_cost; ?>
                                                            </del>
                                                            <span
                                                                class="ml-6 text-base font-semibold text-secondaryColor2 leading-27px px-2 bg-whitegrey1 dark:bg-whitegrey1-dark">
                                                                <?php echo $this->config->item('discountPercent') . $row->discount_applied; ?>%
                                                                OFF
                                                            </span>
                                                        <?php } else { ?>
                                                            <span
                                                                class="text-primaryColor dark:text-blackColor-dark font-semibold">Free
                                                                Course</span>
                                                        <?php } ?>
                                                    </div>

                                                    <!-- buttons  and buy and explore-->
                                                    <div class="grid grid-cols-1 md:grid-cols-2  text-center gap-2 ">
                                                        <a href="<?php echo base_url('admin_courseView?id=' . $row->id); ?>"
                                                            class="text-sm md:text-size-15 text-whiteColor bg-secondaryColor border border-secondaryColor px-10px py-10px hover:text-primaryColor hover:bg-whiteColor rounded inline-block mr-6px md:mr-30px dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor">
                                                            Explore
                                                        </a>
                                                        <a href="welcome"
                                                            class="text-sm md:text-size-15 text-whiteColor bg-primaryColor border border-primaryColor px-10px py-10px hover:text-primaryColor hover:bg-whiteColor rounded inline-block mr-6px md:mr-30px dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor">
                                                            <?php echo (strtolower($row->course_type) == 'paid') ? 'Buy Now' : 'Join Now'; ?>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>


                        </div>

                        <!-- CourseDetails coursedetials start here #212529 Second Description Tab Content -->
                        <!-- CourseDetails coursedetials start here #212529 Second Description Tab Content -->

                        <div class="hidden transition-all duration-300">
                            <!-- Curriculum Accordion -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





</main>


<!-- Admin Dashboard Footer section admin_footer  -->
<?php
$this->load->view('dashboard/master_contents/dAdmin_master/admin_footer');
?>