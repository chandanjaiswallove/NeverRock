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

                            <!-- course info data -->
                            <!-- course info data -->
                            <!-- course info data -->

                            <form
                                class="p-10px md:p-10 lg:p-5 2xl:p-10 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8 aos-init aos-animate"
                                data-aos="fade-up" method="POST" action="<?php echo base_url('createCourse'); ?>"
                                enctype="multipart/form-data">

                                <div class="grid grid-cols-1 mb-15px gap-15px">
                                    <div>
                                        <label class="mb-3 block font-semibold">Course Title</label>
                                        <input type="text" placeholder="Course Title"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                                            id="courseTitle" name="courseTitle" required>
                                    </div>
                                </div>

                                <div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-30px mb-15px">
                                        <!-- Upload Image -->
                                        <div>
                                            <label class="mb-3 block font-semibold">Upload Image</label>
                                            <input type="file" id="courseImage" name="courseImage" accept="image/*"
                                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                        </div>

                                        <!-- Category Choose by Class Dropdown -->
                                        <!-- Category Choose by Class Dropdown -->
                                        <div>
                                            <label for="courseCategory"
                                                class="mb-3 block font-semibold leading-1.8">Course
                                                Category</label>
                                            <div class="bg-whiteColor relative rounded-md">
                                                <select id="courseCategory" name="courseCategory" required
                                                    class="text-base bg-transparent text-blackColor2 w-full p-13px pr-30px block appearance-none relative z-20 focus:outline-none focus:shadow-select rounded-md">
                                                    <option value="" disabled selected>--- Select Course Category ---
                                                    </option>
                                                    <option value="filter1">Class 8th</option>
                                                    <option value="filter2">Class 9th</option>
                                                    <option value="filter3">Class 10th</option>
                                                    <option value="filter4">Class 11th</option>
                                                    <option value="filter5">Class 12th</option>
                                                </select>
                                                <i
                                                    class="text-blackColor2 icofont-simple-down absolute top-1/2 right-3 -translate-y-1/2 block text-lg z-10"></i>
                                            </div>

                                        </div>

                                        <!-- Paid/Free Dropdown -->
                                        <!-- Paid/Free Dropdown -->
                                        <div>
                                            <label for="courseType" class="mb-3 block font-semibold leading-1.8">Course
                                                Type</label>
                                            <div class="bg-whiteColor relative rounded-md">
                                                <select id="courseType" name="courseType" required
                                                    class="text-base bg-transparent text-blackColor2 w-full p-13px pr-30px block appearance-none relative z-20 focus:outline-none focus:shadow-select rounded-md">
                                                    <option value="" disabled selected>--- Select Course Type ---
                                                    </option>
                                                    <option value="paid">Paid</option>
                                                    <option value="free">Free</option>
                                                </select>
                                                <i
                                                    class=" text-blackColor2 icofont-simple-down absolute top-1/2 right-3 -translate-y-1/2 block text-lg z-10"></i>
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
                                                class="text-base bg-whiteColor text-blackColor2 w-full p-13px pr-30px rounded-md focus:outline-none focus:shadow-select"
                                                required />
                                        </div>
                                        <div>
                                            <label for="finishDate" class="mb-3 block font-semibold leading-1.8">Finish
                                                Date</label>
                                            <input type="date" id="finishDate" name="finishDate"
                                                class="text-base bg-whiteColor text-blackColor2 w-full p-13px pr-30px rounded-md focus:outline-none focus:shadow-select"
                                                required />
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
                                                <select id="available" name="avilability" required
                                                    class="text-base bg-transparent text-blackColor2 w-full p-13px pr-30px block appearance-none relative z-20 focus:outline-none focus:shadow-select rounded-md">
                                                    <option value="" disabled selected>Select Available </option>
                                                    <option value="online">Online</option>
                                                    <option value="offline">Offline</option>
                                                    <option value="online + offline">Online + Offline</option>
                                                </select>
                                                <i
                                                    class=" text-blackColor2 icofont-simple-down absolute top-1/2 right-3 -translate-y-1/2 block text-lg z-10"></i>
                                            </div>
                                        </div>

                                        <!-- Language/Medium -->
                                        <div>
                                            <label for="language"
                                                class="mb-3 block font-semibold leading-1.8">Language/Medium</label>
                                            <div class="bg-whiteColor relative rounded-md">
                                                <select id="language" name="language" required
                                                    class="text-base bg-transparent text-blackColor2 w-full p-13px pr-30px block appearance-none relative z-20 focus:outline-none focus:shadow-select rounded-md">
                                                    <option value="" disabled selected>Select Language/Medium</option>
                                                    <option value="hindi">Hindi Medium</option>
                                                    <option value="english">English Medium</option>
                                                    <option value="hinglish">Hinglish</option>
                                                </select>
                                                <i
                                                    class="text-blackColor2 icofont-simple-down absolute top-1/2 right-3 -translate-y-1/2 block text-lg z-10"></i>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <!-- coruse pricing & offers  -->



                                <!-- COURSE PRICING SECTION (Hide/Show based on Type) -->
                                <!-- ============================== -->
                                <div id="pricingSection" class="mt-20px">
                                    <p class="flex items-center gap-0.5 mb-4">
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
                                            <label for="regularPrice" class="mb-3 block font-semibold">Actual Price
                                                (&#8377;)</label>
                                            <input type="text" id="regularPrice" name="regularPrice" maxlength="6"
                                                placeholder="Regular Price (₹)" class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark
        bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark
        placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no " required>
                                        </div>

                                        <!-- Discount Percentage -->
                                        <div>
                                            <label for="discountPercent" class="mb-3 block font-semibold">Discount
                                                (%)</label>
                                            <input type="text" id="discountPercent" name="discountPercent" maxlength="6"
                                                placeholder="Discount (%)" class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark
        bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark
        placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no" required>
                                        </div>

                                        <!-- Final Price -->
                                        <div>
                                            <label for="finalPrice" class="mb-3 block font-semibold">Selling Price
                                                (&#8377;)</label>
                                            <input type="text" id="finalPrice" name="finalPrice"
                                                placeholder="Final Price (₹)" class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark
        bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark
        placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no bg-gray-100">
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-15px">
                                    <button type="submit"
                                        class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark"
                                        name="registerCourse" id="registerCourse">
                                        Create Course
                                    </button>
                                </div>


                            </form>

                        </div>







                        <!-- Course Details Tab Content -->
                        <div class="hidden transition-all duration-300">

                            <!-- Basic Accordion -->
                            <div class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4">
                                <div class="cursor-pointer accordion-controller flex justify-between items-center text-lg font-semibold py-5 px-6"
                                    onclick="this.nextElementSibling.classList.toggle('hidden')">
                                    <span class="text-blackColor dark:text-whiteColor">Basic</span>
                                    <svg class="transition-all duration-500 rotate-0  " width="20"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#212529">
                                        <path fill-rule="evenodd"
                                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg>
                                </div>

                                <div class="hidden px-6 pb-6">
                                    <form
                                        class="p-10px md:p-10 lg:p-5 2xl:p-10 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8 space-y-4">

                                        <!-- Course Title -->
                                        <div>
                                            <label class="mb-3 block font-semibold">Course Title</label>
                                            <input type="text" placeholder="Course Title" name="courseTitle"
                                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                        </div>

                                        <!-- Upload Image -->
                                        <div>
                                            <label class="mb-3 block font-semibold">Upload Image</label>
                                            <input type="file" accept="image/*" name="courseImage"
                                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md font-no">
                                        </div>

                                        <!-- Short Description -->
                                        <div>
                                            <label class="mb-3 block font-semibold">Short Description</label>
                                            <textarea rows="3" placeholder="Write short course description..."
                                                name="shortDesc"
                                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md font-no placeholder:text-placeholder placeholder:opacity-80 leading-23px"></textarea>
                                        </div>

                                    </form>
                                </div>
                            </div>

                            <!-- Curriculum Accordion -->
                            <div class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4">
                                <div class="cursor-pointer accordion-controller flex justify-between items-center text-lg font-semibold py-5 px-6"
                                    onclick="this.nextElementSibling.classList.toggle('hidden')">
                                    <span class="text-blackColor dark:text-whiteColor">Curriculum</span>
                                    <svg class="transition-all duration-500 rotate-0" width="20"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#212529">
                                        <path fill-rule="evenodd"
                                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg>
                                </div>

                                <div class="hidden px-6 pb-6">
                                    <form
                                        class="p-10px md:p-10 lg:p-5 2xl:p-10 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8 space-y-4">

                                        <!-- Subjects Container (inputs go here) -->
                                        <div id="subjectsWrapper" class="space-y-3"><!-- gap बढ़ाया 2 से 3 -->
                                            <!-- Existing First Input -->
                                            <label class="mb-3 block font-semibold">Subject Name</label>
                                            <div class="flex gap-2 items-center">
                                                <input type="text" name="subjectName[]" placeholder="Enter subject name"
                                                    class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                            </div>
                                        </div>

                                        <!-- Add New Subject Button (always at bottom) -->
                                        <div class="mt-15px">
                                            <button type="button" onclick="addNewSubject()"
                                                class="px-5 py-2 bg-primaryColor text-whiteColor rounded hover:bg-primaryColor-dark">
                                                Add New Subject
                                            </button>
                                        </div>

                                    </form>
                                </div>
                            </div>

                            <!-- Description Accordion -->
                            <!-- Description Accordion -->
                            <div class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4">
                                <div class="cursor-pointer accordion-controller flex justify-between items-center text-lg font-semibold py-5 px-6"
                                    onclick="this.nextElementSibling.classList.toggle('hidden')">
                                    <span class="text-blackColor dark:text-whiteColor">Description</span>
                                    <svg class="transition-all duration-500 rotate-0" width="20"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#212529">
                                        <path fill-rule="evenodd"
                                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                        </path>
                                    </svg>
                                </div>

                                <div class="hidden px-6 pb-6">
                                    <form
                                        class="p-10px md:p-10 lg:p-5 2xl:p-10 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8 space-y-4">

                                        <!-- About Course Short Description -->
                                        <div class="mb-4">
                                            <label class="mb-2 block font-semibold">About Course (Short
                                                Description)</label>
                                            <textarea name="courseShortDescription"
                                                placeholder="Enter short description"
                                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                                                required></textarea>
                                        </div>

                                        <!-- Important Fields Container -->
                                        <div id="importantFieldsWrapper" class="space-y-3">
                                            <label class="mb-2 block font-semibold">Important Field</label>
                                            <div class="flex gap-2 items-center">
                                                <input type="text" name="importantField[]"
                                                    placeholder="Enter important field"
                                                    class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                                                    required>
                                            </div>
                                        </div>

                                        <!-- Add New Important Field Button (always at bottom) -->
                                        <div class="mt-15px">
                                            <button type="button" onclick="addNewImportantField()"
                                                class="px-5 py-2 bg-primaryColor text-whiteColor rounded hover:bg-primaryColor-dark">
                                                Add New Important
                                            </button>
                                        </div>

                                    </form>
                                </div>
                            </div>




                        </div>

                        <!-- third tab  -->
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






























    <!-- add new improtant topic from description -->
    <script>
        function addNewImportantField() {
            const wrapper = document.getElementById('importantFieldsWrapper');
            const div = document.createElement('div');
            div.className = 'flex gap-2 items-center';
            div.innerHTML = `
        <input type="text" name="importantField[]" placeholder="Enter important field"
            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no" required>
        <button type="button" onclick="this.parentElement.remove()" 
            class="px-3 py-2 bg-red-500 text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor rounded">
            Remove
        </button>
    `;
            wrapper.appendChild(div);
        }
    </script>


    <!-- add new subject script -->
    <script>
        function addNewSubject() {
            const wrapper = document.getElementById('subjectsWrapper');

            // Create new input + remove button
            const newDiv = document.createElement('div');
            newDiv.classList.add('flex', 'gap-2', 'items-center');

            newDiv.innerHTML = `
                                    <input type="text" name="subjectName[]" placeholder="Enter subject name"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                    <button type="button" onclick="this.parentElement.remove()"
                                            class="px-3 py-2 bg-transparent text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor rounded">
                                        Remove
                                    </button>
                                    `;

            // Append new input
            wrapper.appendChild(newDiv);
        }
    </script>


    <!-- Pricing and Disocun Sell cost -->
    <script>
        const regularPriceInput = document.getElementById('regularPrice');
        const discountInput = document.getElementById('discountPercent');
        const finalPriceInput = document.getElementById('finalPrice');

        function updatePrices() {
            let regularPrice = parseFloat(regularPriceInput.value) || 0;
            let discountPercent = parseFloat(discountInput.value) || 0;
            let finalPrice = parseFloat(finalPriceInput.value) || 0;

            // Regular Price must be positive
            if (regularPrice <= 0) {
                discountInput.value = '';
                finalPriceInput.value = '';
                return;
            }

            // CASE 1: User types discount → calculate final
            if (document.activeElement === discountInput) {
                if (discountPercent < 0) discountPercent = 0;
                if (discountPercent > 100) discountPercent = 100;

                finalPrice = regularPrice - (regularPrice * discountPercent / 100);
                finalPriceInput.value = finalPrice.toFixed(2);
            }

            // CASE 2: User types final → calculate discount
            else if (document.activeElement === finalPriceInput) {
                if (finalPrice > regularPrice) {
                    discountInput.value = 0;
                } else {
                    discountPercent = ((regularPrice - finalPrice) / regularPrice) * 100;
                    discountInput.value = discountPercent.toFixed(2);
                }
            }

            // CASE 3: User types regular → recalculate both if other fields exist
            else if (document.activeElement === regularPriceInput) {
                if (discountInput.value) {
                    finalPrice = regularPrice - (regularPrice * discountPercent / 100);
                    finalPriceInput.value = finalPrice.toFixed(2);
                } else if (finalPriceInput.value) {
                    discountPercent = ((regularPrice - finalPrice) / regularPrice) * 100;
                    discountInput.value = discountPercent.toFixed(2);
                }
            }
        }

        regularPriceInput.addEventListener('input', updatePrices);
        discountInput.addEventListener('input', updatePrices);
        finalPriceInput.addEventListener('input', updatePrices);


    </script>


    <!-- hide show for free and paid -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const courseTypeSelect = document.getElementById("courseType");
            const pricingSection = document.getElementById("pricingSection");

            // hide by default
            pricingSection.style.display = "none";

            // when course type changes
            courseTypeSelect.addEventListener("change", function () {
                if (this.value === "paid") {
                    pricingSection.style.display = "block"; // show pricing section
                } else {
                    pricingSection.style.display = "none"; // hide pricing section
                }
            });
        });
    </script>

</main>


<!-- color dark ligh mode for clicking
text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor
 -->
<!-- 
 background color
  bg-darkdeep3 dark:bg-transparent  text-blackColor dark:text-blackColor-dark -->

<!-- Admin Dashboard Footer section admin_footer  -->
<?php
$this->load->view('dashboard/master_contents/dAdmin_master/admin_footer');
?>