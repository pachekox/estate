<?php include 'header.php';?>
<body>
	<div id="wrapper">
		<!-- Navigation -->
		<?php include 'navbar.php';?>

		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">

				</div>
				<h1 class="page-header"> Electricity Consumption Graph </h1>
			</div>

			<div class="row">
				<h4>Electricity Consumption of Victorias Commercial Center</h4>

				<?php 
				$sql = "SELECT *, SUM(consumption) as ccount,  FROM receipt_date GROUP BY r_year";
				$query = $conn->prepare($sql);
				$query->execute();
				$fetch = $query->fetchAll();

        // $sql1 = "SELECT *, SUM(consumption) as ccount,  FROM receipt_date GROUP BY r_month";
        // $query1 = $conn->prepare($sql1);
        // $query1->execute();
        // $fetch1 = $query1->fetchAll();

				foreach ($fetch1 as $key => $value) {
					$data[] = array(
            'category'=>$value['r_year'],
            'income'=>$value['ccount'],
            'url'=>'#', 
            'description'=>'Click',
            'month'=> [array(
              'category'=>$value['r_month'],
              'income'=>'435'
              'category'=>$value['r_month'],
              'income'=>'435'
              )]
            );
				}
				$d = json_encode($data);
				?>
				<div class="col-lg-12">
				<div id="chart" style="height: 500px; width: 100%"></div>
				</div>
			</div>

			<!-- Modal -->
			

			
		</div>
	</div>
	<script src="../bower_components/jquery/dist/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

	<!-- DataTables JavaScript -->
	<script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
	<script src="../bower_components/datatables-responsive/js/dataTables.responsive.js"></script>

	<!-- Custom Theme JavaScript -->
	<script src="../dist/js/sb-admin-2.js"></script>

	<script src="../plugins/amcharts/amcharts.js"></script>
	<script src="../plugins/amcharts/animate.min.js"></script>
	<script src="../plugins/amcharts/themes/light.js"></script>
	<script src="../plugins/amcharts/export/export.min.js"></script>
	<script src="../plugins/amcharts/themes/patterns.js"></script>
	<script type="../plugins/export/export.css" type="text/css" media="all""></script>
	<script src="../plugins/amcharts/plugins/responsive/responsive.min.js"></script>
	<script src="../plugins/amcharts/serial.js"></script>
	<script src="../plugins/amcharts/pie.js"></script>


	<script type="text/javascript">
		var chartData = [{
  "category": 2009,
  "income": 23.5,
  "url": "#",
  "description": "click to drill-down",
  "months": [{
    "category": 1,
    "income": 1
  }, {
    "category": 2,
    "income": 2
  }, {
    "category": 3,
    "income": 1
  }, {
    "category": 4,
    "income": 3
  }, {
    "category": 5,
    "income": 2.5
  }, {
    "category": 6,
    "income": 1.1
  }, {
    "category": 7,
    "income": 2.9
  }, {
    "category": 8,
    "income": 3.5
  }, {
    "category": 9,
    "income": 3.1
  }, {
    "category": 10,
    "income": 1.1
  }, {
    "category": 11,
    "income": 1
  }, {
    "category": 12,
    "income": 3
  }]
}, {
  "category": 2010,
  "income": 26.2,
  "url": "#",
  "description": "click to drill-down",
  "months": [{
    "category": 1,
    "income": 4
  }, {
    "category": 2,
    "income": 3
  }, {
    "category": 3,
    "income": 1
  }, {
    "category": 4,
    "income": 4
  }, {
    "category": 5,
    "income": 2
  }, {
    "category": 6,
    "income": 1
  }, {
    "category": 7,
    "income": 2
  }, {
    "category": 8,
    "income": 2
  }, {
    "category": 9,
    "income": 3
  }, {
    "category": 10,
    "income": 1
  }, {
    "category": 11,
    "income": 1
  }, {
    "category": 12,
    "income": 3
  }]
}, {
  "category": 2011,
  "income": 30.1,
  "url": "#",
  "description": "click to drill-down",
  "months": [{
    "category": 1,
    "income": 2
  }, {
    "category": 2,
    "income": 3
  }, {
    "category": 3,
    "income": 1
  }, {
    "category": 4,
    "income": 5
  }, {
    "category": 5,
    "income": 2
  }, {
    "category": 6,
    "income": 1
  }, {
    "category": 7,
    "income": 2
  }, {
    "category": 8,
    "income": 2.5
  }, {
    "category": 9,
    "income": 3.1
  }, {
    "category": 10,
    "income": 1.1
  }, {
    "category": 11,
    "income": 1
  }, {
    "category": 12,
    "income": 3
  }]
}];

var rawdata = '<?php echo $d; ?>';
var newdata = JSON.parse(rawdata);
alert(rawdata);
		var chart = AmCharts.makeChart("chart", {
  "type": "serial",
  "creditsPosition": "top-right",
  "autoMargins": false,
  "marginLeft": 30,
  "marginRight": 8,
  "marginTop": 10,
  "marginBottom": 26,
  "titles": [{
    "text": "Yearly data"
  }],
  "dataProvider": newdata,
  "startDuration": 1,
  "graphs": [{
     "alphaField": "alpha",
    "balloonText": "<span style='font-size:13px;'>[[title]] in [[category]]:<b>[[value]]</b> [[additional]]</span> <br>[[description]]",
    "dashLengthField": "dashLengthColumn",
    "fillAlphas": 1,
    "title": "Income",
    "type": "column",
    "valueField": "income",
    "urlField": "url"
  }],
  "categoryField": "category",
  "categoryAxis": {
    "gridPosition": "start",
    "axisAlpha": 0,
    "tickLength": 0
  }
});

chart.addListener("clickGraphItem", function(event) {
  if ('object' === typeof event.item.dataContext.months) {

    // set the monthly data for the clicked month
    event.chart.dataProvider = event.item.dataContext.months;

    // update the chart title
    event.chart.titles[0].text = event.item.dataContext.category + ' monthly data';

    // let's add a label to go back to yearly data
    event.chart.addLabel(
      35, 20,
      "< Go back to yearly",
      undefined,
      15,
      undefined,
      undefined,
      undefined,
      true,
      'javascript:resetChart();');

    // validate the new data and make the chart animate again
    event.chart.validateData();
    event.chart.animateAgain();
  }
});

// function which resets the chart back to yearly data
function resetChart() {
  chart.dataProvider = chartData;
  chart.titles[0].text = 'Yearly data';

  // remove the "Go back" label
  chart.allLabels = [];

  chart.validateData();
  chart.animateAgain();
}
</script>
</body>

</html>
