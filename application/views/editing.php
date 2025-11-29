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


    <!--Course Details-->

    <section>
        <div class="container-fluid-2">
            <!-- setting area -->
            <div
                class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-standard">
                <!-- heading -->
                <div class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark" data-aos="fade-up">
                    <h2 class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                        Course Details
                    </h2>
                </div>

                <div class="tab">
                    <div class="tab-links flex flex-wrap mb-10px lg:mb-50px rounded gap-10px" data-aos="fade-up">
                        <button
                            class="is-checked relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300 whitespace-nowrap active">
                            COURSE DETAILS
                        </button>
                        <button
                            class="is-checked relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300 whitespace-nowrap">
                            SUBJECT TEACHER ASSIGN
                        </button>


                    </div>
                    <div class="tab-contents">

                        <div class="transition-all duration-300" data-aos="fade-up">

                            <!-- Curriculum Accordion -->
                            <form action="<?php echo base_url('verifyCourseData'); ?>" method="POST"
                                enctype="multipart/form-data">

                                <!-- Yaha hidden input DALO -->
                                <p>Course Unique ID:
                                    <?= isset($course_unique_id) ? $course_unique_id : 'Not received' ?>
                                </p>
                                <input type="hidden" name="course_unique_id" value="<?= $course_unique_id ?>">

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

                                            <!-- Fixed First Feature -->
                                            <div class="group bg-gray-100 dark:bg-gray-800 p-5 rounded-md">
                                                <div class="mb-3">
                                                    <label class="block font-semibold">Feature Heading</label>
                                                    <input type="text" name="featureHeading[]"
                                                        placeholder="Enter feature heading"
                                                        class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="block font-semibold">Feature Value (Yes / No /
                                                        Write)</label>
                                                    <input type="text" name="featureKey[]"
                                                        placeholder="Enter feature value"
                                                        class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                                </div>
                                            </div>

                                            <!-- Dynamic Features container -->
                                            <div id="dynamicFeatures" class="space-y-4"></div>
                                            <!-- Add More Button -->
                                            <div class="mt-3 pl-0 md:pl-5 lg:pl-5 2xl:pl-6">
                                                <button type="button" onclick="addNewFeature()"
                                                    class="px-5 py-2 bg-primaryColor text-white rounded hover:bg-primaryColor-dark">
                                                    + Add More Features
                                                </button>
                                            </div>
                                        </div>
                                    </div>

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
                <input type="text" name="featureHeading[]" placeholder="Enter feature heading"
                    class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                    >
            </div>
            <div class="mb-3">
                <label class="block font-semibold">Feature Value (Yes / No / Write)</label>
                <input type="text" name="featureKey[]" placeholder="Enter feature value"
                    class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                    >
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
                                                        <input type="text" name="dimpHeading[]"
                                                            placeholder="Enter heading"
                                                            class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                                    </div>
                                                    <div>
                                                        <label class="block font-semibold">Description</label>
                                                        <textarea name="dimpDescription[]"
                                                            placeholder="Enter description"
                                                            class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
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
                                                        <label class="block font-semibold">Important Topic
                                                            Name</label>
                                                        <input type="text" name="importantTopic"
                                                            placeholder="Enter important topic name"
                                                            class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                                    </div>

                                                    <!-- Important Fields for this topic -->
                                                    <div id="importantFieldsWrapper" class="space-y-3">
                                                        <label class="block font-semibold">Important Fields (related
                                                            to
                                                            this
                                                            topic)</label>

                                                        <!-- Default Field (Not Removable) -->
                                                        <div class="flex items-start gap-2">
                                                            <input type="text" name="importantKey[]"
                                                                placeholder="Enter important field"
                                                                class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
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
                                                    Frequently Asked Questions
                                                </h3>

                                                <?php if (!empty($faqs)): ?>
                                                    <?php foreach ($faqs as $index => $faq): ?>
                                                        <div class="group bg-gray-100 dark:bg-gray-800 p-5 rounded-md">

                                                            <!-- Question -->
                                                            <div class="mb-3">
                                                                <label class="block font-semibold">Question</label>
                                                                <input type="text" name="faqQuestion[]"
                                                                    value="<?= $faq->faq_Question ?>" class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark 
                               bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor 
                               dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 
                               leading-23px rounded-md font-no">
                                                                <input type="hidden" name="faqId[]" value="<?= $faq->id ?>">
                                                            </div>

                                                            <!-- Answer -->
                                                            <div class="mb-3">
                                                                <label class="block font-semibold">Answer</label>
                                                                <textarea name="faqAnswer[]" class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark 
                               bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor 
                               dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 
                               leading-23px rounded-md font-no"
                                                                    style="min-height: 100px; max-height:150px;"><?= $faq->faq_Answer ?></textarea>
                                                            </div>

                                                            <div class="text-right">
                                                                <button type="button" class="text-red-500 text-sm font-semibold"
                                                                    onclick="this.closest('.group').remove()">
                                                                    Remove
                                                                </button>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                <?php else: ?>

                                                    <!-- If no FAQ in DB then show one empty block -->
                                                    <div class="group bg-gray-100 dark:bg-gray-800 p-5 rounded-md">
                                                        <div class="mb-3">
                                                            <label class="block font-semibold">Question</label>
                                                            <input type="text" name="faqQuestion[]"
                                                                class="w-full py-2 px-3 text-sm border rounded-md">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="block font-semibold">Answer</label>
                                                            <textarea name="faqAnswer[]"
                                                                class="w-full py-2 px-3 text-sm border rounded-md"
                                                                style="min-height:100px"></textarea>
                                                        </div>
                                                    </div>

                                                <?php endif; ?>

                                                <!-- Dynamic Add More FAQs -->
                                                <div id="dynamicFAQs" class="space-y-4"></div>

                                                <div class="mt-3 pl-0 md:pl-5 lg:pl-5 2xl:pl-6">
                                                    <button type="button" onclick="addNewFAQ()"
                                                        class="px-5 py-2 bg-primaryColor text-whiteColor rounded hover:bg-primaryColor-dark">
                                                        + Add More
                                                    </button>
                                                </div>
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

                        </div>


                        <!--  SUBJECT TEACHER ASSIGN -->
                        <div class="hidden transition-all duration-300">
            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>









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
            <input type="text" id="faqQuestion_${faqCounter}" name="faqQuestion[]" placeholder="Enter your question here"
            class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
            >
            </div>
            <div class="mb-3">
            <label class="block font-semibold">Answer</label>
            <textarea id="faqAnswer_${faqCounter}" name="faqAnswer[]" placeholder="Enter the answer here"
            class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
              style="min-height: 100px; max-height:150px;"></textarea>
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
                <input type="text" name="dimpHeading[]" placeholder="Enter heading"
                    class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                    >
            </div>
            <div class="mb-3">
                <label class="block font-semibold">Description</label>
                <textarea name="dimpDescription[]" placeholder="Enter description"
                    class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                      style="min-height: 100px; max-height:150px;"></textarea>
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
                "group bg-gray-100 dark:bg-gray-800 rounded-md border-t border-borderColor dark:border-borderColor-dark";

            group.innerHTML = `

                <div class="flex items-start gap-2">
                <input type="text" name="importantKey[]"
                placeholder="Enter important field"
                class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                >
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
                                    <input type="text" name="subjectNameC[]" placeholder="Enter subject name"
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



</main>


<!-- Admin Dashboard Footer section admin_footer  -->
<?php
$this->load->view('dashboard/master_contents/dAdmin_master/admin_footer');
?>








public function loaDadmin_coursedetails()
{
$course_uid = $this->input->get('course_uid'); // ?course_uid=ZIVJJC

if (!$course_uid) {
echo "Invalid Course UID!";
return;
}

// Fetch course related tables
$courseFeatures = $this->db->get_where('course_features', ['course_unique_id' => $course_uid])->result();
$courseHeading = $this->db->get_where('course_headings', ['course_unique_id' => $course_uid])->result();
$courseTopics = $this->db->get_where('course_topics', ['course_unique_id' => $course_uid])->result();
$courseFaqs = $this->db->get_where('course_faqs', ['course_unique_id' => $course_uid])->result();

// Fetch all instructors for the "Choose Teachers" dropdown
$allTeachers = $this->db->order_by('instructor_name', 'ASC')->get('instructor_directory')->result();

// Prepare data array for view
$data = [
'course_unique_id' => $course_uid,
'features' => $courseFeatures,
'heading' => $courseHeading,
'topics' => $courseTopics,
'faqs' => $courseFaqs,
'allTeachers' => $allTeachers
];

// Load view
$this->load->view('dashboard/dAdmin/admin_coursedetails', $data);
}