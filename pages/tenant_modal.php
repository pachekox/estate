 
 <div class="modal fade" id="1st_tenant" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
        <input class="form-control" name= "tenant_fname" placeholder="First Name" value = "<?php echo $value['tenant_fname'];?>">
      </div>
      <div class="middlename">
        <label>Middle Name</label>
        <input class="form-control" name= "tenant_mname" placeholder="Middle Name" value = "<?php echo $value['tenant_mname'];?>">
      </div>
      <div class="lastname">
        <label>Last Name</label>
        <input class="form-control" name= "tenant_lname" placeholder="Last Name" value = "<?php echo $value['tenant_lname'];?>">
      </div>
      <div class="address">
        <label>Address</label>
        <input class="form-control" name= "tenant_address" placeholder="Address" value = "<?php echo $value['tenant_address'];?>">
      </div>
      <div class="contactnumber">
        <label>Contact Number</label>
        <input type = "number" class="form-control" name= "tenant_contact" placeholder="Contact Number" value = "<?php echo $value['tenant_contact'];?>">
      </div>
      <div class="stallname">
        <label>Stall Name</label>
        <input class="form-control" name= "stall_name" placeholder="Stall Name" value = "<?php echo $value['stall_name'];?>">
      </div>
      <br>
      <div class="col-md-3">
        <label>Stall Floor:</label>
        <select name="stall_floor" class="form-control">
         <option value="<?php echo $value['stall_floor'];?>"><?=$value['stall_floor'];?></option>
         <option value="1st Floor">1st Floor</option>
         <option value="2nd Floor">2nd Floor</option>
         <option value="talipapa">Talipapa</option>
       </select>
     </div>
     <div class="col-md-3">
      <label>Stall Number:</label>
      <select name="stall_number" class="form-control">
       <option value="<?php echo $value['stall_number'];?>"><?php echo $value['stall_number'];?></option>
       <option value="A1">A1</option>
       <option value="A2">A2</option>
       <option value="A3">A3</option>
       <option value="A4">A4</option>
       <option value="A5">A5</option>
     </select>
   </div>
   <div class="col-md-3">
    <label>Stall Category:</label>
    <select name="stall_category" class="form-control">
     <option value="<?php echo $value['stall_category'];?>"><?php echo $value['stall_category'];?></option>
     <option value="category1">category1</option>
     <option value="category2">category2</option>
     <option value="category3">category3</option>
     <option value="category4">category4</option>
   </select>
 </div> 
</div>  
</div>
<br>
<br>
<br>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="submit" name="add" class="btn btn-primary">Save</button>
</div>
</form>
</div>
</div>
</div>

