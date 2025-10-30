<section>
    <div class="container-fluid-2">
        <div
            class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-standard">

            <!-- Heading -->
            <div class="mb-3 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark" data-aos="fade-up">
                <h2 class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">Create Lesson</h2>
            </div>

            <!-- ADD LESSON BUTTON -->
            <div class="mb-6" data-aos="fade-up">
                <button id="addLessonBtn" type="button"
                    class="is-checked relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300 whitespace-nowrap before:w-full active">
                    + Add Lesson
                </button>
            </div>



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
                                        Making Music with Other People
                                    </h4>
                                    <!-- price and rating -->
                                    <div class="flex gap-5 flex-wrap items-center mb-30px" data-aos="fade-up">
                                        <div class="text-size-21 font-medium text-primaryColor font-inter leading-25px">
                                            $32.00
                                            <del class="text-sm text-lightGrey4 font-semibold">/ $67.00</del>
                                        </div>
                                        <div class="flex items-center">
                                            <div>
                                                <i class="icofont-book-alt pr-5px text-primaryColor text-lg"></i>
                                            </div>
                                            <div>
                                                <span class="text-sm text-black dark:text-blackColor-dark">7
                                                    Subject</span>
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
                                                <i class="icofont-book-alt mr-2"></i> CURRICULUM
                                            </button>
                                            <button
                                                class="is-checked relative p-10px md:px-25px md:py-15px lg:py-3 2xl:py-15px 2xl:px-45px text-blackColor bg-whiteColor hover:bg-primaryColor hover:text-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark dark:hover:bg-primaryColor dark:hover:text-whiteColor flex items-center">
                                                <i class="icofont-paper mr-2"></i> DESCRIPTION
                                            </button>

                                            <button
                                                class="is-checked relative p-10px md:px-25px md:py-15px lg:py-3 2xl:py-15px 2xl:px-45px text-blackColor bg-whiteColor hover:bg-primaryColor hover:text-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark dark:hover:bg-primaryColor dark:hover:text-whiteColor flex items-center">
                                                <i class="icofont-star mr-2"></i> FAQ
                                            </button>
                                            <button
                                                class="is-checked relative p-10px md:px-25px md:py-15px lg:py-3 2xl:py-15px 2xl:px-45px text-blackColor bg-whiteColor hover:bg-primaryColor hover:text-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark dark:hover:bg-primaryColor dark:hover:text-whiteColor flex items-center">
                                                <i class="icofont-teacher mr-2"></i> INSTRUCTOR
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
                                                                    <svg class="transition-all duration-500 rotate-0"
                                                                        width="20" xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 16 16" fill="#212529">
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
                                                                                    <i
                                                                                        class="icofont-video-alt mr-10px"></i>
                                                                                    <span class="font-medium">
                                                                                        Video :
                                                                                    </span>
                                                                                    Lorem ipsum dolor sit amet.
                                                                                </h4>
                                                                            </div>
                                                                            <div
                                                                                class="text-blackColor dark:text-blackColor-dark text-sm flex items-center">
                                                                                <p>
                                                                                    <i class="icofont-clock-time"></i>
                                                                                    22
                                                                                    minutes
                                                                                </p>
                                                                                <a href="lesson.html"
                                                                                    class="bg-primaryColor text-whiteColor text-sm ml-5 rounded py-0.5">
                                                                                    <p class="px-10px">
                                                                                        <i class="icofont-eye"></i>
                                                                                        Preview
                                                                                    </p>
                                                                                </a>
                                                                            </div>
                                                                        </li>
                                                                        <li
                                                                            class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark">
                                                                            <div>
                                                                                <h4
                                                                                    class="text-blackColor dark:text-blackColor-dark leading-1 font-light">
                                                                                    <i
                                                                                        class="icofont-video-alt mr-10px"></i>
                                                                                    <span class="font-medium">
                                                                                        Video :
                                                                                    </span>
                                                                                    Lorem ipsum dolor sit amet.
                                                                                </h4>
                                                                            </div>
                                                                            <div
                                                                                class="text-blackColor dark:text-blackColor-dark text-sm flex items-center">
                                                                                <p>
                                                                                    <i class="icofont-clock-time"></i>
                                                                                    22
                                                                                    minutes
                                                                                </p>
                                                                                <a href="lesson.html"
                                                                                    class="bg-primaryColor text-whiteColor text-sm ml-5 rounded py-0.5">
                                                                                    <p class="px-10px">
                                                                                        <i class="icofont-eye"></i>
                                                                                        Preview
                                                                                    </p>
                                                                                </a>
                                                                            </div>
                                                                        </li>
                                                                        <li
                                                                            class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark">
                                                                            <div>
                                                                                <h4
                                                                                    class="text-blackColor dark:text-blackColor-dark leading-1 font-light">
                                                                                    <i
                                                                                        class="icofont-video-alt mr-10px"></i>
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
                                                                                    <i
                                                                                        class="icofont-video-alt mr-10px"></i>
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
                                                                                    <i
                                                                                        class="icofont-video-alt mr-10px"></i>
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
                                                                                    <i
                                                                                        class="icofont-file-text mr-10px"></i>
                                                                                    <span class="font-medium">
                                                                                        Lesson 03 Exam :
                                                                                    </span>
                                                                                </h4>
                                                                            </div>
                                                                            <div
                                                                                class="text-blackColor dark:text-blackColor-dark text-sm">
                                                                                <p>
                                                                                    <i class="icofont-lock"> </i> 20
                                                                                    Ques
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
                                                                        width="20" xmlns="http://www.w3.org/2000/svg"
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
                                                                <div class="content-wrapper p-10px md:px-30px">
                                                                    <ul>
                                                                        <li
                                                                            class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark">
                                                                            <div>
                                                                                <h4
                                                                                    class="text-blackColor dark:text-blackColor-dark leading-1 font-light">
                                                                                    <i
                                                                                        class="icofont-video-alt mr-10px"></i>
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
                                                                                    <i
                                                                                        class="icofont-video-alt mr-10px"></i>
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
                                                                                    <i
                                                                                        class="icofont-video-alt mr-10px"></i>
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
                                                                                    <i
                                                                                        class="icofont-video-alt mr-10px"></i>
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
                                                                                    <i
                                                                                        class="icofont-video-alt mr-10px"></i>
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
                                                                                    <i
                                                                                        class="icofont-file-text mr-10px"></i>
                                                                                    <span class="font-medium">
                                                                                        Lesson 03 Exam :
                                                                                    </span>
                                                                                </h4>
                                                                            </div>
                                                                            <div
                                                                                class="text-blackColor dark:text-blackColor-dark text-sm">
                                                                                <p>
                                                                                    <i class="icofont-lock"> </i> 20
                                                                                    Ques
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
                                                                        <span>इस Batch को कौन- कौन Join कर सकता है ?
                                                                        </span>
                                                                    </div>
                                                                    <svg class="transition-all duration-500 rotate-0"
                                                                        width="20" xmlns="http://www.w3.org/2000/svg"
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
                                                                <div class="content-wrapper p-10px md:px-30px">
                                                                    <ul>
                                                                        <li
                                                                            class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark">
                                                                            <div>
                                                                                <h4
                                                                                    class="text-blackColor dark:text-blackColor-dark leading-1 font-light">
                                                                                    <i
                                                                                        class="icofont-video-alt mr-10px"></i>
                                                                                    <span class="font-medium">
                                                                                        जो भी छात्र Bihar SSC (10+2)
                                                                                        Inter Level
                                                                                        2025 परीक्षा की तैयारी करना
                                                                                        चाहते हैं |
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
                                                <div class="p-5 md:p-30px lg:p-5 2xl:p-30px mb-30px flex flex-col md:flex-row shadow-autor"
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
                                                            <p
                                                                class="text-xs text-contentColor2 dark:text-contentColor2-dark">
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
                                        <?php if (!empty($row->course_preview_video)) { ?>
                                            <video controls class="w-full rounded-md">
                                                <source
                                                    src="<?php echo base_url('uploads/videos/' . $row->course_preview_video); ?>"
                                                    type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        <?php } else { ?>
                                            <img src="modules/assets/images/blog/courseDetails.jpg" alt="" class="w-full">
                                        <?php } ?>
                                        <div
                                            class="absolute top-0 right-0 left-0 bottom-0 flex items-center justify-center z-10">
                                            <div>
                                                <button data-url="https://www.youtube.com/watch?v=vHdclsdkp28"
                                                    class="lvideo relative w-15 h-15 md:h-20 md:w-20 lg:w-15 lg:h-15 2xl:h-70px 2xl:w-70px 3xl:h-20 3xl:w-20 bg-secondaryColor rounded-full flex items-center justify-center">
                                                    <span
                                                        class="animate-buble absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 block w-[180px] h-[180px] border-secondaryColor rounded-full"></span><span
                                                        class="animate-buble2 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 block w-[180px] h-[180px] border-secondaryColor rounded-full"></span>
                                                    <img src="modules/assets/images/icon/video.png" alt="">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-between mb-5">
                                        <div class="text-size-21 font-bold text-primaryColor font-inter leading-25px">
                                            $32.00
                                            <del class="text-sm text-lightGrey4 font-semibold">/ $67.00</del>
                                        </div>
                                        <div>
                                            <a href="course-details.html#"
                                                class="uppercase text-sm font-semibold text-secondaryColor2 leading-27px px-2 bg-whitegrey1 dark:bg-whitegrey1-dark">68%
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
                                                05 Dec 2024
                                            </p>
                                        </li>


                                        <li
                                            class="flex items-center justify-between py-10px border-b border-borderColor dark:border-borderColor-dark">
                                            <p
                                                class="text-sm font-medium text-contentColor dark:text-contentColor-dark leading-1.8">
                                                Lectures
                                            </p>
                                            <p
                                                class="text-xs text-contentColor dark:text-contentColor-dark px-10px py-6px bg-borderColor dark:bg-borderColor-dark rounded-full leading-13px">
                                                30
                                            </p>
                                        </li>
                                        <li
                                            class="flex items-center justify-between py-10px border-b border-borderColor dark:border-borderColor-dark">
                                            <p
                                                class="text-sm font-medium text-contentColor dark:text-contentColor-dark leading-1.8">
                                                Skill Level
                                            </p>
                                            <p
                                                class="text-xs text-contentColor dark:text-contentColor-dark px-10px py-6px bg-borderColor dark:bg-borderColor-dark rounded-full leading-13px">
                                                Basic
                                            </p>
                                        </li>
                                        <li
                                            class="flex items-center justify-between py-10px border-b border-borderColor dark:border-borderColor-dark">
                                            <p
                                                class="text-sm font-medium text-contentColor dark:text-contentColor-dark leading-1.8">
                                                Language
                                            </p>
                                            <p
                                                class="text-xs text-contentColor dark:text-contentColor-dark px-10px py-6px bg-borderColor dark:bg-borderColor-dark rounded-full leading-13px">
                                                Spanish
                                            </p>
                                        </li>
                                        <li
                                            class="flex items-center justify-between py-10px border-b border-borderColor dark:border-borderColor-dark">
                                            <p
                                                class="text-sm font-medium text-contentColor dark:text-contentColor-dark leading-1.8">
                                                Quiz
                                            </p>
                                            <p
                                                class="text-xs text-contentColor dark:text-contentColor-dark px-10px py-6px bg-borderColor dark:bg-borderColor-dark rounded-full leading-13px">
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
                                                class="text-xs text-contentColor dark:text-contentColor-dark px-10px py-6px bg-borderColor dark:bg-borderColor-dark rounded-full leading-13px">
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
                                            <i class="icofont-phone"></i> +47 333 78 901
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


            <!-- LESSON FORM (HIDDEN INITIALLY) -->
            <div id="lessonFormContainer" class="hidden transition-all duration-500">

                <form
                    class="p-10px md:p-10 lg:p-5 2xl:p-10 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8 space-y-6">

                    <!-- Lesson Name -->
                    <div class="space-y-3">
                        <label class="block mb-3 font-semibold">Lesson Name</label>
                        <input type="text" name="lesson_name" placeholder="Enter Lesson Name"
                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                    </div>

                    <!-- COURSE INTRO ACCORDION -->
                    <div class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4 mt-15px">
                        <div class="cursor-pointer accordion-controller flex justify-between items-center text-lg font-semibold py-5 px-6"
                            onclick="this.nextElementSibling.classList.toggle('hidden')">
                            <span class="text-blackColor dark:text-whiteColor">Course Intro</span>
                            <svg class="transition-all duration-500 rotate-0" width="20"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#212529">
                                <path fill-rule="evenodd"
                                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                </path>
                            </svg>
                        </div>
                        <div class="hidden px-6 pb-6 space-y-4">
                            <label class="block font-semibold mb-2">Intro Title</label>
                            <input type="text" placeholder="Enter Intro Title"
                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">

                            <label class="block font-semibold mb-2">Upload Video</label>
                            <input type="file" class="w-full py-2 px-3 text-sm border-2 border-borderColor rounded-md">

                            <div class="mt-15px">
                                <button type="button"
                                    class="px-5 py-2 bg-primaryColor text-whiteColor rounded hover:bg-primaryColor-dark font-semibold">
                                    + Add More Intro
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- LECTURES ACCORDION -->
                    <div class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4 mt-15px">
                        <div class="cursor-pointer accordion-controller flex justify-between items-center text-lg font-semibold py-5 px-6"
                            onclick="this.nextElementSibling.classList.toggle('hidden')">
                            <span class="text-blackColor dark:text-whiteColor">Lectures</span>
                            <svg class="transition-all duration-500 rotate-0" width="20"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#212529">
                                <path fill-rule="evenodd"
                                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                </path>
                            </svg>
                        </div>
                        <div class="hidden px-6 pb-6 space-y-4">
                            <label class="block font-semibold mb-2">Lecture Title</label>
                            <input type="text" placeholder="Enter Lecture Title"
                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">

                            <label class="block font-semibold mb-2">Upload Video</label>
                            <input type="file" class="w-full py-2 px-3 text-sm border-2 border-borderColor rounded-md">

                            <div class="mt-15px">
                                <button type="button"
                                    class="px-5 py-2 bg-primaryColor text-whiteColor rounded hover:bg-primaryColor-dark font-semibold">
                                    + Add New Lecture
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- MATERIALS ACCORDION -->
                    <div class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4 mt-15px">
                        <div class="cursor-pointer accordion-controller flex justify-between items-center text-lg font-semibold py-5 px-6"
                            onclick="this.nextElementSibling.classList.toggle('hidden')">
                            <span class="text-blackColor dark:text-whiteColor">Materials</span>
                            <svg class="transition-all duration-500 rotate-0" width="20"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#212529">
                                <path fill-rule="evenodd"
                                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                </path>
                            </svg>
                        </div>
                        <div class="hidden px-6 pb-6 space-y-4">
                            <label class="block font-semibold mb-2">Material Title</label>
                            <input type="text" placeholder="Enter Material Title"
                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">

                            <label class="block font-semibold mb-2">Upload Material File</label>
                            <input type="file" class="w-full py-2 px-3 text-sm border-2 border-borderColor rounded-md">

                            <div class="mt-15px">
                                <button type="button"
                                    class="px-5 py-2 bg-primaryColor text-whiteColor rounded hover:bg-primaryColor-dark font-semibold">
                                    + Add New Material
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- QUIZ ACCORDION -->
                    <div class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4 mt-15px">
                        <div class="cursor-pointer accordion-controller flex justify-between items-center text-lg font-semibold py-5 px-6"
                            onclick="this.nextElementSibling.classList.toggle('hidden')">
                            <span class="text-blackColor dark:text-whiteColor">Quiz</span>
                            <svg class="transition-all duration-500 rotate-0" width="20"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#212529">
                                <path fill-rule="evenodd"
                                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                </path>
                            </svg>
                        </div>
                        <div class="hidden px-6 pb-6 space-y-4">
                            <label class="block font-semibold mb-2">Quiz Title</label>
                            <input type="text" placeholder="Enter Quiz Title"
                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">

                            <div class="mt-15px">
                                <button type="button"
                                    class="px-5 py-2 bg-primaryColor text-whiteColor rounded hover:bg-primaryColor-dark font-semibold">
                                    + Add New Quiz
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- ASSIGNMENT ACCORDION -->
                    <div class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4 mt-15px">
                        <div class="cursor-pointer accordion-controller flex justify-between items-center text-lg font-semibold py-5 px-6"
                            onclick="this.nextElementSibling.classList.toggle('hidden')">
                            <span class="text-blackColor dark:text-whiteColor">Assignment</span>
                            <svg class="transition-all duration-500 rotate-0" width="20"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#212529">
                                <path fill-rule="evenodd"
                                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                </path>
                            </svg>
                        </div>
                        <div class="hidden px-6 pb-6 space-y-4">
                            <label class="block font-semibold mb-2">Assignment Title</label>
                            <input type="text" placeholder="Enter Assignment Title"
                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">

                            <label class="block font-semibold mb-2">Assignment Description</label>
                            <textarea placeholder="Enter Assignment Description"
                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md"></textarea>

                            <div class="mt-15px">
                                <button type="button"
                                    class="px-5 py-2 bg-primaryColor text-whiteColor rounded hover:bg-primaryColor-dark font-semibold">
                                    + Add New Assignment
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Save Lesson -->
                    <div class="mt-6">
                        <button type="submit"
                            class="px-6 py-3 bg-primaryColor text-whiteColor rounded hover:bg-primaryColor-dark font-semibold">
                            Save Lesson
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</section>

<!-- JS TOGGLE FORM -->
<script>
    const addLessonBtn = document.getElementById('addLessonBtn');
    const lessonFormContainer = document.getElementById('lessonFormContainer');

    addLessonBtn.addEventListener('click', () => {
        lessonFormContainer.classList.toggle('hidden');
    });
</script









































                       
                       
                       <!-- third tab  -->
                        <div class="hidden transition-all duration-300">
                            <form class="text-sm text-blackColor dark:text-blackColor-dark leading-1.8"
                                data-aos="fade-up">
                                <div class="grid grid-cols-1 mb-15px gap-y-15px gap-x-30px">
                                    <div>
                                        <label class="mb-3 block font-semibold"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-facebook inline-block mr-1">
                                                <path
                                                    d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                                </path>
                                            </svg>Facebook</label>
                                        <input type="text" placeholder="https://facebook.com/"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-semibold"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-twitter inline-block mr-1">
                                                <path
                                                    d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                                </path>
                                            </svg>
                                            Twitter</label>
                                        <input type="text" placeholder="https://twitter.com/"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-semibold"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-linkedin inline-block mr-1">
                                                <path
                                                    d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                                </path>
                                                <rect x="2" y="9" width="4" height="12"></rect>
                                                <circle cx="4" cy="4" r="2"></circle>
                                            </svg>Linkedin</label>
                                        <input type="text" placeholder="https://linkedin.com/"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-semibold"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-layout inline-block mr-1">
                                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                                <line x1="3" y1="9" x2="21" y2="9"></line>
                                                <line x1="9" y1="21" x2="9" y2="9"></line>
                                            </svg>Website</label>
                                        <input type="text" placeholder="https://website.com/"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-semibold"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-github inline-block mr-1">
                                                <path
                                                    d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                                </path>
                                            </svg>Github</label>
                                        <input type="text" placeholder="https://github.com/"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                    </div>
                                </div>

                                <div class="mt-15px">
                                    <button type="submit"
                                        class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark">
                                        Update Social
                                    </button>
                                </div>
                            </form>
                        </div>




                            <!-- Basic Accordion Extra  -->
                           <div class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4">
                                <div class="cursor-pointer accordion-controller flex justify-between items-center text-lg font-semibold py-5 px-6"
                                    onclick="this.nextElementSibling.classList.toggle('hidden')">
                                    <span class="text-blackColor dark:text-whiteColor">Basic</span>
                                    <svg class="transition-all duration-500 rotate-0  " width="20"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#212529">
                                        <path fill-rule="evenodd"
                                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg>
                                </div>

                                <div class="hidden px-6 pb-6">
                                    <form
                                        class="p-10px md:p-10 lg:p-5 2xl:p-10 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8 space-y-4">

                                        <div>
                                            <label class="mb-3 block font-semibold">Course Title</label>
                                            <input type="text" placeholder="Course Title" name="courseTitle"
                                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                        </div>

                                        <div>
                                            <label class="mb-3 block font-semibold">Upload Image</label>
                                            <input type="file" accept="image/*" name="courseImage"
                                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md font-no">
                                        </div>

                                        <div>
                                            <label class="mb-3 block font-semibold">Short Description</label>
                                            <textarea rows="3" placeholder="Write short course description..."
                                                name="shortDesc"
                                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md font-no placeholder:text-placeholder placeholder:opacity-80 leading-23px"></textarea>
                                        </div>

                                    </form>
                                </div>
                            </div> -->