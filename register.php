<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin | Loan Management System</title>
 	

<?php include('./header.php'); ?>
<?php include('./db_connect.php'); ?>
<?php include('./functions.php'); ?>

 <?php 
// session_start();
// if(isset($_SESSION['login_id']))
// header("location:index.php?page=home");

?>

</head>
<style>
	body{
		width: 100%;
	    height: calc(100%);
	    /*background: #007bff;*/
	}
	main#main{
		width:100%;
		height: calc(100%);
		background:white;
	}
	#login-right{
		position: absolute;
		right:0;
		width:40%;
		height: calc(100%);
		background:white;
		display: flex;
		align-items: center;
	}
	#login-left{
		position: absolute;
		left:0;
		width:60%;
		height: calc(100%);
		background:#59b6ec61;
		display: flex;
		align-items: center;
		background: url(assets/img/welcome_background.jpg);
	    background-repeat: no-repeat;
	    background-size: cover;
	}
	#login-right .card{
		margin: auto;
		z-index: 1
	}
	.logo {
    margin: auto;
    font-size: 8rem;
    background: white;
    padding: .5em 0.7em;
    border-radius: 50% 50%;
    color: #000000b3;
    z-index: 10;
}
div#login-right::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: calc(100%);
    height: calc(100%);
    background: #000000e0;
}

</style>

<body>


  <main id="main" class="bg-dark">
  		<div id="login-left">
  			
  		</div>

  		<div id="login-right">
  			<div class="card col-md-8">
  				<div class="card-body">
  						<!-- <div class="logo">
			  				<span class="fa fa-money-bill-wave"></span>
			  			</div> -->
			  			<h4>Register Here</h4>
  			<form id="login-form" method="post">
  				<?php echo display_error(); ?>
  						<div class="form-group">
  							<label for="username" class="control-label">Username</label>
  							<input type="text" id="username" name="username" class="form-control">
  						</div>


  						<div class="form-group">
  							<label for="username" class="control-label">E-mail</label>
  							<input type="text" id="username" name="email" class="form-control">
  						</div>


  						<div class="form-group">
  							<label for="username" class="control-label">NIC</label>
  							<input type="text" id="username" name="NIC" class="form-control">
  						</div>



  						<div class="form-group">
  							<label for="username" class="control-label">Gender</label>
  							<!-- <input type="text" id="username" name="username" class="form-control"> -->
  						<input type="radio" name="gender" value="Female"> <label> Female</label>

  						<input type="radio" name="gender" value="Male"> <label> Male</label>
  						</div>


  						<div class="form-group">
  							<label for="password" class="control-label">Password</label>
  							<input type="password" id="password" name="password" class="form-control">
  						</div>


  						<div class="form-group">
  							<label for="password" class="control-label">Confirm Password</label>
  							<input type="password" id="password" name="con-password" class="form-control">
  						</div>


  						<div class="form-group">
  							<label for="password" class="control-label">Contact no.</label>
  							<input type="text" id="password" name="contact" class="form-control">
  						</div>

  						<div class="form-group">
  							<label for="password" class="control-label">Address</label>
  							<input type="text" id="password" name="address" class="form-control">
  						</div>


  					<center><button class="btn-sm btn-block btn-wave col-md-4 btn-primary" name="register_btn">Register</button></center>
  						<br>
  						 Already Member ? <a href="login.php">Click Here</a>
  			</form>
  				</div>
  			</div>
  		</div>
   

  </main>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


</body>

</html>