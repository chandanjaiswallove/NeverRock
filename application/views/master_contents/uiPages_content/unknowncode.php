
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminDashboardControllers extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Model', 'admin'); // Load model
        $this->load->database();
    }

    // Load UI and fetch features
    public function loaDadmin_coursedetails()
    {
        $course_uid = $this->input->get('course_uid'); // ?course_uid=ZIVJJC

        if (!$course_uid) {
            echo "Invalid Course UID!";
            return;
        }

        // Fetch features from model
        $data['course_unique_id'] = $course_uid;
        $data['features'] = $this->admin->getCourseFeatures($course_uid);

        // Load view
        $this->load->view('dashboard/dAdmin/admin_coursedetails', $data);
    }

    // Handle form submit: insert, update, delete
    public function verifyCourseData()
    {
        $course_uid = $this->input->post('course_unique_id');
        $ids = $this->input->post('feature_id') ?? [];
        $headings = $this->input->post('featureHeading') ?? [];
        $values = $this->input->post('featureKey') ?? [];
        $delete_ids = $this->input->post('delete_ids') ?? [];

        $this->admin->saveAllFeatures($course_uid, $ids, $headings, $values, $delete_ids);
    }












    //// dAdmin Dashboard  pages loading here////

    public function loaDadmin_announcement()
    {
        $this->load->view('dashboard/dAdmin/admin_announcement');
    }

    public function loaDadmin_courses()
    {
        $this->load->view('dashboard/dAdmin/admin_courses');
    }

    public function loaDadmin_coursework()
    {
        $this->load->view('dashboard/dAdmin/admin_coursework');
    }

    public function loaDadmin_courseView()
    {
        $uid = $this->input->get('course_uid');

        // Course details
        $courseData = $this->db->get_where('course_directory', ['course_unique_id' => $uid])->row();

        // Course Headings
        $headings = $this->db->get_where('course_headings', ['course_unique_id' => $uid])->result();

        // Course Topics
        $topics = $this->db->get_where('course_topics', ['course_unique_id' => $uid])->result();

        // Course FAQs (optional, agar pehle wale accordion chahiye)
        $faqs = $this->db->get_where('course_faqs', ['course_unique_id' => $uid])->result();

        // Course Features
        $features = $this->db->get_where('course_features', ['course_unique_id' => $uid])->result();

        $data = [
            'row' => $courseData,
            'headings' => $headings,
            'topics' => $topics,
            'faqs' => $faqs,
            'features' => $features,
            'course_uid' => $uid
        ];

        $this->load->view('dashboard/dAdmin/admin_courseView', $data);
    }

          <form action="<?= base_url('verifyCourseData'); ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <input type="hidden" name="course_unique_id" value="<?= $course_unique_id ?>">
                                    <div class="cursor-pointer accordion-controller flex justify-between items-center text-lg font-semibold py-5 px-6"
                                        onclick="this.nextElementSibling.classList.toggle('hidden')">
                                        <span class="text-blackColor dark:text-whiteColor">Features (Yes &
                                            No)</span>
                                        <svg class="transition-all duration-500 rotate-0 w-5 h-5"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="#212529">
                                            <path fill-rule="evenodd"
                                                d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                                            </path>
                                        </svg>
                                    </div>

                                    <div class="hidden px-6 pb-6">
                                        <div
                                            class="p-2 md:p-5 lg:p-5 2xl:p-6 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8 space-y-4">

                                            <!-- EXISTING FEATURES IF DB HAS DATA -->
                                            <?php if (!empty($features)): ?>
                                                <?php foreach ($features as $f): ?>
                                                    <div
                                                        class="group mb-2 bg-gray-100 dark:bg-gray-800 p-5 rounded-md border border-borderColor dark:border-borderColor-dark">

                                                        <input type="hidden" name="feature_id[]" value="<?= $f->id ?>">

                                                        <div class="mb-3">
                                                            <label class="block font-semibold">Feature Heading</label>
                                                            <input type="text" name="featureHeading[]"
                                                                value="<?= $f->feature_heading ?>"
                                                                class="w-full py-2 px-3 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="block font-semibold">Feature Value</label>
                                                            <input type="text" name="featureKey[]"
                                                                value="<?= $f->feature_value ?>"
                                                                class="w-full py-2 px-3 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
                                                        </div>

                                                        <button type="button"
                                                            class="text-red-600 font-semibold text-sm hover:text-primaryColor dark:hover:text-primaryColor"
                                                            onclick="removeExistingFeature(this, <?= $f->id ?>)">
                                                            Remove
                                                        </button>

                                                    </div>
                                                <?php endforeach; ?>
                                            <?php endif; ?>


                                            <!-- EMPTY BLOCK ONLY IF DB HAS NO FEATURES -->
                                            <?php if (empty($features)): ?>
                                                <div
                                                    class="group mb-2 bg-gray-100 dark:bg-gray-800 p-5 rounded-md border border-borderColor dark:border-borderColor-dark">
                                                    <input type="hidden" name="feature_id[]" value="0">

                                                    <div class="mb-3">
                                                        <label class="block font-semibold">Feature Heading</label>
                                                        <input type="text" name="featureHeading[]"
                                                            placeholder="Enter feature heading"
                                                            class="w-full py-2 px-3 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="block font-semibold">Feature Value</label>
                                                        <input type="text" name="featureKey[]"
                                                            placeholder="Enter feature value"
                                                            class="w-full py-2 px-3 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
                                                    </div>
                                                </div>
                                            <?php endif; ?>


                                            <!-- Dynamic Features container -->
                                            <div id="dynamicFeatures" class="space-y-4"></div>
                                            <!-- ADD MORE + SAVE BUTTON ROW -->

                                            <div
                                                class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full place-items-center mt-4">

                                                <!-- LEFT BUTTON -->
                                                <button type="button" onclick="addNewFeature()"
                                                    class="text-sm md:text-size-15 text-whiteColor bg-secondaryColor border border-secondaryColor px-10px py-10px hover:text-primaryColor hover:bg-whiteColor rounded inline-block dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor">
                                                    + Add More Features
                                                </button>

                                                <!-- RIGHT BUTTON -->
                                                <button type="submit"
                                                    class="text-sm md:text-size-15 text-whiteColor bg-primaryColor border border-primaryColor px-10px py-10px hover:text-primaryColor hover:bg-whiteColor rounded inline-block dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor">
                                                    Save Details
                                                </button>

                                            </div>



                                        </div>



                                    </div>
                                </form>




                                

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
        if (!empty($delete_ids)) {
            foreach ($delete_ids as $del) {
                $this->deleteFeature($del);
            }
        }

        // INSERT + UPDATE
        for ($i = 0; $i < count($headings); $i++) {
            if (empty($headings[$i]) && empty($values[$i]))
                continue;

            if ($ids[$i] == 0) {
                $this->insertFeature([
                    'course_unique_id' => $course_uid,
                    'feature_heading' => $headings[$i],
                    'feature_value' => $values[$i]
                ]);
            } else {
                $this->updateFeature($ids[$i], [
                    'feature_heading' => $headings[$i],
                    'feature_value' => $values[$i]
                ]);
            }
        }

        // **Hamesha alert dikhaye, chahe arrays empty ho**
        $this->sweetAlert(
            "Success!",
            "Features updated successfully!",
            "success",
            base_url('admin_coursedetails?course_uid=' . $course_uid)
        );
    }

