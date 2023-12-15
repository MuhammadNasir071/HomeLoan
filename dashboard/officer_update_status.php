
<?php
	
include('../conn.php');
include('../functions.php');
include('../session.php');
include('officer_header.php');

	$id = $_GET['user_id'];
    $sql = "SELECT * from loan where id=".$id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>


			<div class="details">
				<div class="recentOrders">
					<div class="cardHeader">
						<center><h2>Update User Aplication</h2></center>
					</div>
					<div>
						<form method="post">
							<input type="hidden" name="id" value="<?php echo $row['id'];?>">
							<div style="width:60%">
								<label>Name:</label><br>
								<input type="text" class="btn" name="name" value="<?php echo $row['name'];?>" Readonly style="width:400px;border:1 px solid gray;">
							</div><br>
							<div style="width:60%">
								<label>Loan Price:</label><br>
								<input type="" class="btn" name="name" value="<?php echo $row['loan_price'];?>" Readonly style="width:400px;border:1 px solid gray;">
							</div><br>
							<div>
								<label for="">Status</label><br>
								<select name="status" class="btn" id="" style="width:400px;border:1 px solid gray;">
									<option value="Cencel">Cencel - Application</option>
									<option value="Approved">Approved - Application</option>
									<option value="Verifying">Verifying - Application</option>
								</select>
							</div>
							<br>
							<button type="submit" name="update_application">Update</button>
						</form>
					</div>
				   </div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php

	if (isset($_POST['update_application']))
	{
		$status = $_POST['status'];
		$id = $_POST['id'];

		$query = "UPDATE `loan` SET status='$status' WHERE id=$id";
		$result = mysqli_query($conn,$query);
		if($result){
			header('location: officer_check_Request.php');
		}
		else{
			echo '<script>alert("Something went wrong...!")</script>';
		}
	}
?>

</body>
</html>