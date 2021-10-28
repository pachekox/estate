<div class="modal fade" id="receipt1<?php echo $value['tenant_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><?php echo $value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];?></h4>
            </div>
            <div class="modal-body">
            <form action="save_payments.php" method="POST">
                    <input type = "hidden" class="form-control" name= "tenant_id" value = "<?php echo $value['tenant_id'];?>">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Location </label>: Stall Code <?php echo $value['stall_number']." (".$value['stall_floor'];?>)
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Monthly Rent </label>: &#8369; <input class = "custom-input5" value ="<?php echo $value['stall_rate']?>"" id= "rent" readonly ></input>
                </div>
                <div class="form-group">
                    <label class="control-label"> &nbsp;&nbsp; Paying for the month of  
                        <input type="datepick" name="month_first" class = "datepick custom-input1" required></input>
                        to 
                        <input type="datepick" name="month_second" class = "datepick custom-input1" required></input>
                    </label>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Payment </label>: <input class = "custom-input4" name="payment" required></input> 
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">OR Number </label>: <input class = "custom-input4" name="or_number" required></input> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default close-modal" data-dismiss="modal">Close
                    </button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
             </form>   
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <script src="../js/jquery.js"></script>
