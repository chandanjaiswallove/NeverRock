const popup = () => {

    const gallaryContainers = document.querySelectorAll(".gallary-container");

    gallaryContainers.forEach(function (gallaryContainer) {
      const imageWrappers = gallaryContainer.querySelectorAll(".image-wrapper");
      const images = gallaryContainer.querySelectorAll(".gallery-image");
      const popup = gallaryContainer.querySelector(".popup");
      const sliderContainer = gallaryContainer.querySelector(
        ".slider-container-wrapper"
      );
      const closeBtn = gallaryContainer.querySelector(".close-btn");
      const prevBtn = gallaryContainer.querySelector(".prev-btn");
      const nextBtn = gallaryContainer.querySelector(".next-btn");
      let currentIndex = 0;

      imageWrappers.forEach(function (imageWrapper, index) {
        const modalOpen = imageWrapper.querySelector(".popup-open");
        modalOpen.addEventListener("click", function () {
          currentIndex = index;
          showImage(index);
          popup.style.display = "block";
        });
      });

      function showImage(index) {
        const imgSrc = images[index].getAttribute("src");
        const imgAlt = images[index].getAttribute("alt");
        const imgElement = `<img src="${imgSrc}" alt="${imgAlt}" class="slider-image">`;
        const slideCounter = `<span class="slide-counter">${index + 1} of ${
          images.length
        }</span>`;
        sliderContainer.innerHTML = imgElement + slideCounter;
      }

      closeBtn.addEventListener("click", function () {
        popup.style.display = "none";
      });

      popup.addEventListener("click", function (event) {
        if (event.target === this) {
          popup.style.display = "none";
        }
      });

      prevBtn.addEventListener("click", function () {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        showImage(currentIndex);
      });

      nextBtn.addEventListener("click", function () {
        currentIndex = (currentIndex + 1) % images.length;
        showImage(currentIndex);
      });
    });
 
};

