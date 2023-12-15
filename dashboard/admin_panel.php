
<?php
	
include('../conn.php');
include('../functions.php');
include('../session.php');
include('admin_header.php');

?>


			<div class="details">
				<div class="recentOrders">
					<div class="cardHeader">
						<center><h2>Welcome <?php echo $_SESSION['user']['user_type'];?></h2></center>
						<!-- <a href="#"
						class="btn">View All</a> -->
					</div>
				
					

					<p>We know how important it is for you to be able to trust the advice you are receiving from our experts.

We can assist you with your personal finances including your home loan, car loan and insurances  We can also help you organise finance to start or grow your business and fund your assets.

We don't charge to find the right home loan for you. Your broker is paid by the lender once your loan settles.</p>
				</div>
				
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