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






    <!--dashbord menu section -->
    <section>
        <div class="container-fluid-2">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-30px pt-30px pb-100px">
                <div class="lg:col-start-1 lg:col-span-3">
                    <!-- navigation menu -->
                    <div
                        class="p-30px pt-5 lg:p-5 2xl:p-30px 2xl:pt-5 rounded-standard shadow-accordion dark:shadow-accordion-dark bg-whiteColor dark:bg-whiteColor-dark">
                        <!-- course card -->

                        <div
                            class="p-5 mb-25px  bg-lightGrey5 dark:bg-whiteColor-dark rounded-lg2 shadow-accordion-dark">
                            <h3 class="text-2xl font-semibold text-blackColor dark:text-blackColor-dark leading-38px">
                                Computers Science
                            </h3>
                            <!-- Button to open modal -->
                            <button id="openModal"
                                class="text-sm font-semibold text-primaryColor bg-whitegrey3 px-6 py-1 mb-5 rounded-standard inline-block">
                                + NEW CHAPTER
                            </button>

                            <!-- Modal structure -->
                            <div id="myModal"
                                class="fixed top-0 left-0 w-full h-full inset-0 transition-all duration-500 bg-lightBlack hidden items-center justify-center z-50">
                                <div class="modal-close fixed md:absolute top-0 left-0 w-full h-full z-xsmall">
                                </div>
                                <div
                                    class="modal-content transition-all duration-500 -translate-y-20 bg-whiteColor dark:bg-whiteColor-dark p-15px max-w-250 mx-15px md:mx-auto mb-50px mt-110px md:my-150px relative z-small rounded-lg">
                                    <div class="grid ">
                                        <!-- delails left -->
                                        <div class="relative">
                                            <div class="md:sticky md:top-[100px]">

                                                <h2
                                                    class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                                                    Create Chapter
                                                </h2>


                                                <form method="POST" action="http://localhost/NeverRock/passwordUpdate"
                                                    class="text-sm text-blackColor dark:text-blackColor-dark leading-1.8 aos-init aos-animate"
                                                    data-aos="fade-up">

                                                    <div class="grid grid-cols-1 mb-15px gap-y-15px gap-x-30px">



                                                        <!-- New Password -->
                                                        <div class="relative">
                                                            <label class="mb-3 block font-semibold">Chapter Name</label>
                                                            <input type="text" id="txss" name="txss"
                                                                placeholder="Chapter Name" maxlength="25" required=""
                                                                class="w-full py-10px px-5 pr-35px text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">

                                                        </div>


                                                    </div>

                                                    <div class="mt-15px">
                                                        <button type="submit" name="updatePassword"
                                                            class="w-full text-size-15 text-whiteColor bg-primaryColor px-25px py-10px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark">
                                                            Add
                                                        </button>
                                                    </div>
                                                </form>







                                            </div>
                                        </div>

                                        <!-- close button -->
                                        <div class="absolute top-4 right-3 z-xxl">
                                            <button id="closeModal"
                                                class="modal-close group dark:bg-whiteColor rounded focus:shadow-select opacity-50 hover:opacity-75 p-1 inline-block">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                    class="w-4 h-4 fill-blackColor" fill="#000">
                                                    <path
                                                        d="M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <script>
                                const openBtn = document.getElementById('openModal');
                                const modal = document.getElementById('myModal');
                                const closeBtn = document.getElementById('closeModal');

                                // Open modal
                                openBtn.addEventListener('click', () => {
                                    modal.classList.remove('hidden');
                                    modal.classList.add('flex');
                                });

                                // Close modal
                                closeBtn.addEventListener('click', () => {
                                    modal.classList.add('hidden');
                                    modal.classList.remove('flex');
                                });

                                // Click outside modal to close
                                window.addEventListener('click', (e) => {
                                    if (e.target === modal) {
                                        modal.classList.add('hidden');
                                        modal.classList.remove('flex');
                                    }
                                });
                            </script>


                        </div>

                        <ul class="accordion-container curriculum">
                            <!-- accordion -->
                            <li class="accordion mb-25px overflow-hidden active">
                                <div
                                    class="bg-whiteColor border border-borderColor dark:bg-whiteColor-dark dark:border-borderColor-dark rounded-t-md">
                                    <!-- controller -->
                                    <div>
                                        <button
                                            class="accordion-controller flex justify-between items-center text-xl text-headingColor font-bold w-full px-5 py-18px dark:text-headingColor-dark font-hind leading-[20px]">
                                            <span>CHAPTERS</span>

                                            <svg class="transition-all duration-500 rotate-0" width="20"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#212529">
                                                <path fill-rule="evenodd"
                                                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                                </path>
                                            </svg>
                                        </button>
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
                                                            <a href="lesson-quiz.html"
                                                                class="font-medium text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover;text-primaryColor">
                                                                Chapter 1 - Introduction
                                                            </a>
                                                        </h4>
                                                    </div>
                                                </li>
                                                <li class="py-4 flex items-center justify-between flex-wrap">
                                                    <div>
                                                        <h4
                                                            class="text-blackColor dark:text-blackColor-dark leading-1 font-light">
                                                            <a href="lesson-assignment.html"
                                                                class="font-medium text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover;text-primaryColor">
                                                                Chapter 2 - Variables
                                                            </a>
                                                        </h4>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion mb-25px overflow-hidden">
                                <div
                                    class="bg-whiteColor border border-borderColor dark:bg-whiteColor-dark dark:border-borderColor-dark rounded-t-md">
                                    <!-- controller -->
                                    <div>
                                        <button
                                            class="accordion-controller flex justify-between items-center text-xl text-headingColor font-bold w-full px-5 py-18px dark:text-headingColor-dark font-hind leading-[20px]">
                                            <span>SUBJECTS</span>

                                            <svg class="transition-all duration-500 rotate-0" width="20"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#212529">
                                                <path fill-rule="evenodd"
                                                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                                </path>
                                            </svg>
                                        </button>
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
                                                            <a href="lesson-quiz.html"
                                                                class="font-medium text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover;text-primaryColor">
                                                                MATH
                                                            </a>
                                                        </h4>
                                                    </div>
                                                </li>
                                                <li class="py-4 flex items-center justify-between flex-wrap">
                                                    <div>
                                                        <h4
                                                            class="text-blackColor dark:text-blackColor-dark leading-1 font-light">
                                                            <a href="lesson-assignment.html"
                                                                class="font-medium text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover;text-primaryColor">
                                                                SCIENCE
                                                            </a>
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
                </div>


                <!-- dashboard content -->
                <div class="lg:col-start-4 lg:col-span-9">
                    <!-- counter -->
                    <div
                        class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-standard">
                        <div
                            class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark flex items-center justify-between gap-2 flex-wrap">
                            <h2 class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                                Chapter 1 - Introduction
                            </h2>

                            <div
                                class="text-primaryColor bg-whitegrey3 text-sm  rounded py-0.5 px-5 flex items-center justify-between gap-2 flex-wrap">
                                <button class=" ">Lecture</button>
                                <button class=" ">Quiz</button>
                                <button class="">Assignment</button>
                                <button class="">Materials</button>
                                <button class="">Test</button>
                            </div>
                            </li>
                        </div>

                        <!-- counter area -->
                        <div class="tab">
                            <div class="tab-links grid grid-cols-2 md:grid-cols-5 gap-11px text-blackColor text-lg lg:text-size-22 font-semibold font-hind bg-transparent mt-30px md:mt-0 mb-43px aos-init aos-animate"
                                data-aos="fade-up">
                                <button
                                    class="py-9px lg:py-6 hover:text-primaryColor dark:text-whiteColor dark:hover:text-primaryColor dark:bg-whiteColor-dark dark:hover:bg-whiteColor-dark hover:bg-white relative group/btn dark:shadow-standard-dark hover:shadow-bottom disabled:cursor-pointer rounded-standard bg-lightGrey7 dark:bg-lightGrey7-dark inActive">
                                    <span
                                        class="absolute w-0 h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"></span>

                                    Lectures
                                </button>
                                <button
                                    class="py-9px lg:py-6 hover:text-primaryColor dark:hover:text-primaryColor dark:text-whiteColor hover:bg-white dark:hover:bg-whiteColor-dark relative group/btn hover:shadow-bottom dark:shadow-standard-dark disabled:cursor-pointer rounded-standard dark:bg-whiteColor-dark bg-white shadow-bottom"
                                    disabled="">
                                    <span
                                        class="absolute w-full h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"></span>

                                    Quiz
                                </button>
                                <button
                                    class="py-9px lg:py-6 hover:text-primaryColor dark:hover:text-primaryColor dark:text-whiteColor hover:bg-white dark:hover:bg-whiteColor-dark relative group/btn hover:shadow-bottom dark:shadow-standard-dark disabled:cursor-pointer rounded-standard dark:bg-whiteColor-dark bg-lightGrey7 dark:bg-lightGrey7-dark inActive">
                                    <span
                                        class="absolute w-0 h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"></span>

                                    Assigment
                                </button>
                                <button
                                    class="py-9px lg:py-6 hover:text-primaryColor dark:hover:text-primaryColor dark:text-whiteColor hover:bg-white dark:hover:bg-whiteColor-dark relative group/btn hover:shadow-bottom dark:shadow-standard-dark disabled:cursor-pointer rounded-standard dark:bg-whiteColor-dark bg-lightGrey7 dark:bg-lightGrey7-dark inActive">
                                    <span
                                        class="absolute w-0 h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"></span>
                                    Materials
                                </button>
                                <button
                                    class="py-9px lg:py-6 hover:text-primaryColor dark:hover:text-primaryColor dark:text-whiteColor hover:bg-white dark:hover:bg-whiteColor-dark relative group/btn hover:shadow-bottom dark:shadow-standard-dark disabled:cursor-pointer rounded-standard dark:bg-whiteColor-dark bg-lightGrey7 dark:bg-lightGrey7-dark inActive">
                                    <span
                                        class="absolute w-0 h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"></span>
                                    Test
                                </button>
                            </div>

                            <div class="tab-contents">
                                <!-- Monday Event-->
                                <div class="transition-opacity duration-150 ease-linear opacity-100 hidden">
                                    <div class="flex flex-col gap-y-6">
                                        <!-- event 1 -->
                                        <div class="flex flex-col md:flex-row md:gap-30px lg:gap-10 items-center md:items-star bg-whiteColor dark:whiteColor-dark p-15px md:p-5 transition-all duration-300 group hover:text-whiteColor hover:bg-primaryColor dark:bg-whiteColor-dark dark:hover:bg-primaryColor shadow-experience rounded aos-init aos-animate"
                                            data-aos="fade-up">
                                            <!-- event thumb -->
                                            <div class="flex-shrink-0">
                                                <img src="modules/assets/images/event/event__1.png" alt=""
                                                    class="w-170px">
                                            </div>
                                            <!-- event content -->
                                            <div class="py-18px">
                                                <div>
                                                    <p
                                                        class="text-sm text-blackColor mb-10px group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor">
                                                        <i
                                                            class="icofont-clock-time text-primaryColor pr-1 group-hover:text-whiteColor dark:hover:text-whiteColor"></i>
                                                        <span class="pr-2">10.00Am - 11.00 am</span>
                                                        <span
                                                            class="text-primaryColor group-hover:text-whiteColor dark:group-hover:text-whiteColor">Mirnsdo
                                                            .H </span><span>- Event Speaker</span>
                                                    </p>
                                                </div>
                                                <h3
                                                    class="text-size-15 md:text-lg lg:text-2xl text-contentColor dark: font-semibold pb-18px group-hover:text-whiteColor dark:text-contentColor-dark dark:group-hover:text-whiteColor">
                                                    <a href="event-details.html"
                                                        class="hover:text-secondaryColor dark:hover:text-secondaryColor">Forging
                                                        relationships between multi to national
                                                        governments and global.
                                                    </a>
                                                </h3>
                                                <p
                                                    class="text-base md:text-sm lg:text-base text-blackColor group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor">
                                                    <a class="hover:text-secondaryColor dark:hover:text-secondaryColor"
                                                        href="home-4.html#">Read More
                                                        <i class="icofont-simple-right"></i>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <!-- Tuesday Event-->
                                <div class="transition-opacity duration-150 ease-linear block opacity-100">
                                    <div class="flex flex-col gap-y-6">
                                        <!-- event 1 -->
                                        <div class="flex flex-col md:flex-row md:gap-30px lg:gap-10 items-center md:items-star bg-whiteColor dark:whiteColor-dark p-15px md:p-5 transition-all duration-300 group hover:text-whiteColor hover:bg-primaryColor dark:bg-whiteColor-dark dark:hover:bg-primaryColor shadow-experience rounded aos-init aos-animate"
                                            data-aos="fade-up">
                                            <!-- event thumb -->
                                            <div class="flex-shrink-0">
                                                <img src="modules/assets/images/event/event__1.png" alt=""
                                                    class="w-170px">
                                            </div>
                                            <!-- event content -->
                                            <div class="py-18px">
                                                <div>
                                                    <p
                                                        class="text-sm text-blackColor mb-10px group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor">
                                                        <i
                                                            class="icofont-clock-time text-primaryColor pr-1 group-hover:text-whiteColor dark:hover:text-whiteColor"></i>
                                                        <span class="pr-2">10.00Am - 11.00 am</span>
                                                        <span
                                                            class="text-primaryColor group-hover:text-whiteColor dark:group-hover:text-whiteColor">Mirnsdo
                                                            .H </span><span>- Event Speaker</span>
                                                    </p>
                                                </div>
                                                <h3
                                                    class="text-size-15 md:text-lg lg:text-2xl text-contentColor dark: font-semibold pb-18px group-hover:text-whiteColor dark:text-contentColor-dark dark:group-hover:text-whiteColor">
                                                    <a href="event-details.html"
                                                        class="hover:text-secondaryColor dark:hover:text-secondaryColor">Forging
                                                        relationships between multi to national
                                                        governments and global.
                                                    </a>
                                                </h3>
                                                <p
                                                    class="text-base md:text-sm lg:text-base text-blackColor group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor">
                                                    <a class="hover:text-secondaryColor dark:hover:text-secondaryColor"
                                                        href="home-4.html#">Read More
                                                        <i class="icofont-simple-right"></i>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <!-- Wednesday Event-->
                                <div class="transition-opacity duration-150 ease-linear opacity-100 hidden">
                                    <div class="flex flex-col gap-y-6">
                                        <!-- event 1 -->
                                        <div class="flex flex-col md:flex-row md:gap-30px lg:gap-10 items-center md:items-star bg-whiteColor dark:whiteColor-dark p-15px md:p-5 transition-all duration-300 group hover:text-whiteColor hover:bg-primaryColor dark:bg-whiteColor-dark dark:hover:bg-primaryColor shadow-experience rounded aos-init aos-animate"
                                            data-aos="fade-up">
                                            <!-- event thumb -->
                                            <div class="flex-shrink-0">
                                                <img src="modules/assets/images/event/event__1.png" alt=""
                                                    class="w-170px">
                                            </div>
                                            <!-- event content -->
                                            <div class="py-18px">
                                                <div>
                                                    <p
                                                        class="text-sm text-blackColor mb-10px group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor">
                                                        <i
                                                            class="icofont-clock-time text-primaryColor pr-1 group-hover:text-whiteColor dark:hover:text-whiteColor"></i>
                                                        <span class="pr-2">10.00Am - 11.00 am</span>
                                                        <span
                                                            class="text-primaryColor group-hover:text-whiteColor dark:group-hover:text-whiteColor">Mirnsdo
                                                            .H </span><span>- Event Speaker</span>
                                                    </p>
                                                </div>
                                                <h3
                                                    class="text-size-15 md:text-lg lg:text-2xl text-contentColor dark: font-semibold pb-18px group-hover:text-whiteColor dark:text-contentColor-dark dark:group-hover:text-whiteColor">
                                                    <a href="event-details.html"
                                                        class="hover:text-secondaryColor dark:hover:text-secondaryColor">Forging
                                                        relationships between multi to national
                                                        governments and global.
                                                    </a>
                                                </h3>
                                                <p
                                                    class="text-base md:text-sm lg:text-base text-blackColor group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor">
                                                    <a class="hover:text-secondaryColor dark:hover:text-secondaryColor"
                                                        href="home-4.html#">Read More
                                                        <i class="icofont-simple-right"></i>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <!-- Thursday Event-->
                                <div class="transition-opacity duration-150 ease-linear opacity-100 hidden">
                                    <div class="flex flex-col gap-y-6">

                                        <!-- event 4 -->
                                        <div class="flex flex-col md:flex-row md:gap-30px lg:gap-10 items-center md:justify-between bg-whiteColor dark:whiteColor-dark p-15px md:p-5 md:pl-45px transition-all duration-300 group hover:text-whiteColor hover:bg-primaryColor dark:bg-whiteColor-dark dark:hover:bg-primaryColor shadow-experience rounded aos-init aos-animate"
                                            data-aos="fade-up">
                                            <div class="py-18px">
                                                <div>
                                                    <p
                                                        class="text-sm text-blackColor mb-10px group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor">
                                                        <i
                                                            class="icofont-clock-time text-primaryColor pr-1 group-hover:text-whiteColor dark:hover:text-whiteColor"></i>
                                                        <span class="pr-2">10.00Am - 11.00 am</span>
                                                        <span
                                                            class="text-primaryColor group-hover:text-whiteColor dark:group-hover:text-whiteColor">Mirnsdo
                                                            .H </span><span>- Event Speaker</span>
                                                    </p>
                                                </div>
                                                <h3
                                                    class="text-size-15 md:text-lg lg:text-2xl text-contentColor dark: font-semibold pb-18px group-hover:text-whiteColor dark:text-contentColor-dark dark:group-hover:text-whiteColor">
                                                    <a href="event-details.html"
                                                        class="hover:text-secondaryColor dark:hover:text-secondaryColor">Forging
                                                        relationships between multi to national
                                                        governments and global.
                                                    </a>
                                                </h3>
                                                <p
                                                    class="text-base md:text-sm lg:text-base text-blackColor group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor">
                                                    <a class="hover:text-secondaryColor dark:hover:text-secondaryColor"
                                                        href="home-4.html#">Read More
                                                        <i class="icofont-simple-right"></i>
                                                    </a>
                                                </p>
                                            </div>
                                            <!-- event thumb -->
                                            <div class="flex-shrink-0 flex flex-col items-center md:items-end">
                                                <img src="modules/assets/images/event/event__1.png" alt=""
                                                    class="w-170px">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- Friday Event-->
                                <div class="transition-opacity duration-150 ease-linear opacity-100 hidden">
                                    <div class="flex flex-col gap-y-6">

                                        <!-- event 4 -->
                                        <div class="flex flex-col md:flex-row md:gap-30px lg:gap-10 items-center md:justify-between bg-whiteColor dark:whiteColor-dark p-15px md:p-5 md:pl-45px transition-all duration-300 group hover:text-whiteColor hover:bg-primaryColor dark:bg-whiteColor-dark dark:hover:bg-primaryColor shadow-experience rounded aos-init aos-animate"
                                            data-aos="fade-up">
                                            <div class="py-18px">
                                                <div>
                                                    <p
                                                        class="text-sm text-blackColor mb-10px group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor">
                                                        <i
                                                            class="icofont-clock-time text-primaryColor pr-1 group-hover:text-whiteColor dark:hover:text-whiteColor"></i>
                                                        <span class="pr-2">10.00Am - 11.00 am</span>
                                                        <span
                                                            class="text-primaryColor group-hover:text-whiteColor dark:group-hover:text-whiteColor">Mirnsdo
                                                            .H </span><span>- Event Speaker</span>
                                                    </p>
                                                </div>
                                                <h3
                                                    class="text-size-15 md:text-lg lg:text-2xl text-contentColor dark: font-semibold pb-18px group-hover:text-whiteColor dark:text-contentColor-dark dark:group-hover:text-whiteColor">
                                                    <a href="event-details.html"
                                                        class="hover:text-secondaryColor dark:hover:text-secondaryColor">Forging
                                                        relationships between multi to national
                                                        governments and global.
                                                    </a>
                                                </h3>
                                                <p
                                                    class="text-base md:text-sm lg:text-base text-blackColor group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor">
                                                    <a class="hover:text-secondaryColor dark:hover:text-secondaryColor"
                                                        href="home-4.html#">Read More
                                                        <i class="icofont-simple-right"></i>
                                                    </a>
                                                </p>
                                            </div>
                                            <!-- event thumb -->
                                            <div class="flex-shrink-0 flex flex-col items-center md:items-end">
                                                <img src="modules/assets/images/event/event__1.png" alt=""
                                                    class="w-170px">
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



<!-- Instructor Dashboard Footer section instructor_footer  -->
<?php
$this->load->view('dashboard/master_contents/dInstructor_master/instructor_footer');
?>