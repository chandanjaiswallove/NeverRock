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

    <section>
        <div class="container-fluid-2">
            <!-- Profile area -->
            <div
                class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-standard">
                <div class="mb-6 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark">
                    <h2 class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
                        My Profile
                    </h2>
                </div>

                <div>
                    <ul>
                        <li
                            class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px">
                            <div class="md:col-start-1 md:col-span-4">
                                <span class="inline-block">Registration Date</span>
                            </div>
                            <div class="md:col-start-5 md:col-span-8">
                                <span class="inline-block">20, January 2024 9:00 PM</span>
                            </div>
                        </li>

                        <li
                            class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                            <div class="md:col-start-1 md:col-span-4">
                                <span class="inline-block">First Name</span>
                            </div>
                            <div class="md:col-start-5 md:col-span-8">
                                <span class="inline-block">Michle</span>
                            </div>
                        </li>
                        <li
                            class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                            <div class="md:col-start-1 md:col-span-4">
                                <span class="inline-block">Last Name</span>
                            </div>
                            <div class="md:col-start-5 md:col-span-8">
                                <span class="inline-block">Obema</span>
                            </div>
                        </li>

                        <li
                            class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                            <div class="md:col-start-1 md:col-span-4">
                                <span class="inline-block">Username</span>
                            </div>
                            <div class="md:col-start-5 md:col-span-8">
                                <span class="inline-block"> obema007</span>
                            </div>
                        </li>

                        <li
                            class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                            <div class="md:col-start-1 md:col-span-4">
                                <span class="inline-block">Email</span>
                            </div>
                            <div class="md:col-start-5 md:col-span-8">
                                <span class="inline-block"> obema@example.com</span>
                            </div>
                        </li>

                        <li
                            class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                            <div class="md:col-start-1 md:col-span-4">
                                <span class="inline-block">Phone Number</span>
                            </div>
                            <div class="md:col-start-5 md:col-span-8">
                                <span class="inline-block">+55 669 4456 25987</span>
                            </div>
                        </li>

                        <li
                            class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                            <div class="md:col-start-1 md:col-span-4">
                                <span class="inline-block">Expert</span>
                            </div>
                            <div class="md:col-start-5 md:col-span-8">
                                <span class="inline-block">Graphics Design</span>
                            </div>
                        </li>

                        <li
                            class="text-lg text-contentColor dark:text-contentColor-dark leading-1.67 grid grid-cols-1 md:grid-cols-12 gap-x-30px mt-15px">
                            <div class="md:col-start-1 md:col-span-4">
                                <span class="inline-block">Biography</span>
                            </div>
                            <div class="md:col-start-5 md:col-span-8">
                                <span class="inline-block">Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit. Maiores veniam, delectus accusamus nesciunt
                                    laborum repellat laboriosam, deserunt possimus itaque
                                    iusto perferendis voluptatum quaerat cupiditate vitae.
                                    Esse aut illum perferendis nulla, corporis impedit
                                    quasi alias est!</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>






</main>



<!-- Admin Dashboard Footer section admin_footer  -->
<?php
$this->load->view('dashboard/master_contents/dAdmin_master/admin_footer');
?>