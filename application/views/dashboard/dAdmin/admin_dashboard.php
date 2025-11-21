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


    <!-- Dashboard Section here start -->

    <section>
        <div class="container-fluid-2">
            <!-- counter -->
            <div
                class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-standard">
                <div class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark" data-aos="fade-up">
                    <h2 class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                        Dashboard
                    </h2>
                </div>

                <!-- counter area -->
                <div class="counter grid grid-cols-1  md:grid-cols-2  lg:grid-cols-3 xl:grid-cols-4 gap-x-30px gap-y-5 pb-5"
                    data-aos="fade-up">

                    <div
                        class="p-5 md:px-10 md:py-50px bg-lightGrey5 dark:bg-whiteColor-dark rounded-lg2 shadow-accordion-dark">
                        <a href="<?php echo base_url('admin_coursework'); ?>" class="flex gap-4">
                            <div>
                                <img src="modules/assets/images/counter/counter__4.png" alt="">
                            </div>
                            <div>
                                <p
                                    class="text-size-34 leading-[1.1] text-blackColor font-bold font-hind dark:text-blackColor-dark">
                                    <span data-countup-number="120">120</span><span>,000+</span>
                                </p>
                                <p class="text-blackColor font-medium leading-[18px] dark:text-blackColor-dark">
                                    Total Earning
                                </p>
                            </div>
                        </a>
                    </div>
                    <div
                        class="p-5 md:px-10 md:py-50px bg-lightGrey5 dark:bg-whiteColor-dark rounded-lg2 shadow-accordion-dark">
                        <a href="<?php echo base_url('admin_coursework'); ?>" class="flex gap-4">
                            <div>
                                <img src="modules/assets/images/counter/counter__1.png" alt="">
                            </div>
                            <div>
                                <p
                                    class="text-size-34 leading-[1.1] text-blackColor font-bold font-hind dark:text-blackColor-dark">
                                    <span data-countup-number="27">27</span><span>+</span>
                                </p>
                                <p class="text-blackColor font-medium leading-[18px] dark:text-blackColor-dark">
                                    Enrolled Courses
                                </p>
                            </div>
                        </a>
                    </div>
                    <div
                        class="p-5 md:px-10 md:py-50px bg-lightGrey5 dark:bg-whiteColor-dark rounded-lg2 shadow-accordion-dark">
                        <a href="<?php echo base_url('admin_coursework'); ?>" class="flex gap-4">
                            <div>
                                <img src="modules/assets/images/counter/counter__2.png" alt="">
                            </div>
                            <div>
                                <p
                                    class="text-size-34 leading-[1.1] text-blackColor font-bold font-hind dark:text-blackColor-dark">
                                    <span data-countup-number="8">8</span><span>+</span>
                                </p>
                                <p class="text-blackColor font-medium leading-[18px] dark:text-blackColor-dark">
                                    Active Courses
                                </p>
                            </div>
                        </a>
                    </div>
                    <div
                        class="p-5 md:px-10 md:py-50px bg-lightGrey5 dark:bg-whiteColor-dark rounded-lg2 shadow-accordion-dark">
                        <a href="<?php echo base_url('admin_coursework'); ?>" class="flex gap-4">
                            <div>
                                <img src="modules/assets/images/counter/counter__3.png" alt="">
                            </div>
                            <div>
                                <p
                                    class="text-size-34 leading-[1.1] text-blackColor font-bold font-hind dark:text-blackColor-dark">
                                    <span data-countup-number="5">5</span><span>k</span>
                                </p>
                                <p class="text-blackColor font-medium leading-[18px] dark:text-blackColor-dark">
                                    Complete Courses
                                </p>
                            </div>
                        </a>
                    </div>
                    <div
                        class="p-5 md:px-10 md:py-50px bg-lightGrey5 dark:bg-whiteColor-dark rounded-lg2 shadow-accordion-dark">
                        <a href="<?php echo base_url('admin_coursework'); ?>" class="flex gap-4">
                            <div>
                                <img src="modules/assets/images/counter/counter__4.png" alt="">
                            </div>
                            <div>
                                <p
                                    class="text-size-34 leading-[1.1] text-blackColor font-bold font-hind dark:text-blackColor-dark">
                                    <span data-countup-number="14">14</span><span>+</span>
                                </p>
                                <p class="text-blackColor font-medium leading-[18px] dark:text-blackColor-dark">
                                    Total Courses
                                </p>
                            </div>
                        </a>
                    </div>
                    <div
                        class="p-5 md:px-10 md:py-50px bg-lightGrey5 dark:bg-whiteColor-dark rounded-lg2 shadow-accordion-dark">
                        <a href="<?php echo base_url('admin_coursework'); ?>" class="flex gap-4">
                            <div>
                                <img src="modules/assets/images/counter/counter__3.png" alt="">
                            </div>
                            <div>
                                <p
                                    class="text-size-34 leading-[1.1] text-blackColor font-bold font-hind dark:text-blackColor-dark">
                                    <span data-countup-number="10">10</span><span>k</span>
                                </p>
                                <p class="text-blackColor font-medium leading-[18px] dark:text-blackColor-dark">
                                    Total Students
                                </p>
                            </div>
                        </a>
                    </div>
                    <div
                        class="p-5 md:px-10 md:py-50px bg-lightGrey5 dark:bg-whiteColor-dark rounded-lg2 shadow-accordion-dark">
                        <a href="<?php echo base_url('admin_coursework'); ?>" class="flex gap-4">
                            <div>
                                <img src="modules/assets/images/counter/counter__4.png" alt="">
                            </div>
                            <div>
                                <p
                                    class="text-size-34 leading-[1.1] text-blackColor font-bold font-hind dark:text-blackColor-dark">
                                    <span data-countup-number="30">30</span><span>,000+</span>
                                </p>
                                <p class="text-blackColor font-medium leading-[18px] dark:text-blackColor-dark">
                                    Total Earning
                                </p>
                            </div>
                        </a>
                    </div>
                    <div
                        class="p-5 md:px-10 md:py-50px bg-lightGrey5 dark:bg-whiteColor-dark rounded-lg2 shadow-accordion-dark">
                        <a href="<?php echo base_url('admin_coursework'); ?>" class="flex gap-4">
                            <div>
                                <img src="modules/assets/images/counter/counter__1.png" alt="">
                            </div>
                            <div>
                                <p
                                    class="text-size-34 leading-[1.1] text-blackColor font-bold font-hind dark:text-blackColor-dark">
                                    <span data-countup-number="12">12</span><span>+</span>
                                </p>
                                <p class="text-blackColor font-medium leading-[18px] dark:text-blackColor-dark">
                                    Enrolled Courses
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Total Feedbacks -->
            <div
                class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-standard max-h-137.5 overflow-auto">
                <div class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark flex items-center justify-between gap-2 flex-wrap"
                    data-aos="fade-up">
                    <h2 class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                        Total Feedbacks
                    </h2>
                    <a href="../../course.html"
                        class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor leading-1.8">See
                        More...</a>
                </div>
                <div class="overflow-auto" data-aos="fade-up">
                    <table class="w-full text-left text-nowrap">
                        <thead
                            class="text-sm md:text-base text-blackColor dark:text-blackColor-dark bg-lightGrey5 dark:bg-whiteColor-dark leading-1.8 md:leading-1.8">
                            <tr>
                                <th class="px-5px py-10px md:px-5">Course Name</th>
                                <th class="px-5px py-10px md:px-5">Enrolled</th>
                                <th class="px-5px py-10px md:px-5">Rating</th>
                            </tr>
                        </thead>
                        <tbody
                            class="text-size-13 md:text-base text-contentColor dark:text-contentColor-dark font-normal">
                            <tr class="leading-1.8 md:leading-1.8">
                                <th class="px-5px py-10px md:px-5 font-normal">
                                    <p>Javascript</p>
                                </th>
                                <td class="px-5px py-10px md:px-5">
                                    <p>1100</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <div class="text-primaryColor">
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-star w-14px inline-block">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg>
                                    </div>
                                </td>
                            </tr>
                            <tr class="leading-1.8 md:leading-1.8 bg-lightGrey5 dark:bg-whiteColor-dark">
                                <th class="px-5px py-10px md:px-5 font-normal">
                                    <p>PHP</p>
                                </th>
                                <td class="px-5px py-10px md:px-5">
                                    <p>700</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <div class="text-primaryColor">
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-star w-14px inline-block">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg>
                                    </div>
                                </td>
                            </tr>
                            <tr class="leading-1.8 md:leading-1.8">
                                <th class="px-5px py-10px md:px-5 font-normal">
                                    <p>HTML</p>
                                </th>
                                <td class="px-5px py-10px md:px-5">
                                    <p>1350</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <div class="text-primaryColor">
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-star w-14px inline-block">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg>
                                    </div>
                                </td>
                            </tr>
                            <tr class="leading-1.8 md:leading-1.8 bg-lightGrey5 dark:bg-whiteColor-dark">
                                <th class="px-5px py-10px md:px-5 font-normal">
                                    <p>Graphic</p>
                                </th>
                                <td class="px-5px py-10px md:px-5">
                                    <p>1266</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <div class="text-primaryColor">
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-star w-14px inline-block">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div
                class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-standard">
                <!-- heading -->
                <div class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark" data-aos="fade-up">
                    <h2 class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                        Order History
                    </h2>
                </div>

                <!-- main content -->
                <div class="overflow-auto">
                    <table class="w-full text-left" data-aos="fade-up">
                        <thead
                            class="text-sm md:text-base text-blackColor dark:text-blackColor-dark bg-lightGrey5 dark:bg-whiteColor-dark leading-1.8 md:leading-1.8">
                            <tr>
                                <th class="px-5px py-10px md:px-5">Order ID</th>
                                <th class="px-5px py-10px md:px-5">Course Name</th>
                                <th class="px-5px py-10px md:px-5">Date</th>
                                <th class="px-5px py-10px md:px-5">Price</th>
                                <th class="px-5px py-10px md:px-5">Status</th>
                            </tr>
                        </thead>
                        <tbody
                            class="text-size-13 md:text-base text-contentColor dark:text-contentColor-dark font-normal">
                            <tr class="leading-1.8 md:leading-1.8">
                                <th class="px-5px py-10px md:px-5 font-normal text-wrap">
                                    <p class="text-blackColor dark:text-blackColor-dark">
                                        #5478
                                    </p>
                                </th>
                                <td class="px-5px py-10px md:px-5">
                                    <p>App Development</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p>January 27, 2024</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p>$100.99</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p class="text-xs">
                                        <span
                                            class="h-22px inline-block px-7px bg-greencolor2 leading-22px font-bold text-whiteColor rounded-md">
                                            Success</span>
                                    </p>
                                </td>
                            </tr>
                            <tr class="leading-1.8 md:leading-1.8 bg-lightGrey5 dark:bg-whiteColor-dark">
                                <th class="px-5px py-10px md:px-5 font-normal text-wrap">
                                    <p class="text-blackColor dark:text-blackColor-dark">
                                        #4585
                                    </p>
                                </th>
                                <td class="px-5px py-10px md:px-5">
                                    <p>Graphic</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p>May 27, 2024</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p>$200.99</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p class="text-xs">
                                        <span
                                            class="h-22px inline-block px-7px bg-primaryColor leading-22px font-bold text-whiteColor rounded-md">
                                            Processing</span>
                                    </p>
                                </td>
                            </tr>

                            <tr class="leading-1.8 md:leading-1.8">
                                <th class="px-5px py-10px md:px-5 font-normal text-wrap">
                                    <p class="text-blackColor dark:text-blackColor-dark">
                                        #9656
                                    </p>
                                </th>
                                <td class="px-5px py-10px md:px-5">
                                    <p>App Development</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p>January 27, 2024</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p>$100.99</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p class="text-xs">
                                        <span
                                            class="h-22px inline-block px-7px bg-greencolor2 leading-22px font-bold text-whiteColor rounded-md">
                                            On Hold</span>
                                    </p>
                                </td>
                            </tr>
                            <tr class="leading-1.8 md:leading-1.8 bg-lightGrey5 dark:bg-whiteColor-dark">
                                <th class="px-5px py-10px md:px-5 font-normal text-wrap">
                                    <p class="text-blackColor dark:text-blackColor-dark">
                                        #4585
                                    </p>
                                </th>
                                <td class="px-5px py-10px md:px-5">
                                    <p>Graphic</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p>May 27, 2024</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p>$200.99</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p class="text-xs">
                                        <span
                                            class="h-22px inline-block px-7px bg-primaryColor leading-22px font-bold text-whiteColor rounded-md">
                                            Canceled</span>
                                    </p>
                                </td>
                            </tr>

                            <tr class="leading-1.8 md:leading-1.8">
                                <th class="px-5px py-10px md:px-5 font-normal text-wrap">
                                    <p class="text-blackColor dark:text-blackColor-dark">
                                        #9656
                                    </p>
                                </th>
                                <td class="px-5px py-10px md:px-5">
                                    <p>App Development</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p>January 27, 2024</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p>$100.99</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p class="text-xs">
                                        <span
                                            class="h-22px inline-block px-7px bg-greencolor2 leading-22px font-bold text-whiteColor rounded-md">
                                            On Hold</span>
                                    </p>
                                </td>
                            </tr>
                            <tr class="leading-1.8 md:leading-1.8 bg-lightGrey5 dark:bg-whiteColor-dark">
                                <th class="px-5px py-10px md:px-5 font-normal text-wrap">
                                    <p class="text-blackColor dark:text-blackColor-dark">
                                        #4585
                                    </p>
                                </th>
                                <td class="px-5px py-10px md:px-5">
                                    <p>Graphic</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p>May 27, 2024</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p>$200.99</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p class="text-xs">
                                        <span
                                            class="h-22px inline-block px-7px bg-primaryColor leading-22px font-bold text-whiteColor rounded-md">
                                            Canceled</span>
                                    </p>
                                </td>
                            </tr>

                            <tr class="leading-1.8 md:leading-1.8">
                                <th class="px-5px py-10px md:px-5 font-normal text-wrap">
                                    <p class="text-blackColor dark:text-blackColor-dark">
                                        #9656
                                    </p>
                                </th>
                                <td class="px-5px py-10px md:px-5">
                                    <p>App Development</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p>January 27, 2024</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p>$100.99</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p class="text-xs">
                                        <span
                                            class="h-22px inline-block px-7px bg-greencolor2 leading-22px font-bold text-whiteColor rounded-md">
                                            On Hold</span>
                                    </p>
                                </td>
                            </tr>
                            <tr class="leading-1.8 md:leading-1.8 bg-lightGrey5 dark:bg-whiteColor-dark">
                                <th class="px-5px py-10px md:px-5 font-normal text-wrap">
                                    <p class="text-blackColor dark:text-blackColor-dark">
                                        #4585
                                    </p>
                                </th>
                                <td class="px-5px py-10px md:px-5">
                                    <p>Graphic</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p>May 27, 2024</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p>$200.99</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p class="text-xs">
                                        <span
                                            class="h-22px inline-block px-7px bg-primaryColor leading-22px font-bold text-whiteColor rounded-md">
                                            Canceled</span>
                                    </p>
                                </td>
                            </tr>

                            <tr class="leading-1.8 md:leading-1.8">
                                <th class="px-5px py-10px md:px-5 font-normal text-wrap">
                                    <p class="text-blackColor dark:text-blackColor-dark">
                                        #5478
                                    </p>
                                </th>
                                <td class="px-5px py-10px md:px-5">
                                    <p>App Development</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p>January 27, 2024</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p>$100.99</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p class="text-xs">
                                        <span
                                            class="h-22px inline-block px-7px bg-greencolor2 leading-22px font-bold text-whiteColor rounded-md">
                                            Success</span>
                                    </p>
                                </td>
                            </tr>
                            <tr class="leading-1.8 md:leading-1.8 bg-lightGrey5 dark:bg-whiteColor-dark">
                                <th class="px-5px py-10px md:px-5 font-normal text-wrap">
                                    <p class="text-blackColor dark:text-blackColor-dark">
                                        #4585
                                    </p>
                                </th>
                                <td class="px-5px py-10px md:px-5">
                                    <p>Graphic</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p>May 27, 2024</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p>$200.99</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p class="text-xs">
                                        <span
                                            class="h-22px inline-block px-7px bg-primaryColor leading-22px font-bold text-whiteColor rounded-md">
                                            Processing</span>
                                    </p>
                                </td>
                            </tr>

                            <tr class="leading-1.8 md:leading-1.8">
                                <th class="px-5px py-10px md:px-5 font-normal text-wrap">
                                    <p class="text-blackColor dark:text-blackColor-dark">
                                        #9656
                                    </p>
                                </th>
                                <td class="px-5px py-10px md:px-5">
                                    <p>App Development</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p>January 27, 2024</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p>$100.99</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p class="text-xs">
                                        <span
                                            class="h-22px inline-block px-7px bg-greencolor2 leading-22px font-bold text-whiteColor rounded-md">
                                            On Hold</span>
                                    </p>
                                </td>
                            </tr>
                            <tr class="leading-1.8 md:leading-1.8 bg-lightGrey5 dark:bg-whiteColor-dark">
                                <th class="px-5px py-10px md:px-5 font-normal text-wrap">
                                    <p class="text-blackColor dark:text-blackColor-dark">
                                        #4585
                                    </p>
                                </th>
                                <td class="px-5px py-10px md:px-5">
                                    <p>Graphic</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p>May 27, 2024</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p>$200.99</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p class="text-xs">
                                        <span
                                            class="h-22px inline-block px-7px bg-primaryColor leading-22px font-bold text-whiteColor rounded-md">
                                            Canceled</span>
                                    </p>
                                </td>
                            </tr>

                            <tr class="leading-1.8 md:leading-1.8">
                                <th class="px-5px py-10px md:px-5 font-normal text-wrap">
                                    <p class="text-blackColor dark:text-blackColor-dark">
                                        #9656
                                    </p>
                                </th>
                                <td class="px-5px py-10px md:px-5">
                                    <p>App Development</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p>January 27, 2024</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p>$100.99</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p class="text-xs">
                                        <span
                                            class="h-22px inline-block px-7px bg-greencolor2 leading-22px font-bold text-whiteColor rounded-md">
                                            On Hold</span>
                                    </p>
                                </td>
                            </tr>
                            <tr class="leading-1.8 md:leading-1.8 bg-lightGrey5 dark:bg-whiteColor-dark">
                                <th class="px-5px py-10px md:px-5 font-normal text-wrap">
                                    <p class="text-blackColor dark:text-blackColor-dark">
                                        #4585
                                    </p>
                                </th>
                                <td class="px-5px py-10px md:px-5">
                                    <p>Graphic</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p>May 27, 2024</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p>$200.99</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p class="text-xs">
                                        <span
                                            class="h-22px inline-block px-7px bg-primaryColor leading-22px font-bold text-whiteColor rounded-md">
                                            Canceled</span>
                                    </p>
                                </td>
                            </tr>

                            <tr class="leading-1.8 md:leading-1.8">
                                <th class="px-5px py-10px md:px-5 font-normal text-wrap">
                                    <p class="text-blackColor dark:text-blackColor-dark">
                                        #9656
                                    </p>
                                </th>
                                <td class="px-5px py-10px md:px-5">
                                    <p>App Development</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p>January 27, 2024</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p>$100.99</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p class="text-xs">
                                        <span
                                            class="h-22px inline-block px-7px bg-greencolor2 leading-22px font-bold text-whiteColor rounded-md">
                                            On Hold</span>
                                    </p>
                                </td>
                            </tr>
                            <tr class="leading-1.8 md:leading-1.8 bg-lightGrey5 dark:bg-whiteColor-dark">
                                <th class="px-5px py-10px md:px-5 font-normal text-wrap">
                                    <p class="text-blackColor dark:text-blackColor-dark">
                                        #4585
                                    </p>
                                </th>
                                <td class="px-5px py-10px md:px-5">
                                    <p>Graphic</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p>May 27, 2024</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p>$200.99</p>
                                </td>
                                <td class="px-5px py-10px md:px-5">
                                    <p class="text-xs">
                                        <span
                                            class="h-22px inline-block px-7px bg-primaryColor leading-22px font-bold text-whiteColor rounded-md">
                                            Canceled</span>
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>




        </div>
    </section>




</main>



<!-- Admin Dashboard Footer section admin_footer  -->
<?php
$this->load->view('dashboard/master_contents/dAdmin_master/admin_footer');
?>