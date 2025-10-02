const preloader = () => {
  const preloaderElemet = document.querySelector(".preloader");
  setTimeout(() => {
    preloaderElemet.style = "opacity:0; visibility:hidden;";
    setTimeout(() => {
      preloaderElemet.style.display = "none";
    }, 400);
  }, 1000);
};

