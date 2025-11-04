<!-- Header section uiHeader  -->
<?php
$this->load->view('master_contents/uiPages_content/uiHeader');
?>

<main class="">
    <?php
    $fetchID = $_GET['id'];
    $fetchCourse = $this->db->query("SELECT * FROM course_directory WHERE id = '$fetchID'");
    foreach ($fetchCourse->result() as $row) { ?>

        <!--course details section -->
        <section>
            <div class="container py-10 md:py-50px lg:py-60px 2xl:py-100px">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-30px">
                    <div class="lg:col-start-1 lg:col-span-8 space-y-[35px]">
                        <!-- course 1 -->
                        <div data-aos="fade-up">
                            <!-- course thumbnail -->
                            <div class="overflow-hidden relative mb-5">
                                <img src="<?php echo base_url() . "modules/courseThumbnail/" . $row->course_thumbnail; ?>"
                                    alt="" class="w-full">
                            </div>
                            <!-- course content -->
                            <div>

                                <!-- titile -->
                                <h4 class="text-size-32 md:text-4xl font-bold text-blackColor dark:text-blackColor-dark mb-15px leading-43px md:leading-14.5"
                                    data-aos="fade-up">
                                    <?php echo $row->course_name; ?>
                                </h4>
                                <!-- price and rating -->
                                <div class="flex gap-5 flex-wrap items-center mb-30px" data-aos="fade-up">
                                    <div class="text-size-21 font-bold text-primaryColor font-inter leading-25px">
                                        <?php echo $this->config->item('indianRupee') . $row->course_selling_cost; ?>
                                        <del class="text-sm text-lightGrey4 font-semibold">/
                                            <?php echo $this->config->item('indianRupee') . $row->course_actual_cost; ?></del>
                                    </div>
                                    <div class="flex items-center">
                                        <div>
                                            <i class="icofont-book-alt pr-5px text-primaryColor text-lg"></i>
                                        </div>
                                        <div>
                                            <span class="text-sm text-black dark:text-blackColor-dark">7 Subject</span>
                                        </div>
                                    </div>

                                </div>
                                <p class="text-sm md:text-lg text-contentColor dark:contentColor-dark mb-25px !leading-30px"
                                    data-aos="fade-up">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Curabitur vulputate vestibulum rhoncus, dolor eget viverra
                                    pretium, dolor tellus aliquet nunc, vitae ultricies erat
                                    elit eu lacus. Vestibulum non justo consectetur, cursus
                                    ante, tincidunt sapien. Nulla quis diam sit amet turpis
                                    interd enim. Vivamus faucibus ex sed nibh egestas elementum.
                                    Mauris et bibendum dui. Aenean consequat pulvinar luctus.
                                    Suspendisse consectetur tristique
                                </p>

                                <div data-aos="fade-up" class="tab course-details-tab">
                                    <div class="tab-links flex flex-wrap md:flex-nowrap mb-30px rounded gap-0.5">
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
                                        </button>
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
                                                                    <span>Intro Course content</span>
                                                                    <p
                                                                        class="text-xs text-headingColor dark:text-headingColor-dark px-10px py-0.5 ml-10px bg-borderColor dark:bg-borderColor-dark rounded-full">
                                                                        02hr 35min
                                                                    </p>
                                                                </div>
                                                                <svg class="transition-all duration-500 rotate-0" width="20"
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                                    fill="#212529">
                                                                    <path fill-rule="evenodd"
                                                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <!-- content -->
                                                        <div class="accordion-content transition-all duration-500">
                                                            <div class="content-wrapper p-10px md:px-30px">
                                                                <ul>
                                                                    <li
                                                                        class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark">
                                                                        <div>
                                                                            <h4
                                                                                class="text-blackColor dark:text-blackColor-dark leading-1 font-light">
                                                                                <i class="icofont-video-alt mr-10px"></i>
                                                                                <span class="font-medium">
                                                                                    Video :
                                                                                </span>
                                                                                Lorem ipsum dolor sit amet.
                                                                            </h4>
                                                                        </div>
                                                                        <div
                                                                            class="text-blackColor dark:text-blackColor-dark text-sm flex items-center">
                                                                            <p>
                                                                                <i class="icofont-clock-time"></i> 22
                                                                                minutes
                                                                            </p>
                                                                            <a href="lesson.html"
                                                                                class="bg-primaryColor text-whiteColor text-sm ml-5 rounded py-0.5">
                                                                                <p class="px-10px">
                                                                                    <i class="icofont-eye"></i> Preview
                                                                                </p>
                                                                            </a>
                                                                        </div>
                                                                    </li>
                                                                    <li
                                                                        class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark">
                                                                        <div>
                                                                            <h4
                                                                                class="text-blackColor dark:text-blackColor-dark leading-1 font-light">
                                                                                <i class="icofont-video-alt mr-10px"></i>
                                                                                <span class="font-medium">
                                                                                    Video :
                                                                                </span>
                                                                                Lorem ipsum dolor sit amet.
                                                                            </h4>
                                                                        </div>
                                                                        <div
                                                                            class="text-blackColor dark:text-blackColor-dark text-sm flex items-center">
                                                                            <p>
                                                                                <i class="icofont-clock-time"></i> 22
                                                                                minutes
                                                                            </p>
                                                                            <a href="lesson.html"
                                                                                class="bg-primaryColor text-whiteColor text-sm ml-5 rounded py-0.5">
                                                                                <p class="px-10px">
                                                                                    <i class="icofont-eye"></i> Preview
                                                                                </p>
                                                                            </a>
                                                                        </div>
                                                                    </li>
                                                                    <li
                                                                        class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark">
                                                                        <div>
                                                                            <h4
                                                                                class="text-blackColor dark:text-blackColor-dark leading-1 font-light">
                                                                                <i class="icofont-video-alt mr-10px"></i>
                                                                                <span class="font-medium">
                                                                                    Video :
                                                                                </span>
                                                                                Lorem ipsum dolor sit amet.
                                                                            </h4>
                                                                        </div>
                                                                        <div
                                                                            class="text-contentColor dark:text-contentColor-dark text-sm">
                                                                            <p>
                                                                                <i class="icofont-lock"></i>
                                                                            </p>
                                                                        </div>
                                                                    </li>
                                                                    <li
                                                                        class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark">
                                                                        <div>
                                                                            <h4
                                                                                class="text-blackColor dark:text-blackColor-dark leading-1 font-light">
                                                                                <i class="icofont-video-alt mr-10px"></i>
                                                                                <span class="font-medium">
                                                                                    Video :
                                                                                </span>
                                                                                Lorem ipsum dolor sit amet.
                                                                            </h4>
                                                                        </div>
                                                                        <div
                                                                            class="text-contentColor dark:text-contentColor-dark text-sm">
                                                                            <p>
                                                                                <i class="icofont-lock"></i>
                                                                            </p>
                                                                        </div>
                                                                    </li>
                                                                    <li
                                                                        class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark">
                                                                        <div>
                                                                            <h4
                                                                                class="text-blackColor dark:text-blackColor-dark leading-1 font-light">
                                                                                <i class="icofont-video-alt mr-10px"></i>
                                                                                <span class="font-medium">
                                                                                    Video :
                                                                                </span>
                                                                                Lorem ipsum dolor sit amet.
                                                                            </h4>
                                                                        </div>
                                                                        <div
                                                                            class="text-contentColor dark:text-contentColor-dark text-sm">
                                                                            <p>
                                                                                <i class="icofont-lock"></i>
                                                                            </p>
                                                                        </div>
                                                                    </li>
                                                                    <li
                                                                        class="py-15px flex items-center justify-between flex-wrap">
                                                                        <div>
                                                                            <h4
                                                                                class="text-blackColor dark:text-blackColor-dark leading-1 font-light">
                                                                                <i class="icofont-file-text mr-10px"></i>
                                                                                <span class="font-medium">
                                                                                    Lesson 03 Exam :
                                                                                </span>
                                                                            </h4>
                                                                        </div>
                                                                        <div
                                                                            class="text-blackColor dark:text-blackColor-dark text-sm">
                                                                            <p>
                                                                                <i class="icofont-lock"> </i> 20 Ques
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
                                                                <svg class="transition-all duration-500 rotate-0" width="20"
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                                    fill="#212529">
                                                                    <path fill-rule="evenodd"
                                                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <!-- content -->
                                                        <div class="accordion-content transition-all duration-500 h-0">
                                                            <div class="content-wrapper p-10px md:px-30px">
                                                                <ul>
                                                                    <li
                                                                        class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark">
                                                                        <div>
                                                                            <h4
                                                                                class="text-blackColor dark:text-blackColor-dark leading-1 font-light">
                                                                                <i class="icofont-video-alt mr-10px"></i>
                                                                                <span class="font-medium">
                                                                                    Video :
                                                                                </span>
                                                                                Lorem ipsum dolor sit amet.
                                                                            </h4>
                                                                        </div>
                                                                        <div
                                                                            class="text-contentColor dark:text-contentColor-dark text-sm">
                                                                            <p>
                                                                                <i class="icofont-lock"></i>
                                                                            </p>
                                                                        </div>
                                                                    </li>
                                                                    <li
                                                                        class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark">
                                                                        <div>
                                                                            <h4
                                                                                class="text-blackColor dark:text-blackColor-dark leading-1 font-light">
                                                                                <i class="icofont-video-alt mr-10px"></i>
                                                                                <span class="font-medium">
                                                                                    Video :
                                                                                </span>
                                                                                Lorem ipsum dolor sit amet.
                                                                            </h4>
                                                                        </div>
                                                                        <div
                                                                            class="text-contentColor dark:text-contentColor-dark text-sm">
                                                                            <p>
                                                                                <i class="icofont-lock"></i>
                                                                            </p>
                                                                        </div>
                                                                    </li>
                                                                    <li
                                                                        class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark">
                                                                        <div>
                                                                            <h4
                                                                                class="text-blackColor dark:text-blackColor-dark leading-1 font-light">
                                                                                <i class="icofont-video-alt mr-10px"></i>
                                                                                <span class="font-medium">
                                                                                    Video :
                                                                                </span>
                                                                                Lorem ipsum dolor sit amet.
                                                                            </h4>
                                                                        </div>
                                                                        <div
                                                                            class="text-contentColor dark:text-contentColor-dark text-sm">
                                                                            <p>
                                                                                <i class="icofont-lock"></i>
                                                                            </p>
                                                                        </div>
                                                                    </li>
                                                                    <li
                                                                        class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark">
                                                                        <div>
                                                                            <h4
                                                                                class="text-blackColor dark:text-blackColor-dark leading-1 font-light">
                                                                                <i class="icofont-video-alt mr-10px"></i>
                                                                                <span class="font-medium">
                                                                                    Video :
                                                                                </span>
                                                                                Lorem ipsum dolor sit amet.
                                                                            </h4>
                                                                        </div>
                                                                        <div
                                                                            class="text-contentColor dark:text-contentColor-dark text-sm">
                                                                            <p>
                                                                                <i class="icofont-lock"></i>
                                                                            </p>
                                                                        </div>
                                                                    </li>
                                                                    <li
                                                                        class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark">
                                                                        <div>
                                                                            <h4
                                                                                class="text-blackColor dark:text-blackColor-dark leading-1 font-light">
                                                                                <i class="icofont-video-alt mr-10px"></i>
                                                                                <span class="font-medium">
                                                                                    Video :
                                                                                </span>
                                                                                Lorem ipsum dolor sit amet.
                                                                            </h4>
                                                                        </div>
                                                                        <div
                                                                            class="text-contentColor dark:text-contentColor-dark text-sm">
                                                                            <p>
                                                                                <i class="icofont-lock"></i>
                                                                            </p>
                                                                        </div>
                                                                    </li>
                                                                    <li
                                                                        class="py-15px flex items-center justify-between flex-wrap">
                                                                        <div>
                                                                            <h4
                                                                                class="text-blackColor dark:text-blackColor-dark leading-1 font-light">
                                                                                <i class="icofont-file-text mr-10px"></i>
                                                                                <span class="font-medium">
                                                                                    Lesson 03 Exam :
                                                                                </span>
                                                                            </h4>
                                                                        </div>
                                                                        <div
                                                                            class="text-blackColor dark:text-blackColor-dark text-sm">
                                                                            <p>
                                                                                <i class="icofont-lock"> </i> 20 Ques
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
                                            <h4 class="text-size-26 font-bold text-blackColor dark:text-blackColor-dark mb-15px !leading-14"
                                                data-aos="fade-up">
                                                Experience is over the world visit
                                            </h4>
                                            <p class="text-lg text-darkdeep4 mb-5 !leading-30px" data-aos="fade-up">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Curabitur vulputate vestibulum Phasellus
                                                rhoncus, dolor eget viverra pretium, dolor tellus
                                                aliquet nunc, vitae ultricies erat elit eu lacus.
                                                Vestibulum non justo consectetur, cursus ante,
                                                tincidunt sapien. Nulla quis diam sit amet turpis
                                                interdum accumsan quis nec enim. Vivamus faucibus ex
                                                sed nibh egestas elementum. Mauris et bibendum dui.
                                                Aenean consequat pulvinar luctus
                                            </p>
                                            <p class="text-lg text-darkdeep4 mb-5 !leading-30px" data-aos="fade-up">
                                                We have covered many special events such as fireworks,
                                                fairs, parades, races, walks, awards ceremonies,
                                                fashion shows, sporting events, and even a memorial
                                                service.
                                            </p>
                                            <p class="text-lg text-darkdeep4 mb-5 !leading-30px" data-aos="fade-up">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Curabitur vulputate vestibulum Phasellus
                                                rhoncus, dolor eget viverra pretium, dolor tellus
                                                aliquet nunc, vitae ultricies erat elit eu lacus.
                                                Vestibulum non justo consectetur, cursus ante,
                                                tincidunt sapien. Nulla quis diam sit amet turpis
                                                interdum accumsan quis nec enim. Vivamus faucibus ex
                                                sed nibh egestas elementum. Mauris et bibendum dui.
                                                Aenean consequat pulvinar luctus.
                                            </p>








                                            <div class="md:col-start-5 md:col-span-8">
                                                <h4 class="text-2xl font-bold text-blackColor dark:text-blackColor-dark mb-15px !leading-38px"
                                                    data-aos="fade-up">
                                                    Why search Is Important ?
                                                </h4>
                                                <ul class="space-y-[15px] max-w-127">

                                                    <li class="flex items-center group" data-aos="fade-up">
                                                        <i
                                                            class="icofont-check px-2 py-2 text-primaryColor bg-whitegrey3 bg-opacity-40 group-hover:bg-primaryColor group-hover:text-white group-hover:opacity-100 mr-15px dark:bg-whitegrey1-dark"></i>
                                                        <p
                                                            class="text-sm lg:text-xs 2xl:text-sm font-medium leading-25px lg:leading-21px 2xl:leading-25px text-contentColor dark:text-contentColor-dark">
                                                            Lorem Ipsum is simply dummying text of the printing
                                                            andtypesetting industry most of the standard.
                                                        </p>
                                                    </li>
                                                    <li class="flex items-center group" data-aos="fade-up">
                                                        <i
                                                            class="icofont-check px-2 py-2 text-primaryColor bg-whitegrey3 bg-opacity-40 group-hover:bg-primaryColor group-hover:text-white group-hover:opacity-100 mr-15px dark:bg-whitegrey1-dark"></i>
                                                        <p
                                                            class="text-sm lg:text-xs 2xl:text-sm font-medium leading-25px lg:leading-21px 2xl:leading-25px text-contentColor dark:text-contentColor-dark">
                                                            Lorem Ipsum is simply dummying text of the printing
                                                            andtypesetting industry most of the standard.
                                                        </p>
                                                    </li>
                                                    <li class="flex items-center group" data-aos="fade-up">
                                                        <i
                                                            class="icofont-check px-2 py-2 text-primaryColor bg-whitegrey3 bg-opacity-40 group-hover:bg-primaryColor group-hover:text-white group-hover:opacity-100 mr-15px dark:bg-whitegrey1-dark"></i>
                                                        <p
                                                            class="text-sm lg:text-xs 2xl:text-sm font-medium leading-25px lg:leading-21px 2xl:leading-25px text-contentColor dark:text-contentColor-dark">
                                                            Lorem Ipsum is simply dummying text of the printing
                                                            andtypesetting industry most of the standard.
                                                        </p>
                                                    </li>
                                                    <li class="flex items-center group" data-aos="fade-up">
                                                        <i
                                                            class="icofont-check px-2 py-2 text-primaryColor bg-whitegrey3 bg-opacity-40 group-hover:bg-primaryColor group-hover:text-white group-hover:opacity-100 mr-15px dark:bg-whitegrey1-dark"></i>
                                                        <p
                                                            class="text-sm lg:text-xs 2xl:text-sm font-medium leading-25px lg:leading-21px 2xl:leading-25px text-contentColor dark:text-contentColor-dark">
                                                            Lorem Ipsum is simply dummying text of the printing
                                                            andtypesetting industry most of the standard.
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
















                                        </div>


                                        <!-- Faqus Questions  -->
                                        <div class="hidden">
                                            <ul class="accordion-container curriculum">
                                                <!-- accordion -->
                                                <li class="accordion mb-25px overflow-hidden">
                                                    <div
                                                        class="bg-whiteColor border border-borderColor dark:bg-whiteColor-dark dark:border-borderColor-dark rounded-t-md ">
                                                        <!-- controller -->
                                                        <div>
                                                            <div
                                                                class="cursor-pointer accordion-controller flex justify-between items-center text-xl text-headingColor font-bold w-full px-5 py-18px dark:text-headingColor-dark font-hind leading-[20px]  ">
                                                                <div class="flex items-center">
                                                                    <span>इस Batch को कौन- कौन Join कर सकता है ? </span>
                                                                </div>
                                                                <svg class="transition-all duration-500 rotate-0" width="20"
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                                    fill="#212529">
                                                                    <path fill-rule="evenodd"
                                                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <!-- content -->
                                                        <div class="accordion-content transition-all duration-500 h-0">
                                                            <div class="content-wrapper p-10px md:px-30px">
                                                                <ul>
                                                                    <li
                                                                        class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark">
                                                                        <div>
                                                                            <h4
                                                                                class="text-blackColor dark:text-blackColor-dark leading-1 font-light">
                                                                                <i class="icofont-video-alt mr-10px"></i>
                                                                                <span class="font-medium">
                                                                                    जो भी छात्र Bihar SSC (10+2) Inter Level
                                                                                    2025 परीक्षा की तैयारी करना चाहते हैं |
                                                                                </span>
                                                                            </h4>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>



                                            </ul>
                                        </div>

                                        <!-- Instructor  -->
                                        <div class="hidden">
                                            <div class="shadow-event p-5 md:p-30px lg:p-5 2xl:p-30px mb-30px flex flex-col md:flex-row shadow-autor"
                                                data-aos="fade-up">
                                                <!-- athor avatar -->
                                                <div class="flex mb-30px mr-5 flex-shrink-0">
                                                    <img src="modules/assets/images/blog/blog_10.png" alt=""
                                                        class="w-24 h-24 rounded-full">
                                                </div>
                                                <div>
                                                    <!-- author name -->
                                                    <div class="mb-3">
                                                        <h3 class="mb-7px">
                                                            <a href="instructor-details.html"
                                                                class="text-xl font-bold text-blackColor2 dark:text-blackColor2-dark hover:text-primaryColor dark:hover:text-primaryColor">Rosalina
                                                                D. Willaim</a>
                                                        </h3>
                                                        <p class="text-xs text-contentColor2 dark:text-contentColor2-dark">
                                                            Blogger/Photographer
                                                        </p>
                                                    </div>
                                                    <!-- description -->
                                                    <p
                                                        class="text-sm text-contentColor dark:text-contentColor-dark mb-15px leading-26px">
                                                        Lorem Ipsum is simply dummy text of the printing
                                                        and typesetting industry. Lorem Ipsum has been the
                                                        industry's standard dummy text ever since the
                                                        1500s, when an unknown printer took a galley
                                                    </p>
                                                    <!-- social -->
                                                    <div>
                                                        <ul class="flex gap-10px items-center">
                                                            <li>
                                                                <a href="course-details.html#"
                                                                    class="w-35px h-35px leading-35px text-center border border-borderColor2 text-contentColor hover:text-whiteColor hover:bg-primaryColor dark:text-contentColor-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:border-borderColor2-dark rounded"><i
                                                                        class="icofont-facebook"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="course-details.html#"
                                                                    class="w-35px h-35px leading-35px text-center border border-borderColor2 text-contentColor hover:text-whiteColor hover:bg-primaryColor dark:text-contentColor-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:border-borderColor2-dark rounded"><i
                                                                        class="icofont-youtube-play"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="course-details.html#"
                                                                    class="w-35px h-35px leading-35px text-center border border-borderColor2 text-contentColor hover:text-whiteColor hover:bg-primaryColor dark:text-contentColor-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor dark:border-borderColor2-dark rounded"><i
                                                                        class="icofont-instagram"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="course-details.html#"
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
    // Check video or URL availability
    if (!empty($row->course_video_content)) {

        // If YouTube link is provided
        if (strpos($row->course_video_content, 'youtube.com') !== false || strpos($row->course_video_content, 'youtu.be') !== false) { 
            // Thumbnail as background + YouTube popup button
    ?>
            <img src="<?php echo base_url('modules/courseThumbnail/' . $row->course_thumbnail); ?>" 
                 alt="Course Thumbnail" class="w-full rounded-md">
            
            <div class="absolute top-0 right-0 left-0 bottom-0 flex items-center justify-center z-10">
                <div>
                    <button data-url="<?php echo $row->course_video_content; ?>" 
                        class="lvideo relative w-15 h-15 md:h-20 md:w-20 lg:w-15 lg:h-15 
                               2xl:h-70px 2xl:w-70px 3xl:h-20 3xl:w-20 bg-secondaryColor 
                               rounded-full flex items-center justify-center">
                        <span class="animate-buble absolute top-1/2 left-1/2 
                                     -translate-x-1/2 -translate-y-1/2 block 
                                     w-[180px] h-[180px] border-secondaryColor rounded-full"></span>
                        <span class="animate-buble2 absolute top-1/2 left-1/2 
                                      -translate-x-1/2 -translate-y-1/2 block 
                                      w-[180px] h-[180px] border-secondaryColor rounded-full"></span>
                        <img src="<?php echo base_url('modules/assets/images/icon/video.png'); ?>" alt="">
                    </button>
                </div>
            </div>

    <?php 
        } else { 
            // If uploaded video file exists
    ?>
            <video controls class="w-full rounded-md">
                <source src="<?php echo base_url('modules/courseVideo/' . $row->course_video_content); ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>

    <?php 
        } 
    } else { 
        // If no video and no YouTube URL
    ?>
        <img src="<?php echo base_url('modules/courseThumbnail/' . $row->course_thumbnail); ?>" 
             alt="Course Thumbnail" class="w-full rounded-md">
    <?php 
    } 
    ?>
</div>

                                <div class="flex justify-between mb-5">
                                    <div class="text-size-21 font-bold text-primaryColor font-inter leading-25px">
                                        <?php echo $this->config->item('indianRupee') . $row->course_selling_cost; ?>
                                        <del class="text-sm text-lightGrey4 font-semibold">/
                                            <?php echo $this->config->item('indianRupee') . $row->course_actual_cost; ?></del>
                                    </div>
                                    <div>
                                        <a href="course-details.html#"
                                            class="uppercase text-sm font-semibold text-secondaryColor2 leading-27px px-2 bg-whitegrey1 dark:bg-whitegrey1-dark"><?php echo $this->config->item('discountPercent') . $row->discount_applied; ?>%
                                            OFF</a>
                                    </div>
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
                                            Skill Level
                                        </p>
                                        <p
                                            class="text-xs text-contentColor dark:text-contentColor-dark px-10px py-6px bg-borderColor dark:bg-borderColor-dark rounded-full leading-13px capitalize">
                                            Premium
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
                                    <li
                                        class="flex items-center justify-between py-10px border-b border-borderColor dark:border-borderColor-dark">
                                        <p
                                            class="text-sm font-medium text-contentColor dark:text-contentColor-dark leading-1.8">
                                            Assignment
                                        </p>
                                        <p
                                            class="text-xs text-contentColor dark:text-contentColor-dark px-10px py-6px bg-borderColor dark:bg-borderColor-dark rounded-full leading-13px capitalize">
                                            Yes
                                        </p>
                                    </li>
                                    <li
                                        class="flex items-center justify-between py-10px border-b border-borderColor dark:border-borderColor-dark">
                                        <p
                                            class="text-sm font-medium text-contentColor dark:text-contentColor-dark leading-1.8">
                                            Materials
                                        </p>
                                        <p
                                            class="text-xs text-contentColor dark:text-contentColor-dark px-10px py-6px bg-borderColor dark:bg-borderColor-dark rounded-full leading-13px capitalize">
                                            yes
                                        </p>
                                    </li>
                                    <li
                                        class="flex items-center justify-between py-10px border-b border-borderColor dark:border-borderColor-dark">
                                        <p
                                            class="text-sm font-medium text-contentColor dark:text-contentColor-dark leading-1.8">
                                            Test
                                        </p>
                                        <p
                                            class="text-xs text-contentColor dark:text-contentColor-dark px-10px py-6px bg-borderColor dark:bg-borderColor-dark rounded-full leading-13px capitalize">
                                            Yes
                                        </p>
                                    </li>
                                    <li
                                        class="flex items-center justify-between py-10px border-b border-borderColor dark:border-borderColor-dark">
                                        <p
                                            class="text-sm font-medium text-contentColor dark:text-contentColor-dark leading-1.8">
                                            Quiz
                                        </p>
                                        <p
                                            class="text-xs text-contentColor dark:text-contentColor-dark px-10px py-6px bg-borderColor dark:bg-borderColor-dark rounded-full leading-13px capitalize">
                                            Yes
                                        </p>
                                    </li>
                                    <li
                                        class="flex items-center justify-between py-10px border-b border-borderColor dark:border-borderColor-dark">
                                        <p
                                            class="text-sm font-medium text-contentColor dark:text-contentColor-dark leading-1.8 capitalize">
                                            Identity Card
                                        </p>
                                        <p
                                            class="text-xs text-contentColor dark:text-contentColor-dark px-10px py-6px bg-borderColor dark:bg-borderColor-dark rounded-full leading-13px capitalize">
                                            Yes
                                        </p>
                                    </li>
                                    <li
                                        class="flex items-center justify-between py-10px border-b border-borderColor dark:border-borderColor-dark">
                                        <p
                                            class="text-sm font-medium text-contentColor dark:text-contentColor-dark leading-1.8">
                                            Certificate
                                        </p>
                                        <p
                                            class="text-xs text-contentColor dark:text-contentColor-dark px-10px py-6px bg-borderColor dark:bg-borderColor-dark rounded-full leading-13px capitalize">
                                            Yes
                                        </p>
                                    </li>
                                </ul>
                                <div class="mt-5" data-aos="fade-up">
                                    <p
                                        class="text-sm text-contentColor dark:text-contentColor-dark leading-1.8 text-center mb-5px">
                                        More inquery about course
                                    </p>
                                    <button type="submit"
                                        class="w-full text-xl text-primaryColor bg-whiteColor px-25px py-10px mb-10px font-bold leading-1.8 border border-primaryColor hover:text-whiteColor hover:bg-primaryColor inline-block rounded group dark:bg-whiteColor-dark dark:text-whiteColor dark:hover:bg-primaryColor">
                                        <i class="icofont-phone"></i> <?php echo $row->enquiry_number; ?>
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
                                            <a href="course-details.html#"
                                                class="w-38px h-38px leading-38px text-center text-blackColor2 bg-whitegrey2 hover:text-whiteColor hover:bg-primaryColor dark:bg-whitegrey2-dark dark:text-blackColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor rounded"><i
                                                    class="icofont-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="course-details.html#"
                                                class="w-38px h-38px leading-38px text-center text-blackColor2 bg-whitegrey2 hover:text-whiteColor hover:bg-primaryColor dark:bg-whitegrey2-dark dark:text-blackColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor rounded"><i
                                                    class="icofont-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="course-details.html#"
                                                class="w-38px h-38px leading-38px text-center text-blackColor2 bg-whitegrey2 hover:text-whiteColor hover:bg-primaryColor dark:bg-whitegrey2-dark dark:text-blackColor2-dark dark:hover:text-whiteColor dark:hover:bg-primaryColor rounded"><i
                                                    class="icofont-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>



                            <!-- contact form -->
                            <!-- <div class="p-5 md:p-30px lg:p-5 2xl:p-30px mb-30px border border-borderColor2 dark:border-borderColor2-dark"
                            data-aos="fade-up">
                            <h4
                                class="text-size-22 text-blackColor dark:text-blackColor-dark font-bold pl-2 before:w-0.5 relative before:h-[21px] before:bg-primaryColor before:absolute before:bottom-[5px] before:left-0 leading-30px mb-25px">
                                Get in Touch
                            </h4>
                            <form class="space-y-5">
                                <input type="text" placeholder="Enter Name*"
                                    class="w-full text-contentColor leading-7 pb-10px bg-transparent focus:outline-none placeholder:text-placeholder placeholder:opacity-80 border-b border-borderColor2 dark:text-contentColor-dark dark:border-borderColor2-dark">
                                <input type="email" placeholder="Enter your mail*"
                                    class="w-full text-contentColor leading-7 pb-10px bg-transparent focus:outline-none placeholder:text-placeholder placeholder:opacity-80 border-b border-borderColor2 dark:text-contentColor-dark dark:border-borderColor2-dark">
                                <input type="text" placeholder="Message*"
                                    class="w-full text-contentColor leading-7 pb-10px bg-transparent focus:outline-none placeholder:text-placeholder placeholder:opacity-80 border-b border-borderColor2 dark:text-contentColor-dark dark:border-borderColor2-dark">
                                <button type="submit"
                                    class="text-size-15 text-whiteColor uppercase bg-primaryColor border border-primaryColor px-55px py-13px hover:text-primaryColor hover:bg-whiteColor rounded inline-block dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor">
                                    Send Message
                                </button>
                            </form>
                        </div> -->
















                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>


</main>


<!-- Footer section uiFooter -->
<?php
$this->load->view('master_contents/uiPages_content/uiFooter');
?>