<!-- Instructor Dashboard Header section instructor_header  -->
<?php
$this->load->view('dashboard/master_contents/dInstructor_master/instructor_header');
?>


<!-- main body -->
<main class="bg-transparent">
    <!-- Instructor Dashboard  section instructor_banner  -->
    <?php
    $this->load->view('dashboard/master_contents/dInstructor_master/instructor_banner');
    ?>


<section>
  <div class="container-fluid-2">
    <div
      class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-standard"
    >
      <!-- Heading -->
      <div
        class="mb-3 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark"
        data-aos="fade-up"
      >
        <h2
          class="text-2xl font-bold text-blackColor dark:text-blackColor-dark"
        >
          Create Quiz
        </h2>
      </div>

      <div
        class="tab-links flex flex-wrap mb-10px lg:mb-50px rounded gap-10px"
        data-aos="fade-up"
      >
        <button
          class="is-checked relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300 whitespace-nowrap active"
        >
          QUIZ DETAILS
        </button>
      </div>

      <!-- QUIZ INFO FORM -->
      <form
        id="quizForm"
        data-aos="fade-up"
        class="space-y-6 p-10px md:p-10 lg:p-5 2xl:p-10 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8"
      >
        <!-- Basic Info -->
        <div
          class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-3"
          data-aos="fade-up"
        >
          <div>
            <label class="block font-semibold mb-2">Select Course</label>
            <select
              id="courseSelect"
              class="w-full py-10px px-5 border-2 border-borderColor dark:border-borderColor-dark rounded-md bg-whiteColor dark:bg-whiteColor-dark"
            >
              <option value="">-- Select Course --</option>
              <option>Web Development</option>
              <option>Python Programming</option>
              <option>JavaScript Basics</option>
            </select>
          </div>
          <div>
            <label class="block font-semibold mb-2">Select Lesson</label>
            <select
              id="lessonSelect"
              class="w-full py-10px px-5 border-2 border-borderColor dark:border-borderColor-dark rounded-md bg-whiteColor dark:bg-whiteColor-dark"
            >
              <option value="">-- Select Lesson --</option>
              <option>Lesson 1</option>
              <option>Lesson 2</option>
              <option>Lesson 3</option>
            </select>
          </div>
        </div>

        <div class="mb-3" data-aos="fade-up">
          <label class="block font-semibold mb-2">Quiz Title</label>
          <input
            type="text"
            id="quizTitle"
            placeholder="Enter Quiz Title"
            class="w-full py-10px px-5 border-2 border-borderColor dark:border-borderColor-dark rounded-md bg-whiteColor dark:bg-whiteColor-dark"
            required
          />
        </div>

        <div class="" data-aos="fade-up">
          <label class="block font-semibold mb-2">Quiz Description</label>
          <textarea
            id="quizDesc"
            placeholder="Enter short description"
            class="w-full py-10px px-5 border-2 border-borderColor dark:border-borderColor-dark rounded-md bg-whiteColor dark:bg-whiteColor-dark"
          ></textarea>
        </div>

        <div
          class="grid grid-cols-1 md:grid-cols-3 gap-4"
          data-aos="fade-up"
        >
          <div>
            <label class="block font-semibold mb-2">Total Marks</label>
            <input
              type="number"
              id="totalMarks"
              placeholder="e.g. 50"
              class="w-full py-10px px-5 border-2 border-borderColor dark:border-borderColor-dark rounded-md bg-whiteColor dark:bg-whiteColor-dark"
            />
          </div>
          <div>
            <label class="block font-semibold mb-2">Time Limit (minutes)</label>
            <input
              type="number"
              id="timeLimit"
              placeholder="e.g. 30"
              class="w-full py-10px px-5 border-2 border-borderColor dark:border-borderColor-dark rounded-md bg-whiteColor dark:bg-whiteColor-dark"
            />
          </div>
          <div>
            <label class="block font-semibold mb-2">Difficulty</label>
            <select
              id="difficultyLevel"
              class="w-full py-10px px-5 border-2 border-borderColor dark:border-borderColor-dark rounded-md bg-whiteColor dark:bg-whiteColor-dark"
            >
              <option>Easy</option>
              <option>Medium</option>
              <option>Hard</option>
            </select>
          </div>
        </div>

        <!-- QUESTIONS AREA -->
        <div id="quizContainer" class="mt-15px"></div>

        <!-- Buttons Section -->
        <div
          class="flex flex-col md:flex-row items-center justify-between gap-4 mt-6"
          data-aos="fade-up"
        >
          <button
            type="button"
            id="addQuizBtn"
            class="w-full md:w-auto py-2 px-6 bg-secondaryColor text-whiteColor rounded hover:bg-primaryColor-dark font-semibold"
          >
            + Add Question
          </button>

          <button
            type="submit"
            class="w-full md:w-auto px-6 py-2 bg-primaryColor text-whiteColor rounded hover:bg-primaryColor-dark font-semibold"
          >
            Save Full Quiz
          </button>
        </div>
      </form>
    </div>
  </div>
</section>

<script>
  const quizContainer = document.getElementById("quizContainer");
  const addQuizBtn = document.getElementById("addQuizBtn");
  let quizCount = 0;

  function addQuizField() {
    quizCount++;
    const div = document.createElement("div");
    div.className =
      "quiz-item space-y-3 mb-4 border-b border-borderColor dark:border-borderColor-dark pb-4";
    div.innerHTML = `
        <label class="block font-semibold mb-2">Question ${quizCount}</label>
        <input type="text" placeholder="Enter Quiz Question"
          class="w-full py-10px px-5 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md question-input" required>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-3 options-container">
          ${[1, 2, 3, 4]
            .map(
              (i) => `
            <div class="flex items-center gap-2 w-full">
              <input type="radio" name="correctAnswer${quizCount}" value="${i}" required>
              <input type="text" placeholder="Option ${i}" 
                class="w-full py-10px px-5 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md option-input" required>
            </div>
          `
            )
            .join("")}
        </div>
        <div class="text-center">
          <button type="button" class="remove-quiz text-sm font-semibold text-primaryColor bg-whitegrey3 px-6 py-5px mb-5 rounded-standard inline-block">
            Remove Question
          </button>
        </div>
      `;
    quizContainer.appendChild(div);
  }

  addQuizField(); // Default 1 question
  addQuizBtn.addEventListener("click", addQuizField);

  quizContainer.addEventListener("click", (e) => {
    if (e.target.classList.contains("remove-quiz")) {
      e.target.closest(".quiz-item").remove();
      updateQuizNumbers();
    }
  });

  function updateQuizNumbers() {
    const allQuestions = document.querySelectorAll(".quiz-item");
    allQuestions.forEach((item, index) => {
      item.querySelector("label").textContent = `Question ${index + 1}`;
      const radios = item.querySelectorAll('input[type="radio"]');
      radios.forEach((r) =>
        r.setAttribute("name", `correctAnswer${index + 1}`)
      );
    });
    quizCount = allQuestions.length;
  }

  document
    .getElementById("quizForm")
    .addEventListener("submit", function (e) {
      e.preventDefault();

      const quizInfo = {
        course: document.getElementById("courseSelect").value,
        lesson: document.getElementById("lessonSelect").value,
        title: document.getElementById("quizTitle").value,
        description: document.getElementById("quizDesc").value,
        totalMarks: document.getElementById("totalMarks").value,
        timeLimit: document.getElementById("timeLimit").value,
        difficulty: document.getElementById("difficultyLevel").value,
      };

      const allQuestions = document.querySelectorAll(".quiz-item");
      const quizData = [];

      for (let i = 0; i < allQuestions.length; i++) {
        const qItem = allQuestions[i];
        const questionText = qItem.querySelector(".question-input").value;
        const options = Array.from(
          qItem.querySelectorAll(".option-input")
        ).map((opt) => opt.value);
        const correctRadio = qItem.querySelector(
          'input[type="radio"]:checked'
        );
        const correctAnswer = correctRadio
          ? parseInt(correctRadio.value)
          : null;

        if (!questionText || options.includes("") || correctAnswer === null) {
          alert(
            `Please fill all fields and select correct answer for Question ${
              i + 1
            }`
          );
          return;
        }

        quizData.push({
          question: questionText,
          options: options,
          correctAnswer: correctAnswer,
        });
      }

      const finalQuiz = { ...quizInfo, questions: quizData };
      console.log("Final Quiz Data:", finalQuiz);
      alert("✅ Quiz Created Successfully! Check console for JSON data.");
    });
</script>




































</main>



<!-- Instructor Dashboard Footer section instructor_footer  -->
<?php
$this->load->view('dashboard/master_contents/dInstructor_master/instructor_footer');
?>