<?php

include 'dbcon.php';
		$id = $_GET['id'];
		$sql = "DELETE FROM tenant WHERE tenant_id = '$id'";
		$delete = $conn->prepare($sql);
		//$delete->bindParam(':tenant_id', $_GET['tenant_id'], PDO::PARAM_INT);   
		$delete->execute();
		header ('location:tenants.php');

?>