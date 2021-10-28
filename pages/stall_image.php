<div class="modal fade"  id="stall_image<?php echo $value['stall_id']?>" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong><h4 class="modal-title">Stall <?php echo $value['stall_number']; ?> Image</h4></strong>
      </div>
      <div class="modal-body">
        <img src="<?php echo '../pictures/'.$value['file']; ?>" height="270px" width="550px" style="margin-left:2%" >
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->