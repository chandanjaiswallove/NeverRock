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
                            <div class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4"
                                data-aos="fade-up">
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
                            <div class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4"
                                data-aos="fade-up">
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


                            <!-- HEADING & DESCRIPTION -->
                            <div class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4"
                                data-aos="fade-up">

                                <form action="<?= base_url('verifyCourseHeadings'); ?>" method="POST"
                                    enctype="multipart/form-data">

                                    <input type="hidden" name="course_unique_id" value="<?= $course_unique_id ?>">

                                    <div class="cursor-pointer accordion-controller flex justify-between items-center text-lg font-semibold py-5 px-6"
                                        onclick="this.nextElementSibling.classList.toggle('hidden')">
                                        <span class="text-blackColor dark:text-whiteColor">Headings & Description</span>

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

                                            <!-- EXISTING ENTRIES -->
                                            <?php if (!empty($headings)): ?>
                                                <?php foreach ($headings as $h): ?>
                                                    <div
                                                        class="group mb-2 bg-gray-100 dark:bg-gray-800 p-5 rounded-md border border-borderColor dark:border-borderColor-dark">

                                                        <input type="hidden" name="heading_id[]" value="<?= $h->id ?>">

                                                        <div class="mb-3">
                                                            <label class="block font-semibold">Heading</label>
                                                            <input type="text" name="headingTitle[]"
                                                                value="<?= $h->dimpHeading ?>"
                                                                class="w-full py-2 px-3 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="block font-semibold">Description</label>
                                                            <textarea name="headingDescription[]" rows="2"
                                                                class="w-full py-2 px-3 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md"><?= $h->dimpDescription ?></textarea>
                                                        </div>

                                                        <button type="button"
                                                            class="text-red-600 font-semibold text-sm hover:text-primaryColor dark:hover:text-primaryColor"
                                                            onclick="removeExistingHeading(this, <?= $h->id ?>)">
                                                            Remove
                                                        </button>

                                                    </div>
                                                <?php endforeach; ?>
                                            <?php endif; ?>

                                            <!-- EMPTY IF NO DATA -->
                                            <?php if (empty($headings)): ?>
                                                <div
                                                    class="group mb-2 bg-gray-100 dark:bg-gray-800 p-5 rounded-md border border-borderColor dark:border-borderColor-dark">

                                                    <input type="hidden" name="heading_id[]" value="0">

                                                    <div class="mb-3">
                                                        <label class="block font-semibold">Heading</label>
                                                        <input type="text" name="headingTitle[]" placeholder="Enter heading"
                                                            class="w-full py-2 px-3 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="block font-semibold">Description</label>
                                                        <textarea name="headingDescription[]"
                                                            placeholder="Enter description" rows="2"
                                                            class="w-full py-2 px-3 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md"></textarea>
                                                    </div>

                                                    <!-- NO REMOVE -->
                                                </div>
                                            <?php endif; ?>

                                            <!-- Dynamic container -->
                                            <div id="dynamicHeadings" class="space-y-4"></div>

                                            <div
                                                class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full place-items-center mt-4">

                                                <button type="button" onclick="addNewHeading()"
                                                    class="text-sm md:text-size-15 text-whiteColor bg-secondaryColor border border-secondaryColor px-10px py-10px hover:text-primaryColor hover:bg-whiteColor rounded inline-block">
                                                    + Add More
                                                </button>

                                                <button type="submit"
                                                    class="text-sm md:text-size-15 text-whiteColor bg-primaryColor border border-primaryColor px-10px py-10px hover:text-primaryColor hover:bg-whiteColor rounded inline-block">
                                                    Save Headings
                                                </button>

                                            </div>

                                        </div>
                                    </div>

                                </form>

                                <script>
                                    function addNewHeading() {
                                        const container = document.getElementById("dynamicHeadings");

                                        const html = `
            <div class="group mb-2 bg-gray-100 dark:bg-gray-800 p-5 rounded-md border border-borderColor dark:border-borderColor-dark">
                <input type="hidden" name="heading_id[]" value="0">

                <div class="mb-3">
                    <label class="block font-semibold">Heading</label>
                    <input type="text" name="headingTitle[]" placeholder="Enter heading"
                        class="w-full py-2 px-3 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
                </div>

                <div class="mb-3">
                    <label class="block font-semibold">Description</label>
                    <textarea name="headingDescription[]" placeholder="Enter description" rows="2"
                        class="w-full py-2 px-3 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md"></textarea>
                </div>

                <button type="button"
                    class="text-red-600 text-sm font-semibold hover:text-primaryColor dark:hover:text-primaryColor"
                    onclick="this.closest('.group').remove()">
                    Remove
                </button>
            </div>
        `;

                                        container.insertAdjacentHTML("beforeend", html);
                                    }

                                    function removeExistingHeading(el, id) {
                                        el.closest('.group').remove();

                                        const hidden = document.createElement("input");
                                        hidden.type = "hidden";
                                        hidden.name = "delete_heading_ids[]";
                                        hidden.value = id;

                                        document.forms[0].appendChild(hidden);
                                    }
                                </script>

                            </div>



                            <!-- IMPORTANT TOPIC UI WRAPPER -->
                            <div class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4"
                                data-aos="fade-up">

                                <form action="<?= base_url('verifyCourseImportantTopic'); ?>" method="POST"
                                    enctype="multipart/form-data">

                                    <input type="hidden" name="course_unique_id" value="<?= $course_unique_id ?>">

                                    <!-- HEADER -->
                                    <div class="cursor-pointer accordion-controller flex justify-between items-center text-lg font-semibold py-5 px-6"
                                        onclick="this.nextElementSibling.classList.toggle('hidden')">

                                        <span class="text-blackColor dark:text-whiteColor">Important Topic</span>

                                        <svg class="transition-all duration-500 rotate-0 w-5 h-5"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#212529">
                                            <path fill-rule="evenodd"
                                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                            </path>
                                        </svg>
                                    </div>

                                    <!-- BODY -->
                                    <div class="hidden px-6 pb-6">
                                        <div
                                            class="p-2 md:p-5 lg:p-5 2xl:p-6 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8 space-y-4">

                                            <!-- IMPORTANT TOPIC ONLY ONE FIELD -->
                                            <div
                                                class="group mb-2 bg-gray-100 dark:bg-gray-800 p-5 rounded-md border border-borderColor dark:border-borderColor-dark">

                                                <label class="block font-semibold">Important Topic Name</label>

                                                <input type="text" name="important_topic"
                                                    placeholder="Enter Important Topic name" class="w-full mt-2 py-2 px-3 text-sm bg-whiteColor dark:bg-whiteColor-dark 
                               border-2 border-borderColor dark:border-borderColor-dark rounded-md">

                                            </div>

                                            <!-- START IMPORTANT KEY LIST -->
                                            <div id="importantKeyList" class="space-y-4"></div>

                                            <!-- ADD MORE + SAVE BUTTON -->
                                            <div
                                                class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full place-items-center mt-4">

                                                <!-- ADD MORE KEY -->
                                                <button type="button" onclick="addImportantKey()" class="text-sm md:text-size-15 text-whiteColor bg-secondaryColor border border-secondaryColor 
                        px-10px py-10px hover:text-primaryColor hover:bg-whiteColor rounded 
                        dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor">
                                                    + Add Key
                                                </button>

                                                <!-- SAVE -->
                                                <button type="submit" class="text-sm md:text-size-15 text-whiteColor bg-primaryColor border border-primaryColor 
                        px-10px py-10px hover:text-primaryColor hover:bg-whiteColor rounded 
                        dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor">
                                                    Save
                                                </button>

                                            </div>

                                        </div>
                                    </div>

                                </form>
                                <script>
                                    function addImportantKey() {
                                        const list = document.getElementById("importantKeyList");

                                        list.insertAdjacentHTML("beforeend", `
            <div class="group mb-2 bg-gray-100 dark:bg-gray-800 p-5 rounded-md border border-borderColor dark:border-borderColor-dark">

                <div class="mb-3">
                    <label class="block font-semibold">Important Key</label>
                    <input type="text" name="important_keys[]" placeholder="Enter key"
                        class="w-full py-2 px-3 text-sm bg-whiteColor dark:bg-whiteColor-dark 
                               border-2 border-borderColor dark:border-borderColor-dark rounded-md">
                </div>

                <!-- REMOVE BUTTON -->
                <button type="button"
                    class="text-red-600 text-sm font-semibold hover:text-primaryColor dark:hover:text-primaryColor"
                    onclick="this.closest('.group').remove()">
                    Remove
                </button>
            </div>
        `);
                                    }
                                </script>

                            </div>


                            <!-- SUBJECT  -->
                            <div class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4"
                                data-aos="fade-up">
                                <!-- FULL SUBJECT FORM -->
                                <form action="<?= base_url('verifyCourseSubject'); ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <input type="hidden" name="course_unique_id" value="<?= $course_unique_id ?>">

                                    <div class="cursor-pointer accordion-controller flex justify-between items-center text-lg font-semibold py-5 px-6"
                                        onclick="this.nextElementSibling.classList.toggle('hidden')">
                                        <span class="text-blackColor dark:text-whiteColor">Subjects</span>

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

                                            <!-- EXISTING SUBJECT IF DATABASE HAS DATA -->
                                            <?php if (!empty($subjects)): ?>
                                                <?php foreach ($subjects as $s): ?>
                                                    <div
                                                        class="group mb-2 bg-gray-100 dark:bg-gray-800 p-5 rounded-md border border-borderColor dark:border-borderColor-dark">

                                                        <input type="hidden" name="subject_id[]" value="<?= $s->id ?>">

                                                        <div class="mb-3">
                                                            <label class="block font-semibold">Subject Name</label>
                                                            <input type="text" name="subjectName[]" value="<?= $s->subject ?>"
                                                                class="w-full py-2 px-3 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
                                                        </div>

                                                        <!-- REMOVE existing -->
                                                        <button type="button"
                                                            class="text-red-600 font-semibold text-sm hover:text-primaryColor dark:hover:text-primaryColor"
                                                            onclick="removeExistingSubject(this, <?= $s->id ?>)">
                                                            Remove
                                                        </button>

                                                    </div>
                                                <?php endforeach; ?>
                                            <?php endif; ?>

                                            <!-- EMPTY BLOCK IF NO SUBJECT -->
                                            <?php if (empty($subjects)): ?>
                                                <div
                                                    class="group mb-2 bg-gray-100 dark:bg-gray-800 p-5 rounded-md border border-borderColor dark:border-borderColor-dark">

                                                    <input type="hidden" name="subject_id[]" value="0">

                                                    <div class="mb-3">
                                                        <label class="block font-semibold">Subject Name</label>
                                                        <input type="text" name="subjectName[]"
                                                            placeholder="Enter Subject Name"
                                                            class="w-full py-2 px-3 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
                                                    </div>

                                                </div>
                                            <?php endif; ?>

                                            <!-- Dynamic SUBJECT container -->
                                            <div id="dynamicSubject" class="space-y-4"></div>

                                            <!-- ADD MORE + SAVE BUTTON ROW -->
                                            <div
                                                class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full place-items-center mt-4">

                                                <!-- ADD MORE SUBJECT -->
                                                <button type="button" onclick="addNewSubject()"
                                                    class="text-sm md:text-size-15 text-whiteColor bg-secondaryColor border border-secondaryColor px-10px py-10px hover:text-primaryColor hover:bg-whiteColor rounded inline-block dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor">
                                                    + Add More Subject
                                                </button>

                                                <!-- SAVE SUBJECT -->
                                                <button type="submit"
                                                    class="text-sm md:text-size-15 text-whiteColor bg-primaryColor border border-primaryColor px-10px py-10px hover:text-primaryColor hover:bg-whiteColor rounded inline-block dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor">
                                                    Save Subjects
                                                </button>

                                            </div>


                                        </div>
                                    </div>

                                </form>

                                <script>
                                    // ADD NEW SUBJECT — exact same structure as FAQ (only Answer removed)
                                    function addNewSubject() {
                                        const container = document.getElementById("dynamicSubject");

                                        const html = `
            <div class="group mb-2 bg-gray-100 dark:bg-gray-800 p-5 rounded-md border border-borderColor dark:border-borderColor-dark">
                <input type="hidden" name="subject_id[]" value="0">

                <div class="mb-3">
                    <label class="block font-semibold">Subject Name</label>
                    <input type="text" name="subjectName[]" placeholder="Enter Subject Name"
                        class="w-full py-2 px-3 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
                </div>

                <!-- Remove only removes this block -->
                <button type="button"
                    class="text-red-600 text-sm font-semibold hover:text-primaryColor dark:hover:text-primaryColor"
                    onclick="this.closest('.group').remove()">
                    Remove
                </button>
            </div>
        `;

                                        container.insertAdjacentHTML("beforeend", html);
                                    }

                                    // REMOVE EXISTING SUBJECT (DB delete)
                                    function removeExistingSubject(el, id) {
                                        el.closest('.group').remove();

                                        const hidden = document.createElement("input");
                                        hidden.type = "hidden";
                                        hidden.name = "delete_subject_ids[]";
                                        hidden.value = id;

                                        document.forms[0].appendChild(hidden);
                                    }
                                </script>

                            </div>


                            <!-- INSTRUCTOR UI WRAPPER -->
                            <div class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4 transition-all duration-300"
                                data-aos="fade-up">

                                <!-- HEADER -->
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

                                <!-- BODY -->
                                <div class="hidden px-6 pb-6">

                                    <!-- FULL FORM START -->
                                    <form action="<?= base_url('verifyCourseInstructor'); ?>" method="POST">

                                        <div
                                            class="p-5 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark space-y-5">

                                            <!-- SELECT + ADD BUTTON (50/50) -->
                                            <div class="flex flex-col md:flex-row md:items-end gap-5">

                                                <!-- LEFT 50% -->
                                                <div class="w-full md:w-1/2">
                                                    <label class="font-semibold block mb-2">Select Instructor</label>

                                                    <select id="instructorSelect" class="overflow-x-visible overflow-y-visible w-full py-2 px-3 text-sm bg-whiteColor dark:bg-whiteColor-dark 
                                   border-2 border-borderColor dark:border-borderColor-dark rounded-md">

                                                        <option value="">Choose Instructor</option>
                                                        <option value="1">Rahul Sharma</option>
                                                        <option value="2">Priya Singh</option>
                                                        <option value="3">Aman Verma</option>
                                                        <option value="4">Neha Das</option>
                                                    </select>
                                                </div>

                                                <!-- RIGHT 50% -->
                                                <div class="w-full md:w-1/2 md:pt-6">
                                                    <button type="button" onclick="addInstructorToList()" class="w-full text-sm md:text-size-15 text-whiteColor bg-secondaryColor border border-secondaryColor 
                        px-10px py-10px rounded hover:text-primaryColor hover:bg-whiteColor 
                        dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor">
                                                        + Add Instructor
                                                    </button>
                                                </div>

                                            </div>

                                            <!-- INSTRUCTOR LIST -->
                                            <div id="instructorList" class="space-y-4 mt-4"></div>

                                            <!-- SAVE BUTTON -->
                                            <button type="submit" class="w-full mt-6 py-3 text-whiteColor bg-primaryColor border border-primaryColor 
                       rounded-md font-semibold hover:bg-whiteColor hover:text-primaryColor 
                       dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor">
                                                Save
                                            </button>

                                        </div>

                                    </form>
                                    <!-- FULL FORM END -->

                                </div>

                                <script>
                                    let addedInstructors = new Set();

                                    function addInstructorToList() {
                                        const select = document.getElementById("instructorSelect");
                                        const list = document.getElementById("instructorList");

                                        let id = select.value;
                                        let name = select.options[select.selectedIndex].text;

                                        if (!id) return;
                                        if (addedInstructors.has(id)) return;

                                        addedInstructors.add(id);

                                        list.insertAdjacentHTML("beforeend", `
            <div class="mb-2 group bg-gray-100 dark:bg-gray-800 p-5 rounded-md border
                        border-borderColor dark:border-borderColor-dark 
                        flex justify-between items-center">

                <span class="font-semibold text-sm text-blackColor dark:text-whiteColor">${name}</span>

                <button type="button"
                    class="text-red-600 text-sm font-semibold hover:text-primaryColor dark:hover:text-primaryColor"
                    onclick="removeInstructor(this, '${id}')">
                    Remove
                </button>

                <input type="hidden" name="instructors[]" value="${id}">
            </div>
        `);
                                    }

                                    function removeInstructor(btn, id) {
                                        addedInstructors.delete(id);
                                        btn.closest('.group').remove();
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

                                    <div class="flex justify-start gap-3">
                                        <button type="button" onclick="closeTeacherPopup()"
                                            class="text-sm font-bold text-whiteColor bg-secondaryColor  border border-secondaryColor px-5 h-10 rounded-md">
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
                                let subjects = ["Science"];

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
<div class="w-full py-3 px-4 bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">

    <div class="flex justify-between items-center">
        <span class="font-bold uppercase     text-contentColor dark:text-contentColor-dark">${sub}</span>

        <button onclick="openTeacherPopup('${sub}')"
            class="text-sm font-bold text-whiteColor bg-secondaryColor  border border-secondaryColor px-4 h-8 rounded-md">
            Assign
        </button>
    </div>

    <div class="flex flex-wrap gap-2 mt-3">
        ${assigned[sub].length > 0 ?
                                                assigned[sub].map(t =>
                                                    `<span class="bg-blue-100 text-blackColor dark:text-whiteColor px-2 py-1 rounded text-sm">${t}</span>`
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
<label class="flex items-center mb-2 text-blackColor dark:text-whiteColor">
    <input type="checkbox" class="teacherCheck mr-2" value="${t}" ${isChecked}>
    <span class="pl-1">${t}</span>
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

                                // Initial load
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