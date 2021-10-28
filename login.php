<?php
		include('dbcon.php');
		//include('class.php');
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];
		//$user_type = $_POST['user_type'];/

		$query = $conn->prepare("SELECT * FROM user WHERE username =  ?  AND password = ? ");
		$query->execute(array($username,$password));
		$count = $query->rowcount();
		$row = $query->fetch();	

		if($count > 0){
		$_SESSION['id'] = $row['user_id'];
			echo 'True';
		}else{
			echo 'False';
		}
?>