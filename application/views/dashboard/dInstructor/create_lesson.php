<!-- Instructor Dashboard Header section instructor_header  -->
<?php
$this->load->view('dashboard/master_contents/dInstructor_master/instructor_header');
?>


<!-- main body -->
<main class="bg-transparent">
    <!-- Instructor Dashboard  section instructor_banner  -->
    <?php
    $this->load->view('dashboard/master_contents/dInstructor_master/instructor_banner');
    ?>














    <section>
        <div class="container-fluid-2">
            <div
                class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-standard">

                <!-- Heading -->
                <div class="mb-3 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark" data-aos="fade-up">
                    <h2 class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">Create Lesson</h2>
                </div>

                <!-- ADD LESSON BUTTON -->
                <div class="mb-6" data-aos="fade-up">
                      <button id="addLessonBtn" type="button"
                    class="is-checked relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300 whitespace-nowrap before:w-full active">
                     + Add Lesson
                </button>
                </div>




              

                <!-- LESSON FORM (HIDDEN INITIALLY) -->
                <div id="lessonFormContainer" class="hidden transition-all duration-500">

                    <form
                        class="p-10px md:p-10 lg:p-5 2xl:p-10 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8 space-y-6">

                        <!-- Lesson Name -->
                        <div class="space-y-3">
                            <label class="block mb-3 font-semibold">Lesson Name</label>
                            <input type="text" name="lesson_name" placeholder="Enter Lesson Name"
                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                        </div>

                        <!-- COURSE INTRO ACCORDION -->
                        <div class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4 mt-15px">
                            <div class="cursor-pointer accordion-controller flex justify-between items-center text-lg font-semibold py-5 px-6"
                                onclick="this.nextElementSibling.classList.toggle('hidden')">
                                <span class="text-blackColor dark:text-whiteColor">Course Intro</span>
                                <svg class="transition-all duration-500 rotate-0" width="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#212529">
                                    <path fill-rule="evenodd"
                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                    </path>
                                </svg>
                            </div>
                            <div class="hidden px-6 pb-6 space-y-4">
                                <label class="block font-semibold mb-2">Intro Title</label>
                                <input type="text" placeholder="Enter Intro Title"
                                    class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">

                                <label class="block font-semibold mb-2">Upload Video</label>
                                <input type="file"
                                    class="w-full py-2 px-3 text-sm border-2 border-borderColor rounded-md">

                                <div class="mt-15px">
                                    <button type="button"
                                        class="px-5 py-2 bg-primaryColor text-whiteColor rounded hover:bg-primaryColor-dark font-semibold">
                                        + Add More Intro
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- LECTURES ACCORDION -->
                        <div class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4 mt-15px">
                            <div class="cursor-pointer accordion-controller flex justify-between items-center text-lg font-semibold py-5 px-6"
                                onclick="this.nextElementSibling.classList.toggle('hidden')">
                                <span class="text-blackColor dark:text-whiteColor">Lectures</span>
                                <svg class="transition-all duration-500 rotate-0" width="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#212529">
                                    <path fill-rule="evenodd"
                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                    </path>
                                </svg>
                            </div>
                            <div class="hidden px-6 pb-6 space-y-4">
                                <label class="block font-semibold mb-2">Lecture Title</label>
                                <input type="text" placeholder="Enter Lecture Title"
                                    class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">

                                <label class="block font-semibold mb-2">Upload Video</label>
                                <input type="file"
                                    class="w-full py-2 px-3 text-sm border-2 border-borderColor rounded-md">

                                <div class="mt-15px">
                                    <button type="button"
                                        class="px-5 py-2 bg-primaryColor text-whiteColor rounded hover:bg-primaryColor-dark font-semibold">
                                        + Add New Lecture
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- MATERIALS ACCORDION -->
                        <div class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4 mt-15px">
                            <div class="cursor-pointer accordion-controller flex justify-between items-center text-lg font-semibold py-5 px-6"
                                onclick="this.nextElementSibling.classList.toggle('hidden')">
                                <span class="text-blackColor dark:text-whiteColor">Materials</span>
                                <svg class="transition-all duration-500 rotate-0" width="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#212529">
                                    <path fill-rule="evenodd"
                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                    </path>
                                </svg>
                            </div>
                            <div class="hidden px-6 pb-6 space-y-4">
                                <label class="block font-semibold mb-2">Material Title</label>
                                <input type="text" placeholder="Enter Material Title"
                                    class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">

                                <label class="block font-semibold mb-2">Upload Material File</label>
                                <input type="file"
                                    class="w-full py-2 px-3 text-sm border-2 border-borderColor rounded-md">

                                <div class="mt-15px">
                                    <button type="button"
                                        class="px-5 py-2 bg-primaryColor text-whiteColor rounded hover:bg-primaryColor-dark font-semibold">
                                        + Add New Material
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- QUIZ ACCORDION -->
                        <div class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4 mt-15px">
                            <div class="cursor-pointer accordion-controller flex justify-between items-center text-lg font-semibold py-5 px-6"
                                onclick="this.nextElementSibling.classList.toggle('hidden')">
                                <span class="text-blackColor dark:text-whiteColor">Quiz</span>
                                <svg class="transition-all duration-500 rotate-0" width="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#212529">
                                    <path fill-rule="evenodd"
                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                    </path>
                                </svg>
                            </div>
                            <div class="hidden px-6 pb-6 space-y-4">
                                <label class="block font-semibold mb-2">Quiz Title</label>
                                <input type="text" placeholder="Enter Quiz Title"
                                    class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">

                                <div class="mt-15px">
                                    <button type="button"
                                        class="px-5 py-2 bg-primaryColor text-whiteColor rounded hover:bg-primaryColor-dark font-semibold">
                                        + Add New Quiz
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- ASSIGNMENT ACCORDION -->
                        <div class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4 mt-15px">
                            <div class="cursor-pointer accordion-controller flex justify-between items-center text-lg font-semibold py-5 px-6"
                                onclick="this.nextElementSibling.classList.toggle('hidden')">
                                <span class="text-blackColor dark:text-whiteColor">Assignment</span>
                                <svg class="transition-all duration-500 rotate-0" width="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#212529">
                                    <path fill-rule="evenodd"
                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                    </path>
                                </svg>
                            </div>
                            <div class="hidden px-6 pb-6 space-y-4">
                                <label class="block font-semibold mb-2">Assignment Title</label>
                                <input type="text" placeholder="Enter Assignment Title"
                                    class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">

                                <label class="block font-semibold mb-2">Assignment Description</label>
                                <textarea placeholder="Enter Assignment Description"
                                    class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md"></textarea>

                                <div class="mt-15px">
                                    <button type="button"
                                        class="px-5 py-2 bg-primaryColor text-whiteColor rounded hover:bg-primaryColor-dark font-semibold">
                                        + Add New Assignment
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Save Lesson -->
                        <div class="mt-6">
                            <button type="submit"
                                class="px-6 py-3 bg-primaryColor text-whiteColor rounded hover:bg-primaryColor-dark font-semibold">
                                Save Lesson
                            </button>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </section>

    <!-- JS TOGGLE FORM -->
    <script>
        const addLessonBtn = document.getElementById('addLessonBtn');
        const lessonFormContainer = document.getElementById('lessonFormContainer');

        addLessonBtn.addEventListener('click', () => {
            lessonFormContainer.classList.toggle('hidden');
        });
    </script>
























</main>



<!-- Instructor Dashboard Footer section instructor_footer  -->
<?php
$this->load->view('dashboard/master_contents/dInstructor_master/instructor_footer');
?>