<?php
    include "inc/header.php";
?>

		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">

				
			<?php
    
			$do = ( isset($_GET['do']) ) ? $_GET['do'] : "manage"; 

			if( $do == 'manage' ){

				?>

					<div class="card">
						<div class="card-body">
							<h3 style="padding: 15px 0 30px;">All User List</h3>
							<div class="table-responsive">
								<table id="example" class="table table-striped table-bordered" style="width:100%">
									<thead>
										<tr>
											<th>SL</th>
											<th>Name</th>
											<th>Email</th>
											<th>Phone</th>
											<th>Company Name</th>
											<th>Date</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

									<?php

										$userinfo  = "SELECT id as 'userID', name as 'userName', email as 'userEmail', phone as 'userPhone', year as 'year', month as 'month', company_name as 'company_name', day as 'day', message as 'message' FROM all_user where role = 2 ORDER BY name ASC";
										$userDb    = mysqli_query($db, $userinfo);
										$total_row = mysqli_num_rows($userDb);
										$sl        = 0;

										if( $total_row != 0 ){

											while( $userRow = mysqli_fetch_assoc($userDb) ){

											extract($userRow);
											
												$sl +=1;

												?>

													<tr>
														<td><?php echo $sl; ?></td>
														<td><?php echo $userName; ?></td>
														<td><?php echo $userEmail; ?></td>
														<td><?php echo $userPhone; ?></td>
														<td><?php 
															if( !empty($company_name) )
																echo $company_name;
															else{
																?>
																	<span class="empty">empty</span>
																<?php
															}
														?></td>
														<td>
															<?php
																echo $day . "-" . $month . "-" . $year;
															?>
														</td>
														<td>
														<ul class="actionBtn">
															<li>
																<a href="#" title="<?php echo $userName; ?> Message" type="button" data-bs-toggle="modal" data-bs-target="#message<?php echo $userID; ?>">
																	<i class="lni lni-eye"></i>
																</a>
															</li>
															<li>
																<a href="" type="button" data-bs-toggle="modal" data-bs-target="#delUser<?php echo $userID; ?>" >
																<i class="bx bx-trash"></i>
																</a>
															</li>
															</ul>
														</td>
													</tr>
													<!-- Modal -->
													<div class="modal fade" id="delUser<?php echo $userID; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<div class="modal-dialog">
														<div class="modal-content">
														<div class="modal-header">
														<h1 class="modal-title fs-5" id="exampleModalLabel">Are you sure?</h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														
														<div class="modal-footer">
														<button type="button" class="btn btn-success" data-bs-dismiss="modal">No</button>
														<button type="button" class="btn btn-danger">
															<a href="user.php?do=delete&did=<?php echo $userID; ?>">Confirm</a>
														</button>
														</div>
														</div>
														</div>
													</div>

													<!-- Modal -->
													<div class="modal fade" id="message<?php echo $userID; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<div class="modal-dialog">
														<div class="modal-content">
														<div class="modal-header">
														<h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo $userName; ?> Message</h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>

														<div class="modal-body">
															<h5 style="font-size: 16px;">
																<?php
																	if(!empty( $message )){
																		echo $message;
																	}else {
																		echo "<h2 style='text-align: center;font-size: 24px;'>No message sent!</h2>";
																	}
																?>
															</h5>
														</div>
														
														<div class="modal-footer">
															
														<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
														</div>
														</div>
														</div>
													</div>

												<?php


											}

										} else {
											echo "<div class='alert alert-warning'> No User Found </div>";
										}
									
									?>

										
										
									</tbody>
									
								</table>
							</div>
						</div>
					</div>

				<?php

			} 

			else if( $do == 'delete' ){

				if(isset($_GET['did'])){
					$del_user = $_GET['did'];

					$delSql = "DELETE FROM all_user WHERE id = '$del_user'";
					$delDb  = mysqli_query($db, $delSql);

					if($delDb){
						header("Location: user.php?do=manage");
					}

				}

			}

			else {
				echo "<div class='alert alert-warning'> 404 page not found !!! </div>";
			}

?>
				  


            </div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		
		<!--End Back To Top Button-->
		
	</div>
	<!--end wrapper-->
	
<?php
include "inc/footer.php";
?>