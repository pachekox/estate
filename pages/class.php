<?php
	include 'dbcon.php';

	/**
	* 
	*/
	class view
	{
		
		public function add_receipt($id)
		{
			global $conn;
			$sql = $conn->prepare('	SELECT * FROM tenant 
									LEFT JOIN stall ON stall.stall_id = tenant.stall_id
									LEFT JOIN rent ON rent.tenant_id = tenant.tenant_id
									LEFT JOIN receipt ON receipt.tenant_id = tenant.tenant_id
									LEFT JOIN rate ON rate.rate_id = tenant.rate_id
									WHERE rent.rent_status = ? AND rate.rate_id = ? AND tenant.tenant_id = ?');
			$sql->execute(array(1,1,$id));
			$count = $sql->rowCount();
			$fetch = $sql->fetch();
			if($count > 0){
				echo 'TENANT : '.$fetch['tenant_fname'].' '.$fetch['tenant_mname']." ".$fetch['tenant_lname'].'/'.
					$fetch['meter_number'].'/'.
					$fetch['elec_rate'].'/'.
					$fetch['charges'].'/'.
					'LOCATION : Stall Code ' .$fetch['stall_number']."(".$fetch['stall_floor'].")";
			}else{
				echo '0';
			}
		}
	}

	$myview = new view();

	$key = $_POST['key'];

	switch ($key) {

		case 'add_receipt':
		$id = $_POST['id'];
		$myview->add_receipt($id);
		break;
		
	}
?>