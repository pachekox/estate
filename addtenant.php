<?php
include ('dbcon.php');

if (isset($_POST['add'])){
	$tenant_fname = $_POST['tenant_fname'];
	$tenant_mname = $_POST['tenant_mname'];
	$tenant_lname = $_POST['tenant_lname'];
	$tenant_address = $_POST['tenant_address'];
	$tenant_contact = $_POST['tenant_contact'];
	$stall_id = $_POST['stall_id'];
	$stall_name = $_POST['stall_name'];	
	$stall_category = $_POST['stall_category'];
	$meter_number = $_POST['meter_number'];

	$q1 = $conn->prepare("SELECT * FROM tenant WHERE stall_id = ? ");
	$q1->execute(array($stall_id));
	$c = $q1->rowCount();

	// if (!$stall_id){
	// header('location:pages/tenants.php');
	// }else{

	// if ($c > 0){
	// 	header('location:pages/tenants.php');
	// }else{

		$add = $conn->prepare("INSERT INTO tenant (rate_id,tenant_fname, tenant_mname, tenant_lname, tenant_address, tenant_contact, stall_id, stall_name, stall_category, meter_number)
			VALUES (?,?,?,?,?,?,?,?,?,?) ");
		$add->execute(array(1,$tenant_fname,$tenant_mname,$tenant_lname,$tenant_address,$tenant_contact,$stall_id,$stall_name,$stall_category,$meter_number));
		
		$count = $add->rowCount();
		$tenant_id = $conn->lastInsertId();
		$date_today = date('F d, Y');

		if ($count > 0){
			$add1 = $conn->prepare("INSERT INTO tenant_status (tenant_id, date_started, date_ended, tenant_status) VALUES(?,?,?,?) ");
			$add1->execute(array($tenant_id,$date_today,0,1));

			$add2 = $conn->prepare("INSERT INTO rent (tenant_id,stall_id,rent_status) VALUES (?,?,?)");
			$add2->execute(array($tenant_id,$stall_id,1));
			
			$add3 = $conn->prepare("INSERT INTO receipt(tenant_id) VALUES (?)");
			$add3->execute(array($tenant_id));

			$date = date('F d, Y');

			$add4 = $conn->prepare("INSERT INTO logs(tenant_id,stall_id,action,date) VALUES (?,?,?,?)");
			$add4->execute(array($tenant_id,$stall_id,1,$date));
		 	
		}
		header('location:pages/tenants.php');
		// }
		// }

}
?>