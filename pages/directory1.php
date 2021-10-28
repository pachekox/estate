<?php include 'header.php';?>
<body>
	<div id="wrapper">
		<!-- Navigation -->
		<?php include 'navbar.php';?>
		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header"> Home</h1>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default"> 
						<div class="panel-heading">
							Maps of all the floors
						</div>
						<!-- /.panel-heading -->
						<div class="panel-body">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs">
								<li ><a href="#home" data-toggle="tab"> Ground Floor</a>
								</li>
								<li><a href="#profile" data-toggle="tab"> Second Floor</a>
								</li>
								<li><a href="#messages" data-toggle="tab"> Wet Market</a>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<div class="tab-pane fade in active" id="home">
									<div class="panel-body">
										
										<img src = "img/ground1.png" id="ImageMap1" usemap= "#ground">
										
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
											<area id="12" shape="rect" coords="9,155,46,172" data-toggle="modal" class = "stallstyle"  
											href="#stall_modal12" data-maphilight='{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}'>
											<area id="13" shape="rect" coords="17,10,45,72" data-toggle="modal" class = "stallstyle"  
											href="#stall_modal13" data-maphilight='{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}'>
											<area id="14" shape="rect" coords="46,10,75,72" data-toggle="modal" class = "stallstyle"  
											href="#stall_modal14" data-maphilight='{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}'>
											<area id="15" shape="rect" coords="76,10,104,72" data-toggle="modal" class = "stallstyle"  
											href="#stall_modal15" data-maphilight='{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}'>
											<area id="16" shape="rect" coords="105,10,134,72" data-toggle="modal" class = "stallstyle"  
											href="#stall_modal16" data-maphilight='{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}'>
											<area id="17" shape="rect" coords="135,10,164,72" data-toggle="modal" class = "stallstyle"  
											href="#stall_modal17" data-maphilight='{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}'>
											<area id="18" shape="rect" coords="165,10,194,72" data-toggle="modal" class = "stallstyle"  
											href="#stall_modal18" data-maphilight='{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}'>
											<area id="19" shape="rect" coords="195,10,223,72" data-toggle="modal" class = "stallstyle"  
											href="#stall_modal19" data-maphilight='{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}'>
											<area id="20" shape="rect" coords="224,10,253,72" data-toggle="modal" class = "stallstyle"  
											href="#stall_modal20" data-maphilight='{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}'>
											<area id="21" shape="rect" coords="254,10,283,72" data-toggle="modal" class = "stallstyle"  
											href="#stall_modal21" data-maphilight='{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}'>
											<area id="22" shape="rect" coords="284,10,317,72" data-toggle="modal" class = "stallstyle"  
											href="#stall_modal22" data-maphilight='{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'>
											<area id="23" shape="rect" coords="318,10,351,72" data-toggle="modal" class = "stallstyle"  
											href="#stall_modal23" data-maphilight='{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'>
											<area id="24" shape="rect" coords="352,10,385,72" data-toggle="modal" class = "stallstyle"  
											href="#stall_modal24" data-maphilight='{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'>
											<area id="25" shape="rect" coords="456,10,487,72" data-toggle="modal" class = "stallstyle"  
											href="#stall_modal25" data-maphilight='{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'>
											<area id="26" shape="rect" coords="488,10,520,72" data-toggle="modal" class = "stallstyle"  
											href="#stall_modal26" data-maphilight='{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'>
											<area id="27" shape="rect" coords="521,10,551,72" data-toggle="modal" class = "stallstyle"  
											href="#stall_modal27" data-maphilight='{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'>
											<area id="28" shape="rect" coords="552,10,580,72" data-toggle="modal" class = "stallstyle"  
											href="#stall_modal28" data-maphilight='{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'>
											<area id="29" shape="rect" coords="581,10,609,72" data-toggle="modal" class = "stallstyle"  
											href="#stall_modal29" data-maphilight='{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'>
											<area id="30" shape="rect" coords="610,10,639,72" data-toggle="modal" class = "stallstyle"  
											href="#stall_modal30" data-maphilight='{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'>
											<area id="31" shape="rect" coords="640,10,667,72" data-toggle="modal" class = "stallstyle"  
											href="#stall_modal31" data-maphilight='{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'>
											<area id="32" shape="rect" coords="668,10,694,72" data-toggle="modal" class = "stallstyle"  
											href="#stall_modal32" data-maphilight='{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'>

										</map>
									</div>
								</div>
								<div class="tab-pane fade" id="profile">
									<div class="panel-body">

										<img src = "img/2nd.png" id="ImageMap1" usemap= "#wetmarket">
										<map name="wetmarket">
										
											<area id="32" shape="rect" coords="668,10,694,72" data-toggle="modal" class = "stallstyle"  
											href="#stall_modal32" data-maphilight='{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'>
											<area id="a47" shape="rect" coords="95,120,171,180" data-toggle="modal" class = "stallstyle"  
											href="#stall_modala47" data-maphilight='{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'> 
											<area id="a48" shape="rect" coords="171,120,247,180" data-toggle="modal" class = "stallstyle"  
											href="#stall_modala48">
											<area id="a49" shape="rect" coords="247,120,323,180" data-toggle="modal" class = "stallstyle"  
											href="#stall_modala49">
											<area id="a50" shape="rect" coords="323,120,399,180" data-toggle="modal" class = "stallstyle"  
											href="#stall_modala50">
										</map> 
										<!-- /.table-responsive -->


									</div>
								</div>
								<div class="tab-pane fade" id="messages">
									<div class="panel-body">

										<img src = "img/wetmarket.png" usemap= "#wetmarket">
										<map name="wetmarket">
											<area id="a46" shape="rect" coords="19,120,95,180" data-toggle="modal" class = "stallstyle1"  
											href="#stall_modala46" data-maphilight='{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'>
											<area id="a47" shape="rect" coords="95,120,171,180" data-toggle="modal" class = "stallstyle"  
											href="#stall_modala47"> 
											<area id="a48" shape="rect" coords="171,120,247,180" data-toggle="modal" class = "stallstyle"  
											href="#stall_modala48">
											<area id="a49" shape="rect" coords="247,120,323,180" data-toggle="modal" class = "stallstyle"  
											href="#stall_modala49">
											<area id="a50" shape="rect" coords="323,120,399,180" data-toggle="modal" class = "stallstyle"  
											href="#stall_modala50">
										</map> 
										<!-- /.table-responsive -->
							
									</div>
								</div>

							</div>
						<?php include 'stall_modal.php';?>
						</div>
						<!-- /.panel-body -->
					</div>
					<!-- /.panel -->
				</div>
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
		<script src="../dist/js/maphighlight.js"></script>

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