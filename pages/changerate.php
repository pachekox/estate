<?php    
include 'dbcon.php';			

			$elec_rate = $_POST['elec_rate'];
				
			$query = $conn->prepare("UPDATE rate SET elec_rate = ?");
			$query->execute(array($elec_rate));
			$count = $query->rowCount();

			$date = date('F d, Y');

			$add4 = $conn->prepare("INSERT INTO logs(date,rate,action) VALUES (?,?,?)");
			$add4->execute(array($date,$elec_rate,7));

			header ('location:elecbills.php');
?>
