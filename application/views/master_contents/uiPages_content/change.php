

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