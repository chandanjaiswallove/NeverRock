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



    <!-- Enroll Instructor Form section -->
    <section>
        <div class="container-fluid-2">
            <!-- setting area -->
            <div
                class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-standard">
                <!-- heading -->
                <div class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark">
                    <h2 class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                        Create an Instructor
                    </h2>
                </div>
                <div class="tab">
                    <div class="tab-links flex flex-wrap mb-10px lg:mb-50px rounded gap-10px">
                        <button
                            class="is-checked relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300 whitespace-nowrap active">
                            INSTRUCTOR DETAILS
                        </button>
                    </div>
                    <div class="tab-contents">
                        <div class="transition-all duration-300">
                            <form class="text-sm text-blackColor dark:text-blackColor-dark leading-1.8"
                                data-aos="fade-up" method="POST" action="<?php echo base_url('add_instructor'); ?>">
                                <div class="grid grid-cols-1 xl:grid-cols-2 mb-15px gap-y-15px gap-x-30px">
                                    <div>
                                        <label class="mb-3 block font-semibold">Instructor Name</label>
                                        <input type="text" placeholder="Enter Instructor Name" required maxlength="25"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                                            onkeyup="generateInstructorCredentials()" id="instructorName"
                                            name="instructorName">
                                    </div>
                                    <div>
                                        <label class="mb-3 block font-semibold">Instructor Email</label>
                                        <input type="email" placeholder="Enter Instructor Email" required maxlength="50"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                                            id="instructorEmail" name="instructorEmail">
                                    </div>
                                    <div>
                                        <label class="mb-3 block font-semibold">Instructor Contact</label>
                                        <input type="text" placeholder="Enter Instructor Contact" required
                                            maxlength="10"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                                            id="instructorContact" name="instructorContact">
                                    </div>
                                    <div>
                                        <label class="mb-3 block font-semibold">Portal UID</label>
                                        <input type="text" placeholder="Portal UID" style="text-transform: uppercase;"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                                            readonly id="portalUID" name="portalUID">
                                    </div>
                                    <div>
                                        <label class="mb-3 block font-semibold">Portal Password</label>
                                        <input type="text" placeholder="Portal Password"
                                            class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                                            readonly id="systemPassword" name="systemPassword">
                                    </div>
                                </div>

                                <div class="mt-15px">
                                    <button type="submit"
                                        class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark"
                                        name="registerInstructor">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





</main>

<!-- JavaScript for UID and Password -->
<script>
    function generateInstructorCredentials() {
        const instructorNameInput = document.getElementById('instructorName');
        const portalUID = document.getElementById('portalUID');
        const passwordTxt = document.getElementById('systemPassword');

        // Auto-capitalize name input
        instructorNameInput.value = instructorNameInput.value.replace(/\w\S*/g, function (txt) {
            return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
        });

        // UID generation
        const uidChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        const shuffledUID = uidChars.split('').sort(() => Math.random() - 0.5).join('');
        const month = (new Date().getMonth() + 1).toString().padStart(2, '0');
        const year = new Date().getFullYear().toString().substr(-2);
        const namePart = instructorNameInput.value.replace(/\s+/g, '').substr(0, 3).toUpperCase();
        const uniqueCode = shuffledUID.substr(0, 3);
        portalUID.value = "INS" + month + year + namePart + uniqueCode;

        // Password generation
        const passChars = 'ABCDEFWXYZ012789abcdefGHIJKLMNOPQRSTUVghijklmnopqrstuvwxyz!@3456#$%';
        const shuffledPass = passChars.split('').sort(() => Math.random() - 0.5).join('');
        passwordTxt.value = shuffledPass.substr(0, 8);
    }
</script>


<!-- Admin Dashboard Footer section admin_footer  -->
<?php
$this->load->view('dashboard/master_contents/dAdmin_master/admin_footer');
?>