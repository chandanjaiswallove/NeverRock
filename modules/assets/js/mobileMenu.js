// open mobileMenu
const handleOpen = (mobileMenu, closeMobileMenu) => {
  const openMobileMenu = document.querySelector(".open-mobile-menu");

  openMobileMenu.addEventListener("click", () => {
    closeMobileMenu.style.display = "block";
    mobileMenu.style.right = "0";
  });
};
// close mobileMenu
const handleClose = (mobileMenu, closeMobileMenu) => {
  closeMobileMenu.addEventListener("click", () => {
    const currentScreenSize = innerWidth;
    mobileMenu.style = "right:-280px;";
    mobileMenu.style = "@media screen and (min-width:768px){right:-330px;}";

    setTimeout(() => {
      closeMobileMenu.style.display = "none";
    }, 1000);
  });
};
// controll mobile menu
const mobileMenu = () => {
  const mobileMenu = document.querySelector(".mobile-menu");
  const closeMobileMenu = document.querySelector(".close-mobile-menu");
  if (mobileMenu) {
    handleOpen(mobileMenu, closeMobileMenu);
    handleClose(mobileMenu, closeMobileMenu);
  }
};


