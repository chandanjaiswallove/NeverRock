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
                                <div class="grid grid-cols-1 xl:grid-cols-2 mb-15px gap-y-15px gap-x-30px">
                                    <div>
                                        <label class="mb-3 block font-semibold">First Name</label>
                                        <input type="text" placeholder="John"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                    </div>
                                    <div>
                                        <label class="mb-3 block font-semibold">Last Name</label>
                                        <input type="text" placeholder="Due"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                    </div>
                                    <div>
                                        <label class="mb-3 block font-semibold">User Name</label>
                                        <input type="text" placeholder="Ntaden Mic"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                    </div>
                                    <div>
                                        <label class="mb-3 block font-semibold">Phone Number</label>
                                        <input type="text" placeholder="+1-202-555-0174"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                    </div>
                                    <div>
                                        <label class="mb-3 block font-semibold">Skill/Occupation</label>
                                        <input type="text" placeholder="Full Stack Developer"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                    </div>
                                    <div>
                                        <label class="mb-3 block font-semibold">Display Name Publicly As</label>
                                        <input type="text" placeholder="John"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                    </div>
                                </div>
                                <div class="mb-15px">
                                    <label class="mb-3 block font-semibold">Bio</label>
                                    <textarea
                                        class="w-full py-10px px-5 text-sm text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md"
                                        cols="30" rows="10">
Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                     </textarea>
                                </div>

                                <div class="mt-15px">
                                    <button type="submit"
                                        class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark">
                                        Update Info
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