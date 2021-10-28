<?php include 'header.php';?>
<body>
	<div id="wrapper">
		<?php include 'navbar.php';?>
		<div id="page-wrapper">
			<div class="panel-body">
				<center><img src = "img/GROUND.jpg" id="ImageMap1" usemap= "#ground">

				<map id="ground" name="ground">
					<?php

					$sql = "SELECT * FROM stall s 
					LEFT JOIN tenant t 
					ON t.stall_id = s.stall_id
					LEFT JOIN rent r
					ON r.tenant_id = t.tenant_id 
					WHERE s.stall_id = 1 ORDER BY r.rent_status desc LIMIT 1 ";          

					$query = $conn->prepare($sql);
					$query->execute();
					$fetch = $query->fetchAll();

					foreach ($fetch as $key => $value){

						$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
						:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
						?> 
						<area id="9" shape="rect" coords="63,143,101,162" data-toggle="modal" class = "stallstyle1"  
						href="#stall_modal9" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
						title="<?php if($value['rent_status'] == 1)
						{
							echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
						} else
						{
							echo "Vacant";
						}
						?>">
						<?php } ?>
						<?php

						$sql = "SELECT * FROM stall s 
						LEFT JOIN tenant t 
						ON t.stall_id = s.stall_id
						LEFT JOIN rent r
						ON r.tenant_id = t.tenant_id 
						WHERE s.stall_id = 2 ORDER BY r.rent_status desc LIMIT 1 ";          

						$query = $conn->prepare($sql);
						$query->execute();
						$fetch = $query->fetchAll();

						foreach ($fetch as $key => $value){

							$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
							:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
							?> 
							<area id="10" shape="rect" coords="63,162,101,180" data-toggle="modal" class = "stallstyle"  
							href="#stall_modal10" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
							title="<?php if($value['rent_status'] == 1)
							{
								echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
							} else
							{
								echo "Vacant";
							}
							?>">
							<?php } ?>
							<?php

							$sql = "SELECT * FROM stall s 
							LEFT JOIN tenant t 
							ON t.stall_id = s.stall_id
							LEFT JOIN rent r
							ON r.tenant_id = t.tenant_id 
							WHERE s.stall_id = 3 ORDER BY r.rent_status desc LIMIT 1 ";          

							$query = $conn->prepare($sql);
							$query->execute();
							$fetch = $query->fetchAll();

							foreach ($fetch as $key => $value){

								$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
								:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
								?>  
								<area id="11" shape="rect" coords="63,180,101,196" data-toggle="modal" class = "stallstyle"  
								href="#stall_modal11" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
								title="<?php if($value['rent_status'] == 1)
								{
									echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
								} else
								{
									echo "Vacant";
								}
								?>">
								<?php } ?>
								<?php

								$sql = "SELECT * FROM stall s 
								LEFT JOIN tenant t 
								ON t.stall_id = s.stall_id
								LEFT JOIN rent r
								ON r.tenant_id = t.tenant_id 
								WHERE s.stall_id = 4 ORDER BY r.rent_status desc LIMIT 1 ";          

								$query = $conn->prepare($sql);
								$query->execute();
								$fetch = $query->fetchAll();

								foreach ($fetch as $key => $value){

									$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
									:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
									?>  
									<area id="12" shape="rect" coords="63,197,101,216" data-toggle="modal" class = "stallstyle"  
									href="#stall_modal12" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
									title="<?php if($value['rent_status'] == 1)
									{
										echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
									} else
									{
										echo "Vacant";
									}
									?>">
									<?php } ?>
									<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 5 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="13" shape="rect" coords="72,58,100,119" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal13" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 6 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="14" shape="rect" coords="100,58,129,119" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal14" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 7 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="15" shape="rect" coords="129,58,158,119" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal15" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 8 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="16" shape="rect" coords="158,58,187,119" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal16" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 9 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="17" shape="rect" coords="187,58,216,119" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal17" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 10 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="18" shape="rect" coords="216,58,245,119" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal18" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 11 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="19" shape="rect" coords="245,58,274,119" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal19" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 12 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="20" shape="rect" coords="274,58,303,119" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal20" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 13 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="21" shape="rect" coords="303,58,332,119" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal21" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 14 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="22" shape="rect" coords="332,58,365,119" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal22" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 15 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="23" shape="rect" coords="365,58,399,119" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal23" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 16 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="24" shape="rect" coords="399,58,433,119" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal24" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 17 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="25" shape="rect" coords="500,58,532,119" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal25" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 18 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="26" shape="rect" coords="532,58,565,119" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal26" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 19 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="27" shape="rect" coords="565,58,594,119" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal27" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 20 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="28" shape="rect" coords="595,58,622,119" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal28" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 21 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="29" shape="rect" coords="622,58,651,119" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal29" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 22 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="30" shape="rect" coords="651,58,680,119" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal30" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 23 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="31" shape="rect" coords="680,58,707,119" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal31" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 24 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="32" shape="rect" coords="707,58,736,119" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal32" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
											<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 25 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="33" shape="rect" coords="611,142,659,162" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal33" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
											<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 26 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="34" shape="rect" coords="659,142,711,162" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal34" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
											<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 27 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="35" shape="rect" coords="611,162,659,181" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal35" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
											<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 28 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="36" shape="rect" coords="659,162,711,181" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal36" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
											<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 29 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="37" shape="rect" coords="711,142,746,181" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal37" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
											<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 30 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="38" shape="rect" coords="416,142,447,181" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal38" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
											<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 31 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="39" shape="rect" coords="354,142,415,162" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal39" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
											<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 32 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="40" shape="rect" coords="354,162,416,180" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal40" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
											<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 33 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="41" shape="rect" coords="283,142,354,162" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal41" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
											<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 34 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="42" shape="rect" coords="283,162,354,180" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal42" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
											<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 35 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="43" shape="rect" coords="230,142,283,162" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal43" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
											<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 36 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="44" shape="rect" coords="230,162,283,181" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal44" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 37 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="45" shape="rect" coords="178,142,230,162" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal45" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 38 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="46" shape="rect" coords="178,162,230,181" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal46" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 39 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="47" shape="rect" coords="63,317,104,398" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal47" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 40 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="48" shape="rect" coords="104,359,145,398" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal48" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 41 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="49" shape="rect" coords="180,359,235,378" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal49" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 42 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="50" shape="rect" coords="180,378,235,397" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal50" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 43 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="51" shape="rect" coords="235,359,288,378" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal51" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 44 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="52" shape="rect" coords="235,378,288,397" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal52" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 45 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="53" shape="rect" coords="288,359,342,378"  data-toggle="modal" class = "stallstyle"  
										href="#stall_modal53" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 46 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="54" shape="rect" coords="288,378,342,397"  data-toggle="modal" class = "stallstyle"  
										href="#stall_modal54" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 47 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="55" shape="rect" coords="343,359,396,378" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal55" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 48 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="56" shape="rect" coords="342,378,396,397"  data-toggle="modal" class = "stallstyle"  
										href="#stall_modal56" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 49 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="57" shape="rect" coords="396,359,450,398" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal57" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 50 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="58" shape="rect" coords="501,358,563,378" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal58" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 51 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="59" shape="rect" coords="563,358,633,378" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal59" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 52 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="60" shape="rect" coords="633,358,686,378" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal60" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 53 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="61" shape="rect" coords="633,378,686,397" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal61" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 54 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="62" shape="rect" coords="686,358,748,378" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal62" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 55 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="63" shape="rect" coords="687,378,748,397" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal63" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 56 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="64" shape="rect" coords="711,421,745,480" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal64" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 57 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="65" shape="rect" coords="683,421,711,480" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal65" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 58 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="66" shape="rect" coords="654,421,683,480" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal66" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 59 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="67" shape="rect" coords="621,421,654,480" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal67" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 60 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="68" shape="rect" coords="587,421,621,480" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal68" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 61 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="69" shape="rect" coords="558,421,587,480" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal69" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 62 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="70" shape="rect" coords="529,421,558,480" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal70" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 63 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="71" shape="rect" coords="501,421,529,480" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal71" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 64 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="72" shape="rect" coords="471,421,500,480" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal72" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 65 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="73" shape="rect" coords="443,421,471,480" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal73" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 66 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="74" shape="rect" coords="415,421,443,480" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal74" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 67 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="75" shape="rect" coords="386,421,415,480" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal75" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 68 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="76" shape="rect" coords="357,421,386,480" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal76" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 69 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="77" shape="rect" coords="329,421,357,480" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal77" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 70 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="78" shape="rect" coords="300,421,329,480" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal78" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 71 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="79" shape="rect" coords="271,421,299,480" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal79" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 72 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="80" shape="rect" coords="242,421,271,480" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal80" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 73 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="81" shape="rect" coords="212,421,242,480" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal81" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 74 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="82" shape="rect" coords="184,421,212,480" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal82" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 75 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="83" shape="rect" coords="155,421,184,480" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal83" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 76 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="84" shape="rect" coords="127,421,155,480" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal84" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 77 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="85" shape="rect" coords="97,421,126,480" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal85" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 78 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="86" shape="rect" coords="70,421,97,480" data-toggle="modal" class = "stallstyle"  
										href="#stall_modal86" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 79 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="A1" shape="rect" coords="180,198,205,216" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalA1" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 80 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="A2" shape="rect" coords="205,198,229,216" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalA2" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 81 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="A3" shape="rect" coords="229,198,255,216" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalA3" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 82 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="A4" shape="rect" coords="180,317,210,341" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalA4" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 83 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="A5" shape="rect" coords="209,317,239,341" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalA5" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 84 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="A6" shape="rect" coords="239,317,268,341" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalA6" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 85 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="B1" shape="rect" coords="283,197,354,216" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalB1" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 86 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="B2" shape="rect" coords="354,197,417,216" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalB2" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 87 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="B3" shape="rect" coords="417,197,446,216" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalB3" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 88 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="B4" shape="rect" coords="288,317,343,341" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalB4" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 89 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="B5" shape="rect" coords="343,317,397,341" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalB5" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 90 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="B6" shape="rect" coords="397,317,450,341" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalB6" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 91 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="C1" shape="rect" coords="498,197,555,216" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalC1" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 92 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="C2" shape="rect" coords=555,197,611,216" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalC2" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 93 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="C3" shape="rect" coords="611,197,633,216" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalC3" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 94 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="C4" shape="rect" coords="660,197,687,216" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalC4" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 95 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="C5" shape="rect" coords="687,197,714,216" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalC5" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 96 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="C6" shape="rect" coords="714,197,746,216" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalC6" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 97 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="C7" shape="rect" coords="501,317,540,341" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalC7" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 98 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="C8" shape="rect" coords="540,317,593,341" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalC8" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 99 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="C9" shape="rect" coords="592,317,633,341" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalC9" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 100 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="C10" shape="rect" coords="654,317,687,341" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalC10" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 101 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="C11" shape="rect" coords="687,317,717,341" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalC11" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 102 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="C12" shape="rect" coords="717,317,748,341" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalC12" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 103 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="RS1" shape="rect" coords="102,239,151,266" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalRS1" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 104 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="RS2" shape="rect" coords="102,266,128,293" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalRS2" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 105 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="RS3" shape="rect" coords="128,266,151,293" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalRS3" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 106 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="RS4" shape="rect" coords="152,239,196,266" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalRS4" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 107 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="RS5" shape="rect" coords="152,266,196,293" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalRS5" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 108 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="RS6" shape="rect" coords="196,239,232,266" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalRS6" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 109 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="RS7" shape="rect" coords="196,266,232,293" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalRS7" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 110 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="RS8" shape="rect" coords="231,239,256,293" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalRS8" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 111 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="RS9" shape="rect" coords="256,239,314,293" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalRS9" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 112 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="RS10" shape="rect" coords="313,239,355,293" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalRS10" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 113 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="RS11" shape="rect" coords="355,239,389,293" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalRS11" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 114 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="RS12" shape="rect" coords="389,239,444,293" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalRS12" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 115 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="RS13" shape="rect" coords="491,239,522,293" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalRS13" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 116 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="RS14" shape="rect" coords="522,239,562,293" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalRS14" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 117 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="RS15" shape="rect" coords="562,239,603,293" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalRS15" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 118 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="RS16" shape="rect" coords="603,239,633,293" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalRS16" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 119 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="RS17" shape="rect" coords="656,239,688,293" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalRS17" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 121 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="RS19" shape="rect" coords="688,239,748,266" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalRS19" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 120 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="RS18" shape="rect" coords="687,266,718,293" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalRS18" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
										title="<?php if($value['rent_status'] == 1)
										{
											echo  "Occupied by ".$value['tenant_fname']." ".$value['tenant_mname']." ".$value['tenant_lname'];
										} else
										{
											echo "Vacant";
										}
										?>">
										<?php } ?>
										<?php

									$sql = "SELECT * FROM stall s 
									LEFT JOIN tenant t 
									ON t.stall_id = s.stall_id
									LEFT JOIN rent r
									ON r.tenant_id = t.tenant_id 
									WHERE s.stall_id = 122 ORDER BY r.rent_status desc LIMIT 1 ";          

									$query = $conn->prepare($sql);
									$query->execute();
									$fetch = $query->fetchAll();

									foreach ($fetch as $key => $value){

										$maphilight = ($value['rent_status'] == 1)?'{"strokeColor":"FF0000","strokeWidth":3,"fillColor":"FF3333","fillOpacity":0.6,"alwaysOn":true}'
										:'{"strokeColor":"008000","strokeWidth":3,"fillColor":"7CFC00","fillOpacity":0.6,"alwaysOn":true}';
										?>  
										<area id="RS20" shape="rect" coords="718,266,748,293" data-toggle="modal" class = "stallstyle"  
										href="#stall_modalRS20" value="<?php echo $value['rent_status'];?>" data-maphilight='<?php echo $maphilight;?>' 
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
						<script>
							$(function () {
								$('[data-toggle="tooltip"]').tooltip()
							})
						</script>
					</body>

					</html>
