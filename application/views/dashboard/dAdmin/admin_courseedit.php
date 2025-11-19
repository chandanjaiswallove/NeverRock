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

                    </div>
                    <div class="tab-contents">
                        <div class="transition-all duration-300" data-aos="fade-up">

                            <!-- course info data -->
                            <!-- course info data -->

                            <form id="courseInfoForm"
                                class="p-10px md:p-10 lg:p-5 2xl:p-10 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8 aos-init aos-animate"
                                data-aos="fade-up" method="POST" action="<?php echo base_url('updateCourse'); ?>"
                                enctype="multipart/form-data">
                                <?php
                                $fetchID = $_GET['id'];
                                $fetchSelectedCrs = $this->db->query("SELECT * FROM course_directory WHERE id = '$fetchID'");

                                foreach ($fetchSelectedCrs->result() as $row) {

                                    $myCourseName = $row->course_name;
                                    $course_Description = $row->course_description;
                                    $course_Category = $row->course_category;
                                    $course_Type = $row->course_type;
                                    $course_Thumbnail = $row->course_thumbnail;
                                    $starting_Date = $row->starting_date;
                                    $ending_Date = $row->ending_date;
                                    $course_Mode = $row->course_mode;
                                    $enquiry_Number = $row->enquiry_number;
                                    $course_Language = $row->course_language;
                                    $course_Actual_cost = $row->course_actual_cost;
                                    $course_Selling_cost = $row->course_selling_cost;
                                    $discount_Applied = $row->discount_applied;

                                    // both file collect any video or url only one two places
                                    $course_Preview_video = $row->course_preview_video;
                                    $course_Video_content = $row->course_video_content;
                                }

                                ?>

                                <!-- Hidden Inputs for Update -->
                                <input type="hidden" name="courseID" value="<?php echo $fetchID; ?>">
                                <input type="hidden" name="oldImage" value="<?php echo $course_Thumbnail; ?>">
                                <input type="hidden" name="oldVideo" value="<?php echo $course_Video_content; ?>">










                                <div class="grid grid-cols-1 mb-15px gap-15px">
                                    <!-- Course Title -->
                                    <div>
                                        <label class="mb-3 block font-semibold">Course Title</label>
                                        <input type="text" placeholder="Course Title"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                                            id="courseTitle" name="course_name" value="<?php echo $myCourseName; ?>"
                                            required>
                                    </div>

                                    <!-- Course Description -->
                                    <div>
                                        <label class="mb-3 block font-semibold">Short Description</label>
                                        <textarea placeholder="Write a short description about the course"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no resize-y"
                                            id="courseDescription" name="courseDescription" rows="4" required
                                            style="min-height: 100px; max-height:150px;"><?php echo $course_Description; ?></textarea>
                                    </div>
                                </div>


                                <div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-30px mb-15px">
                                        <!-- Enquiry Number -->
                                        <div>
                                            <label for="enquiryNumber"
                                                class="mb-3 block font-semibold leading-1.8">Enquiry Number</label>
                                            <input type="text" id="enquiryNumber" name="enquiryNumber"
                                                value="<?php echo $enquiry_Number; ?>"
                                                placeholder="Enter Enquiry Number" required maxlength="14"
                                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 rounded-md font-no">
                                        </div>


                                        <div>
                                            <label class="mb-3 block font-semibold">Course Category</label>
                                            <select required
                                                class="w-full py-10px px-5 text-sm focus:outline-none bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md"
                                                id="courseCategory" name="courseCategory">

                                                <option value="" disabled>Select Category</option>

                                                <option value="filter1" <?php echo ($course_category == 'filter1') ? 'selected' : ''; ?>>
                                                    Class 8th
                                                </option>

                                                <option value="filter2" <?php echo ($course_category == 'filter2') ? 'selected' : ''; ?>>
                                                    Class 9th
                                                </option>

                                                <option value="filter3" <?php echo ($course_category == 'filter3') ? 'selected' : ''; ?>>
                                                    Class 10th
                                                </option>

                                                <option value="filter4" <?php echo ($course_category == 'filter4') ? 'selected' : ''; ?>>
                                                    Class 11th
                                                </option>

                                                <option value="filter5" <?php echo ($course_category == 'filter5') ? 'selected' : ''; ?>>
                                                    Class 12th
                                                </option>

                                            </select>
                                        </div>



                                        <div>
                                            <label class="mb-3 block font-semibold">Course Type</label>
                                            <select required
                                                class="w-full py-10px px-5 text-sm focus:outline-none bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md"
                                                id="courseType" name="courseType">

                                                <option value="" disabled>Select Course Type</option>

                                                <option value="paid" <?php if ($course_Type == "paid")
                                                    echo "selected"; ?>>
                                                    Paid</option>
                                                <option value="free" <?php if ($course_Type == "free")
                                                    echo "selected"; ?>>
                                                    Free</option>

                                            </select>
                                        </div>



                                    </div>
                                </div>




                                <div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-30px mb-15px">

                                        <div>
                                            <label class="mb-3 block font-semibold">Start Date</label>
                                            <input type="date" id="startDate" name="startDate" required
                                                value="<?php echo $starting_Date; ?>"
                                                class="w-full py-10px px-5 text-sm focus:outline-none bg-whiteColor text-blackColor2 border-2 border-borderColor dark:border-borderColor-dark rounded-md" />
                                        </div>

                                        <div>
                                            <label class="mb-3 block font-semibold">End On</label>
                                            <input type="date" id="finishDate" name="finishDate" required
                                                value="<?php echo $ending_Date; ?>"
                                                class="w-full py-10px px-5 text-sm focus:outline-none bg-whiteColor text-blackColor2 border-2 border-borderColor dark:border-borderColor-dark rounded-md" />
                                        </div>

                                    </div>
                                </div>






                                <!-- online and offline medium -->
                                <div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-30px mb-15px">
                                        <div>
                                            <label class="mb-3 block font-semibold">Available</label>
                                            <select required
                                                class="w-full py-10px px-5 text-sm focus:outline-none bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md"
                                                id="available" name="avilability">

                                                <option value="" disabled>Select Available</option>

                                                <option value="online" <?php if ($course_Mode == "online")
                                                    echo "selected"; ?>>Online</option>
                                                <option value="offline" <?php if ($course_Mode == "offline")
                                                    echo "selected"; ?>>Offline</option>
                                                <option value="online + offline" <?php if ($course_Mode == "online + offline")
                                                    echo "selected"; ?>>Online + Offline</option>

                                            </select>
                                        </div>


                                        <div>
                                            <label class="mb-3 block font-semibold">Language/Medium</label>
                                            <select required
                                                class="w-full py-10px px-5 text-sm focus:outline-none bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md"
                                                id="language" name="language">

                                                <option value="" disabled>Select Language/Medium</option>

                                                <option value="hindi" <?php if ($course_Language == "hindi")
                                                    echo "selected"; ?>>Hindi Medium</option>
                                                <option value="english" <?php if ($course_Language == "english")
                                                    echo "selected"; ?>>English Medium</option>
                                                <option value="hinglish" <?php if ($course_Language == "hinglish")
                                                    echo "selected"; ?>>Hinglish</option>

                                            </select>
                                        </div>



                                    </div>
                                </div>


                                <div class="grid grid-cols-1 mb-15px gap-15px">
                                    <!-- Upload Image -->
                                    <div>
                                        <label class="mb-3 block font-semibold">Upload Image</label>

                                        <!-- Show previously uploaded file name -->
                                        <p class="mb-2 text-sm text-gray-700 dark:text-gray-300">
                                            <b>Selected :</b> <?php echo $course_Thumbnail; ?>
                                        </p>

                                        <!-- File input -->
                                        <input type="file" id="courseImage" name="courseImage" accept="image/*"
                                            class="w-full py-2 px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-6 rounded-md font-no">
                                    </div>

                                    <div>
                                        <div class="flex gap-4 mb-3">
                                            <button type="button" id="videoFileTab"
                                                class="px-4 py-2 text-blackColor rounded  dark:text-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark">
                                                Video
                                            </button>

                                            <button type="button" id="videoUrlTab"
                                                class="px-4 py-2 text-blackColor dark:text-whiteColor rounded ">
                                                URL
                                            </button>

                                        </div>

                                        <!-- Show previously uploaded file name -->
                                        <p class="mb-2 text-sm text-gray-700 dark:text-gray-300 max-w-full overflow-hidden break-words
">
                                            <b>Selected :</b> <?php echo $course_Video_content; ?>
                                        </p>


                                        <!-- File Input -->
                                        <input type="file" id="courseVideoFile" name="courseVideoFile" accept="video/*"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md font-no mb-3">

                                        <!-- YouTube URL Input -->
                                        <input type="url" id="courseVideoUrl" name="courseVideoUrl"
                                            placeholder="Add your YouTube Video URL here. Example: https://www.youtube.com/watch?v=yourvideoid"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no hidden ">

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

                                        <!-- Actual Price -->
                                        <div>
                                            <label for="regularPrice" class="mb-3 block font-semibold">Actual Price
                                                (₹)</label>
                                            <input type="text" id="regularPrice" name="regularPrice" maxlength="6"
                                                placeholder="Regular Price (₹)"
                                                value="<?php echo $course_Actual_cost; ?>"
                                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark
                                                    bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark
                                                    placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                        </div>

                                        <!-- Discount Percentage -->
                                        <div>
                                            <label for="discountPercent" class="mb-3 block font-semibold">Discount
                                                (%)</label>
                                            <input type="text" id="discountPercent" name="discountPercent" maxlength="6"
                                                placeholder="Discount (%)" value="<?php echo $discount_Applied; ?>"
                                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark
                                                bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark
                                                placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                        </div>

                                        <!-- Final Price -->
                                        <div>
                                            <label for="finalPrice" class="mb-3 block font-semibold">Selling Price
                                                (₹)</label>
                                            <input type="text" id="finalPrice" name="finalPrice"
                                                placeholder="Final Price (₹)"
                                                value="<?php echo $course_Selling_cost; ?>"
                                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark
                                                bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark
                                                placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no bg-gray-100">
                                        </div>

                                    </div>

                                </div>
                                <div class="mt-15px">
                                    <button type="submit" id="nextToDetails" name="updateCourseBtn"
                                        class="text-whiteColor bg-primaryColor px-25px py-10px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark">
                                        Save Changes
                                    </button>


                                </div>


                            </form>

                        </div>


                    </div>

                </div>
            </div>
        </div>
        </div>
        </div>
    </section>





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

            // 👉 PAGE LOAD PAR CHECK KARO
            if (courseTypeSelect.value === "paid") {
                pricingSection.style.display = "block";
            } else {
                pricingSection.style.display = "none";
            }

            // 👉 JAB USER CHANGE KARE
            courseTypeSelect.addEventListener("change", function () {
                if (this.value === "paid") {
                    pricingSection.style.display = "block";
                } else {
                    pricingSection.style.display = "none";
                }
            });
        });
    </script>

    <!-- Upload Video Tab and Upload YouTube Url -->
    <script>
        const fileTab = document.getElementById("videoFileTab");
        const urlTab = document.getElementById("videoUrlTab");
        const fileInput = document.getElementById("courseVideoFile");
        const urlInput = document.getElementById("courseVideoUrl");

        // ACTIVE class (common)
        const activeClasses = ["dark:bg-whiteColor-dark", "border-2", "border-borderColor", "dark:border-borderColor-dark"];

        // REMOVE all active classes from both tabs
        function removeActiveClasses() {
            fileTab.classList.remove(...activeClasses);
            urlTab.classList.remove(...activeClasses);
        }

        // Upload Video Button
        fileTab.addEventListener("click", function () {

            fileInput.classList.remove("hidden");
            urlInput.classList.add("hidden");

            removeActiveClasses();
            fileTab.classList.add(...activeClasses);
        });

        // YouTube URL Button
        urlTab.addEventListener("click", function () {

            urlInput.classList.remove("hidden");
            fileInput.classList.add("hidden");

            removeActiveClasses();
            urlTab.classList.add(...activeClasses);
        });
    </script>


</main>


<!-- Admin Dashboard Footer section admin_footer  -->
<?php
$this->load->view('dashboard/master_contents/dAdmin_master/admin_footer');
?>