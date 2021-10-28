<?php include 'header.php';?>

<body>
	<div id="wrapper">
		<!-- Navigation -->
		<?php include 'navbar.php';?>

		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">

				</div>
				<h1 class="page-header"> Active Tenants</h1>

			</div>

			<!-- Modal -->
			<?php include 'add_tenant_modal.php';?>
			
			<div class="row">
				<div class="col-lg-12"> 
					<div class="panel panel-default">
						<div class="panel-heading pans">
							Reports of Active Tenants
						</div>
						<!-- /.panel-heading -->  
						<div class="panel-body">
							<div class="dataTable_wrapper">
								<table width="100%" class="table table-striped table-bordered table-hover tab" id="dataTables-example">
									<thead>
										<tr>
											<th>Full Name</th>
											<th>Stall Code</th>
											<th class = "center" style = "text-align:center;">Individual Reports</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$sql = "SELECT *, tenant.tenant_id as the_tenant_id FROM tenant 
										LEFT JOIN stall ON stall.stall_id = tenant.stall_id
										LEFT JOIN rent ON rent.tenant_id = tenant.tenant_id
										LEFT JOIN tenant_status ON tenant_status.tenant_id = tenant.tenant_id
										WHERE rent.rent_status = ? AND tenant_status.tenant_status = ?
										";
										$query = $conn->prepare($sql);
										$query->execute(array(1,1));
										$fetch = $query->fetchAll();

										foreach ($fetch as $key => $value) { ?>
										<tr>
											<td><?php echo $value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];?></td>
											<td><?php echo $value['stall_number']."(".$value['stall_floor'];?>)</td>
											<td class = "center" style = "text-align:center;">
												<a href = "#summary<?php echo $value['tenant_id'];?>" data-toggle = "modal" class = "btn btn-primary btn-xs">Tenant Summary </a>
												<a href = "electricity_reports.php?s_id=<?php echo $value['the_tenant_id']?>" class = "btn btn-primary btn-xs">Electricity Reports</a>
												<!-- <a href = "javascript:;" class = "btn btn-success btn-xs" data-toggle="modal"
												data-target="#elecr<?php echo $value['the_tenant_id'];?>">Electricity Reports</a> -->
												<a href = "lease_reports.php?l_id=<?php echo $value['the_tenant_id'] ?>" class = "btn btn-primary btn-xs">Lease Reports </a>
											</td>
										</tr>	
								<?php 
								// include 'lease_reports.php';
								include 'tenants_summary.php';

								}
								?>
									</tbody>
								</div>
							</table>
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
				$('#dataTables-example1').DataTable({
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
