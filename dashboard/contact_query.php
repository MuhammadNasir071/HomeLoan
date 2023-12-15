
<?php
	
include('../conn.php');
include('../functions.php');
include('../session.php');
include('admin_header.php');

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
						<center><h2>Contact Us Queries</h2></center>
					</div>
				
					<table>
						<tbody align="center">
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Subject</th>
								<th>Message</th>
							</tr>
							<?php
								$sql ="SELECT * FROM `contacts`";
								$run = mysqli_query($conn,$sql); 
								while($row=mysqli_fetch_assoc($run))
								{
									echo '<tr>
									<td>'.$row["name"].'</td>
									<td>'.$row["email"].'</td>
									<td>'.$row["subject"].'</td>
									<td>'.$row["message"].'</td>
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