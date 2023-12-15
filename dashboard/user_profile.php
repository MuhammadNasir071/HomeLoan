
<?php
	
include('../conn.php');
include('../functions.php');
include('../session.php');
include('user_header.php');

	$user_id =	$_SESSION['user']['user_id'];
	$sql ="SELECT * FROM `user_info` Where user_id = $user_id";
	$result = mysqli_query($conn,$sql);
?>
<div class="container-fluid" style="background-color: #d4d3b3;height:500px">
	<div class="container">
		<div class="py-5">
			<center><h2>My Profile</h2></center>
		</div>
		<div class="row">
			<div class="col col-3 ml-5">
			<img src="../assets/img/img_avatar3.png" alt="Logo" style="width:220px;" class="rounded-pill">
			</div>
			<div class="col col-8">
				<table class="table">
					<tr>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email</th>
						<th>Type</th>
						<th>Action</th>
					</tr>
					<?php
						while($row=mysqli_fetch_assoc($result))
						{
							echo '<tr>
								<td>'.$row["user_name"].'</td>
								<td>'.$row["last_name"].'</td>
								<td>'.$row["user_email"].'</td>
								<td>'.$row["gender"].'</td>
								<td><a class="btn btn-primary" href="user_profile_update.php?user_id='.$user_id.'"> Update</a></td>
							</tr>';
						}
					?>
				</table>
			</div>
		</div>
	</div>
</div>
	<?php include('../footer.php') ?>
</body>
</html>