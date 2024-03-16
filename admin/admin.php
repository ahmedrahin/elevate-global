<?php
    include "inc/header.php";
?>

		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">

            <div class="card">
				<div class="card-body">
					<h3 style="padding: 15px 0 30px;">Admin Information</h3>
                    <form action="" method="POST"  class="addUser">
                    <div class="row g-lg-5">

                    <?php
                        $admin  = "SELECT * FROM all_user where role = 1 ORDER BY name ASC";
                    
                        $editDb  = mysqli_query($db, $admin);

                        while($userRow = mysqli_fetch_array($editDb)){

                        $userID         = $userRow['id'];
                        $userEmail      = $userRow['email'];
                        $userPassword   = $userRow['password'];                     
                        ?>
                    
                    <div class="col-lg-6 ">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" name="email" id="email" placeholder="Enter Your Email" class="form-control" value="<?php echo $userEmail ?>" required>
                        </div>
                    </div>
                    
                    
                    <div class="col-lg-6 ">
                        <div class="form-group">
                            <label for="Password">Your Password</label>
                            <input type="text" name="password" id="Password" placeholder="Enter Your Password" value="<?php echo $userPassword; ?>" class="form-control"  required>
                        </div>
                    </div>
                    
                                     
                    <input type="submit" value="Update" name="btnUpdate" class="form-control">
                        
                    </div>
                <?php
               
                if( isset($_POST['btnUpdate']) ){
                    $email              = mysqli_real_escape_string($db, $_POST['email']);
                    $password           = mysqli_real_escape_string($db, $_POST['password']);

                    $updateSql = "UPDATE all_user SET email='$email', password='$password' WHERE id = '$userID'";
                        $updateDb = mysqli_query($db, $updateSql);

                    if($updateDb){
                        header("Location: admin.php");
                        }else {
                            die();
                        }
                      }
                    }
                        
                ?>
                </form>
                </div>
            </div>

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