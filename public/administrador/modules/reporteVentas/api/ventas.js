function ready() {
    if ($('#sales-analysis').length > 0) {
        var options = {
            series: [{
                    name: "Sales Analysis",
                    data: [25, 30, 18, 15, 22, 20, 30, 20, 22, 18, 15, 20]
                }],
            chart: {
                height: 273,
                type: 'area',
                zoom: {
                    enabled: false
                }
            },
            colors: ['#FF9F43'],
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'straight'
            },
            title: {
                text: '',
                align: 'left'
            },
            // grid: {
            //   row: {
            //     colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            //     opacity: 0.5
            //   },
            // },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
            },
            yaxis: {
                min: 10,
                max: 60,
                tickAmount: 5,
                labels: {
                    formatter: (val) => {
                        return val / 1 + 'K'
                    }
                }
            },
            legend: {
                position: 'top',
                horizontalAlign: 'left'
            }
        };

        var chart = new ApexCharts(document.querySelector("#sales-analysis"), options);
        chart.render();
    }
    
    
    if($('.bookingrange').length > 0) {
		var start = moment().subtract(6, 'days');
		var end = moment();

		function booking_range(start, end) {
			$('.bookingrange span').html(start.format('M/D/YYYY') + ' - ' + end.format('M/D/YYYY'));
		}

		$('.bookingrange').daterangepicker({
			startDate: start,
			endDate: end,
			ranges: {
				'Today': [moment(), moment()],
				'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
				'Last 7 Days': [moment().subtract(6, 'days'), moment()],
				'Last 30 Days': [moment().subtract(29, 'days'), moment()],
				'This Month': [moment().startOf('month'), moment().endOf('month')],
				'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
			}
		}, booking_range);

		booking_range(start, end);
	}
}