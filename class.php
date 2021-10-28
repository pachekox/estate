<?php 
include('dbcon.php'); 
class system_class{
	/* compant student request */
	
		public function grant_company_student_request($POST){
			global $conn;
			$id = $POST['id'];
			$request_status = $POST['request_status'];
			$query = $conn->prepare("UPDATE company_student_request SET request_status = ? WHERE company_request_student_id = ? ");
			$query->execute(array($request_status,$id));
		}
		public function company_student_request($POST){
			global $conn;
			$student_id = $POST['student_id'];
			$company_id = $POST['company_id'];
			$request_status = $POST['request_status'];
			$query = $conn->prepare("INSERT INTO company_student_request (student_id,company_id,request_status) VALUES(?,?,?)");
			$query->execute(array($student_id,$company_id,$request_status));
		}
	/* end  company student request */
	/*  student time */
		public function student_time_list($id){
			global $conn;
			$query = $conn->query("SELECT * FROM student_time WHERE student_id = '$id' ORDER by date_in ASC");
			return $query->fetchAll();
		}
		public function delete_student_time($id){
			global $conn;
			foreach($id as $id){
				$query = $conn->prepare("DELETE FROM student_time WHERE student_time_id = '$id' ");
				$query->execute();
			}
		}
		public function update_student_time($POST){
			global $conn;
			$id = $POST['id'];
			$date_in = $POST['date_in'];
			$time_in_am = date("H:i", strtotime($POST['time_in_am']));
			$time_out_am = date("H:i", strtotime($POST['time_out_am']));
			$time_in_pm =  date("H:i", strtotime($POST['time_in_pm']));
			$time_out_pm =  date("H:i", strtotime($POST['time_out_pm']));
			$student_id = $POST['student_id']; 
	
			$query = $conn->prepare("UPDATE student_time SET date_in = ? ,time_in_am = ?,time_out_am = ?,time_in_pm = ?,time_out_pm = ? WHERE student_time_id = ? ");
			$query->execute(array($date_in,$time_in_am,$time_out_am,$time_in_pm,$time_out_pm,$id));
		}
		public function add_student_time($POST){
			global $conn;
			$date_in = $POST['date_in'];
			$time_in_am = date("H:i", strtotime($POST['time_in_am']));
			$time_out_am = date("H:i", strtotime($POST['time_out_am']));
			$time_in_pm =  date("H:i", strtotime($POST['time_in_pm']));
			$time_out_pm =  date("H:i", strtotime($POST['time_out_pm']));
			$student_id = $POST['student_id']; 
	
			$query = $conn->prepare("INSERT INTO student_time (date_in,time_in_am,time_out_am,time_in_pm,time_out_pm,student_id) VALUE(?,?,?,?,?,?)");
			$query->execute(array($date_in,$time_in_am,$time_out_am,$time_in_pm,$time_out_pm,$student_id));
		}
	/*  */
		public function official_list(){
			global $conn;
			$query = $conn->query("SELECT * FROM official LEFT JOIN position ON position.position_id = official.position_id");
			return $query->fetchAll();
		}
		public function update_official($POST){
			global $conn;
			$name = $POST['name'];
			$position_id = $POST['position_id'];
			$id = $POST['id'];
			$query = $conn->prepare("UPDATE official SET name = ? , position_id = ? WHERE official_id = ?");
			$query->execute(array($name,$position_id,$id));
		}
		public function add_official($POST){
			global $conn;
			$name = $POST['name'];
			$position_id = $POST['position_id'];
			$rd2 = mt_rand(1000, 9999);
			$filename = basename($_FILES['file']['name']);
			$ext = substr($filename, strrpos($filename, '.') + 1);
			$file = $rd2. "_" .$filename;
			(move_uploaded_file($_FILES['file']['tmp_name'],'uploads/'.$file));
			
			$query = $conn->prepare("INSERT INTO official (name,position_id,photo) VALUES(?,?,?)");
			$query->execute(array($name,$position_id,$file));
		}
		public function delete_official($id){
			global $conn;
			foreach($id as $id){
				$row = $this->selected_official($id);
				unlink('uploads/'.$row['photo']);
				$query = $conn->prepare("DELETE FROM official WHERE official_id = '$id' ");
				$query->execute();
			}
		}
		public function selected_official($id){
			global $conn;
			$query = $conn->query("SELECT * FROM official WHERE official_id = '$id' ");
			return $query->fetch();
		}
		public function update_official_photo($POST){
			global $conn;
			$id = $POST['id'];
			$rd2 = mt_rand(1000, 9999);
			$filename = basename($_FILES['file']['name']);
			$ext = substr($filename, strrpos($filename, '.') + 1);
			$file = $rd2. "_" .$filename;
			(move_uploaded_file($_FILES['file']['tmp_name'],'uploads/'.$file));
			
			$row = $this->selected_official($id);
			unlink('uploads/'.$row['photo']);
				
			$query = $conn->prepare("UPDATE official SET photo = ?   WHERE official_id = ? ");
			$query->execute(array($file,$id));
		}
	/* end  official */
	
	/* user  */
		public function selected_user($id){
			global $conn;
			$query = $conn->prepare("SELECT * FROM user WHERE user_id  = '$id' ");
			$query->execute();
			$data = $query->fetch();
			return $data;

		}
		
		public function user_list(){
			global $conn;
			$query = $conn->prepare("SELECT * FROM user");
			$query->execute();
			return $query->fetchAll();
		}
		public function add_user($POST){
			global $conn;
			$name = $_POST['name'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$query = $conn->prepare("INSERT INTO user (name,username,password) VALUES(?,?,?) ");
			$query->execute(array($name,$username,$password));
		}
		public function update_user($POST){
			global $conn;
			$id = $_POST['id'];
			$name = $_POST['name'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$query = $conn->prepare("UPDATE user SET  name = ? , username = ? , password = ?  WHERE user_id = ? ");
			$query->execute(array($name,$username,$password,$id));
		}
		public function delete_user($id){
			global $conn;
			foreach($id as $id){
			$query = $conn->prepare("DELETE FROM user WHERE user_id = '$id' ");
			$query->execute();
			}
		}
	/* end user  */
	
	/* ojt_batch  */
		public function current_ojt_batch(){
			global $conn;
			$query = $conn->prepare("SELECT * FROM ojt_batch WHERE current = 'YES'");
			$query->execute();
			return $query->fetch();
		}
		public function ojt_batch_list(){
			global $conn;
			$query = $conn->prepare("SELECT * FROM ojt_batch");
			$query->execute();
			return $query->fetchAll();
		}
		public function add_ojt_batch($POST){
			global $conn;
			$no_of_hours = $POST['no_of_hours'];
			$semester = $POST['semester'];
			$sy = $POST['sy'];
			$query = $conn->prepare("INSERT INTO ojt_batch (semester,sy,current,no_of_hours) VALUES(?,?,?,?) ");
			$query->execute(array($semester,$sy,'NO',$no_of_hours));
		}
		public function update_ojt_batch($POST){
			global $conn;
			$id = $POST['id'];
			$semester = $POST['semester'];
			$sy = $POST['sy'];
			$current = $POST['current'];
			$no_of_hours = $POST['no_of_hours'];
			
			$query = $conn->prepare("UPDATE  ojt_batch  SET semester = ? , sy = ? , current = ? , no_of_hours = ? WHERE ojt_batch_id = ? ");
			$query->execute(array($semester,$sy,$current,$no_of_hours,$id));
				
		}
		public function delete_ojt_batch($id){
			global $conn;
			foreach($id as $id){
			$query = $conn->prepare("DELETE FROM ojt_batch WHERE ojt_batch_id = '$id' ");
			$query->execute();
			}
		}
	/* end ojt_batch  */
	
	/* student  */
		public function last_student_log_list($id){
			global $conn;
			$query = $conn->prepare("SELECT * FROM student_log WHERE student_id = '$id' ORDER BY student_log_id ASC ");
			$query->execute();
			return $query->fetch();
		}

		public function student_log_total($id){
			global $conn;
			$query = $conn->prepare("SELECT *
			,TIME_FORMAT(SEC_TO_TIME(sum(TIME_TO_SEC(TIMEDIFF( time_out_am, time_in_am)))), '%H:%i') AS total_hours1
			,TIME_FORMAT(SEC_TO_TIME(sum(TIME_TO_SEC(TIMEDIFF( time_out_pm, time_in_pm)))), '%H:%i') AS total_hours2
			FROM student_time 
			WHERE  student_id = '$id'");
			$query->execute();
			return $row = $query->fetch();
		
		}
		public function student_log_list($id){
			global $conn;
			$query = $conn->prepare("SELECT * FROM student_log WHERE student_id = '$id' ORDER BY student_log_id DESC ");
			$query->execute();
			return $query->fetchAll();
		}
		public function student_count($id){
			global $conn;
			$query = $conn->prepare("SELECT * FROM student WHERE status != 'Pending' AND ojt_batch_id = '$id'  ");
			$query->execute();
			return $query->rowcount();
		}
		public function student_count_pending($id){
			global $conn;
			$query = $conn->prepare("SELECT * FROM student WHERE status = 'Pending' AND ojt_batch_id = '$id' ");
			$query->execute();
			return $query->rowcount();
		}
		public function selected_student($id){
			global $conn;
			$query = $conn->prepare("SELECT * FROM student WHERE student_id  = '$id' ");
			$query->execute();
			return $query->fetch();
		}
		public function student_company($id){
			global $conn;
			$query = $conn->prepare("SELECT * FROM company_student_request 
			LEFT JOIN company ON company.company_id = company_student_request.company_id
			WHERE student_id  = '$id' AND request_status = 'Active' ");
			$query->execute();
			return $query->fetch();
		}
		public function student_list_pending($id){
			global $conn;
			$query = $conn->prepare("SELECT * FROM student WHERE status = 'Pending' AND ojt_batch_id = '$id' ");
			$query->execute();
			return $query->fetchAll();
		}
		public function student_list($id){
			global $conn;
			$query = $conn->prepare("SELECT * FROM student WHERE status != 'Pending' AND ojt_batch_id = '$id' ");
			$query->execute();
			return $query->fetchAll();
		}
		public function company_request_student_id_array($id){
			global $conn;
			$query = $conn->prepare("SELECT * FROM company_student_request WHERE company_id = '$id' ");
			$query->execute();
			$count  = $query->rowcount();
			foreach ($query->fetchAll() as $row) {
					$array[] = $row['student_id'];
				}	
			if($count > 0){	
				return	implode(',', $array);
			}else{
				return 0;
			}
		}
		public function student_with_company_array(){
			global $conn;
			$query = $conn->prepare("SELECT * FROM company_student_request
			LEFT JOIN student ON company_student_request.student_id = student.student_id
			WHERE  request_status = 'Active' ");
			$query->execute();
			$count  = $query->rowcount();
			foreach ($query->fetchAll() as $row) {
					$array[] = $row['student_id'];
				}	
			if($count > 0){	
				return	implode(',', $array);
			}else{
				return 0;
			}
		}	
		public function student_list_for_company_count($id,$student_id,$swc_array_id){
			global $conn;
			$query = $conn->prepare("SELECT * FROM student WHERE 
			status != 'Pending' AND ojt_batch_id = '$id' AND student_id NOT IN ($student_id,$swc_array_id) ");
			$query->execute();
			return $query->rowcount();
		}
		public function student_list_for_company($id,$student_id,$swc_array_id){
			global $conn;
			$query = $conn->prepare("SELECT *,student.student_id as student_student_id FROM student
			LEFT JOIN company_student_request ON student.student_id  = company_student_request.student_id
			WHERE  status != 'Pending' AND ojt_batch_id = '$id' AND student.student_id NOT IN ($student_id,$swc_array_id) ");
			$query->execute();
			return $query->fetchAll();
		}
		public function company_requested_student_count($ojt_batch_id){
			global $conn;
			$query = $conn->prepare("SELECT * FROM student 
			LEFT JOIN company_student_request ON company_student_request.student_id = student.student_id	
			LEFT JOIN company ON company_student_request.company_id = company.company_id
			WHERE ojt_batch_id = '$ojt_batch_id' AND request_status = 'Pending' ");
			$query->execute();
			return $query->rowcount();
		}
		public function company_requested_student_list_all($ojt_batch_id){
			global $conn;
			$query = $conn->prepare("SELECT * FROM student 
			LEFT JOIN company_student_request ON company_student_request.student_id = student.student_id	
			LEFT JOIN company ON company_student_request.company_id = company.company_id
			WHERE ojt_batch_id = '$ojt_batch_id' AND request_status = 'Pending' ");
			$query->execute();
			return $query->fetchAll();
		}
		public function company_requested_student_list($company_id,$ojt_batch_id){
			global $conn;
			$query = $conn->prepare("SELECT * FROM student 
			LEFT JOIN company_student_request ON company_student_request.student_id = student.student_id	
			WHERE ojt_batch_id = '$ojt_batch_id' AND company_id = '$company_id' AND request_status = 'Pending' ");
			$query->execute();
			return $query->fetchAll();
		}
		public function company_requested_student_list_count($company_id,$ojt_batch_id){
			global $conn;
			$query = $conn->prepare("SELECT * FROM student 
			LEFT JOIN company_student_request ON company_student_request.student_id = student.student_id	
			WHERE ojt_batch_id = '$ojt_batch_id' AND company_id = '$company_id' AND request_status = 'Pending' ");
			$query->execute();
			return $query->rowcount();
		}
		public function company_granted_student_list($company_id,$ojt_batch_id){
			global $conn;
			$query = $conn->prepare("SELECT * FROM student 
			LEFT JOIN company_student_request ON company_student_request.student_id = student.student_id	
			WHERE ojt_batch_id = '$ojt_batch_id' AND company_id = '$company_id' AND request_status = 'Active' ");
			$query->execute();
			return $query->fetchAll();
		}
		public function company_granted_student_list_count($company_id,$ojt_batch_id){
			global $conn;
			$query = $conn->prepare("SELECT * FROM student 
			LEFT JOIN company_student_request ON company_student_request.student_id = student.student_id	
			WHERE ojt_batch_id = '$ojt_batch_id' AND company_id = '$company_id' AND request_status = 'Active' ");
			$query->execute();
			return $query->rowcount();
		}
		public function sign_up_student($POST){
				global	$conn;
				$id_number = $_POST['id_number'];
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$middlename = $_POST['middlename'];
				$gender = $_POST['gender'];
				$contact_no = $_POST['contact_no'];
				$email = $_POST['email'];
				$cys = $_POST['cys'];
				$username = $_POST['username'];
				$password = $_POST['password'];
				$c_password = $_POST['c_password'];
				$birthdate = $_POST['birthdate'];
				$ojt_batch_id = $_POST['ojt_batch_id'];
				$status = 'Pending';
				if($password == $c_password){
						$query = $conn->prepare("INSERT INTO student (ojt_batch_id,status,birthdate,id_number,firstname,lastname,middlename,gender,contact_no,email,cys,username,password) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?) ");
						$query->execute(array($ojt_batch_id,$status,$birthdate,$id_number,$firstname,$lastname,$middlename,$gender,$contact_no,$email,$cys,$username,$password));
						$id = $conn->lastinsertID();
						$row = $this->selected_student($id);
						session_start();
						$_SESSION['id'] = $row['student_id'];
						echo 'success';
				}else{
					echo 'password';
				}
	
	}
	/* end  */
		public function add_student($POST){
			global $conn;
			$id_number = $_POST['id_number'];
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$middlename = $_POST['middlename'];
			$gender = $_POST['gender'];
			$contact_no = $_POST['contact_no'];
			$email = $_POST['email'];
			$cys = $_POST['cys'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$birthdate = $_POST['birthdate'];
			$skills = $_POST['skills'];
			$ojt_batch_id = $_POST['ojt_batch_id'];
			$status = 'Active';
			
			$query = $conn->prepare("INSERT INTO student (ojt_batch_id,skills,status,birthdate,id_number,firstname,lastname,middlename,gender,contact_no,email,cys,username,password) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");
			$query->execute(array($ojt_batch_id,$skills,$status,$birthdate,$id_number,$firstname,$lastname,$middlename,$gender,$contact_no,$email,$cys,$username,$password));
		}
		
		public function update_student_status($POST){
			global $conn;
			$id = $POST['id'];
			$status = $POST['status'];
			$query = $conn->prepare("UPDATE student SET status = ?  WHERE student_id = ? ");
			$query->execute(array($status,$id));
		}	
		public function update_student_request($POST){
			global $conn;
			$id = $POST['id'];
			$status = 'Active';
			$query = $conn->prepare("UPDATE student SET status = ?  WHERE student_id = ? ");
			$query->execute(array($status,$id));
		}		
		public function update_student_picture_from_student($POST){
			global $conn;
			$id = $POST['id'];
			$rd2 = mt_rand(1000, 9999);
			$filename = basename($_FILES['file']['name']);
			$ext = substr($filename, strrpos($filename, '.') + 1);
			$file = $rd2. "_" .$filename;
			(move_uploaded_file($_FILES['file']['tmp_name'],'../admin/uploads/'.$file));
			
			$row = $this->selected_student($id);
				if($row['photo'] != ''){
					unlink('../admin/uploads/'.$row['photo']);
				}	
			$query = $conn->prepare("UPDATE student SET photo = ?   WHERE student_id = ? ");
			$query->execute(array($file,$id));
		}	
		public function update_student_picture($POST){
			global $conn;
			$id = $POST['id'];
			$rd2 = mt_rand(1000, 9999);
			$filename = basename($_FILES['file']['name']);
			$ext = substr($filename, strrpos($filename, '.') + 1);
			$file = $rd2. "_" .$filename;
			(move_uploaded_file($_FILES['file']['tmp_name'],'uploads/'.$file));
			
			$row = $this->selected_student($id);
				if($row['photo'] != ''){
					unlink('uploads/'.$row['photo']);
				}	
			$query = $conn->prepare("UPDATE student SET photo = ?   WHERE student_id = ? ");
			$query->execute(array($file,$id));
		}	
		public function update_student($POST){
			global $conn;
			$id = $_POST['id'];
			$id_number = $_POST['id_number'];
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$middlename = $_POST['middlename'];
			$gender = $_POST['gender'];
			$contact_no = $_POST['contact_no'];
			$email = $_POST['email'];
			$cys = $_POST['cys'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$birthdate = $_POST['birthdate'];
			$skills = $_POST['skills'];
			
			$query = $conn->prepare("UPDATE student SET skills = ? ,birthdate = ? ,id_number = ?,firstname = ?,lastname = ?,middlename = ?,gender = ?,contact_no = ?,email = ?,cys = ?,username = ?,password = ? WHERE student_id = ? ");
			$query->execute(array($skills,$birthdate,$id_number,$firstname,$lastname,$middlename,$gender,$contact_no,$email,$cys,$username,$password,$id));			

		}
		public function delete_student($id){
			global $conn;
			foreach($id as $id){
			$query = $conn->prepare("DELETE FROM student WHERE student_id = '$id' ");
			$query->execute();
			}
		}
	/* end student  */
		/*  company */
		public function update_company_picture_from_company($POST){
			global $conn;
			$id = $POST['id'];
			$rd2 = mt_rand(1000, 9999);
			$filename = basename($_FILES['file']['name']);
			$ext = substr($filename, strrpos($filename, '.') + 1);
			$file = $rd2. "_" .$filename;
			(move_uploaded_file($_FILES['file']['tmp_name'],'../admin/uploads/'.$file));
			
			$row = $this->selected_student($id);
				if($row['photo'] != ''){
					unlink('../admin/uploads/'.$row['photo']);
				}	
			$query = $conn->prepare("UPDATE company SET photo = ?   WHERE company_id = ? ");
			$query->execute(array($file,$id));
		}
		public function update_company_request($POST){
			global $conn;
			$id = $POST['id'];
			$status = 'Active';
			$query = $conn->prepare("UPDATE company SET status = ?  WHERE company_id = ? ");
			$query->execute(array($status,$id));
		}
		public function update_company_picture($POST){
			global $conn;
			$id = $POST['id'];
			$rd2 = mt_rand(1000, 9999);
			$filename = basename($_FILES['file']['name']);
			$ext = substr($filename, strrpos($filename, '.') + 1);
			$file = $rd2. "_" .$filename;
			(move_uploaded_file($_FILES['file']['tmp_name'],'uploads/'.$file));
			
			$row = $this->selected_company($id);
				if($row['photo'] != ''){
					unlink('uploads/'.$row['photo']);
				}	
			$query = $conn->prepare("UPDATE company SET photo = ?   WHERE company_id = ? ");
			$query->execute(array($file,$id));
		}	
		public function selected_company($id){
			global $conn;
			$query = $conn->prepare("SELECT * FROM company WHERE company_id = '$id' ");
			$query->execute();
			return $query->fetch();
		}
		public function update_company_status($POST){
			global $conn;
			$id = $POST['id'];
			$status = $POST['status'];
			$query = $conn->prepare("UPDATE company SET status = ?  WHERE company_id = ? ");
			$query->execute(array($status,$id));
		}
		public function company_list_count(){
			global $conn;
			$query = $conn->prepare("SELECT * FROM company WHERE status = 'Pending' ");
			$query->execute();
			return $query->rowcount();
		}
		public function company_count_pending(){
			global $conn;
			$query = $conn->prepare("SELECT * FROM company WHERE status = 'Pending' ");
			$query->execute();
			return $query->rowcount();
		}		
		public function company_list_pending(){
			global $conn;
			$query = $conn->prepare("SELECT * FROM company WHERE status = 'Pending' ");
			$query->execute();
			return $query->fetchAll();
		}
		public function company_list(){
			global $conn;
			$query = $conn->prepare("SELECT * FROM company WHERE status != 'Pending' ");
			$query->execute();
			return $query->fetchAll();
		}
		public function company_count(){
			global $conn;
			$query = $conn->prepare("SELECT * FROM company WHERE status != 'Pending' ");
			$query->execute();
			return $query->rowcount();
		}
		public function sign_up_company($POST){
				global	$conn;
					$name = $POST['name'];
					$description = $POST['description'];
					$org_type = $POST['org_type'];
					$address = $POST['address'];
					$contact_no = $POST['contact_no'];
					$person_in_charge = $POST['person_in_charge'];
					$email = $POST['email'];
					$username = $POST['username'];
					$password = $POST['password'];
					$c_password = $POST['c_password'];
					$status = 'Pending';
				if($password == $c_password){
						$query = $conn->prepare("INSERT INTO company (name,description,org_type,address,contact_no,person_in_charge,email,username,password,status) VALUES(?,?,?,?,?,?,?,?,?,?) ");
						$query->execute(array($name,$description,$org_type,$address,$contact_no,$person_in_charge,$email,$username,$password,$status));
						$id = $conn->lastinsertID();
						$row = $this->selected_company($id);
						session_start();
						$_SESSION['id'] = $row['company_id'];
						echo 'success';
				}else{
					echo 'password';
				}
	
	}
		public function add_company($POST){
			global $conn;
			$name = $POST['name'];
			$description = $POST['description'];
			$org_type = $POST['org_type'];
			$address = $POST['address'];
			$contact_no = $POST['contact_no'];
			$person_in_charge = $POST['person_in_charge'];
			$email = $POST['email'];
			$username = $POST['username'];
			$password = $POST['password'];
			$status = 'Active';
			$query = $conn->prepare("INSERT INTO company (name,description,org_type,address,contact_no,person_in_charge,email,username,password,status) VALUES(?,?,?,?,?,?,?,?,?,?) ");
			$query->execute(array($name,$description,$org_type,$address,$contact_no,$person_in_charge,$email,$username,$password,$status));
		}
		public function update_company_from_company($POST){
			global $conn;
			$id = $POST['id'];
			$name = $POST['name'];
			$description = $POST['description'];
			$org_type = $POST['org_type'];
			$address = $POST['address'];
			$contact_no = $POST['contact_no'];
			$person_in_charge = $POST['person_in_charge'];
			$email = $POST['email'];
			$username = $POST['username'];
			$password = $POST['password'];
			$query = $conn->prepare("UPDATE company SET name = ?,description = ? ,org_type = ? , address = ? ,contact_no = ? , person_in_charge = ? , email = ? , username = ? , password = ?  WHERE company_id = ? ");
			$query->execute(array($name,$description,$org_type,$address,$contact_no,$person_in_charge,$email,$username,$password,$id));
		}
		public function update_company($POST){
			global $conn;
			$id = $POST['id'];
			$name = $POST['name'];
			$description = $POST['description'];
			$org_type = $POST['org_type'];
			$address = $POST['address'];
			$contact_no = $POST['contact_no'];
			$person_in_charge = $POST['person_in_charge'];
			$email = $POST['email'];
			$username = $POST['username'];
			$password = $POST['password'];
			$status = 'Active';
			$query = $conn->prepare("UPDATE company SET name = ?,description = ? ,org_type = ? , address = ? ,contact_no = ? , person_in_charge = ? , email = ? , username = ? , password = ? , status = ? WHERE company_id = ? ");
			$query->execute(array($name,$description,$org_type,$address,$contact_no,$person_in_charge,$email,$username,$password,$status,$id));
		}
		public function delete_company($id){
			global $conn;
			foreach($id as $id){
			$query = $conn->prepare("DELETE FROM company WHERE company_id = '$id' ");
			$query->execute();
			}
		}
		/* end company  */
		
		/*  student_a */
		public function student_a_list($id){
			global $conn;
			$query = $conn->query("SELECT * FROM student_a WHERE student_id = '$id'");
			return $query->fetchAll();
		}
		public function update_student_a($POST){
			global $conn;
			$title = $POST['title'];
			$id = $POST['id'];
			$query = $conn->prepare("UPDATE student_a SET title = ?  WHERE student_a_id = ?");
			$query->execute(array($title,$id));
		}
		public function add_student_a($POST){
			global $conn;
			$student_id = $POST['student_id'];
			$title = $POST['title'];
			$rd2 = mt_rand(1000, 9999);
			$filename = basename($_FILES['file']['name']);
			$ext = substr($filename, strrpos($filename, '.') + 1);
			$file = $rd2. "_" .$filename;
			(move_uploaded_file($_FILES['file']['tmp_name'],'../admin/uploads/'.$file));
			
			$query = $conn->prepare("INSERT INTO student_a (student_id,title,file) VALUES(?,?,?)");
			$query->execute(array($student_id,$title,$file));
		}
		public function delete_student_a($id){
			global $conn;
			foreach($id as $id){
				$row = $this->selected_student_a($id);
				unlink('../admin/uploads/'.$row['file']);
				$query = $conn->prepare("DELETE FROM student_a WHERE student_a_id = '$id' ");
				$query->execute();
			}
		}
		public function selected_student_a($id){
			global $conn;
			$query = $conn->query("SELECT * FROM student_a WHERE student_a_id = '$id' ");
			return $query->fetch();
		}
		public function update_student_a_photo($POST){
			global $conn;
			$id = $POST['id'];
			$rd2 = mt_rand(1000, 9999);
			$filename = basename($_FILES['file']['name']);
			$ext = substr($filename, strrpos($filename, '.') + 1);
			$file = $rd2. "_" .$filename;
			(move_uploaded_file($_FILES['file']['tmp_name'],'uploads/'.$file));
			
			$row = $this->selected_student_a($id);
			unlink('../admin/uploads/'.$row['file']);
				
			$query = $conn->prepare("UPDATE student_a SET file = ?   WHERE student_a_id = ? ");
			$query->execute(array($file,$id));
		}
		/* end student a */
		
		
			/* user  */
		public function selected_class($id){
			global $conn;
			$query = $conn->prepare("SELECT * FROM student_class WHERE student_class_id  = '$id' ");
			$query->execute();
			return $query->fetch();
		}
		public function class_list(){
			global $conn;
			$query = $conn->prepare("SELECT * FROM student_class");
			$query->execute();
			return $query->fetchAll();
		}
		public function add_class($POST){
			global $conn;
			$class_name = $_POST['class_name'];
			$query = $conn->prepare("INSERT INTO student_class (class_name) VALUES(?) ");
			$query->execute(array($class_name));
		}
		public function update_class($POST){
			global $conn;
			$id = $_POST['id'];
			$class_name = $_POST['class_name'];
			$query = $conn->prepare("UPDATE student_class SET  class_name = ?  WHERE student_class_id = ? ");
			$query->execute(array($class_name,$id));
		}
		public function delete_class($id){
			global $conn;
			foreach($id as $id){
			$query = $conn->prepare("DELETE FROM student_class WHERE student_class_id = '$id' ");
			$query->execute();
			}
		}
	/* end student_class  */
		
}
$system = new system_class();
?>