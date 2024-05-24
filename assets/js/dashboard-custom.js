$(document).ready(function () {
  progress_bar();
});

function progress_bar() {
  var speed = 30;
  var items = $(".progress_bar").find(".progress_bar_item");

  items.each(function () {
    var item = $(this).find(".progress");
    var itemValue = item.data("progress");
    var i = 0;
    var value = $(this);

    var count = setInterval(function () {
      if (i <= itemValue) {
        var iStr = i.toString();
        item.css({
          width: iStr + "%",
        });
        value.find(".item_value").html("$" + iStr + "k");
      } else {
        clearInterval(count);
      }
      i++;
    }, speed);
  });
}
// progress-bar

window.onload = function () {
  var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    exportEnabled: false,
    dataPointWidth: 15,
    backgroundColor: "transparent",
    toolTip: {
      cornerRadius: 5,
      backgroundColor: "rgba(0, 0, 0, 0.8)",
      fontColor: "#fff",
      borderThickness: 0,
    },
    animationEnabled: true,
    backgroundColor: "transparent",
    //dataPointWidth: 15,
    theme: "light1",
    axisY: {
      includeZero: true,
      lineColor: "rgba(0, 0, 0, 0)",
      labelFontColor: "rgba(0, 0, 0, 0.40)",
      minimum: 0,
      maximum: 30,
      interval: 10,
      gridColor: "rgba(0, 0, 0, 0.03)",
      tickLength: 0,
    },
    axisX: {
      lineColor: "rgba(0, 0, 0, 0.02)",
      labelFontColor: "rgba(0, 0, 0, 0.40)",
      tickLength: 0,
    },
    data: [
      {
        type: "column",
        // color: "rgba(1, 119, 251, 0.5)",
        lineColor: "rgba(0, 0, 0, 0.05)",
        color: "#0177FB",
        indexLabelPlacement: "outside",
        toolTipContent: "{label}: {y}",
        dataPoints: [
          { label: "L1", y: 10 },
          { label: "L2", y: 8 },
          { label: "L3", y: 18 },
          { label: "L4", y: 20 },
          { label: "L5", y: 12 },
          { label: "L6", y: 16 },
        ],
      },
    ],
  });
  chart.render();
  // Capacity vs Occupancy end

  // Create and render the second chart
  var chart1 = new CanvasJS.Chart("RevenueProperty", {
    toolTip: {
      cornerRadius: 5,
      backgroundColor: "rgba(0, 0, 0, 0.8)",
      fontColor: "#fff",
      borderThickness: 0,
      contentFormatter: function (e) {
        var content = "";
        content += "<div style='text-align: center;'>";
        //content += "<strong>" + e.entries[0].dataPoint.label + "</strong><br/>";
        content += e.entries[0].dataPoint.y + "K";
        content += "</div>";
        return content;
      },
    },
    animationEnabled: true,
    backgroundColor: "transparent",
    data: [
      {
        type: "doughnut",
        indexLabelLineLength: 10,
        indexLabelLineThickness: 5,
        dataPoints: [
          { x: 10, y: 71, color: "#BAEDBD" },
          { x: 20, y: 20, color: "#95A4FC" },
          { x: 30, y: 40, color: "#C6C7F8" },
          { x: 40, y: 85, color: "#1C1C1C" },
        ],
      },
    ],
  });
  chart1.render();
  // total sale end

  // Create and render the second chart
  var chart2 = new CanvasJS.Chart("chartSale", {
    toolTip: {
      cornerRadius: 5,
      backgroundColor: "rgba(0, 0, 0, 0.8)",
      fontColor: "#fff",
      borderThickness: 0,
      contentFormatter: function (e) {
        var content = "";
        content += "<div style='text-align: center;'>";
        //content += "<strong>" + e.entries[0].dataPoint.label + "</strong><br/>";
        content += e.entries[0].dataPoint.y + "K";
        content += "</div>";
        return content;
      },
    },
    animationEnabled: true,
    backgroundColor: "transparent",
    data: [
      {
        type: "doughnut",
        indexLabelLineLength: 10,
        indexLabelLineThickness: 5,
        dataPoints: [
          { x: 10, y: 71, color: "#BAEDBD" },
          { x: 20, y: 20, color: "#95A4FC" },
          { x: 30, y: 40, color: "#C6C7F8" },
          { x: 40, y: 85, color: "#1C1C1C" },
        ],
      },
    ],
  });
  chart2.render();
  // total sale end

  var chart3 = new CanvasJS.Chart("ChartTotalUtstanding", {
    toolTip: {
      cornerRadius: 5,
      backgroundColor: "rgba(0, 0, 0, 0.8)",
      fontColor: "#fff",
      borderThickness: 0,
      contentFormatter: function (e) {
        var content = "";
        content += "<div style='text-align: center;'>";
        //content += "<strong>" + e.entries[0].dataPoint.label + "</strong><br/>";
        content += e.entries[0].dataPoint.y + "K";
        content += "</div>";
        return content;
      },
    },
    animationEnabled: true,
    backgroundColor: "transparent",
    data: [
      {
        type: "doughnut",
        indexLabelLineLength: 10,
        indexLabelLineThickness: 5,
        dataPoints: [
          { x: 10, y: 71, color: "#60B7FF" },
          { x: 20, y: 80, color: "#FF0000" },
          { x: 30, y: 40, color: "#BAEDBD" },
          { x: 40, y: 60, color: "#0177FB" },
          { x: 40, y: 20, color: "#95A4FC" },
        ],
      },
    ],
  });
  chart3.render();
  // totalutstanding end

  var chart4 = new CanvasJS.Chart("RevenueMonthby", {
    animationEnabled: true,
    backgroundColor: "transparent",
    axisX: {
      interval: 1, // Display every month
      intervalType: "month",
      valueFormatString: "MMM", // Display month abbreviation
      labelFontColor: "rgba(0, 0, 0, 0.40)",
      tickLength: 0,
      lineColor: "rgba(0, 0, 0, 0.03)",
    },
    axisY: {
      labelFontColor: "rgba(0, 0, 0, 0.40)",
      lineThickness: 0,
      valueFormatString: "#", // Remove formatting
      gridColor: "rgba(0, 0, 0, 0.03)",
      tickLength: 0,
      tickValues: [0, 1, 5, 10, 15], // Specify the tick values
      minimum: 0,
      maximum: 15,
      labelFormatter: function (e) {
        if (e.value === 0) {
          return 0;
        } else {
          return CanvasJS.formatNumber(e.value, "#,##0.##M");
        }
      },
    },
    toolTip: {
      cornerRadius: 5,
      backgroundColor: "rgba(0, 0, 0, 0.8)",
      borderThickness: 0, // Remove the border
      contentFormatter: function (e) {
        var content =
          "<span style='color: white'><strong>" +
          CanvasJS.formatDate(e.entries[0].dataPoint.x, "YYYY MMM") +
          "</strong></span><br/>";
        for (var i = 0; i < e.entries.length; i++) {
          content +=
            "<span style='color: white'>" +
            e.entries[i].dataSeries.name +
            ": </span><strong style='color: white'>" +
            e.entries[i].dataPoint.y +
            "</strong><br/>";
        }
        return content;
      },
    },
    legend: {
      cursor: "pointer",
      verticalAlign: "top",
      horizontalAlign: "center",
      dockInsidePlotArea: false,
    },
    data: [
      {
        type: "line",
        showInLegend: false,
        markerSize: 0,
      },
      {
        type: "line",
        showInLegend: false,
        markerSize: 0,
        markerColor: "#1C1C1C",
        dataPoints: [
          { x: new Date(2014, 0, 1), y: 1 },
          { x: new Date(2014, 1, 1), y: 2 },
          { x: new Date(2014, 2, 1), y: 6 },
          { x: new Date(2014, 3, 1), y: 6 },
          { x: new Date(2014, 4, 1), y: 6 },
          { x: new Date(2014, 5, 1), y: 6 },
          { x: new Date(2014, 6, 1), y: 5 },
          { x: new Date(2014, 7, 1), y: 5 },
          { x: new Date(2014, 8, 1), y: 7 },
          { x: new Date(2014, 9, 1), y: 7 },
          { x: new Date(2014, 10, 1), y: 7 },
          { x: new Date(2014, 11, 1), y: 7 },
        ],
        lineColor: "#1C1C1C",
      },
      {
        type: "line",
        showInLegend: false,
        markerSize: 0,
        markerColor: "#A8C5DA",
        dataPoints: [
          { x: new Date(2014, 0, 1), y: 2 },
          { x: new Date(2014, 1, 1), y: 4 },
          { x: new Date(2014, 2, 1), y: 5 },
          { x: new Date(2014, 3, 1), y: 5 },
          { x: new Date(2014, 4, 1), y: 7 },
          { x: new Date(2014, 5, 1), y: 7 },
          { x: new Date(2014, 6, 1), y: 7 },
          { x: new Date(2014, 7, 1), y: 8 },
          { x: new Date(2014, 8, 1), y: 8 },
          { x: new Date(2014, 9, 1), y: 8 },
          { x: new Date(2014, 10, 1), y: 8 },
          { x: new Date(2014, 11, 1), y: 8 },
        ],
        lineColor: "#A8C5DA",
      },
    ],
  });
  chart4.render();

  var chart5 = new CanvasJS.Chart("RevenueCatagory", {
    toolTip: {
      cornerRadius: 5,
      backgroundColor: "rgba(0, 0, 0, 0.8)",
      fontColor: "#fff",
      borderThickness: 0,
    },
    animationEnabled: true,
    backgroundColor: "transparent",
    theme: "light1",
    dataPointWidth: 15,
    axisY: {
      includeZero: true,
      lineColor: "rgba(0, 0, 0, 0)",
      labelFontColor: "rgba(0, 0, 0, 0.40)",
      //suffix: "K",
      labelFormatter: function (e) {
        if (e.value === 0) {
          return 0;
        } else {
          return CanvasJS.formatNumber(e.value, "#,##0.##K");
        }
      },
      gridColor: "rgba(0, 0, 0, 0.03)",
      tickLength: 0,
    },
    axisX: {
      lineColor: "rgba(0, 0, 0, 0.03)",
      labelFontColor: "rgba(0, 0, 0, 0.40)",
      tickLength: 0,
    },

    data: [
      {
        type: "column",
        lineColor: "rgba(0, 0, 0, 0.05)",
        indexLabelPlacement: "outside",
        toolTipContent: "{label}: {y}",

        dataPoints: [
          { label: "Offices", y: 200, color: "#BAEDBD" },
          { label: "Apartments", y: 300, color: "#C6C7F8" },
          { label: "Showrooms", y: 600, color: "#1C1C1C" },
          { label: "Restaurants", y: 900, color: "#B1E3FF" },
          { label: "Shops", y: 1200, color: "#95A4FC" },
          { label: "Other", y: 440, color: "#BAEDBD" },
        ],
      },
    ],
  });
  chart5.render();
  // Call the function after the chart has been rendered
  chart5.rendered = function (e) {
    addRoundedCorners(chart5);
  };

  var chart6 = new CanvasJS.Chart("RevenueYears", {
    animationEnabled: true,
    backgroundColor: "transparent",
    axisX: {
      interval: 1, // Display every month
      intervalType: "month",
      valueFormatString: "MMM", // Display month abbreviation
      labelFontColor: "rgba(0, 0, 0, 0.40)",
      tickLength: 0,
      lineColor: "rgba(0, 0, 0, 0.03)",
    },
    axisY: {
      labelFontColor: "rgba(0, 0, 0, 0.40)",
      lineThickness: 0,
      gridColor: "rgba(0, 0, 0, 0.03)",
      tickLength: 0,
      tickValues: [0, 10, 20, 30], // Specify the tick values
      labelFormatter: function (e) {
        if (e.value === 0) {
          return 0;
        } else {
          return CanvasJS.formatNumber(e.value, "#,##0.##M");
        }
      },
    },

    legend: {
      cursor: "pointer",
      verticalAlign: "top",
      horizontalAlign: "center",
      dockInsidePlotArea: false,
      itemclick: toggleDataSeries,
    },

    toolTip: {
      cornerRadius: 5,
      borderThickness: 0,
      backgroundColor: "rgba(0, 0, 0, 0.8)",
      contentFormatter: function (e) {
        var content =
          "<span style='color: white'><strong>" +
          CanvasJS.formatDate(e.entries[0].dataPoint.x, "YYYY MMM") +
          "</strong></span><br/>";
        for (var i = 0; i < e.entries.length; i++) {
          content +=
            "<span style='color: white'>" +
            e.entries[i].dataSeries.name +
            ": </span><strong style='color: white'>" +
            e.entries[i].dataPoint.y +
            "</strong><br/>";
        }
        return content;
      },
    },

    data: [
      {
        type: "line",
        showInLegend: false,
        markerSize: 10,
      },
      {
        type: "line",
        showInLegend: true,
        markerSize: 0,
        name: "This Year",
        markerColor: "#F00",
        dataPoints: [
          { x: new Date(2014, 0, 1), y: 7 },
          { x: new Date(2014, 1, 1), y: 10 },
          { x: new Date(2014, 2, 1), y: 15 },
          { x: new Date(2014, 3, 1), y: 9 },
          { x: new Date(2014, 4, 1), y: 10 },
          { x: new Date(2014, 5, 1), y: 12 },
          { x: new Date(2014, 6, 1), y: 5 },
        ],
        lineColor: "#F00",
      },
      {
        type: "line",
        showInLegend: true,
        name: "Last Year",
        markerSize: 0,
        markerColor: "#B1E3FF",
        dataPoints: [
          { x: new Date(2014, 0, 1), y: 5 },
          { x: new Date(2014, 1, 1), y: 12 },
          { x: new Date(2014, 2, 1), y: 8 },
          { x: new Date(2014, 3, 1), y: 5 },
          { x: new Date(2014, 4, 1), y: 10 },
          { x: new Date(2014, 5, 1), y: 8 },
          { x: new Date(2014, 6, 1), y: 10 },
        ],
        lineColor: "#B1E3FF",
      },
    ],
  });
  chart6.render();

  function toggleDataSeries(e) {
    if (typeof e.dataSeries.visible === "undefined" || e.dataSeries.visible) {
      e.dataSeries.visible = false;
    } else {
      e.dataSeries.visible = true;
    }
    chart6.render();
  }
};
