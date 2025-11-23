<?php
defined('BASEPATH') or exit('No direct script access allowed');

// URL se course ID fetch karo
$fetchID = $this->input->get('id');

// Database se course ka single row fetch karo
$fetchCourse = $this->db->query("SELECT * FROM course_directory WHERE id = ?", [$fetchID])->row();

// Agar course exist nahi karta, fallback
if (!$fetchCourse) {
    echo "<h2>Course not found!</h2>";
    return;
}
?>

<section>
    <div class="container-fluid-2">
        <div class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-standard">


       
                                    <!-- Dummy Fields -->
                                    <div class="space-y-5">

                                        <!-- Course Name -->
                                        <div>
                                            <label class="font-semibold">Course Name</label>
                                            <input type="text" value="<?php echo $fetchCourse->course_name; ?>" readonly
                                                   class="w-full border px-3 py-2 rounded">
                                        </div>


                                                                                <!-- Course Name -->
                                        <div>
                                            <label class="font-semibold">student Name</label>
                                            <input type="text" value="<?php echo $fetchCourse->student_name; ?>" readonly
                                                   class="w-full border px-3 py-2 rounded">
                                        </div>

                                                                                <!-- Course Name -->
                                        <div>
                                            <label class="font-semibold">teacher Name</label>
                                            <input type="text" value="<?php echo $fetchCourse->teacher_name; ?>" readonly
                                                   class="w-full border px-3 py-2 rounded">
                                        </div>


                                        <!-- Course Description -->
                                        <div>
                                            <label class="font-semibold">Course Description</label>
                                            <textarea readonly class="w-full border px-3 py-2 rounded" rows="4"><?php echo $fetchCourse->course_description; ?></textarea>
                                        </div>

                                        <!-- Course Price -->
                                        <div>
                                            <label class="font-semibold">Course Price</label>
                                            <input type="text" value="<?php echo $this->config->item('indianRupee') . $fetchCourse->course_selling_cost; ?>" readonly
                                                   class="w-full border px-3 py-2 rounded">
                                        </div>

           

                                    </div>
                              