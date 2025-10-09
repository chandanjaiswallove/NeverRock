
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


<!-- course create  -->


<div>
      <div class="container pt-100px pb-100px" data-aos="fade-up">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-x-30px gap-y-5">
          <!-- create course left -->
          <div data-aos="fade-up" class="lg:col-start-1 lg:col-span-8">
            <ul class="accordion-container curriculum create-course">
              <!-- accordion -->
              <li class="accordion mb-5 active">
                <div
                  class="bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-t-md">
                  <!-- controller -->
                  <div class="py-5 px-30px">
                    <div
                      class="cursor-pointer accordion-controller flex justify-between items-center text-lg text-headingColor font-semibold w-full dark:text-headingColor-dark font-hind leading-27px rounded-t-md">
                      <div>
                        <span>Course Info</span>
                      </div>
                      <svg class="transition-all duration-500 rotate-0" width="20" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 16 16" fill="#212529">
                        <path fill-rule="evenodd"
                          d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                        </path>
                      </svg>
                    </div>
                  </div>
                  <!-- content -->
                  <div class="accordion-content transition-all duration-500 overflow-hidden">
                    <div class="content-wrapper py-4 px-5">
                      <div>
                        <form
                          class="p-10px md:p-10 lg:p-5 2xl:p-10 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8"
                          data-aos="fade-up">
                          <div class="grid grid-cols-1 mb-15px gap-15px">
                            <div>
                              <label class="mb-3 block font-semibold">Course Title</label>
                              <input type="text" placeholder="Course Title"
                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                            </div>
                            <div>
                              <label class="mb-3 block font-semibold">Course Slug</label>
                              <input type="text" placeholder="Course Slug"
                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                            </div>
                            <div>
                              <label class="mb-3 block font-semibold">Free Regular Price ($)</label>
                              <input type="text" placeholder="Free Regular Price ($)"
                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                            </div>
                            <div>
                              <p class="flex items-center gap-0.5">
                                <svg class="feather feather-info w-14px h-14px" xmlns="http://www.w3.org/2000/svg"
                                  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <circle cx="12" cy="12" r="10"></circle>
                                  <line x1="12" y1="16" x2="12" y2="12"></line>
                                  <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                </svg>
                                The Course Price Includes Your Author Fee.
                              </p>
                              <label class="mb-3 block font-semibold">Discounted Price ($)</label>
                              <input type="text" placeholder="Discounted Price ($)"
                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md">
                            </div>
                            <div>
                              <p class="flex items-center gap-0.5">
                                <svg class="feather feather-info w-14px h-14px" xmlns="http://www.w3.org/2000/svg"
                                  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <circle cx="12" cy="12" r="10"></circle>
                                  <line x1="12" y1="16" x2="12" y2="12"></line>
                                  <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                </svg>
                                The Course Price Includes Your Author Fee.
                              </p>

                              <div class="grid grid-cols-1 md:grid-cols-2 gap-30px">
                                <div>
                                  <label
                                    class="text-xs uppercase text-placeholder block font-semibold text-opacity-50 leading-1.8">COURSES</label>
                                  <div class="bg-whiteColor relative rounded-md">
                                    <select
                                      class="text-base bg-transparent text-blackColor2 w-full p-13px pr-30px focus:outline-none block appearance-none relative z-20 focus:shadow-select rounded-md">
                                      <option selected="">All</option>
                                      <option value="1">Web Design</option>
                                      <option value="2">Graphic</option>
                                      <option value="3">English</option>
                                      <option value="4">
                                        Spoken English
                                      </option>
                                      <option value="5">Art Painting</option>
                                      <option value="6">
                                        App Development
                                      </option>
                                      <option value="7">
                                        Web Application
                                      </option>
                                      <option value="7">
                                        Php Development
                                      </option>
                                    </select>
                                    <i
                                      class="icofont-simple-down absolute top-1/2 right-3 -translate-y-1/2 block text-lg z-10"></i>
                                  </div>
                                </div>
                                <div>
                                  <label
                                    class="text-xs uppercase text-placeholder block font-semibold text-opacity-50 leading-1.8">SHORT
                                    BY OFFER</label>
                                  <div class="bg-whiteColor relative rounded-md">
                                    <select
                                      class="text-base bg-transparent text-blackColor2 w-full p-13px pr-30px focus:outline-none block appearance-none relative z-20 focus:shadow-select rounded-md">
                                      <option selected="">premium</option>
                                      <option value="1">Free</option>
                                      <option value="2">paid</option>
                                    </select>
                                    <i
                                      class="icofont-simple-down absolute top-1/2 right-3 -translate-y-1/2 block text-lg z-10"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="mb-15px">
                            <label class="mb-3 block font-semibold">About Course</label>
                            <textarea
                              class="w-full py-10px px-5 text-sm text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md"
                              cols="30" rows="10">
                              </textarea>
                          </div>

                          <div class="mt-15px">
                            <button type="submit"
                              class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark">
                              Update Info
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <!-- accordion -->
              <li class="accordion mb-5">
                <div class="bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark">
                  <!-- controller -->
                  <div class="py-5 px-30px">
                    <div
                      class="cursor-pointer accordion-controller flex justify-between items-center text-lg text-headingColor font-semibold w-full dark:text-headingColor-dark font-hind leading-27px">
                      <div>
                        <span>Course Intro Video</span>
                      </div>
                      <svg class="transition-all duration-500 rotate-0" width="20" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 16 16" fill="#212529">
                        <path fill-rule="evenodd"
                          d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                        </path>
                      </svg>
                    </div>
                  </div>
                  <!-- content -->
                  <div class="accordion-content transition-all duration-500 overflow-hidden h-0">
                    <div class="content-wrapper py-4 px-5">
                      <div>
                        <form
                          class="p-10px md:p-10 lg:p-5 2xl:p-10 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8"
                          data-aos="fade-up">
                          <div class="grid grid-cols-1 mb-15px gap-15px">
                            <div>
                              <input type="text" placeholder="Select Video searche"
                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                            </div>
                            <div>
                              <label class="mb-3 block font-semibold">Add Your Video URL</label>
                              <input type="text" placeholder="Add your Video URL here"
                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                            </div>
                            <div>
                              <div class="mb-3 block">
                                Example:
                                <a class="hover:text-primaryColor"
                                  href="https://www.youtube.com/watch?v=yourvideoid">https://www.youtube.com/watch?v=yourvideoid</a>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <!-- accordion -->
              <li class="accordion mb-5">
                <div class="bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark">
                  <!-- controller -->
                  <div class="py-5 px-30px">
                    <div
                      class="cursor-pointer accordion-controller flex justify-between items-center text-lg text-headingColor font-semibold w-full dark:text-headingColor-dark font-hind leading-27px">
                      <div>
                        <span>Course Builder</span>
                      </div>
                      <svg class="transition-all duration-500 rotate-0" width="20" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 16 16" fill="#212529">
                        <path fill-rule="evenodd"
                          d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                        </path>
                      </svg>
                    </div>
                  </div>
                  <!-- content -->
                  <div class="accordion-content transition-all duration-500 overflow-hidden h-0">
                    <div class="content-wrapper py-4 px-5">
                      <div>
                        <div class="mt-15px">
                          <a href="create-course.html#"
                            class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark">
                            Add New Topic
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <!-- accordion -->
              <li class="accordion mb-5">
                <div class="bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark">
                  <!-- controller -->
                  <div class="py-5 px-30px">
                    <div
                      class="cursor-pointer accordion-controller flex justify-between items-center text-lg text-headingColor font-semibold w-full dark:text-headingColor-dark font-hind leading-27px">
                      <div>
                        <span>Additional Information</span>
                      </div>
                      <svg class="transition-all duration-500 rotate-0" width="20" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 16 16" fill="#212529">
                        <path fill-rule="evenodd"
                          d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                        </path>
                      </svg>
                    </div>
                  </div>
                  <!-- content -->
                  <div class="accordion-content transition-all duration-500 overflow-hidden h-0">
                    <div class="content-wrapper py-4 px-5">
                      <div>
                        <form
                          class="p-10px md:p-10 lg:p-5 2xl:p-10 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8"
                          data-aos="fade-up">
                          <div class="grid grid-cols-1 xl:grid-cols-2 mb-15px gap-y-15px gap-x-30px">
                            <div>
                              <label class="mb-3 block font-semibold">Start Date</label>
                              <input type="text" placeholder="mm/dd/yyy"
                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                            </div>
                            <div>
                              <label class="mb-3 block font-semibold">Language</label>
                              <input type="text" placeholder="English"
                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                            </div>
                          </div>

                          <div class="grid grid-cols-1 xl:grid-cols-2 gap-x-30px">
                            <div>
                              <label class="mb-3 block font-semibold">Requirements</label>
                              <textarea
                                class="w-full py-10px px-5 mb-15px text-sm text-contentColor dark:text-contentColor-dark text-start bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md"
                                cols="30" rows="10">
Add your course benefits here.</textarea>
                              <p class="flex items-center gap-0.5">
                                <svg class="feather feather-info w-14px h-14px" xmlns="http://www.w3.org/2000/svg"
                                  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <circle cx="12" cy="12" r="10"></circle>
                                  <line x1="12" y1="16" x2="12" y2="12"></line>
                                  <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                </svg>
                                Enter for per line.
                              </p>
                            </div>
                            <div>
                              <label class="mb-3 block font-semibold">Description</label>
                              <textarea
                                class="w-full py-10px px-5 mb-15px text-sm text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md"
                                cols="30" rows="10">
Add your course benefits here.
                            </textarea>
                              <p class="flex items-center gap-0.5">
                                <svg class="feather feather-info w-14px h-14px" xmlns="http://www.w3.org/2000/svg"
                                  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                  <circle cx="12" cy="12" r="10"></circle>
                                  <line x1="12" y1="16" x2="12" y2="12"></line>
                                  <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                </svg>
                                Enter for per line.
                              </p>
                            </div>
                          </div>
                          <div class="mb-15px">
                            <label class="mb-3 block font-semibold">Course Tags</label>
                            <textarea
                              class="w-full py-10px px-5 text-sm text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md"
                              cols="30" rows="10"></textarea>
                          </div>

                          <div class="mt-15px">
                            <button type="submit"
                              class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark">
                              Update Info
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <!-- accordion -->
              <li class="accordion mb-5">
                <div
                  class="bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-b-md">
                  <!-- controller -->
                  <div class="cursor-pointer py-5 px-30px">
                    <div
                      class="accordion-controller flex justify-between items-center text-lg text-headingColor font-semibold w-full dark:text-headingColor-dark font-hind leading-27px rounded-b-md">
                      <div>
                        <span>Certificate Template</span>
                      </div>
                      <svg class="transition-all duration-500 rotate-0" width="20" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 16 16" fill="#212529">
                        <path fill-rule="evenodd"
                          d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                        </path>
                      </svg>
                    </div>
                  </div>
                  <!-- content -->
                  <div class="accordion-content transition-all duration-500 overflow-hidden h-0">
                    <div class="content-wrapper py-4 px-5">
                      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-30px gap-y-5">
                        <div>
                          <img src="modules/assets/images/dashbord/dashbord__8.jpg" class="w-full" alt="">
                        </div>

                        <div>
                          <img src="modules/assets/images/dashbord/dashbord__4.jpg" class="w-full" alt="">
                        </div>

                        <div>
                          <img src="modules/assets/images/dashbord/dashbord__5.jpg" class="w-full" alt="">
                        </div>

                        <div>
                          <img src="modules/assets/images/dashbord/dashbord__9.jpg" class="w-full" alt="">
                        </div>
                        <div>
                          <img src="modules/assets/images/dashbord/dashbord__7.jpg" class="w-full" alt="">
                        </div>
                        <div>
                          <img src="modules/assets/images/dashbord/dashbord__8.jpg" class="w-full" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>

            <div class="mt-10 leading-1.8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-x-30px gap-y-5">
              <div data-aos="fade-up" class="lg:col-start-1 lg:col-span-4">
                <a href="create-course.html#"
                  class="text-whiteColor bg-primaryColor w-full p-13px hover:text-whiteColor hover:bg-secondaryColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-secondaryColor text-center">
                  Preview
                </a>
              </div>

              <div data-aos="fade-up" class="lg:col-start-5 lg:col-span-8">
                <a href="create-course.html#"
                  class="text-whiteColor bg-primaryColor w-full p-13px hover:text-whiteColor hover:bg-secondaryColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-secondaryColor text-center">
                  Create Course
                </a>
              </div>
            </div>
          </div>
          <!-- create course right-->
          <div data-aos="fade-up" class="lg:col-start-9 lg:col-span-4">
            <div class="p-30px border-2 border-primaryColor">
              <ul>
                <li class="my-7px flex gap-10px">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-check flex-shrink-0">
                    <polyline points="20 6 9 17 4 12" class="text-greencolor"></polyline>
                  </svg>
                  <p class="text-lg text-contentColor dark:text-contentColor-dark leading-1.45">
                    Set the Course Price option make it free.
                  </p>
                </li>
                <li class="my-7px flex gap-10px">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-check flex-shrink-0">
                    <polyline points="20 6 9 17 4 12" class="text-greencolor"></polyline>
                  </svg>
                  <p class="text-lg text-contentColor dark:text-contentColor-dark leading-1.45">
                    Standard size for the course thumbnail.
                  </p>
                </li>
                <li class="my-7px flex gap-10px">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-check flex-shrink-0">
                    <polyline points="20 6 9 17 4 12" class="text-greencolor"></polyline>
                  </svg>
                  <p class="text-lg text-contentColor dark:text-contentColor-dark leading-1.45">
                    Video section controls the course overview video.
                  </p>
                </li>
                <li class="my-7px flex gap-10px">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-check flex-shrink-0">
                    <polyline points="20 6 9 17 4 12" class="text-greencolor"></polyline>
                  </svg>
                  <p class="text-lg text-contentColor dark:text-contentColor-dark leading-1.45">
                    Course Builder is where you create course.
                  </p>
                </li>
                <li class="my-7px flex gap-10px">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-check flex-shrink-0">
                    <polyline points="20 6 9 17 4 12" class="text-greencolor"></polyline>
                  </svg>
                  <p class="text-lg text-contentColor dark:text-contentColor-dark leading-1.45">
                    Add Topics in the Course Builder section to create
                    lessons, .
                  </p>
                </li>
                <li class="my-7px flex gap-10px">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-check flex-shrink-0">
                    <polyline points="20 6 9 17 4 12" class="text-greencolor"></polyline>
                  </svg>
                  <p class="text-lg text-contentColor dark:text-contentColor-dark leading-1.45">
                    Prerequisites refers to the fundamental courses .
                  </p>
                </li>
                <li class="my-7px flex gap-10px">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-check flex-shrink-0">
                    <polyline points="20 6 9 17 4 12" class="text-greencolor"></polyline>
                  </svg>
                  <p class="text-lg text-contentColor dark:text-contentColor-dark leading-1.45">
                    Information from the Additional Data section.
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>





















</main>



<!-- Admin Dashboard Footer section admin_footer  -->
<?php
$this->load->view('dashboard/master_contents/dAdmin_master/admin_footer');
?>
