<!-- INSTRUCTOR UI WRAPPER -->
<div class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4 transition-all duration-300"
    data-aos="fade-up">

    <!-- HEADER -->
    <div class="cursor-pointer accordion-controller flex justify-between items-center text-lg font-semibold py-5 px-6"
        onclick="this.nextElementSibling.classList.toggle('hidden')">

        <span class="text-blackColor dark:text-whiteColor">Instructors</span>

        <svg class="transition-all duration-500 rotate-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
            fill="#212529">
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