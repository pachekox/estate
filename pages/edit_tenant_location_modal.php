 <div class="modal fade" id="editlocation<?php echo $value['tenant_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 	<div class="modal-dialog">
 		<div class="modal-content">
 			<div class="modal-header">
 				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
 				<h4 class="modal-title" id="myModalLabel">Change Tenant Location of <?php echo $value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname']; ?></h4>
 			</div>
 			<div class="modal-body">
 				<div class="form-group">
 					<form action="update_tenant_location.php" method="POST">
 						<div class="stallnumber">
 						<input type = "hidden" class="form-control" name= "tenant_id" placeholder="First Name" value = "<?php echo $value['tenant_id'];?>">
 						<input type = "hidden" class="form-control" name= "stall_rate1" placeholder="First Name" value = "<?php echo $value['stall_rate'];?>">
 							<label>Stall Code</label>  
 							<input type="hidden" name="stall_current" value="<?php echo $value['stall_id'];?>">   
 							<input type="hidden" name="previous_stall" value="<?php echo $value['stall_number'];?>">
 							<input type="hidden" name="previous_stall_floor" value="<?php echo $value['stall_floor'];?>">   
 							<select class = "form-control" name="stall_id"> 
 								<option  value = "<?php echo $value['stall_id'];?>">Your current Stall Code is <?php echo $value['stall_number']."(".$value['stall_floor'];?>)</option>
 								<?php 
 								$sql = "SELECT * FROM stall WHERE stall_id NOT IN (SELECT `stall_id` FROM rent WHERE rent_status = ?)";
 								$query = $conn->prepare($sql);
 								$query->execute(array(1));
 								$fetch = $query->fetchAll();  
 								$count = $query->rowCount();

 								if ($count == 0){
 									echo '<option value="'.$value['stall_id'].'">'.$value['stall_number'].'</option>';
 								} else{
 									foreach ($fetch as $key => $value) { ?>  
 									<option value = "<?php echo $value ['stall_id'];?>"><?php echo $value['stall_number']."(".$value['stall_floor'];?>)</option> <?php } } ?>
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

