<!-- Student Dashboard Header section student_header  -->
<?php
$this->load->view('dashboard/master_contents/dStudent_master/student_header');
?>


<!-- main body -->
<main class="bg-transparent">
    <!-- Student Dashboard  section student_banner  -->
    <?php
    $this->load->view('dashboard/master_contents/dStudent_master/student_banner');
    ?>
    <!--Setting Password change update section -->
    <section>
        <div class="container-fluid-2">
            <!-- setting area -->
            <div
                class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-standard">
                <!-- heading -->
                <div class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark" data-aos="fade-up">
                    <h2 class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                        MY PROFILE
                    </h2>
                </div>

                <div class="tab">
                    <div class="tab-links flex flex-wrap mb-10px lg:mb-50px rounded gap-10px" data-aos="fade-up">
                        <button
                            class="is-checked relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300 whitespace-nowrap active">
                            PROFILE
                        </button>

                        <button
                            class="is-checked relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300 whitespace-nowrap">
                            ID CARD
                        </button>
                    </div>
                    <div class="tab-contents">
                        <div class="transition-all duration-300">
                            <form class="text-sm text-blackColor dark:text-blackColor-dark leading-1.8"
                                data-aos="fade-up">
                                <div class="grid grid-cols-1 xl:grid-cols-2 mb-15px gap-y-15px gap-x-30px">


                                    <!-- profile details -->


                                    <div>
                                        <ul>
                                            <li
                                                class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px">
                                                <div class="md:col-start-1 md:col-span-4">
                                                    <span class="inline-block">Registration Date</span>
                                                </div>
                                                <div class="md:col-start-5 md:col-span-8">
                                                    <span class="inline-block">20, January 2024 9:00 PM</span>
                                                </div>
                                            </li>

                                            <li
                                                class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                                                <div class="md:col-start-1 md:col-span-4">
                                                    <span class="inline-block">First Name</span>
                                                </div>
                                                <div class="md:col-start-5 md:col-span-8">
                                                    <span class="inline-block">Michle</span>
                                                </div>
                                            </li>
                                            <li
                                                class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                                                <div class="md:col-start-1 md:col-span-4">
                                                    <span class="inline-block">Last Name</span>
                                                </div>
                                                <div class="md:col-start-5 md:col-span-8">
                                                    <span class="inline-block">Obema</span>
                                                </div>
                                            </li>

                                            <li
                                                class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                                                <div class="md:col-start-1 md:col-span-4">
                                                    <span class="inline-block">Username</span>
                                                </div>
                                                <div class="md:col-start-5 md:col-span-8">
                                                    <span class="inline-block"> obema007</span>
                                                </div>
                                            </li>

                                            <li
                                                class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                                                <div class="md:col-start-1 md:col-span-4">
                                                    <span class="inline-block">Email</span>
                                                </div>
                                                <div class="md:col-start-5 md:col-span-8">
                                                    <span class="inline-block"> obema@example.com</span>
                                                </div>
                                            </li>

                                            <li
                                                class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                                                <div class="md:col-start-1 md:col-span-4">
                                                    <span class="inline-block">Phone Number</span>
                                                </div>
                                                <div class="md:col-start-5 md:col-span-8">
                                                    <span class="inline-block">+55 669 4456 25987</span>
                                                </div>
                                            </li>

                                            <li
                                                class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                                                <div class="md:col-start-1 md:col-span-4">
                                                    <span class="inline-block">Expert</span>
                                                </div>
                                                <div class="md:col-start-5 md:col-span-8">
                                                    <span class="inline-block">Graphics Design</span>
                                                </div>
                                            </li>

                                            <li
                                                class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                                                <div class="md:col-start-1 md:col-span-4">
                                                    <span class="inline-block">Biography</span>
                                                </div>
                                                <div class="md:col-start-5 md:col-span-8">
                                                    <span class="inline-block">Lorem, ipsum dolor sit amet consectetur
                                                        adipisicing
                                                        elit. Maiores veniam, delectus accusamus nesciunt
                                                        laborum repellat laboriosam, deserunt possimus itaque
                                                        iusto perferendis voluptatum quaerat cupiditate vitae.
                                                        Esse aut illum perferendis nulla, corporis impedit
                                                        quasi alias est!</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>


                                </div>


                            </form>
                        </div>


                        <div class="hidden transition-all duration-300">
                            <form class="text-sm text-blackColor dark:text-blackColor-dark leading-1.8"
                                data-aos="fade-up">
                                <div class="grid grid-cols-1 mb-15px gap-y-15px gap-x-30px">

                                </div>

                                <div class="mt-15px">
                                    <button type="submit"
                                        class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark">
                                        Download Now
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>








</main>



<!-- Student Dashboard Footer section student_footer  -->
<?php
$this->load->view('dashboard/master_contents/dStudent_master/student_footer');
?>