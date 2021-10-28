<?php include 'header.php';?>
<body>
	<div id="wrapper">
		<!-- Navigation -->
		<?php include 'navbar.php';?>

		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
				<img src="img/logos.jpg" class="pans headerdisplay" style="width: 125px;
					top: -10px;
					left: 100px;
					height: 125px;
					position: absolute;">
					<h4 class="text-center headerdisplay">
						<strong>
							Republic of the Philippines
							<br>
							Province of Negros Occidental
						</strong>
					</h4>
					<h4 class ="text-center headerdisplay">
						<em>
							City of Victorias
						</em>
					</h4>
					<h4 class="text-center headerdisplay">
						<strong>
							Office of the Market Supervisor
						</strong>
					</h4>
				</div>
				<h1 class="page-header"> Activity Logs<button onclick="myFunction()" id="btnPrint" class="btn btn-primary btn-lg pull-right" >
					Print this Table
				</button></h1>
				

			</div>

			<!-- Modal -->
			<?php include 'add_tenant_modal.php';?>
			
			<div class="row">
				<div class="col-lg-12"> 
					<div class="panel panel-default">
						<div class="panel-heading pans">
							Activity Logs of Admin
						</div>
						<!-- /.panel-heading -->  
						<div class="panel-body">
							<div  class="dataTable_wrapper ">
								<table width="100%" class="table table-striped table-bordered table-hover tab" id="dataTables-example">
									<thead>
										<tr>
											<th>Admin Activities</th>
											<th>Date</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$sql = "SELECT * FROM logs
										LEFT JOIN tenant ON tenant.tenant_id = logs.tenant_id
										LEFT JOIN stall ON stall.stall_id = logs.stall_id
										";
										$query = $conn->prepare($sql);
										$query->execute(array());
										$fetch = $query->fetchAll();

										foreach ($fetch as $key => $value) { ?>
										<tr>
											<td>
												<?php 
												if ( $value['action'] == 1) {
													echo "Tenant : " .$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname']. " with a Tenant ID of ".$value['tenant_id']." has been added on Stall Number ".$value['stall_number']."(".$value['stall_floor'].")." ;
												}
												elseif ( $value['action'] == 2) {
													echo "Tenant : " .$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname']. " with a Tenant ID of ".$value['tenant_id']." has been Updated.";
												}
												elseif ( $value['action'] == 3) {
													echo "Tenant : " .$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname']. " with a Tenant ID of ".$value['tenant_id']." has been Inactive.";
												}
												elseif ( $value['action'] == 4) {
													echo "Stall Number : ".$value['stall_number']."(".$value['stall_floor'].")  has been updated.";
												}
												elseif ( $value['action'] == 5) {
													echo "Tenant : " .$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname']. " with a Tenant ID of ".$value['tenant_id']." Paid &#8369;".number_format($value['payment'])." for rent.";
												}
												elseif ( $value['action'] == 6) {
													echo "Tenant : " .$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname']. " with a Tenant ID of ".$value['tenant_id']." has a total amount of &#8369;".number_format($value['result'])." in his/her Electricity Bill." ;
												}
												elseif ( $value['action'] == 7) {
													echo "Stall Electricity Rate has been updated to " .$value['rate']. ".";
												}
												?>
											</td>
											<td>
												<?php echo $value['date'];?>
											</td>
										</tr> 
										<?php include 'edit_tenant_modal.php';?>


										<?php }?>


									</tbody>
								</table>    
							</div>
							<!-- /.table-responsive -->
						</div>
						<!-- /.panel-body -->
					</div>

					<!-- /.panel -->
				</div>
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
			$(document).ready(function() {
				$('#dataTables-example').DataTable({
					responsive: true
				});
			});   

		</script>
		<script>
			function myFunction() {
				window.print();
			}
		</script>
	</body>

	</html>
