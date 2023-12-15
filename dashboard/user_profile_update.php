<?php
	
include('../conn.php');
include('../functions.php');
include('../session.php');
include('user_header.php');

    $id = $_GET['user_id'];
    $sql = "Select * from user_info where user_id=".$id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>

<div class="container-fluid" style="background-color: darkkhaki;">
	<div class="container" style="padding-bottom:10%;">
		<div class="w-50 m-auto pt-5">
			<div class="alert alert-primary mx-3">
				<center><h2>Update Your Profile</h2></center>
			</div>
		</div>
		<form action="" method="post">
			<div class="row w-50 m-auto">
                <div class="col col-12">
                    <div class="form-group">
                        <input type="hidden" name="user_id" value="<?php echo $row['user_id'] ?>">
                        <label for="">First Name</label>
                        <input type="text" class="form-control" name="user_name" value="<?php echo $row['user_name'] ?>" required>
                    </div>
                </div>
                <div class="col col-12">
                    <div class="form-group">
                        <label for="">Last Name</label>
                        <input type="text" class="form-control" name="last_name" value="<?php echo $row['last_name'] ?>" required>
                    </div>
                </div>
                <div class="col col-12">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="user_email" value="<?php echo $row['user_email'] ?>" required>
                    </div>
                </div>
                <div class="col col-12">
                    <div class="form-group">
                        <button type="submit" name="profile_update" class="btn btn-danger">Update</button>        
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php

include('../footer.php');

if (isset($_POST['profile_update'])) 
{
	$user_name            = $_POST['user_name'];
	$last_name          = $_POST['last_name'];
	$user_email             = $_POST['user_email'];
	$user_id        = $_POST['user_id'];

	$sql = "UPDATE user_info SET user_name= '$user_name', last_name='$last_name',
            user_email= '$user_email'
            WHERE user_id=".$user_id;
            echo $sql;
	$run = mysqli_query($conn,$sql);
	if($run){
		echo '<script>alert("Your Profile Updated Successfully.")</script>';
        header('location: user_profile.php');
	}
	else{
		echo '<script>alert("Something went wrong...!")</script>';
	}
} 
?>
</body>
</html>