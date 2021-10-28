 <div class="modal fade" id="edit<?php echo $value['tenant_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 	<div class="modal-dialog">
 		<div class="modal-content">
 			<div class="modal-header">
 				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
 				<h4 class="modal-title" id="myModalLabel">Edit Tenant</h4>
 			</div>
 			<div class="modal-body">
 				<div class="form-group">
 					<form action="update_tenant.php" method="POST">
 						<div class="firstname">
 							<label> First Name</label>
 							<input type = "hidden" class="form-control" name= "tenant_id" placeholder="First Name" value = "<?php echo $value['tenant_id'];?>">
 							<input type="hidden" name="stall_id" value="<?php echo $value['stall_id'];?>">
 							<input class="form-control" name= "tenant_fname" placeholder="First Name" value = "<?php echo $value['tenant_fname'];?>" required>
 						</div>
 						<div class="middlename">
 							<label>Middle Name</label>
 							<input class="form-control" name= "tenant_mname" placeholder="Middle Name" value = "<?php echo $value['tenant_mname'];?>" required>
 						</div>
 						<div class="lastname">
 							<label>Last Name</label>
 							<input class="form-control" name= "tenant_lname" placeholder="Last Name" value = "<?php echo $value['tenant_lname'];?>" required>
 						</div>
 						<div class="address">
 							<label>Address</label>
 							<input class="form-control" name= "tenant_address" placeholder="Address" value = "<?php echo $value['tenant_address'];?>" required>
 						</div>
 						<div class="contactnumber">
 							<label>Contact Number</label>
 							<input type = "number" class="form-control" name= "tenant_contact" placeholder="Contact Number" value = "<?php echo $value['tenant_contact'];?>" required>
 						</div>
 						<div class="stallname">
 							<label>Stall Name</label>
 							<input class="form-control" name= "stall_name" placeholder="Stall Name" value = "<?php echo $value['stall_name'];?>" required>
 						</div>
 						<div class="stallcategory">
 							<label>Stall Category</label>
 							<input class="form-control" name= "stall_category" placeholder="Stall Category" value = "<?php echo $value['stall_category']?>" required>
 						</div>
 						<div class="meternumber">
 							<label>Meter Number</label>
 							<input type ="number" class="form-control" name= "meter_number" placeholder="Meter Number" value = "<?php echo $value['meter_number']?>" required>
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
 	</div>
 </div>


