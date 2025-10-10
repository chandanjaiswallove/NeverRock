document.addEventListener("DOMContentLoaded", function () {
// sticky header related funtionality
stickystickyHeader();

// dropdown functionalities
dropdownController();

// tab related funtioanlities
tabsController();

// mobile menu related funtionality
mobileMenu();

// accorfion related funtionality
accordions();

// project filter related funtionality
filter();

//hover effect parallex
VanillaTilt.init(document.querySelectorAll(".tilt"), {
  perspective: 2000,
});

// counter up
const counters = document.querySelectorAll(".counter");
counters.forEach((counter) => {
  new countUp(counter);
});
// quick view modal
modalProductDetails();

// video modal
videoModal();

// theme mode controller
theme();

//preloader
preloader();

// scroll up
scrollUp();

// swiper slider
slider();
// AOS Scroll Animation

AOS.init({
  offset:  0,
  duration: 1000,
  once: true,
  easing: "ease",
});

// images popup
popup();

// count down
countDown();

// charts
lineChart();
pieChart();

// click count
count();

// // smooth scroll
smoothScroll();


})



