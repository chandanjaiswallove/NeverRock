<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home 4 | Edurock - Education LMS Template</title>
  <link rel="shortcut icon" type="image/x-icon" href="modules/assets/images/favicon.ico">

  <!-- link stylesheet -->
  <link rel="stylesheet" href="modules/assets/css/icofont.min.css">
  <link rel="stylesheet" href="modules/assets/css/video-modal.css">
  <link rel="stylesheet" href="modules/assets/css/swiper-bundle.min.css">
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
          fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path>
      </svg>
      <span class="text-base block dark:hidden">Dark</span>
      <!-- light -->
      <svg xmlns="http://www.w3.org/2000/svg" class="hidden mr-10px w-5 dark:block" viewBox="0 0 512 512">
        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32"
          d="M256 48v48M256 416v48M403.08 108.92l-33.94 33.94M142.86 369.14l-33.94 33.94M464 256h-48M96 256H48M403.08 403.08l-33.94-33.94M142.86 142.86l-33.94-33.94">
        </path>
        <circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
          stroke-width="32"></circle>
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
    <div class="bg-blackColor2 dark:bg-lightGrey10-dark hidden lg:block">
      <div
        class="container 3xl:container-secondary-lg 4xl:container mx-auto text-whiteColor text-size-12 xl:text-sm py-5px xl:py-9px">
        <div class="flex justify-between items-center">
          <div>
            <p>Call Us: +1 800 123 456 789 - Mail Us: Itcroc@mail.com</p>
          </div>
          <div class="flex gap-37px items-center">
            <div>
              <p>
                <i class="icofont-location-pin text-primaryColor text-size-15 mr-5px"></i>
                <span>684 West College St. Sun City, USA</span>
              </p>
            </div>
            <div>
              <!-- header social list -->
              <ul class="flex gap-13px text-size-15">
                <li>
                  <a class="hover:text-primaryColor" href="home-9.html#"><i class="icofont-facebook"></i></a>
                </li>
                <li>
                  <a class="hover:text-primaryColor" href="home-9.html#"><i class="icofont-twitter"></i></a>
                </li>
                <li>
                  <a class="hover:text-primaryColor" href="home-9.html#"><i class="icofont-instagram"></i></a>
                </li>
                <li>
                  <a class="hover:text-primaryColor" href="home-9.html#"><i class="icofont-youtube-play"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- header top end -->

    <!-- navbar start -->
    <div class="transition-all duration-500 sticky-header z-medium dark:bg-whiteColor-dark">
      <nav>
        <div class="py-15px lg:py-0 px-15px lg:container 3xl:container-secondary-lg 4xl:container mx-auto relative">
          <div class="grid grid-cols-2 lg:grid-cols-12 items-center gap-15px">
            <!-- navbar left -->
            <div class="lg:col-start-1 lg:col-span-2">
              <a href="<?php echo site_url('welcome'); ?>" class="block"><img src="modules/assets/images/logo/logo_1.png" alt="Logo"
                  class="w-logo-sm lg:w-auto py-2"></a>
            </div>
            <!-- Main menu -->
            <div class="hidden lg:block lg:col-start-3 lg:col-span-7">
              <ul class="nav-list flex justify-center">
                <!-- first menu -->
                <li class="nav-item group">
                  <a href="<?php echo site_url('welcome'); ?>"
                    class="px-5 lg:px-10px 2xl:px-15px 3xl:px-5 py-10 lg:py-5 2xl:py-30px 3xl:py-10 leading-sm 2xl:leading-lg text-base lg:text-sm 2xl:text-base font-semibold block group-hover:text-primaryColor dark:text-whiteColor">
                    Home
                  </a>
                </li>

                <!-- secont menu -->
                <li class="nav-item group relative">
                  <a href="#"
                    class="px-5 lg:px-10px 2xl:px-15px 3xl:px-5 py-10 lg:py-5 2xl:py-30px 3xl:py-10 leading-sm 2xl:leading-lg text-base lg:text-sm 2xl:text-base font-semibold block group-hover:text-primaryColor dark:text-whiteColor">
                    About us
                    <i class="icofont-rounded-down"></i>
                  </a>
                  <!-- dropdown menu -->
                  <div class="dropdown absolute left-0 translate-y-10 z-medium hidden opacity-0"
                    style="transition: 0.3s">
                    <div
                      class="shadow-dropdown max-w-dropdown2 w-2000 py-14px rounded-standard bg-white dark:bg-whiteColor-dark">
                      <ul>
                        <!-- <li>
                          <a href="pages/ecommerce/shop.html"
                            class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Principal
                            <span
                              class="text-size-12 font-semibold text-primaryColor bg-whitegrey3 px-15px py-5px rounded">Message</span>
                          </a>
                        </li> -->

                        <li>
                          <a href="<?php echo site_url('principal_message');?> "
                            class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Principal's
                            Message

                          </a>
                        </li>

                        <li>
                          <a href="<?php echo site_url('success_stories');?>"
                            class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Director's
                            Message
                          </a>
                        </li>

                        <li>
                          <a href="<?php echo site_url('instructors');?>"
                            class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Instructors

                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>

                <!-- third menu -->
                <li class="nav-item group relative">
                  <a href="<?php echo site_url('courses_all');?>"
                    class="px-5 lg:px-10px 2xl:px-15px 3xl:px-5 py-10 lg:py-5 2xl:py-30px 3xl:py-10 leading-sm 2xl:leading-lg text-base lg:text-sm 2xl:text-base font-semibold block group-hover:text-primaryColor dark:text-whiteColor">
                    Courses
                  </a>
                </li>

                <!-- fourth menu -->

                <li class="nav-item group relative">
                  <a href="#"
                    class="px-5 lg:px-10px 2xl:px-15px 3xl:px-5 py-10 lg:py-5 2xl:py-30px 3xl:py-10 leading-sm 2xl:leading-lg text-base lg:text-sm 2xl:text-base font-semibold block group-hover:text-primaryColor dark:text-whiteColor">
                    Academics
                    <i class="icofont-rounded-down"></i>
                  </a>
                  <!-- dropdown menu -->
                  <div class="dropdown absolute left-0 translate-y-10 z-medium hidden opacity-0"
                    style="transition: 0.3s">
                    <div
                      class="shadow-dropdown max-w-dropdown2 w-2000 py-14px rounded-standard bg-white dark:bg-whiteColor-dark">
                      <ul>
                        <li>
                          <a href="<?php echo site_url('academics_results');?>"
                            class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Academics
                            Results
                            <!-- <span
                              class="text-size-12 font-semibold text-primaryColor bg-whitegrey3 px-15px py-5px rounded">hot line
                             </span> -->
                          </a>
                        </li>
                        <li>
                          <a href="<?php echo site_url('curriculums');?>"
                            class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Curriculum
                          </a>
                        </li>
                        <li>
                          <a href="<?php echo site_url('gallerys');?>"
                            class="text-sm 2xl:text-base font-semibold text-contentColor border-l-2 border-transparent transition duration-300 hover:border-primaryColor px-25px py-10px hover:bg-whitegrey1 block hover:text-primaryColor leading-sm lg:leading-lg 2xl:leading-lg dark:text-contentColor-dark dark:hover:text-primaryColor dark:hover:bg-whitegrey1-dark">Gallery</a>
                        </li>


                      </ul>
                    </div>
                  </div>
                </li>

                <!-- fifth menu -->
                <li class="nav-item group relative">
                  <a href="<?php echo site_url('our_products');?>"
                    class="px-5 lg:px-10px 2xl:px-15px 3xl:px-5 py-10 lg:py-5 2xl:py-30px 3xl:py-10 leading-sm 2xl:leading-lg text-base lg:text-sm 2xl:text-base font-semibold block group-hover:text-primaryColor dark:text-whiteColor">
                    Product
                  </a>
                </li>

                <!-- Sixth menu -->
                <li class="nav-item group relative">
                  <a href="<?php echo site_url('contact_us');?>"
                    class="px-5 lg:px-10px 2xl:px-15px 3xl:px-5 py-10 lg:py-5 2xl:py-30px 3xl:py-10 leading-sm 2xl:leading-lg text-base lg:text-sm 2xl:text-base font-semibold block group-hover:text-primaryColor dark:text-whiteColor">
                    Contact

                  </a>
                </li>

              </ul>
            </div>
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
                          <a href="course-details.html"><img src="modules/assets/images/grid/cart1.jpg" alt="photo"
                              class="w-card-img py-[3px]"></a>
                          <div>
                            <a href="course-details.html"
                              class="text-sm text-darkblack hover:text-secondaryColor leading-5 block pb-2 capitalize dark:text-darkblack-dark dark:hover:text-secondaryColor">web
                              dictionary</a>
                            <p class="text-sm text-darkblack leading-5 block pb-5px dark:text-darkblack-dark">
                              1 x
                              <span class="text-secondaryColor">$ 80.00</span>
                            </p>
                          </div>

                          <button
                            class="absolute block top-0 right-0 text-base text-contentColor leading-1 hover:text-secondaryColor dark:text-contentColor-dark dark:hover:text-secondaryColor">
                            <i class="icofont-close-line"></i>
                          </button>
                        </li>
                        <li class="relative flex gap-x-15px items-center">
                          <a href="course-details.html"><img src="modules/assets/images/grid/cart2.jpg" alt="photo"
                              class="w-card-img py-[3px]"></a>
                          <div>
                            <a href="course-details.html"
                              class="text-sm text-darkblack hover:text-secondaryColor leading-5 block pb-2 capitalize dark:text-darkblack-dark dark:hover:text-secondaryColor">Design
                              Minois</a>
                            <p class="text-sm text-darkblack leading-5 block pb-5px dark:text-darkblack-dark">
                              1 x
                              <span class="text-secondaryColor">$ 60.00</span>
                            </p>
                          </div>

                          <button
                            class="absolute block top-0 right-0 text-base text-contentColor leading-1 hover:text-secondaryColor dark:text-contentColor-dark dark:hover:text-secondaryColor">
                            <i class="icofont-close-line"></i>
                          </button>
                        </li>
                        <li class="relative flex gap-x-15px items-center">
                          <a href="course-details.html"><img src="modules/assets/images/grid/cart3.jpg" alt="photo"
                              class="w-card-img py-[3px]"></a>
                          <div>
                            <a href="course-details.html"
                              class="text-sm text-darkblack hover:text-secondaryColor leading-5 block pb-2 capitalize dark:text-darkblack-dark dark:hover:text-secondaryColor">Crash
                              Course</a>
                            <p class="text-sm text-darkblack leading-5 block pb-5px dark:text-darkblack-dark">
                              1 x
                              <span class="text-secondaryColor">$ 70.00</span>
                            </p>
                          </div>

                          <button
                            class="absolute block top-0 right-0 text-base text-contentColor leading-1 hover:text-secondaryColor dark:text-contentColor-dark dark:hover:text-secondaryColor">
                            <i class="icofont-close-line"></i>
                          </button>
                        </li>
                      </ul>
                      <!-- total price -->
                      <div>
                        <p class="text-size-17 text-contentColor dark:text-contentColor-dark pb-5 flex justify-between">
                          Total Price:
                          <span class="font-bold text-secondaryColor">$ 210.00</span>
                        </p>
                      </div>

                      <!-- action buttons -->
                      <div class="flex flex-col gap-y-5">
                        <a href="pages/ecommerce/cart.html"
                          class="text-sm font-bold text-contentColor dark:text-contentColor-dark hover:text-whiteColor hover:bg-secondaryColor text-center py-10px border border-secondaryColor">View
                          Cart</a>
                        <a href="pages/ecommerce/checkout.html"
                          class="text-sm font-bold bg-darkblack dark:bg-darkblack-dark text-whiteColor dark:text-whiteColor-dark hover:bg-secondaryColor dark:hover:bg-secondaryColor text-center py-10px">Checkout</a>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="hidden lg:block">
                  <a href="#waitPending.html"
                    class="text-size-12 2xl:text-size-15 px-15px py-2 text-blackColor hover:text-whiteColor bg-whiteColor block hover:bg-primaryColor border border-borderColor1 rounded-standard font-semibold mr-[7px] 2xl:mr-15px dark:text-blackColor-dark dark:bg-whiteColor-dark dark:hover:bg-primaryColor dark:hover:text-whiteColor dark:hover:border-primaryColor"><i
                      class="icofont-user-alt-5"></i></a>
                </li>
                <li class="hidden lg:block">
                  <a href="<?php echo base_url('student_signup'); ?>"
                    class="text-size-12 2xl:text-size-15 text-whiteColor bg-primaryColor block border-primaryColor border hover:text-primaryColor hover:bg-white px-15px py-2 rounded-standard dark:hover:bg-whiteColor-dark dark: dark:hover:text-whiteColor">Join Now
                </a>
                </li>
                <li class="block lg:hidden">
                  <button
                    class="open-mobile-menu text-3xl text-darkdeep1 hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">
                    <i class="icofont-navigation-menu"></i>
                  </button>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <!-- navbar end -->

    <!-- mobile menu -->
    <div
      class="mobile-menu w-mobile-menu-sm md:w-mobile-menu-lg fixed top-0 -right-[280px] md:-right-[330px] transition-all duration-500 w-mobile-menu h-full shadow-dropdown-secodary bg-whiteColor dark:bg-whiteColor-dark z-high block lg:hidden">
      <button
        class="close-mobile-menu text-lg bg-darkdeep1 hover:bg-secondaryColor text-white px-[11px] py-[6px] absolute top-0 right-full hidden">
        <i class="icofont icofont-close-line"></i>
      </button>
      <!-- mobile menu wrapper -->
      <div class="px-5 md:px-30px pt-5 md:pt-10 pb-50px h-full overflow-y-auto">
        <!-- search input  -->
        <div class="pb-10 border-b border-borderColor dark:border-borderColor-dark">
          <form
            class="flex justify-between items-center w-full bg-whitegrey2 dark:bg-whitegrey2-dark px-15px py-[11px]">
            <input type="text" placeholder="Search entire store..."
              class="bg-transparent w-4/5 focus:outline-none text-sm text-darkdeep1 dark:text-blackColor-dark">
            <button
              class="block text-lg text-darkdeep1 hover:text-secondaryColor dark:text-blackColor-dark dark:hover:text-secondaryColor">
              <i class="icofont icofont-search-2"></i>
            </button>
          </form>
        </div>

        <!-- mobile menu accordions -->
        <div class="pt-8 pb-6 border-b border-borderColor dark:border-borderColor-dark">
          <ul class="accordion-container">
            <!-- accordion First Home-->

            <li class="accordion">
              <div class="flex items-center justify-between">
                <a class="leading-1 py-11px text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                  href="<?php echo site_url('welcome'); ?>">HOME</a>

              </div>

            </li>
            <!-- accordion Second About us-->
            <li class="accordion">
              <div class="flex items-center justify-between">
                <a class="leading-1 py-11px text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                  href="#">ABOUT US</a>
                <button class="accordion-controller px-3 py-4">
                  <span class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"></span><span
                    class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-500"></span>
                </button>
              </div>
              <!-- accordion content second -->
              <div class="accordion-content h-0 overflow-hidden transition-all duration-500">
                <div class="content-wrapper">
                  <ul class="accordion-container">
                    <!-- accordion second submenu first -->

                    <li class="accordion">
                      <div class="flex items-center justify-between">
                        <a href="<?php echo site_url('principal_message'); ?>"
                          class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">PRINCIPAL's
                          MESSAGE

                        </a>

                      </div>
                    </li>
                    <!-- accordion second submenu second -->

                    <li class="accordion">
                      <div class="flex items-center justify-between">
                        <a href="<?php echo site_url('success_stories'); ?>"
                          class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">DIRECTOR's
                          MESSAGE
                        </a>
                      </div>
                    </li>
                    <!-- accordion second submenu second -->

                    <li class="accordion">
                      <div class="flex items-center justify-between">
                        <a href="<?php echo site_url('instructors'); ?>"
                          class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">INSTRUCTORS</a>
                        <!-- <button class="accordion-controller px-3 py-4">
                          <span class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"></span><span
                            class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-300"></span>
                        </button> -->
                      </div>
                      <!-- accordion content -->
                      <!-- <div class="accordion-content h-0 overflow-hidden transition-all duration-300">
                        <div class="content-wrapper">
                          <ul>
                            <li>
                              <a href="pages/zoom/zoom-meeting-details-dark.html"
                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Meeting
                                Details (Dark)</a>
                            </li>

                            <li>
                              <a href="login.html"
                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Login</a>
                            </li>
                            <li>
                              <a href="login-dark.html"
                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Login
                                (Dark)</a>
                            </li>
                            <li>
                              <a href="maintenance.html"
                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Maintenance</a>
                            </li>
                            <li>
                              <a href="maintenance-dark.html"
                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Maintenance
                                (Dark)</a>
                            </li>
                            <li>
                              <a href="home-9.html#"
                                class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7px font-light hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">Term
                                & Condition</a>
                            </li>
                          </ul>
                        </div>
                      </div> -->
                    </li>

                    <!-- <li>
                      <a href="#" class="pl-15px pt-3 pb-7px"><img class="w-full"
                          src="modules/assets/images/mega/mega_menu_2.png" alt=""></a>
                    </li> -->
                  </ul>
                </div>
              </div>
            </li>

            <!-- according Third Courses-->
            <li class="accordion">
              <div class="flex items-center justify-between">
                <a class="leading-1 py-11px text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                  href="<?php echo site_url('courses_all'); ?>">COURSES</a>

              </div>
            </li>
            <!-- accordion fourth  Academic-->
            <li class="accordion">
              <div class="flex items-center justify-between">
                <a class="leading-1 py-11px text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                  href="#">ACADEMICS</a>
                <button class="accordion-controller px-3 py-4">
                  <span class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor"></span><span
                    class="w-[10px] h-[1px] bg-darkdeep1 block dark:bg-whiteColor rotate-90 -mt-[1px] transition-all duration-500"></span>
                </button>
              </div>
              <!-- accordion content -->
              <div class="accordion-content h-0 overflow-hidden transition-all duration-500">
                <div class="content-wrapper">
                  <ul class="accordion-container">
                    <li class="accordion">
                      <!-- accordion header -->
                      <div class="flex items-center justify-between">
                        <a href="<?php echo site_url('academics_results'); ?>"
                          class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">
                          ACAMEDICS RESULTS</a>
                      </div>
                      <div class="flex items-center justify-between">
                        <a href="<?php echo site_url('curriculums'); ?>"
                          class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">
                          CURRICULUM</a>
                      </div>

                      <div class="flex items-center justify-between">
                        <a href="<?php echo site_url('gallerys'); ?>"
                          class="leading-1 text-darkdeep1 text-sm pl-15px pt-3 pb-7px font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">
                          GALLERY</a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </li>

            <!-- according Five Product -->
            <li class="accordion">
              <div class="flex items-center justify-between">
                <a class="leading-1 py-11px text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                  href="<?php echo site_url('our_products'); ?>">PRODUCT</a>

              </div>
            </li>
            <!-- accordion header sixth Contact -->

            <li class="accordion">
              <div class="flex items-center justify-between">
                <a class="leading-1 py-11px text-darkdeep1 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                  href="<?php echo site_url('contact_us'); ?>">CONTACT</a>

              </div>
            </li>


          </ul>
        </div>

        <!-- my account accordion -->
        <div>
          <ul class="accordion-container mt-9 mb-30px pb-9 border-b border-borderColor dark:border-borderColor-dark">
            <li class="accordion group">
              <!-- accordion header -->
              <div class="accordion-controller flex items-center justify-between">
                <a class="leading-1 text-darkdeep1 font-medium group-hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"
                  href="#">MY ACCOUNT</a>
                <button class="px-3 py-1">
                  <i
                    class="icofont-thin-down text-size-15 text-darkdeep1 group-hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor"></i>
                </button>
              </div>
              <!-- accordion content -->
              <div class="accordion-content h-0 overflow-hidden transition-all duration-500 shadow-standard">
                <div class="content-wrapper">
                  <ul>
                    <li>
                      <!-- accordion header -->
                      <div class="flex items-center gap-1">
                        <a href="<?php echo site_url('student_login'); ?>"
                          class="leading-1 text-darkdeep1 text-sm pl-30px pt-7 pb-3 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">LOGIN
                        </a>
                        <a href="<?php echo site_url('student_signup'); ?>"
                          class="leading-1 text-darkdeep1 text-sm pl-30px pt-7 pb-3 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">SIGN
                          UP
                        </a>

                      </div>
                    </li>
                    <li>
                      <!-- accordion header -->
                      <div class="flex items-center justify-between">
                        <a href="<?php echo site_url('#waitPending'); ?>"
                          class="leading-1 text-darkdeep1 text-sm pl-30px pt-3 pb-7 font-medium hover:text-secondaryColor dark:text-whiteColor dark:hover:text-secondaryColor">
                          ACCOUNT</a>
                      </div>
                      <!-- accordion content -->
                    </li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <!-- Mobile menu social area -->
        <div>
          <ul class="flex gap-6 items-center mb-5">
            <li>
              <a class="facebook" href="<?php echo site_url('welcome'); ?>"><i
                  class="icofont icofont-facebook text-fb-color dark:text-whiteColor dark:hover:text-secondaryColor"></i></a>
            </li>
            <li>
              <a class="twitter" href="<?php echo site_url('welcome'); ?>"><i
                  class="icofont icofont-twitter text-twiter-color dark:text-whiteColor dark:hover:text-secondaryColor"></i></a>
            </li>
            <li>
              <a class="pinterest" href="<?php echo site_url('welcome'); ?>"><i
                  class="icofont icofont-pinterest dark:text-whiteColor dark:hover:text-secondaryColor"></i></a>
            </li>
            <li>
              <a class="instagram" href="<?php echo site_url('welcome'); ?>"><i
                  class="icofont icofont-instagram dark:text-whiteColor dark:hover:text-secondaryColor"></i></a>
            </li>
            <li>
              <a class="google" href="<?php echo site_url('welcome'); ?>"><i
                  class="icofont icofont-youtube-play dark:text-whiteColor dark:hover:text-secondaryColor"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>