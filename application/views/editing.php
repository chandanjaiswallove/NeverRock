
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

    <section>
        <div class="container-fluid-2">
            <!-- setting area -->
            <div
                class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-standard">
                <!-- heading -->
                <div class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark" data-aos="fade-up">
                    <h2 class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                        Create Course
                    </h2>
                </div>

                <div class="tab">
                    <div class="tab-links flex flex-wrap mb-10px lg:mb-50px rounded gap-10px" data-aos="fade-up">
                        <button
                            class="is-checked relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300 whitespace-nowrap active">
                            COURSE INFO
                        </button>

                        <button
                            class="is-checked relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300 whitespace-nowrap">
                            COURSE DETAILS
                        </button>

                        <!-- <button
                                    class="is-checked relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300 whitespace-nowrap">
                                    TEMPALTE
                                </button> -->
                    </div>
                    <div class="tab-contents">
                        <div class="transition-all duration-300" data-aos="fade-up">
                            <form
                                class="p-10px md:p-10 lg:p-5 2xl:p-10 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8 aos-init aos-animate"
                                data-aos="fade-up">
                                <div class="grid grid-cols-1 mb-15px gap-15px">
                                    <div>
                                        <label class="mb-3 block font-semibold">Course Title</label>
                                        <input type="text" placeholder="Course Title"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                    </div>
                                </div>

                                <div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-30px mb-15px">
                                        <!-- Upload Image -->
                                        <div>
                                            <label class="mb-3 block font-semibold">Upload Image</label>
                                            <input type="file" id="courseImage" name="courseImage" accept="image/*"
                                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                        </div>

                                        <!-- Paid/Free Dropdown -->
                                        <div>
                                            <label for="courseType" class="mb-3 block font-semibold leading-1.8">Course
                                                Type</label>
                                            <div class="bg-whiteColor relative rounded-md">
                                                <select id="courseType" name="courseType"
                                                    class="text-base bg-transparent text-blackColor2 w-full p-13px pr-30px block appearance-none relative z-20 focus:outline-none focus:shadow-select rounded-md">
                                                    <option value="paid" selected>Paid</option>
                                                    <option value="free">Free</option>
                                                </select>
                                                <i
                                                    class="icofont-simple-down absolute top-1/2 right-3 -translate-y-1/2 block text-lg z-10"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <!-- start and finish date -->
                                <div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-30px mb-15px">
                                        <div>
                                            <label for="startDate" class="mb-3 block font-semibold leading-1.8">Start
                                                Date</label>
                                            <input type="date" id="startDate" name="startDate"
                                                class="text-base bg-whiteColor text-blackColor2 w-full p-13px pr-30px rounded-md focus:outline-none focus:shadow-select" />
                                        </div>
                                        <div>
                                            <label for="finishDate" class="mb-3 block font-semibold leading-1.8">Finish
                                                Date</label>
                                            <input type="date" id="finishDate" name="finishDate"
                                                class="text-base bg-whiteColor text-blackColor2 w-full p-13px pr-30px rounded-md focus:outline-none focus:shadow-select" />
                                        </div>
                                    </div>
                                </div>




                                <!-- online and offline medium -->
                                <div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-30px mb-15px">
                                        <!-- Available -->
                                        <div>
                                            <label for="available"
                                                class="mb-3 block font-semibold leading-1.8">Available</label>
                                            <div class="bg-whiteColor relative rounded-md">
                                                <select id="available" name="available"
                                                    class="text-base bg-transparent text-blackColor2 w-full p-13px pr-30px block appearance-none relative z-20 focus:outline-none focus:shadow-select rounded-md">
                                                    <option value="online" selected>Online</option>
                                                    <option value="offline">Offline</option>
                                                    <option value="online_offline">Online/Offline</option>
                                                </select>
                                                <i
                                                    class="icofont-simple-down absolute top-1/2 right-3 -translate-y-1/2 block text-lg z-10"></i>
                                            </div>
                                        </div>

                                        <!-- Language/Medium -->
                                        <div>
                                            <label for="language"
                                                class="mb-3 block font-semibold leading-1.8">Language/Medium</label>
                                            <div class="bg-whiteColor relative rounded-md">
                                                <select id="language" name="language"
                                                    class="text-base bg-transparent text-blackColor2 w-full p-13px pr-30px block appearance-none relative z-20 focus:outline-none focus:shadow-select rounded-md">
                                                    <option value="hindi" selected>Hindi Medium</option>
                                                    <option value="english">English Medium</option>
                                                    <option value="hinglish">Hinglish</option>
                                                </select>
                                                <i
                                                    class="icofont-simple-down absolute top-1/2 right-3 -translate-y-1/2 block text-lg z-10"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- coruse pricing & offers  -->




                                <!-- Course Pricing & Offers -->
                                <div>
                                    <p class="flex items-center gap-0.5">
                                        <svg class="feather feather-info w-14px h-14px"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="12" y1="16" x2="12" y2="12"></line>
                                            <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                        </svg>
                                        The Course Price Includes Discounts and the final price.
                                    </p>

                                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-30px mb-15px">
                                        <!-- Regular Price -->
                                        <div>
                                            <label for="regularPrice" class="mb-3 block font-semibold">Regular Price
                                                (&#8377;)</label>
                                            <input type="text" id="regularPrice" name="regular_price" maxlength="6"
                                                placeholder="Regular Price (₹)" class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark 
                     bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark 
                     placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                        </div>

                                        <!-- Discount Percentage -->
                                        <div>
                                            <label for="discountPercent" class="mb-3 block font-semibold">Discount
                                                (%)</label>
                                            <input type="text" id="discountPercent" name="discount_percent"
                                                maxlength="6" placeholder="Discount (%)" class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark 
                     bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark 
                     placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                        </div>

                                        <!-- Final Price -->
                                        <div>
                                            <label for="finalPrice" class="mb-3 block font-semibold">Final Price
                                                (&#8377;)</label>
                                            <input type="text" id="finalPrice" name="final_price" readonly
                                                placeholder="Final Price (₹)" class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark 
                     bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark 
                     placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no 
                     bg-gray-100 cursor-not-allowed">
                                        </div>
                                    </div>
                                </div>






                                <div class="mt-15px">
                                    <button type="submit"
                                        class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark">
                                        Create Course
                                    </button>
                                </div>


                            </form>

                        </div>
























                        <!-- course Details -->
                        <div class="hidden transition-all duration-300">

                            <form
                                class="p-10px md:p-10 lg:p-5 2xl:p-10 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8 aos-init aos-animate"
                                data-aos="fade-up">
                                <div class="grid grid-cols-1 mb-15px gap-15px">
                                    <div>
                                        <label class="mb-3 block font-semibold">Course Title</label>
                                        <input type="text" placeholder="Course Title"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                    </div>
                                    <!-- <div>
                                                <label class="mb-3 block font-semibold">Course Slug</label>
                                                <input type="text" placeholder="Course Slug"
                                                    class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                            </div> -->
                                    <div>
                                        <label class="mb-3 block font-semibold">Free Regular Price ($)</label>
                                        <input type="text" placeholder="Free Regular Price ($)"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                    </div>
                                    <div>
                                        <p class="flex items-center gap-0.5">
                                            <svg class="feather feather-info w-14px h-14px"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
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
                                            <svg class="feather feather-info w-14px h-14px"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
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








                                <!-- start and finish date -->
                                <div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-30px mb-15px">
                                        <div>
                                            <label class="mb-3  block font-semibold  leading-1.8">Start Date</label>
                                            <div class="bg-whiteColor relative rounded-md">
                                                <select
                                                    class="text-base bg-transparent text-blackColor2 w-full p-13px pr-30px focus:outline-none block appearance-none relative z-20 focus:shadow-select rounded-md">
                                                    <option selected="">Date</option>

                                                </select>
                                                <i
                                                    class="icofont-simple-down absolute top-1/2 right-3 -translate-y-1/2 block text-lg z-10"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-3  block font-semibold  leading-1.8">
                                                Finish Date </label>
                                            <div class="bg-whiteColor relative rounded-md">
                                                <select
                                                    class="text-base bg-transparent text-blackColor2 w-full p-13px pr-30px focus:outline-none block appearance-none relative z-20 focus:shadow-select rounded-md">
                                                    <option selected="">date</option>
                                                </select>
                                                <i
                                                    class="icofont-simple-down absolute top-1/2 right-3 -translate-y-1/2 block text-lg z-10"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                                <!-- online and offline medium -->
                                <div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-30px mb-15px">
                                        <div>
                                            <label class="mb-3  block font-semibold  leading-1.8">Available</label>
                                            <div class="bg-whiteColor relative rounded-md">
                                                <select
                                                    class="text-base bg-transparent text-blackColor2 w-full p-13px pr-30px focus:outline-none block appearance-none relative z-20 focus:shadow-select rounded-md">
                                                    <option selected="">Online</option>
                                                    <option value="1">Offline</option>
                                                    <option value="2">Online/Offline</option>

                                                </select>
                                                <i
                                                    class="icofont-simple-down absolute top-1/2 right-3 -translate-y-1/2 block text-lg z-10"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="mb-3  block font-semibold  leading-1.8">
                                                Language/Medium </label>
                                            <div class="bg-whiteColor relative rounded-md">
                                                <select
                                                    class="text-base bg-transparent text-blackColor2 w-full p-13px pr-30px focus:outline-none block appearance-none relative z-20 focus:shadow-select rounded-md">
                                                    <option selected="">Hindi Medium</option>
                                                    <option value="1">English Medium</option>
                                                    <option value="2">Hinglish</option>
                                                </select>
                                                <i
                                                    class="icofont-simple-down absolute top-1/2 right-3 -translate-y-1/2 block text-lg z-10"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                               
                                        <div class="mb-15px">
                                            <label class="mb-3 block font-semibold">About Course</label>
                                            <textarea
                                                class="w-full py-10px px-5 text-sm text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md"
                                                cols="30" rows="10">                              </textarea>
                                        </div>
        
                                        <div class="mt-15px">
                                            <button type="submit"
                                                class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark">
                                                Update Info
                                            </button>
                                        </div>
                                    </form>
                                </div>
        
        
                                <div class="hidden transition-all duration-300">
                                    <form class="text-sm text-blackColor dark:text-blackColor-dark leading-1.8"
                                        data-aos="fade-up">
                                        <div class="grid grid-cols-1 mb-15px gap-y-15px gap-x-30px">
                                            <div>
                                                <label class="mb-3 block font-semibold"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="14" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-facebook inline-block mr-1">
                                                        <path
                                                            d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                                        </path>
                                                    </svg>Facebook</label>
                                                <input type="text" placeholder="https://facebook.com/"
                                                    class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                            </div>
        
                                            <div>
                                                <label class="mb-3 block font-semibold"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="14" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-twitter inline-block mr-1">
                                                        <path
                                                            d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                                        </path>
                                                    </svg>
                                                    Twitter</label>
                                                <input type="text" placeholder="https://twitter.com/"
                                                    class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                            </div>
        
                                            <div>
                                                <label class="mb-3 block font-semibold"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="14" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-linkedin inline-block mr-1">
                                                        <path
                                                            d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                                        </path>
                                                        <rect x="2" y="9" width="4" height="12"></rect>
                                                        <circle cx="4" cy="4" r="2"></circle>
                                                    </svg>Linkedin</label>
                                                <input type="text" placeholder="https://linkedin.com/"
                                                    class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                            </div>
        
                                            <div>
                                                <label class="mb-3 block font-semibold"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="14" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-layout inline-block mr-1">
                                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                                        <line x1="3" y1="9" x2="21" y2="9"></line>
                                                        <line x1="9" y1="21" x2="9" y2="9"></line>
                                                    </svg>Website</label>
                                                <input type="text" placeholder="https://website.com/"
                                                    class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                            </div>
        
                                            <div>
                                                <label class="mb-3 block font-semibold"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="14" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-github inline-block mr-1">
                                                        <path
                                                            d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                                        </path>
                                                    </svg>Github</label>
                                                <input type="text" placeholder="https://github.com/"
                                                    class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                            </div>
                                        </div>
        
                                        <div class="mt-15px">
                                            <button type="submit"
                                                class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark">
                                                Update Social
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



<!-- Admin Dashboard Footer section admin_footer  -->
<?php
$this->load->view('dashboard/master_contents/dAdmin_master/admin_footer');
?>
