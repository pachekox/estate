<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Change Electricity Rate</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<form action="changerate.php" method="POST">
					<?php
						$sql = "SELECT * FROM rate limit 1";
						$query = $conn->prepare($sql);
						$query->execute();
						$fetch = $query->fetchAll();

                  foreach ($fetch as $key => $value) { 
					
					?>
						<div class="elecrate">
							<label> Electricity rate</label>
							<input class="form-control" name= "elec_rate" value = "<?php echo $value['elec_rate']?>" placeholder ="Electricity Rate per kWh" required>
						</div>
						<br>	
						</div>  
					</div>  
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" name="add" class="btn btn-primary">Save</button>
					</div>
					<?php } ?>
				</form>
			</div>
		</div>
	</div>