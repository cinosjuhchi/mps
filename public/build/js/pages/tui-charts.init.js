/*
Template Name: Skote - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Tui charts init Js File
*/

// get colors array from the string
function getChartColorsArray(chartId) {
    if (document.getElementById(chartId) !== null) {
        var colors = document.getElementById(chartId).getAttribute("data-colors");

        if (colors) {
            colors = JSON.parse(colors);
            return colors.map(function (value) {
                var newValue = value.replace(" ", "");
                if (newValue.indexOf(",") === -1) {
                    var color = getComputedStyle(document.documentElement).getPropertyValue(newValue);

                    if (color){
                        color = color.replace(" ", "");
                        return color;
                    }
                    else return newValue;;
                } else {
                    var val = value.split(',');
                    if (val.length == 2) {
                        var rgbaColor = getComputedStyle(document.documentElement).getPropertyValue(val[0]);
                        rgbaColor = "rgba(" + rgbaColor + "," + val[1] + ")";
                        return rgbaColor;
                    } else {
                        return newValue;
                    }
                }
            });
        }
    }
}
// SEKOLAH RENDAH
var columnChartColors = getChartColorsArray("sekolah-rendah-chart");
if (columnChartColors) {
    var columnChartWidth = $("#sekolah-rendah-chart").width();
    var container = document.getElementById('sekolah-rendah-chart');
    var data = {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Oct', 'Nov', 'Des'],
        series: [
            {
                name: 'Admin JK',
                data: [70, 100, 150, 200, 160, 120, 190, 70, 100, 150, 200, 160]
            },
            {
                name: 'Admin JP',
                data: [40, 130, 100, 150, 200, 180, 250, 90, 130, 200, 100, 80]
            },
            {
                name: 'Admin Sekolah',
                data: [100, 90, 130, 200, 100, 80, 190, 70, 100, 150, 200, 160]
            },
            {
                name: 'Pengguna',
                data: [70, 100, 150, 200, 160, 250, 90, 130, 200, 100, 80, 160]
            }
        ]
    };
    var options = {
        chart: {
            width: columnChartWidth,
            height: 380,
            format: '10'
        },
        yAxis: {
            title: 'Amount',
            min: 0,
            max: 500
        },
        xAxis: {
            title: 'Month'
        },
        legend: {
            align: 'top'
        }
    };
    var theme = {
        chart: {
            background: {
                color: '#fff',
                opacity: 0
            },
        },
        title: {
            color: '#8791af',
        },
        xAxis: {
            title: {
                color: '#8791af'
            },
            label: {
                color: '#8791af'
            },
            tickColor: '#8791af'
        },
        yAxis: {
            title: {
                color: '#8791af'
            },
            label: {
                color: '#8791af'
            },
            tickColor: '#8791af'
        },
        plot: {
            lineColor: 'rgba(166, 176, 207, 0.1)'
        },
        legend: {
            label: {
                color: '#8791af'
            }
        },
        series: {
            colors: columnChartColors
        }
    };

    // For apply theme

    tui.chart.registerTheme('myTheme', theme);
    options.theme = 'myTheme';

    var columnChart = tui.chart.columnChart(container, data, options);
}

$( window ).resize(function() {
    columnChartWidth = $("#sekolah-rendah-chart").width();
    columnChart.resize({
        width: columnChartWidth,
        height: 350
    });
});

// SEKOLAH MENENGAH
var columnChart2Colors = getChartColorsArray("sekolah-menengah-chart");
if (columnChart2Colors) {
    var columnChart2Width = $("#sekolah-menengah-chart").width();
    var container = document.getElementById('sekolah-menengah-chart');
    var data = {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Oct', 'Nov', 'Des'],
        series: [
            {
                name: 'Admin JK',
                data: [70, 100, 150, 200, 160, 120, 190, 70, 100, 150, 200, 160]
            },
            {
                name: 'Admin JP',
                data: [40, 130, 100, 150, 200, 180, 250, 90, 130, 200, 100, 80]
            },
            {
                name: 'Admin Sekolah',
                data: [100, 90, 130, 200, 100, 80, 190, 70, 100, 150, 200, 160]
            },
            {
                name: 'Pengguna',
                data: [70, 100, 150, 200, 160, 250, 90, 130, 200, 100, 80, 160]
            }
        ]
    };
    var options = {
        chart: {
            width: columnChart2Width,
            height: 380,
            format: '10'
        },
        yAxis: {
            title: 'Amount',
            min: 0,
            max: 500
        },
        xAxis: {
            title: 'Month'
        },
        legend: {
            align: 'top'
        }
    };
    var theme = {
        chart: {
            background: {
                color: '#fff',
                opacity: 0
            },
        },
        title: {
            color: '#8791af',
        },
        xAxis: {
            title: {
                color: '#8791af'
            },
            label: {
                color: '#8791af'
            },
            tickColor: '#8791af'
        },
        yAxis: {
            title: {
                color: '#8791af'
            },
            label: {
                color: '#8791af'
            },
            tickColor: '#8791af'
        },
        plot: {
            lineColor: 'rgba(166, 176, 207, 0.1)'
        },
        legend: {
            label: {
                color: '#8791af'
            }
        },
        series: {
            colors: columnChart2Colors
        }
    };

    // For apply theme

    tui.chart.registerTheme('myTheme', theme);
    options.theme = 'myTheme';

    var columnChart2 = tui.chart.columnChart(container, data, options);
}

$( window ).resize(function() {
    columnChart2Width = $("#sekolah-menengah-chart").width();
    columnChart2.resize({
        width: columnChart2Width,
        height: 350
    });
});

