 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Add New Tenant</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<form action="../addtenant.php" method="POST">

						<div class="firstname">
							<label> First Name</label>
							<input class="form-control" name= "tenant_fname" placeholder="First Name" required>
						</div>
						<div class="middlename">
							<label>Middle Name</label>
							<input class="form-control" name= "tenant_mname" placeholder="Middle Name" >
						</div>
						<div class="lastname">
							<label>Last Name</label>
							<input class="form-control" name= "tenant_lname" placeholder="Last Name" required>
						</div>
						<div class="address">
							<label>Address</label>
							<input class="form-control" name= "tenant_address" placeholder="Address" required>
						</div>
						<div class="contactnumber">
							<label>Contact Number</label>
							<input type = "number" class="form-control" name= "tenant_contact" placeholder="Contact Number" required>
						</div>
						<div class="stallname">
							<label>Stall Name</label>
							<input class="form-control" name= "stall_name" placeholder="Stall Name" required>
						</div>
						<div class="stallcategory">
							<label>Stall Category</label>
							<input class="form-control" name= "stall_category" placeholder="Stall Category" required>
						</div>
						<div class="meternumber">
							<label>Meter Number</label>
							<input type ="number" class="form-control" name= "meter_number" placeholder="Meter Number" required>
						</div>
						<div class="stallnumber">
							<label> Vacant Stall</label>     
							
							<select class = "form-control" name = "stall_id"> 
								<?php 
								$sql = "SELECT * FROM stall WHERE stall_id NOT IN (SELECT `stall_id` FROM rent WHERE rent_status = ?)";
								$query = $conn->prepare($sql);
								$query->execute(array(1));
								$fetch = $query->fetchAll();      

								foreach ($fetch as $key => $value) { ?>  
									<option value = "<?php echo $value ['stall_id'];?>"><?php echo $value['stall_number']."(".$value['stall_floor'];?>)</option> <?php } ?>
									
								</select>
								<input type = "hidden" name = "tenant_status" value = "Rented">
							</div>
						</div>  
					</div>  
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" name="add" class="btn btn-primary">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>