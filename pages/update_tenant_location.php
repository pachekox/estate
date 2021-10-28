<?php    
include 'dbcon.php';			
$id = $_POST['tenant_id'];
			// $tenant_fname = $_POST['tenant_fname'];
			// $tenant_mname = $_POST['tenant_mname'];
			// $tenant_lname = $_POST['tenant_lname'];
			// $tenant_address = $_POST['tenant_address'];
			// $tenant_contact = $_POST['tenant_contact'];				
$stall_id = $_POST['stall_id'];
			// $stall_name = $_POST['stall_name'];
			// $stall_category = $_POST['stall_category'];
			// $meter_number = $_POST['meter_number'];	
$stall_current = $_POST['stall_current'];	
$tenant_status = 'Rented';	
$previous_stall = $_POST['previous_stall'];
$previous_stall_floor = $_POST['previous_stall_floor'];	


$query = $conn->prepare("UPDATE tenant SET stall_id= ? WHERE tenant_id = ? ");
$query->execute(array($stall_id,$id));
$count = $query->rowCount();

if($count > 0){
	$q1 = $conn->prepare("UPDATE rent SET rent_status = ? WHERE tenant_id = ?");
	$q1->execute(array(0,$id));

	$q2 = $conn->prepare("INSERT INTO rent (tenant_id,stall_id,rent_status) VALUES (?,?,?) ");
	$q2->execute(array($id,$stall_id,1));

	$date = date('F d, Y');

	$stall_rate1 = $_POST['stall_rate1'];
	$current_stall = $_POST['current_stall'];

	$add5 = $conn->prepare("INSERT INTO change_location(date,tenant_id,previous_stall,current_stall,stall_rate1,previous_stall_floor) VALUES (?,?,?,?,?,?)");
	$add5->execute(array($date,$id,$previous_stall,$stall_id,$stall_rate1,$previous_stall_floor));
}

			// $add1 = $conn->prepare("UPDATE stall SET stall_status = ? WHERE stall_id = ?
			// ");
			// $add1->execute(array('Occupied',$stall_id));
header ('location:tenants_location.php');
?>
