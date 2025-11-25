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
                                   <!-- Curriculum Accordion -->
                            <form action="<?php echo base_url(''); ?>" method="POST"
                                enctype="multipart/form-data">
                                <!-- Yaha hidden input DALO -->
                                <p>Course Unique ID:
                                    <?= isset($course_unique_id) ? $course_unique_id : 'Not received' ?>
                                </p>
                                <input type="hidden" name="course_unique_id" value="<?= $course_unique_id ?>">

                                <div class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4">
                                    <div class="cursor-pointer accordion-controller flex justify-between items-center text-lg font-semibold py-5 px-6"
                                        onclick="this.nextElementSibling.classList.toggle('hidden')">
                                        <span class="text-blackColor dark:text-whiteColor">Subject & Teacher
                                            Assign</span>
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

                                            <button type="button" onclick="openAddSubjectPopup()"
                                                class="bg-primaryColor text-white py-2 px-4 rounded-md hover:bg-primaryColor-dark transition mb-4">
                                                + Add New Subject
                                            </button>

                                            <!-- ADD SUBJECT POPUP -->
                                            <div id="addSubjectPopup"
                                                class="fixed top-0 left-0 w-full h-full  flex justify-center items-center z-50 hidden">
                                                <div
                                                    class=" py-5 px-6 bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark  rounded-md shadow-md w-80 ">
                                                    <h3
                                                        class="text-lg font-semibold mb-3 text-blackColor dark:text-whiteColor">
                                                        Add New Subject</h3>
                                                    <input id="newSubjectInput" type="text"
                                                        placeholder="Enter Subject Name"
                                                        class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                                    <div class="flex justify-center gap-4 mt-5 mb-5">
                                                        <!-- Cancel Button (Delete style) -->
                                                        <button type="button" onclick="closeAddSubjectPopup()"
                                                            class="flex items-center justify-center gap-1 text-sm font-bold text-whiteColor bg-secondaryColor hover:bg-whiteColor dark:hover:bg-whiteColor-dark border border-secondaryColor h-10 px-5 rounded-md transition">
                                                            Cancel
                                                        </button>

                                                        <!-- Assign Button (Primary style) -->
                                                        <button type="button" onclick="saveNewSubject()"
                                                            class="flex items-center justify-center gap-1 text-sm font-bold text-white bg-primaryColor hover:bg-primaryColor-dark h-10 px-5 rounded-md transition">
                                                            Assign
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>

                                            <!-- CHOOSE TEACHERS POPUP -->
                                            <div id="teacherPopup"
                                                class="fixed top-0 left-0 w-full h-full flex justify-center items-center z-50 hidden">
                                                <div
                                                    class=" py-5 px-6 bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark  rounded-md shadow-md w-96">
                                                    <h3
                                                        class="text-lg font-semibold mb-3 text-blackColor dark:text-whiteColor">
                                                        Choose Teachers</h3>
                                                    <div id="teacherCheckboxList"
                                                        class="max-h-40 px-4 py-2 overflow-y-auto border border-borderColor dark:border-borderColor-dark rounded-md p-3 mb-4">
                                                    </div>
                                                    <div class="flex justify-end gap-3">
                                                        <button type="button" onclick="closeTeacherPopup()"
                                                            class="flex items-center justify-center gap-1 text-sm font-bold text-whiteColor bg-secondaryColor hover:bg-whiteColor dark:hover:bg-whiteColor-dark border border-secondaryColor h-10 px-5 rounded-md transition">Cancel</button>
                                                        <button type="button" onclick="assignSelectedTeachersPopup()"
                                                            class="px-4 py-2 bg-primaryColor text-white rounded-md">Assign</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- REMOVE TEACHER POPUP -->
                                            <div id="removeTeacherPopup"
                                                class="fixed top-0 left-0 w-full h-full  flex justify-center items-center z-50 hidden">
                                                <div
                                                    class="py-5 px-6 bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md shadow-md w-96">
                                                    <h3
                                                        class="text-lg font-semibold mb-3 text-blackColor dark:text-whiteColor">
                                                        Remove Teacher
                                                    </h3>
                                                    <div id="removeTeacherList"
                                                        class="max-h-40 px-4 py-2 overflow-y-auto border border-borderColor dark:border-borderColor-dark rounded-md p-3 mb-4">
                                                        <label class="block mb-2"><input type="checkbox"
                                                                class="removeCheck mr-2" value="Teacher A"> Teacher
                                                            A</label>
                                                        <label class="block mb-2"><input type="checkbox"
                                                                class="removeCheck mr-2" value="Teacher B"> Teacher
                                                            B</label>
                                                    </div>
                                                    <div class="flex justify-end gap-3">
                                                        <!-- Cancel Button styled like Choose Teachers -->
                                                        <button type="button" onclick="closeRemoveTeacherPopup()"
                                                            class="flex items-center justify-center gap-1 text-sm font-bold text-whiteColor bg-secondaryColor hover:bg-whiteColor dark:hover:bg-whiteColor-dark border border-secondaryColor h-10 px-5 rounded-md transition">
                                                            Cancel
                                                        </button>
                                                        <!-- Remove Button styled like Assign -->
                                                        <button type="button" onclick="confirmRemoveTeacher()"
                                                            class="flex items-center justify-center gap-1 text-sm font-bold text-white bg-primaryColor hover:bg-primaryColor-dark h-10 px-5 rounded-md transition">
                                                            Remove
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>

                                            <!-- ASSIGN SECTION -->

                                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                                <select id="subjectSelect"
                                                    class="w-full py-10px px-5 text-sm focus:outline-none bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
                                                    <option value="">Choose Subject</option>
                                                </select>
                                                <button type="button" onclick="openTeacherPopup()"
                                                    class="w-full py-10px px-5 text-sm focus:outline-none bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
                                                    Choose Teachers
                                                </button>
                                            </div>



                                            <!-- ASSIGNED SUMMARY -->
                                            <div class="p-5  mt-5">
                                                <h3
                                                    class="text-lg font-semibold mb-4 text-blackColor dark:text-whiteColor">
                                                    Assigned Summary</h3>
                                                <div id="assignedList" class="space-y-3"></div>
                                            </div>

                                            <!-- UNASSIGNED SUMMARY -->
                                            <div class=" p-5  mb-5">
                                                <h3
                                                    class="text-lg font-semibold mb-4 text-blackColor dark:text-whiteColor">
                                                    Unassigned Subjects</h3>
                                                <div id="unassignedList" class=""></div>
                                            </div>

                                        </div>

                                        <script>
                                            let subjects = [];
                                            let assignments = {};
                                            let tempTeachers = [];
                                            let removeSubjectName = "";

                                            /* 🔥 DATABASE SE AAYE TEACHERS */
                                            const allTeachers = <?php echo json_encode(array_column($allTeachers, 'instructor_name')); ?>;



                                            /* POPUPS */
                                            function openAddSubjectPopup() {
                                                document.getElementById("addSubjectPopup").classList.remove("hidden");
                                            }
                                            function closeAddSubjectPopup() {
                                                document.getElementById("addSubjectPopup").classList.add("hidden");
                                            }

                                            function openTeacherPopup() {
                                                tempTeachers = [];
                                                const list = document.getElementById("teacherCheckboxList");
                                                list.innerHTML = "";

                                                /* 🔥 TEACHERS LIST Database se fill hogi */
                                                allTeachers.forEach(t =>
                                                    list.innerHTML += `
                <label class="block mb-2">
                    <input type="checkbox" class="teacherCheck mr-2" value="${t}"> ${t}
                </label>
            `
                                                );

                                                document.getElementById("teacherPopup").classList.remove("hidden");
                                            }

                                            function closeTeacherPopup() {
                                                document.getElementById("teacherPopup").classList.add("hidden");
                                            }



                                            /* REMOVE TEACHER POPUP */
                                            function openRemoveTeacherPopup(subject) {
                                                removeSubjectName = subject;
                                                const list = document.getElementById("removeTeacherList");
                                                list.innerHTML = "";

                                                assignments[subject].forEach(t =>
                                                    list.innerHTML += `
                <label class="block mb-2">
                    <input type="checkbox" class="removeCheck mr-2" value="${t}"> ${t}
                </label>`
                                                );

                                                document.getElementById("removeTeacherPopup").classList.remove("hidden");
                                            }
                                            function closeRemoveTeacherPopup() {
                                                document.getElementById("removeTeacherPopup").classList.add("hidden");
                                            }



                                            /* ADD SUBJECT */
                                            function saveNewSubject() {
                                                let name = document.getElementById("newSubjectInput").value.trim();

                                                if (!name) { Swal.fire("Error", "Please enter subject name", "error"); return; }
                                                if (subjects.includes(name)) { Swal.fire("Warning", "Subject already exists!", "warning"); return; }

                                                subjects.push(name);
                                                assignments[name] = [];

                                                updateDropdown();
                                                updateLists();

                                                document.getElementById("newSubjectInput").value = "";
                                                closeAddSubjectPopup();
                                            }



                                            /* ASSIGN TEACHERS */
                                            function assignSelectedTeachersPopup() {
                                                tempTeachers = [...document.querySelectorAll(".teacherCheck:checked")].map(c => c.value);

                                                if (tempTeachers.length === 0) {
                                                    Swal.fire("Warning", "Please select at least one teacher", "warning");
                                                    return;
                                                }

                                                finalAssign();
                                                closeTeacherPopup();
                                            }

                                            function finalAssign() {
                                                const subject = document.getElementById("subjectSelect").value;

                                                if (!subject) {
                                                    Swal.fire("Warning", "Please choose a subject first", "warning");
                                                    return;
                                                }

                                                tempTeachers.forEach(t => {
                                                    if (!assignments[subject].includes(t))
                                                        assignments[subject].push(t);
                                                });

                                                tempTeachers = [];
                                                document.getElementById("subjectSelect").value = "";

                                                updateLists();
                                            }



                                            /* REMOVE TEACHER */
                                            function confirmRemoveTeacher() {
                                                const selected = [...document.querySelectorAll(".removeCheck:checked")].map(i => i.value);

                                                assignments[removeSubjectName] = assignments[removeSubjectName]
                                                    .filter(t => !selected.includes(t));

                                                closeRemoveTeacherPopup();
                                                updateLists();
                                            }



                                            /* DELETE SUBJECT */
                                            function deleteSubject(sub) {
                                                Swal.fire({
                                                    title: "Delete?",
                                                    text: "Subject will be removed permanently",
                                                    icon: "warning",
                                                    showCancelButton: true,
                                                    confirmButtonText: "Yes, delete",
                                                    cancelButtonText: "Cancel",
                                                    customClass: {
                                                        confirmButton: "bg-primaryColor text-white px-4 py-2 rounded-md hover:bg-primaryColor-dark transition mr-2",
                                                        cancelButton: "bg-secondaryColor text-white px-4 py-2 rounded-md hover:bg-whiteColor dark:hover:bg-whiteColor-dark transition"
                                                    },
                                                    buttonsStyling: false
                                                }).then(res => {
                                                    if (res.isConfirmed) {
                                                        subjects = subjects.filter(s => s !== sub);
                                                        delete assignments[sub];
                                                        updateDropdown();
                                                        updateLists();
                                                    }
                                                });
                                            }



                                            /* UPDATE UI */
                                            function updateDropdown() {
                                                const dd = document.getElementById("subjectSelect");
                                                dd.innerHTML = `<option value="">Choose Subject</option>`;
                                                subjects.forEach(s => dd.innerHTML += `<option>${s}</option>`);
                                            }

                                            function updateLists() {
                                                const assigned = document.getElementById("assignedList");
                                                const unassigned = document.getElementById("unassignedList");

                                                assigned.innerHTML = "";
                                                unassigned.innerHTML = "";

                                                subjects.forEach(s => {
                                                    const teachers = assignments[s];

                                                    if (teachers.length > 0) {

                                                        assigned.innerHTML += `
<div class="w-full py-10px px-5 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md flex flex-col md:flex-row justify-between gap-2">

    <div class="flex-1">
        <div class="text-contentColor dark:text-contentColor-dark font-bold mb-2">${s}</div>

        <div class="flex flex-wrap gap-1 mt-4">
            ${teachers.map(t => `<span class='inline-block bg-blue-100 text-blue-800 px-2 py-1 rounded text-sm'>${t}</span>`).join("")}
        </div>
    </div>

    <div class="flex flex-col sm:flex-row gap-2 mt-2 md:mt-0">

        <button type="button" class="flex items-center gap-1 text-sm font-bold text-whiteColor bg-skycolor hover:bg-skycolor-dark border border-skycolor h-30px px-14px justify-center rounded-md" 
            onclick="openRemoveTeacherPopup('${s}')">
            Remove Teacher
        </button>

        <button type="button" class="flex items-center gap-1 text-sm font-bold text-whiteColor hover:text-secondaryColor bg-secondaryColor hover:bg-whiteColor dark:hover:bg-whiteColor-dark border border-secondaryColor h-30px px-14px justify-center rounded-md" 
            onclick="deleteSubject('${s}')">
            Delete
        </button>

    </div>
</div>
                `;

                                                    } else {

                                                        unassigned.innerHTML += `
<div class="w-full mb-2 py-10px px-5 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md flex flex-col sm:flex-row justify-between">

    <div class="text-contentColor dark:text-contentColor-dark font-bold mb-2 sm:mb-0">${s}</div>

    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-2">
        <span class="inline-block h-30px px-7px bg-skycolor leading-30px font-bold text-whiteColor rounded-md text-center">Not Assigned</span>

        <button type="button" class="flex items-center justify-center gap-1 text-sm font-bold text-whiteColor hover:text-secondaryColor bg-secondaryColor hover:bg-whiteColor dark:hover:bg-whiteColor-dark border border-secondaryColor h-30px px-7px leading-30px rounded-md" 
            onclick="deleteSubject('${s}')">
            Delete
        </button>
    </div>

</div>
                `;
                                                    }
                                                });
                                            }
                                        </script>


                                    </div>

                                </div>
                                <!-- Submit button here Save All -->
                                <div class="mt-15px">
                                    <button type="submit"
                                        class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark"
                                        name="#">
                                        ASSIGN DETAILS
                                    </button>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>








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