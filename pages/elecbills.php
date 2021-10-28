<?php include 'header.php';?>
<body>
 <div id="wrapper">
  <!-- Navigation -->
  <?php include 'navbar.php';?>
  <div id="page-wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header"> Electricity Readings <button class="btn btn-primary btn-md pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-"></i>
          Change Electricity Rate
        </button></h1>
      </div>
      <?php include 'rate_modal.php';?>
      <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            Electricity Readings of Tenants
          </div>
          <!-- /.panel-heading -->  
          <div class="panel-body">
            <div class="dataTable_wrapper">
              <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                  <tr>
                    <th class="hidden"></th>
                    <th>Tenant</th>
                    <th>Stall Code</th>
                    <th>Previous Readings</th>
                    <th>Receipt</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql = "SELECT * FROM tenant 
                  LEFT JOIN stall ON stall.stall_id = tenant.stall_id
                  LEFT JOIN rent ON rent.tenant_id = tenant.tenant_id
                  LEFT JOIN receipt ON receipt.tenant_id = tenant.tenant_id
                  LEFT JOIN rate ON rate.rate_id = tenant.rate_id
                  WHERE rent.rent_status = ? AND rate.rate_id = ?
                  ";
                  $query = $conn->prepare($sql);
                  $query->execute(array(1,1));
                  $fetch = $query->fetchAll();

                  foreach ($fetch as $key => $value) { ?>
                  <tr>
                   <td class="hidden"><?=$value['tenant_id'];?></td>
                   <td><?=$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];?></td>
                   <td><?=$value['stall_number']."(".$value['stall_floor'];?>)</td>
                   <td><?=$value['charges'];?></td>
                   <td class = "center" style = "text-align:center;">
                     <button class="btn btn-outline btn-xs btn-primary create_receipt" data-id = '<?php echo $value['tenant_id'];?>'> Make Receipt
                     </button>
                   </td>
                 </tr>	
                 <!-- <?php ;?>			   -->
                 <?php }?>

               </tbody>

             </table>
           </div>
           <!-- /.table-responsive -->
         </div>
         <!-- /.panel-body -->
       </div>
       <!-- /.panel -->
     </div>
     <!-- /.col-lg-12 -->
   </div>
 </div>
 <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

<!-- jQuery -->
<!-- <style>
  .modal-body
    {
        background-image: url('img/123.png');
        background-repeat: no-repeat;
        background-size: cover;
        background-position :center center !important;
    }
  </style> -->

  <div class="modal fade receipt_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <!-- <h4 class="modal-title">Modal title</h4> -->
        </div>
        <div class="modal-body" style = "">
          <img src="img/logos.jpg" style="width: 125px;
          top: 0px;
          left: 19px;
          height: 130px;
          position: absolute;">
          <form  action="save_receipt.php" method="POST">
            <input type = "hidden" class="form-control" name= "id" value = "<?php echo $value['tenant_id'];?>">
            <input type = "hidden" class="form-control" name= "ids" value = "<?php echo $value['id'];?>">
            <h4 class="modal-title text-center" id="myModalLabel">
              <strong>
                Republic of the Philippines
                <br>
                Province of Negros Occidental
              </strong>
            </h4>
            <h4 class ="text-center">
              <em>
                City of Victorias
              </em>
            </h4>
            <h4 class="text-center">
              <strong>
                Office of the Market Supervisor
              </strong>
            </h4>

            <div class="form-group">
              <!-- <label class="col-sm-3 control-label">Name :</label> -->
              <label class="col-sm-12 tenant_name control-label"></label>
            </div>
            <div class="form-group">
              <!-- <label class="col-sm-3 control-label"></label> -->
              <label class="col-sm-12 stallfloor control-label"></label>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">SUBJECT</label>
              : FOR PAYMENT OF ELECTRICAL CONSUMPTION FOR THE <br>&nbsp;&nbsp;&nbsp;&nbsp;PERIOD FROM
              <input class = "datepick custom-input1" required></input>
              TO 
              <input class = "datepick custom-input1" required></input>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">OR NUMBER </label>: <input class = "custom-input" name="or_number" required></input> 
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">METER NUMBER </label>: <input class = "custom-input" name="meternumber" readonly ></input> 
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">ELECTRIC RATE </label>:&#8369;<input class = "custom-input" name="electric_rate" id= "rate" readonly ></input> 
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">PRESENT </label>: <input class = "custom-input" name="charges" required></input> 
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">PREVIOUS </label>: <input name="previous_amount" class = "custom-input"  id = "previous" readonly> </input> 
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">TOTAL CONSUMPTION</label>:
              <input type="text" name="consumption" class = "custom-input" type="" id="result1" readonly>
            </div>
            <div class="form-group">
              <label class="col-sm-4 control-label">AMOUNT </label>:&#8369;<input type="text" name="result" class = "custom-input"  id="result" readonly>
            </div><br>                
            <div class="form-group">
              <p class="text-right">APPROVED BY: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <br>
                <br>
                LUDAISY B. FERNANDEZ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                MARKET SUPERVISOR III&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </p>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default close-modal" data-dismiss="modal">Close</button>
            <button onclick="myFunction()" class="btn btn-primary" type="submit">Print Receipt</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="../js/jquery.js"></script>

  <script src="../bower_components/jquery/dist/jquery.min.js"></script>
  <script src="../js/bootstrap-datepicker.min.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Metis Menu Plugin JavaScript -->
  <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>
  <!-- DataTables JavaScript -->
  <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
  <script src="../bower_components/datatables-responsive/js/dataTables.responsive.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src="../dist/js/sb-admin-2.js"></script>
  <!-- Page-Level Demo Scripts - Tables - Use for reference -->
  <script>
    $(document).ready(function() {
      $('#dataTables-example').DataTable({
        responsive: true
      });
    });
    $('.datepick').datepicker({
    });
  </script>
  <script type="text/javascript">
    $('.create_receipt').click(function(e){
      e.preventDefault();
      var id = $(this).attr('data-id');
      $('.receipt_modal').modal('show');
      $('input[name="id"]').val(id);

      $.ajax({
        type: "POST",
        url: "class.php",
        data: {
          key: 'add_receipt',
          id: id
        }
      })
      .done(function(data){
        var newdata = data.split('/');
        $('.tenant_name').text(newdata[0]);
        $('input[name="meternumber"]').val(newdata[1]);
        $('input[name="electric_rate"]').val(newdata[2]);
        $('input[name="previous_amount"]').val(newdata[3]);
        $('.stallfloor').text(newdata[4]);
        
        
      });

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
        $('input[name="charges"]').val('');
      }); 

    });

    function myFunction() {
      window.print();
    }
  </script>
</body>

</html>