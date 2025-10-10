<?php
if (!isset($_SESSION['activeDeveloper'])) {
        redirect(base_url('developerLogout'));
}
?>

<!-- Developer Dashboard Header section developer_header  -->
<?php
$this->load->view('dashboard/master_contents/dDeveloper_master/developer_header');
?>


<!-- main body -->
<main class="bg-transparent">
        <!-- Developer Dashboard  section developer_banner  -->
        <?php
        $this->load->view('dashboard/master_contents/dDeveloper_master/developer_banner');
        ?>


        <!-- Enroll Institute Form section create institute -->
        <section>
                <div class="container-fluid-2">

                        <!-- setting area -->
                        <div
                                class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-standard">
                                <!-- heading -->
                                <div class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark">
                                        <h2 class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                                                Create an Institute
                                        </h2>
                                </div>
                                <div class="tab">
                                        <div class="tab-links flex flex-wrap mb-10px lg:mb-50px rounded gap-10px">
                                                <button
                                                        class="is-checked relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300 whitespace-nowrap active">
                                                        INSTITUTE DETAILS
                                                </button>



                                        </div>
                                        <div class="tab-contents">
                                                <div class="transition-all duration-300">
                                                        <form class="text-sm text-blackColor dark:text-blackColor-dark leading-1.8"
                                                                data-aos="fade-up" method="POST"
                                                                action="<?php echo base_url('add_institute'); ?>">
                                                                <div
                                                                        class="grid grid-cols-1 xl:grid-cols-2 mb-15px gap-y-15px gap-x-30px">
                                                                        <div>
                                                                                <label class="mb-3 block font-semibold">Institute
                                                                                        Name</label>
                                                                                <input type="text"
                                                                                        placeholder="Enter Institute Name"
                                                                                        required maxlength="25"
                                                                                        class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                                                                                        onkeypress="trimNames()"
                                                                                        id="instituteName"
                                                                                        name="instituteName">
                                                                        </div>
                                                                        <div>
                                                                                <label class="mb-3 block font-semibold">Admin
                                                                                        Name</label>
                                                                                <input type="text"
                                                                                        placeholder="Enter Admin Name"
                                                                                        required maxlength="25"
                                                                                        class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                                                                                        id="adminName" name="adminName">
                                                                        </div>
                                                                        <div>
                                                                                <label class="mb-3 block font-semibold">Admin
                                                                                        Email</label>
                                                                                <input type="text"
                                                                                        placeholder="Enter Admin Email"
                                                                                        required maxlength="25"
                                                                                        class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                                                                                        id="adminEmail"
                                                                                        name="adminEmail">
                                                                        </div>
                                                                        <div>
                                                                                <label class="mb-3 block font-semibold">Admin
                                                                                        Contact</label>
                                                                                <input type="text"
                                                                                        placeholder="Enter Admin Contact"
                                                                                        required maxlength="10"
                                                                                        class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                                                                                        id="adminContact"
                                                                                        name="adminContact">
                                                                        </div>
                                                                        <div>
                                                                                <label class="mb-3 block font-semibold">Portal
                                                                                        UID</label>
                                                                                <input type="text"
                                                                                        placeholder="Portal UID"
                                                                                        style="text-transform: uppercase;"
                                                                                        oninput="this.value = this.value.toUpperCase();"
                                                                                        class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                                                                                        readonly id="portalUID"
                                                                                        name="portalUID">
                                                                        </div>
                                                                        <div>
                                                                                <label class="mb-3 block font-semibold">Portal
                                                                                        Password</label>
                                                                                <input type="text"
                                                                                        placeholder="Portal Password"
                                                                                        class="w-full py-10px px-5 text-sm focus:outline-none text-contentColor dark:text-contentColor-dark bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark placeholder:text-placeholder placeholder:opacity-80 leading-23px rounded-md font-no"
                                                                                        readonly id="systemPassword"
                                                                                        name="systemPassword">
                                                                        </div>
                                                                </div>

                                                                <div class="mt-15px">
                                                                        <button type="submit"
                                                                                class="text-size-15 text-whiteColor bg-primaryColor px-25px py-10px border border-primaryColor hover:text-primaryColor hover:bg-whiteColor inline-block rounded group dark:hover:text-whiteColor dark:hover:bg-whiteColor-dark"
                                                                                name="registerAdmin">
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

<script>
        var instituteName = document.getElementById('instituteName');
        var portalUID = document.getElementById('portalUID');
        var dateFormat = new Date();
        var month = dateFormat.getMonth();
        var length = 3;
        var passwordTxt = document.getElementById('systemPassword');

        var uidCombination = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        var comboCreated = uidCombination.split('');
        comboCreated.sort(() => Math.random() - 0.5);
        var shuffled = comboCreated.join('');

        var passwordCombination = 'ABCDEFWXYZ012789abcdefGHIJKLMNOPQRSTUVghijklmnopqrstuvwxyz!@3456#$%';
        var splitCode = passwordCombination.split('');
        splitCode.sort(() => Math.random() - 0.5);
        var generatedPassword = splitCode.join('');

        function trimNames() {
                instituteName.value = instituteName.value.replace(/\w\S*/g, function (txt) { return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase(); });

                portalUID.value = "ORG"
                        + (new Date().getMonth() + 1).toString().padStart(2, '0')
                        + new Date().getFullYear().toString().substr(-2)
                        + instituteName.value.replace(/\s+/g, '').substr(0, 3)
                        + shuffled.substr(0, 3);

                passwordTxt.value = generatedPassword.substr(0, 8);

        }
</script>



<!-- Developer Dashboard Footer section developer_footer  -->
<?php
$this->load->view('dashboard/master_contents/dDeveloper_master/developer_footer');
?>