 <div class="modal fade" id="editstatus<?php echo $value['tenant_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 	<div class="modal-dialog">
 		<div class="modal-content">
 			<div class="modal-header">
 				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
 				<h4 class="modal-title" id="myModalLabel">Change Tenant Status</h4>
 			</div>
 			<div class="modal-body">
 				<div class="form-group">
 					<form action="update_tenant_status.php" method="POST">
 						<input type="hidden" name="tenant_id" value="<?php echo $value['tenant_id']?>">
 						<div  class = "">
 							<label>Tenant Status of </label> <?php echo $value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];?>
 							<select name = "tenant_status" class = "form-control">
 								<option value = "1" readonly>Active</option>
 								<option value = "0">Inactive</option>
 							</select>

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

