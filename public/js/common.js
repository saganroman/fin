$(document).ready(function () {

//set datatables
    $('#dataTableLong').DataTable({    });

//set datepickers
    $('#datetimepicker').datetimepicker({
        /* locale: 'ua',*/
        ignoreReadonly: true,
        format: 'YYYY-MM-DD',
        locale: 'en',
        /* viewMode: 'years',*/
    });

    //date in users balance of period page
    $('#dateBegin').datetimepicker({
        format: 'YYYY-MM-DD',
       // locale: 'en',
        ignoreReadonly: true,
    });
    $('#dateEnd').datetimepicker({
        ignoreReadonly: true,
        format: 'YYYY-MM-DD',
       // locale: 'en',
        useCurrent: false //Important! See issue #1075
    });
    $("#dateBegin").on("dp.change", function (e) {
        $('#dateEnd').data("DateTimePicker").minDate(e.date);
    });
    $("#dateEnd").on("dp.change", function (e) {
        $('#dateBegin').data("DateTimePicker").maxDate(e.date);
    });


    var dataPoints = [];

    var chart = new CanvasJS.Chart("chartContainer", {
        zoomEnabled: true,
        animationEnabled: true,
        theme: "light1", // "light1", "light2", "dark1", "dark2"
        exportEnabled: true,
        title: {
            text: "Chart by Sagan"
        },
        subtitles: [{
            text: "detail"
        }],
        axisX: {
            interval: 1,
            gridThickness: 2, valueFormatString: "D-MM-Y",
           // valueFormatString: "m/dd/yy"
        },
        axisY: {
         /*   maximum: 1.38,interval: 0.05,
            minimum:1.25,*/
            minimum: 1,
            maximum: 1.6,
            viewportMinimum: 1,
            viewportMaximum: 1.6,
            //  valueFormatString: "0.0#",
            includeZero: false,
            prefix: "$",
            title: "Price"
        },
        toolTip: {
            content: "Date: {x}<br /><strong>EUR/USD:</strong><br />Open: {y[0]}, Close: {y[3]}<br />High: {y[1]}, Low: {y[2]}<br/> Volume: {y[4]} "
        },
        data: [{
            type: "candlestick",
          //  yValueFormatString: "$##0.00",
            dataPoints: dataPoints
        }]
    });

   // $.get("https://canvasjs.com/data/gallery/javascript/netflix-stock-price.csv", getDataPointsFromCSV);

    function getDataPointsFromCSV(a) {
        var  points = [];
        for(item in a) {
            dataPoints.push({
                x: new Date( a[item]['Date'] ),
                y: [
                    parseFloat(a[item]['Open']),
                    parseFloat(a[item]['High']),
                    parseFloat(a[item]['Low']),
                    parseFloat(a[item]['Close']),
                    parseFloat(a[item]['Volume']),]

            }); }
        console.log(dataPoints);
        chart.render();

    }

    getDataPointsFromCSV(a);


});