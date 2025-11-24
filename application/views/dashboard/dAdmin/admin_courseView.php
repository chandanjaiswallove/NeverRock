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

    <?php
    // $fetchID = $_GET['id']; // card से आने वाली course id
    // $fetchCourse = $this->db->query("SELECT * FROM course_directory WHERE id = ?", [$fetchID]);
    // foreach ($fetchCourse->result() as $row)
    // ?>

    <!-- course create  -->
    <input type="hidden" name="course_uid" value="<?php echo $course_uid; ?>">

    <section>
        <div class="container-fluid-2">
            <!-- setting area -->
            <div
                class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-standard">
                <!-- heading -->
                <!-- <div class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark" data-aos="fade-up">
                    <h2 class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                        Create Course
                    </h2>
                </div> -->

                <div class="tab">
                    <div class="tab-links flex flex-wrap mb-10px lg:mb-50px rounded gap-10px" data-aos="fade-up">
                        <button
                            class="is-checked relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300 whitespace-nowrap active">
                            COURSE DETAILS
                        </button>
                        <!-- wrapper relative for positioning dropdown -->
                        <div class="relative inline-block group">

                            <!-- EDIT button with icon -->
                            <a href="javascript:void(0);" class="is-checked relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base 
              text-blackColor bg-whiteColor shadow-overview-button 
              dark:bg-whiteColor-dark dark:text-blackColor-dark 
              before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 
              before:left-0 before:bg-primaryColor hover:before:w-full 
              before:transition-all before:duration-300 whitespace-nowrap inline-flex items-center gap-2">
                                Manage
                            </a>

                            <!-- dropdown menu (hidden by default, show on hover) -->
                            <div
                                class="absolute right-0 top-full z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible
                transition-all duration-300 mt-2 w-auto py-14px rounded-standard bg-white dark:bg-whiteColor-dark shadow-dropdown">
                                <ul>
                                    <li>
                                        <a href="<?php echo base_url('admin_coursedetails?course_uid=' . $row->course_unique_id); ?>"
                                            class="text-sm font-semibold text-black border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">
                                            Edit Details
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="text-sm font-semibold text-black border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-red-500 dark:text-contentColor-dark dark:hover:text-red-500 dark:hover:bg-whitegrey1-dark">
                                            Delete
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="tab-contents">
                        <div class="transition-all duration-300" data-aos="fade-up">

                            <div class="container py-10 md:py-50px lg:py-60px 2xl:py-100px">
                                <div class="grid grid-cols-1 lg:grid-cols-12 gap-30px">
                                    <div class="lg:col-start-1 lg:col-span-8 space-y-[35px]">
                                        <!-- course 1 -->
                                        <div data-aos="fade-up" class="aos-init aos-animate">
                                            <!-- course thumbnail -->
                                            <div class="overflow-hidden relative mb-5">
                                                <img src="<?php echo base_url() . "modules/courseThumbnail/" . $row->course_thumbnail; ?>"
                                                    alt="Course_thumbnail" class="w-full">
                                            </div>




                                            <!-- course content -->
                                            <div>

                                                <!-- titile -->
                                                <h4 class="text-size-32 md:text-4xl font-bold text-blackColor dark:text-blackColor-dark mb-15px leading-43px md:leading-14.5 aos-init aos-animate"
                                                    data-aos="fade-up">
                                                    <?php echo $row->course_name; ?>
                                                </h4>
                                                <!-- price and rating -->
                                                <div class="flex gap-5 flex-wrap items-center mb-30px aos-init aos-animate"
                                                    data-aos="fade-up">
                                                    <div
                                                        class="text-size-21 font-bold text-primaryColor font-inter leading-25px">
                                                        <?php if (strtolower($row->course_type) == 'paid') { ?>
                                                            <?php echo $this->config->item('indianRupee') . $row->course_selling_cost; ?>
                                                            <del class="text-sm text-lightGrey4 font-semibold">/
                                                                <?php echo $this->config->item('indianRupee') . $row->course_actual_cost; ?></del>
                                                        <?php } else { ?>
                                                            <span
                                                                class="text-primaryColor dark:text-blackColor-dark font-semibold">Free
                                                                Course</span>
                                                        <?php } ?>
                                                    </div>

                                                    <div class="flex items-center">
                                                        <div>
                                                            <i
                                                                class="icofont-book-alt pr-5px text-primaryColor text-lg"></i>
                                                        </div>
                                                        <div>
                                                            <span class="text-sm text-black dark:text-blackColor-dark">7
                                                                Subject</span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <p class="text-sm md:text-lg text-contentColor dark:contentColor-dark mb-25px !leading-30px aos-init aos-animate"
                                                    data-aos="fade-up">
                                                    <?php echo $row->course_description; ?>
                                                </p>

                                                <div data-aos="fade-up"
                                                    class="tab course-details-tab aos-init aos-animate">
                                                    <div
                                                        class="tab-links flex flex-wrap md:flex-nowrap mb-30px rounded gap-0.5">
                                                        <button
                                                            class="is-checked relative p-10px md:px-25px md:py-15px lg:py-3 2xl:py-15px 2xl:px-45px text-blackColor bg-whiteColor hover:bg-primaryColor hover:text-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark dark:hover:bg-primaryColor dark:hover:text-whiteColor flex items-center active">
                                                            <i class="icofont-book-alt mr-2"></i> Curriculum
                                                        </button>
                                                        <button
                                                            class="is-checked relative p-10px md:px-25px md:py-15px lg:py-3 2xl:py-15px 2xl:px-45px text-blackColor bg-whiteColor hover:bg-primaryColor hover:text-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark dark:hover:bg-primaryColor dark:hover:text-whiteColor flex items-center">
                                                            <i class="icofont-paper mr-2"></i> Description
                                                        </button>

                                                        <button
                                                            class="is-checked relative p-10px md:px-25px md:py-15px lg:py-3 2xl:py-15px 2xl:px-45px text-blackColor bg-whiteColor hover:bg-primaryColor hover:text-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark dark:hover:bg-primaryColor dark:hover:text-whiteColor flex items-center">
                                                            <i class="icofont-star mr-2"></i> Faq </button>

                                                        <button
                                                            class="is-checked relative p-10px md:px-25px md:py-15px lg:py-3 2xl:py-15px 2xl:px-45px text-blackColor bg-whiteColor hover:bg-primaryColor hover:text-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark dark:hover:bg-primaryColor dark:hover:text-whiteColor flex items-center">
                                                            <i class="icofont-teacher mr-2"></i> Instructor
                                                        </button>
                                                    </div>



                                                    <div class="tab-contents">
                                                        <!-- curriculum -->
                                                        <div>
                                                            <ul class="accordion-container curriculum">
                                                                <!-- accordion -->
                                                                <li class="accordion mb-25px overflow-hidden active">
                                                                    <div
                                                                        class="bg-whiteColor border border-borderColor dark:bg-whiteColor-dark dark:border-borderColor-dark rounded-t-md">
                                                                        <!-- controller -->
                                                                        <div>
                                                                            <div
                                                                                class="cursor-pointer accordion-controller flex justify-between items-center text-xl text-headingColor font-bold w-full px-5 py-18px dark:text-headingColor-dark font-hind leading-[20px]">
                                                                                <div class="flex items-center">
                                                                                    <span>Intro Course
                                                                                        content</span>
                                                                                    <p
                                                                                        class="text-xs text-headingColor dark:text-headingColor-dark px-10px py-0.5 ml-10px bg-borderColor dark:bg-borderColor-dark rounded-full">
                                                                                        02hr 35min
                                                                                    </p>
                                                                                </div>
                                                                                <svg class="transition-all duration-500 rotate-0"
                                                                                    width="20"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 16 16" fill="#212529">
                                                                                    <path fill-rule="evenodd"
                                                                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                                                                    </path>
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                        <!-- content -->
                                                                        <div class="accordion-content transition-all duration-500"
                                                                            style="height: 127px;">
                                                                            <div
                                                                                class="content-wrapper p-10px md:px-30px">
                                                                                <ul>
                                                                                    <li
                                                                                        class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark">
                                                                                        <div>
                                                                                            <h4
                                                                                                class="text-blackColor dark:text-blackColor-dark leading-1 font-light">
                                                                                                <i
                                                                                                    class="icofont-video-alt mr-10px"></i>
                                                                                                <span
                                                                                                    class="font-medium">
                                                                                                    Video :
                                                                                                </span>
                                                                                                Lorem ipsum dolor
                                                                                                sit amet.
                                                                                            </h4>
                                                                                        </div>
                                                                                        <div
                                                                                            class="text-blackColor dark:text-blackColor-dark text-sm flex items-center">
                                                                                            <p>
                                                                                                <i
                                                                                                    class="icofont-clock-time"></i>
                                                                                                22
                                                                                                minutes
                                                                                            </p>
                                                                                            <a href="lesson.html"
                                                                                                class="bg-primaryColor text-whiteColor text-sm ml-5 rounded py-0.5">
                                                                                                <p class="px-10px">
                                                                                                    <i
                                                                                                        class="icofont-eye"></i>
                                                                                                    Preview
                                                                                                </p>
                                                                                            </a>
                                                                                        </div>
                                                                                    </li>


                                                                                    <li
                                                                                        class="py-15px flex items-center justify-between flex-wrap">
                                                                                        <div>
                                                                                            <h4
                                                                                                class="text-blackColor dark:text-blackColor-dark leading-1 font-light">
                                                                                                <i
                                                                                                    class="icofont-file-text mr-10px"></i>
                                                                                                <span
                                                                                                    class="font-medium">
                                                                                                    Lesson 03 Exam :
                                                                                                </span>
                                                                                            </h4>
                                                                                        </div>
                                                                                        <div
                                                                                            class="text-blackColor dark:text-blackColor-dark text-sm">
                                                                                            <p>
                                                                                                <i class="icofont-lock">
                                                                                                </i> 20 Ques
                                                                                            </p>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>

                                                                <!-- accordion -->
                                                                <li class="accordion mb-25px overflow-hidden">
                                                                    <div
                                                                        class="bg-whiteColor border border-borderColor dark:bg-whiteColor-dark dark:border-borderColor-dark">
                                                                        <!-- controller -->
                                                                        <div>
                                                                            <div
                                                                                class="cursor-pointer accordion-controller flex justify-between items-center text-xl text-headingColor font-bold w-full px-5 py-18px dark:text-headingColor-dark font-hind leading-[20px]">
                                                                                <div class="flex items-center">
                                                                                    <span>Course Fundamentals</span>
                                                                                    <p
                                                                                        class="text-xs text-headingColor dark:text-headingColor-dark px-10px py-0.5 ml-10px bg-borderColor dark:bg-borderColor-dark rounded-full">
                                                                                        1hr 35min
                                                                                    </p>
                                                                                </div>
                                                                                <svg class="transition-all duration-500 rotate-0"
                                                                                    width="20"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 16 16" fill="#212529">
                                                                                    <path fill-rule="evenodd"
                                                                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                                                                    </path>
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                        <!-- content -->
                                                                        <div
                                                                            class="accordion-content transition-all duration-500 h-0">
                                                                            <div
                                                                                class="content-wrapper p-10px md:px-30px">
                                                                                <ul>
                                                                                    <li
                                                                                        class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark">
                                                                                        <div>
                                                                                            <h4
                                                                                                class="text-blackColor dark:text-blackColor-dark leading-1 font-light">
                                                                                                <i
                                                                                                    class="icofont-video-alt mr-10px"></i>
                                                                                                <span
                                                                                                    class="font-medium">
                                                                                                    Video :
                                                                                                </span>
                                                                                                Lorem ipsum dolor
                                                                                                sit amet.
                                                                                            </h4>
                                                                                        </div>
                                                                                        <div
                                                                                            class="text-contentColor dark:text-contentColor-dark text-sm">
                                                                                            <p>
                                                                                                <i
                                                                                                    class="icofont-lock"></i>
                                                                                            </p>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li
                                                                                        class="py-15px flex items-center justify-between flex-wrap">
                                                                                        <div>
                                                                                            <h4
                                                                                                class="text-blackColor dark:text-blackColor-dark leading-1 font-light">
                                                                                                <i
                                                                                                    class="icofont-file-text mr-10px"></i>
                                                                                                <span
                                                                                                    class="font-medium">
                                                                                                    Lesson 03 Exam :
                                                                                                </span>
                                                                                            </h4>
                                                                                        </div>
                                                                                        <div
                                                                                            class="text-blackColor dark:text-blackColor-dark text-sm">
                                                                                            <p>
                                                                                                <i class="icofont-lock">
                                                                                                </i> 20 Ques
                                                                                            </p>
                                                                                        </div>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>


                                                            </ul>
                                                        </div>


                                                        <!-- description -->
                                                        <div class="hidden">

                                                            <!-- Headings Section -->
                                                            <?php if (!empty($headings)): ?>
                                                                <?php foreach ($headings as $heading): ?>
                                                                    <h4 class="text-size-26 font-bold text-blackColor dark:text-blackColor-dark mb-15px !leading-14 aos-init aos-animate"
                                                                        data-aos="fade-up">
                                                                        <?php echo $heading->dimpHeading; ?>
                                                                    </h4>
                                                                    <p class="text-lg text-darkdeep4 mb-5 !leading-30px aos-init aos-animate"
                                                                        data-aos="fade-up">
                                                                        <?php echo $heading->dimpDescription; ?>
                                                                    </p>
                                                                <?php endforeach; ?>
                                                            <?php endif; ?>

                                                            <!-- Single Important Topic Heading -->
                                                            <?php if (!empty($topics)): ?>
                                                                <div class="md:col-start-5 md:col-span-8 mb-8">
                                                                    <h4 class="text-2xl font-bold text-blackColor dark:text-blackColor-dark mb-15px !leading-38px aos-init aos-animate"
                                                                        data-aos="fade-up">
                                                                        <?php echo $topics[0]->importantTopic; // single topic name ?>
                                                                    </h4>

                                                                    <!-- Multiple Important Keys -->
                                                                    <ul class="space-y-[15px] max-w-127">
                                                                        <?php foreach ($topics as $topic): ?>
                                                                            <li class="flex items-center group aos-init aos-animate"
                                                                                data-aos="fade-up">
                                                                                <i
                                                                                    class="icofont-check px-2 py-2 text-primaryColor bg-whitegrey3 bg-opacity-40 group-hover:bg-primaryColor group-hover:text-white group-hover:opacity-100 mr-15px dark:bg-whitegrey1-dark"></i>
                                                                                <p
                                                                                    class="text-sm lg:text-xs 2xl:text-sm font-medium leading-25px lg:leading-21px 2xl:leading-25px text-contentColor dark:text-contentColor-dark">
                                                                                    <?php echo $topic->importantKey; ?>
                                                                                </p>
                                                                            </li>
                                                                        <?php endforeach; ?>
                                                                    </ul>
                                                                </div>
                                                            <?php else: ?>
                                                                <div class="md:col-start-5 md:col-span-8">
                                                                    <h4>Data Coming Soon !</h4>
                                                                </div>
                                                            <?php endif; ?>

                                                        </div>


                                                        <!-- Faqus Questions -->
                                                        <div class="hidden">
                                                            <ul class="accordion-container curriculum">
                                                                <?php if (!empty($faqs)): ?>
                                                                    <?php foreach ($faqs as $faq): ?>
                                                                        <li class="accordion mb-25px overflow-hidden">
                                                                            <div
                                                                                class="bg-whiteColor border border-borderColor dark:bg-whiteColor-dark dark:border-borderColor-dark rounded-t-md">
                                                                                <div>
                                                                                    <div
                                                                                        class="cursor-pointer accordion-controller flex justify-between items-center text-xl text-headingColor font-bold w-full px-5 py-18px dark:text-headingColor-dark font-hind leading-[20px]">
                                                                                        <div class="flex items-center">
                                                                                            <span><?php echo $faq->faq_Question; ?></span>
                                                                                        </div>
                                                                                        <svg class="transition-all duration-500 rotate-0"
                                                                                            width="20"
                                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                                            viewBox="0 0 16 16" fill="#212529">
                                                                                            <path fill-rule="evenodd"
                                                                                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                                                                            </path>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="accordion-content transition-all duration-500 h-0">
                                                                                    <div
                                                                                        class="content-wrapper p-10px md:px-30px">
                                                                                        <ul>
                                                                                            <li
                                                                                                class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark">
                                                                                                <div>
                                                                                                    <h4
                                                                                                        class="text-blackColor dark:text-blackColor-dark leading-1 font-light">
                                                                                                        <span
                                                                                                            class="font-medium"><?php echo $faq->faq_Answer; ?></span>
                                                                                                    </h4>
                                                                                                </div>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    <?php endforeach; ?>
                                                                <?php else: ?>
                                                                    <li>No FAQs found.</li>
                                                                <?php endif; ?>
                                                            </ul>
                                                        </div>




                                                        <!-- Instructor  -->
                                                        <div class="hidden">
                                                            <div class="shadow-event p-5 md:p-30px lg:p-5 2xl:p-30px mb-30px flex flex-col md:flex-row shadow-autor aos-init aos-animate"
                                                                data-aos="fade-up">
                                                                <!-- athor avatar -->
                                                                <div class="flex mb-30px mr-5 flex-shrink-0">
                                                                    <img src="modules/assets/images/blog/blog_10.png"
                                                                        alt="" class="w-24 h-24 rounded-full">
                                                                </div>
                                                                <div>
                                                                    <!-- author name -->
                                                                    <div class="mb-3">
                                                                        <h3 class="mb-7px">
                                                                            <a href="instructor-details.html"
                                                                                class="text-xl font-bold text-blackColor2 dark:text-blackColor2-dark hover:text-primaryColor dark:hover:text-primaryColor">Rosalina
                                                                                D. Willaim</a>
                                                                        </h3>
                                                                        <p
                                                                            class="text-xs text-contentColor2 dark:text-contentColor2-dark">
                                                                            Blogger/Photographer
                                                                        </p>
                                                                    </div>
                                                                    <!-- description -->
                                                                    <p
                                                                        class="text-sm text-contentColor dark:text-contentColor-dark mb-15px leading-26px">
                                                                        Lorem Ipsum is simply dummy text of the
                                                                        printing
                                                                        and typesetting industry. Lorem Ipsum has
                                                                        been the
                                                                        industry's standard dummy text ever since
                                                                        the
                                                                        1500s, when an unknown printer took a galley
                                                                    </p>
                                                                    <!-- social -->
                                                                    <div>
                                                                        <ul class="flex gap-10px items-center">
                                                                            <li>
                                                                                <a href="https://www.facebook.com/chandanjaiswalloves/following"
                                                                                    class="w-35px h-35px leading-35px text-center border border-borderColor2 text-contentColor hover:text-whiteColor hover:bg-primaryColor dark:text-contentColor-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:border-borderColor2-dark rounded"><i
                                                                                        class="icofont-facebook"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="https://www.facebook.com/chandanjaiswalloves/following"
                                                                                    class="w-35px h-35px leading-35px text-center border border-borderColor2 text-contentColor hover:text-whiteColor hover:bg-primaryColor dark:text-contentColor-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:border-borderColor2-dark rounded"><i
                                                                                        class="icofont-youtube-play"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="https://www.facebook.com/chandanjaiswalloves/following"
                                                                                    class="w-35px h-35px leading-35px text-center border border-borderColor2 text-contentColor hover:text-whiteColor hover:bg-primaryColor dark:text-contentColor-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:border-borderColor2-dark rounded"><i
                                                                                        class="icofont-instagram"></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="https://www.facebook.com/chandanjaiswalloves/following"
                                                                                    class="w-35px h-35px leading-35px text-center border border-borderColor2 text-contentColor hover:text-whiteColor hover:bg-primaryColor dark:text-contentColor-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:border-borderColor2-dark rounded"><i
                                                                                        class="icofont-twitter"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- course sidebar -->
                                    <div class="lg:col-start-9 lg:col-span-4">
                                        <div class="flex flex-col">
                                            <!-- enroll section -->
                                            <div class="py-33px px-25px shadow-event mb-30px bg-whiteColor dark:bg-whiteColor-dark rounded-md"
                                                data-aos="fade-up">
                                                <!-- meeting thumbnail -->
                                                <div class="overflow-hidden relative mb-5">
                                                    <?php
                                                    $video = $row->course_video_content;
                                                    $thumb = $row->course_thumbnail;

                                                    if (!empty($video)) {

                                                        // ✅ YouTube Link Check
                                                        if (strpos($video, 'youtube.com') !== false || strpos($video, 'youtu.be') !== false) {

                                                            // Extract YouTube video ID
                                                            $youtube_id = '';
                                                            if (strpos($video, 'youtube.com') !== false) {
                                                                parse_str(parse_url($video, PHP_URL_QUERY), $params);
                                                                $youtube_id = $params['v'] ?? '';
                                                            } elseif (strpos($video, 'youtu.be') !== false) {
                                                                $youtube_id = basename(parse_url($video, PHP_URL_PATH));
                                                            }

                                                            // ✅ YouTube iframe autoplay muted, no-download
                                                            if (!empty($youtube_id)) {
                                                                ?>
                                                                <iframe width="100%" height="400"
                                                                    src="https://www.youtube.com/embed/<?php echo $youtube_id; ?>?autoplay=1&mute=1&controls=1&rel=0&showinfo=0&modestbranding=1&loop=1&playlist=<?php echo $youtube_id; ?>"
                                                                    frameborder="0" allow="autoplay; encrypted-media"
                                                                    allowfullscreen class="rounded-md w-full"
                                                                    style="pointer-events:auto;">
                                                                </iframe>
                                                                <?php
                                                            } else {
                                                                // fallback to thumbnail if invalid YouTube link
                                                                ?>
                                                                <img src="<?php echo base_url('modules/courseThumbnail/' . $thumb); ?>"
                                                                    alt="Course Thumbnail" class="w-full rounded-md">
                                                                <?php
                                                            }

                                                        } else {
                                                            // ✅ Local / Direct Video Check
                                                            $videoPath = FCPATH . "modules/courseVideo/" . $video;
                                                            $videoSrc = (file_exists($videoPath))
                                                                ? base_url("modules/courseVideo/" . $video)
                                                                : $video;

                                                            ?>
                                                            <!-- disables right-click download  -->
                                                            <video controls autoplay muted playsinline preload="metadata"
                                                                oncontextmenu="return false;"
                                                                controlsList="nodownload noremoteplayback"
                                                                class="w-full rounded-md">
                                                                <source src="<?php echo $videoSrc; ?>" type="video/mp4">
                                                                Your browser does not support the video tag.
                                                            </video>
                                                            <?php
                                                        }

                                                    } else {
                                                        // ✅ No Video → Show Thumbnail
                                                        ?>
                                                        <img src="<?php echo base_url('modules/courseThumbnail/' . $thumb); ?>"
                                                            alt="Course Thumbnail" class="w-full rounded-md">
                                                    <?php } ?>
                                                </div>



                                                <div class="flex justify-between mb-5">
                                                    <?php if (strtolower($row->course_type) == 'paid') { ?>
                                                        <div
                                                            class="text-size-21 font-bold text-primaryColor font-inter leading-25px">
                                                            <?php echo $this->config->item('indianRupee') . $row->course_selling_cost; ?>
                                                            <del class="text-sm text-lightGrey4 font-semibold">/
                                                                <?php echo $this->config->item('indianRupee') . $row->course_actual_cost; ?></del>
                                                        </div>
                                                        <div>
                                                            <a href="course-details.html#"
                                                                class="uppercase text-sm font-semibold text-secondaryColor2 leading-27px px-2 bg-whitegrey1 dark:bg-whitegrey1-dark">
                                                                <?php echo $this->config->item('discountPercent') . $row->discount_applied; ?>%
                                                                OFF
                                                            </a>
                                                        </div>
                                                    <?php } else { ?>
                                                        <span
                                                            class="text-primaryColor dark:text-blackColor-dark font-semibold">Free
                                                            Course</span>
                                                    <?php } ?>
                                                </div>

                                                <div class="mb-5" data-aos="fade-up">
                                                    <button type="submit"
                                                        class="w-full text-size-15 text-whiteColor bg-primaryColor px-25px py-10px border mb-10px leading-1.8 border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark">
                                                        Add To Cart
                                                    </button>
                                                    <button type="submit"
                                                        class="w-full text-size-15 text-whiteColor bg-secondaryColor px-25px py-10px mb-10px leading-1.8 border border-secondaryColor hover:text-secondaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-secondaryColor dark:hover:bg-whiteColor-dark">
                                                        Buy Now
                                                    </button>

                                                </div>
                                                <ul>

                                                    <li
                                                        class="flex items-center justify-between py-10px border-b border-borderColor dark:border-borderColor-dark">
                                                        <p
                                                            class="text-sm font-medium text-contentColor dark:text-contentColor-dark leading-1.8">
                                                            Start Date
                                                        </p>
                                                        <p
                                                            class="text-xs text-contentColor dark:text-contentColor-dark px-10px py-6px bg-borderColor dark:bg-borderColor-dark rounded-full leading-13px">
                                                            <?php echo date('d-m-y', strtotime($row->starting_date)); ?>
                                                        </p>
                                                    </li>

                                                    <li
                                                        class="flex items-center justify-between py-10px border-b border-borderColor dark:border-borderColor-dark">
                                                        <p
                                                            class="text-sm font-medium text-contentColor dark:text-contentColor-dark leading-1.8">
                                                            End On
                                                        </p>
                                                        <p
                                                            class="text-xs text-contentColor dark:text-contentColor-dark px-10px py-6px bg-borderColor dark:bg-borderColor-dark rounded-full leading-13px capitalize">
                                                            <?php echo date('d-m-y', strtotime($row->ending_date)); ?>
                                                        </p>
                                                    </li>


                                                    <li
                                                        class="flex items-center justify-between py-10px border-b border-borderColor dark:border-borderColor-dark">
                                                        <p
                                                            class="text-sm font-medium text-contentColor dark:text-contentColor-dark leading-1.8">
                                                            Course Type
                                                        </p>
                                                        <p
                                                            class="text-xs text-contentColor dark:text-contentColor-dark px-10px py-6px bg-borderColor dark:bg-borderColor-dark rounded-full leading-13px capitalize ">
                                                            <?php echo $row->course_mode; ?>
                                                        </p>
                                                    </li>


                                                    <li
                                                        class="flex items-center justify-between py-10px border-b border-borderColor dark:border-borderColor-dark">
                                                        <p
                                                            class="text-sm font-medium text-contentColor dark:text-contentColor-dark leading-1.8">
                                                            Language
                                                        </p>
                                                        <p
                                                            class="text-xs text-contentColor dark:text-contentColor-dark px-10px py-6px bg-borderColor dark:bg-borderColor-dark rounded-full leading-13px capitalize">
                                                            <?php echo $row->course_language; ?>
                                                        </p>
                                                    </li>
                                                    <ul>
                                                        <?php if (!empty($features)): ?>
                                                            <?php foreach ($features as $feature): ?>
                                                                <li
                                                                    class="flex items-center justify-between py-10px border-b border-borderColor dark:border-borderColor-dark">
                                                                    <!-- Feature Name -->
                                                                    <p
                                                                        class="text-sm font-medium text-contentColor dark:text-contentColor-dark leading-1.8">
                                                                        <?php echo $feature->feature_heading; ?>
                                                                    </p>

                                                                    <!-- Feature Value -->
                                                                    <p
                                                                        class="text-xs text-contentColor dark:text-contentColor-dark px-10px py-6px bg-borderColor dark:bg-borderColor-dark rounded-full leading-13px capitalize">
                                                                        <?php echo $feature->feature_value; ?>
                                                                    </p>
                                                                </li>
                                                            <?php endforeach; ?>
                                                        <?php else: ?>
                                                            <li>No features found for this course.</li>
                                                        <?php endif; ?>
                                                    </ul>




                                                </ul>
                                                <div class="mt-5" data-aos="fade-up">
                                                    <p
                                                        class="text-sm text-contentColor dark:text-contentColor-dark leading-1.8 text-center mb-5px">
                                                        More inquery about course
                                                    </p>
                                                    <button type="submit"
                                                        class="w-full text-xl text-primaryColor bg-whiteColor px-25px py-10px mb-10px font-bold leading-1.8 border border-primaryColor hover:text-whiteColor hover:bg-primaryColor inline-block rounded group dark:bg-whiteColor-dark dark:text-whiteColor dark:hover:bg-primaryColor">
                                                        <i class="icofont-phone"></i>
                                                        <?php echo $row->enquiry_number; ?>
                                                    </button>
                                                </div>
                                            </div>


                                            <!-- social area -->
                                            <div class="p-5 md:p-30px lg:p-5 2xl:p-30px mb-30px border border-borderColor2 dark:border-borderColor2-dark"
                                                data-aos="fade-up">
                                                <h4
                                                    class="text-size-22 text-blackColor dark:text-blackColor-dark font-bold pl-2 before:w-0.5 relative before:h-[21px] before:bg-primaryColor before:absolute before:bottom-[5px] before:left-0 leading-30px mb-25px">
                                                    Follow Us
                                                </h4>
                                                <div>
                                                    <ul class="flex gap-4 items-center">
                                                        <li>
                                                            <a href="course-details.html#"
                                                                class="w-38px h-38px leading-38px text-center text-blackColor2 bg-whitegrey2 hover:text-whiteColor hover:bg-primaryColor dark:bg-whitegrey2-dark dark:text-blackColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor rounded"><i
                                                                    class="icofont-facebook"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="course-details.html#"
                                                                class="w-38px h-38px leading-38px text-center text-blackColor2 bg-whitegrey2 hover:text-whiteColor hover:bg-primaryColor dark:bg-whitegrey2-dark dark:text-blackColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor rounded"><i
                                                                    class="icofont-youtube-play"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="https://www.facebook.com/chandanjaiswalloves/following"
                                                                class="w-38px h-38px leading-38px text-center text-blackColor2 bg-whitegrey2 hover:text-whiteColor hover:bg-primaryColor dark:bg-whitegrey2-dark dark:text-blackColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor rounded"><i
                                                                    class="icofont-instagram"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="https://www.facebook.com/chandanjaiswalloves/following"
                                                                class="w-38px h-38px leading-38px text-center text-blackColor2 bg-whitegrey2 hover:text-whiteColor hover:bg-primaryColor dark:bg-whitegrey2-dark dark:text-blackColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor rounded"><i
                                                                    class="icofont-twitter"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="https://www.facebook.com/chandanjaiswalloves/following"
                                                                class="w-38px h-38px leading-38px text-center text-blackColor2 bg-whitegrey2 hover:text-whiteColor hover:bg-primaryColor dark:bg-whitegrey2-dark dark:text-blackColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor rounded"><i
                                                                    class="icofont-instagram"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
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


<!-- Admin Dashboard Footer section admin_footer  -->
<?php
$this->load->view('dashboard/master_contents/dAdmin_master/admin_footer');
?>