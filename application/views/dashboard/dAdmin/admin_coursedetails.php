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
                            <p class="mb-2 font-semibold">
                                Course Unique ID:
                                <?= isset($course_unique_id) ? $course_unique_id : 'Not received' ?>
                            </p>


                            <!-- Features  -->
                            <div class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4">
                                <!-- FULL FEATURES FORM -->
                                <form action="<?= base_url('verifyCourseData'); ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <input type="hidden" name="course_unique_id" value="<?= $course_unique_id ?>">
                                    <div class="cursor-pointer accordion-controller flex justify-between items-center text-lg font-semibold py-5 px-6"
                                        onclick="this.nextElementSibling.classList.toggle('hidden')">
                                        <span class="text-blackColor dark:text-whiteColor">Features (Yes &
                                            No)</span>
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

                                            <!-- EXISTING FEATURES IF DB HAS DATA -->
                                            <?php if (!empty($features)): ?>
                                                <?php foreach ($features as $f): ?>
                                                    <div
                                                        class="group mb-2 bg-gray-100 dark:bg-gray-800 p-5 rounded-md border border-borderColor dark:border-borderColor-dark">

                                                        <input type="hidden" name="feature_id[]" value="<?= $f->id ?>">

                                                        <div class="mb-3">
                                                            <label class="block font-semibold">Feature Heading</label>
                                                            <input type="text" name="featureHeading[]"
                                                                value="<?= $f->feature_heading ?>"
                                                                class="w-full py-2 px-3 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="block font-semibold">Feature Value</label>
                                                            <input type="text" name="featureKey[]"
                                                                value="<?= $f->feature_value ?>"
                                                                class="w-full py-2 px-3 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
                                                        </div>

                                                        <button type="button"
                                                            class="text-red-600 font-semibold text-sm hover:text-primaryColor dark:hover:text-primaryColor"
                                                            onclick="removeExistingFeature(this, <?= $f->id ?>)">
                                                            Remove
                                                        </button>

                                                    </div>
                                                <?php endforeach; ?>
                                            <?php endif; ?>


                                            <!-- EMPTY BLOCK ONLY IF DB HAS NO FEATURES -->
                                            <?php if (empty($features)): ?>
                                                <div
                                                    class="group mb-2 bg-gray-100 dark:bg-gray-800 p-5 rounded-md border border-borderColor dark:border-borderColor-dark">
                                                    <input type="hidden" name="feature_id[]" value="0">

                                                    <div class="mb-3">
                                                        <label class="block font-semibold">Feature Heading</label>
                                                        <input type="text" name="featureHeading[]"
                                                            placeholder="Enter feature heading"
                                                            class="w-full py-2 px-3 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="block font-semibold">Feature Value</label>
                                                        <input type="text" name="featureKey[]"
                                                            placeholder="Enter feature value"
                                                            class="w-full py-2 px-3 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
                                                    </div>
                                                </div>
                                            <?php endif; ?>


                                            <!-- Dynamic Features container -->
                                            <div id="dynamicFeatures" class="space-y-4"></div>
                                            <!-- ADD MORE + SAVE BUTTON ROW -->

                                            <div
                                                class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full place-items-center mt-4">

                                                <!-- LEFT BUTTON -->
                                                <button type="button" onclick="addNewFeature()"
                                                    class="text-sm md:text-size-15 text-whiteColor bg-secondaryColor border border-secondaryColor px-10px py-10px hover:text-primaryColor hover:bg-whiteColor rounded inline-block dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor">
                                                    + Add More Features
                                                </button>

                                                <!-- RIGHT BUTTON -->
                                                <button type="submit"
                                                    class="text-sm md:text-size-15 text-whiteColor bg-primaryColor border border-primaryColor px-10px py-10px hover:text-primaryColor hover:bg-whiteColor rounded inline-block dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor">
                                                    Save Details
                                                </button>

                                            </div>



                                        </div>



                                    </div>
                                </form>
                                <script>
                                    // ADD NEW FEATURE
                                    function addNewFeature() {
                                        const container = document.getElementById("dynamicFeatures");

                                        const html = `
                <div class="group mb-2 bg-gray-100 dark:bg-gray-800 p-5 rounded-md border border-borderColor dark:border-borderColor-dark">
                    <input type="hidden" name="feature_id[]" value="0">

                    <div class="mb-3">
                        <label class="block font-semibold">Feature Heading</label>
                        <input type="text" name="featureHeading[]" placeholder="Enter feature heading"
                            class="w-full py-2 px-3 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
                    </div>

                    <div class="mb-3">
                        <label class="block font-semibold">Feature Value</label>
                        <input type="text" name="featureKey[]" placeholder="Enter feature value"
                            class="w-full py-2 px-3 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
                    </div>

                    <button type="button"
                        class="text-red-600 text-sm font-semibold hover:text-primaryColor dark:hover:text-primaryColor "
                        onclick="this.closest('.group').remove()">
                        Remove
                    </button>
                </div>
            `;

                                        container.insertAdjacentHTML("beforeend", html);
                                    }

                                    // REMOVE EXISTING FEATURE (DATABASE DELETE)
                                    function removeExistingFeature(el, id) {
                                        el.closest('.group').remove();

                                        const hidden = document.createElement("input");
                                        hidden.type = "hidden";
                                        hidden.name = "delete_ids[]";
                                        hidden.value = id;

                                        document.forms[0].appendChild(hidden);
                                    }
                                </script>

                            </div>



                            <!-- FAQ  -->
                            <div class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4">
                                <!-- FULL FAQ FORM -->
                                <form action="<?= base_url('verifyCourseFaq'); ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <input type="hidden" name="course_unique_id" value="<?= $course_unique_id ?>">
                                    <div class="cursor-pointer accordion-controller flex justify-between items-center text-lg font-semibold py-5 px-6"
                                        onclick="this.nextElementSibling.classList.toggle('hidden')">
                                        <span class="text-blackColor dark:text-whiteColor">FAQ (Question &
                                            Answer)</span>

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

                                            <!-- EXISTING FAQ IF DATABASE HAS DATA -->
                                            <?php if (!empty($faqs)): ?>
                                                <?php foreach ($faqs as $f): ?>
                                                    <div
                                                        class="group mb-2 bg-gray-100 dark:bg-gray-800 p-5 rounded-md border border-borderColor dark:border-borderColor-dark">

                                                        <input type="hidden" name="faq_id[]" value="<?= $f->id ?>">

                                                        <div class="mb-3">
                                                            <label class="block font-semibold">Question</label>
                                                            <input type="text" name="faqQuestion[]" value="<?= $f->question ?>"
                                                                class="w-full py-2 px-3 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="block font-semibold">Answer</label>
                                                            <input type="text" name="faqAnswer[]" value="<?= $f->answer ?>"
                                                                class="w-full py-2 px-3 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
                                                        </div>

                                                        <!-- REMOVE button for existing DB entries (same as Features) -->
                                                        <button type="button"
                                                            class="text-red-600 font-semibold text-sm hover:text-primaryColor dark:hover:text-primaryColor"
                                                            onclick="removeExistingFaq(this, <?= $f->id ?>)">
                                                            Remove
                                                        </button>

                                                    </div>
                                                <?php endforeach; ?>
                                            <?php endif; ?>

                                            <!-- EMPTY BLOCK ONLY IF NO FAQ (NOTE: NO Remove BUTTON HERE — same as Features) -->
                                            <?php if (empty($faqs)): ?>
                                                <div
                                                    class="group mb-2 bg-gray-100 dark:bg-gray-800 p-5 rounded-md border border-borderColor dark:border-borderColor-dark">

                                                    <input type="hidden" name="faq_id[]" value="0">

                                                    <div class="mb-3">
                                                        <label class="block font-semibold">Question</label>
                                                        <input type="text" name="faqQuestion[]" placeholder="Enter question"
                                                            class="w-full py-2 px-3 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="block font-semibold">Answer</label>
                                                        <input type="text" name="faqAnswer[]" placeholder="Enter answer"
                                                            class="w-full py-2 px-3 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
                                                    </div>

                                                    <!-- IMPORTANT: No Remove button here (keeps same behavior as Features) -->

                                                </div>
                                            <?php endif; ?>

                                            <!-- Dynamic FAQ container -->
                                            <div id="dynamicFaq" class="space-y-4"></div>
                                            <!-- ADD MORE + SAVE BUTTON ROW -->
                                            <div
                                                class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full place-items-center mt-4">

                                                <!-- ADD MORE FAQ -->
                                                <button type="button" onclick="addNewFaq()"
                                                    class="text-sm md:text-size-15 text-whiteColor bg-secondaryColor border border-secondaryColor px-10px py-10px hover:text-primaryColor hover:bg-whiteColor rounded inline-block dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor">
                                                    + Add More FAQ
                                                </button>

                                                <!-- SAVE FAQ -->
                                                <button type="submit"
                                                    class="text-sm md:text-size-15 text-whiteColor bg-primaryColor border border-primaryColor px-10px py-10px hover:text-primaryColor hover:bg-whiteColor rounded inline-block dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor">
                                                    Save FAQ
                                                </button>

                                            </div>


                                        </div>
                                    </div>

                                </form>

                                <script>
                                    // ADD NEW FAQ — EXACT SAME SCRIPT AS FEATURES (dynamic blocks have Remove that only removes that block)
                                    function addNewFaq() {
                                        const container = document.getElementById("dynamicFaq");

                                        const html = `
                <div class="group mb-2 bg-gray-100 dark:bg-gray-800 p-5 rounded-md border border-borderColor dark:border-borderColor-dark">
                    <input type="hidden" name="faq_id[]" value="0">

                    <div class="mb-3">
                        <label class="block font-semibold">Question</label>
                        <input type="text" name="faqQuestion[]" placeholder="Enter question"
                            class="w-full py-2 px-3 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
                    </div>

                    <div class="mb-3">
                        <label class="block font-semibold">Answer</label>
                        <input type="text" name="faqAnswer[]" placeholder="Enter answer"
                            class="w-full py-2 px-3 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
                    </div>

                    <!-- Remove only removes this newly added block (no DB action) -->
                    <button type="button"
                        class="text-red-600 text-sm font-semibold hover:text-primaryColor dark:hover:text-primaryColor"
                        onclick="this.closest('.group').remove()">
                        Remove
                    </button>
                </div>
            `;

                                        container.insertAdjacentHTML("beforeend", html);
                                    }

                                    // REMOVE EXISTING FAQ — mirrors removeExistingFeature exactly:
                                    // removes DOM and appends a hidden input delete_faq_ids[] with the id (so backend will delete)
                                    function removeExistingFaq(el, id) {
                                        // remove the visual block
                                        el.closest('.group').remove();

                                        // create hidden input so server knows to delete this id from DB
                                        const hidden = document.createElement("input");
                                        hidden.type = "hidden";
                                        hidden.name = "delete_faq_ids[]";
                                        hidden.value = id;

                                        // append to the form (same behavior as features)
                                        document.forms[0].appendChild(hidden);
                                    }
                                </script>

                            </div>




                        </div>

                        <!-- SUBJECT TEACHER ASSIGN -->
                        <div class="hidden transition-all duration-300">

                            <div
                                class="group mb-2 bg-gray-100 dark:bg-gray-800 p-5 rounded-md border border-borderColor dark:border-borderColor-dark">

                                <h3 class="text-lg font-semibold mb-4 text-blackColor dark:text-whiteColor">
                                    Assign Subject to Teacher
                                </h3>

                                <!-- SUBJECT LIST -->
                                <div id="subjectList" class="space-y-3"></div>

                            </div>

                            <!-- MANAGE TEACHER POPUP -->
                            <div id="teacherPopup"
                                class="fixed top-0 left-0 w-full h-full flex justify-center items-center z-50 hidden">

                                <div
                                    class="py-5 px-6 bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md shadow-md w-96">

                                    <h3 class="text-lg font-semibold mb-4 text-blackColor dark:text-whiteColor">
                                        Manage Teachers for <span id="popupSubjectName" class="font-bold"></span>
                                    </h3>

                                    <div id="teacherCheckboxList"
                                        class="max-h-56 overflow-y-auto text-blackColor dark:text-whiteColor border border-borderColor dark:border-borderColor-dark rounded-md py-4 px-4 mb-4">
                                    </div>

                                    <div class="flex justify-end gap-3">
                                        <button type="button" onclick="closeTeacherPopup()"
                                            class="text-sm font-bold text-whiteColor bg-secondaryColor hover:bg-whiteColor dark:hover:bg-whiteColor-dark border border-secondaryColor px-5 h-10 rounded-md">
                                            Cancel
                                        </button>

                                        <button type="button" onclick="assignTeachers()"
                                            class="text-sm font-bold text-white bg-primaryColor hover:bg-primaryColor-dark px-5 h-10 rounded-md">
                                            Assign
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <script>
                                /* Dummy Subjects */
                                let subjects = ["English", "Math", "Science"];

                                /* Dummy Teachers */
                                let teachers = ["Teacher A", "Teacher B", "Teacher C", "Teacher D", "Teacher E"];

                                /* Assigned List */
                                let assigned = {
                                    "English": [],
                                    "Math": [],
                                    "Science": []
                                };

                                let currentSubject = "";

                                /* Render Subject List */
                                function loadSubjects() {
                                    const box = document.getElementById("subjectList");
                                    box.innerHTML = "";

                                    subjects.forEach(sub => {
                                        box.innerHTML += `
                <div class="w-full py-10px px-5 bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">

                    <div class="flex justify-between items-center">
                        <span class="font-bold text-contentColor dark:text-contentColor-dark">${sub}</span>

                        <button onclick="openTeacherPopup('${sub}')"
                            class="text-sm font-bold text-whiteColor bg-secondaryColor hover:bg-whiteColor dark:hover:bg-whiteColor-dark border border-secondaryColor px-5 h-8 rounded-md">
                            Manage Teacher
                        </button>
                    </div>

                    <div class="flex flex-wrap gap-2 mt-3">
                        ${assigned[sub].length > 0 ?
                                                assigned[sub].map(t =>
                                                    `<span class="text-blackColor dark:text-whiteColor px-2 py-1 rounded text-sm">${t}</span>`
                                                ).join("")
                                                :
                                                `<span class="text-blackColor dark:text-whiteColor text-sm italic">No teacher assigned</span>`
                                            }
                    </div>
                </div>
            `;
                                    });
                                }

                                /* Open Popup */
                                function openTeacherPopup(sub) {
                                    currentSubject = sub;
                                    document.getElementById("popupSubjectName").innerText = sub;

                                    const list = document.getElementById("teacherCheckboxList");
                                    list.innerHTML = "";

                                    teachers.forEach(t => {
                                        const isChecked = assigned[sub].includes(t) ? "checked" : "";
                                        list.innerHTML += `
                <label class="block mb-2">
                    <input type="checkbox" class="teacherCheck  mr-2" value="${t}" ${isChecked}>
                    ${t}
                </label>
            `;
                                    });

                                    document.getElementById("teacherPopup").classList.remove("hidden");
                                }

                                /* Close Popup */
                                function closeTeacherPopup() {
                                    document.getElementById("teacherPopup").classList.add("hidden");
                                }

                                /* Assign Selected Teachers */
                                function assignTeachers() {
                                    const selected = [...document.querySelectorAll(".teacherCheck:checked")].map(c => c.value);

                                    assigned[currentSubject] = selected; // overwrite

                                    closeTeacherPopup();
                                    loadSubjects();
                                }

                                loadSubjects();
                            </script>

                        </div>



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