
                        <!-- SUBJECT TEACHER ASSIGN -->
                        <div class="hidden transition-all duration-300">
                            <div
                                class="group mb-2 bg-gray-100 dark:bg-gray-800 p-5 rounded-md border border-borderColor dark:border-borderColor-dark">
                                <h3 class="text-lg font-semibold mb-4 text-blackColor dark:text-whiteColor">
                                    Assign Subject to Teacher</h3>
                                <!-- SUBJECT LIST -->
                                <div id="subjectList" class="space-y-3"></div>
                            </div>
                            <form action="<?= base_url('assignSubjectTeacher'); ?>" method="POST">
                                <!-- MANAGE TEACHER POPUP -->
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
                                                class="text-sm font-bold text-whiteColor bg-secondaryColor  border border-secondaryColor px-5 h-10 rounded-md">
                                                Cancel
                                            </button>

                                            <button type="button" onclick="assignTeachers()"
                                                class="text-sm font-bold text-white bg-primaryColor hover:bg-primaryColor-dark px-5 h-10 rounded-md">
                                                Assign
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                     <script>
/*
  FINAL integration script
  - Uses PHP-provided arrays:
      $course_subjects      -> list of subjects (subject_unique_id, subject_name, ...)
      $all_teachers         -> list of teachers (teacher_unique_id, instructor_name, ...)
      $subjectAssignTeacher -> rows from subject_teacher_assign (subject_unique_id, teacher_unique_id, instructor_name)
      $course_unique_id     -> current course id
  - Keeps your UI exactly as-is.
*/

let subjects = <?= json_encode($course_subjects ?? []); ?>;
let teachers = <?= json_encode($all_teachers ?? $instructors ?? []); ?>;
let assignedRecords = <?= json_encode($subjectAssignTeacher ?? []); ?>;
let course_uid = "<?= $course_unique_id ?? '' ?>";

// Build an "assigned" map keyed by subject_unique_id -> array of teacher_unique_id
let assigned = {};
assignedRecords.forEach(r => {
    // r.subject_unique_id and r.teacher_unique_id expected
    if (!assigned[r.subject_unique_id]) assigned[r.subject_unique_id] = [];
    assigned[r.subject_unique_id].push(r.teacher_unique_id);
});

let currentSubjectID = "";
let currentSubjectName = "";

/* Render Subject List */
function loadSubjects() {
    const box = document.getElementById("subjectList");
    if (!box) return;
    box.innerHTML = "";

    subjects.forEach(sub => {
        // subject_unique_id and subject_name expected fields
        const sid = sub.subject_unique_id ?? sub.subject_id ?? sub.id ?? "";
        const sname = sub.subject_name ?? sub.name ?? "Unnamed Subject";

        const assignedTeachers = assigned[sid] ?? [];

        // Build chips of teacher names
        let chips = "";
        if (assignedTeachers.length > 0) {
            chips = assignedTeachers.map(tid => {
                const t = teachers.find(x => (x.teacher_unique_id ?? x.teacher_id ?? x.id) == tid);
                const tname = t?.instructor_name ?? t?.name ?? "Teacher";
                return `<span class="bg-blue-100 text-blackColor dark:text-whiteColor px-2 py-1 rounded text-sm">${escapeHtml(tname)}</span>`;
            }).join("");
        } else {
            chips = `<span class="text-blackColor dark:text-whiteColor text-sm italic">No teacher assigned</span>`;
        }

        box.innerHTML += `
            <div class="w-full py-3 px-4 bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md mb-3">
                <div class="flex justify-between items-center">
                    <span class="font-bold uppercase text-contentColor dark:text-contentColor-dark">${escapeHtml(sname)}</span>
                    <button onclick="openTeacherPopup('${sid}', '${escapeJs(sname)}')"
                        class="text-sm font-bold text-whiteColor bg-secondaryColor border border-secondaryColor px-4 h-8 rounded-md">
                        Assign
                    </button>
                </div>

                <div class="flex flex-wrap gap-2 mt-3">
                    ${chips}
                </div>
            </div>
        `;
    });
}

/* Open Popup */
function openTeacherPopup(subject_id, subject_name) {
    currentSubjectID = subject_id;
    currentSubjectName = subject_name;

    document.getElementById("popupSubjectName").innerText = subject_name;

    const list = document.getElementById("teacherCheckboxList");
    list.innerHTML = "";

    let alreadyAssigned = assigned[subject_id] ?? [];

    // Build checkbox list from teachers array
    teachers.forEach(t => {
        const tid = t.teacher_unique_id ?? t.teacher_id ?? t.id ?? "";
        const tname = t.instructor_name ?? t.name ?? "Teacher";
        const isChecked = alreadyAssigned.includes(tid) ? "checked" : "";

        list.innerHTML += `
            <label class="flex items-center mb-2 text-blackColor dark:text-whiteColor">
                <input type="checkbox" class="teacherCheck mr-2" value="${escapeHtmlAttr(tid)}" ${isChecked}>
                <span class="pl-1">${escapeHtml(tname)}</span>
            </label>
        `;
    });

    document.getElementById("teacherPopup").classList.remove("hidden");
}

/* Close Popup */
function closeTeacherPopup() {
    document.getElementById("teacherPopup").classList.add("hidden");
}

/* Assign Selected Teachers - send to controller API */
function assignTeachers() {
    // collect selected teacher IDs
    const selected = [...document.querySelectorAll(".teacherCheck:checked")].map(c => c.value);

    // Prepare POST body (FormData supports arrays)
    const fd = new FormData();
    fd.append('course_uid', course_uid);
    fd.append('subject_unique_id', currentSubjectID);
    fd.append('subject_name', currentSubjectName);

    // append teachers[]
    selected.forEach(t => fd.append('teachers[]', t));

    // send to your route (route must point to controller->saveSubjectTeacher)
    fetch("<?= base_url('assignSubjectTeacher'); ?>", {
        method: 'POST',
        body: fd,
        credentials: 'same-origin',
        headers: {
            // no JSON header because using FormData
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(resp => resp.json ? resp.json() : resp.text())
    .then(res => {
        // If controller returns JSON {status:'success'}
        if (res && (res.status === 'success' || res === 'success')) {
            // Update local assigned map to reflect latest selection without reload
            assigned[currentSubjectID] = selected;

            // Optionally update the subject list UI
            closeTeacherPopup();
            loadSubjects();
        } else {
            // handle failure (simple fallback)
            alert('Save failed. Try again.');
        }
    })
    .catch(err => {
        console.error('Assign request failed', err);
        alert('Request failed. Check console.');
    });
}

/* small helpers to avoid XSS when injecting server strings */
function escapeHtml(str) {
    if (!str && str !== 0) return '';
    return String(str)
        .replace(/&/g, '&amp;')
        .replace(/</g, '&lt;')
        .replace(/>/g, '&gt;')
        .replace(/"/g, '&quot;')
        .replace(/'/g, '&#39;');
}
function escapeHtmlAttr(str) {
    return escapeHtml(str).replace(/"/g, '&quot;');
}
// for passing into onclick as JS string param; replaces single quote and backslash
function escapeJs(str) {
    if (!str && str !== 0) return '';
    return String(str).replace(/\\/g, '\\\\').replace(/'/g, "\\'");
}

/* Initial load */
document.addEventListener('DOMContentLoaded', function () {
    loadSubjects();
});
</script>


                        </div>














                        
// API: Return all teachers for popup
    public function api_getTeachers()
    {
        $teachers = $this->admin->getAllInstructors();
        echo json_encode($teachers);
    }

    // API: Return assigned teachers for a subject
    public function api_getAssignedTeachers()
    {
        $subject_id = $this->input->get('subject_id');
        $course_uid = $this->input->get('course_uid');

        $data = $this->admin->getAssignedTeachers($course_uid, $subject_id);

        echo json_encode($data);
    }

    // Save subject-teacher mapping
    public function saveSubjectTeacher()
    {
        $course_uid = $this->input->post('course_uid');
        $subject_id = $this->input->post('subject_unique_id');
        $subject_name = $this->input->post('subject_name');
        $teachers = $this->input->post('teachers'); // Array

        $this->admin->assignSubjectTeacher($course_uid, $subject_id, $subject_name, $teachers);

        echo json_encode(['status' => 'success']);
    }






    public function assignSubjectTeacher($course_uid, $subject_id, $subject_name, $teachers)
{
    // Delete old records
    $this->db->where('course_unique_id', $course_uid)
             ->where('subject_unique_id', $subject_id)
             ->delete('subject_teacher_assign');

    // Insert new
    if (!empty($teachers)) {
        foreach ($teachers as $t) {

            $teacher = $this->db->where('teacher_unique_id', $t)
                                ->get('course_instructors')
                                ->row();

            $insert = [
                'course_unique_id' => $course_uid,
                'subject_unique_id' => $subject_id,
                'subject_name' => $subject_name,
                'teacher_unique_id' => $t,
                'instructor_name' => $teacher->instructor_name,
                'assigned_date' => date('Y-m-d H:i:s')
            ];

            $this->db->insert('subject_teacher_assign', $insert);
        }
    }

    return true;
}

