const countDown = () => {
  // Set the target date for the countdown (change it to your desired end date)
  const coundownContainers = document.querySelectorAll("[data-countdown]");
  if (coundownContainers?.length) {
    let countdownInterval;
    coundownContainers.forEach((coundownContainer) => {
      const countDownFields = [...coundownContainer.children];

      const targetDateArray = coundownContainer
        .getAttribute("data-countdown")
        .split("/");

      const targetDate = new Date(
        `${targetDateArray[0]}-${targetDateArray[1]}-${targetDateArray[2]}T00:00:00`
      ).getTime();

      // Update the countdown every second
      countdownInterval = setInterval(
        () => updateCountdown(targetDate, countDownFields),
        1000
      );
    });

    function updateCountdown(targetDate, countDownFields) {
      // Get the current date and time
      const currentDate = new Date().getTime();

      // Calculate the remaining time
      const timeDifference = targetDate - currentDate;

      // Calculate days, hours, minutes, and seconds
      const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
      const hours = Math.floor(
        (timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
      );
      const minutes = Math.floor(
        (timeDifference % (1000 * 60 * 60)) / (1000 * 60)
      );
      const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

      // Display the countdown
      countDownFields.forEach((countDownField, ind) => {
        countDownField.querySelector(".count").innerHTML =
          ind === 0
            ? days > 9
              ? days
              : `0${days}`
            : ind === 1
            ? hours > 9
              ? hours
              : `0${hours}`
            : ind === 2
            ? minutes > 9
              ? minutes
              : `0${minutes}`
            : seconds > 9
            ? seconds
            : `0${seconds}`;
      });

      // If the countdown is finished, clear the interval
      if (timeDifference < 0) {
        clearInterval(countdownInterval);
        document.getElementById("countdown").innerHTML = "Countdown expired!";
      }
    }
  }
};


