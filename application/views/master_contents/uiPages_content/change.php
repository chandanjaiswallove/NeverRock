<!-- CourseDetails Second Description Tab Content -->
<div class="hidden transition-all duration-300">
    <!-- Curriculum Accordion -->
    <form action="">
        <div class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4">
            <div class="cursor-pointer accordion-controller flex justify-between items-center text-lg font-semibold py-5 px-6"
                onclick="this.nextElementSibling.classList.toggle('hidden')">
                <span class="text-blackColor dark:text-whiteColor">Curriculum</span>
                <svg class="transition-all duration-500 rotate-0" width="20" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 16 16" fill="#212529">
                    <path fill-rule="evenodd"
                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                    </path>
                </svg>
            </div>

            <div class="hidden px-6 pb-6">
                <div
                    class="p-10px md:p-10 lg:p-5 2xl:p-10 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8 space-y-4">

                    <div id="subjectsWrapper" class="space-y-3"><!-- gap बढ़ाया 2 से 3 -->
                        <!-- Existing First Input -->
                        <label class="mb-3 block font-semibold">Subject Name</label>
                        <div class="flex gap-2 items-center">
                            <input type="text" name="subjectName[]" placeholder="Enter subject name"
                                class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                        </div>
                    </div>
                    <!-- Course Description -->

                    <!-- Subjects Container (inputs go here) -->
                    <div>
                        <label class="mb-3 block font-semibold">Short Description</label>
                        <textarea placeholder="Write a short description about the course"
                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                            id="courseDescription" name="courseDescription" rows="4" required></textarea>
                    </div>

                    <!-- Add New Subject Button (always at bottom) -->
                    <div class="mt-15px">
                        <button type="button" onclick="addNewSubject()"
                            class="px-5 py-2 bg-primaryColor text-whiteColor rounded hover:bg-primaryColor-dark">
                            Add New Subject
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Description Accordion -->
        <!-- Description Accordion -->
        <div class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4">
            <div class="cursor-pointer accordion-controller flex justify-between items-center text-lg font-semibold py-5 px-6"
                onclick="this.nextElementSibling.classList.toggle('hidden')">
                <span class="text-blackColor dark:text-whiteColor">Description</span>
                <svg class="transition-all duration-500 rotate-0" width="20" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 16 16" fill="#212529">
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
                                <input type="text" name="importantHeading[]" placeholder="Enter heading"
                                    class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-white dark:bg-gray-700 border border-borderColor dark:border-borderColor-dark rounded-md"
                                    required>
                            </div>
                            <div>
                                <label class="block font-semibold">Description</label>
                                <textarea name="importantDescription[]" placeholder="Enter description"
                                    class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-white dark:bg-gray-700 border border-borderColor dark:border-borderColor-dark rounded-md"
                                    required></textarea>
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
                        <h3 class="text-lg font-semibold text-primaryColor dark:text-whiteColor  ">
                            Important Topics
                        </h3>

                        <!-- Fixed First Topic (Not Removable) -->
                        <div class="group bg-gray-100 dark:bg-gray-800 p-5 rounded-md">
                            <div class="mb-3">
                                <label class="block font-semibold">Important Topic Name</label>
                                <input type="text" name="importantTitle[]" placeholder="Enter important topic name"
                                    class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark 
                                                bg-white dark:bg-gray-700 border border-borderColor dark:border-borderColor-dark 
                                                rounded-md" required>
                            </div>

                            <!-- Important Fields for this topic -->
                            <div id="importantFieldsWrapper" class="space-y-3">
                                <label class="block font-semibold">Important Fields (related to this
                                    topic)</label>

                                <!-- Default Field (Not Removable) -->
                                <div class="flex items-start gap-2">
                                    <input type="text" name="importantField[]" placeholder="Enter important field"
                                        class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark 
                                                    bg-white dark:bg-gray-700 border border-borderColor dark:border-borderColor-dark 
                                                    rounded-md" required>
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
                <svg class="transition-all duration-500 rotate-0" width="20" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 16 16" fill="#212529">
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
                            Frequently Asked Questions</h3>

                        <!-- Fixed First FAQ -->
                        <div class="group bg-gray-100 dark:bg-gray-800 p-5 rounded-md">
                            <div class="mb-3">
                                <label class="block font-semibold">Question</label>
                                <input type="text" id="faqQuestion_0" name="faqQuestion[0]"
                                    placeholder="Enter your question here"
                                    class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-white dark:bg-gray-700 border border-borderColor dark:border-borderColor-dark rounded-md"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="block font-semibold">Answer</label>
                                <textarea id="faqAnswer_0" name="faqAnswer[0]" placeholder="Enter the answer here"
                                    class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-white dark:bg-gray-700 border border-borderColor dark:border-borderColor-dark rounded-md"
                                    required></textarea>
                            </div>
                        </div>

                        <!-- Dynamic FAQs container -->
                        <div id="dynamicFAQs" class="space-y-4"></div>

                        <!-- Add More Button -->
                        <div class="mt-3">
                            <button type="button" onclick="addNewFAQ()"
                                class="px-5 py-2 bg-primaryColor text-whiteColor rounded hover:bg-primaryColor-dark">
                                + Add More
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Instructor  -->
        <!-- Instructor  -->
        <div class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4">
            <div class="cursor-pointer accordion-controller flex justify-between items-center text-lg font-semibold py-5 px-6"
                onclick="this.nextElementSibling.classList.toggle('hidden')">
                <span class="text-blackColor dark:text-whiteColor">Instructors</span>
                <svg class="transition-all duration-500 rotate-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 16 16" fill="#212529">
                    <path fill-rule="evenodd"
                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                    </path>
                </svg>
            </div>

            <div class="hidden px-6 pb-6">
                <div
                    class="p-4 md:p-5 lg:p-6 2xl:p-8 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark space-y-4">
                    <h3 class="text-lg font-semibold text-blackColor dark:text-whiteColor mb-4">
                        Select Instructors for this Course
                    </h3>
                    <!-- Multi-select Dropdown -->
                    <div class="relative mb-4">
                        <div class="relative mb-4">
                            <select id="instructorDropdown" multiple
                                class="w-full py-3 px-4 text-sm text-blackColor dark:text-blackColor bg-white dark:bg-gray-700 border border-borderColor dark:border-borderColor-dark rounded-md focus:outline-none h-12">
                                <option value="1">Rosalina D. Willaim</option>
                                <option value="2">John Doe</option>
                                <option value="3">Mary Smith</option>
                                <option value="4">James Bond</option>
                                <option value="5">Anna Johnson</option>
                                <option value="6">Robert Brown</option>
                                <option value="7">Lucy Liu</option>
                                <option value="8">David Miller</option>
                                <option value="9">Sophia Lee</option>
                                <option value="10">Michael Scott</option>
                                <option value="11">Emma Watson</option>
                            </select>
                        </div>
                    </div>
                    <!-- Selected Instructors List -->
                    <div id="selectedInstructors" class="space-y-3"></div>
                </div>
            </div>
        </div>


        <!-- Feautes  -->
        <!-- Feautes  -->
        <div class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4">
            <div class="cursor-pointer accordion-controller flex justify-between items-center text-lg font-semibold py-5 px-6"
                onclick="this.nextElementSibling.classList.toggle('hidden')">
                <span class="text-blackColor dark:text-whiteColor">Features</span>
                <svg class="transition-all duration-500 rotate-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 16 16" fill="#212529">
                    <path fill-rule="evenodd"
                        d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                    </path>
                </svg>
            </div>

            <div class="hidden px-6 pb-6">
                <div
                    class="p-2 md:p-5 lg:p-5 2xl:p-6 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8 space-y-4">

                    <h3 class="text-lg font-semibold text-blackColor dark:text-whiteColor mb-4">
                        Add Features
                    </h3>

                    <!-- Fixed First Feature -->
                    <div class="group bg-gray-100 dark:bg-gray-800 p-5 rounded-md">
                        <div class="mb-3">
                            <label class="block font-semibold">Feature Heading</label>
                            <input type="text" name="featureHeading[0]" placeholder="Enter feature heading"
                                class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-white dark:bg-gray-700 border border-borderColor dark:border-borderColor-dark rounded-md"
                                required>
                        </div>
                        <div class="mb-3">
                            <label class="block font-semibold">Feature Value (Yes / No /
                                Write)</label>
                            <input type="text" name="featureValue[0]" placeholder="Enter feature value"
                                class="w-full py-2 px-3 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-white dark:bg-gray-700 border border-borderColor dark:border-borderColor-dark rounded-md"
                                required>
                        </div>
                    </div>

                    <!-- Dynamic Features container -->
                    <div id="dynamicFeatures" class="space-y-4"></div>

                    <!-- Add More Button -->
                    <div class="mt-3">
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
                Save Course
            </button>
        </div>
    </form>
    <!-- Instructor Add More Instrucotr script -->
    <script>
        const dropdown = document.getElementById("instructorDropdown");
        const selectedDiv = document.getElementById("selectedInstructors");

        let selectedInstructors = [];

        dropdown.addEventListener("change", () => {
            Array.from(dropdown.selectedOptions).forEach(option => {
                if (!selectedInstructors.find(i => i.id === option.value)) {
                    selectedInstructors.push({ id: option.value, name: option.text });
                }
            });
            renderSelected();
        });

        function renderSelected() {
            selectedDiv.innerHTML = "";
            selectedInstructors.forEach(instr => {
                const div = document.createElement("div");
                div.className = "flex justify-between items-center py-3 px-4 border border-borderColor dark:border-borderColor-dark rounded-md bg-gray-100 dark:bg-gray-800";
                div.style.marginBottom = "10px"; // gap between blocks
                div.innerHTML = `
                                        <span class="text-contentColor dark:text-contentColor-dark">${instr.name}</span>
                                                <button type="button" class="text-contentColor dark:text-contentColor-dark hover:text-primaryColor dark:hover:text-primaryColor font-semibold" onclick="removeInstructor('${instr.id}')">Remove</button>
                                                `;
                selectedDiv.appendChild(div);
            });
        }

        function removeInstructor(id) {
            selectedInstructors = selectedInstructors.filter(i => i.id !== id);
            const option = Array.from(dropdown.options).find(opt => opt.value === id);
            if (option) option.selected = false;
            renderSelected();
        }
    </script>
</div>