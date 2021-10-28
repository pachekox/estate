<?php    
include 'dbcon.php';			
			$id = $_POST['tenant_id'];
			$tenant_fname = $_POST['tenant_fname'];
			$tenant_mname = $_POST['tenant_mname'];
			$tenant_lname = $_POST['tenant_lname'];
			$tenant_address = $_POST['tenant_address'];
			$tenant_contact = $_POST['tenant_contact'];				
			$stall_id = $_POST['stall_id'];
			$stall_name = $_POST['stall_name'];
			$stall_category = $_POST['stall_category'];
			$meter_number = $_POST['meter_number'];	
			// $stall_current = $_POST['stall_current'];	
			$tenant_status = 'Rented';	
			// $stall_num = $_POST['stall_num'];	
			
	
			$query = $conn->prepare("UPDATE tenant SET tenant_fname = ? ,tenant_mname = ?,tenant_lname = ?,tenant_address = ?,tenant_contact = ?, stall_name = ?,stall_category = ?,meter_number = ? WHERE tenant_id = ? ");
			$query->execute(array($tenant_fname,$tenant_mname,$tenant_lname,$tenant_address,$tenant_contact,$stall_name,$stall_category,$meter_number,$id));
			$count = $query->rowCount();

			if($count > 0){
				$q1 = $conn->prepare("UPDATE rent SET rent_status = ? WHERE tenant_id = ?");
				$q1->execute(array(0,$id));

				$q2 = $conn->prepare("INSERT INTO rent (tenant_id,stall_id,rent_status) VALUES (?,?,?) ");
				$q2->execute(array($id,$stall_id,1));

				$date = date('F d, Y');

				$add4 = $conn->prepare("INSERT INTO logs(date,stall_id,tenant_id,action) VALUES (?,?,?,?)");
				$add4->execute(array($date,$stall_id,$id,2));

				// $add5 = $conn->prepare("INSERT INTO change_location(date,tenant_id) VALUES (?,?)");
				// $add5->execute(array($date,$id));
			}
			
			// $add1 = $conn->prepare("UPDATE stall SET stall_status = ? WHERE stall_id = ?
			// ");
			// $add1->execute(array('Occupied',$stall_id));
			header ('location:tenants.php');
?>
