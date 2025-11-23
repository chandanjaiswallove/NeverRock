<!-- Student Dashboard Header section student_header  -->
<?php
$this->load->view('dashboard/master_contents/dStudent_master/student_header');
?>


<!-- main body -->
<main class="bg-transparent">
    <!-- Student Dashboard  section student_banner  -->
    <?php
    $this->load->view('dashboard/master_contents/dStudent_master/student_banner');
    ?>

    <!--Setting Password change update section -->
    <section>
        <div class="container-fluid-2">
            <!-- setting area -->
            <div
                class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-standard">
                <!-- heading -->
                <div class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark" data-aos="fade-up">
                    <h2 class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                        SETTING
                    </h2>
                </div>

                <div class="tab">
                    <div class="tab-links flex flex-wrap mb-10px lg:mb-50px rounded gap-10px" data-aos="fade-up">
                        <button
                            class="is-checked relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300 whitespace-nowrap active">
                            PROFILE
                        </button>

                        <button
                            class="is-checked relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300 whitespace-nowrap">
                            PASSWORD
                        </button>


                    </div>
                    <div class="tab-contents">
                        <div class="transition-all duration-300">
                            <form class="text-sm text-blackColor dark:text-blackColor-dark leading-1.8"
                                data-aos="fade-up">

                                <!-- Student Basic Details -->
                                <h3 class="text-lg font-bold mb-3">Student Basic Details</h3>
                                <div class="grid grid-cols-1 xl:grid-cols-2 mb-15px gap-y-15px gap-x-30px">

                                    <div>
                                        <label class="mb-3 block font-semibold">Student ID</label>
                                        <input type="text" id="student_id" name="student_id" value="STU-2024-00125"
                                            class="w-full py-10px px-5 text-sm bg-whiteColor border-2 border-borderColor rounded-md">
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-semibold">Registration Date</label>
                                        <input type="text" id="registration_date" name="registration_date"
                                            value="20 January 2024, 9:00 PM"
                                            class="w-full py-10px px-5 text-sm bg-whiteColor border-2 border-borderColor rounded-md">
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-semibold">Full Name</label>
                                        <input type="text" id="full_name" name="full_name" value="Michle"
                                            class="w-full py-10px px-5 text-sm bg-whiteColor border-2 border-borderColor rounded-md">
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-semibold">Nick Name</label>
                                        <input type="text" id="nick_name" name="nick_name" value="obema007"
                                            class="w-full py-10px px-5 text-sm bg-whiteColor border-2 border-borderColor rounded-md">
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-semibold">Gender</label>
                                        <input type="text" id="gender" name="gender" value="Male"
                                            class="w-full py-10px px-5 text-sm bg-whiteColor border-2 border-borderColor rounded-md">
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-semibold">Date of Birth</label>
                                        <input type="text" id="dob" name="dob" value="10 Feb 2000"
                                            class="w-full py-10px px-5 text-sm bg-whiteColor border-2 border-borderColor rounded-md">
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-semibold">Blood Group</label>
                                        <input type="text" id="blood_group" name="blood_group" value="O+"
                                            class="w-full py-10px px-5 text-sm bg-whiteColor border-2 border-borderColor rounded-md">
                                    </div>

                                </div>

                                <!-- Contact Details -->
                                <h3 class="text-lg font-bold mb-3">Contact Details</h3>
                                <div class="grid grid-cols-1 xl:grid-cols-2 mb-15px gap-y-15px gap-x-30px">

                                    <div>
                                        <label class="mb-3 block font-semibold">Email</label>
                                        <input type="email" id="email" name="email" value="obema@example.com"
                                            class="w-full py-10px px-5 border-2 border-borderColor rounded-md">
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-semibold">Phone Number</label>
                                        <input type="text" id="phone" name="phone" value="+55 669 4456 25987"
                                            class="w-full py-10px px-5 border-2 border-borderColor rounded-md">
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-semibold">Alternate Phone</label>
                                        <input type="text" id="alt_phone" name="alt_phone" value="+55 889 1234 9876"
                                            class="w-full py-10px px-5 border-2 border-borderColor rounded-md">
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-semibold">Emergency Contact</label>
                                        <input type="text" id="emergency_contact" name="emergency_contact"
                                            value="+55 669 4456 25987"
                                            class="w-full py-10px px-5 border-2 border-borderColor rounded-md">
                                    </div>

                                </div>

                                <!-- Address Details -->
                                <h3 class="text-lg font-bold mb-3">Address Details</h3>
                                <div class="grid grid-cols-1 xl:grid-cols-2 mb-15px gap-y-15px gap-x-30px">

                                    <div>
                                        <label class="mb-3 block font-semibold">Current Address</label>
                                        <input type="text" id="current_address" name="current_address"
                                            value="Street 12, Maintand, Bettiah"
                                            class="w-full py-10px px-5 border-2 rounded-md">
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-semibold">District</label>
                                        <input type="text" id="district" name="district" value="Bettiah"
                                            class="w-full py-10px px-5 border-2 rounded-md">
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-semibold">State</label>
                                        <input type="text" id="state" name="state" value="Bihar"
                                            class="w-full py-10px px-5 border-2 rounded-md">
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-semibold">Country</label>
                                        <input type="text" id="country" name="country" value="India"
                                            class="w-full py-10px px-5 border-2 rounded-md">
                                    </div>

                                </div>

                                <!-- Parent Details -->
                                <h3 class="text-lg font-bold mb-3">Parent / Guardian Details</h3>
                                <div class="grid grid-cols-1 xl:grid-cols-2 mb-15px gap-y-15px gap-x-30px">

                                    <div>
                                        <label class="mb-3 block font-semibold">Father Name</label>
                                        <input type="text" id="father_name" name="father_name" value="John Aeliya"
                                            class="w-full py-10px px-5 border-2 rounded-md">
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-semibold">Father Occupation</label>
                                        <input type="text" id="father_occupation" name="father_occupation"
                                            value="Contractor" class="w-full py-10px px-5 border-2 rounded-md">
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-semibold">Father Contact</label>
                                        <input type="text" id="father_contact" name="father_contact"
                                            value="+55 889 1234 5566" class="w-full py-10px px-5 border-2 rounded-md">
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-semibold">Mother Name</label>
                                        <input type="text" id="mother_name" name="mother_name" value="Aeliya Mary"
                                            class="w-full py-10px px-5 border-2 rounded-md">
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-semibold">Mother Occupation</label>
                                        <input type="text" id="mother_occupation" name="mother_occupation"
                                            value="Teacher" class="w-full py-10px px-5 border-2 rounded-md">
                                    </div>

                                </div>

                                <!-- Academic Information -->
                                <h3 class="text-lg font-bold mb-3">Academic Information</h3>
                                <div class="grid grid-cols-1 xl:grid-cols-2 mb-15px gap-y-15px gap-x-30px">

                                    <div>
                                        <label class="mb-3 block font-semibold">Course Enrolled</label>
                                        <input type="text" id="course_enrolled" name="course_enrolled"
                                            value="BSc Computer Science"
                                            class="w-full py-10px px-5 border-2 rounded-md">
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-semibold">Session / Batch</label>
                                        <input type="text" id="session_batch" name="session_batch" value="2023 - 2027"
                                            class="w-full py-10px px-5 border-2 rounded-md">
                                    </div>


                                </div>

                                <!-- Uploaded Documents -->
                                <h3 class="text-lg font-bold mb-3">Uploaded Documents</h3>
                                <div class="grid grid-cols-1 xl:grid-cols-2 gap-y-15px gap-x-30px">

                                    <div>
                                        <label class="mb-3 block font-semibold">Aadhar Card</label>
                                        <input type="file" id="aadhar" name="aadhar" value="Uploaded"
                                            class="w-full py-10px px-5 border-2 rounded-md">
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-semibold">Previous Marksheet</label>
                                        <input type="file" id="marksheet" name="marksheet" value="Uploaded"
                                            class="w-full py-10px px-5 border-2 rounded-md">
                                    </div>

                                </div>

                                <div class="mt-15px">
                                    <button type="submit"
                                        class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px border rounded">
                                        Save Profile
                                    </button>
                                </div>

                            </form>
                        </div>

                        <div class="hidden transition-all duration-300">
                            <form
                                class="text-sm text-blackColor dark:text-blackColor-dark leading-1.8 aos-init aos-animate"
                                data-aos="fade-up">

                                <div class="grid grid-cols-1 mb-15px gap-y-15px gap-x-30px">

                                    <!-- Current Password -->
                                    <div class="relative">
                                        <label class="mb-3 block font-semibold">Current Password</label>
                                        <input type="password" id="currentPassword" name="currentPassword"
                                            placeholder="Current password" maxlength="25" required
                                            class="w-full py-10px px-5 pr-35px text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                        <span class="absolute right-5 top-1/2 -translate-y-1/2 cursor-pointer"
                                            onclick="togglePassword('currentPassword', this)">
                                            👁️
                                        </span>
                                    </div>

                                    <!-- New Password -->
                                    <div class="relative">
                                        <label class="mb-3 block font-semibold">New Password</label>
                                        <input type="password" id="newPassword" name="newPassword"
                                            placeholder="New Password" maxlength="25" required
                                            class="w-full py-10px px-5 pr-35px text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                        <span class="absolute right-5 top-1/2 -translate-y-1/2 cursor-pointer"
                                            onclick="togglePassword('newPassword', this)">
                                            👁️
                                        </span>
                                    </div>

                                    <!-- Re-Type New Password -->
                                    <div class="relative">
                                        <label class="mb-3 block font-semibold">Re-Type New Password</label>
                                        <input type="password" id="retypePassword" name="retypePassword"
                                            placeholder="Re-Type New Password" maxlength="25" required
                                            class="w-full py-10px px-5 pr-35px text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                        <span class="absolute right-5 top-1/2 -translate-y-1/2 cursor-pointer"
                                            onclick="togglePassword('retypePassword', this)">
                                            👁️
                                        </span>
                                    </div>
                                </div>

                                <div class="mt-15px">
                                    <button type="submit"
                                        class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark">
                                        Update Password
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 🔹 Show/Hide Password Script -->
    <script>
        function togglePassword(fieldId, icon) {
            const input = document.getElementById(fieldId);
            if (input.type === "password") {
                input.type = "text";
                icon.textContent = "🙈"; // Change icon when visible
            } else {
                input.type = "password";
                icon.textContent = "👁️"; // Change back to eye
            }
        }
    </script>








</main>



<!-- Student Dashboard Footer section student_footer  -->
<?php
$this->load->view('dashboard/master_contents/dStudent_master/student_footer');
?>