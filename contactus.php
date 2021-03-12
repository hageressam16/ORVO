<?php

    $noNavbar = '';
    include 'Init.php';
    ?>
  <?php
        include_once 'OOP/System.php';
        $system = new System();
    ?>

<?php
    if ($_SERVER ['REQUES_METHOD'] = 'POST' && isset($_POST['send']))
    {
      $sys = $system->Feedback($_POST);
    }
    ?>



    <div class="container-fluid" style="background-color:white;">
	<div class="row" style="margin-left:400px">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4"><br> <br> <br>
				</div>
				<div class="col-md-4">  <h3 style="margin:0 0 0 -300px">Welcome to </h3>
                    <img alt="Orvo" src="image/OrvoLogo.png" style="margin:0 0 0 -300px">
				</div>
				<div class="col-md-4">
				</div>
			</div>
            <div><br></div>

            <div class="row">
				<div class="col-md-12" style="width:500px;color:white;background-color:rgba(0,128,128,.5);color:black;">
                     <h3 style="color:white;text-border:2px solid white;text-align:center">Contact Us</h3>
                    <h4>Visit us :</h4>
                    <h4 style="color:white;padding:0 0 0 5px;text-align:center"><br> *We are the power of Volunteering. Our Idea was to make connection between Volunteers and organizations. If you have any idea or feedback, please visit us.* <br><br>
                    </h4>
                    <h4>*Our Adress is : 25 Mohie el din street. <br>
                    *Or mail us by filling the form
				</h4></div>
			</div>
            			<div class="row">
				<div class="col-md-12" style="width:500px;color:white;background-color:rgba(0,128,128,.5);color:black;">
                     <h3 style="color:white;text-border:2px solid white;text-align:center">Mail Us</h3>
                    <form  method="POST" action="" >
						<div class="form-group">

							<label for="exampleInputEmail1">
								Your Name :
							</label>
							<input class="form-control" id="exampleInputEmail1" type="text" name="name" autocomplete="off" required/>
						</div>
						<div class="form-group">

							<label for="exampleInputPassword1">
								Your Message :
							</label>
							<input class="form-control" id="exampleInputPassword1" type="text" name="message" required/>
						</div>
                        <div style="text-align:center">
						<button class="btn btn-danger" type="submit" name="send" formaction="profile.php">
							Send
						</button></div> <br>
					</form>
				</div>
			</div>
            <br>

	</div>
</div>
