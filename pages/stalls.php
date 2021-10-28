<?php include 'header.php'; ?>
<body>
	<div id="wrapper">
		<!-- Navigation -->
		<?php include 'navbar.php';?>
		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header"> Stalls</h1>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							List of Stalls
						</div>
						<!-- /.panel-heading -->
						
						<div class="panel-body">
							<div class="dataTable_wrapper">
								<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr>
											<th>Stall Code</th>
											<th>Monthly Rent</th>
											<th>Stall Electricy Reader</th>
											<th>Stall Floor Size</th>
											<th>Upload Image</th>
											<th>Edit</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$sql = "SELECT *, stall.stall_id as s_id FROM stall
										";
										$query = $conn->prepare($sql);
										$query->execute();
										$fetch = $query->fetchAll();

										foreach ($fetch as $key => $value) { ?>
										<tr>
											<td><?php echo $value['stall_number']."(".$value['stall_floor'];?>)</td>
											<td>&#8369; <?php echo number_format($value['stall_rate']);?></td>
											<td><?php echo $value['stall_elec_read'];?></td>
											<td><?php echo $value['stall_size']?></td>
											<td>
												<form method="POST" enctype="multipart/form-data">
													<input type="file" name="file" required>
													<input type="hidden" name="stall_id" value="<?php echo $value['stall_id']?>">
													<button type="submit" name="files" class="btn btn-primary btn-xs">
														Save Image
													</button>
													<?php
													if(isset($_POST['files']))
													{
														$userid = $_POST['stall_id'];
														$a = $_FILES['file']['name'];
														$ab = $_FILES['file']['tmp_name'];
														$location = "".$a;
														move_uploaded_file($ab, "../pictures/".$location);

														$sql2 = $conn->prepare("UPDATE stall SET file = ? WHERE stall_id = ?");
														$sql2->execute(array($location,$userid));

														if($sql2){                                                   
															echo '
															<script>                    
																window.location = "stalls.php"
															</script>';                                                 
														}
													}
													?>
													</form>
												</td>
												<td class = "center" style = "text-align:center;">
													<a href = "#edit<?php echo $value['s_id'];?>" data-toggle = "modal" class = "btn btn-primary btn-xs">Edit Stall</a>
												</td>
											</tr>
											<?php include 'edit_stall_modal.php';?>

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
				<!-- /.col-lg-12 -->
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

	<!-- Page-Level Demo Scripts - Tables - Use for reference -->
	<script>
		$(document).ready(function() {
			$('#dataTables-example').DataTable({
				responsive: true
			});
		});
	</script>

</body>

</html>