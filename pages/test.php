     <?php include('nav_top.php'); ?>	
	<div class="hr hr-double hr-dotted hr10"></div>
<?php 
		$form = 'student';
?>
<script>
 jQuery(document).ready(function(){
	$('#messsage').modal('hide'); 
	$('body').removeClass('modal-open');
	$('.modal-backdrop').remove();
	$('body').removeAttr('style');
});	 
</script>
				<?php include('breadcrums.php'); ?>
				<div class="page-content">
					<div class="page-header position-relative">
						<h1>Student List <?php echo $semester; ?> Semester SY: <?php echo $sy; ?></h1>
					</div>
							<div class="row-fluid">

									<div class="span12">
									
								<?php include('delete_actions.php'); ?>	
								<form method="POST" id="table_form">
								<input type="hidden" name="action" value="delete_student">
								<p>
								<a href="page.php?page=add_student"  class="btn btn-info btn-small"><i class="icon-plus"></i>Add Student</a>
								|
								<a href="#delete" data-toggle="modal" class="btn btn-danger btn-small"><i class="icon-trash"></i>Delete</a>
								|
								<a href="student_report.php" target="_blank" class="btn btn-info btn-small"><i class="icon-print"></i>Print</a>
								<p/>
								<?php include('delete_modal.php'); ?>
								<table id="data_table" class="table table-condensed table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th width="5%" class="center">
												<label>
													<input type="checkbox" />
													<span class="lbl"></span>
												</label>
											</th>
											<th width="8%">ID Number</th>
											<th>Name</th>
											<th>Company</th>
											<th>Email</th>
											<th>Contact No</th>
											<th>CY & S</th>
											
											<th>Photo</th>
											<th>Status</th>
											<th width="10%"></th>
										</tr>
									</thead>
									<tbody>
										<?php 
											foreach($system->student_list($ojt_batch_id) as $row){
											$id = $row['student_id'];
										?>
										<tr>
											<td class="center">
												<label>
													<input type="checkbox" name="id[]" value="<?php echo $id; ?>"/>
													<span class="lbl"></span>
												</label>
											</td>
								
											<td class="center"><?php echo $row['id_number']; ?></td>
											<td class="center">
												<?php echo $row['firstname']; ?> <?php echo $row['middlename']; ?> <?php echo $row['lastname']; ?>
											<hr class="hr">
											Username : <?php echo $row['username']; ?>
											<hr class="hr">
											Password : <?php echo $row['password']; ?>
											
											</td>
											<td>
												<?php $row1 = $system->student_company($id); ?>
												<?php if($row1['name'] != ''){ ?>
													<?php echo $row1['name']; ?>
												<?php }else{ ?>	
													<span class="label label-important arrowed-in">None </span>
												<?php } ?>
											</td>
											<td><?php echo $row['email']; ?></td>
											<td><?php echo $row['contact_no']; ?></td>
											<td><?php echo $row['cys']; ?></td>
										
											<td class="center">
												<?php if($row['photo'] == ''){ ?>	
													<img class="img-polaroid table_picture" src="img/no.jpg" >
												<?php }else{ ?>
													<img class="img-polaroid table_picture" src="uploads/<?php echo $row['photo']; ?>">
												<?php } ?>	
												<hr class="hr">
												<a href="#edit_file<?php echo $id; ?>" data-toggle="modal"><i class="fa fa-photo"></i> Change Picture</a>
											</td>
											<td>
											<?php if($row['status'] == 'Active'){ ?>
												<span class="label label-success arrowed-in"><?php echo $row['status']; ?></span>
											<?php }else if($row['status'] == 'Inactive'){ ?>
												<span class="label label-important arrowed-in"><?php echo $row['status']; ?></span>
											<?php } ?>
											</td>
											<td class="td-actions center">
												<a href="page.php?page=edit_students&id=<?php echo $id; ?>" class="green"><i class="icon-edit bigger-130"></i> Edit</a> 
												<hr class="hr">
												<a href="#skills<?php echo $id; ?>" data-toggle="modal" class="blue"><i class="icon-list"></i> View Skills</a>
												<hr class="hr">					
												<a href="#edit<?php echo $id; ?>" data-toggle="modal" class="blue"><i class="fa fa-status"></i>  Change Status</a>		
												<hr class="hr">		
												<a href="page.php?page=student_dtr&id=<?php echo $id; ?>" class="yellow">  View DTR <i class="fa fa-arrow-right"></i> </a>														
											</td>
										</tr>
										<?php include('skills_modal.php'); ?>
										<?php } ?>
									</tbody>
								</table>
								</form>	
						<?php echo $form; ?>		
										<?php 
											foreach($system->student_list($ojt_batch_id) as $row){
											$id = $row['student_id'];
											include('edit_file_modal.php');
											}
										?>
										<?php 
											foreach($system->student_list($ojt_batch_id) as $row){
											$id = $row['student_id'];
											include('edit_form_modal.php');
											}
										?>
			
									</div>
								</div>
				</div>
				<?php include('data_table_script.php'); ?>			
				
				
		<script type="text/javascript">
			$(function() {

				
				$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				
			
			});
		</script>