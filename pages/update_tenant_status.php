<?php 

	include ('dbcon.php');

	$stat = $_POST['tenant_status'];
	$date = date('F d, Y');
	$id = $_POST['tenant_id'];

	$sql = $conn->prepare("UPDATE tenant_status SET date_ended = ?, tenant_status = ? WHERE tenant_id = ?");
	$sql->execute(array($date,$stat,$id));
	$count = $sql->rowCount();

	if ($count > 0){
		$q1 = $conn->prepare("UPDATE rent SET rent_status = ? WHERE tenant_id = ?");
		$q1->execute(array($stat,$id));

		$date = date('F d, Y');

		$add4 = $conn->prepare("INSERT INTO logs(date,tenant_id,action) VALUES (?,?,?)");
		$add4->execute(array($date,$id,3));
	}
	header ('location:tenants.php');
?>