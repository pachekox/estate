<?php include 'header.php';?>
<body>
	<div id="wrapper">
		<!-- Navigation -->
		<?php include 'navbar.php';?>
		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header"> Ground Floor</h1>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<div class="panel-body">
				<img src = "img/SFGROUND.jpg" id="ImageMap1" usemap= "#ground">

				<map id="ground" name="ground">
					<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 1 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="9" shape="rect" coords="9,98,46,117" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modal9" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>'>
						<?php } ?>
						<?php

						$sql = "SELECT * FROM stall s 
						LEFT JOIN tenant t 
						ON t.stall_id = s.stall_id
						LEFT JOIN rent r
						ON r.tenant_id = t.tenant_id 
						WHERE s.stall_id = 2 ORDER BY r.rent_status desc LIMIT 1 ";          

						$query = $conn->prepare($sql);
						$query->execute();
						$fetch = $query->fetchAll();

						foreach ($fetch as $key => $value){

							$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
							:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
							?> 
							<area id="10" shape="rect" coords="9,118,46,136" data-toggle="modal" class = "stallstyle"  
							href="#stall_modal10" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>'>
							<?php } ?>
							<?php

							$sql = "SELECT * FROM stall s 
							LEFT JOIN tenant t 
							ON t.stall_id = s.stall_id
							LEFT JOIN rent r
							ON r.tenant_id = t.tenant_id 
							WHERE s.stall_id = 3 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="11" shape="rect" coords="9,137,46,154" data-toggle="modal" class = "stallstyle"  
								href="#stall_modal11" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>'>
								<?php } ?>
							</map> 
							<!-- /.table-responsive -->
							<?php include 'stall_modal.php';?>

						</div>

						<!-- /.panel-body -->

					</div>
					<!-- /#page-wrapper -->
				</div>
				<!-- /#wrapper -->

				<!-- jQuery -->


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
				<script src="../dist/js/jquery.maphilight.js"></script>

				<!-- Page-Level Demo Scripts - Tables - Use for reference -->

				<script>
					$(document).ready(function() {
						$('#dataTables-example').DataTable({
							responsive: true
						});
					});
				</script>
				<script>

					jQuery(function()
					{
						jQuery('#ImageMap1').maphilight();
					});
					$('#ImageMap1').trigger('alwaysOn.maphilight').find('area[coords]')


				</script>

			</body>

			</html>
