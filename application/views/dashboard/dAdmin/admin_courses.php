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
                        <button id="courseDetailsTab"
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

                            <form id="courseInfoForm"
                                class="p-10px md:p-10 lg:p-5 2xl:p-10 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8 aos-init aos-animate"
                                data-aos="fade-up" method="POST" action="<?php echo base_url('createCourse'); ?>"
                                enctype="multipart/form-data">


                                <div class="grid grid-cols-1 mb-15px gap-15px">
                                    <!-- Course Title -->
                                    <div>
                                        <label class="mb-3 block font-semibold">Course Title</label>
                                        <input type="text" placeholder="Course Title"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                                            id="courseTitle" name="course_name" required>
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
                                        <!-- <div>
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
                                        </div> -->

                                        <div>
                                            <label class="mb-3 block font-semibold">Course Category</label>
                                            <select required
                                                class="w-full py-10px px-5 text-sm focus:outline-none bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md"
                                                id="courseCategory" name="courseCategory">

                                                <option value="" disabled selected>--- Select Course Category ---
                                                </option>
                                                <option value="filter1">Class 8th</option>
                                                <option value="filter2">Class 9th</option>
                                                <option value="filter3">Class 10th</option>
                                                <option value="filter4">Class 11th</option>
                                                <option value="filter5">Class 12th</option>
                                            </select>
                                        </div>


                                        <!-- Paid/Free Dropdown -->
                                        <!-- Paid/Free Dropdown -->
                                        <!-- <div>
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
                                        </div> -->
                                        <div>
                                            <label class="mb-3 block font-semibold">Course Type</label>
                                            <select required
                                                class="w-full py-10px px-5 text-sm focus:outline-none bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md"
                                                id="courseType" name="courseType">

                                                <option value="" disabled selected>--- Select Course Type ---</option>
                                                <option value="paid">Paid</option>
                                                <option value="free">Free</option>
                                            </select>
                                        </div>


                                    </div>
                                </div>




                                <!-- start and finish date -->
                                <div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-30px mb-15px">
                                        <!-- <div>
                                            <label for="startDate" class="mb-3 block font-semibold leading-1.8">Start
                                                Date</label>
                                            <input type="date" id="startDate" name="startDate"
                                                class="text-base bg-whiteColor text-blackColor2 w-full p-13px pr-30px rounded-md focus:outline-none focus:shadow-select"
                                                required />
                                        </div>
                                        <div>
                                            <label for="finishDate" class="mb-3 block font-semibold leading-1.8">End
                                                On</label>
                                            <input type="date" id="finishDate" name="finishDate"
                                                class="text-base bg-whiteColor text-blackColor2 w-full p-13px pr-30px rounded-md focus:outline-none focus:shadow-select"
                                                required />
                                        </div> -->
                                        <div>
                                            <label class="mb-3 block font-semibold">Start Date</label>
                                            <input type="date" id="startDate" name="startDate" required
                                                class="w-full py-10px px-5 text-sm focus:outline-none bg-whiteColor  text-blackColor2  border-2 border-borderColor dark:border-borderColor-dark rounded-md" />
                                        </div>

                                        <div>
                                            <label class="mb-3 block font-semibold">End On</label>
                                            <input type="date" id="finishDate" name="finishDate" required
                                                class="w-full py-10px px-5 text-sm focus:outline-none bg-whiteColor  text-blackColor2  border-2 border-borderColor dark:border-borderColor-dark rounded-md" />
                                        </div>


                                    </div>
                                </div>




                                <!-- online and offline medium -->
                                <div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-30px mb-15px">
                                        <!-- Available -->
                                        <!-- <div>
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
                                        </div> -->

                                        <div>
                                            <label class="mb-3 block font-semibold">Available</label>
                                            <select required
                                                class="w-full py-10px px-5 text-sm focus:outline-none bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md"
                                                id="available" name="avilability">
                                                <option value="" disabled selected>Select Available</option>
                                                <option value="online">Online</option>
                                                <option value="offline">Offline</option>
                                                <option value="online + offline">Online + Offline</option>
                                            </select>
                                        </div>


                                        <!-- Language/Medium -->
                                        <!-- <div>
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
                                        </div> -->

                                        <div>
                                            <label class="mb-3 block font-semibold">Language/Medium</label>
                                            <select required
                                                class="w-full py-10px px-5 text-sm focus:outline-none bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md"
                                                id="language" name="language">

                                                <option value="" disabled selected>Select Language/Medium</option>
                                                <option value="hindi">Hindi Medium</option>
                                                <option value="english">English Medium</option>
                                                <option value="hinglish">Hinglish</option>
                                            </select>
                                        </div>


                                    </div>
                                </div>

                                <!-- Enquiry Number -->
                                <!-- Upload Intro Video -->
                                <div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-30px mb-15px">
                                        <!-- Enquiry Number -->
                                        <div>
                                            <label for="enquiryNumber"
                                                class="mb-3 block font-semibold leading-1.8">Enquiry Number</label>
                                            <input type="text" id="enquiryNumber" name="enquiryNumber"
                                                placeholder="Enter Enquiry Number" required maxlength="14"
                                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 rounded-md font-no">
                                        </div>

                                        <!-- Intro Video (File Upload / YouTube URL) -->
                                        <div>
                                            <label class="mb-3 block font-semibold leading-1.8">Upload Intro Video <span
                                                    class="text-red-500">*</span></label>

                                            <!-- Tabs -->
                                            <div class="flex gap-4 mb-3">
                                                <button type="button" id="videoFileTab"
                                                    class="px-4 py-2 bg-primaryColor text-white rounded hover:bg-primaryColor-dark dark:text-whiteColor ">
                                                    Upload Video
                                                </button>

                                                <button type="button" id="videoUrlTab"
                                                    class="px-4 py-2 bg-gray-200 dark:bg-gray-700 text-blackColor dark:text-whiteColor rounded hover:bg-gray-300 dark:hover:bg-gray-600">
                                                    YouTube URL
                                                </button>
                                            </div>

                                            <!-- File Input -->
                                            <input type="file" id="courseVideoFile" name="courseVideoFile"
                                                accept="video/*"
                                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md font-no mb-3">

                                            <!-- YouTube URL Input -->
                                            <input type="url" id="courseVideoUrl" name="courseVideoUrl"
                                                placeholder="Add your YouTube Video URL here. Example: https://www.youtube.com/watch?v=yourvideoid"
                                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md font-no mb-3 hidden">
                                        </div>
                                    </div>
                                </div>

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
        placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no ">
                                        </div>

                                        <!-- Discount Percentage -->
                                        <div>
                                            <label for="discountPercent" class="mb-3 block font-semibold">Discount
                                                (%)</label>
                                            <input type="text" id="discountPercent" name="discountPercent" maxlength="6"
                                                placeholder="Discount (%)" class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark
        bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark
        placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
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
                                    <button type="submit" id="nextToDetails" name="registerCourse"
                                        class="text-whiteColor bg-primaryColor px-25px py-10px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark">
                                        Save Info
                                    </button>


                                </div>


                            </form>

                        </div>

                        <!-- CourseDetails coursedetials start here #212529 Second Description Tab Content -->
                        <div class="hidden transition-all duration-300">
                            <!-- Curriculum Accordion -->
                            <form action="">
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
                                        <div
                                            class="p-10px md:p-10 lg:p-5 2xl:p-10 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8 space-y-4">

                                            <div id="subjectsWrapper" class="space-y-3"><!-- gap बढ़ाया 2 से 3 -->
                                                <!-- Existing First Input -->
                                                <label class="mb-3 block font-semibold">Subject Name</label>
                                                <div class="flex gap-2 items-center">
                                                    <input type="text" name="subjectName[]"
                                                        placeholder="Enter subject name"
                                                        class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                                </div>
                                            </div>
                                            <!-- Course Description -->

                                            <!-- Subjects Container (inputs go here) -->
                                            <div>
                                                <label class="mb-3 block font-semibold">Short Description</label>
                                                <textarea placeholder="Write a short description about the course"
                                                    class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no resize-y"
                                                    id="courseDescription" name="courseDescription" rows="4" required
                                                    style="min-height: 100px; max-height:150px;"></textarea>
                                            </div>


                                            <!-- Add New Subject Button (always at bottom) -->
                                            <div class="mt-15px">
                                                <button type="button" onclick="addNewSubject()"
                                                    class="px-5 py-2 bg-primaryColor text-whiteColor rounded hover:bg-primaryColor-dark">
                                                    Add New Subject
                                                </button>
                                            </div>
                                        </div>
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
                                        <div
                                            class="p-10px md:p-10 lg:p-5 2xl:p-10 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8 space-y-4">
                                            <!-- Important Fields Section -->
                                            <div id="importantFieldsContainer" class="space-y-4 mb-4">

                                                <!-- Section Title -->
                                                <h3 class="text-lg font-semibold text-blackColor dark:text-whiteColor">
                                                    Headings & Short Descriptions
                                                </h3>

                                                <!-- Fixed First Block (Not Removable) -->
                                                <div class="group bg-gray-100 dark:bg-gray-800 p-5 rounded-md">
                                                    <div class="mb-3">
                                                        <label class="block font-semibold">Important Title</label>
                                                        <input type="text" name="importantHeading[]"
                                                            placeholder="Enter heading"
                                                            class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                                                            required>
                                                    </div>
                                                    <div>
                                                        <label class="block font-semibold">Description</label>
                                                        <textarea name="importantDescription[]"
                                                            placeholder="Enter description"
                                                            class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                                                            required
                                                            style="min-height: 100px; max-height:150px;"></textarea>
                                                    </div>
                                                </div>

                                                <!-- Dynamic Fields will be added here (new ones appear above button) -->
                                                <div id="dynamicFields" class="space-y-4"></div>

                                                <!-- Add Button (stays always at bottom) -->
                                                <div class="px-4 ">
                                                    <button type="button" onclick="addImportantField()"
                                                        class="bg-primaryColor text-white py-2 px-4  rounded-md hover:bg-primaryColor-dark transition">
                                                        + Add More
                                                    </button>
                                                </div>

                                            </div>

                                            <!-- Important Topics Section -->
                                            <div id="importantTopicsContainer" class="space-y-4 mt-15px  ">

                                                <!-- Section Title -->
                                                <h3
                                                    class="text-lg font-semibold text-primaryColor dark:text-whiteColor  ">
                                                    Important Topics
                                                </h3>

                                                <!-- Fixed First Topic (Not Removable) -->
                                                <div class="group bg-gray-100 dark:bg-gray-800 p-5 rounded-md">
                                                    <div class="mb-3">
                                                        <label class="block font-semibold">Important Topic Name</label>
                                                        <input type="text" name="importantTitle[]"
                                                            placeholder="Enter important topic name"
                                                            class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                                                            required>
                                                    </div>

                                                    <!-- Important Fields for this topic -->
                                                    <div id="importantFieldsWrapper" class="space-y-3">
                                                        <label class="block font-semibold">Important Fields (related to
                                                            this
                                                            topic)</label>

                                                        <!-- Default Field (Not Removable) -->
                                                        <div class="flex items-start gap-2">
                                                            <input type="text" name="importantField[]"
                                                                placeholder="Enter important field"
                                                                class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <!-- Dynamic Fields (New Topics) -->
                                                    <div id="dynamicTopicFields" class="space-y-4"></div>

                                                    <!-- Add Button (Always at Bottom) -->
                                                    <div class="mt-15px">
                                                        <button type="button" onclick="addNewImportantField()"
                                                            class="bg-primaryColor text-white py-2 px-4 rounded-md hover:bg-primaryColor-dark transition">
                                                            + Add More Fields
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Faq Accordion -->
                                <!-- FAQ Accordion -->
                                <div class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4">
                                    <div class="cursor-pointer accordion-controller flex justify-between items-center text-lg font-semibold py-5 px-6"
                                        onclick="this.nextElementSibling.classList.toggle('hidden')">
                                        <span class="text-blackColor dark:text-whiteColor">FAQ</span>
                                        <svg class="transition-all duration-500 rotate-0" width="20"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#212529">
                                            <path fill-rule="evenodd"
                                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                            </path>
                                        </svg>
                                    </div>

                                    <div class="hidden px-6 pb-6">
                                        <div
                                            class="p-10px md:p-10 lg:p-5 2xl:p-10 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8 space-y-4">

                                            <!-- FAQ Section -->
                                            <div id="faqWrapper" class="space-y-4">
                                                <h3 class="text-lg font-semibold text-blackColor dark:text-whiteColor">
                                                    Frequently Asked Questions</h3>

                                                <!-- Fixed First FAQ -->
                                                <div class="group bg-gray-100 dark:bg-gray-800 p-5 rounded-md">
                                                    <div class="mb-3">
                                                        <label class="block font-semibold">Question</label>
                                                        <input type="text" id="faqQuestion_0" name="faqQuestion[0]"
                                                            placeholder="Enter your question here"
                                                            class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                                                            required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="block font-semibold">Answer</label>
                                                        <textarea id="faqAnswer_0" name="faqAnswer[0]"
                                                            placeholder="Enter the answer here"
                                                            class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                                                            required
                                                            style="min-height: 100px; max-height:150px;"></textarea>
                                                    </div>
                                                </div>

                                                <!-- Dynamic FAQs container -->
                                                <div id="dynamicFAQs" class="space-y-4"></div>

                                                <!-- Add More Button -->
                                                <div class="mt-3">
                                                    <button type="button" onclick="addNewFAQ()"
                                                        class="px-5 py-2 bg-primaryColor text-whiteColor rounded hover:bg-primaryColor-dark">
                                                        + Add More
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Instructor  -->
                                <!-- Instructor  -->
                                <div class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4">
                                    <div class="cursor-pointer accordion-controller flex justify-between items-center text-lg font-semibold py-5 px-6"
                                        onclick="this.nextElementSibling.classList.toggle('hidden')">
                                        <span class="text-blackColor dark:text-whiteColor">Instructors</span>
                                        <svg class="transition-all duration-500 rotate-0 w-5 h-5"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#212529">
                                            <path fill-rule="evenodd"
                                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                            </path>
                                        </svg>
                                    </div>

                                    <div class="hidden px-6 pb-6">
                                        <div
                                            class="p-4 md:p-5 lg:p-6 2xl:p-8 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark space-y-4">
                                            <h3 class="text-lg font-semibold text-blackColor dark:text-whiteColor mb-4">
                                                Select Instructors for this Course
                                            </h3>
                                            <!-- Multi-select Dropdown -->
                                            <div class="relative mb-4">
                                                <div class="relative mb-4">
                                                    <select id="instructorDropdown" multiple
                                                        class="w-full py-3 px-4 text-sm text-blackColor dark:text-whiteColor bg-whiteColor dark:bg-whiteColor-dark dark:bg-gray-700 border border-borderColor dark:border-borderColor-dark rounded-md focus:outline-none h-12">
                                                        <option value="1">Rosalina D. Willaim</option>
                                                        <option value="2">John Doe</option>
                                                        <option value="3">Mary Smith</option>
                                                        <option value="4">James Bond</option>
                                                        <option value="5">Anna Johnson</option>
                                                        <option value="6">Robert Brown</option>
                                                        <option value="7">Lucy Liu</option>
                                                        <option value="8">David Miller</option>
                                                        <option value="9">Sophia Lee</option>
                                                        <option value="10">Michael Scott</option>
                                                        <option value="11">Emma Watson</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Selected Instructors List -->
                                            <div id="selectedInstructors" class="space-y-3"></div>
                                        </div>
                                    </div>
                                </div>


                                <!-- Feautes  -->
                                <!-- Feautes  -->
                                <div class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4">
                                    <div class="cursor-pointer accordion-controller flex justify-between items-center text-lg font-semibold py-5 px-6"
                                        onclick="this.nextElementSibling.classList.toggle('hidden')">
                                        <span class="text-blackColor dark:text-whiteColor">Features</span>
                                        <svg class="transition-all duration-500 rotate-0 w-5 h-5"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#212529">
                                            <path fill-rule="evenodd"
                                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                            </path>
                                        </svg>
                                    </div>

                                    <div class="hidden px-6 pb-6">
                                        <div
                                            class="p-2 md:p-5 lg:p-5 2xl:p-6 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8 space-y-4">

                                            <h3 class="text-lg font-semibold text-blackColor dark:text-whiteColor mb-4">
                                                Add Features
                                            </h3>

                                            <!-- Fixed First Feature -->
                                            <div class="group bg-gray-100 dark:bg-gray-800 p-5 rounded-md">
                                                <div class="mb-3">
                                                    <label class="block font-semibold">Feature Heading</label>
                                                    <input type="text" name="featureHeading[0]"
                                                        placeholder="Enter feature heading"
                                                        class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                                                        required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="block font-semibold">Feature Value (Yes / No /
                                                        Write)</label>
                                                    <input type="text" name="featureValue[0]"
                                                        placeholder="Enter feature value"
                                                        class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                                                        required>
                                                </div>
                                            </div>

                                            <!-- Dynamic Features container -->
                                            <div id="dynamicFeatures" class="space-y-4"></div>

                                            <!-- Add More Button -->
                                            <div class="mt-3">
                                                <button type="button" onclick="addNewFeature()"
                                                    class="px-5 py-2 bg-primaryColor text-white rounded hover:bg-primaryColor-dark">
                                                    + Add More Features
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- Submit button here Save All -->
                                <div class="mt-15px">
                                    <button type="submit"
                                        class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark"
                                        name="registerCourse">
                                        Save Details
                                    </button>
                                </div>
                            </form>
                            <!-- Instructor Add More Instrucotr script -->
                            <script>
                                const dropdown = document.getElementById("instructorDropdown");
                                const selectedDiv = document.getElementById("selectedInstructors");

                                let selectedInstructors = [];

                                dropdown.addEventListener("change", () => {
                                    Array.from(dropdown.selectedOptions).forEach(option => {
                                        if (!selectedInstructors.find(i => i.id === option.value)) {
                                            selectedInstructors.push({ id: option.value, name: option.text });
                                        }
                                    });
                                    renderSelected();
                                });

                                function renderSelected() {
                                    selectedDiv.innerHTML = "";
                                    selectedInstructors.forEach(instr => {
                                        const div = document.createElement("div");
                                        div.className = "flex justify-between items-center py-3 px-4 border border-borderColor dark:border-borderColor-dark rounded-md bg-gray-100 dark:bg-gray-800";
                                        div.style.marginBottom = "10px"; // gap between blocks
                                        div.innerHTML = `
                                        <span class="text-contentColor dark:text-contentColor-dark">${instr.name}</span>
                                                <button type="button" class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor font-semibold" onclick="removeInstructor('${instr.id}')">Remove</button>
                                                `;
                                        selectedDiv.appendChild(div);
                                    });
                                }

                                function removeInstructor(id) {
                                    selectedInstructors = selectedInstructors.filter(i => i.id !== id);
                                    const option = Array.from(dropdown.options).find(opt => opt.value === id);
                                    if (option) option.selected = false;
                                    renderSelected();
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <!-- <script>
        document.getElementById("nextToDetails").addEventListener("click", function (e) {
            e.preventDefault();

            let form = document.getElementById("courseInfoForm");

            if (!form.checkValidity()) {
                form.reportValidity();
                return;
            }

            // If form is valid → go to course details tab
            document.getElementById("courseDetailsTab").click();
        });
    </script> -->


    <!-- Video upload & Youtube Url script -->
    <script>
        const videoFileTab = document.getElementById('videoFileTab');
        const videoUrlTab = document.getElementById('videoUrlTab');
        const videoFileInput = document.getElementById('courseVideoFile');
        const videoUrlInput = document.getElementById('courseVideoUrl');

        // Default: show video upload
        videoFileInput.classList.remove('hidden');
        videoUrlInput.classList.add('hidden');

        // Switch to File Upload
        videoFileTab.addEventListener('click', () => {
            videoFileInput.classList.remove('hidden');
            videoUrlInput.classList.add('hidden');

            // required हटाया गया
            videoFileInput.required = false;
            videoUrlInput.required = false;

            videoFileTab.classList.add('bg-primaryColor', 'text-white');
            videoFileTab.classList.remove('bg-gray-200', 'text-blackColor');
            videoUrlTab.classList.remove('bg-primaryColor', 'text-white');
            videoUrlTab.classList.add('bg-gray-200', 'text-blackColor');
        });

        // Switch to YouTube URL
        videoUrlTab.addEventListener('click', () => {
            videoFileInput.classList.add('hidden');
            videoUrlInput.classList.remove('hidden');

            // required हटाया गया
            videoFileInput.required = false;
            videoUrlInput.required = false;

            videoUrlTab.classList.add('bg-primaryColor', 'text-white');
            videoUrlTab.classList.remove('bg-gray-200', 'text-blackColor');
            videoFileTab.classList.remove('bg-primaryColor', 'text-white');
            videoFileTab.classList.add('bg-gray-200', 'text-blackColor');
        });
    </script>


    <!-- Add Feautes Script add more feautres -->

    <script>
        let featureCounter = 1; // Start from 1 because first feature is fixed

        function addNewFeature() {
            const container = document.getElementById("dynamicFeatures");

            // Create a new dynamic feature block
            const group = document.createElement("div");
            group.className = "group bg-gray-100 dark:bg-gray-800 p-5 rounded-md border-t border-borderColor dark:border-borderColor-dark";

            group.innerHTML = `
            <div class="mb-3">
                <label class="block font-semibold">Feature Heading</label>
                <input type="text" name="featureHeading[${featureCounter}]" placeholder="Enter feature heading"
                    class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                    required>
            </div>
            <div class="mb-3">
                <label class="block font-semibold">Feature Value (Yes / No / Write)</label>
                <input type="text" name="featureValue[${featureCounter}]" placeholder="Enter feature value"
                    class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                    required>
            </div>
            <div class="text-right">
                <button type="button" 
                    class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor text-sm font-semibold"
                    onclick="this.closest('.group').remove()">Remove</button>
            </div>
        `;

            container.appendChild(group);
            featureCounter++; // Increment counter for next dynamic feature
        }
    </script>

    <!-- faq question & answer  -->

    <script>
        let faqCounter = 1; // Start from 1 because first FAQ is fixed

        function addNewFAQ() {
            const container = document.getElementById("dynamicFAQs");

            // Create a new dynamic FAQ block
            const group = document.createElement("div");
            group.className = "group bg-gray-100 dark:bg-gray-800 p-5 rounded-md border-t border-borderColor dark:border-borderColor-dark";

            group.innerHTML = `
            <div class="mb-3">
            <label class="block font-semibold">Question</label>
            <input type="text" id="faqQuestion_${faqCounter}" name="faqQuestion[${faqCounter}]" placeholder="Enter your question here"
            class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
            required>
            </div>
            <div class="mb-3">
            <label class="block font-semibold">Answer</label>
            <textarea id="faqAnswer_${faqCounter}" name="faqAnswer[${faqCounter}]" placeholder="Enter the answer here"
            class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
            required  style="min-height: 100px; max-height:150px;"></textarea>
            </div>
            <div class="text-right">
            <button type="button"
            class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor text-sm font-semibold"
            onclick="this.closest('.group').remove()">Remove</button>
            </div>
            `;

            container.appendChild(group);
            faqCounter++; // Increment counter for next dynamic FAQ
        }
    </script>


    <!-- JavaScript for heading and description/Removing -->
    <script>
        function addImportantField() {
            const container = document.getElementById("dynamicFields");

            // Create a new group block
            const group = document.createElement("div");
            group.className =
                "group bg-gray-100 dark:bg-gray-800 p-5 rounded-md border-t border-borderColor dark:border-borderColor-dark";

            group.innerHTML = `
            <div class="mb-3">
                <label class="block font-semibold">Important Title</label>
                <input type="text" name="importantHeading[]" placeholder="Enter heading"
                    class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                    required>
            </div>
            <div class="mb-3">
                <label class="block font-semibold">Description</label>
                <textarea name="importantDescription[]" placeholder="Enter description"
                    class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                    required  style="min-height: 100px; max-height:150px;"></textarea>
            </div>
            <div class="text-right">
                <button type="button"
                    class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor text-sm font-semibold"
                    onclick="this.closest('.group').remove()">Remove</button>
            </div>
        `;

            // Append new field block above Add button (inside dynamicFields div)
            container.appendChild(group);
        }
    </script>


    <!-- add new improtant topic from description -->
    <!-- Script -->
    <script>
        function addNewImportantField() {
            const container = document.getElementById("dynamicTopicFields");

            // Create new block
            const group = document.createElement("div");
            group.className =
                "group bg-gray-100 dark:bg-gray-800 p-5 rounded-md border-t border-borderColor dark:border-borderColor-dark";

            group.innerHTML = `
            <div class="mb-3">
                <label class="block font-semibold">Important Topic Name</label>
                <input type="text" name="importantTitle[]" placeholder="Enter important topic name"
                    class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no" required>
            </div>

            <div class="mb-3">
                <label class="block font-semibold">Important Fields (related to this topic)</label>
                <input type="text" name="importantField[]" placeholder="Enter important field"
                    class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no" required>
            </div>

            <div class="text-right">
                <button type="button"
                    class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor text-sm font-semibold"
                    onclick="this.closest('.group').remove()">Remove</button>
            </div>
        `;

            container.appendChild(group);
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


<!-- Admin Dashboard Footer section admin_footer  -->
<?php
$this->load->view('dashboard/master_contents/dAdmin_master/admin_footer');
?>