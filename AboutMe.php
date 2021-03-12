<?php
    error_reporting(0);
    $noNavbar = '';
    include 'Init.php';
?>
<?php
    include_once 'OOP/Account.php';
    $account = new account();
?>

<?php
    if ($_SERVER ['REQUES_METHOD'] = 'POST' && isset($_POST['save']))
    {
      $acc = $account->EditAccount($_POST);
    }

?>

<div class="container-fluid" style="background-color:rgb(224,224,224,.5);">
	<div class="row" style="margin-left:400px">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4"><br> <br> <br>
				</div>
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
				</div>
			</div>
            <div><br></div>
            			<div class="row">
				<div class="col-md-12">
					<form role="form" action="" method="POST" style="width:500px;color:white;background-color:rgba(255,140,140,.5);color:black;">
                        <div style="margin:50px 50px 50px 50px"> <br>
                        <h3 style="color:white;text-border:2px solid white;">Edit About me</h3> <br>
						<div class="form-group">

							<label for="exampleInputEmail1">
								Birth Of Date
							</label>
							<input class="form-control" id="exampleInputEmail1" name="date" value="19 Oct 1999" required>
						</div>
						<div class="form-group">

							<label for="exampleInputPassword1">
								Mobile number
							</label>
							<input class="form-control" id="exampleInputPassword1" type="numbers"name="number" value="01111111" required>
						</div>
                        <div class="form-group">

							<label for="exampleInputEmail1">
								Lived in
							</label>
							<input class="form-control" id="exampleInputEmail1" type="text" value="October" name="livedin" required/>
						</div>
                        <div class="form-group">

							<label for="exampleInputEmail1">
								Date of joined
							</label>
							<input class="form-control" id="exampleInputEmail1"  value="22 Nov 2017" name="joind" required/>
						</div>

						<button class="btn btn-success" type="submit" name="save">
							Save
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
