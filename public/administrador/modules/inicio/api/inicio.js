function ready() {

    var options = {
        series: [{
                name: 'Sales',
                data: [130, 210, 300, 290, 150, 50, 210, 280, 105],
            }, {
                name: 'Purchase',
                data: [-150, -90, -50, -180, -50, -70, -100, -90, -105]
            }],
        colors: ['#28C76F', '#EA5455'],
        chart: {
            type: 'bar',
            height: 320,
            stacked: true,
            zoom: {
                enabled: true
            }
        },
        responsive: [{
                breakpoint: 280,
                options: {
                    legend: {
                        position: 'bottom',
                        offsetY: 0
                    }
                }
            }],
        plotOptions: {
            bar: {
                horizontal: false,
                borderRadius: 4,
                borderRadiusApplication: "end",
                borderRadiusWhenStacked: "all",
                columnWidth: '20%',
            },
        },
        dataLabels: {
            enabled: false
        },
        yaxis: {
            min: -200,
            max: 300,
            tickAmount: 5,
        },
        xaxis: {
            categories: [' Jan ', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
        },
        legend: {
            show: false
        },
        fill: {
            opacity: 1
        }
    };
    var chart = new ApexCharts(document.querySelector("#sales_charts"), options);
    chart.render();
}