const scrollUp = () => {
  const scrollUpElement = document.querySelector(".scroll-up");
  if (scrollUpElement) {
    scrollUpElement.addEventListener("click", () => {
      window.scroll({ top: 0, left: 0, behavior: "smooth" });
    });

    window.addEventListener("scroll", () => {
      const scrollCount = window.scrollY;

      if (scrollCount < 300) {
        scrollUpElement.style.display = "none";
      }
      if (scrollCount > 300) {
        scrollUpElement.style.display = "block";
      }
    });
  }
};

