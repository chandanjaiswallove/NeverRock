const modalProductDetails = () => {
  const modalContainers = document.querySelectorAll(".modal-container");

  if (!modalContainers.length) {
    return;
  }
  console.log(modalContainers.length)
  modalContainers.forEach((modalContainer) => {
    const body = document.body;
    const bodyStyle = body.style;
    const modalOpens = modalContainer.querySelectorAll(".modal-open");
    const modalCloses = modalContainer.querySelectorAll(".modal-close");
    const modal = modalContainer.querySelector(".modal");
    const modalContent = modalContainer.querySelector(".modal-content");

    modalOpens.forEach((modalOpen) => {
      modalOpen.addEventListener("click", () => {
        modal.style.display = "block";
        bodyStyle.overflow = "hidden";
        bodyStyle.paddingRight = "17px";

        setTimeout(() => {
          window.scroll({ top: window.scrollY - 100, behavior: "smooth" });
          modal.style.opacity = 100;
          modal.style.visibility = "visible";
          modal.scrollTop = 0;
          modalContent.style.transform = "translateY(0px)";
        }, 10);
      });
    });

    modalCloses.forEach((modalClose) => {
      modalClose.addEventListener("click", function () {
        modal.style.opacity = 0;
        modal.style.visibility = "hidden";
        modalContent.style.transform = `translateY(-${80}px)`;

        setTimeout(() => {
          modal.style.display = "none";
          bodyStyle.overflow = "auto";
          bodyStyle.paddingRight = 0;
        }, 500);
      });
    });
  });
}

