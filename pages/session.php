

<?php

include '../class.php';
//Start session
session_start();
if (!isset($_SESSION['id']) || ($_SESSION['id'] == '')) {
?>
	<script>window.location = '../index.php'; </script>
<?php } ?>
<?php 

$session_id = $_SESSION['id'];
$id = $_SESSION['id'];
$row = $system->selected_user($session_id);
$user_name = $row['username'];
?>