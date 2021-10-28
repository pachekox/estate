<?php include 'header.php';?>
<body>
	<div id="wrapper">
		<!-- Navigation -->
		<?php include 'navbar.php';?>
		<div id="page-wrapper">
			
			<div class="panel-body">
				<center><img src = "img/SFWET.jpg" id="ImageMap1" usemap= "#wet">

				<map id="wet" name="wet">
					<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 222 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa1" shape="rect" coords="86,414,125,443" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa1" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 223 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa2" shape="rect" coords="125,414,158,442" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa2" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 224 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa3" shape="rect" coords="158,414,190,442" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa3" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 225 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa4" shape="rect" coords="190,414,225,442" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa4" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 226 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa5" shape="rect" coords="225,414,259,442" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa5" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 227 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa6" shape="rect" coords="86,387,125,414" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa6" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 228 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa7" shape="rect" coords="125,387,158,415" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa7" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 229 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa8" shape="rect" coords="158,387,190,414" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa8" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 230 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa9" shape="rect" coords="190,387,225,414" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa9" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 231 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa10" shape="rect" coords="225,387,259,415" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa10" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 232 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa11" shape="rect" coords="86,339,125,367" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa11" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 233 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa12" shape="rect" coords="125,339,158,367" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa12" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 234 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa13" shape="rect" coords="158,339,190,367" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa13" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 235 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa14" shape="rect" coords="190,339,226,367" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa14" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 236 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa15" shape="rect" coords="226,339,259,367" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa15" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 237 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa16" shape="rect" coords="86,309,125,339" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa16" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 238 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa17" shape="rect" coords="125,309,158,339" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa17" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 239 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa18" shape="rect" coords="158,309,190,339" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa18" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 240 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa19" shape="rect" coords="190,309,226,339" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa19" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 241 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa20" shape="rect" coords="226,309,259,339" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa20" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 242 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa21" shape="rect" coords="86,262,125,292" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa21" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 243 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa22" shape="rect" coords="125,262,158,292" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa22" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 244 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa23" shape="rect" coords="158,262,190,292" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa23" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 245 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa24" shape="rect" coords="190,262,225,292" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa24" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 246 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa25" shape="rect" coords="225,262,259,292" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa25" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 247 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa26" shape="rect" coords="86,235,125,263" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa26" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 248 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa27" shape="rect" coords="125,235,158,263" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa27" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 249 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa28" shape="rect" coords="158,235,190,263" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa28" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 250 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa29" shape="rect" coords="190,235,225,263" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa29" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 251 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa30" shape="rect" coords="225,235,259,263" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa30" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 252 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa31" shape="rect" coords="86,187,125,215" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa31" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 253 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa32" shape="rect" coords="125,187,158,215" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa32" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 254 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa33" shape="rect" coords="158,187,190,215" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa33" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 255 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa34" shape="rect" coords="190,187,225,215" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa34" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 256 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa35" shape="rect" coords="225,187,259,215" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa35" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 257 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa36" shape="rect" coords="86,158,125,187" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa36" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 258 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa37" shape="rect" coords="125,158,158,187" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa37" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 259 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa38" shape="rect" coords="158,158,190,187" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa38" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 260 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa39" shape="rect" coords="190,158,225,187" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa39" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 261 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa40" shape="rect" coords="225,158,259,187" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa40" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 262 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa41" shape="rect" coords="86,111,125,139" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa41" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 263 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa42" shape="rect" coords="125,111,158,139" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa42" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 264 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa443" shape="rect" coords="158,111,190,139" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa43" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 265 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa44" shape="rect" coords="190,111,225,139" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa44" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 266 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa45" shape="rect" coords="225,111,259,139" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa45" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 267 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa46" shape="rect" coords="86,81,125,111" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa46" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 268 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa47" shape="rect" coords="125,81,158,111" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa47" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 269 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa48" shape="rect" coords="158,81,190,111" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa48" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 270 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa49" shape="rect" coords="190,81,225,111" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa49" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 271 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wa50" shape="rect" coords="225,81,259,111" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwa50" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 272 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb1" shape="rect" coords="292,415,325,443" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb1" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 273 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb2" shape="rect" coords="325,415,360,443" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb2" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 274 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb3" shape="rect" coords="360,415,391,443" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb3" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 275 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb4" shape="rect" coords="391,415,426,443" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb4" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 276 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb5" shape="rect" coords="426,415,460,443" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb5" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 277 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb6" shape="rect" coords="292,387,325,415" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb6" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 278 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb7" shape="rect" coords="325,387,360,415" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb7" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 279 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb8" shape="rect" coords="360,387,391,415" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb8" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 280 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb9" shape="rect" coords="391,387,426,415" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb9" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 281 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb10" shape="rect" coords="426,387,460,415" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb10" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 282 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb11" shape="rect" coords="292,339,325,367" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb11" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 283 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb12" shape="rect" coords="325,339,360,367" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb12" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 284 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb13" shape="rect" coords="360,339,391,367" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb13" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 285 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb14" shape="rect" coords="391,339,426,367" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb14" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 286 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb15" shape="rect" coords="426,339,460,367" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb15" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 287 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb16" shape="rect" coords="292,310,325,339" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb16" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 288 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb17" shape="rect" coords="325,310,360,339" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb17" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 289 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb18" shape="rect" coords="360,310,391,339" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb18" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 290 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb19" shape="rect" coords="391,310,426,339" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb19" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 291 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb20" shape="rect" coords="426,310,460,339" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb20" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 292 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb21" shape="rect" coords="292,263,325,292" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb21" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 293 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb22" shape="rect" coords="325,263,360,292" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb22" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 294 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb23" shape="rect" coords="360,263,391,292" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb23" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 295 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb24" shape="rect" coords="391,263,426,292" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb24" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 296 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb25" shape="rect" coords="426,263,460,292" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb25" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 297 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb26" shape="rect" coords="292,235,325,263" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb26" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 298 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb27" shape="rect" coords="325,235,360,263" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb27" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 299 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb28" shape="rect" coords="360,235,391,263" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb28" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 300 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb29" shape="rect" coords="391,235,426,263" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb29" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 301 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb30" shape="rect" coords="426,235,460,263" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb30" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 302 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb31" shape="rect" coords="292,188,325,215" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb31" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 303 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb32" shape="rect" coords="325,188,360,215" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb32" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 304 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb33" shape="rect" coords="360,188,391,215" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb33" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 305 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb34" shape="rect" coords="391,188,426,215" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb34" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 306 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb35" shape="rect" coords="426,188,460,215" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb35" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 307 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb36" shape="rect" coords="292,158,325,187" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb36" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 308 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb37" shape="rect" coords="325,158,360,187" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb37" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 309 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb38" shape="rect" coords="360,158,391,187" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb38" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 310 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb39" shape="rect" coords="391,158,426,187" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb39" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 311 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb40" shape="rect" coords="426,158,460,187" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb40" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 312 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb41" shape="rect" coords="292,111,325,139" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb41" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 313 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb42" shape="rect" coords="325,111,360,139" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb42" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 314 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb43" shape="rect" coords="360,111,391,139" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb43" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 315 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb44" shape="rect" coords="391,111,426,139" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb44" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 316 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb45" shape="rect" coords="426,111,460,139" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb45" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 317 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb46" shape="rect" coords="292,81,325,111" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb46" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 318 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb47" shape="rect" coords="325,81,360,111" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb47" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 319 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb48" shape="rect" coords="360,81,391,111" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb48" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 320 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb49" shape="rect" coords="391,81,426,111" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb49" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 321 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wb50" shape="rect" coords="426,81,460,111" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwb50" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 322 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wc1" shape="rect" coords="486,415,527,443" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwc1" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 323 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wc2" shape="rect" coords="486,387,527,415" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwc2" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 324 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wc3" shape="rect" coords="486,339,527,367" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwc3" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 325 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wc4" shape="rect" coords="486,310,527,339" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwc4" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 326 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wc5" shape="rect" coords="486,263,527,292" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwc5" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 327 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wc6" shape="rect" coords="486,235,527,263" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwc6" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 328 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wc7" shape="rect" coords="486,188,527,215" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwc7" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 329 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wc8" shape="rect" coords="486,158,527,187" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwc8" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 330 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wc9" shape="rect" coords="486,111,527,139" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwc9" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 331 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wc10" shape="rect" coords="486,81,527,111" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwc10" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 332 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wc11" shape="rect" coords="486,25,524,64" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwc11" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 333 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wc12" shape="rect" coords="547,415,587,443" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwc12" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 334 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wc13" shape="rect" coords="547,387,587,415" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwc13" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 335 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wc14" shape="rect" coords="547,339,587,367" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwc14" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 336 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wc15" shape="rect" coords="547,310,587,339" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwc15" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 337 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wc16" shape="rect" coords="547,263,587,292" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwc16" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 338 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wc17" shape="rect" coords="547,235,587,263" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwc17" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 339 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wc18" shape="rect" coords="547,188,587,215" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwc18" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 340 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wc19" shape="rect" coords="547,158,587,187" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwc19" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 341 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wc20" shape="rect" coords="547,111,587,139" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwc20" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 342 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wc21" shape="rect" coords="547,81,587,111" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwc21" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 343 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wc22" shape="rect" coords="549,25,590,63" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwc22" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 344 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd1" shape="rect" coords="607,415,640,443" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd1" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 345 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd2" shape="rect" coords="640,415,670,443" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd2" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 346 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd3" shape="rect" coords="670,415,699,443" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd3" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 347 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd4" shape="rect" coords="699,415,728,443" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd4" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 348 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd5" shape="rect" coords="728,415,763,443" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd5" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 349 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd6" shape="rect" coords="607,386,640,414" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd6" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 350 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd7" shape="rect" coords="640,386,670,414" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd7" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 351 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd8" shape="rect" coords="670,386,699,414" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd8" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 352 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd9" shape="rect" coords="699,386,728,414" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd9" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 353 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd10" shape="rect" coords="728,386,763,414" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd10" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 354 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd11" shape="rect" coords="607,339,640,367" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd11" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 355 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd12" shape="rect" coords="640,339,670,367" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd12" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 356 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd13" shape="rect" coords="670,339,699,367" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd13" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 357 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd14" shape="rect" coords="699,339,728,367" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd14" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 358 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd15" shape="rect" coords="728,339,763,367" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd15" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 359 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd16" shape="rect" coords="607,309,640,339" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd16" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 360 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd17" shape="rect" coords="640,309,670,339" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd17" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 361 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd18" shape="rect" coords="670,309,699,339" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd18" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 362 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd19" shape="rect" coords="699,309,728,339" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd19" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 363 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd20" shape="rect" coords="728,309,763,339" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd20" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 364 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd21" shape="rect" coords="607,262,640,292" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd21" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 365 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd22" shape="rect" coords="640,262,670,292" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd22" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 366 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd23" shape="rect" coords="670,262,699,292" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd23" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 367 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd24" shape="rect" coords="699,262,728,292" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd24" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 368 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd25" shape="rect" coords="728,262,763,292" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd25" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 369 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd26" shape="rect" coords="607,234,640,263" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd26" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 370 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd27" shape="rect" coords="640,234,670,263" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd27" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 371 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd28" shape="rect" coords="670,234,699,263" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd28" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 372 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd29" shape="rect" coords="699,234,728,263" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd29" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 373 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd30" shape="rect" coords="728,234,763,263" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd30" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 374 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd31" shape="rect" coords="607,187,640,215" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd31" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 375 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd32" shape="rect" coords="640,187,670,215" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd32" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 376 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd33" shape="rect" coords="670,187,699,215" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd33" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 377 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd34" shape="rect" coords="699,187,728,215" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd34" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 378 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd35" shape="rect" coords="728,187,763,215" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd35" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 379 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd36" shape="rect" coords="607,158,640,187" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd36" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 380 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd37" shape="rect" coords="640,158,670,187" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd37" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 381 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd38" shape="rect" coords="670,158,699,187" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd38" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 382 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd39" shape="rect" coords="699,158,728,187" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd39" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 383 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd40" shape="rect" coords="728,158,763,187" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd40" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 384 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd41" shape="rect" coords="607,111,640,139" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd41" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 385 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd42" shape="rect" coords="640,111,670,139" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd42" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 386 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd43" shape="rect" coords="670,111,699,139" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd43" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 387 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd44" shape="rect" coords="699,111,728,139" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd44" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 388 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd45" shape="rect" coords="728,111,763,139" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd45" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 389 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd46" shape="rect" coords="607,81,640,111" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd46" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 390 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd47" shape="rect" coords="640,81,670,111" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd47" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 391 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd48" shape="rect" coords="670,81,699,111" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd48" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 392 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd49" shape="rect" coords="699,81,728,111" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd49" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 393 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="wd50" shape="rect" coords="728,81,763,111" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modalwd50" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						
							</map> 
							<!-- /.table-responsive -->
							<?php include 'stall_modal.php';?>

						</div>

						<!-- /.panel-body -->

					</div>
					<!-- /#page-wrapper -->
				</div>
				<!-- /#wrapper -->

				<!-- jQuery -->


				<script src="../bower_components/jquery/dist/jquery.min.js"></script>
				<!-- Bootstrap Core JavaScript -->
				<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
				<!-- Metis Menu Plugin JavaScript -->
				<script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>
				<!-- DataTables JavaScript -->
				<script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
				<script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
				<script src="../bower_components/datatables-responsive/js/dataTables.responsive.js"></script>
				<!-- Custom Theme JavaScript -->
				<script src="../dist/js/sb-admin-2.js"></script>
				<script src="../dist/js/jquery.maphilight.js"></script>

				<!-- Page-Level Demo Scripts - Tables - Use for reference -->

				<script>
					$(document).ready(function() {
						$('#dataTables-example').DataTable({
							responsive: true
						});
					});
				</script>
				<script>

					jQuery(function()
					{
						jQuery('#ImageMap1').maphilight();
					});
					$('#ImageMap1').trigger('alwaysOn.maphilight').find('area[coords]')


				</script>

			</body>

			</html>
