<?php 
session_start();

// connect to database
$conn = mysqli_connect('localhost', 'root', '', 'dream_home_loan');

// variable declaration
$first_name = "";
$last_name  = "";
$email      = "";
$NIC        = "";
$gender     = "";
$password_1 = "";
$password_2 = "";
$contact    = "";
$address    = "";
$errors   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $conn, $errors, $username, $email ;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	
	$first_name  =  $_POST['username'];
	// $last_name   =  $_POST['last_name'];
	$email       =  $_POST['email'];
	$NIC         =  $_POST['NIC'];
	$gender      =  $_POST['gender'];
	$password_1  =  $_POST['password'];
	$password_2  =  $_POST['con-password'];
	$contact     =  $_POST['contact'];
	$address     =  $_POST['address'];
	

	// form validation: ensure that the form is correctly filled
	if (empty($first_name)) { 
		array_push($errors, "User Name is required"); 
	}
	// if (empty($last_name)) { 
	// 	array_push($errors, "last Name is required"); 
	// }
	
	if (empty($email)) { 
		array_push($errors, "User Email is required"); 
	}

	if (empty($NIC)) { 
		array_push($errors, "NIC is required"); 
	}
	

	if (empty($gender)) { 
		array_push($errors, "Gender is required"); 
	}
	
	
	if (empty($password_1)) { 
		array_push($errors, "Password is required"); 
	}
	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
		echo "The two passwords do not match";
	 }


	if (empty($contact)) { 
		array_push($errors, "Contact is required"); 
	}

	if (empty($address)) { 
		array_push($errors, "Address is required"); 
	}

	// register user if there are no errors in the form
	if (count($errors) == 0) 
	{
		// $password = md5($password_1);//encrypt the

		$password = $password_1;

		 // password before saving in the database

			// INSERT INTO `user_info`(`user_id`, `user_name`, `last_name`, `NIC`, `contact`, `address`, `gender`, `user_email`, `user_password`, `user_type`) VALUES 

			$query = "INSERT INTO `user_info`( `user_name`, `last_name`, `NIC`, `contact`, `address`, `gender`, `user_email`, `user_password`, `user_type`) 

			VALUES('$first_name', 'hanif','$NIC','$contact', '$address', '$gender', '$email', '$password', 'user')";
			mysqli_query($conn, $query);


			
			// get id of the created user
			$logged_in_user_id = mysqli_insert_id($conn);

			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
			
			echo '<script>alert("You are now Registered.. Please Login First")</script>';
			echo '<script>window.location="login.php"</script>';			
		
	}
}

// return user array from their id
function getUserById($id){
	global $conn;
	$query = "SELECT * FROM user_info WHERE user_id=" . $id;
	$result = mysqli_query($conn, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $conn;
	return mysqli_real_escape_string($conn, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<script>alert("';
		foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '")</script>';
	}
}	

function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}

if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $conn, $username, $errors; 

	// grap form values
	$username = $_POST['username'];
	$password = $_POST['password'];

	// make sure form is filled properly
	if (empty($username)) {
		array_push($errors, "UserName is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		// $password = md5($password);

		$query = "SELECT * FROM `user_info` WHERE `user_name`='$username' AND `user_password`='$password' LIMIT 1";
		$results = mysqli_query($conn, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: dashboard/admin_panel.php');		  
			}


			elseif ($logged_in_user['user_type'] == 'officer')
			{

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";
				header('location: dashboard/officer_panel.php');		  
			}




			else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "You are now logged in";

				echo '<script>alert("You are now logged in ")</script>';
			    echo '<script>window.location="dashboard/user_panel.php"</script>';	
			}
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}

