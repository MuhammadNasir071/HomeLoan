
<?php
    include('../conn.php');
    include('../functions.php');
    include('../session.php');
    include('user_header.php');
?>

<div class="container-fluid">
	<div class="container" style="padding-bottom:10%;">
		<div class="w-75 m-auto pt-5">
			<div class="alert">
				<center><h2>Get in Touch</h2></center>
			</div>
		</div>
        <div class="row">
            <div class="col col-md-4">
                <img src="../assets/img/card1.jpg" alt="" style="width:335px;">
                <h4></h4>
            </div>
            <div class="col col-md-8">
                <div>
                    <h4>Send us your query by contacting us & Let's get started.</h4>
                </div>
                <form class="mt-3" action="" method="post">
                    <div class="row">
                        <div class="col col-6">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="col col-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-6">
                            <div class="form-group">
                                <label for="">Subject</label>
                                <input type="text" class="form-control" name="subject" required>
                            </div>
                        </div>
                        <div class="col col-md-6">
                            <div class="form-group">
                                <label for="">Message</label>
                                <textarea type="text" class="form-control" name="message" placeholder="Please write something here..." required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-6">
                            <button type="submit" name="contact" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>	
	</div>
</div>
<!-- ////////////////////////////// -->
				

<?php

include('../footer.php');

if (isset($_POST['contact'])) 
{
	$name           = $_POST['name'];
	$email          = $_POST['email'];
	$subject        = $_POST['subject'];
	$message        = $_POST['message'];
	
	$sql = "INSERT INTO `contacts`(`name`, `email`, `subject`, `message`)
			VALUES ('".$name."','".$email."','".$subject."','".$message."')";
	$run = mysqli_query($conn,$sql);
	if($run){
        header('location: user_profile.php');
	}
	else{
		echo '<script>alert("Something went wrong...!")</script>';
	}
} 
?>
</body>
</html>