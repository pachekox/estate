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
			<div class="col-md-2">
			<select class="form-control" name="c_year">
				<?php 
                   $start = 2017;
                   $yearNow = date('Y');
                   for ($i=$start; $i < $yearNow+1 ; $i++) {
                   	echo '<option value="'.$i.'">'.$i.'</option>';
                   }
				?>
			</select>
			</div>

                    <?php 
                    $ty = date('Y');
                    $sql = "SELECT *, SUM(consumption) as ccount FROM receipt_date WHERE r_year = ? GROUP BY r_month";
                    $query = $conn->prepare($sql);
                    $query->execute(array($ty));
                    $fetch = $query->fetchAll();
                    foreach ($fetch as $key => $value) {
                        $data[] = array('title'=>$value['r_month'], 'value'=>$value['ccount']);
                    }
                    $d = $query->rowCount() > 0 ? json_encode($data) : '';
                    ?>
                    <div class="col-lg-12">
                        <div id="chart" style="height: 500px;"></div>
                    </div>
                </div>

                <input type="hidden" name="wahahaha">

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
			<script>
				$("#maskon").show(function(){
					$("#phone").mask("(9999) 999-9999");
				});                          
			</script>

			<!-- Page-Level Demo Scripts - Tables - Use for reference -->
			<script>
				$(document).ready(function() {
					$('#dataTables-example').DataTable({
						responsive: true
					});
				});   
				$(document).ready(function() {
					$("#txtboxToFilter").keydown(function (e) {
			 // Allow: backspace, delete, tab, escape, enter and .
			 if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
			 // Allow: Ctrl+A
			 (e.keyCode == 65 && e.ctrlKey === true) ||
			 // Allow: Ctrl+C
			 (e.keyCode == 67 && e.ctrlKey === true) ||
			 // Allow: Ctrl+X
			 (e.keyCode == 88 && e.ctrlKey === true) ||
			 // Allow: home, end, left, right
			 (e.keyCode >= 35 && e.keyCode <= 39)) {
				 // let it happen, don't do anything
				return;
			}
		// Ensure that it is a number and stop the keypress
		if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
			e.preventDefault();
		}
	});
				});                
			</script>
			<script>
				function print() {
					window.print();
				}
			</script>

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
             $('[name="c_year"]').on('change', function(){
                 // alert($(this).val());
                 $('[name="wahahaha"]').val($(this).val());
                 window.location = 'ecg.php?g_id='+$(this).val();
             });


            var raw = '<?php echo $d; ?>';
            $('[name="wahahaha"]').val(raw);

            var data = JSON.parse($('[name="wahahaha"]').val());
            var chart = AmCharts.makeChart( "chart", {
                "type": "pie",
                "theme": "light",
                "dataProvider": data ,
                "titleField": "title",
                "valueField": "value",
                "labelRadius": 20,
                
                "radius": "37%",
                "innerRadius": "30%",
                "labelText": " [[title]] ([[value]] kWh) ",
                "export": {
                    "enabled": true
                },
                "depth3D": 10,
                "angle": 17,
                "fontFamily": "Helvetica",
                "fontSize": 13,
                "balloonText": "[[value]]",
                "color": "#222",
        // "colors": ['#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222']
        "colors": ['#FF6600', '#FCD202', '#B0DE09', '#0D8ECF', '#2A0CD0', '#CD0D74', '#CC0000', '#00CC00', '#0000CC', '#DDDDDD', '#999999', '#222333', '#990000']
    } );

           
         
</script>
			</body>

			</html>
