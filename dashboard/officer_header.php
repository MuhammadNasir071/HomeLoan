
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Officer - Dashboard</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
<div class="container-fluid" id="connnti">
	<div class="navigation">
		<ul>
			<li>
				<a href="#">
				    <span class="icon"><i class="fa fa-apple" aria-hidden="true"></i></span>
				    <span class="title"><h2>OHLMS</h2></span>
			    </a>
			</li>
			<li>
				<a href="officer_panel.php">
				    <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
				    <span class="title">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="officer_check_Request.php">
					<span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>
					<span class="title">Applications</span>
				</a>
			</li>
			
			<li>
				<a href="../logout.php">
					<span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
					<span class="title">Sign Out</span>
				</a>
			</li>
		</ul>
	</div>


	<div class="main">
		<div class="topbar">
			<div class="toggle" onclick="toggleMenu();"></div>
			<div class="search">
				<label>
					<input type="text" placeholder="Search here..." name="">
					<i class="fa fa-search" aria-hidden="true"></i>
				</label>				
			</div>
			<div class="name">
				<h4>Welcome : <a href="admin_profile.php"><u><?php echo $_SESSION['user']['user_name']; ?></u></a></h4>
			</div>

			<div class="user">
					<img src="user.jpg">
			</div>
			
