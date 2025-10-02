<!-- Header section uiHeader  -->
<?php
$this->load->view('master_contents/uiPages_content/uiHeader');
?>

<main class="">



  <!-- coursese section -->

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
                Computer Science
              </button>
            </li>
            <li>
              <button data-filter=".filter2"
                class="relative px-10px lg:px-3 2xl:px-15px py-10px md:py-4 lg:py-3 3xl:py-22px mx-10px md:mx-2 lg:mx-3 2xl:mx-15px text-base md:text-xs lg:text-base text-contentColor font-medium hover:text-primaryColor dark:text-contentColor-dark dark:hover:text-primaryColor after:w-0.5 after:h-15px after:absolute after:right-[-15px] after:bottom-1/2 after:translate-y-1/2 after:bg-contentColor before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300">
                Data science
              </button>
            </li>
            <li>
              <button data-filter=".filter3"
                class="relative px-10px lg:px-3 2xl:px-15px py-10px md:py-4 lg:py-3 3xl:py-22px mx-10px md:mx-2 lg:mx-3 2xl:mx-15px text-base md:text-xs lg:text-base text-contentColor font-medium hover:text-primaryColor dark:text-contentColor-dark dark:hover:text-primaryColor after:w-0.5 after:h-15px after:absolute after:right-[-15px] after:bottom-1/2 after:translate-y-1/2 after:bg-contentColor before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300">
                Engineering
              </button>
            </li>
            <li>
              <button data-filter=".filter4"
                class="relative px-10px lg:px-3 2xl:px-15px py-10px md:py-4 lg:py-3 3xl:py-22px mx-10px md:mx-2 lg:mx-3 2xl:mx-15px text-base md:text-xs lg:text-base text-contentColor font-medium hover:text-primaryColor dark:text-contentColor-dark dark:hover:text-primaryColor after:w-0.5 after:h-15px after:absolute after:right-[-15px] after:bottom-1/2 after:translate-y-1/2 after:bg-contentColor before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300">
                Web Development
              </button>
            </li>
            <li>
              <button data-filter=".filter5"
                class="relative px-10px lg:px-3 2xl:px-15px py-10px md:py-4 lg:py-3 3xl:py-22px mx-10px md:mx-2 lg:mx-3 2xl:mx-15px text-base md:text-xs lg:text-base text-contentColor font-medium hover:text-primaryColor dark:text-contentColor-dark dark:hover:text-primaryColor before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300">
                Architecture
              </button>
            </li>
          </ul>
        </div>
        <!-- course cards -->

        <div class="container p-0 filter-contents flex flex-wrap sm:-mx-15px" data-aos="fade-up">
          <!-- card 1 -->
          <div class="w-full sm:w-1/2 lg:w-1/3 group grid-item filter1 filter3">
            <div class="tab-content-wrapper sm:px-15px mb-30px">
              <div class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark">
                <!-- card image -->
                <div class="relative mb-4">
                  <a href="course-details.html" class="w-full overflow-hidden rounded">
                    <img src="modules/assets/images/grid/grid_1.png" alt=""
                      class="w-full transition-all duration-300 group-hover:scale-110">
                  </a>
                  <div class="absolute left-0 top-1 flex justify-between w-full items-center px-2">
                    <div>
                      <p class="text-xs text-whiteColor px-4 py-[3px] bg-secondaryColor rounded font-semibold">
                        Chadan Jaiswallove
                      </p>
                    </div>
                    <a class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                      href="<?php echo site_url('welcome'); ?>"><i
                        class="icofont-heart-alt text-base py-1 px-2"></i></a>
                  </div>
                </div>
                <!-- card content -->
                <div>
                  <div class="grid grid-cols-2 mb-15px">
                    <div class="flex items-center">
                      <div>
                        <i class="icofont-book-alt pr-5px text-primaryColor text-lg"></i>
                      </div>
                      <div>
                        <span class="text-sm text-black dark:text-blackColor-dark">23 Lesson</span>
                      </div>
                    </div>
                    <div class="flex items-center">
                      <div>
                        <i class="icofont-clock-time pr-5px text-primaryColor text-lg"></i>
                      </div>
                      <div>
                        <span class="text-sm text-black dark:text-blackColor-dark">1 hr 30 min</span>
                      </div>
                    </div>
                  </div>
                  <a href="course-details.html"
                    class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                    Foundation course to under stand about softwere
                  </a>
                  <!-- price -->
                  <div class="text-lg font-semibold text-primaryColor font-inter mb-4">
                    $32.00
                    <del class="text-sm text-lightGrey4 font-semibold">/ $67.00</del>
                    <span class="ml-6"><del class="text-base font-semibold text-secondaryColor3">Free</del></span>
                  </div>
                  <!-- author and rating-->
                  <div class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor">
                    <div>
                      <a href="instructor-details.html"
                        class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"><img
                          class="w-[30px] h-[30px] rounded-full mr-15px"
                          src="modules/assets/images/grid/grid_small_1.jpg" alt="">
                        <span class="flex">Micle john</span>
                      </a>
                    </div>
                    <div class="text-start md:text-end">
                      <i class="icofont-star text-size-15 text-yellow"></i>
                      <i class="icofont-star text-size-15 text-yellow"></i>
                      <i class="icofont-star text-size-15 text-yellow"></i>
                      <i class="icofont-star text-size-15 text-yellow"></i>
                      <i class="icofont-star text-size-15 text-yellow"></i>
                      <span class="text-xs text-lightGrey6">(44)</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- card 2 -->
          <div class="w-full sm:w-1/2 lg:w-1/3 group grid-item filter2 filter3">
            <div class="tab-content-wrapper sm:px-15px mb-30px">
              <div class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark">
                <!-- card image -->
                <div class="relative mb-4">
                  <a href="course-details.html" class="w-full overflow-hidden rounded">
                    <img src="modules/assets/images/grid/grid_2.png" alt=""
                      class="w-full transition-all duration-300 group-hover:scale-110">
                  </a>
                  <div class="absolute left-0 top-1 flex justify-between w-full items-center px-2">
                    <div>
                      <p class="text-xs text-whiteColor px-4 py-[3px] bg-blue rounded font-semibold">
                        Mechanical
                      </p>
                    </div>
                    <a class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                      href="<?php echo site_url('welcome'); ?>"><i
                        class="icofont-heart-alt text-base py-1 px-2"></i></a>
                  </div>
                </div>
                <!-- card content -->
                <div>
                  <div class="grid grid-cols-2 mb-15px">
                    <div class="flex items-center">
                      <div>
                        <i class="icofont-book-alt pr-5px text-primaryColor text-lg"></i>
                      </div>
                      <div>
                        <span class="text-sm text-black dark:text-blackColor-dark">29 Lesson</span>
                      </div>
                    </div>
                    <div class="flex items-center">
                      <div>
                        <i class="icofont-clock-time pr-5px text-primaryColor text-lg"></i>
                      </div>
                      <div>
                        <span class="text-sm text-black dark:text-blackColor-dark">2 hr 10 min</span>
                      </div>
                    </div>
                  </div>
                  <a href="course-details.html"
                    class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                    Nidnies course to under stand about softwere
                  </a>
                  <!-- price -->
                  <div class="text-lg font-semibold text-primaryColor font-inter mb-4">
                    $32.00
                    <del class="text-sm text-lightGrey4 font-semibold">/ $67.00</del>
                    <span class="ml-6"><del class="text-base font-semibold text-greencolor">Free</del></span>
                  </div>
                  <!-- author and rating-->
                  <div class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor">
                    <div>
                      <a href="instructor-details.html"
                        class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"><img
                          class="w-[30px] h-[30px] rounded-full mr-15px"
                          src="modules/assets/images/grid/grid_small_2.jpg" alt="">Rinis Jhon
                      </a>
                    </div>
                    <div class="text-start md:text-end">
                      <i class="icofont-star text-size-15 text-yellow"></i>
                      <i class="icofont-star text-size-15 text-yellow"></i>
                      <i class="icofont-star text-size-15 text-yellow"></i>
                      <i class="icofont-star text-size-15 text-yellow"></i>
                      <i class="icofont-star text-size-15 text-yellow"></i>
                      <span class="text-xs text-lightGrey6">(44)</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- card 3 -->
          <div class="w-full sm:w-1/2 lg:w-1/3 group grid-item filter4 filter5">
            <div class="tab-content-wrapper sm:px-15px mb-30px">
              <div class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark">
                <!-- card image -->
                <div class="relative mb-4">
                  <a href="course-details.html" class="w-full overflow-hidden rounded">
                    <img src="modules/assets/images/grid/grid_3.png" alt=""
                      class="w-full transition-all duration-300 group-hover:scale-110">
                  </a>
                  <div class="absolute left-0 top-1 flex justify-between w-full items-center px-2">
                    <div>
                      <p class="text-xs text-whiteColor px-4 py-[3px] bg-secondaryColor2 rounded font-semibold">
                        Development
                      </p>
                    </div>
                    <a class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                      href="<?php echo site_url('welcome'); ?>"><i
                        class="icofont-heart-alt text-base py-1 px-2"></i></a>
                  </div>
                </div>
                <!-- card content -->
                <div>
                  <div class="grid grid-cols-2 mb-15px">
                    <div class="flex items-center">
                      <div>
                        <i class="icofont-book-alt pr-5px text-primaryColor text-lg"></i>
                      </div>
                      <div>
                        <span class="text-sm text-black dark:text-blackColor-dark">
                          25 Lesson</span>
                      </div>
                    </div>
                    <div class="flex items-center">
                      <div>
                        <i class="icofont-clock-time pr-5px text-primaryColor text-lg"></i>
                      </div>
                      <div>
                        <span class="text-sm text-black dark:text-blackColor-dark">
                          1 hr 40 min</span>
                      </div>
                    </div>
                  </div>
                  <a href="course-details.html"
                    class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                    Minws course to under stand about solution
                  </a>
                  <!-- price -->
                  <div class="text-lg font-semibold text-primaryColor font-inter mb-4">
                    $40.00
                    <del class="text-sm text-lightGrey4 font-semibold">/ $67.00</del>
                    <span class="ml-6"><del class="text-base font-semibold text-secondaryColor3">Free</del></span>
                  </div>
                  <!-- author and rating-->
                  <div class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor">
                    <div>
                      <a href="instructor-details.html"
                        class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"><img
                          class="w-[30px] h-[30px] rounded-full mr-15px"
                          src="modules/assets/images/grid/grid_small_3.jpg" alt="">Micle John
                      </a>
                    </div>
                    <div class="text-start md:text-end">
                      <i class="icofont-star text-size-15 text-yellow"></i>
                      <i class="icofont-star text-size-15 text-yellow"></i>
                      <i class="icofont-star text-size-15 text-yellow"></i>
                      <i class="icofont-star text-size-15 text-yellow"></i>
                      <i class="icofont-star text-size-15 text-yellow"></i>
                      <span class="text-xs text-lightGrey6">(44)</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- card 4 -->
          <div class="w-full sm:w-1/2 lg:w-1/3 group grid-item filter4">
            <div class="tab-content-wrapper sm:px-15px mb-30px">
              <div class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark">
                <!-- card image -->
                <div class="relative mb-4">
                  <a href="course-details.html" class="w-full overflow-hidden rounded">
                    <img src="modules/assets/images/grid/grid_4.png" alt=""
                      class="w-full transition-all duration-300 group-hover:scale-110">
                  </a>
                  <div class="absolute left-0 top-1 flex justify-between w-full items-center px-2">
                    <div>
                      <p class="text-xs text-whiteColor px-4 py-[3px] bg-greencolor2 rounded font-semibold">
                        Ui & UX Design
                      </p>
                    </div>
                    <a class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                      href="<?php echo site_url('welcome'); ?>"><i
                        class="icofont-heart-alt text-base py-1 px-2"></i></a>
                  </div>
                </div>
                <!-- card content -->
                <div>
                  <div class="grid grid-cols-2 mb-15px">
                    <div class="flex items-center">
                      <div>
                        <i class="icofont-book-alt pr-5px text-primaryColor text-lg"></i>
                      </div>
                      <div>
                        <span class="text-sm text-black dark:text-blackColor-dark">
                          36 Lesson</span>
                      </div>
                    </div>
                    <div class="flex items-center">
                      <div>
                        <i class="icofont-clock-time pr-5px text-primaryColor text-lg"></i>
                      </div>
                      <div>
                        <span class="text-sm text-black dark:text-blackColor-dark">3 hr 40 min</span>
                      </div>
                    </div>
                  </div>
                  <a href="course-details.html"
                    class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                    Design course to under stand about solution
                  </a>
                  <!-- price -->
                  <div class="text-lg font-semibold text-primaryColor font-inter mb-4">
                    $40.00
                    <del class="text-sm text-lightGrey4 font-semibold">/ $67.00</del>
                    <span class="ml-6"><del class="text-base font-semibold text-secondaryColor3">Free</del></span>
                  </div>
                  <!-- author and rating-->
                  <div class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor">
                    <div>
                      <a href="instructor-details.html"
                        class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"><img
                          class="w-[30px] h-[30px] rounded-full mr-15px"
                          src="modules/assets/images/grid/grid_small_4.jpg" alt="">
                        <span class="flex flex-shrink-0">Micle Robin</span>
                      </a>
                    </div>
                    <div class="text-start md:text-end">
                      <i class="icofont-star text-size-15 text-yellow"></i>
                      <i class="icofont-star text-size-15 text-yellow"></i>
                      <i class="icofont-star text-size-15 text-yellow"></i>
                      <i class="icofont-star text-size-15 text-yellow"></i>
                      <i class="icofont-star text-size-15 text-yellow"></i>
                      <span class="text-xs text-lightGrey6">(44)</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- card 5 -->
          <div class="w-full sm:w-1/2 lg:w-1/3 group group grid-item filter1 filter3">
            <div class="tab-content-wrapper sm:px-15px mb-30px">
              <div class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark">
                <!-- card image -->
                <div class="relative mb-4">
                  <a href="course-details.html" class="w-full overflow-hidden rounded">
                    <img src="modules/assets/images/grid/grid_5.png" alt=""
                      class="w-full transition-all duration-300 group-hover:scale-110">
                  </a>
                  <div class="absolute left-0 top-1 flex justify-between w-full items-center px-2">
                    <div>
                      <p class="text-xs text-whiteColor px-4 py-[3px] bg-orange rounded font-semibold">
                        Data & Tech
                      </p>
                    </div>
                    <a class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                      href="<?php echo site_url('welcome'); ?>"><i
                        class="icofont-heart-alt text-base py-1 px-2"></i></a>
                  </div>
                </div>
                <!-- card content -->
                <div>
                  <div class="grid grid-cols-2 mb-15px">
                    <div class="flex items-center">
                      <div>
                        <i class="icofont-book-alt pr-5px text-primaryColor text-lg"></i>
                      </div>
                      <div>
                        <span class="text-sm text-black dark:text-blackColor-dark">36 Lesson</span>
                      </div>
                    </div>
                    <div class="flex items-center">
                      <div>
                        <i class="icofont-clock-time pr-5px text-primaryColor text-lg"></i>
                      </div>
                      <div>
                        <span class="text-sm text-black dark:text-blackColor-dark">3 hr 40 min</span>
                      </div>
                    </div>
                  </div>
                  <a href="course-details.html"
                    class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                    Data course to under stand about solution
                  </a>
                  <!-- price -->
                  <div class="text-lg font-semibold text-primaryColor font-inter mb-4">
                    $40.00
                    <del class="text-sm text-lightGrey4 font-semibold">/ $67.00</del>
                    <span class="ml-6"><del class="text-base font-semibold text-secondaryColor3">Free</del></span>
                  </div>
                  <!-- author and rating-->
                  <div class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor">
                    <div>
                      <a href="instructor-details.html"
                        class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"><img
                          class="w-[30px] h-[30px] rounded-full mr-15px"
                          src="modules/assets/images/grid/grid_small_1.jpg" alt="">
                        <span class="flex flex-shrink-0">Micle Robin</span>
                      </a>
                    </div>
                    <div class="text-start md:text-end">
                      <i class="icofont-star text-size-15 text-yellow"></i>
                      <i class="icofont-star text-size-15 text-yellow"></i>
                      <i class="icofont-star text-size-15 text-yellow"></i>
                      <i class="icofont-star text-size-15 text-yellow"></i>
                      <i class="icofont-star text-size-15 text-yellow"></i>
                      <span class="text-xs text-lightGrey6">(44)</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- card 6 -->
          <div class="w-full sm:w-1/2 lg:w-1/3 group grid-item filter2 filter5">
            <div class="tab-content-wrapper sm:px-15px mb-30px">
              <div class="p-15px bg-whiteColor shadow-brand dark:bg-darkdeep3-dark dark:shadow-brand-dark">
                <!-- card image -->
                <div class="relative mb-4">
                  <a href="course-details.html" class="w-full overflow-hidden rounded">
                    <img src="modules/assets/images/grid/grid_6.png" alt=""
                      class="w-full transition-all duration-300 group-hover:scale-110">
                  </a>
                  <div class="absolute left-0 top-1 flex justify-between w-full items-center px-2">
                    <div>
                      <p class="text-xs text-whiteColor px-4 py-[3px] bg-yellow rounded font-semibold">
                        Big Data
                      </p>
                    </div>
                    <a class="text-white bg-black bg-opacity-15 rounded hover:bg-primaryColor"
                      href="<?php echo site_url('welcome'); ?>"><i
                        class="icofont-heart-alt text-base py-1 px-2"></i></a>
                  </div>
                </div>
                <!-- card content -->
                <div>
                  <div class="grid grid-cols-2 mb-15px">
                    <div class="flex items-center">
                      <div>
                        <i class="icofont-book-alt pr-5px text-primaryColor text-lg"></i>
                      </div>
                      <div>
                        <span class="text-sm text-black dark:text-blackColor-dark">
                          30 Lesson</span>
                      </div>
                    </div>
                    <div class="flex items-center">
                      <div>
                        <i class="icofont-clock-time pr-5px text-primaryColor text-lg"></i>
                      </div>
                      <div>
                        <span class="text-sm text-black dark:text-blackColor-dark">3 hr 40 min</span>
                      </div>
                    </div>
                  </div>
                  <a href="course-details.html"
                    class="text-xl font-semibold text-blackColor mb-10px font-hind dark:text-blackColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                    Big data to under stand about solution pacage
                  </a>
                  <!-- price -->
                  <div class="text-lg font-semibold text-primaryColor font-inter mb-4">
                    $40.00
                    <del class="text-sm text-lightGrey4 font-semibold">/ $67.00</del>
                    <span class="ml-6"><del class="text-base font-semibold text-secondaryColor3">
                        Free</del></span>
                  </div>
                  <!-- author and rating-->
                  <div class="grid grid-cols-1 md:grid-cols-2 pt-15px border-t border-borderColor">
                    <div>
                      <a href="instructor-details.html"
                        class="text-base font-bold font-hind flex items-center hover:text-primaryColor dark:text-blackColor-dark dark:hover:text-primaryColor"><img
                          class="w-[30px] h-[30px] rounded-full mr-15px"
                          src="modules/assets/images/grid/grid_small_1.jpg" alt="">
                        <span class="flex flex-shrink-0">Micle Robin</span>
                      </a>
                    </div>
                    <div class="text-start md:text-end">
                      <i class="icofont-star text-size-15 text-yellow"></i>
                      <i class="icofont-star text-size-15 text-yellow"></i>
                      <i class="icofont-star text-size-15 text-yellow"></i>
                      <i class="icofont-star text-size-15 text-yellow"></i>
                      <i class="icofont-star text-size-15 text-yellow"></i>
                      <span class="text-xs text-lightGrey6">(44)</span>
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

  <!-- coursese section -->

</main>


<!-- Footer section uiFooter -->
<?php
$this->load->view('master_contents/uiPages_content/uiFooter');
?>