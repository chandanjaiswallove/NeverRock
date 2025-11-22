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

            <!-- PROFILE -->
            <div class="transition-all duration-300">
              <form class="text-sm text-blackColor dark:text-blackColor-dark leading-1.8" data-aos="fade-up">
                <div class="mb-6">

                  <!-- ============================
             STUDENT BASIC DETAILS
        ============================ -->
                  <p class="text-base font-bold text-blackColor dark:text-blackColor-dark mb-3">
                    Student Basic Details
                  </p>

                  <ul class="space-y-4">

                    <li class="grid grid-cols-1 md:grid-cols-12 gap-x-30px">
                      <span class="md:col-span-4 font-semibold text-contentColor">Student ID</span>
                      <span class="md:col-span-8 text-contentColor">STU-2024-00125</span>
                    </li>

                    <li class="grid grid-cols-1 md:grid-cols-12 gap-x-30px">
                      <span class="md:col-span-4 font-semibold text-contentColor">Registration Date</span>
                      <span class="md:col-span-8 text-contentColor">20 January 2024, 9:00 PM</span>
                    </li>

                    <li class="grid grid-cols-1 md:grid-cols-12 gap-x-30px">
                      <span class="md:col-span-4 font-semibold text-contentColor">Full Name</span>
                      <span class="md:col-span-8 text-contentColor">Michle</span>
                    </li>

                    <li class="grid grid-cols-1 md:grid-cols-12 gap-x-30px">
                      <span class="md:col-span-4 font-semibold text-contentColor">Nick Name</span>
                      <span class="md:col-span-8 text-contentColor">obema007</span>
                    </li>

                    <li class="grid grid-cols-1 md:grid-cols-12 gap-x-30px">
                      <span class="md:col-span-4 font-semibold text-contentColor">Gender</span>
                      <span class="md:col-span-8 text-contentColor">Male</span>
                    </li>

                    <li class="grid grid-cols-1 md:grid-cols-12 gap-x-30px">
                      <span class="md:col-span-4 font-semibold text-contentColor">Date of Birth</span>
                      <span class="md:col-span-8 text-contentColor">10 Feb 2000</span>
                    </li>

                    <li class="grid grid-cols-1 md:grid-cols-12 gap-x-30px">
                      <span class="md:col-span-4 font-semibold text-contentColor">Blood Group</span>
                      <span class="md:col-span-8 text-contentColor">O+</span>
                    </li>


                    <!-- ============================
                CONTACT DETAILS
            ============================ -->
                    <p class="text-base font-bold text-blackColor dark:text-blackColor-dark mb-3 pt-4">
                      Contact Details
                    </p>

                    <li class="grid grid-cols-1 md:grid-cols-12 gap-x-30px">
                      <span class="md:col-span-4 font-semibold text-contentColor">Email</span>
                      <span class="md:col-span-8 text-contentColor">obema@example.com</span>
                    </li>

                    <li class="grid grid-cols-1 md:grid-cols-12 gap-x-30px">
                      <span class="md:col-span-4 font-semibold text-contentColor">Phone Number</span>
                      <span class="md:col-span-8 text-contentColor">+55 669 4456 25987</span>
                    </li>

                    <li class="grid grid-cols-1 md:grid-cols-12 gap-x-30px">
                      <span class="md:col-span-4 font-semibold text-contentColor">Alternate Phone</span>
                      <span class="md:col-span-8 text-contentColor">+55 889 1234 9876</span>
                    </li>

                    <li class="grid grid-cols-1 md:grid-cols-12 gap-x-30px">
                      <span class="md:col-span-4 font-semibold text-contentColor">Emergency Contact</span>
                      <span class="md:col-span-8 text-contentColor">+55 669 4456 25987</span>
                    </li>


                    <!-- ============================
                ADDRESS DETAILS
            ============================ -->
                    <p class="text-base font-bold text-blackColor dark:text-blackColor-dark mb-3 pt-4">
                      Address Details
                    </p>

                    <li class="grid grid-cols-1 md:grid-cols-12 gap-x-30px">
                      <span class="md:col-span-4 font-semibold text-contentColor">Current Address</span>
                      <span class="md:col-span-8 text-contentColor">Street 12, Maintand, Bettiah</span>
                    </li>

                    <li class="grid grid-cols-1 md:grid-cols-12 gap-x-30px">
                      <span class="md:col-span-4 font-semibold text-contentColor">District</span>
                      <span class="md:col-span-8 text-contentColor">Bettiah</span>
                    </li>

                    <li class="grid grid-cols-1 md:grid-cols-12 gap-x-30px">
                      <span class="md:col-span-4 font-semibold text-contentColor">State</span>
                      <span class="md:col-span-8 text-contentColor">Bihar</span>
                    </li>

                    <li class="grid grid-cols-1 md:grid-cols-12 gap-x-30px">
                      <span class="md:col-span-4 font-semibold text-contentColor">Country</span>
                      <span class="md:col-span-8 text-contentColor">India</span>
                    </li>


                    <!-- ============================
                PARENT DETAILS
            ============================ -->
                    <p class="text-base font-bold text-blackColor dark:text-blackColor-dark mb-3 pt-4">
                      Parent / Guardian Details
                    </p>

                    <li class="grid grid-cols-1 md:grid-cols-12 gap-x-30px">
                      <span class="md:col-span-4 font-semibold text-contentColor">Father Name</span>
                      <span class="md:col-span-8 text-contentColor">John Aeliya</span>
                    </li>

                    <li class="grid grid-cols-1 md:grid-cols-12 gap-x-30px">
                      <span class="md:col-span-4 font-semibold text-contentColor">Father Occupation</span>
                      <span class="md:col-span-8 text-contentColor">Contractor</span>
                    </li>

                    <li class="grid grid-cols-1 md:grid-cols-12 gap-x-30px">
                      <span class="md:col-span-4 font-semibold text-contentColor">Father Contact</span>
                      <span class="md:col-span-8 text-contentColor">+55 889 1234 5566</span>
                    </li>

                    <li class="grid grid-cols-1 md:grid-cols-12 gap-x-30px">
                      <span class="md:col-span-4 font-semibold text-contentColor">Mother Name</span>
                      <span class="md:col-span-8 text-contentColor">Aeliya Mary</span>
                    </li>

                    <li class="grid grid-cols-1 md:grid-cols-12 gap-x-30px">
                      <span class="md:col-span-4 font-semibold text-contentColor">Mother Occupation</span>
                      <span class="md:col-span-8 text-contentColor">Teacher</span>
                    </li>


                    <!-- ============================
                ACADEMIC INFORMATION
            ============================ -->
                    <p class="text-base font-bold text-blackColor dark:text-blackColor-dark mb-3 pt-4">
                      Academic Information
                    </p>

                    <li class="grid grid-cols-1 md:grid-cols-12 gap-x-30px">
                      <span class="md:col-span-4 font-semibold text-contentColor">Course Enrolled</span>
                      <span class="md:col-span-8 text-contentColor">BSc Computer Science</span>
                    </li>

                    <li class="grid grid-cols-1 md:grid-cols-12 gap-x-30px">
                      <span class="md:col-span-4 font-semibold text-contentColor">Session / Batch</span>
                      <span class="md:col-span-8 text-contentColor">2023 - 2027</span>
                    </li>




                    <!-- ============================
                DOCUMENTS SECTION
            ============================ -->
                    <p class="text-base font-bold text-blackColor dark:text-blackColor-dark mb-3 pt-4">
                      Uploaded Documents
                    </p>

                    <li class="grid grid-cols-1 md:grid-cols-12 gap-x-30px">
                      <span class="md:col-span-4 font-semibold text-contentColor">Aadhar Card</span>
                      <span class="md:col-span-8 text-contentColor">Uploaded</span>
                    </li>

                    <li class="grid grid-cols-1 md:grid-cols-12 gap-x-30px">
                      <span class="md:col-span-4 font-semibold text-contentColor">Previous Marksheet</span>
                      <span class="md:col-span-8 text-contentColor">Uploaded</span>
                    </li>

                  </ul>

                </div>
              </form>
            </div>


            <!-- ID CARD -->
            <div class="hidden transition-all duration-300">
              <form class="text-sm text-blackColor dark:text-blackColor-dark leading-1.8" data-aos="fade-up">
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

            <!-- INVOICE -->
            <div class="hidden transition-all duration-300">
              <form class="text-sm text-blackColor dark:text-blackColor-dark leading-1.8" data-aos="fade-up">
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

            <!-- CERTIFICATE -->
            <div class="hidden transition-all duration-300">
              <form class="text-sm text-blackColor dark:text-blackColor-dark leading-1.8" data-aos="fade-up">
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