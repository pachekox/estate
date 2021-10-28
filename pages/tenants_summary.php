<div class="modal fade" id="summary<?php echo $value['tenant_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel"><strong>Tenant Summary of <?php echo $value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];?> </strong></h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<h4><strong>Stall Code: <?php echo $value['stall_number'];?></strong></h4>   
				</div>
				<div class="form-group">
					<h4><strong>Stall Location: </strong><?php echo $value['stall_floor']?></h4>
				</div>
				<div class="form-group">
					<h4><strong>Monthly Rent: </strong><?php echo number_format($value['stall_rate'])?> per month</h4>
				</div>
				<div class="form-group">
					<h4><strong>Stall Name: </strong><?php echo $value['stall_name']?></h4>
				</div>
				<div class="form-group">
					<h4><strong>Stall Category: </strong><?php echo $value['stall_category']?></h4>
				</div>
				<div class="form-group">
					<h4><strong>Meter Number: </strong><?php echo $value['meter_number']?></h4>
				</div>
				<div class="form-group">
					<h4><strong>Address: </strong><?php echo $value['tenant_address']?></h4>
				</div>
				<div class="form-group">
					<h4><strong>Contact Number: </strong><?php echo $value['tenant_contact']?></h4>
				</div>
				<div class="form-group">
					<h4><strong>Date Started Renting: </strong><?php echo $value['date_started']?></h4> 
				</div>
			</div>
		</div>
	</div>
</div>