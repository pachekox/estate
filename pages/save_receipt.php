<?php    
include 'dbcon.php';

if (isset($_POST["id"])) { 
	$receipt_id = $_POST['ids']; 
	$charges = $_POST['charges'];
	$tenant = $_POST['id'];
	$or_number = $_POST['or_number'];
	$previous_amount = $_POST['previous_amount'];
	$result = $_POST['result'];
	$consumption = $_POST['consumption'];
	
	$query = $conn->prepare("UPDATE receipt SET charges = ? WHERE id = ? "); 
	$query->execute(array($charges,$tenant)); 

	$date = date('F d, Y');

	$dmonth = date('F');
	$dyear = date('Y');

	$add = $conn->prepare("INSERT INTO receipt_date (id,tenant_id,receipt_charges,date,or_number,previous_amount,result,consumption,r_month,r_year) VALUES (?,?,?,?,?,?,?,?,?,?)");
	$add->execute(array($receipt_id,$tenant,$charges,$date,$or_number,$previous_amount,$result,$consumption,$dmonth,$dyear));
	
	$add4 = $conn->prepare("INSERT INTO logs(date,result,tenant_id,action) VALUES (?,?,?,?)");
	$add4->execute(array($date,$result,$tenant,6));
}
header ('location:elecbills.php');


?>