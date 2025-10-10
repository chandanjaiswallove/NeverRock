const slider = () => {
  const swiperElement = document.querySelector(".swiper");
  if (swiperElement) {
    // swiper slider
    var swiper = new Swiper(".ecommerce-slider", {
      slidesPerView: 1,
      grabCursor: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    const productDetailsSliders = document.querySelectorAll(".product-details");
    const productDetailsSliderThumbs = document.querySelectorAll(
      ".product-details-thumb"
    );
    if (productDetailsSliders.length) {
      productDetailsSliders.forEach((productDetailsSlider, idx) => {
        // add class
        productDetailsSlider.classList.add(`product-details-${idx}`);
        productDetailsSliderThumbs[idx].classList.add(
          `product-details-thumb-${idx}`
        );

        //product details
        var swiper = new Swiper(`.product-details-thumb-${idx}`, {
          spaceBetween: 10,
          slidesPerView: 5,
          freeMode: true,
          watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(`.product-details-${idx}`, {
          spaceBetween: 10,
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          thumbs: {
            swiper: swiper,
          },
        });
      });
    }

    var swiper = new Swiper(".university__slider__thumb", {
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
    });

    // ✅ updated hero slider (ecommerce-slider2)
    var swiper2 = new Swiper(".ecommerce-slider2", {
      slidesPerView: 1,
      grabCursor: true,
      loop: true, // infinite loop
      autoplay: {
        delay: 3000, // 3 seconds
        disableOnInteraction: false, // user swipe kare to bhi autoplay chalega
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      thumbs: {
        swiper: swiper,
      },
    });

    var swiper = new Swiper(".card-slider", {
      effect: "cards",
      grabCursor: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });

    // swiper slider
    var swiper = new Swiper(".featured-courses", {
      slidesPerView: 1,
      grabCursor: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        768: {
          slidesPerView: 2,
        },
        992: {
          slidesPerView: 3,
        },
        1500: {
          slidesPerView: 4,
        },
      },
    });

    // swiper slider
    var swiper = new Swiper(".other-courses", {
      slidesPerView: 1,
      spaceBetween: 30,
      grabCursor: true,
      loop: true,
      breakpoints: {
        500: {
          slidesPerView: 2,
        },
        576: {
          slidesPerView: 2,
          spaceBetween: 0,
        },
      },
    });

    // swiper slider
    var swiper = new Swiper(".featured-courses1", {
      slidesPerView: 1,
      grabCursor: true,
      loop: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        768: {
          slidesPerView: 2,
        },
        992: {
          slidesPerView: 3,
        },
      },
    });

    // swiper slider
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      loop: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        768: {
          slidesPerView: 2,
        },
      },
    });

    // swiper slider
    var swiper = new Swiper(".testimonial-2", {
      slidesPerView: 1,
      loop: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  }
};
