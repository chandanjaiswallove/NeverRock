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



    <!-- Enroll Academic Results Form section -->
    <section>
        <div class="container-fluid-2">
            <!-- setting area -->
            <div
                class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-standard">
                <!-- heading -->
                <div class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark">
                    <h2 class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                        Academic Results
                    </h2>
                </div>
                <div class="tab">
                    <div class="tab-links flex flex-wrap mb-10px lg:mb-50px rounded gap-10px">
                        <button
                            class="is-checked relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300 whitespace-nowrap active">
                            STUDENT DETAILS
                        </button>
                    </div>
                    <div class="tab-contents">
                        <div class="transition-all duration-300">
                            <form class="text-sm text-blackColor dark:text-blackColor-dark leading-1.8"
                                data-aos="fade-up" method="POST" enctype="multipart/form-data"
                                action="<?php echo base_url('add_student_result'); ?>">

                                <div class="grid grid-cols-1 xl:grid-cols-2 mb-15px gap-y-15px gap-x-30px">

                                    <div>
                                        <label class="mb-3 block font-semibold">Student Roll No</label>
                                        <input type="text" placeholder="Enter Roll Number" required maxlength="15"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md"
                                            id="rollNo" name="rollNo">
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-semibold">Student Name</label>
                                        <input type="text" placeholder="Enter Student Name" required maxlength="50"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md"
                                            id="studentName" name="studentName">
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-semibold">Batch Year</label>
                                        <input type="text" placeholder="e.g. 2022-2024" required maxlength="15"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md"
                                            id="batchYear" name="batchYear">
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-semibold">Batch Name</label>
                                        <input type="text" placeholder="e.g. A / B / C" required maxlength="10"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md"
                                            id="batchName" name="batchName">
                                    </div>

                                    <!-- ✅ Class Dropdown -->
                                    <div>
                                        <label class="mb-3 block font-semibold">Class Name</label>
                                        <select required
                                            class="w-full py-10px px-5 text-sm focus:outline-none bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md"
                                            id="className" name="className">
                                            <option value="">Select Class</option>
                                            <option value="6">6th</option>
                                            <option value="7">7th</option>
                                            <option value="8">8th</option>
                                            <option value="9">9th</option>
                                            <option value="10">10th</option>
                                            <option value="11-Science">11th (Science)</option>
                                            <option value="11-Commerce">11th (Commerce)</option>
                                            <option value="11-Arts">11th (Arts)</option>
                                            <option value="12-Science">12th (Science)</option>
                                            <option value="12-Commerce">12th (Commerce)</option>
                                            <option value="12-Arts">12th (Arts)</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-semibold">Total Marks</label>
                                        <input type="number" placeholder="Enter Total Marks (e.g. 500)" required
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md"
                                            id="totalMarks" name="totalMarks" onkeyup="calcPercentage()">
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-semibold">Marks Obtained</label>
                                        <input type="number" placeholder="Enter Marks Obtained" required
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md"
                                            id="obtainedMarks" name="obtainedMarks" onkeyup="calcPercentage()">
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-semibold">Percentage</label>
                                        <input type="text" placeholder="Auto Calculated"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark 
                                    bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark 
                                    placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no bg-gray-100" id="studentPercentage"
                                            name="studentPercentage" readonly>
                                    </div>


                                    <div>
                                        <label class="mb-3 block font-semibold">Student Photo</label>
                                        <input type="file" required accept="image/*"
                                            class="w-full py-10px px-5 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md"
                                            id="studentPhoto" name="studentPhoto">
                                    </div>

                                </div>

                                <div class="mt-15px">
                                    <button type="submit" name="studentResultData"
                                        class=" bg-primaryColor hover:bg-primaryColor/90 text-white font-semibold py-10px px-5 rounded-md shadow-md transition duration-200">
                                        Submit
                                    </button>
                                </div>

                            </form>

                            <script>
                                function calcPercentage() {
                                    let total = parseFloat(document.getElementById("totalMarks").value);
                                    let obtained = parseFloat(document.getElementById("obtainedMarks").value);

                                    if (!total || !obtained || total <= 0) {
                                        document.getElementById("studentPercentage").value = "";
                                        return;
                                    }
                                    if (obtained > total) {
                                        document.getElementById("studentPercentage").value = "Invalid Marks";
                                        return;
                                    }

                                    let percent = ((obtained / total) * 100).toFixed(2);
                                    document.getElementById("studentPercentage").value = percent + "%";
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