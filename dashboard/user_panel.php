
<?php
	
include('../conn.php');
include('../functions.php');
include('../session.php');
include('user_header.php');

?>

<div class="container-fluid" style="background-color:#d4d3b3;" >
	<div class="container py-5" >
		<div class="w-75 m-auto">
			<div class="row">
				<div class="col col-md-4 mx-5">
					<div class="card pt-4" style="border: 2px solid green;height:160px">
						<center>
							<h2>My Loans</h2>
							<a class="btn btn-danger" href="user_loans.php"><p>View</p></a>
						</center>
					</div>
				</div>
				<div class="col col-md-4 mx-5">
					<div class="card pt-4" style="border: 2px solid green;height:160px">
						<center>
							<h2>Take A Loan</h2>
							<a class="btn btn-primary" style="padding:10px 15px" href="user_take_loan.php"><p>View</p></a>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="section-2" id="call">
        <div class="container">
            <div class="pt-5 mt-2">
                <center><h1>Our Servics</h1></center>
            </div>
            <div class="row my-5 ml-5">
                <div class="col col-md-3 ml-5">
                    <div class="card">
                        <img class="card-img-top" src="../assets/img/card1.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h6 class="card-title">A home of your own is a blessing and a long held aspiration of many.</h6>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3 ml-5">
                    <div class="card">
                        <img class="card-img-top" src="../assets/img/card3.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h6 class="card-title">It’s easy to get a loan unless you need it..</h6>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3 ml-5">
                    <div class="card">
                        <img class="card-img-top" src="../assets/img/card2.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h6 class="card-title">Good advice is never as helpful as an interest-free loan.</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-5 pb-5 ml-5">
                <div class="col col-md-3 ml-5">
                    <div class="card">
                        <img class="card-img-top" src="../assets/img/card3.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h6 class="card-title">A home of your own is a blessing and a long held aspiration of many.</h6>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3 ml-5">
                    <div class="card">
                        <img class="card-img-top" src="../assets/img/card1.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h6 class="card-title">It’s easy to get a loan unless you need it..</h6>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3 ml-5">
                    <div class="card">
                        <img class="card-img-top" src="../assets/img/card3.jpg" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h6 class="card-title">Good advice is never as helpful as an interest-free loan.</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- footer start  -->
<?php
        include('../footer.php');
    ?>
</body>
</html>