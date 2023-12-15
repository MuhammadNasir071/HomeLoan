
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>			
<!-- //////////////////////////////////// -->
<div>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  		<div class="container ">
		  	<a class="navbar-brand d-flex" href="#">
      			<img src="../assets/img/img_avatar3.png" alt="Logo" style="width:40px;" class="rounded-pill">
				  <h3 class="pl-2">Welcome <?php echo $_SESSION['user']['user_type'];?></h3>
    		</a>
    		<ul class="navbar-nav">
				<li class="nav-item">
        			<a class="nav-link" href="user_panel.php">Home</a>
      			</li>
				<li class="nav-item">
        			<a class="nav-link" href="user_take_loan.php">Take Loan</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="user_loans.php">Loan List</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="user_profile.php">Profile</a>
      			</li>
     			<li class="nav-item">
        			<a class="nav-link" href="../logout.php">Logout</a>
      			</li>
    		</ul>
  		</div>
	</nav>
</div>