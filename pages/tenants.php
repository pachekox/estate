<?php include 'header.php';?>
<body>
	<div id="wrapper">
		<!-- Navigation -->
		<?php include 'navbar.php';?>

		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">

				</div>
				<h1 class="page-header"> Tenants <button class="btn btn-primary btn-md pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>
					Add New Tenant
				</button></h1>
			</div>

			<!-- Modal -->
			<?php include 'add_tenant_modal.php';?>

			<div class="row">
				<div class="col-lg-12"> 
					<div class="panel panel-default">
						<div class="panel-heading">
							List of Active Tenants
						</div>
						<!-- /.panel-heading -->  
						<div class="panel-body">
							<div class="dataTable_wrapper">
								<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr>
											<th>Full Name</th>
											<th>Stall Code</th>
											<th>Contact Number</th>
											<th>Meter No.</th>
											<th>Address</th>
											<th style = "text-align:center;">Edit</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$sql = "SELECT * FROM tenant 
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
												<td><?php echo $value['tenant_contact'];?></td>
												<td><?php echo $value['meter_number']?></td>
												<td><?php echo $value['tenant_address'];?></td>
												<td class = "center" style = "text-align:center;">
													<a href = "#edit<?php echo $value['tenant_id'];?>" data-toggle = "modal" class = "btn btn-primary btn-xs">Edit Tenant</a>
													<a href = "#editstatus<?php echo $value['tenant_id'];?>" data-toggle = "modal" class = "btn btn-primary btn-xs">Change Tenant Status</a>
												</td>
												<?php  include 'edit_tenant_status_modal.php'; ?>                      
											</tr> 
											<?php include 'edit_tenant_modal.php'; ?>



											<?php }  ?>


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
			</body>

			</html>
