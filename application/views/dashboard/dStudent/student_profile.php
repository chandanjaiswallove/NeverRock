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
    <!--Tasb section -->
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

                        <button
                            class="is-checked relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300 whitespace-nowrap">
                            INVOICE
                        </button>

                        <button
                            class="is-checked relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300 whitespace-nowrap">
                            CERTIFICATE
                        </button>

                    </div>
                    <div class="tab-contents">
                        <div class="transition-all duration-300">
                            <form class="text-sm text-blackColor dark:text-blackColor-dark leading-1.8"
                                data-aos="fade-up">
<div class="mb-6">
  <p class="text-base font-bold text-blackColor dark:text-blackColor-dark mb-3">
    Personal Details
  </p>

  <ul class="space-y-4">

    <li class="grid grid-cols-1 md:grid-cols-12 gap-x-30px">
      <span class="md:col-span-4 text-sm font-semibold text-contentColor dark:text-contentColor-dark">
        Registration Date
      </span>
      <span class="md:col-span-8 text-sm text-contentColor dark:text-contentColor-dark">
        20 January 2024, 9:00 PM
      </span>
    </li>

    <li class="grid grid-cols-1 md:grid-cols-12 gap-x-30px">
      <span class="md:col-span-4 text-sm font-semibold text-contentColor dark:text-contentColor-dark">
        First Name
      </span>
      <span class="md:col-span-8 text-sm text-contentColor dark:text-contentColor-dark">
        Michle
      </span>
    </li>

    <li class="grid grid-cols-1 md:grid-cols-12 gap-x-30px">
      <span class="md:col-span-4 text-sm font-semibold text-contentColor dark:text-contentColor-dark">
        Last Name
      </span>
      <span class="md:col-span-8 text-sm text-contentColor dark:text-contentColor-dark">
        Obema
      </span>
    </li>

    <li class="grid grid-cols-1 md:grid-cols-12 gap-x-30px">
      <span class="md:col-span-4 text-sm font-semibold text-contentColor dark:text-contentColor-dark">
        Username
      </span>
      <span class="md:col-span-8 text-sm text-contentColor dark:text-contentColor-dark">
        obema007
      </span>
    </li>

    <li class="grid grid-cols-1 md:grid-cols-12 gap-x-30px">
      <span class="md:col-span-4 text-sm font-semibold text-contentColor dark:text-contentColor-dark">
        Email
      </span>
      <span class="md:col-span-8 text-sm text-contentColor dark:text-contentColor-dark">
        obema@example.com
      </span>
    </li>

    <li class="grid grid-cols-1 md:grid-cols-12 gap-x-30px">
      <span class="md:col-span-4 text-sm font-semibold text-contentColor dark:text-contentColor-dark">
        Phone Number
      </span>
      <span class="md:col-span-8 text-sm text-contentColor dark:text-contentColor-dark">
        +55 669 4456 25987
      </span>
    </li>

    <li class="grid grid-cols-1 md:grid-cols-12 gap-x-30px">
      <span class="md:col-span-4 text-sm font-semibold text-contentColor dark:text-contentColor-dark">
        Expert
      </span>
      <span class="md:col-span-8 text-sm text-contentColor dark:text-contentColor-dark">
        Graphics Design
      </span>
    </li>

    <li class="grid grid-cols-1 md:grid-cols-12 gap-x-30px">
      <span class="md:col-span-4 text-sm font-semibold text-contentColor dark:text-contentColor-dark">
        Biography
      </span>
      <span class="md:col-span-8 text-sm text-contentColor dark:text-contentColor-dark">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores veniam delectus accusamus.
      </span>
    </li>

  </ul>
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
                                        Download Id Card
                                    </button>
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
                                        Download Invoice
                                    </button>
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
                                        Download Certificate
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