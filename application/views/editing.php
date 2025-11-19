public function updateCourse()
{
    $courseId = $this->input->post('course_id', true);

    // Old files
    $oldImage = $this->input->post('oldImage');
    $oldVideo = $this->input->post('oldVideo');

    // Basic fields
    $courseTitle = $this->input->post('course_name', true);
    $courseShortDescription = $this->input->post('courseDescription');
    $courseType = $this->input->post('courseType', true);
    $courseCategory = $this->input->post('courseCategory', true);
    $startDate = $this->input->post('startDate', true);
    $finishDate = $this->input->post('finishDate', true);
    $courseAvailability = $this->input->post('avilability', true);
    $languageMedium = $this->input->post('language', true);
    $regularPrice = $this->input->post('regularPrice', true);
    $discountPrice = $this->input->post('discountPercent', true);
    $finalPrice = $this->input->post('finalPrice', true);
    $enquiryNumber = $this->input->post('enquiryNumber', true);

    // ==============================
    // UPDATE IMAGE
    // ==============================
    $config['upload_path'] = 'modules/courseThumbnail/';
    $config['allowed_types'] = 'jpg|jpeg|png|webp';
    $config['file_name'] = uniqid();

    $this->load->library('upload', $config);

    $courseImage = $oldImage; // default

    if (!empty($_FILES['courseImage']['name'])) {
        if ($this->upload->do_upload('courseImage')) {

            $courseImage = $this->upload->data('file_name');

            // delete old image
            $oldPath = 'modules/courseThumbnail/' . $oldImage;
            if (!empty($oldImage) && file_exists($oldPath)) {
                unlink($oldPath);
            }
        }
    }

    // ==============================
    // UPDATE VIDEO
    // ==============================
    $courseVideo = $oldVideo;

    if (!empty($_FILES['courseVideoFile']['name'])) {

        $config2['upload_path'] = 'modules/courseVideo/';
        $config2['allowed_types'] = 'mp4|mov|avi|mkv';
        $config2['file_name'] = uniqid();

        $this->upload->initialize($config2);

        if ($this->upload->do_upload('courseVideoFile')) {

            $courseVideo = $this->upload->data('file_name');

            // delete old video
            $oldVideoPath = 'modules/courseVideo/' . $oldVideo;
            if (!empty($oldVideo) && file_exists($oldVideoPath)) {
                unlink($oldVideoPath);
            }
        }
    }

    // ==============================
    // FINAL UPDATE DATA
    // ==============================
    $updateData = array(
        'course_name' => $courseTitle,
        'course_description' => $courseShortDescription,
        'course_type' => $courseType,
        'course_category' => $courseCategory,
        'course_thumbnail' => $courseImage,
        'starting_date' => $startDate,
        'ending_date' => $finishDate,
        'course_mode' => $courseAvailability,
        'course_language' => $languageMedium,
        'course_actual_cost' => $regularPrice,
        'discount_applied' => $discountPrice,
        'course_selling_cost' => $finalPrice,
        'enquiry_number' => $enquiryNumber,
        'course_preview_video' => $courseVideo,
        'course_video_content' => $courseVideo,
    );

    // DATABASE UPDATE
    $this->db->where('id', $courseId);
    $updated = $this->db->update('course_directory', $updateData);

    if ($updated) {
        echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
        echo '<script>
            swal({
                title: "Course Updated!",
                text: "Course details successfully updated.",
                icon: "success",
            }).then(function() {
                window.location.href = "' . base_url('admin_course') . '";
            });
        </script>';
    } else {
        echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
        echo '<script>
            swal({
                title: "Update Failed!",
                text: "Something went wrong. Try again.",
                icon: "error",
            });
        </script>';
    }
}
