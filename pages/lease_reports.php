<?php
include 'header.php';
$get_id = $_GET['l_id'];
?>

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
				<h1 class="page-header"> Lease Payments Individual Reports<button onclick="myFunction()" id="btnPrint" class="btn btn-primary btn-lg pull-right" >
					Print this Table
				</button></h1>

			</div>

			<!-- Modal -->
			<?php include 'add_tenant_modal.php';?>
			
			<div class="row">
				<div class="col-lg-12"> 
					<div class="panel panel-default">
						<div class="panel-heading pans">
							<?php 

							$sql = "SELECT * FROM tenant
							LEFT JOIN stall ON stall.stall_id = tenant.stall_id
							WHERE tenant.tenant_id = ?";

							$query = $conn->prepare($sql);
							$query->execute(array($get_id));
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value) {

								echo "Tenant :".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname']." reports of Lease payments Stall Code ".$value['stall_number']."(".$value['stall_floor'].")";
							} ?>
						</div>
						<!-- /.panel-heading -->  
						<div class="panel-body">
							<div class="dataTable_wrapper">
								<table width="100%" class="table table-striped table-bordered table-hover tab" id="dataTables-example">
									<thead>
										<tr>
												 <!-- <th>Full Name</th>
												 <th>Stall Code</th> -->
												 <th>Monthly Rent</th>
												 <th>Payment</th>
												 <th>Credits</th>
												 <th>Consumption Period</th>

												</tr>
											</thead>
											<tbody>
												<?php

												$sql = "SELECT * FROM payments
												LEFT JOIN tenant ON tenant.tenant_id = payments.tenant_id
												LEFT JOIN stall ON stall.stall_id = tenant.stall_id
												LEFT JOIN tenant_status ON tenant_status.tenant_id = tenant.tenant_id
												LEFT JOIN receipt ON receipt.tenant_id = tenant.tenant_id
												WHERE tenant_status.tenant_status = ? AND tenant.tenant_id = ?
												";

												$query = $conn->prepare($sql);
												$query->execute(array(1,$get_id));
												$fetch = $query->fetchAll();

												foreach ($fetch as $key => $value) { ?>
												<tr>
												<!-- <td><?php echo $value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];?></td>
												<td><?php echo $value['stall_number']."(".$value['stall_floor'];?>)</td> -->
												<td>&#8369; <?php echo number_format($value['stall_rate']);?></td>
												<td>&#8369; <?php echo number_format($value['payment']);?></td>
												<td>&#8369;
													<?php
													$a = $value['stall_rate'];
													$b = $value['payment'];
													$result = $a - $b;
													echo number_format($result);
													?>
												</td>
												<td><?php echo $value['month_first']." to ". $value['month_second']?></td>
												
											</tr> 

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


			<!-- Page-Level Demo Scripts - Tables - Use for reference -->
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
