<div class="border border-borderColor dark:border-borderColor-dark rounded-md mb-4" data-aos="fade-up">

    <form action="<?= base_url('verifyCourseImportantTopic'); ?>" method="POST" enctype="multipart/form-data">

        <input type="hidden" name="course_unique_id" value="<?= $course_unique_id ?>">
        <input type="hidden" name="topic_id" id="topic_id" value="<?= $important_topics->id ?? 0 ?>">

        <!-- deleted key ids here -->
        <input type="hidden" id="deleted_keys" name="deleted_key_ids">

        <!-- HEADER -->
        <div class="cursor-pointer accordion-controller flex justify-between items-center text-lg font-semibold py-5 px-6"
            onclick="this.nextElementSibling.classList.toggle('hidden')">
            <span class="text-blackColor dark:text-whiteColor">Important Topic</span>
            <svg class="transition-all duration-500 rotate-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 16 16" fill="#212529">
                <path fill-rule="evenodd"
                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z">
                </path>
            </svg>
        </div>

        <!-- BODY -->
        <div class="hidden px-6 pb-6">
            <div
                class="p-2 md:p-5 lg:p-5 2xl:p-6 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8 space-y-4">

                <!-- TOPIC NAME -->
                <div
                    class="group mb-2 bg-gray-100 dark:bg-gray-800 p-5 rounded-md border border-borderColor dark:border-borderColor-dark">
                    <label class="block font-semibold">Important Topic Name</label>
                    <input type="text" id="important_topic" name="important_topic"
                        value="<?= $important_topics->importantTopic ?? '' ?>" placeholder="Enter Important Topic name"
                        class="w-full mt-2 py-2 px-3 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md"
                        oninput="toggleKeyButton()">
                </div>

                <!-- REMOVE TOPIC + ALL KEYS -->
                <?php if (!empty($important_topics->id)): ?>
                    <button type="button" id="removeTopicAllBtn"
                        class="text-sm text-red-600 hover:text-primaryColor font-semibold mb-3">
                        Remove Topic + All Keys
                    </button>
                <?php endif; ?>

                <!-- KEYS LIST -->
                <div id="importantKeyList" class="space-y-4">

                    <?php if (!empty($important_topics->keys)): ?>
                        <?php foreach ($important_topics->keys as $key): ?>
                            <div
                                class="keyBox group mb-2 bg-gray-100 dark:bg-gray-800 p-5 rounded-md border border-borderColor dark:border-borderColor-dark">

                                <label class="block font-semibold">Important Key</label>

                                <input type="hidden" class="key-id" value="<?= $key->id ?>">
                                <input type="text" name="important_keys_existing[<?= $key->id ?>]"
                                    value="<?= $key->dimpDescription ?>"
                                    class="w-full mt-2 py-2 px-3 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">

                                <button type="button"
                                    class="removeKeyBtn text-red-600 text-sm font-semibold hover:text-primaryColor dark:hover:text-primaryColor mt-3 block">
                                    Remove Key
                                </button>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>

                </div>

                <!-- ADD KEY + SAVE -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full place-items-center mt-4">

                    <button type="button" id="addKeyBtn" onclick="addImportantKey()"
                        class="text-sm md:text-size-15 text-whiteColor bg-secondaryColor border border-secondaryColor px-10px py-10px hover:text-primaryColor hover:bg-whiteColor rounded dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor disabled:bg-gray-400 disabled:text-whiteColor disabled:cursor-not-allowed">
                        + Add Key
                    </button>

                    <button type="submit"
                        class="text-sm md:text-size-15 text-whiteColor bg-primaryColor border border-primaryColor px-10px py-10px hover:text-primaryColor hover:bg-whiteColor rounded dark:hover:bg-whiteColor-dark dark:hover:text-whiteColor">
                        Save
                    </button>

                </div>

            </div>
        </div>

    </form>

    <!-- SCRIPT -->
    <script>
        let deletedKeyIds = [];

        // Disable ADD KEY until topic is filled
        function toggleKeyButton() {
            const topic = document.getElementById("important_topic").value.trim();
            document.getElementById("addKeyBtn").disabled = topic === "";
        }
        toggleKeyButton();

        function addImportantKey() {
            const topic = document.getElementById("important_topic").value.trim();
            if (topic === "") {
                alert("Please enter Topic name first!");
                return;
            }

            const list = document.getElementById("importantKeyList");

            list.insertAdjacentHTML("beforeend", `
<div class="keyBox group mb-2 bg-gray-100 dark:bg-gray-800 p-5 rounded-md border border-borderColor dark:border-borderColor-dark">
    <label class="block font-semibold">Important Key</label>

    <input type="hidden" class="key-id" value="0">

    <input type="text" name="important_keys_new[]" placeholder="Enter key"
        class="w-full mt-2 py-2 px-3 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md">

    <button type="button"
        class="removeKeyBtn text-red-600 text-sm font-semibold hover:text-primaryColor dark:hover:text-primaryColor mt-3 block">
        Remove Key
    </button>
</div>
`);
        }

        // Remove Individual Key
        document.addEventListener('click', function (e) {
            if (e.target.classList.contains('removeKeyBtn')) {

                let keyBox = e.target.closest('.keyBox');
                let keyId = keyBox.querySelector('.key-id').value;

                if (keyId !== "0") {
                    deletedKeyIds.push(keyId);
                    document.getElementById("deleted_keys").value = JSON.stringify(deletedKeyIds);
                }

                keyBox.remove();
            }
        });

        // Remove Topic + All Keys
        document.getElementById('removeTopicAllBtn')?.addEventListener('click', function () {
            if (!confirm("Delete Topic + All Keys?")) return;

            deletedKeyIds = JSON.stringify(
                [...document.querySelectorAll(".key-id")].map(e => e.value)
            );
            document.getElementById("deleted_keys").value = deletedKeyIds;

            document.getElementById("important_topic").value = "";
            document.getElementById("topic_id").value = 0;
            document.getElementById("importantKeyList").innerHTML = "";

            toggleKeyButton();
        });
    </script>
</div>