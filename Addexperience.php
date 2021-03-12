<?php

    $noNavbar = '';
    include 'Init.php';
?>
<?php
      include_once 'OOP/Experience.php';
      $experience = new Experience();
      ?>

<?php
      if ($_SERVER ['REQUES_METHOD'] = 'POST' && isset($_POST['add'])){
        $AddExperience = $experience->AddExperience($_POST);


    } ?>


  		
				<div class="col-md-12">
					<form role="form" action="" method="POST" style="width:500px;color:white;border:2px solid rgb(128, 0, 0);border-radius:12px;background-color:rgba(255,140,140,.5);color:black;">
                        <div style="margin:50px 50px 50px 50px"> <br>
                        <h3 style="color:white;text-border:2px solid white;">Add Experience</h3> <br>
						<div class="form-group">

							<label for="exampleInputEmail1">
								Organization name
							</label>
							<input class="form-control" id="exampleInputEmail1" type="text" name="organoizationname">
						</div>
						<div class="form-group">

							<label for="exampleInputPassword1">
								Position
							</label>
							<input class="form-control" id="exampleInputPassword1" type="text" name="position">
						</div>
                        <div class="form-group">

							<label for="exampleInputEmail1">
								City
							</label>
							<input class="form-control" id="exampleInputEmail1" type="text" name="city">
						</div>
                        <div class="form-group">

							<label for="exampleInputEmail1">
								Description
							</label>
							<input class="form-control" id="exampleInputEmail1" type="text" name="description">
						</div>
                        <div class="form-group">

							<label for="exampleInputEmail1">
								Time Period
							</label>
							<input class="form-control" id="exampleInputEmail1" type="date" name="timeperiod">
						</div>
						<div class="checkbox">

							<label>
								<input type="checkbox"> <b>Friends</b>
							</label>
						</div>
						<button class="btn btn-success" type="submit" name="add">
							Add
						</button>
                            <br> <br>
                            </div>
					</form>
				</div>
			</div>
            <br> <br> <br>

	</div>
</div>
<?php  include $Temp. 'footer.php'; ?>
