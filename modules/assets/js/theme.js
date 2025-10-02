const theme = () => {
  const html = document.querySelector("html");
  const currentMode = localStorage.getItem("theme");

  if (currentMode === "dark") {
    html.classList.add("dark");
  } else if (currentMode === "light") {
    html.classList.remove("dark");
  }

  const themeController = document.querySelector(".theme-controller");
  themeController.addEventListener("click", function () {
    html.classList.toggle("dark");
    const currentMode = html.classList.contains("dark");

    if (currentMode) {
      localStorage.setItem("theme", "dark");
    } else {
      localStorage.setItem("theme", "light");
    }
  });
};

