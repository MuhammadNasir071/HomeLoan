
<?php
	
include('../conn.php');
include('../functions.php');
include('../session.php');
include('user_header.php');

$sql ="SELECT * FROM `loan`";
$result = mysqli_query($conn,$sql); 
?>

<div class="container-fluid" style="background-color:#d4d3b3;">
	<div class="container" style="padding-bottom:10%;">
		<div class="w-75 m-auto pt-5">
			<div class="alert alert-primary">
				<center><h2>Your Loan List</h2></center>
			</div>
			<div class="row">
				<table class="table">
					<tr>
						<th>Name</th>
						<th>Contact No.</th>
						<th>Loan Price</th>
						<th>Tier Name</th>
						<th>Date</th>
						<th>Status</th>
					</tr>
					<?php
						while($row=mysqli_fetch_assoc($result))
						{
							echo "<tr>
								<td>".$row['name']."</td>
								<td>".$row['contact']."</td>
								<td>".$row['loan_price']."</td>
								<td>".$row['tier_name']."</td>
								<td>".$row['date']."</td>
								<td>".$row['status']."</td>
							</tr>";
						}
					?>
				</table>
			</div>
		</div>
	</div>
</div>

</body>
</html>