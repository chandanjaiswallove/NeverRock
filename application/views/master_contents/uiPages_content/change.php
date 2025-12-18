<!-- SUBJECT TEACHER ASSIGN -->
<div class="hidden transition-all duration-300">
    <!-- <form action="<?= base_url('assignSubjectTeacher'); ?>" method="POST"> -->
    <div
        class="group mb-2 bg-gray-100 dark:bg-gray-800 p-5 rounded-md border border-borderColor dark:border-borderColor-dark">
        <h3 class="text-lg font-semibold mb-4 text-blackColor dark:text-whiteColor">
            Assign Subject to Teacher</h3>
        <!-- SUBJECT LIST -->
        <div id="subjectList" class="space-y-3"></div>
    </div>
    <!-- MANAGE TEACHER POPUP -->
    <div id="teacherPopup" class="fixed top-0 left-0 w-full h-full flex justify-center items-center z-50 hidden">
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
    </form>
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


<!--dashbord menu section -->
<section>
    <div class="container-fluid-2">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-30px pt-30px pb-100px">
            <div class="lg:col-start-1 lg:col-span-3">
                <!-- navigation menu -->
                <div
                    class="p-30px pt-5 lg:p-5 2xl:p-30px 2xl:pt-5 rounded-standard shadow-accordion dark:shadow-accordion-dark bg-whiteColor dark:bg-whiteColor-dark">
                    <!-- course card -->

                    <div class="p-5 mb-25px  bg-lightGrey5 dark:bg-whiteColor-dark rounded-lg2 shadow-accordion-dark">
                        <h3 class="text-2xl font-semibold text-blackColor dark:text-blackColor-dark leading-38px">
                            Computers Science
                        </h3>
                        <a href="#" class="">
                            <span
                                class="text-sm font-semibold text-primaryColor bg-whitegrey3 px-6 py-5px mb-5 rounded-standard inline-block aos-init aos-animate"
                                data-aos="fade-up">
                                + NEW CHAPTER
                            </span>
                        </a>

                    </div>

                    <ul class="accordion-container curriculum">
                        <!-- accordion -->
                        <li class="accordion mb-25px overflow-hidden active">
                            <div
                                class="bg-whiteColor border border-borderColor dark:bg-whiteColor-dark dark:border-borderColor-dark rounded-t-md">
                                <!-- controller -->
                                <div>
                                    <button
                                        class="accordion-controller flex justify-between items-center text-xl text-headingColor font-bold w-full px-5 py-18px dark:text-headingColor-dark font-hind leading-[20px]">
                                        <span>CHAPTERS</span>

                                        <svg class="transition-all duration-500 rotate-0" width="20"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#212529">
                                            <path fill-rule="evenodd"
                                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                                <!-- content -->
                                <div class="accordion-content transition-all duration-500">
                                    <div class="content-wrapper p-10px md:px-30px">
                                        <ul>


                                            <li
                                                class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark">
                                                <div>
                                                    <h4
                                                        class="text-blackColor dark:text-blackColor-dark leading-1 font-light">
                                                        <a href="lesson-quiz.html"
                                                            class="font-medium text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover;text-primaryColor">
                                                            Chapter 1 - Introduction
                                                        </a>
                                                    </h4>
                                                </div>
                                            </li>
                                            <li class="py-4 flex items-center justify-between flex-wrap">
                                                <div>
                                                    <h4
                                                        class="text-blackColor dark:text-blackColor-dark leading-1 font-light">
                                                        <a href="lesson-assignment.html"
                                                            class="font-medium text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover;text-primaryColor">
                                                            Chapter 2 - Variables
                                                        </a>
                                                    </h4>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="accordion mb-25px overflow-hidden">
                            <div
                                class="bg-whiteColor border border-borderColor dark:bg-whiteColor-dark dark:border-borderColor-dark rounded-t-md">
                                <!-- controller -->
                                <div>
                                    <button
                                        class="accordion-controller flex justify-between items-center text-xl text-headingColor font-bold w-full px-5 py-18px dark:text-headingColor-dark font-hind leading-[20px]">
                                        <span>SUBJECTS</span>

                                        <svg class="transition-all duration-500 rotate-0" width="20"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#212529">
                                            <path fill-rule="evenodd"
                                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                                <!-- content -->
                                <div class="accordion-content transition-all duration-500 h-0">
                                    <div class="content-wrapper p-10px md:px-30px">
                                        <ul>
                                            <li
                                                class="py-4 flex items-center justify-between flex-wrap border-b border-borderColor dark:border-borderColor-dark">
                                                <div>
                                                    <h4
                                                        class="text-blackColor dark:text-blackColor-dark leading-1 font-light">
                                                        <a href="lesson-quiz.html"
                                                            class="font-medium text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover;text-primaryColor">
                                                            MATH
                                                        </a>
                                                    </h4>
                                                </div>
                                            </li>
                                            <li class="py-4 flex items-center justify-between flex-wrap">
                                                <div>
                                                    <h4
                                                        class="text-blackColor dark:text-blackColor-dark leading-1 font-light">
                                                        <a href="lesson-assignment.html"
                                                            class="font-medium text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover;text-primaryColor">
                                                            SCIENCE
                                                        </a>
                                                    </h4>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>











                </div>
            </div>




            <!-- dashboard content -->
            <div class="lg:col-start-4 lg:col-span-9">
                <!-- counter -->
                <div
                    class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-standard">
                    <div
                        class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark flex items-center justify-between gap-2 flex-wrap">
                        <h2 class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                            Chapter 1 - Introduction
                        </h2>

                        <div
                            class="text-primaryColor bg-whitegrey3 text-sm  rounded py-0.5 px-5 flex items-center justify-between gap-2 flex-wrap">
                            <button class=" ">Lecture</button>
                            <button class=" ">Quiz</button>
                            <button class="">Assignment</button>
                            <button class="">Materials</button>
                            <button class="">Test</button>
                        </div>
                        </li>
                    </div>

                    <!-- counter area -->
                    <div class="tab">
                        <div class="tab-links grid grid-cols-2 md:grid-cols-5 gap-11px text-blackColor text-lg lg:text-size-22 font-semibold font-hind bg-transparent mt-30px md:mt-0 mb-43px aos-init aos-animate"
                            data-aos="fade-up">
                            <button
                                class="py-9px lg:py-6 hover:text-primaryColor dark:text-whiteColor dark:hover:text-primaryColor dark:bg-whiteColor-dark dark:hover:bg-whiteColor-dark hover:bg-white relative group/btn dark:shadow-standard-dark hover:shadow-bottom disabled:cursor-pointer rounded-standard bg-lightGrey7 dark:bg-lightGrey7-dark inActive">
                                <span
                                    class="absolute w-0 h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"></span>

                                Lectures
                            </button>
                            <button
                                class="py-9px lg:py-6 hover:text-primaryColor dark:hover:text-primaryColor dark:text-whiteColor hover:bg-white dark:hover:bg-whiteColor-dark relative group/btn hover:shadow-bottom dark:shadow-standard-dark disabled:cursor-pointer rounded-standard dark:bg-whiteColor-dark bg-white shadow-bottom"
                                disabled="">
                                <span
                                    class="absolute w-full h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"></span>

                                Quiz
                            </button>
                            <button
                                class="py-9px lg:py-6 hover:text-primaryColor dark:hover:text-primaryColor dark:text-whiteColor hover:bg-white dark:hover:bg-whiteColor-dark relative group/btn hover:shadow-bottom dark:shadow-standard-dark disabled:cursor-pointer rounded-standard dark:bg-whiteColor-dark bg-lightGrey7 dark:bg-lightGrey7-dark inActive">
                                <span
                                    class="absolute w-0 h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"></span>

                                Assigment
                            </button>
                            <button
                                class="py-9px lg:py-6 hover:text-primaryColor dark:hover:text-primaryColor dark:text-whiteColor hover:bg-white dark:hover:bg-whiteColor-dark relative group/btn hover:shadow-bottom dark:shadow-standard-dark disabled:cursor-pointer rounded-standard dark:bg-whiteColor-dark bg-lightGrey7 dark:bg-lightGrey7-dark inActive">
                                <span
                                    class="absolute w-0 h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"></span>
                                Materials
                            </button>
                            <button
                                class="py-9px lg:py-6 hover:text-primaryColor dark:hover:text-primaryColor dark:text-whiteColor hover:bg-white dark:hover:bg-whiteColor-dark relative group/btn hover:shadow-bottom dark:shadow-standard-dark disabled:cursor-pointer rounded-standard dark:bg-whiteColor-dark bg-lightGrey7 dark:bg-lightGrey7-dark inActive">
                                <span
                                    class="absolute w-0 h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"></span>
                                Test
                            </button>
                        </div>

                        <div class="tab-contents">
                            <!-- Monday Event-->
                            <div class="transition-opacity duration-150 ease-linear opacity-100 hidden">
                                <div class="flex flex-col gap-y-6">
                                    <!-- event 1 -->
                                    <div class="flex flex-col md:flex-row md:gap-30px lg:gap-10 items-center md:items-star bg-whiteColor dark:whiteColor-dark p-15px md:p-5 transition-all duration-300 group hover:text-whiteColor hover:bg-primaryColor dark:bg-whiteColor-dark dark:hover:bg-primaryColor shadow-experience rounded aos-init aos-animate"
                                        data-aos="fade-up">
                                        <!-- event thumb -->
                                        <div class="flex-shrink-0">
                                            <img src="modules/assets/images/event/event__1.png" alt="" class="w-170px">
                                        </div>
                                        <!-- event content -->
                                        <div class="py-18px">
                                            <div>
                                                <p
                                                    class="text-sm text-blackColor mb-10px group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor">
                                                    <i
                                                        class="icofont-clock-time text-primaryColor pr-1 group-hover:text-whiteColor dark:hover:text-whiteColor"></i>
                                                    <span class="pr-2">10.00Am - 11.00 am</span>
                                                    <span
                                                        class="text-primaryColor group-hover:text-whiteColor dark:group-hover:text-whiteColor">Mirnsdo
                                                        .H </span><span>- Event Speaker</span>
                                                </p>
                                            </div>
                                            <h3
                                                class="text-size-15 md:text-lg lg:text-2xl text-contentColor dark: font-semibold pb-18px group-hover:text-whiteColor dark:text-contentColor-dark dark:group-hover:text-whiteColor">
                                                <a href="event-details.html"
                                                    class="hover:text-secondaryColor dark:hover:text-secondaryColor">Forging
                                                    relationships between multi to national
                                                    governments and global.
                                                </a>
                                            </h3>
                                            <p
                                                class="text-base md:text-sm lg:text-base text-blackColor group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor">
                                                <a class="hover:text-secondaryColor dark:hover:text-secondaryColor"
                                                    href="home-4.html#">Read More
                                                    <i class="icofont-simple-right"></i>
                                                </a>
                                            </p>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <!-- Tuesday Event-->
                            <div class="transition-opacity duration-150 ease-linear block opacity-100">
                                <div class="flex flex-col gap-y-6">
                                    <!-- event 1 -->
                                    <div class="flex flex-col md:flex-row md:gap-30px lg:gap-10 items-center md:items-star bg-whiteColor dark:whiteColor-dark p-15px md:p-5 transition-all duration-300 group hover:text-whiteColor hover:bg-primaryColor dark:bg-whiteColor-dark dark:hover:bg-primaryColor shadow-experience rounded aos-init aos-animate"
                                        data-aos="fade-up">
                                        <!-- event thumb -->
                                        <div class="flex-shrink-0">
                                            <img src="modules/assets/images/event/event__1.png" alt="" class="w-170px">
                                        </div>
                                        <!-- event content -->
                                        <div class="py-18px">
                                            <div>
                                                <p
                                                    class="text-sm text-blackColor mb-10px group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor">
                                                    <i
                                                        class="icofont-clock-time text-primaryColor pr-1 group-hover:text-whiteColor dark:hover:text-whiteColor"></i>
                                                    <span class="pr-2">10.00Am - 11.00 am</span>
                                                    <span
                                                        class="text-primaryColor group-hover:text-whiteColor dark:group-hover:text-whiteColor">Mirnsdo
                                                        .H </span><span>- Event Speaker</span>
                                                </p>
                                            </div>
                                            <h3
                                                class="text-size-15 md:text-lg lg:text-2xl text-contentColor dark: font-semibold pb-18px group-hover:text-whiteColor dark:text-contentColor-dark dark:group-hover:text-whiteColor">
                                                <a href="event-details.html"
                                                    class="hover:text-secondaryColor dark:hover:text-secondaryColor">Forging
                                                    relationships between multi to national
                                                    governments and global.
                                                </a>
                                            </h3>
                                            <p
                                                class="text-base md:text-sm lg:text-base text-blackColor group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor">
                                                <a class="hover:text-secondaryColor dark:hover:text-secondaryColor"
                                                    href="home-4.html#">Read More
                                                    <i class="icofont-simple-right"></i>
                                                </a>
                                            </p>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <!-- Wednesday Event-->
                            <div class="transition-opacity duration-150 ease-linear opacity-100 hidden">
                                <div class="flex flex-col gap-y-6">
                                    <!-- event 1 -->
                                    <div class="flex flex-col md:flex-row md:gap-30px lg:gap-10 items-center md:items-star bg-whiteColor dark:whiteColor-dark p-15px md:p-5 transition-all duration-300 group hover:text-whiteColor hover:bg-primaryColor dark:bg-whiteColor-dark dark:hover:bg-primaryColor shadow-experience rounded aos-init aos-animate"
                                        data-aos="fade-up">
                                        <!-- event thumb -->
                                        <div class="flex-shrink-0">
                                            <img src="modules/assets/images/event/event__1.png" alt="" class="w-170px">
                                        </div>
                                        <!-- event content -->
                                        <div class="py-18px">
                                            <div>
                                                <p
                                                    class="text-sm text-blackColor mb-10px group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor">
                                                    <i
                                                        class="icofont-clock-time text-primaryColor pr-1 group-hover:text-whiteColor dark:hover:text-whiteColor"></i>
                                                    <span class="pr-2">10.00Am - 11.00 am</span>
                                                    <span
                                                        class="text-primaryColor group-hover:text-whiteColor dark:group-hover:text-whiteColor">Mirnsdo
                                                        .H </span><span>- Event Speaker</span>
                                                </p>
                                            </div>
                                            <h3
                                                class="text-size-15 md:text-lg lg:text-2xl text-contentColor dark: font-semibold pb-18px group-hover:text-whiteColor dark:text-contentColor-dark dark:group-hover:text-whiteColor">
                                                <a href="event-details.html"
                                                    class="hover:text-secondaryColor dark:hover:text-secondaryColor">Forging
                                                    relationships between multi to national
                                                    governments and global.
                                                </a>
                                            </h3>
                                            <p
                                                class="text-base md:text-sm lg:text-base text-blackColor group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor">
                                                <a class="hover:text-secondaryColor dark:hover:text-secondaryColor"
                                                    href="home-4.html#">Read More
                                                    <i class="icofont-simple-right"></i>
                                                </a>
                                            </p>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <!-- Thursday Event-->
                            <div class="transition-opacity duration-150 ease-linear opacity-100 hidden">
                                <div class="flex flex-col gap-y-6">

                                    <!-- event 4 -->
                                    <div class="flex flex-col md:flex-row md:gap-30px lg:gap-10 items-center md:justify-between bg-whiteColor dark:whiteColor-dark p-15px md:p-5 md:pl-45px transition-all duration-300 group hover:text-whiteColor hover:bg-primaryColor dark:bg-whiteColor-dark dark:hover:bg-primaryColor shadow-experience rounded aos-init aos-animate"
                                        data-aos="fade-up">
                                        <div class="py-18px">
                                            <div>
                                                <p
                                                    class="text-sm text-blackColor mb-10px group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor">
                                                    <i
                                                        class="icofont-clock-time text-primaryColor pr-1 group-hover:text-whiteColor dark:hover:text-whiteColor"></i>
                                                    <span class="pr-2">10.00Am - 11.00 am</span>
                                                    <span
                                                        class="text-primaryColor group-hover:text-whiteColor dark:group-hover:text-whiteColor">Mirnsdo
                                                        .H </span><span>- Event Speaker</span>
                                                </p>
                                            </div>
                                            <h3
                                                class="text-size-15 md:text-lg lg:text-2xl text-contentColor dark: font-semibold pb-18px group-hover:text-whiteColor dark:text-contentColor-dark dark:group-hover:text-whiteColor">
                                                <a href="event-details.html"
                                                    class="hover:text-secondaryColor dark:hover:text-secondaryColor">Forging
                                                    relationships between multi to national
                                                    governments and global.
                                                </a>
                                            </h3>
                                            <p
                                                class="text-base md:text-sm lg:text-base text-blackColor group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor">
                                                <a class="hover:text-secondaryColor dark:hover:text-secondaryColor"
                                                    href="home-4.html#">Read More
                                                    <i class="icofont-simple-right"></i>
                                                </a>
                                            </p>
                                        </div>
                                        <!-- event thumb -->
                                        <div class="flex-shrink-0 flex flex-col items-center md:items-end">
                                            <img src="modules/assets/images/event/event__1.png" alt="" class="w-170px">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Friday Event-->
                            <div class="transition-opacity duration-150 ease-linear opacity-100 hidden">
                                <div class="flex flex-col gap-y-6">

                                    <!-- event 4 -->
                                    <div class="flex flex-col md:flex-row md:gap-30px lg:gap-10 items-center md:justify-between bg-whiteColor dark:whiteColor-dark p-15px md:p-5 md:pl-45px transition-all duration-300 group hover:text-whiteColor hover:bg-primaryColor dark:bg-whiteColor-dark dark:hover:bg-primaryColor shadow-experience rounded aos-init aos-animate"
                                        data-aos="fade-up">
                                        <div class="py-18px">
                                            <div>
                                                <p
                                                    class="text-sm text-blackColor mb-10px group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor">
                                                    <i
                                                        class="icofont-clock-time text-primaryColor pr-1 group-hover:text-whiteColor dark:hover:text-whiteColor"></i>
                                                    <span class="pr-2">10.00Am - 11.00 am</span>
                                                    <span
                                                        class="text-primaryColor group-hover:text-whiteColor dark:group-hover:text-whiteColor">Mirnsdo
                                                        .H </span><span>- Event Speaker</span>
                                                </p>
                                            </div>
                                            <h3
                                                class="text-size-15 md:text-lg lg:text-2xl text-contentColor dark: font-semibold pb-18px group-hover:text-whiteColor dark:text-contentColor-dark dark:group-hover:text-whiteColor">
                                                <a href="event-details.html"
                                                    class="hover:text-secondaryColor dark:hover:text-secondaryColor">Forging
                                                    relationships between multi to national
                                                    governments and global.
                                                </a>
                                            </h3>
                                            <p
                                                class="text-base md:text-sm lg:text-base text-blackColor group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor">
                                                <a class="hover:text-secondaryColor dark:hover:text-secondaryColor"
                                                    href="home-4.html#">Read More
                                                    <i class="icofont-simple-right"></i>
                                                </a>
                                            </p>
                                        </div>
                                        <!-- event thumb -->
                                        <div class="flex-shrink-0 flex flex-col items-center md:items-end">
                                            <img src="modules/assets/images/event/event__1.png" alt="" class="w-170px">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>





        </div>
    </div>
</section>



<!-- penidng code in chapter Introduction code dashboard section -->
        <!-- counter -->
                    <div
                        class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-standard">
                        <div
                            class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark flex items-center justify-between gap-2 flex-wrap">
                            <h2 class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                                Chapter 1 - Introduction
                            </h2>

                            <div
                                class="text-primaryColor bg-whitegrey3 text-sm  rounded py-0.5 px-5 flex items-center justify-between gap-2 flex-wrap">
                                <button class=" ">Lecture</button>
                                <button class=" ">Quiz</button>
                                <button class="">Assignment</button>
                                <button class="">Materials</button>
                                <button class="">Test</button>
                            </div>
                            </li>
                        </div>

                        <!-- counter area -->
                        <div class="tab">
                            <div class="tab-links grid grid-cols-2 md:grid-cols-5 gap-11px text-blackColor text-lg lg:text-size-22 font-semibold font-hind bg-transparent mt-30px md:mt-0 mb-43px aos-init aos-animate"
                                data-aos="fade-up">
                                <button
                                    class="py-9px lg:py-6 hover:text-primaryColor dark:text-whiteColor dark:hover:text-primaryColor dark:bg-whiteColor-dark dark:hover:bg-whiteColor-dark hover:bg-white relative group/btn dark:shadow-standard-dark hover:shadow-bottom disabled:cursor-pointer rounded-standard bg-lightGrey7 dark:bg-lightGrey7-dark inActive">
                                    <span
                                        class="absolute w-0 h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"></span>

                                    Lectures
                                </button>
                                <button
                                    class="py-9px lg:py-6 hover:text-primaryColor dark:hover:text-primaryColor dark:text-whiteColor hover:bg-white dark:hover:bg-whiteColor-dark relative group/btn hover:shadow-bottom dark:shadow-standard-dark disabled:cursor-pointer rounded-standard dark:bg-whiteColor-dark bg-white shadow-bottom"
                                    disabled="">
                                    <span
                                        class="absolute w-full h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"></span>

                                    Quiz
                                </button>
                                <button
                                    class="py-9px lg:py-6 hover:text-primaryColor dark:hover:text-primaryColor dark:text-whiteColor hover:bg-white dark:hover:bg-whiteColor-dark relative group/btn hover:shadow-bottom dark:shadow-standard-dark disabled:cursor-pointer rounded-standard dark:bg-whiteColor-dark bg-lightGrey7 dark:bg-lightGrey7-dark inActive">
                                    <span
                                        class="absolute w-0 h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"></span>

                                    Assigment
                                </button>
                                <button
                                    class="py-9px lg:py-6 hover:text-primaryColor dark:hover:text-primaryColor dark:text-whiteColor hover:bg-white dark:hover:bg-whiteColor-dark relative group/btn hover:shadow-bottom dark:shadow-standard-dark disabled:cursor-pointer rounded-standard dark:bg-whiteColor-dark bg-lightGrey7 dark:bg-lightGrey7-dark inActive">
                                    <span
                                        class="absolute w-0 h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"></span>
                                    Materials
                                </button>
                                <button
                                    class="py-9px lg:py-6 hover:text-primaryColor dark:hover:text-primaryColor dark:text-whiteColor hover:bg-white dark:hover:bg-whiteColor-dark relative group/btn hover:shadow-bottom dark:shadow-standard-dark disabled:cursor-pointer rounded-standard dark:bg-whiteColor-dark bg-lightGrey7 dark:bg-lightGrey7-dark inActive">
                                    <span
                                        class="absolute w-0 h-1 bg-primaryColor top-0 left-0 group-hover/btn:w-full"></span>
                                    Test
                                </button>
                            </div>

                            <div class="tab-contents">
                                <!-- Monday Event-->
                                <div class="transition-opacity duration-150 ease-linear opacity-100 hidden">
                                    <div class="flex flex-col gap-y-6">
                                        <!-- event 1 -->
                                        <div class="flex flex-col md:flex-row md:gap-30px lg:gap-10 items-center md:items-star bg-whiteColor dark:whiteColor-dark p-15px md:p-5 transition-all duration-300 group hover:text-whiteColor hover:bg-primaryColor dark:bg-whiteColor-dark dark:hover:bg-primaryColor shadow-experience rounded aos-init aos-animate"
                                            data-aos="fade-up">
                                            <!-- event thumb -->
                                            <div class="flex-shrink-0">
                                                <img src="modules/assets/images/event/event__1.png" alt=""
                                                    class="w-170px">
                                            </div>
                                            <!-- event content -->
                                            <div class="py-18px">
                                                <div>
                                                    <p
                                                        class="text-sm text-blackColor mb-10px group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor">
                                                        <i
                                                            class="icofont-clock-time text-primaryColor pr-1 group-hover:text-whiteColor dark:hover:text-whiteColor"></i>
                                                        <span class="pr-2">10.00Am - 11.00 am</span>
                                                        <span
                                                            class="text-primaryColor group-hover:text-whiteColor dark:group-hover:text-whiteColor">Mirnsdo
                                                            .H </span><span>- Event Speaker</span>
                                                    </p>
                                                </div>
                                                <h3
                                                    class="text-size-15 md:text-lg lg:text-2xl text-contentColor dark: font-semibold pb-18px group-hover:text-whiteColor dark:text-contentColor-dark dark:group-hover:text-whiteColor">
                                                    <a href="event-details.html"
                                                        class="hover:text-secondaryColor dark:hover:text-secondaryColor">Forging
                                                        relationships between multi to national
                                                        governments and global.
                                                    </a>
                                                </h3>
                                                <p
                                                    class="text-base md:text-sm lg:text-base text-blackColor group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor">
                                                    <a class="hover:text-secondaryColor dark:hover:text-secondaryColor"
                                                        href="home-4.html#">Read More
                                                        <i class="icofont-simple-right"></i>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <!-- Tuesday Event-->
                                <div class="transition-opacity duration-150 ease-linear block opacity-100">
                                    <div class="flex flex-col gap-y-6">
                                        <!-- event 1 -->
                                        <div class="flex flex-col md:flex-row md:gap-30px lg:gap-10 items-center md:items-star bg-whiteColor dark:whiteColor-dark p-15px md:p-5 transition-all duration-300 group hover:text-whiteColor hover:bg-primaryColor dark:bg-whiteColor-dark dark:hover:bg-primaryColor shadow-experience rounded aos-init aos-animate"
                                            data-aos="fade-up">
                                            <!-- event thumb -->
                                            <div class="flex-shrink-0">
                                                <img src="modules/assets/images/event/event__1.png" alt=""
                                                    class="w-170px">
                                            </div>
                                            <!-- event content -->
                                            <div class="py-18px">
                                                <div>
                                                    <p
                                                        class="text-sm text-blackColor mb-10px group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor">
                                                        <i
                                                            class="icofont-clock-time text-primaryColor pr-1 group-hover:text-whiteColor dark:hover:text-whiteColor"></i>
                                                        <span class="pr-2">10.00Am - 11.00 am</span>
                                                        <span
                                                            class="text-primaryColor group-hover:text-whiteColor dark:group-hover:text-whiteColor">Mirnsdo
                                                            .H </span><span>- Event Speaker</span>
                                                    </p>
                                                </div>
                                                <h3
                                                    class="text-size-15 md:text-lg lg:text-2xl text-contentColor dark: font-semibold pb-18px group-hover:text-whiteColor dark:text-contentColor-dark dark:group-hover:text-whiteColor">
                                                    <a href="event-details.html"
                                                        class="hover:text-secondaryColor dark:hover:text-secondaryColor">Forging
                                                        relationships between multi to national
                                                        governments and global.
                                                    </a>
                                                </h3>
                                                <p
                                                    class="text-base md:text-sm lg:text-base text-blackColor group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor">
                                                    <a class="hover:text-secondaryColor dark:hover:text-secondaryColor"
                                                        href="home-4.html#">Read More
                                                        <i class="icofont-simple-right"></i>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <!-- Wednesday Event-->
                                <div class="transition-opacity duration-150 ease-linear opacity-100 hidden">
                                    <div class="flex flex-col gap-y-6">
                                        <!-- event 1 -->
                                        <div class="flex flex-col md:flex-row md:gap-30px lg:gap-10 items-center md:items-star bg-whiteColor dark:whiteColor-dark p-15px md:p-5 transition-all duration-300 group hover:text-whiteColor hover:bg-primaryColor dark:bg-whiteColor-dark dark:hover:bg-primaryColor shadow-experience rounded aos-init aos-animate"
                                            data-aos="fade-up">
                                            <!-- event thumb -->
                                            <div class="flex-shrink-0">
                                                <img src="modules/assets/images/event/event__1.png" alt=""
                                                    class="w-170px">
                                            </div>
                                            <!-- event content -->
                                            <div class="py-18px">
                                                <div>
                                                    <p
                                                        class="text-sm text-blackColor mb-10px group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor">
                                                        <i
                                                            class="icofont-clock-time text-primaryColor pr-1 group-hover:text-whiteColor dark:hover:text-whiteColor"></i>
                                                        <span class="pr-2">10.00Am - 11.00 am</span>
                                                        <span
                                                            class="text-primaryColor group-hover:text-whiteColor dark:group-hover:text-whiteColor">Mirnsdo
                                                            .H </span><span>- Event Speaker</span>
                                                    </p>
                                                </div>
                                                <h3
                                                    class="text-size-15 md:text-lg lg:text-2xl text-contentColor dark: font-semibold pb-18px group-hover:text-whiteColor dark:text-contentColor-dark dark:group-hover:text-whiteColor">
                                                    <a href="event-details.html"
                                                        class="hover:text-secondaryColor dark:hover:text-secondaryColor">Forging
                                                        relationships between multi to national
                                                        governments and global.
                                                    </a>
                                                </h3>
                                                <p
                                                    class="text-base md:text-sm lg:text-base text-blackColor group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor">
                                                    <a class="hover:text-secondaryColor dark:hover:text-secondaryColor"
                                                        href="home-4.html#">Read More
                                                        <i class="icofont-simple-right"></i>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <!-- Thursday Event-->
                                <div class="transition-opacity duration-150 ease-linear opacity-100 hidden">
                                    <div class="flex flex-col gap-y-6">

                                        <!-- event 4 -->
                                        <div class="flex flex-col md:flex-row md:gap-30px lg:gap-10 items-center md:justify-between bg-whiteColor dark:whiteColor-dark p-15px md:p-5 md:pl-45px transition-all duration-300 group hover:text-whiteColor hover:bg-primaryColor dark:bg-whiteColor-dark dark:hover:bg-primaryColor shadow-experience rounded aos-init aos-animate"
                                            data-aos="fade-up">
                                            <div class="py-18px">
                                                <div>
                                                    <p
                                                        class="text-sm text-blackColor mb-10px group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor">
                                                        <i
                                                            class="icofont-clock-time text-primaryColor pr-1 group-hover:text-whiteColor dark:hover:text-whiteColor"></i>
                                                        <span class="pr-2">10.00Am - 11.00 am</span>
                                                        <span
                                                            class="text-primaryColor group-hover:text-whiteColor dark:group-hover:text-whiteColor">Mirnsdo
                                                            .H </span><span>- Event Speaker</span>
                                                    </p>
                                                </div>
                                                <h3
                                                    class="text-size-15 md:text-lg lg:text-2xl text-contentColor dark: font-semibold pb-18px group-hover:text-whiteColor dark:text-contentColor-dark dark:group-hover:text-whiteColor">
                                                    <a href="event-details.html"
                                                        class="hover:text-secondaryColor dark:hover:text-secondaryColor">Forging
                                                        relationships between multi to national
                                                        governments and global.
                                                    </a>
                                                </h3>
                                                <p
                                                    class="text-base md:text-sm lg:text-base text-blackColor group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor">
                                                    <a class="hover:text-secondaryColor dark:hover:text-secondaryColor"
                                                        href="home-4.html#">Read More
                                                        <i class="icofont-simple-right"></i>
                                                    </a>
                                                </p>
                                            </div>
                                            <!-- event thumb -->
                                            <div class="flex-shrink-0 flex flex-col items-center md:items-end">
                                                <img src="modules/assets/images/event/event__1.png" alt=""
                                                    class="w-170px">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- Friday Event-->
                                <div class="transition-opacity duration-150 ease-linear opacity-100 hidden">
                                    <div class="flex flex-col gap-y-6">

                                        <!-- event 4 -->
                                        <div class="flex flex-col md:flex-row md:gap-30px lg:gap-10 items-center md:justify-between bg-whiteColor dark:whiteColor-dark p-15px md:p-5 md:pl-45px transition-all duration-300 group hover:text-whiteColor hover:bg-primaryColor dark:bg-whiteColor-dark dark:hover:bg-primaryColor shadow-experience rounded aos-init aos-animate"
                                            data-aos="fade-up">
                                            <div class="py-18px">
                                                <div>
                                                    <p
                                                        class="text-sm text-blackColor mb-10px group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor">
                                                        <i
                                                            class="icofont-clock-time text-primaryColor pr-1 group-hover:text-whiteColor dark:hover:text-whiteColor"></i>
                                                        <span class="pr-2">10.00Am - 11.00 am</span>
                                                        <span
                                                            class="text-primaryColor group-hover:text-whiteColor dark:group-hover:text-whiteColor">Mirnsdo
                                                            .H </span><span>- Event Speaker</span>
                                                    </p>
                                                </div>
                                                <h3
                                                    class="text-size-15 md:text-lg lg:text-2xl text-contentColor dark: font-semibold pb-18px group-hover:text-whiteColor dark:text-contentColor-dark dark:group-hover:text-whiteColor">
                                                    <a href="event-details.html"
                                                        class="hover:text-secondaryColor dark:hover:text-secondaryColor">Forging
                                                        relationships between multi to national
                                                        governments and global.
                                                    </a>
                                                </h3>
                                                <p
                                                    class="text-base md:text-sm lg:text-base text-blackColor group-hover:text-whiteColor dark:text-blackColor-dark dark:group-hover:text-whiteColor">
                                                    <a class="hover:text-secondaryColor dark:hover:text-secondaryColor"
                                                        href="home-4.html#">Read More
                                                        <i class="icofont-simple-right"></i>
                                                    </a>
                                                </p>
                                            </div>
                                            <!-- event thumb -->
                                            <div class="flex-shrink-0 flex flex-col items-center md:items-end">
                                                <img src="modules/assets/images/event/event__1.png" alt=""
                                                    class="w-170px">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>