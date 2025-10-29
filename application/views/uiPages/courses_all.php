<!-- Header section uiHeader  -->
<?php
$this->load->view('master_contents/uiPages_content/uiHeader');
?>

<main class="">



  <!-- courses section start -->
  <section>
    <div
      class="pt-50px pb-10 md:pt-70px md:pb-50px lg:pt-20 2xl:pt-100px 2xl:pb-70px bg-lightGrey7 dark:bg-lightGrey7-dark">
      <div class="filter-container container">
        <!-- courses Heading -->
        <div class="mb-5 md:mb-10" data-aos="fade-up">
          <div class="text-center">
            <span
              class="text-sm font-semibold text-primaryColor bg-whitegrey3 px-6 py-5px mb-5 rounded-full inline-block">
              Course List
            </span>
          </div>

          <h3
            class="text-3xl md:text-[35px] lg:text-size-38 3xl:text-size-42 leading-10 mf:leading-45px 2xl:leading-50px 3xl:leading-2xl font-bold text-blackColor dark:text-blackColor-dark text-center">
            Perfect Online
            <span
              class="relative after:w-full after:h-[7px] z-0 after:bg-secondaryColor after:absolute after:left-0 after:bottom-3 md:after:bottom-5 after:z-[-1]">Course</span>
            <br>
            Your Carrer
          </h3>
        </div>

        <!-- courses tabs -->
        <div data-aos="fade-up">
          <ul
            class="filter-controllers flex flex-wrap md:flex-nowrap justify-center bg-whiteColor dark:bg-whiteColor-dark p-10px 3xl:px-10 py-0 2xl:mx-50px mb-25px rounded button-group filters-button-group">
            <li>
              <button data-filter="*"
                class="is-checked relative px-10px lg:px-3 2xl:px-15px py-10px md:py-4 lg:py-3 3xl:py-22px mx-10px md:mx-2 lg:mx-3 2xl:mx-15px text-base md:text-xs lg:text-base text-contentColor font-medium hover:text-primaryColor dark:text-contentColor-dark dark:hover:text-primaryColor after:w-0.5 after:h-15px after:absolute after:right-[-15px] after:bottom-1/2 after:translate-y-1/2 after:bg-contentColor before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300">
                All
              </button>
            </li>
            <li>
              <button data-filter=".filter1"
                class="relative px-10px lg:px-3 2xl:px-15px py-10px md:py-4 lg:py-3 3xl:py-22px mx-10px md:mx-2 lg:mx-3 2xl:mx-15px text-base md:text-xs lg:text-base text-contentColor font-medium hover:text-primaryColor dark:text-contentColor-dark dark:hover:text-primaryColor after:w-0.5 after:h-15px after:absolute after:right-[-15px] after:bottom-1/2 after:translate-y-1/2 after:bg-contentColor before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300">
                Class 8th
              </button>
            </li>
            <li>
              <button data-filter=".filter2"
                class="relative px-10px lg:px-3 2xl:px-15px py-10px md:py-4 lg:py-3 3xl:py-22px mx-10px md:mx-2 lg:mx-3 2xl:mx-15px text-base md:text-xs lg:text-base text-contentColor font-medium hover:text-primaryColor dark:text-contentColor-dark dark:hover:text-primaryColor after:w-0.5 after:h-15px after:absolute after:right-[-15px] after:bottom-1/2 after:translate-y-1/2 after:bg-contentColor before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300">
                Class 9th
              </button>
            </li>
            <li>
              <button data-filter=".filter3"
                class="relative px-10px lg:px-3 2xl:px-15px py-10px md:py-4 lg:py-3 3xl:py-22px mx-10px md:mx-2 lg:mx-3 2xl:mx-15px text-base md:text-xs lg:text-base text-contentColor font-medium hover:text-primaryColor dark:text-contentColor-dark dark:hover:text-primaryColor after:w-0.5 after:h-15px after:absolute after:right-[-15px] after:bottom-1/2 after:translate-y-1/2 after:bg-contentColor before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300">
                class 10th
              </button>
            </li>
            <li>
              <button data-filter=".filter4"
                class="relative px-10px lg:px-3 2xl:px-15px py-10px md:py-4 lg:py-3 3xl:py-22px mx-10px md:mx-2 lg:mx-3 2xl:mx-15px text-base md:text-xs lg:text-base text-contentColor font-medium hover:text-primaryColor dark:text-contentColor-dark dark:hover:text-primaryColor after:w-0.5 after:h-15px after:absolute after:right-[-15px] after:bottom-1/2 after:translate-y-1/2 after:bg-contentColor before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300">
                Class 11th
              </button>
            </li>
            <li>
              <button data-filter=".filter5"
                class="relative px-10px lg:px-3 2xl:px-15px py-10px md:py-4 lg:py-3 3xl:py-22px mx-10px md:mx-2 lg:mx-3 2xl:mx-15px text-base md:text-xs lg:text-base text-contentColor font-medium hover:text-primaryColor dark:text-contentColor-dark dark:hover:text-primaryColor before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300">
                Class 12th
              </button>
            </li>
          </ul>
        </div>
        <!-- course cards -->


        <div class="container p-0 filter-contents flex flex-wrap sm:-mx-15px" data-aos="fade-up">
          <!-- card 1 -->
          <?php
          $fetchEnrolledCourse = $this->db->query("SELECT * FROM course_directory");
          foreach ($fetchEnrolledCourse->result() as $row) { ?>

            <div class="w-full md:w-1/2 lg:w-1/3  group grid-item <?php echo $row->course_category; ?>">
              <div class="tab-content-wrapper sm:px-15px mb-30px">
                <div
                  class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark rounded-standard">
                  <!-- card image -->
                  <div class="relative mb-4">
                    <a href="<?php echo base_url('course_details?id='.$row->id);?>" class="w-full overflow-hidden rounded">
                      <img src="<?php echo base_url() . "modules/courseThumbnail/" . $row->course_thumbnail; ?>" alt=""
                        class="w-full transition-all duration-300 group-hover:scale-110">
                    </a>
                    <div class="absolute left-0 top-1 flex justify-between w-full items-center px-2">
                      <div>
                        <p
                          class="text-xs text-whiteColor px-4 py-[3px] bg-primaryColor rounded font-semibold capitalize  ">
                          <?php echo $row->course_type; ?>
                        </p>
                      </div>
                      <!-- <a class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                      href="<?php echo site_url('welcome'); ?>"><i
                        class="icofont-heart-alt text-base py-1 px-2"></i></a> -->
                    </div>
                  </div>
                  <!-- card content -->
                  <div>
                    <a href=""
                      class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                      <?php echo $row->course_name; ?>
                    </a>

                    <!-- Online and offline medium  -->
                    <div class="text-lg font-semibold text-primaryColor font-inter">
                      <span class="text-sm text-black dark:text-blackColor-dark"> <i
                          class="icofont-calendar  text-primaryColor text-lg"></i>
                        Start On <?php echo date('d-m-y', strtotime($row->starting_date)); ?></span>
                      &nbsp;
                      <span class="text-sm text-black dark:text-blackColor-dark"> <i
                          class="icofont-clock-time text-primaryColor text-lg"></i>
                        Ends On <?php echo date('d-m-y', strtotime($row->ending_date)); ?></span>

                    </div>

                    <!-- Online and offline medium  -->
                    <div class="text-lg font-semibold text-primaryColor font-inter mb-3 capitalize ">
                      <span class="text-sm text-black dark:text-blackColor-dark"><i
                          class="icofont-badge pr-5px text-primaryColor text-lg"></i><?php echo $row->course_mode; ?></span>
                      &nbsp;
                      <span class="text-sm text-black dark:text-blackColor-dark">
                        <i
                          class="icofont-globe-alt pr-5px text-primaryColor text-lg"></i><?php echo $row->course_language; ?></span>

                    </div>

                    <!-- Price -->
                    <!-- Price -->
                    <div class="text-lg font-semibold text-primaryColor font-inter mb-4">
                      <?php if (strtolower($row->course_type) == 'paid') { ?>
                        <?php echo $this->config->item('indianRupee') . $row->course_selling_cost; ?>
                        <del class="text-sm text-lightGrey4 font-semibold">
                          <?php echo $this->config->item('indianRupee') . $row->course_actual_cost; ?>
                        </del>
                        <span
                          class="ml-6 text-base font-semibold text-secondaryColor2 leading-27px px-2 bg-whitegrey1 dark:bg-whitegrey1-dark">
                          <?php echo $this->config->item('discountPercent') . $row->discount_applied; ?>% OFF
                        </span>
                      <?php } else { ?>
                        <span class="text-primaryColor dark:text-blackColor-dark font-semibold">Free Course</span>
                      <?php } ?>
                    </div>

                    <!-- buttons  and buy and explore-->
                    <div class="grid grid-cols-1 md:grid-cols-2  text-center gap-2 ">
                      <a href="http://localhost/NeverRock/welcome"
                        class="text-sm md:text-size-15 text-whiteColor bg-secondaryColor border border-secondaryColor px-10px py-10px hover:text-primaryColor hover:bg-whiteColor rounded inline-block mr-6px md:mr-30px dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor">
                        Explore
                      </a>
                      <a href="http://localhost/NeverRock/welcome"
                        class="text-sm md:text-size-15 text-whiteColor bg-primaryColor border border-primaryColor px-10px py-10px hover:text-primaryColor hover:bg-whiteColor rounded inline-block mr-6px md:mr-30px dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor">
                        <?php echo (strtolower($row->course_type) == 'paid') ? 'Buy Now' : 'Join Now'; ?>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
  <!-- coursese section -->

</main>


<!-- Footer section uiFooter -->
<?php
$this->load->view('master_contents/uiPages_content/uiFooter');
?>