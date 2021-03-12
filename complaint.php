<?php
    error_reporting(0);
    session_start();
    $noNavbar = '';
    include 'Init.php';
?>
<?php
    include_once 'OOP/Account.php';
    $account = new account();
?>

<?php
    if ($_SERVER ['REQUES_METHOD'] = 'POST' && isset($_POST['send']))
    {
      $acc = $account->SendComplaint($_POST);
    }

?>

<div class="container-fluid" style="background-color:rgba(224,224,224,.5);">
	<div class="row" style="margin-left:400px">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4"><br> <br> <br>
				</div>
				<div class="col-md-4"><br> <br>
            <img alt="Orvo" src="image/OrvoLogo.png" style="margin:0 0 0 -280px">

				</div>
				<div class="col-md-4">
				</div>
			</div>
            			<div class="row">
				<div class="col-md-12">
					<form role="form" method="POST" action="" style="width:500px;color:white;background-color:rgba(0,128,128,.5);color:black;">
                        <div style="margin:50px 50px 50px 50px"> <br>
                        <h3 style="color:white;text-border:2px solid white;text-align:center">What's your Complaint !</h3> <br>
						<div class="form-group">

							<label for="exampleInputEmail1">
								Title
							</label>
							<input class="form-control" id="exampleInputEmail1" name="Title" type="text">
						</div>
						<div class="form-group">

							<label for="exampleInputPassword1">
								Discreption of the complaint
							</label>
							<input class="form-control" id="exampleInputPassword1" name="Discreption" type="text">
						</div>
                        <div class="form-group">

							<label for="exampleInputEmail1">
								Date
							</label>
							<input class="form-control" id="exampleInputEmail1" name="Date" type="text">
						</div>
                        <div class="form-group">

							<label for="exampleInputEmail1">
								Confirm with your Email
							</label>
							<input class="form-control" id="exampleInputEmail1" name="Email"  type="email">
						</div>
						<button class="btn btn-danger" type="submit" name="send">
							Send Complaint
						</button>
                            <br> <br>
                            </div>
					</form>
				</div>
			</div>
            <br> <br> <br>


		</div>
	</div>
</div>
