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

                        <button
                            class="is-checked relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300 whitespace-nowrap">
                            SOCIAL ICON
                        </button>
                    </div>
                    <div class="tab-contents">

                        <!-- Profile Section Here -->
                        <div class="transition-all duration-300">
                            <form method="POST" action="<?php echo base_url('iprofile_update'); ?>"
                                enctype="multipart/form-data"
                                class="text-sm text-blackColor dark:text-blackColor-dark leading-1.8"
                                data-aos="fade-up">

                                <?php
                                // instructor data fetch
                                $fetchInstructor = $this->db->query("SELECT * FROM instructor_directory WHERE instructor_uid = '{$_SESSION['activeInstructor']}'");
                                $instructor = $fetchInstructor->row();
                                ?>

                                <div class="grid grid-cols-1 xl:grid-cols-2 mb-15px gap-y-15px gap-x-30px">
                                    <div>
                                        <label for="profilePhoto" class="mb-3 block font-semibold">Profile Photo</label>
                                        <p class="mb-2 text-sm text-gray-700 dark:text-gray-300">
                                            <b>Selected :</b>
                                            <?php echo !empty($instructor->instructor_photo) ? $instructor->instructor_photo : 'default.png'; ?>
                                        </p>
                                        <input type="file" id="profilePhoto" name="profilePhoto"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark 
                                            bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark 
                                            placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                    </div>

                                    <div>
                                        <label for="expertAs" class="mb-3 block font-semibold">Expert As</label>
                                        <input type="text" id="expertAs" name="expertAs" placeholder="You Expert As"
                                            value="<?php echo $instructor->expert_as ?? ''; ?>"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark 
                                            bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark 
                                            placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                    </div>

                                    <div>
                                        <label for="nickName" class="mb-3 block font-semibold">Nick Name</label>
                                        <input type="text" id="nickName" name="nickName" placeholder="Your Nick Name"
                                            value="<?php echo $instructor->nick_name ?? ''; ?>" class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark 
                          bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark 
                          placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                    </div>

                                    <div>
                                        <label for="facebook" class="mb-3 block font-semibold">Facebook</label>
                                        <input type="text" id="facebook" name="facebook"
                                            placeholder="https://facebook.com/"
                                            value="<?php echo $instructor->facebook_url ?? ''; ?>" class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark 
                          bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark 
                          placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                    </div>

                                    <div>
                                        <label for="xtwitter" class="mb-3 block font-semibold">X / Twitter</label>
                                        <input type="text" id="xtwitter" name="xtwitter" placeholder="https://x.com/"
                                            value="<?php echo $instructor->twitter_url ?? ''; ?>" class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark 
                          bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark 
                          placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                    </div>

                                    <div>
                                        <label for="linkedin" class="mb-3 block font-semibold">Linkedin</label>
                                        <input type="text" id="linkedin" name="linkedin"
                                            placeholder="https://linkedin.com/"
                                            value="<?php echo $instructor->linkdin_url ?? ''; ?>" class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark 
                          bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark 
                          placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                    </div>

                                    <div>
                                        <label for="github" class="mb-3 block font-semibold">Github</label>
                                        <input type="text" id="github" name="github" placeholder="https://github.com/"
                                            value="<?php echo $instructor->github_url ?? ''; ?>" class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark 
                          bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark 
                          placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                    </div>

                                    <div>
                                        <label for="instagram" class="mb-3 block font-semibold">Instagram</label>
                                        <input type="text" id="instagram" name="instagram"
                                            placeholder="https://instagram.com/"
                                            value="<?php echo $instructor->instagram_url ?? ''; ?>" class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark 
                          bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark 
                          placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                    </div>

                                    <div>
                                        <label for="website" class="mb-3 block font-semibold">Website</label>
                                        <input type="text" id="website" name="website"
                                            placeholder="https://website.com/"
                                            value="<?php echo $instructor->website_url ?? ''; ?>" class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark 
                          bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark 
                          placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                    </div>

                                    <div>
                                        <label for="youtube" class="mb-3 block font-semibold">Youtube</label>
                                        <input type="text" id="youtube" name="youtube"
                                            placeholder="https://youtube.com/"
                                            value="<?php echo $instructor->youtube_url ?? ''; ?>" class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark 
                          bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark 
                          placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                    </div>
                                </div>

                                <div class="mb-15px">
                                    <label for="biography" class="mb-3 block font-semibold">Biography</label>
                                    <textarea id="biography" name="biography"
                                        class="w-full py-10px px-5 text-sm text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark 
                         border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md resize-y"
                                        style="max-height: 150px;" cols="30"
                                        rows="5"><?php echo $instructor->biography_bio ?? 'Write Something about yourself..'; ?></textarea>
                                </div>

                                <div class="mt-15px">
                                    <button type="submit" name="updateProfile"
                                        class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark">
                                        Update Profile
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- Password  -->
                        <div class="hidden transition-all duration-300">
                            <form method="POST" action="<?php echo base_url('instPasswordUpdate'); ?>"
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
                                    <button type="submit" name="updatePassword"
                                        class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark">
                                        Update Password
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- Social LInks -->
                        <div class="hidden transition-all duration-300">
                            <form class="text-sm text-blackColor dark:text-blackColor-dark leading-1.8"
                                data-aos="fade-up">
                                <div class="grid grid-cols-1 mb-15px gap-y-15px gap-x-30px">
                                    <div>
                                        <label class="mb-3 block font-semibold"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-facebook inline-block mr-1">
                                                <path
                                                    d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                                </path>
                                            </svg>Facebook</label>
                                        <input type="text" placeholder="https://facebook.com/"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-semibold"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-twitter inline-block mr-1">
                                                <path
                                                    d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                                </path>
                                            </svg>
                                            Twitter</label>
                                        <input type="text" placeholder="https://twitter.com/"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-semibold"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-linkedin inline-block mr-1">
                                                <path
                                                    d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                                </path>
                                                <rect x="2" y="9" width="4" height="12"></rect>
                                                <circle cx="4" cy="4" r="2"></circle>
                                            </svg>Linkedin</label>
                                        <input type="text" placeholder="https://linkedin.com/"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-semibold"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-layout inline-block mr-1">
                                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                                <line x1="3" y1="9" x2="21" y2="9"></line>
                                                <line x1="9" y1="21" x2="9" y2="9"></line>
                                            </svg>Website</label>
                                        <input type="text" placeholder="https://website.com/"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                    </div>

                                    <div>
                                        <label class="mb-3 block font-semibold"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="14" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-github inline-block mr-1">
                                                <path
                                                    d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                                </path>
                                            </svg>Github</label>
                                        <input type="text" placeholder="https://github.com/"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no">
                                    </div>
                                </div>

                                <div class="mt-15px">
                                    <button type="submit"
                                        class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark">
                                        Update Social
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



<!-- Instructor Dashboard Footer section instructor_footer  -->
<?php
$this->load->view('dashboard/master_contents/dInstructor_master/instructor_footer');
?>