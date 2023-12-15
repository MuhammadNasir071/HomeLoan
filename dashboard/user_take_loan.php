
<?php
	
include('../conn.php');
include('../functions.php');
include('../session.php');
include('user_header.php');
?>

<div class="container-fluid" style="background-color: darkkhaki;">
	<div class="container" style="padding-bottom:10%;">
		<div class="w-75 m-auto pt-5">
			<div class="alert alert-primary">
				<center><h2>Fill Form For Loan</h2></center>
			</div>
		</div>
		<form action="" method="post">
			<div class="row">
				<div class="col col-6">
					<div class="form-group">
						<label for="">Name</label>
						<input type="text" class="form-control" name="name" required>
					</div>
					<div class="form-group">
						<label for="">CNIC</label>
						<input type="text" class="form-control" name="cnic" required>
					</div>
					<div class="form-group">
						<label for="">Loan Price</label>
						<select name="loan_price" id="" class="form-control">
							<option value="10000">Tier-1, Rs.10000</option>
							<option value="50000">Tier-2, Rs.50000</option>
							<option value="100000">Tier-3, Rs.100000</option>
						</select>
					</div>
				</div>
				<div class="col col-6">
					<div class="form-group">
						<label for="">Father Name</label>
						<input type="text" class="form-control" name="fathar_name" required>
					</div>
					<div class="form-group">
						<label for="">Contact No.</label>
						<input type="text" class="form-control" name="contact" required>
					</div>
					<div class="form-group">
						<label for="">Date</label>
						<input type="text" class="form-control" name="date" required>
					</div>
				</div>
			</div>
			<div class="row">
					<div class="col">
						<div class="form-group">
							<label for="">Select Tier</label>
							<select name="tier_name" id="" class="form-control">
								<option value="T1">Tier 1 (T1) - Housing Units/apartments of up to 3 Marla with covered area of up to 650 square feet. </option>
								<option value="T2">Tier 2 (T2) - Housing Units/apartments of up to 5 Marla with covered area of up to 850 square feet.</option>
								<option value="T3">Tier 3 (T3) - Housing Units/apartments of up to 10 Marla) or apartments with covered area from more than 850 square feet to 1,100 square feet.</option>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group">
					<button type="submit" name="take_loan" class="btn btn-primary"> Submit</button>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- ////////////////////////////// -->
				

<?php

include('../footer.php');

if (isset($_POST['take_loan'])) 
{
	$name            = $_POST['name'];
	$fathar_name          = $_POST['fathar_name'];
	$cnic             = $_POST['cnic'];
	$loan_price        = $_POST['loan_price'];
	$tier_name       = $_POST['tier_name'];
	$contact            = $_POST['contact'];
	$date           = $_POST['date'];
	$status           = 'Pending';
	
	$sql = "INSERT INTO `loan`(`name`, `fathar_name`, `cnic`, `loan_price`, `tier_name`, `contact`, `date`, `status`)
			VALUES ('".$name."','".$fathar_name."','".$cnic."','".$loan_price."',
			'".$tier_name."','".$contact."','".$date."', '$status')";
	$run = mysqli_query($conn,$sql);
	if($run){
		echo '<script>alert("Your Request is submitted")</script>';
	}
	else{
		echo '<script>alert("Something went wrong...!")</script>';
	}
} 
?>
</body>
</html>