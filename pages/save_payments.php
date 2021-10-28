<?php
include 'dbcon.php';

if (isset($_POST["tenant_id"])) { 
	$tenant_id = $_POST['tenant_id']; 
	$month_first = $_POST['month_first'];
	$month_second = $_POST['month_second'];
	$payment = $_POST['payment'];
	$or_number = $_POST['or_number'];
	$date = date('F d, Y');

	$add = $conn->prepare("INSERT INTO payments (tenant_id,payment,month_first,month_second,or_number,date) VALUES (?,?,?,?,?,?)");
	$add->execute(array($tenant_id,$payment,$month_first,$month_second,$or_number,$date));

	$add4 = $conn->prepare("INSERT INTO logs(date,payment,tenant_id,action) VALUES (?,?,?,?)");
	$add4->execute(array($date,$payment,$tenant_id,5));
}

header ('location:payments.php');

?>