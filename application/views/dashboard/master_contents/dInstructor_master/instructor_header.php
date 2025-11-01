

<?php

if (!$this->session->userdata('activeInstructor')) {
    redirect(base_url('instructor_login'));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructor Dashboard | Edurock - Education LMS Template</title>
    <link rel="shortcut icon" type="image/x-icon" href="modules/assets/images/favicon.ico">
    <!-- link stylesheet -->
    <link rel="stylesheet" href="modules/assets/css/icofont.min.css">
    <link rel="stylesheet" href="modules/assets/css/popup.css">

    <link rel="stylesheet" href="modules/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="modules/assets/css/video-modal.css">
    <link rel="stylesheet" href="modules/assets/css/aos.css">
    <link rel="stylesheet" href="modules/assets/css/style.css">
</head>

<body class="relative font-inter font-normal text-base leading-[1.8] bg-bodyBg dark:bg-bodyBg-dark">

    <!-- theme fixed shadow -->
    <div>
        <div class="fixed-shadow left-[-250px]"></div>
        <div class="fixed-shadow right-[-250px]"></div>
    </div>

    <!-- theme controller -->
    <div class="fixed top-[100px] 2xl:top-[300px] transition-all duration-300 right-[-50px] hover:right-0 z-xl">
        <button
            class="theme-controller w-90px h-10 bg-primaryColor dark:bg-whiteColor-dark rounded-l-lg2 text-whiteColor px-10px flex items-center dark:shadow-theme-controller">
            <!-- dark -->
            <svg xmlns="http://www.w3.org/2000/svg" class="mr-10px w-5 block dark:hidden" viewBox="0 0 512 512">
                <path
                    d="M160 136c0-30.62 4.51-61.61 16-88C99.57 81.27 48 159.32 48 248c0 119.29 96.71 216 216 216 88.68 0 166.73-51.57 200-128-26.39 11.49-57.38 16-88 16-119.29 0-216-96.71-216-216z"
                    fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32">
                </path>
            </svg>
            <span class="text-base block dark:hidden">Dark</span>
            <!-- light -->
            <svg xmlns="http://www.w3.org/2000/svg" class="hidden mr-10px w-5 dark:block" viewBox="0 0 512 512">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32"
                    d="M256 48v48M256 416v48M403.08 108.92l-33.94 33.94M142.86 369.14l-33.94 33.94M464 256h-48M96 256H48M403.08 403.08l-33.94-33.94M142.86 142.86l-33.94-33.94">
                </path>
                <circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-miterlimit="10" stroke-width="32"></circle>
            </svg>
            <span class="text-base hidden dark:block">Light</span>
        </button>
    </div>
    <!-- scroll up button -->
    <div>
        <button
            class="scroll-up w-50px h-50px leading-50px text-center text-primaryColor bg-white hover:text-whiteColor hover:bg-primaryColor rounded-full fixed right-5 bottom-[60px] shadow-scroll-up z-medium text-xl dark:text-whiteColor dark:bg-primaryColor dark:hover:text-whiteColor-dark hidden">
            <i class="icofont-rounded-up"></i>
        </button>
    </div>
    <!--======= Header area start =======-->

    <header>
        <!-- header top start -->

        <!-- header top end -->

        <!-- navbar start -->
        <div class="transition-all duration-500 sticky-header z-medium dark:bg-whiteColor-dark">
            <nav>
                <div
                    class="py-15px lg:py-0 px-15px lg:container 3xl:container-secondary-lg 4xl:container mx-auto relative">
                    <div class="grid grid-cols-2 lg:grid-cols-12 items-center gap-15px">
                        <!-- navbar left -->
                        <div class="lg:col-start-1 lg:col-span-2">
                            <a href="<?php echo site_url('developer_dashboard'); ?>" class="block"><img
                                    src="modules/assets/images/logo/logo_1.png" alt="Logo"
                                    class="w-logo-sm lg:w-auto py-2"></a>
                        </div>
                        <!-- Main menu -->

                        <!-- navbar right -->
                        <div class="lg:col-start-10 lg:col-span-3">
                            <ul class="relative nav-list flex justify-end items-center">
                                <li class="px-5 lg:px-10px 2xl:px-5 lg:py-4 2xl:py-26px 3xl:py-9 group">
                                    <a href="pages/ecommerce/cart.html" class="relative block"><i
                                            class="icofont-cart-alt text-2xl text-blackColor group-hover:text-secondaryColor transition-all duration-300 dark:text-blackColor-dark"></i>
                                        <span
                                            class="absolute -top-1 2xl:-top-[5px] -right-[10px] lg:right-3/4 2xl:-right-[10px] text-[10px] font-medium text-white dark:text-whiteColor-dark bg-secondaryColor px-1 py-[2px] leading-1 rounded-full z-50 block">3</span></a>
                                    <!-- dropdown menu -->
                                    <div class="dropdown absolute top-full right-0 lg:right-8 z-medium hidden opacity-0"
                                        style="transition: 0.3s">
                                        <div
                                            class="shadow-dropdown-secodary max-w-dropdown3 w-2000 rounded-standard p-5 bg-white dark:bg-whiteColor-dark">
                                            <ul
                                                class="flex flex-col gap-y-5 pb-5 mb-30px border-b border-borderColor dark:border-borderColor-dark">
                                                <li class="relative flex gap-x-15px items-center">
                                                    <a href="course-details.html"><img
                                                            src="modules/assets/images/grid/cart1.jpg" alt="photo"
                                                            class="w-card-img py-[3px]"></a>
                                                    <div>
                                                        <a href="course-details.html"
                                                            class="text-sm text-darkblack hover:text-secondaryColor leading-5 block pb-2 capitalize dark:text-darkblack-dark dark:hover:text-secondaryColor">web
                                                            dictionary</a>
                                                        <p
                                                            class="text-sm text-darkblack leading-5 block pb-5px dark:text-darkblack-dark">
                                                            1
                                                            x
                                                            <span class="text-secondaryColor">$
                                                                80.00</span>
                                                        </p>
                                                    </div>

                                                    <button
                                                        class="absolute block top-0 right-0 text-base text-contentColor leading-1 hover:text-secondaryColor dark:text-contentColor-dark dark:hover:text-secondaryColor">
                                                        <i class="icofont-close-line"></i>
                                                    </button>
                                                </li>
                                                <li class="relative flex gap-x-15px items-center">
                                                    <a href="course-details.html"><img
                                                            src="modules/assets/images/grid/cart2.jpg" alt="photo"
                                                            class="w-card-img py-[3px]"></a>
                                                    <div>
                                                        <a href="course-details.html"
                                                            class="text-sm text-darkblack hover:text-secondaryColor leading-5 block pb-2 capitalize dark:text-darkblack-dark dark:hover:text-secondaryColor">Design
                                                            Minois</a>
                                                        <p
                                                            class="text-sm text-darkblack leading-5 block pb-5px dark:text-darkblack-dark">
                                                            1
                                                            x
                                                            <span class="text-secondaryColor">$
                                                                60.00</span>
                                                        </p>
                                                    </div>

                                                    <button
                                                        class="absolute block top-0 right-0 text-base text-contentColor leading-1 hover:text-secondaryColor dark:text-contentColor-dark dark:hover:text-secondaryColor">
                                                        <i class="icofont-close-line"></i>
                                                    </button>
                                                </li>
                                                <li class="relative flex gap-x-15px items-center">
                                                    <a href="course-details.html"><img
                                                            src="modules/assets/images/grid/cart3.jpg" alt="photo"
                                                            class="w-card-img py-[3px]"></a>
                                                    <div>
                                                        <a href="course-details.html"
                                                            class="text-sm text-darkblack hover:text-secondaryColor leading-5 block pb-2 capitalize dark:text-darkblack-dark dark:hover:text-secondaryColor">Crash
                                                            Course</a>
                                                        <p
                                                            class="text-sm text-darkblack leading-5 block pb-5px dark:text-darkblack-dark">
                                                            1
                                                            x
                                                            <span class="text-secondaryColor">$
                                                                70.00</span>
                                                        </p>
                                                    </div>

                                                    <button
                                                        class="absolute block top-0 right-0 text-base text-contentColor leading-1 hover:text-secondaryColor dark:text-contentColor-dark dark:hover:text-secondaryColor">
                                                        <i class="icofont-close-line"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                            <!-- total price -->


                                        </div>
                                    </div>
                                </li>



                                <!-- tabs account here for responsive -->
                                <li class="px-5 lg:px-10px 2xl:px-5 lg:py-4 2xl:py-26px 3xl:py-9 group">
                                    <a href="#waitPending.html"
                                        class="text-size-12 2xl:text-size-15 px-15px py-2 text-blackColor hover:text-whiteColor bg-whiteColor block hover:bg-primaryColor border border-borderColor1 rounded-standard font-semibold mr-[7px] 2xl:mr-15px dark:text-blackColor-dark dark:bg-whiteColor-dark dark:hover:bg-primaryColor dark:hover:text-whiteColor dark:hover:border-primaryColor"><i
                                            class="icofont-user-alt-5"></i></a>
                                    <div class="dropdown absolute top-full right-0 lg:right-8 z-medium hidden opacity-0"
                                        style="transition: 0.3s">
                                        <div
                                            class="shadow-dropdown-secodary max-w-dropdown3 w-2000 rounded-standard p-5 bg-white dark:bg-whiteColor-dark">
                                            <!-- navigation menu -->

                                            <h5
                                                class="text-sm leading-1 font-semibold uppercase text-contentColor dark:text-contentColor-dark bg-lightGrey5 dark:bg-whiteColor-dark p-10px pb-7px mt-5 mb-10px">
                                                INSTRUCTOR DASHBOARD
                                            </h5>
                                            <ul>
                                                <li
                                                    class="py-10px border-b border-borderColor dark:border-borderColor-dark">
                                                    <a href="<?php echo base_url('instructor_dashboard'); ?>"
                                                        class="text-primaryColor hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-home">
                                                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z">
                                                            </path>
                                                            <polyline points="9 22 9 12 15 12 15 22">
                                                            </polyline>
                                                        </svg>
                                                        Dashboard</a>
                                                </li>
                                                <li
                                                    class="py-10px border-b border-borderColor dark:border-borderColor-dark">
                                                    <a href="<?php echo base_url('instructor_profile'); ?>"
                                                        class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-user">
                                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2">
                                                            </path>
                                                            <circle cx="12" cy="7" r="4">
                                                            </circle>
                                                        </svg>
                                                        My
                                                        Profile</a>
                                                </li>
                                                <li
                                                    class="py-10px border-b border-borderColor dark:border-borderColor-dark flex justify-between items-center">
                                                    <a href="<?php echo base_url('instructor_message'); ?>"
                                                        class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-book-open">
                                                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z">
                                                            </path>
                                                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z">
                                                            </path>
                                                        </svg>
                                                        Message
                                                    </a>
                                                    <span
                                                        class="text-size-10 font-medium text-whiteColor px-9px bg-primaryColor leading-14px rounded-2xl">12</span>
                                                </li>
                                                <li
                                                    class="py-10px border-b border-borderColor dark:border-borderColor-dark">
                                                    <a href="<?php echo base_url('instructor_message'); ?>"
                                                        class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-bookmark">
                                                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z">
                                                            </path>
                                                        </svg>
                                                        Courses</a>
                                                </li>
                                                <li
                                                    class="py-10px border-b border-borderColor dark:border-borderColor-dark">
                                                    <a href="<?php echo base_url('instructor_message'); ?>"
                                                        class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-star">
                                                            <polygon
                                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                            </polygon>
                                                        </svg>
                                                        Reviews</a>
                                                </li>
                                                <li
                                                    class="py-10px border-b border-borderColor dark:border-borderColor-dark">
                                                    <a href="<?php echo base_url('instructor_message'); ?>"
                                                        class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-help-circle">
                                                            <circle cx="12" cy="12" r="10">
                                                            </circle>
                                                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3">
                                                            </path>
                                                            <line x1="12" y1="17" x2="12.01" y2="17">
                                                            </line>
                                                        </svg>
                                                        Quiz
                                                        Attempts</a>
                                                </li>
                                            </ul>
                                            <!-- user -->
                                            <h5
                                                class="text-sm leading-1 font-semibold uppercase text-contentColor dark:text-contentColor-dark bg-lightGrey5 dark:bg-whiteColor-dark p-10px pb-7px mt-5 mb-10px">
                                                USER
                                            </h5>
                                            <ul>
                                                <li
                                                    class="py-10px border-b border-borderColor dark:border-borderColor-dark">
                                                    <a href="<?php echo base_url('instructor_setting'); ?>"
                                                        class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-settings">
                                                            <circle cx="12" cy="12" r="3">
                                                            </circle>
                                                            <path
                                                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                                            </path>
                                                        </svg>
                                                        Settings</a>
                                                </li>

                                                <li
                                                    class="py-10px border-b border-borderColor dark:border-borderColor-dark">
                                                    <a href="<?php echo base_url('logoutInstructor'); ?>"
                                                        class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8 flex gap-3 text-nowrap"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-volume-1">
                                                            <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5">
                                                            </polygon>
                                                            <path d="M15.54 8.46a5 5 0 0 1 0 7.07">
                                                            </path>
                                                        </svg>
                                                        Logout</a>
                                                </li>
                                            </ul>



                                        </div>
                                    </div>
                                </li>





                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- navbar end -->





    </header>