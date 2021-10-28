<?php include 'header.php';?>
<body>
	<div id="wrapper">
		<!-- Navigation -->
		<?php include 'navbar.php';?>
		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header"> Wet Market</h1>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
			
						
						<!-- /.panel-heading -->	
						<div class="panel-body">
							
								<img src = "img/wetmarket.png" usemap= "#wetmarket">
								<map name="wetmarket">
									<area id="a46" shape="rect" coords="19,120,95,180" data-toggle="modal" class = "stallstyle1"  
									href="#stall_modala46">
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

</body>

</html>
