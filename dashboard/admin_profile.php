<?php
	
include('../conn.php');
include('../functions.php');
include('../session.php');
include('admin_header.php');

?>



		<div class="details">
				<div class="recentOrders">
					<div class="cardHeader">
						<center><h2>My Profile</h2></center>
						
					</div>
				
					<table>
						<thead >
							<tr>
								<th>User ID</th>
								<th>User Name</th>
								<th>User Last Name</th>
								<th>User Email</th>
								<th>User Password</th>
								<th>User Type</th>
							</tr>
						</thead>
						<tbody align="center">
							<tr>
								<td><?php echo $_SESSION['user']['user_id'];?></td>
								<td><?php echo $_SESSION['user']['user_name'];?></td>
								<td><?php echo $_SESSION['user']['last_name'];?> </td>
								<td><?php echo $_SESSION['user']['user_email'];?></td>
								<td><?php echo $_SESSION['user']['user_password'];?></td>
								<td><?php echo $_SESSION['user']['user_type'];?></td>
							</tr>
							
						</tbody>
					</table>
				
				</div>
				<!-- <div class="recentCustomers">
					<div class="cardHeader">
						<h2>Recent Customers</h2>
					</div>
				</div> -->
			</div>






		</div>
	</div>




</div>

<script type="text/javascript">
	
	function toggleMenu(){
		let toggle =  document.querySelector('.toggle');
		let navigation = document.querySelector('.navigation');
		let main = document.querySelector('.main');
		toggle.classList.toggle('active');
		navigation.classList.toggle('active');
		main.classList.toggle('active');
	}
</script>

</body>
</html>