<?php

include ('dbcon.php');

$a = $_POST['password'];
$b = $_POST['id'];

$sql = "UPDATE user SET password = ? WHERE user_id = ?";
$query = $conn->prepare($sql);
$query->execute(array($a, $b));

echo $query->rowCount() > 0 ? 1 : 0;
?>