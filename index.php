<?php include 'header.php';?>
<style type="text/css">
	html{
		min-height: 100%;
	}
	body{
		background-image: url('bglog.jpg');
		background-repeat: no-repeat;
		background-size: cover;
	}
	.container { opacity: 0.9;
    filter: alpha(opacity=98); }
    .btn 
    {
    	background-color: #429BD8;
    	 border: none;
   }
    a:hover
    {
     background: #429BD8;
	}

</style>
<body>
<div class="container">
	<div class = "row">
	</div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title panel-style"><i class = "fa fa-key"></i> Admin Sign In </h3>
                    </div>
                    <div class="panel-body">
					<form method="POST" id="login_form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>                                
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
									
									<div id="error">
										<h4 class="red smaller lighter">Login Failed</h4	>
									Please Check your username and password
									</div>
                        </form>
                        <script>
						jQuery(document).ready(function(){
						$('#error').hide()
						$('#correct').hide()
						jQuery("#login_form").submit(function(e){
								e.preventDefault();
								var formData = jQuery(this).serialize();
								$.ajax({
									type: "POST",
									url: "login.php",
									data: formData,
									success: function(html){
									if(html=='True')
									{
										$('#error').hide();
										$("#correct").slideDown();
										var delay = 2000;
										setTimeout(function(){	window.location = 'pages/directory.php';}, delay);  
									}else{
									$('#error').slideDown();	
										var delay = 3000;
										setTimeout(function(){	$('#error').slideUp();  }, delay);  
									}
									}
								});
									return false;
						});
						});
						</script>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <?php include 'script-footer.php';?>
</body>
</html>



