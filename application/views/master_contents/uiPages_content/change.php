            $selectedCourse = $_GET['id'];
            $fethCourseID = $this->db->query("SELECT * FROM course_directory WHERE id='$selectedCourse'");
            foreach($fethCourseID->result() as $row)
            {
                $selectedUID = $row->course_unique_id;
            }


            