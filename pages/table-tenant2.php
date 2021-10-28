 <div class="panel panel-default">
      <div class="panel-heading">
        Tenants DataTable
      </div>
      <!-- /.panel-heading -->  
      <div class="panel-body">
        <div class="dataTable_wrapper">
          <table width="100%" class="table table-striped table-bordered table-hover" id="data">
            <thead>
             <tr>
              <th width= "10%">No.</th>
              <th width = "25%">Full Name</th>
              <th width = "20%">Contact Number</th>
              <th>Address</th>
              <th width = "20%" style = "text-align:center;">Edit</th>
            </tr>
          </thead>
          <tbody>
            <?php
                    $sql = "SELECT * FROM tenant";
                  $query = $conn->prepare($sql);
                  $query->execute();
                  $fetch = $query->fetchAll();

                  foreach ($fetch as $key => $value) { ?>
              <tr>
               <td><?php echo $value['tenant_id'];?></td>
               <td><?php echo $value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];?></td>
               <td><?php echo $value['tenant_contact'];?></td>
               <td><?php echo $value['tenant_address'];?></td>
               <td class = "center" style = "text-align:center;">
                <a href = "#edit<?php echo $value ['tenant_id']?>" data-toggle="modal" class="btn btn-success btn-xs"><i class = "fa fa-edit"></i> Update Tenant</a>
              </td>
            </tr> 
            <?php include 'edit_tenant_modal.php';?>
            
            
            <?php }?>


          </tbody>
        </table>
      </div>
      <!-- /.table-responsive -->
    </div>    <!-- /.panel-body -->
  </div><script>
 $(document).ready(function() {
  $('#data').DataTable({
   responsive: true
 });
});   
 $(document).ready(function() {
  $("#txtboxToFilter").keydown(function (e) {
             // Allow: backspace, delete, tab, escape, enter and .
             if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
             (e.keyCode == 65 && e.ctrlKey === true) ||
             // Allow: Ctrl+C
             (e.keyCode == 67 && e.ctrlKey === true) ||
             // Allow: Ctrl+X
             (e.keyCode == 88 && e.ctrlKey === true) ||
             // Allow: home, end, left, right
             (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
               return;
             }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
          e.preventDefault();
        }
      });
});                
</script>