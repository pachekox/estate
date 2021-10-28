<div class="modal fade" id="receipt<?php echo $value['tenant_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form  action="save_receipt.php" method="POST">
					<input type = "hidden" class="form-control" name= "id" value = "<?php echo $value['tenant_id'];?>">
					<input type = "hidden" class="form-control" name= "ids" value = "<?php echo $value['id'];?>">
					<div class="form-group">	
						<strong>
							<div class= "modal-body2"><h3 class="modal-title text-center" id="myModalLabel">
								<strong>Republic of the Philippines<br>Province of Negros Occidental
								</strong></h3>
								<h4 class ="text-center"><em>City of Victorias</em></h4>
								<h4 class="text-center">
									<strong>OFFICE OF THE MARKET SUPERVISOR
									</strong>
								</h4>
								
								<br>							
								<div class="form-group">
									<label class="col-sm-6 control-label">Name </label>: <?php echo $value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];?>
								</div>
								<div class="form-group">
									<label class="col-sm-6 control-label">Location </label>: Stall Code <?php echo $value['stall_number']." (".$value['stall_floor'];?>)
								</div>
								<div class="form-group">
									<label class="col-sm-3 control-label">SUBJECT </label> :
									FOR PAYMENT OF ELECTRICAL CONSUMPTION FOR &nbsp;&nbsp;&nbsp;THE PERIOD FROM
									<input class = "datepick custom-input1" required></input>
									TO 
									<input class = "datepick custom-input1" required></input>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">METER NO. </label>: <input type="text" name=""  class = "custom-input" required></input> 
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">ELECTRIC RATE </label>:&#8369;<input class = "custom-input3"  value=" <?php echo $value['elec_rate']?> per kWh" id= "rate" readonly ></input> 
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">PRESENT </label>: <input class = "custom-input" name="charges" required></input> 
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">PREVIOUS </label>: <input  class = "custom-input" value ="<?php echo $value['charges']?> kWh" id = "previous" readonly> </input> 
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">TOTAL CONSUMPTION</label>:
									<input type="text"  class = "custom-input" type="" id="result1" readonly>
								</div>
								<div class="form-group">
									<label class="col-sm-4 control-label">AMOUNT </label>:&#8369;<input type="text"  class = "custom-input3" type="" id="result" value="" readonly>
								</div><br>								
								<div class="form-group">
									<p class="text-right">APPROVED BY: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<br>
										<br>
										LUDAISY B. FERNANDEZ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
										MARKET SUPERVISOR III&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									</p>
								</div>
								
							</div>
						</strong>
					</div>
				</div>	
				<div class="modal-footer">
					<button type="button" class="btn btn-default close-modal" data-dismiss="modal">Close
					</button>
					<!-- <button type="submit" name="add" class="btn btn-primary">Save</button> -->
					<button onclick="myFunction()" class="btn btn-primary">Print Receipt</button>
				</div>
			</form>
		</div>
	</div>
</div>	
</div>


<script src="../js/jquery.js"></script>


<script>
	function myFunction() {
		window.print();
	}
</script>
<script>
	$('input[name="charges"]').on('change paste keyup', function(){
		var a = $(this).val();
		console.log(a);
		var b = $('input#rate').val().replace('per kWh', '');
		var c = $('input#previous').val().replace('kWh', '');
		var subtotal = parseFloat(a - c);
		var total = parseFloat(subtotal * b);
		console.log(total);
		$('input#result1').val(subtotal);
		$('input#result').val(total);

	});
	$('.close-modal, .close, .modal-fade').click(function(){
		$('input#result1').val('');
		$('input#result').val('');
		$('input#charges').val('');
	});	
</script>
