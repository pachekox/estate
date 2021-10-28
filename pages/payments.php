<?php include 'header.php';?>
<body>
	<div id="wrapper">
		<!-- Navigation -->
		<?php include 'navbar.php';?>
		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header"> Lease Payments</h1>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="col-lg-12"> 
					<div class="panel panel-default">
						<div class="panel-heading">
							Lease Payments of Tenants
						</div>
						<!-- /.panel-heading -->  
						<div class="panel-body">
							<div class="dataTable_wrapper">
								<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr>
											<th>Full Name</th>
											<th>Stall Code</th>
											<th>Monthly Rent</th>
											<th>Payment</th>
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
												<td>&#8369; <?php echo number_format($value['stall_rate']); ?></td>
												<td class = "center" style = "text-align:center;">
													<a href = "#receipt1<?php echo $value['tenant_id'];?>" data-toggle="modal" class="btn btn-outline btn-xs btn-primary"> Payment
													</a> 
												</tr> 
												<?php include 'payments_modal.php';?>
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
					<!-- /#page-wrapper -->
				</div>
				<!-- /#wrapper -->

				<!-- jQuery -->


				<script src="../bower_components/jquery/dist/jquery.min.js"></script>
				<script src="../js/bootstrap-datepicker.min.js"></script>
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
					$(function() {
						$('.resetPrice').tooltip();
					});
					$(document).ready(function() {
						$('#dataTables-example').DataTable({
							responsive: true
						});
					});
					$('.datepick').datepicker({
					});
				</script>

			</body>

			</html>
