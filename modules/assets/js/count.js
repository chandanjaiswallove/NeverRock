const count = () => {
  const countContainers = document.querySelectorAll(".count-container");
  if (!count) {
    return;
  }

  countContainers.forEach((countContainer) => {
    const countIput = countContainer.querySelector("input");
    const minCount = countContainer.querySelector(".mincount");
    const maxCount = countContainer.querySelector(".maxcount");

    minCount.addEventListener("click", () => {
      let currentValue = parseInt(countIput.value);
      if (currentValue === 0 || currentValue < 0) {
        if (currentValue === 0) {
          currentValue = 1;
        } else {
          currentValue = 0;
        }
      } else {
        currentValue--;
      }
      countIput.value = currentValue;
    });
    maxCount.addEventListener("click", () => {
      let currentValue = parseInt(countIput.value);
      currentValue++;
      countIput.value = currentValue;
    });
  });
};

