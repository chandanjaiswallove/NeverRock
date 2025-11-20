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
                    <h2 class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                        Create Lesson
                    </h2>
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

                        <!-- Lesson ID -->
                        <div class="space-y-3 mb-3">
                            <label class="block  font-semibold">Lesson ID</label>
                            <input type="text" name="lesson_id" placeholder="Enter Lesson ID"
                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
                        </div>

                        <!-- Lesson Name -->
                        <div class="space-y-3 mb-3 ">
                            <label class="block  font-semibold">Lesson Name</label>
                            <input type="text" name="lesson_name" placeholder="Enter Lesson Name"
                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
                        </div>

                        <!-- ===== COURSE INTRO ===== -->
                        <div
                            class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4 mt-15px accordion-section">
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
                            <div class="hidden px-6 pb-6 space-y-4" id="introContainer">
                                <div class="intro-item space-y-3">
                                    <label class="block font-semibold mb-2">Intro Title</label>
                                    <input type="text" placeholder="Enter Intro Title"
                                        class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">

                                    <label class="block font-semibold mb-2">Intro Description</label>
                                    <textarea placeholder="Enter Intro Description"
                                        class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md"></textarea>

                                    <button type="button"
                                        class="remove-intro text-sm font-semibold text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                                        Remove Intro
                                    </button>
                                </div>

                                <button type="button" onclick="addIntroField()"
                                    class="px-5 py-2 bg-primaryColor text-whiteColor rounded hover:bg-primaryColor-dark">
                                    + Add More Intro
                                </button>
                            </div>
                        </div>

                        <!-- ===== LECTURES ===== -->
                        <div
                            class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4 mt-15px accordion-section">
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
                            <div class="hidden px-6 pb-6 space-y-4" id="lectureContainer">
                                <div class="lecture-item space-y-3">
                                    <label class="block font-semibold mb-2">Lecture Title</label>
                                    <input type="text" placeholder="Enter Lecture Title"
                                        class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">

                                    <label class="block font-semibold mb-2">Lecture File</label>
                                    <input type="file"
                                        class="w-full text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">

                                    <button type="button"
                                        class="remove-lecture text-sm font-semibold text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                                        Remove Lecture
                                    </button>
                                </div>

                                <button type="button" onclick="addLectureField()"
                                    class="px-5 py-2 bg-primaryColor text-whiteColor rounded hover:bg-primaryColor-dark">
                                    + Add More Lecture
                                </button>
                            </div>
                        </div>

                        <!-- Materials -->
                        <div
                            class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4 mt-15px accordion-section">
                            <div class="cursor-pointer accordion-controller flex justify-between items-center text-lg font-semibold py-5 px-6"
                                onclick="this.nextElementSibling.classList.toggle('hidden')">
                                <span class="text-blackColor dark:text-whiteColor">Course Materials</span>
                                <svg class="transition-all duration-500 rotate-0" width="20"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#212529">
                                    <path fill-rule="evenodd"
                                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                    </path>
                                </svg>
                            </div>
                            <div class="hidden px-6 pb-6 space-y-4" id="materialContainer">
                                <div class="material-item space-y-3">
                                    <label class="block font-semibold mb-2">Material Title</label>
                                    <input type="text" placeholder="Enter Material Title"
                                        class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
                                    <input type="file"
                                        class="w-full text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">

                                    <button type="button"
                                        class="remove-material text-sm font-semibold text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                                        Remove Material
                                    </button>
                                </div>

                                <button type="button" onclick="addMaterialField()"
                                    class="px-5 py-2 bg-primaryColor text-whiteColor rounded hover:bg-primaryColor-dark">
                                    + Add More Material
                                </button>
                            </div>
                        </div>

                        <!-- QUIZ -->
                        <div
                            class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4 mt-15px accordion-section">
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
                            <div class="hidden px-6 pb-6 space-y-4" id="quizContainer">
                                <div class="quiz-item space-y-3">
                                    <label class="block font-semibold mb-2">Quiz Question</label>
                                    <input type="text" placeholder="Enter Quiz Question"
                                        class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">

                                    <button type="button"
                                        class="remove-quiz text-sm font-semibold text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                                        Remove Quiz
                                    </button>
                                </div>

                                <button type="button" onclick="addQuizField()"
                                    class="px-5 py-2 bg-primaryColor text-whiteColor rounded hover:bg-primaryColor-dark">
                                    + Add More Quiz
                                </button>
                            </div>
                        </div>

                        <!-- ASSIGNMENT -->
                        <div
                            class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4 mt-15px accordion-section">
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
                            <div class="hidden px-6 pb-6 space-y-4" id="assignmentContainer">
                                <div class="assignment-item space-y-3">
                                    <label class="block font-semibold mb-2">Assignment Title</label>
                                    <input type="text" placeholder="Enter Assignment Title"
                                        class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">

                                    <button type="button"
                                        class="remove-assignment text-sm font-semibold text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor">
                                        Remove Assignment
                                    </button>
                                </div>

                                <button type="button" onclick="addAssignmentField()"
                                    class="px-5 py-2 bg-primaryColor text-whiteColor rounded hover:bg-primaryColor-dark">
                                    + Add More Assignment
                                </button>
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

    <!-- JS FOR ADD/REMOVE FIELDS -->
    <script>
        const addLessonBtn = document.getElementById('addLessonBtn');
        const lessonFormContainer = document.getElementById('lessonFormContainer');
        addLessonBtn.addEventListener('click', () => {
            lessonFormContainer.classList.toggle('hidden');
        });

        // Add/Remove functions
        function addIntroField() {
            const container = document.getElementById('introContainer');
            const div = document.createElement('div');
            div.className = 'intro-item space-y-3';
            div.innerHTML = `
      <label class="block font-semibold mb-2">Intro Title</label>
      <input type="text" placeholder="Enter Intro Title"
        class="w-full py-10px px-5 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
      <label class="block font-semibold mb-2">Intro Description</label>
      <textarea placeholder="Enter Intro Description"
        class="w-full py-10px px-5 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md"></textarea>
      <button type="button" class="remove-intro text-sm font-semibold text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor">Remove Intro</button>
    `;
            container.insertBefore(div, container.lastElementChild);
        }

        function addLectureField() {
            const container = document.getElementById('lectureContainer');
            const div = document.createElement('div');
            div.className = 'lecture-item space-y-3';
            div.innerHTML = `
      <label class="block font-semibold mb-2">Lecture Title</label>
      <input type="text" placeholder="Enter Lecture Title"
        class="w-full py-10px px-5 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
      <input type="file" class="w-full text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
      <button type="button" class="remove-lecture text-sm font-semibold text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor">Remove Lecture</button>
    `;
            container.insertBefore(div, container.lastElementChild);
        }

        function addMaterialField() {
            const container = document.getElementById('materialContainer');
            const div = document.createElement('div');
            div.className = 'material-item space-y-3';
            div.innerHTML = `
      <label class="block font-semibold mb-2">Material Title</label>
      <input type="text" placeholder="Enter Material Title"
        class="w-full py-10px px-5 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
      <input type="file" class="w-full text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
      <button type="button" class="remove-material text-sm font-semibold text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor">Remove Material</button>
    `;
            container.insertBefore(div, container.lastElementChild);
        }

        function addQuizField() {
            const container = document.getElementById('quizContainer');
            const div = document.createElement('div');
            div.className = 'quiz-item space-y-3';
            div.innerHTML = `
      <label class="block font-semibold mb-2">Quiz Question</label>
      <input type="text" placeholder="Enter Quiz Question"
        class="w-full py-10px px-5 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
      <button type="button" class="remove-quiz text-sm font-semibold text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor">Remove Quiz</button>
    `;
            container.insertBefore(div, container.lastElementChild);
        }

        function addAssignmentField() {
            const container = document.getElementById('assignmentContainer');
            const div = document.createElement('div');
            div.className = 'assignment-item space-y-3';
            div.innerHTML = `
      <label class="block font-semibold mb-2">Assignment Title</label>
      <input type="text" placeholder="Enter Assignment Title"
        class="w-full py-10px px-5 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
      <button type="button" class="remove-assignment text-sm font-semibold text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor">Remove Assignment</button>
    `;
            container.insertBefore(div, container.lastElementChild);
        }

        // Remove event delegation
        document.addEventListener('click', (e) => {
            if (e.target.classList.contains('remove-intro')) e.target.closest('.intro-item').remove();
            if (e.target.classList.contains('remove-lecture')) e.target.closest('.lecture-item').remove();
            if (e.target.classList.contains('remove-material')) e.target.closest('.material-item').remove();
            if (e.target.classList.contains('remove-quiz')) e.target.closest('.quiz-item').remove();
            if (e.target.classList.contains('remove-assignment')) e.target.closest('.assignment-item').remove();
        });
    </script>





</main>



<!-- Instructor Dashboard Footer section instructor_footer  -->
<?php
$this->load->view('dashboard/master_contents/dInstructor_master/instructor_footer');
?>