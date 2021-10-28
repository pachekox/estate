<?php include 'header.php';?>
<body>
	<div id="wrapper">
		<!-- Navigation -->
		<?php include 'navbar.php';?>
		<div id="page-wrapper">
			
			<div class="panel-body">
				<center><img src = "img/SECOND.jpg" id="ImageMap1" usemap= "#second">

				<map id="second" name="second">
					<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 123 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="s1" shape="rect" coords="45,443,89,469" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modals1" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
						WHERE s.stall_id = 124 ORDER BY r.rent_status desc LIMIT 1 ";          

						$query = $conn->prepare($sql);
						$query->execute();
						$fetch = $query->fetchAll();

						foreach ($fetch as $key => $value){

							$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
							:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
							?> 
							<area id="s2" shape="rect" coords="45,417,89,443"" data-toggle="modal" class = "stallstyle"  
							href="#stall_modals2" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 125 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s3" shape="rect" coords="45,391,89,416" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals3" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 126 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s4" shape="rect" coords="45,359,89,391" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals4" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 127 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s5" shape="rect" coords="45,327,89,359" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals5" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 128 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s6" shape="rect" coords="45,300,89,327" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals6" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 129 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s7" shape="rect" coords="45,275,89,300" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals7" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo "Occupied by";
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
							WHERE s.stall_id = 130 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s8" shape="rect" coords="45,177,89,205" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals8" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 131 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s9" shape="rect" coords="45,137,89,177" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals9" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 132 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s10" shape="rect" coords="45,115,89,137" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals10" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 133 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s11" shape="rect" coords="45,83,89,115" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals11" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 134 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s12" shape="rect" coords="45,53,89,83" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals12" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 135 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s13" shape="rect" coords="45,26,89,53" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals13" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
								<?php } ?><?php

							$sql = "SELECT * FROM stall s 
							LEFT JOIN tenant t 
							ON t.stall_id = s.stall_id
							LEFT JOIN rent r
							ON r.tenant_id = t.tenant_id 
							WHERE s.stall_id = 136 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s14" shape="rect" coords="90,26,130,115" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals14" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 137 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s15" shape="rect" coords="193,26,230,116" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals15" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 138 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s16" shape="rect" coords="230,67,257,116" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals16" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 139 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s17" shape="rect" coords="230,26,257,67" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals17" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 140 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s18" shape="rect" coords="257,67,285,116" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals18" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 141 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s19" shape="rect" coords="257,26,285,67" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals19" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 142 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s20" shape="rect" coords="285,67,311,116" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals20" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 143 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s21" shape="rect" coords="285,26,311,67" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals21" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 144 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s22" shape="rect" coords="311,67,339,116" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals22" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 145 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s23" shape="rect" coords="311,26,339,67" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals23" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 146 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s24" shape="rect" coords="339,67,366,116" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals24" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 147 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s25" shape="rect" coords="339,26,366,67" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals25" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 148 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s26" shape="rect" coords="366,67,394,116" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals26" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 149 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s27" shape="rect" coords="366,26,394,67" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals27" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 150 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s28" shape="rect" coords="394,67,421,116" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals28" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 151 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s29" shape="rect" coords="394,26,421,67" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals29" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 152 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s30" shape="rect" coords="452,26,494,53" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals30" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 153 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s31" shape="rect" coords="452,53,494,83" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals31" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 154 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s32" shape="rect" coords="452,83,494,116" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals32" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 155 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s33" shape="rect" coords="494,26,517,67" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals33" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 156 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s34" shape="rect" coords="517,26,540,67" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals34" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 157 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s35" shape="rect" coords="540,26,564,67" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals35" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 158 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s36" shape="rect" coords="493,83,563,116" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals36" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 159 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s37" shape="rect" coords="589,26,622,116" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals37" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 160 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s38" shape="rect" coords="622,26,648,67" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals38" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 161 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s39" shape="rect" coords="648,26,682,67" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals39" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 162 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s40" shape="rect" coords="622,67,682,116" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals40" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 163 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s41" shape="rect" coords="701,84,746,116" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals41" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 164 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s42" shape="rect" coords="698,358,748,403" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals42" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 165 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s43" shape="rect" coords="698,403,748,432" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals43" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 166 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s44" shape="rect" coords="698,432,748,469" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals44" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 167 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s45" shape="rect" coords="608,417,663,469" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals45" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 168 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s46" shape="rect" coords="636,358,663,417" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals46" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 169 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s47" shape="rect" coords="608,358,636,417" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals47" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 170 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s48" shape="rect" coords="562,358,608,417" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals48" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 171 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s49" shape="rect" coords="586,417,608,469" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals49" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 172 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s50" shape="rect" coords="562,417,586,469" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals50" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 173 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s51" shape="rect" coords="513,417,541,469" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals51" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 174 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s52" shape="rect" coords="485,417,513,469" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals52" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 175 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s53" shape="rect" coords="456,417,485,469" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals53" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 176 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s54" shape="rect" coords="456,358,541,391" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals54" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 177 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s55" shape="rect" coords="375,359,422,417" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals55" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 178 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s56" shape="rect" coords="376,417,422,468" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals56" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 179 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s57" shape="rect" coords="331,359,376,417" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals57" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 180 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s58" shape="rect" coords="331,417,376,468" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals58" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 181 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s59" shape="rect" coords="303,359,331,417" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals59" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 182 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s60" shape="rect" coords="249,417,331,469" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals60" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 183 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s61" shape="rect" coords="276,358,304,417" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals61" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 184 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s62" shape="rect" coords="249,358,276,417" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals62" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 185 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s63" shape="rect" coords="226,417,249,469" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals63" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 186 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s64" shape="rect" coords="226,358,249,417" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals64" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 187 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s65" shape="rect" coords="199,417,226,469" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals65" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 188 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s66" shape="rect" coords="170,358,225,417" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals66" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 189 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s67" shape="rect" coords="170,417,199,469" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals67" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 190 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s68" shape="rect" coords="113,417,135,469" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals68" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 191 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s69" shape="rect" coords="90,417,113,469" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals69" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 192 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s70" shape="rect" coords="90,391,135,417" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals70" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 193 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="s71" shape="rect" coords="90,359,135,391" data-toggle="modal" class = "stallstyle"  
								href="#stall_modals71" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 194 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="sa1" shape="rect" coords="640,151,681,177" data-toggle="modal" class = "stallstyle"  
								href="#stall_modalsa1" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 195 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="sa2" shape="rect" coords="585,151,639,177" data-toggle="modal" class = "stallstyle"  
								href="#stall_modalsa2" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 196 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="sa3" shape="rect" coords="540,151,585,177" data-toggle="modal" class = "stallstyle"  
								href="#stall_modalsa3" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 197 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="sa4" shape="rect" coords="493,151,540,177" data-toggle="modal" class = "stallstyle"  
								href="#stall_modalsa4" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 198 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="sa5" shape="rect" coords="445,151,494,177" data-toggle="modal" class = "stallstyle"  
								href="#stall_modalsa5" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 199 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="sa6" shape="rect" coords="399,151,444,177" data-toggle="modal" class = "stallstyle"  
								href="#stall_modalsa6" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 200 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="sa7" shape="rect" coords="353,151,398,177" data-toggle="modal" class = "stallstyle"  
								href="#stall_modalsa7" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 201 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="sa8" shape="rect" coords="311,151,353,177" data-toggle="modal" class = "stallstyle"  
								href="#stall_modalsa8" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 202 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="sa9" shape="rect" coords="276,151,311,177" data-toggle="modal" class = "stallstyle"  
								href="#stall_modalsa9" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 203 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="sa10" shape="rect" coords="234,151,276,177" data-toggle="modal" class = "stallstyle"  
								href="#stall_modalsa10" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 204 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="sa11" shape="rect" coords="193,151,234,177" data-toggle="modal" class = "stallstyle"  
								href="#stall_modalsa11" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 205 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="sa12" shape="rect" coords="148,176,194,217" data-toggle="modal" class = "stallstyle"  
								href="#stall_modalsa12" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 206 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="sa13" shape="rect" coords="148,217,194,259" data-toggle="modal" class = "stallstyle"  
								href="#stall_modalsa13" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 207 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="sa14" shape="rect" coords="148,259,194,300" data-toggle="modal" class = "stallstyle"  
								href="#stall_modalsa14" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 208 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="sa15" shape="rect" coords="194,300,234,328" data-toggle="modal" class = "stallstyle"  
								href="#stall_modalsa15" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 209 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="sa16" shape="rect" coords="234,300,276,328" data-toggle="modal" class = "stallstyle"  
								href="#stall_modalsa16" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 210 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="sa17" shape="rect" coords="276,300,311,328" data-toggle="modal" class = "stallstyle"  
								href="#stall_modalsa17" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 211 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="sa18" shape="rect" coords="311,300,354,328" data-toggle="modal" class = "stallstyle"  
								href="#stall_modalsa18" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 212 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="sa19" shape="rect" coords="354,300,398,328" data-toggle="modal" class = "stallstyle"  
								href="#stall_modalsa19" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 213 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="sa20" shape="rect" coords="398,300,444,328" data-toggle="modal" class = "stallstyle"  
								href="#stall_modalsa20" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 214 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="sa21" shape="rect" coords="444,300,493,328" data-toggle="modal" class = "stallstyle"  
								href="#stall_modalsa21" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 215 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="sa22" shape="rect" coords="493,300,540,328" data-toggle="modal" class = "stallstyle"  
								href="#stall_modalsa22" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 216 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="sa23" shape="rect" coords="540,300,585,328" data-toggle="modal" class = "stallstyle"  
								href="#stall_modalsa23" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 217 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="sa24" shape="rect" coords="585,300,640,328" data-toggle="modal" class = "stallstyle"  
								href="#stall_modalsa24" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 218 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="sa25" shape="rect" coords="640,300,681,328" data-toggle="modal" class = "stallstyle"  
								href="#stall_modalsa25" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 219 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="sa26" shape="rect" coords="679,259,721,301" data-toggle="modal" class = "stallstyle"  
								href="#stall_modalsa26" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 220 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="sa27" shape="rect" coords="679,217,721,259" data-toggle="modal" class = "stallstyle"  
								href="#stall_modalsa27" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
							WHERE s.stall_id = 221 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="sa28" shape="rect" coords="679,176,721,217" data-toggle="modal" class = "stallstyle"  
								href="#stall_modalsa28" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
