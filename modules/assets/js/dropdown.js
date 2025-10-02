// show deropdown
const showDropdown = (navItems, currentIndex) => {
  navItems.forEach((navItem, idx) => {
    const dropdown = navItem.querySelector(".dropdown");
    const dropdownClasses = dropdown?.classList;

    if (currentIndex === idx && dropdownClasses) {
      // dropdown.style.transition = ".3s";
      dropdown.style.display = "block";
      setTimeout(() => {
        dropdown.style.opacity = "1";
        dropdown.style.transform = "translate(0)";
      }, 150);
    }
  });
};

// hide dropdown
const hideDropdown = (navItems, currentIndex) => {
  navItems.forEach((navItem, idx) => {
    const dropdown = navItem.querySelector(".dropdown");
    const dropdownClasses = dropdown?.classList;

    if (currentIndex === idx && dropdownClasses) {
      // dropdown.style.transition = ".3s";
      dropdown.style.opacity = "0";
      dropdown.style.transform = "translateY(20px)";
      setTimeout(() => {
        dropdown.style.display = "none";
      }, 150);
    }
  });
};

// handle Mouse enter
const handleMouseEnter = (navItems) => {
  navItems.forEach((navItem, idx) => {
    navItem.addEventListener("mouseenter", () => showDropdown(navItems, idx));
  });
};
// handle Mouse out
const handleMouseOut = (navItems) => {
  navItems.forEach((navItem, idx) => {
    navItem.addEventListener("mouseleave", () => hideDropdown(navItems, idx));
  });
};
// dropdown controllser
const dropdownController = () => {
  const navLists = document.querySelectorAll(".nav-list");

  navLists.forEach((navList) => {
    const nodeListOfNavItems = navList.children;
    const navItems = [...nodeListOfNavItems];
    handleMouseEnter(navItems);
    handleMouseOut(navItems);
  });
};


