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
        $course_uid = $this->input->get('course_uid');
        if (!$course_uid) {
            echo "Invalid Course UID!";
            return;
        }

        $data['course_unique_id'] = $course_uid;

        // Existing Data
        $data['features'] = $this->admin->getCourseFeatures($course_uid);
        $data['faqs'] = $this->admin->getCourseFaqs($course_uid);
        $data['descripations'] = $this->admin->getCourseHeadings($course_uid);
        $data['important_topics'] = $this->admin->getImportantTopics($course_uid); // topics + keys

        // ⭐ Instructor list for dropdown
        $data['instructors'] = $this->admin->getAllInstructors(); /// from instructors_diectory

        $data['course_subjects'] = $this->admin->getcourseSubjects($course_uid); /// from course_subjects

        $data['assignedInstructors'] = $this->admin->getCourseInstructors($course_uid); // from course_instructors

        $data['subjectAssignTeacher'] = $this->admin->getSubjectTeacher($course_uid); // from subject_teacher_assign


        // Load View
        $this->load->view('dashboard/dAdmin/admin_coursedetails', $data);
    }

    public function assignSubjectTeacher()
    {
        $data = json_decode(file_get_contents("php://input"), true);

        $course_uid = $data['course_uid'];
        $subject_uid = $data['subject_uid'];
        $subject_name = $data['subject_name'];
        $teachers = $data['teachers']; // array of {uid, name}

        if (!$course_uid || !$subject_uid) {
            echo json_encode(['status' => 'error', 'msg' => 'Course or Subject missing']);
            return;
        }

        $this->load->model('Admin_Model', 'admin');
        $this->admin->assignTeachersToSubject($course_uid, $subject_uid, $subject_name, $teachers);

        echo json_encode(['status' => 'success', 'msg' => 'Teachers assigned successfully']);

    }




<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }




    // ===========================================================================
    //  DATA FROM COURSE_SUBJECT , COURSE_INSTRUCTORS, SUBJECT_TEACHER_ASSIGN
    // ===========================================================================

    // -- --- fetch course_subjects ----------------------------
    public function getcourseSubjects($course_uid)
    {
        return $this->db->where('course_unique_id', $course_uid)
            ->order_by('id', 'ASC')
            ->get('course_subjects')
            ->result();
    }

    public function getCourseInstructors($course_uid)
    {
        return $this->db->where('course_unique_id', $course_uid)
            ->get('course_instructors')
            ->result();
    }


    // Course ke liye sabhi subject-teacher assignments fetch karna
// Agar subject_unique_id diya hai, to sirf us subject ka data aayega

    ///========================== TEACHER ASSIGN SUBJECT =============================


    // Course ke liye assignments fetch karna
    public function getSubjectTeacher($course_uid, $subject_uid = null)
    {
        $this->db->where('course_unique_id', $course_uid);
        if ($subject_uid)
            $this->db->where('subject_unique_id', $subject_uid);
        return $this->db->order_by('subject_name', 'ASC')->get('subject_teacher_assign')->result();
    }

    public function assignTeachersToSubject($course_uid, $subject_uid, $subject_name, $teachers)
    {
        // Pehle existing assignment delete karo
        $this->db->where('course_unique_id', $course_uid);
        $this->db->where('subject_unique_id', $subject_uid);
        $this->db->delete('subject_teacher_assign');

        // Agar teachers array empty hai to insert na karo (sirf delete ho gaya)
        if (empty($teachers)) {
            return true;
        }

        // Insert new assignments
        $insert_data = [];
        $now = date('Y-m-d H:i:s');

        foreach ($teachers as $t) {
            $insert_data[] = [
                'course_unique_id' => $course_uid,
                'subject_unique_id' => $subject_uid,
                'subject_name' => $subject_name,
                'teacher_unique_id' => $t['uid'],
                'instructor_name' => $t['name'],
                'assigned_date' => $now
            ];
        }

        $this->db->insert_batch('subject_teacher_assign', $insert_data);

        return true;
    }


                        <!-- SUBJECT TEACHER ASSIGN -->
                        <div id="subjectAssignContainer" class="hidden transition-all duration-300">

                            <!-- SUBJECT LIST -->
                            <div id="subjectList" class="space-y-3"></div>

                            <!-- TEACHER POPUP -->
                            <div id="teacherPopup"
                                class="fixed top-0 left-0 w-full h-full flex justify-center items-center z-50 hidden">
                                <div
                                    class="py-5 px-6 bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md shadow-md w-96">

                                    <h3 class="text-lg font-semibold mb-4 text-blackColor dark:text-whiteColor">
                                        Manage Teachers for <span id="popupSubjectName" class="font-bold"></span>
                                    </h3>

                                    <div id="teacherCheckboxList"
                                        class="max-h-56 overflow-y-auto text-blackColor dark:text-whiteColor border border-borderColor dark:border-borderColor-dark rounded-md py-4 px-4 mb-4">
                                    </div>

                                    <div class="flex justify-start gap-3">
                                        <button type="button" onclick="closeTeacherPopup()"
                                            class="text-sm font-bold text-whiteColor bg-secondaryColor border border-secondaryColor px-5 h-10 rounded-md">
                                            Cancel
                                        </button>

                                        <button type="button" onclick="assignTeachers()"
                                            class="text-sm font-bold text-white bg-primaryColor hover:bg-primaryColor-dark px-5 h-10 rounded-md">
                                            Assign
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            const courseUID = "<?= $course_unique_id ?>";
                            const subjects = <?= json_encode($course_subjects); ?>;
                            const teachers = <?= json_encode($assignedInstructors); ?>;
                            const assignedRaw = <?= json_encode($subjectAssignTeacher); ?>;

                            let assigned = {};
                            let currentSubjectUID = null;
                            let currentSubjectName = "";

                            /* BUILD ASSIGNED MAP */
                            assignedRaw.forEach(r => {
                                const sid = r.subject_unique_id; // numeric id
                                if (!assigned[sid]) assigned[sid] = [];
                                assigned[sid].push(r.teacher_unique_id);
                            });

                            /* LOAD SUBJECTS LIST */
                            function loadSubjects() {
                                const box = document.getElementById("subjectList");
                                box.innerHTML = "";

                                subjects.forEach(sub => {
                                    const sid = sub.id;

                                    box.innerHTML += `
<div class="w-full py-3 px-4 bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">
    <div class="flex justify-between items-center">
        <span class="font-bold uppercase text-contentColor dark:text-contentColor-dark">
            ${sub.subject_name}
        </span>
        <button onclick="openTeacherPopup('${sid}','${sub.subject_name}')"
            class="text-sm font-bold text-whiteColor bg-secondaryColor border border-secondaryColor px-4 h-8 rounded-md">
            Assign
        </button>
    </div>

<div class="mt-2 flex gap-2 flex-wrap">
    ${assigned[sid] && assigned[sid].length > 0
                                            ? assigned[sid].map(id => {
                                                const t = teachers.find(x => x.teacher_unique_id === id);
                                                return `<span class="bg-blue-100 text-blackColor dark:text-whiteColor px-2 py-1 rounded text-sm">${t?.instructor_name}</span>`;
                                            }).join('')
                                            : `<span class="text-blackColor dark:text-whiteColor text-sm italic">No teacher assigned</span>`
                                        }
</div>

</div>`;
                                });
                            }

                            /* OPEN POPUP */
                            function openTeacherPopup(subjectId, name) {
                                currentSubjectUID = subjectId;
                                currentSubjectName = name;

                                document.getElementById("popupSubjectName").innerText = name;
                                const list = document.getElementById("teacherCheckboxList");
                                list.innerHTML = "";

                                teachers.forEach(t => {
                                    const checked = assigned[subjectId]?.includes(t.teacher_unique_id) ? "checked" : "";
                                    list.innerHTML += `
<label class="flex items-center mb-2">
    <input type="checkbox" class="teacherCheck mr-2"
        value="${t.teacher_unique_id}"
        data-name="${t.instructor_name}" ${checked}>
    ${t.instructor_name}
</label>`;
                                });

                                document.getElementById("teacherPopup").classList.remove("hidden");
                            }

                            /* CLOSE POPUP */
                            function closeTeacherPopup() {
                                document.getElementById("teacherPopup").classList.add("hidden");
                            }

                            /* ASSIGN TEACHERS */
                            function assignTeachers() {
                                if (!currentSubjectUID) {
                                    alert("Subject not selected!");
                                    return;
                                }

                                const selected = [...document.querySelectorAll(".teacherCheck:checked")]
                                    .map(c => ({ uid: c.value, name: c.dataset.name }));

                                fetch("<?= base_url('assignSubjectTeacher') ?> ", {
                                    method: "POST",
                                    headers: { "Content-Type": "application/json" },
                                    body: JSON.stringify({
                                        course_uid: courseUID,
                                        subject_uid: currentSubjectUID,
                                        subject_name: currentSubjectName,
                                        teachers: selected
                                    })
                                }).then(res => res.json())
                                    .then(data => {
                                        if (data.status === 'success') {
                                            assigned[currentSubjectUID] = selected.map(t => t.uid);
                                            closeTeacherPopup();
                                            loadSubjects();

                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Success',
                                                text: data.msg,
                                                timer: 2000,
                                                showConfirmButton: false
                                            });

                                        } else {
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Error',
                                                text: data.msg
                                            });
                                        }
                                    });

                            }

                            loadSubjects();
                        </script>


