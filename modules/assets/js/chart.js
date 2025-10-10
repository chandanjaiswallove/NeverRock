//line chart
 function lineChart() {
  const ctx = document.getElementById("lineChart");
  if (!ctx) return;

  const myChart = new Chart(ctx, {
    type: "line",
    data: {
      labels: [
        "Jan",
        "Feb",
        "Marc",
        "April",
        "May",
        "Jun",
        "July",
        "Agust",
        "Sept",
        "Oct",
        "Now",
        "Dec",
      ],
      datasets: [
        {
          label: "#",
          data: [148, 100, 205, 110, 165, 145, 180, 156, 148, 220, 180, 245],
          tension: 0.4,
          backgroundColor: "#5F2DED",
          borderColor: "#5F2DED",
          borderWidth: 2,
        },
      ],
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          display: false,
        },
      },
      scales: {
        y: {
          min: 0,
          max: 300,
          ticks: {
            stepSize: 50,
          },
        },
      },
    },
  });
}

//Pie Chart
 function pieChart() {
  const ctx = document.getElementById("pieChart");
  if (!ctx) return;

  const myChart = new Chart(ctx, {
    type: "pie",
    data: {
      labels: ["Direct", "Referal", "Organic"],
      datasets: [
        {
          label: "#",
          data: [40, 28, 32],
        },
      ],
    },
    options: {
      cutout: "75%",
      plugins: {
        legend: {
          position: "left",
        },
      },
      elements: {
        arc: {
          backgroundColor: "#5F2DED",
          hoverBackgroundColor: "#5F2DED",
        },
      },
    },
  });

  const getOrCreateLegendList = (chart, id) => {
    const legendContainer = document.getElementById(id);
    let listContainer = legendContainer.querySelector("ul");

    if (!listContainer) {
      listContainer = document.createElement("ul");
      listContainer.style.display = "flex";
      listContainer.style.flexDirection = "row";
      listContainer.style.margin = 0;
      listContainer.style.padding = 0;

      legendContainer.appendChild(listContainer);
    }

    return listContainer;
  };

  const htmlLegendPlugin = {
    id: "htmlLegend",
    afterUpdate(chart, args, options) {
      const ul = getOrCreateLegendList(chart, options.containerID);

      // Remove old legend items
      while (ul.firstChild) {
        ul.firstChild.remove();
      }

      // Reuse the built-in legendItems generator
      const items = chart.options.plugins.legend.labels.generateLabels(chart);

      items.forEach((item) => {
        const li = document.createElement("li");
        li.style.alignItems = "center";
        li.style.cursor = "pointer";
        li.style.display = "flex";
        li.style.flexDirection = "row";
        li.style.marginLeft = "10px";

        li.onclick = () => {
          const { type } = chart.config;
          if (type === "pie" || type === "doughnut") {
            // Pie and doughnut charts only have a single dataset and visibility is per item
            chart.toggleDataVisibility(item.index);
          } else {
            chart.setDatasetVisibility(
              item.datasetIndex,
              !chart.isDatasetVisible(item.datasetIndex)
            );
          }
          chart.update();
        };

        // Color box
        const boxSpan = document.createElement("span");
        boxSpan.style.background = item.fillStyle;
        boxSpan.style.borderColor = item.strokeStyle;
        boxSpan.style.borderWidth = item.lineWidth + "px";
        boxSpan.style.display = "inline-block";
        boxSpan.style.height = "20px";
        boxSpan.style.marginRight = "10px";
        boxSpan.style.width = "20px";

        // Text
        const textContainer = document.createElement("p");
        textContainer.style.color = item.fontColor;
        textContainer.style.margin = 0;
        textContainer.style.padding = 0;
        textContainer.style.textDecoration = item.hidden ? "line-through" : "";

        const text = document.createTextNode(item.text);
        textContainer.appendChild(text);

        li.appendChild(boxSpan);
        li.appendChild(textContainer);
        ul.appendChild(li);
      });
    },
  };
}
