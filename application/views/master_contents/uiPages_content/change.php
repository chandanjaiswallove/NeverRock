            <!-- $selectedCourse = $_GET['id'];
            $fethCourseID = $this->db->query("SELECT * FROM course_directory WHERE id='$selectedCourse'");
            foreach($fethCourseID->result() as $row)
            {
                $selectedUID = $row->course_unique_id;
            }


             -->

             $route['admin_coursedetails'] = 'AdminDashboardControllers/loaDadmin_coursedetails';
$route['verifyCourseData'] = 'AdminDashboardControllers/verifyCourseData';<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminDashboardControllers extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Model', 'admin');
        $this->load->database();
    }

    // Load features in form
    public function loaDadmin_coursedetails()
    {
        $course_uid = $this->input->get('course_uid');

        if (!$course_uid) {
            echo "Invalid Course UID!";
            return;
        }

        $data['course_unique_id'] = $course_uid;
        $data['features'] = $this->admin->getCourseFeatures($course_uid);

        $this->load->view('dashboard/dAdmin/admin_coursedetails', $data);
    }

    // Handle form submit: insert, update, delete
    public function verifyCourseData()
    {
        $course_uid = $this->input->post('course_unique_id');
        $ids = $this->input->post('feature_id');
        $headings = $this->input->post('featureHeading');
        $values = $this->input->post('featureKey');
        $delete_ids = $this->input->post('delete_ids');

        $this->admin->saveAllFeatures($course_uid, $ids, $headings, $values, $delete_ids);

        $this->admin->sweetAlert(
            "Success!",
            "Features updated successfully!",
            "success",
            base_url('admin_coursedetails?course_uid=' . $course_uid)
        );
    }
}


<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    // Fetch all features for a course
    public function getCourseFeatures($course_uid)
    {
        return $this->db->get_where('course_features', ['course_unique_id' => $course_uid])->result();
    }

    // Insert new feature
    public function insertFeature($data)
    {
        return $this->db->insert('course_features', $data);
    }

    // Update existing feature
    public function updateFeature($id, $data)
    {
        return $this->db->where('id', $id)->update('course_features', $data);
    }

    // Delete feature
    public function deleteFeature($id)
    {
        return $this->db->delete('course_features', ['id' => $id]);
    }

    // Save all features (insert + update + delete)
    public function saveAllFeatures($course_uid, $ids, $headings, $values, $delete_ids = [])
    {
        // DELETE
        if(!empty($delete_ids)){
            foreach($delete_ids as $del){
                $this->deleteFeature($del);
            }
        }

        // INSERT + UPDATE
        for($i = 0; $i < count($headings); $i++){
            if($headings[$i] == "" && $values[$i] == "") continue;

            if($ids[$i] == 0){
                // INSERT
                $this->insertFeature([
                    'course_unique_id' => $course_uid,
                    'feature_heading' => $headings[$i],
                    'feature_value' => $values[$i]
                ]);
            } else {
                // UPDATE
                $this->updateFeature($ids[$i], [
                    'feature_heading' => $headings[$i],
                    'feature_value' => $values[$i]
                ]);
            }
        }
    }

    // SweetAlert
    public function sweetAlert($title, $msg, $type, $redirect)
    {
        echo "
        <script>
            Swal.fire({
                title: '$title',
                text: '$msg',
                icon: '$type',
            }).then(() => {
                window.location.href = '$redirect';
            });
        </script>";
    }
}



<div class="transition-all duration-300" data-aos="fade-up">

    <form action="<?= base_url('verifyCourseData'); ?>" method="POST" enctype="multipart/form-data">

        <p>Course Unique ID:
            <?= isset($course_unique_id) ? $course_unique_id : 'Not received' ?>
        </p>
        <input type="hidden" name="course_unique_id" value="<?= $course_unique_id ?>">

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
                <div class="p-5 bg-darkdeep3 dark:bg-transparent space-y-4">

                    <?php if (!empty($features)): ?>
                        <?php foreach ($features as $f): ?>
                            <div class="group bg-gray-100 dark:bg-gray-800 p-5 rounded-md border">

                                <input type="hidden" name="feature_id[]" value="<?= $f->id ?>">

                                <div class="mb-3">
                                    <label class="block font-semibold">Feature Heading</label>
                                    <input type="text" name="featureHeading[]" value="<?= $f->feature_heading ?>"
                                        class="w-full py-2 px-3 border rounded-md">
                                </div>

                                <div class="mb-3">
                                    <label class="block font-semibold">Feature Value</label>
                                    <input type="text" name="featureKey[]" value="<?= $f->feature_value ?>"
                                        class="w-full py-2 px-3 border rounded-md">
                                </div>

                                <button type="button" class="text-red-600 font-semibold"
                                    onclick="removeExistingFeature(this, <?= $f->id ?>)">Remove</button>

                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>

                    <div id="dynamicFeatures"></div>

                    <button type="button" onclick="addNewFeature()"
                        class="px-5 py-2 bg-primaryColor text-white rounded mt-3">
                        + Add More Features
                    </button>

                </div>
            </div>
        </div>

        <button type="submit" class="text-white bg-primaryColor px-6 py-3 rounded mt-3">
            Save Details
        </button>

    </form>

    <script>
        function addNewFeature() {
            const box = `
<div class="group bg-gray-100 dark:bg-gray-800 p-5 rounded-md border mt-3">

    <input type="hidden" name="feature_id[]" value="0">

    <div class="mb-3">
        <label class="block font-semibold">Feature Heading</label>
        <input type="text" name="featureHeading[]" class="w-full py-2 px-3 border rounded-md" required>
    </div>

    <div class="mb-3">
        <label class="block font-semibold">Feature Value</label>
        <input type="text" name="featureKey[]" class="w-full py-2 px-3 border rounded-md" required>
    </div>

    <button type="button" class="text-red-600 font-semibold mt-2"
        onclick="this.parentElement.remove()">Remove</button>
</div>`;
            document.getElementById("dynamicFeatures").insertAdjacentHTML("beforeend", box);
        }

        function removeExistingFeature(el, id) {
            el.parentElement.remove();

            const hidden = document.createElement("input");
            hidden.type = "hidden";
            hidden.name = "delete_ids[]";
            hidden.value = id;

            document.forms[0].appendChild(hidden);
        }
    </script>
</div>








    <div class="transition-all duration-300" data-aos="fade-up">

    <form action="<?= base_url('verifyCourseData'); ?>" method="POST"
    enctype="multipart/form-data">

    <p>Course Unique ID:
    <?= isset($course_unique_id) ? $course_unique_id : 'Not received' ?>
    </p>
    <input type="hidden" name="course_unique_id" value="<?= $course_unique_id ?>">

    <div class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4">
    <div class="cursor-pointer accordion-controller flex justify-between items-center text-lg font-semibold py-5 px-6"
    onclick="this.nextElementSibling.classList.toggle('hidden')">
    <span class="text-blackColor dark:text-whiteColor">Features</span>

    <svg class="transition-all duration-500 rotate-0 w-5 h-5"
    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#212529">
    <path fill-rule="evenodd"
    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
    </path>
    </svg>
    </div>

    <div class="hidden px-6 pb-6">
    <div class="p-5 bg-darkdeep3 dark:bg-transparent space-y-4">

    <?php if (!empty($features)): ?>
    <?php foreach ($features as $f): ?>
    <div class="group bg-gray-100 dark:bg-gray-800 p-5 rounded-md border">

    <input type="hidden" name="feature_id[]"
    value="<?= htmlspecialchars($f->id, ENT_QUOTES) ?>">

    <div class="mb-3">
    <label class="block font-semibold">Feature Heading</label>
    <input type="text" name="featureHeading[]"
    value="<?= htmlspecialchars($f->feature_heading, ENT_QUOTES) ?>"
    class="w-full py-2 px-3 border rounded-md">
    </div>

    <div class="mb-3">
    <label class="block font-semibold">Feature Value</label>
    <input type="text" name="featureKey[]"
    value="<?= htmlspecialchars($f->feature_value, ENT_QUOTES) ?>"
    class="w-full py-2 px-3 border rounded-md">
    </div>

    <button type="button" class="text-red-600 font-semibold"
    onclick="removeExistingFeature(this, <?= htmlspecialchars($f->id, ENT_QUOTES) ?>)">Remove</button>

    </div>
    <?php endforeach; ?>
    <?php endif; ?>

    <div id="dynamicFeatures"></div>

    <button type="button" onclick="addNewFeature()"
    class="px-5 py-2 bg-primaryColor text-white rounded mt-3">
    + Add More Features
    </button>

    </div>
    </div>
    </div>

    <button type="submit" class="text-white bg-primaryColor px-6 py-3 rounded mt-3">
    Save Details
    </button>

    </form>

    <script>
    function addNewFeature() {
    const box = `
    <div class="group bg-gray-100 dark:bg-gray-800 p-5 rounded-md border mt-3">

    <input type="hidden" name="feature_id[]" value="0">

    <div class="mb-3">
    <label class="block font-semibold">Feature Heading</label>
    <input type="text" name="featureHeading[]" class="w-full py-2 px-3 border rounded-md" required>
    </div>

    <div class="mb-3">
    <label class="block font-semibold">Feature Value</label>
    <input type="text" name="featureKey[]" class="w-full py-2 px-3 border rounded-md" required>
    </div>

    <button type="button" class="text-red-600 font-semibold mt-2"
    onclick="this.parentElement.remove()">Remove</button>
    </div>`;
    document.getElementById("dynamicFeatures").insertAdjacentHTML("beforeend", box);
    }

    function removeExistingFeature(el, id) {
    el.parentElement.remove();

    const hidden = document.createElement("input");
    hidden.type = "hidden";
    hidden.name = "delete_ids[]";
    hidden.value = id;

    document.forms[0].appendChild(hidden);
    }
    </script>
    </div>

