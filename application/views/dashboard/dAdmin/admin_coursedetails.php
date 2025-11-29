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

                            <!-- FULL FEATURES FORM -->
                            <form action="<?= base_url('verifyCourseData'); ?>" method="POST"
                                enctype="multipart/form-data">

                                <p class="mb-2 font-semibold">
                                    Course Unique ID:
                                    <?= isset($course_unique_id) ? $course_unique_id : 'Not received' ?>
                                </p>

                                <input type="hidden" name="course_unique_id" value="<?= $course_unique_id ?>">

                                <!-- Features  -->
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

                                            <!-- LEFT: Add More -->
                                            <button type="button" onclick="addNewFeature()"
                                                class="px-5 py-2 bg-primaryColor text-white rounded hover:bg-primaryColor-dark">
                                                + Add More Features
                                            </button>

                                            <!-- RIGHT: Save -->
                                            <button type="submit"
                                                class=" ml-2 text-white bg-primaryColor px-6 py-2 rounded hover:bg-primaryColor-dark">
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