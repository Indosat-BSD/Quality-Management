<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="jquery.1.8.2.min.js"></script>

		<script type="text/javascript">
	$(function () {
    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Report Average Form Twitter'
        },
        subtitle: {
            text: 'Periode -- Until --'
        },
        xAxis: {
            categories: [
                'Response ( SLA ) 5 minutes',
                'Greeting user account name, Care and Friendly',
                'Verify and Identify customer needs',
                'Correct Solution',
                'Ethics and twitter handling',
                'Input Akurasi Data ',
                'Notes & Information',
                'FCR',
                'Words composition, phrases and punctuation ( Grammar)',
                'Closing',
                'Campaign / Cross selling/ upselling / survey'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Persentasi (%)'
            },
			stackLabels: {
                enabled: true
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
				dataLabels: {
                    enabled: true
                }
            }
        },
        series: [{
            name: 'Yes',
            data: [49.9, 71.5, 66.4, 67.2, 33.0, 67.0, 57.6, 24.5, 67.4, 13.1, 95.6]

        }, {
            name: 'No',
            data: [83.6, 78.8, 98.5, 93.4, 77.0, 84.5, 54.0, 76.3, 91.2, 83.5, 98.6]
		}]
    });
});
		</script>
	</head>
	<body>
<script src="highlight.js"></script>
<script src="export.js"></script>

<div id="container" style="min-width: 310px; height: 600px; margin: 0 auto"></div>

	</body>
</html>
