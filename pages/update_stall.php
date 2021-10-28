<?php    
include 'dbcon.php';
			
			$id = $_POST['stall_id'];
			$stall_rate = $_POST['stall_rate'];
			$stall_elec_read = $_POST['stall_elec_read'];
			$stall_size = $_POST['stall_size'];
	
			$query = $conn->prepare("UPDATE stall SET stall_rate = ? , stall_elec_read = ? , stall_size = ? WHERE stall_id = ? ");
			$query->execute(array($stall_rate,$stall_elec_read,$stall_size,$id));

			$date = date('F d, Y');

			$add4 = $conn->prepare("INSERT INTO logs(date,stall_id,action) VALUES (?,?,?)");
			$add4->execute(array($date,$id,4));

			header ('location:stalls.php');
?>
 