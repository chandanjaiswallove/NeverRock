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
            <div
                class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-standard">
                <!-- heading -->
                <div class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark aos-init aos-animate"
                    data-aos="fade-up">
                    <h2 class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                        Create Course
                    </h2>
                </div>



                <!-- course info data -->
                <!-- course info data -->
                <div class="container p-0 flex flex-wrap sm:-mx-15px aos-init aos-animate" data-aos="fade-up">
                    <!-- card 1 -->

                    <div class="w-full md:w-1/2 lg:w-1/3  group grid-item filter3">
                        <div class="tab-content-wrapper sm:px-15px mb-30px">
                            <div
                                class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark rounded-standard">
                                <!-- card image -->
                                <div class="relative mb-4">
                                    <a href="http://localhost/NeverRock/admin_courseView?course_uid=ZIVJJC "
                                        class="w-full overflow-hidden rounded">
                                        <img src="http://localhost/NeverRock/modules/courseThumbnail/6922639a08cc2_690b24b975b08_68ef521beca62_courseDetails.jpg"
                                            alt="" class="w-full transition-all duration-300 group-hover:scale-110">
                                    </a>
                                    <div class="absolute left-0 top-1 flex justify-between w-full items-center px-2">
                                        <div>
                                            <p
                                                class="text-xs text-whiteColor px-4 py-[3px] bg-primaryColor rounded font-semibold capitalize  ">
                                                paid </p>
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
                                                            <a href="http://localhost/NeverRock/admin_courseView?course_uid=ZIVJJC"
                                                                class="text-sm font-semibold text-black border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">
                                                                Details
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
                                    <a href="#"
                                        class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                                        बिहार बोर्ड 12वीं 2026 </a>

                                    <!-- STart and end date  -->
                                    <div class="text-lg font-semibold text-primaryColor font-inter">
                                        <span class="text-sm text-black dark:text-blackColor-dark"> <i
                                                class="icofont-calendar  text-primaryColor text-lg"></i>
                                            Start On
                                            29-11-25</span>
                                        &nbsp;
                                        <span class="text-sm text-black dark:text-blackColor-dark"> <i
                                                class="icofont-clock-time text-primaryColor text-lg"></i>
                                            Ends On
                                            17-01-26</span>

                                    </div>

                                    <!-- Online and offline medium  -->
                                    <div class="text-lg font-semibold text-primaryColor font-inter mb-3 capitalize ">
                                        <span class="text-sm text-black dark:text-blackColor-dark"><i
                                                class="icofont-badge pr-5px text-primaryColor text-lg"></i>online +
                                            offline</span>
                                        &nbsp;
                                        <span class="text-sm text-black dark:text-blackColor-dark">
                                            <i
                                                class="icofont-globe-alt pr-5px text-primaryColor text-lg"></i>hinglish</span>

                                    </div>

                                    <!-- Price -->
                                    <!-- Price -->
                                    <div class="text-lg font-semibold text-primaryColor font-inter mb-4">
                                        ₹99.90 <del class="text-sm text-lightGrey4 font-semibold">
                                            /₹999 </del>
                                        <span
                                            class="ml-6 text-base font-semibold text-secondaryColor2 leading-27px px-2 bg-whitegrey1 dark:bg-whitegrey1-dark">
                                            90%
                                            OFF
                                        </span>
                                    </div>

                                    <!-- buttons  and buy and explore-->
                                    <div class="grid grid-cols-1 md:grid-cols-2  text-center gap-2 ">
                                        <a href="#"
                                            class="text-sm md:text-size-15 text-whiteColor bg-secondaryColor border border-secondaryColor px-10px py-10px hover:text-primaryColor hover:bg-whiteColor rounded inline-block mr-6px md:mr-30px dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor">
                                            Explore
                                        </a>
                                        <a href="#"
                                            class="text-sm md:text-size-15 text-whiteColor bg-primaryColor border border-primaryColor px-10px py-10px hover:text-primaryColor hover:bg-whiteColor rounded inline-block mr-6px md:mr-30px dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor">
                                            Buy Now </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




</main>



<!-- Instructor Dashboard Footer section instructor_footer  -->
<?php
$this->load->view('dashboard/master_contents/dInstructor_master/instructor_footer');
?>