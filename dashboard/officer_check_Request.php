
<?php
	
include('../conn.php');
include('../functions.php');
include('../session.php');
include('officer_header.php');

?>

<style type="text/css">
	.navigation{
		width: 240px;
	}
	.main{
		width: calc(100% - 240px);
		left: 240px;
	}
	.details {
    	margin-top: 800px;
	}
</style>

			<div class="details">
				<div class="recentOrders">
					<div class="cardHeader">
						<center><h2>Loan List</h2></center>
					</div>
				
					<table>
						<tbody align="center">
							<tr>
								<th>Customer Name</th>
								<th>CNIC</th>
								<th>Loan Price</th>
								<th>Tier</th>
								<th>Date</th>
								<th>Status</th>

								<th>Action</th>
							</tr>
							<?php
								$sql ="SELECT * FROM `loan`";
								$run = mysqli_query($conn,$sql); 
								while($row=mysqli_fetch_assoc($run))
								{
									echo '<tr>
									<td>'.$row["name"].'</td>
									<td>'.$row["cnic"].'</td>
									<td>'.$row["loan_price"].'</td>
									<td>'.$row["tier_name"].'</td>
									<td>'.$row["date"].'</td>
									<td>'.$row["status"].'</td>
									<td><a class="btn btn-success" href="officer_update_status.php?user_id='.$row["id"].'">Update</a></td>
							</tr>';
								}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


</body>
</html>