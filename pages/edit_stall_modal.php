 <div class="modal fade" id="edit<?php echo $value['s_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
   <div class="modal-content">
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     <h4 class="modal-title" id="myModalLabel">Edit Stall ( <?php echo $value['stall_number']?> )</h4>
   </div>
   <div class="modal-body">
     <div class="form-group">
      <form action="update_stall.php" method="POST">
      <div class="stallrate">
        <label> Stall Rate</label>
        <input type = "hidden" class="form-control" name= "stall_id" placeholder="First Name" value = "<?php echo $value['s_id'];?>">
        <input class="form-control" name= "stall_rate" placeholder="Stall Rate" value = "<?php echo $value['stall_rate'];?>" required>
      </div>
      <div class="stallelecreader">
        <label> Stall Electric Reader</label>
        <input class="form-control" name= "stall_elec_read" placeholder="Stall Electricity Reader" value = "<?php echo $value['stall_elec_read'];?>" required>
      </div>
      <div class="stallfloor">
        <label> Stall Floor Size</label>
        <input class="form-control" name= "stall_size" placeholder="Stall Floor Size" value = "<?php echo $value['stall_size'];?>" required>
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

