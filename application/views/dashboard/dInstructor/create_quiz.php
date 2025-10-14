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
    <div class="p-10px md:px-10 md:py-50px mb-30px bg-whiteColor dark:bg-whiteColor-dark shadow-accordion dark:shadow-accordion-dark rounded-standard">

      <!-- Heading -->
      <div class="mb-3 pb-5 border-b-2 border-borderColor dark:border-borderColor-dark" data-aos="fade-up">
        <h2 class="text-2xl font-bold text-blackColor dark:text-blackColor-dark">
          Create Quiz
        </h2>
      </div>

      <!-- ADD QUIZ BUTTON -->
      <div class="mb-6" data-aos="fade-up">
        <button id="addQuizBtn" type="button"
          class="is-checked relative py-10px px-5 md:py-15px lg:px-10 font-bold uppercase text-sm lg:text-base text-blackColor bg-whiteColor shadow-overview-button dark:bg-whiteColor-dark dark:text-blackColor-dark before:w-0 before:h-0.5 before:absolute before:-bottom-0.5 lg:before:bottom-0 before:left-0 before:bg-primaryColor hover:before:w-full before:transition-all before:duration-300 whitespace-nowrap before:w-full active">
          + Add Quiz
        </button>
      </div>

      <!-- QUIZ FORM -->
      <form id="quizForm" class="space-y-6 p-10px md:p-10 lg:p-5 2xl:p-10 bg-darkdeep3 dark:bg-transparent text-sm text-blackColor dark:text-blackColor-dark leading-1.8">

        <div id="quizContainer">
          <!-- First question will be injected here by JS -->
        </div>

        <div class="mt-15px">
          <button type="submit"
            class="w-full px-6 py-3 bg-primaryColor text-whiteColor rounded hover:bg-primaryColor-dark font-semibold">
            Save Quiz
          </button>
        </div>

      </form>

    </div>
  </div>
</section>

<script>
  const quizContainer = document.getElementById('quizContainer');
  const addQuizBtn = document.getElementById('addQuizBtn');
  let quizCount = 0;

  function createQuizItem() {
    quizCount++;
    const div = document.createElement('div');
    div.className = 'quiz-item space-y-3 border-b border-borderColor dark:border-borderColor-dark pb-4 mb-4';
    div.innerHTML = `
      <label class="block font-semibold mb-2">Question ${quizCount}</label>
      <input type="text" placeholder="Enter Question" class="w-full py-10px px-5 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md" required>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-30px mb-3">
        <input type="text" placeholder="Option 1" class="py-10px px-5 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md" required>
        <input type="text" placeholder="Option 2" class="py-10px px-5 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md" required>
        <input type="text" placeholder="Option 3" class="py-10px px-5 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md" required>
        <input type="text" placeholder="Option 4" class="py-10px px-5 text-sm bg-whiteColor dark:bg-whiteColor-dark border-2 border-borderColor dark:border-borderColor-dark rounded-md" required>
      </div>
      <button type="button" class="remove-quiz w-full  mt-15px px-5 py-2 bg-secondaryColor text-whiteColor rounded hover:bg-primaryColor-dark">Remove Question</button>
    `;
    quizContainer.appendChild(div);
  }

  // Add first question on page load
  createQuizItem();

  // Add new quiz question
  addQuizBtn.addEventListener('click', () => {
    createQuizItem();
  });

  // Remove question using event delegation
  quizContainer.addEventListener('click', (e) => {
    if (e.target.classList.contains('remove-quiz')) {
      e.target.closest('.quiz-item').remove();
      updateQuizNumbers();
    }
  });

  // Update question numbers after removal
  function updateQuizNumbers() {
    const allQuestions = document.querySelectorAll('.quiz-item');
    allQuestions.forEach((item, index) => {
      item.querySelector('label').textContent = `Question ${index + 1}`;
    });
    quizCount = allQuestions.length;
  }
</script>













































</main>



<!-- Instructor Dashboard Footer section instructor_footer  -->
<?php
$this->load->view('dashboard/master_contents/dInstructor_master/instructor_footer');
?>