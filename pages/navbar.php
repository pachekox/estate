
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
 <div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
   <span class="sr-only">Toggle navigation</span>
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
   <span class="icon-bar"></span>
 </button>
 <a class="navbar-brand" href="directory.php"> <img src="img/title.png" class="pans headerdisplay" style="width: 800px;
  top: 0px;
  left: 0px;
  height: 50px;
  position: absolute;"></a>
</div>
<!-- /.navbar-header -->

<ul class="nav navbar-top-links navbar-right">

  <!-- /.dropdown -->
  <li class="dropdown">
   <a class="dropdown-toggle" data-toggle="dropdown" href="#">
    <i class="fa fa-user fa-fw"></i><i class="fa fa-caret-down"></i>
  </a>
  <ul class="dropdown-menu dropdown-user">
    <li><a href="javascript:;" data-toggle="modal" data-target="#change_pass">
      <i class="fa fa-edit fa-fw"></i> Edit Password
    </a>
  </li>
  <li class="divider"></li>
  <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
  </li>
</ul>
<!-- /.dropdown-user -->
</li>
<!-- /.dropdown -->
</ul>
<!-- /.navbar-top-links -->

<?php include 'sidebar.php';?>
<!-- /.navbar-static-side -->
</nav>

<div class="modal fade" id="change_pass" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form method="post" action="change_password.php" name="cpass">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Change password</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <input class="form-control" type="password" name="current" placeholder="Type your current password">
              </div>
              <div class="form-group">
                <input class="form-control" type="password" name="new" placeholder="Type your new password">
              </div>
              <div class="form-group">
                <input class="form-control" type="password" name="confirm" placeholder="Confirm your new password">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <span style="float: left" class="err_msg"></span>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</script>
<?php 
$qu = $conn->prepare("SELECT * FROM user");
$qu->execute();
$fet = $qu->fetch();
$pass = $fet['password'];
?>
<script type="text/javascript">
  jQuery(function(){
   $('form[name="cpass"]').on('submit', function(e){
    e.preventDefault();
    var curr = '<?php echo $pass; ?>';
    var i_cur = $(this).find('input[name="current"]').val();
    var i_new = $(this).find('input[name="new"]').val();
    var i_conf = $(this).find('input[name="confirm"]').val();
    var session_id = '<?php echo $session_id; ?>';
    
    if (i_cur === curr){
     if(i_new !== i_conf){
      $(this).find('input[name="new"]').val('').focus();
      $(this).find('input[name="confirm"]').val('');
      $(this).find('span.err_msg').html('Passwords do not match');
    }else{
      $.ajax({
       type: 'POST',
       url: $(this).attr('action'),
       data: {password: i_new, id: session_id},
       beforeSend: function(){
        $('form[name="cpass"]').find('button.btn-primary').prop('disabled', true);
      }
    })
      .done(function(data){
       if (data == 1){
         $('form[name="cpass"]').find('span.err_msg').html('Password successfully updated');
         setTimeout(function(){
           location.reload();
         }, 3000);
       }else{
        $('form[name="cpass"]').find('span.err_msg').html('An error occured');
        setTimeout(function(){
         location.reload();
       }, 3000);
      }
    });
    }
  }else{
    $(this).find('input[name="current"]').val('').focus();
    $(this).find('span.err_msg').html('Please enter your current password');
  }
})
 });
</script>