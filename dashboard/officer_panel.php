
<?php
	
include('../conn.php');
include('../functions.php');
include('../session.php');
include('officer_header.php');

?>


			<div class="details">
				<div class="recentOrders">
					<div class="cardHeader">
						<center><h2>Welcome <?php echo $_SESSION['user']['user_type'];?></h2></center>
					</div>
					<div style="display:flex">
						<div style="width:40%">
							<img src="../assets/img/card1.jpg" alt="">
						</div>
						<div style="width:60%">
							<p>My responsibilities include gathering and analyzing requests, approving and denying loan applications, providing consultations, processing client requests, and producing progress reports. There are also instances where they sign
								important documents, delegate tasks, and resolve issues and concerns.
							</p>
							<h4 style="padding:10px 0px">“Business and life are like a bank account you can't take out more than you put in.”</h4>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>