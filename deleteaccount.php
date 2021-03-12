<?php

    $noNavbar = '';
    include 'Init.php';
?>

<?php
include_once'OOP/Admin.php';
$admin = new Admin();
?>
<?php
    if ($_SERVER ['REQUES_METHOD'] = 'POST' && isset($_POST['Delete']) ){
      $person = $admin->deleteaccount($_POST);
      header("Location:admin.php");
    }
?>

<div class="row">
  <div class="col-md-12">
    <form role="form"  action="" method="POST" style="width:500px;height:450px;color:white;border:2px solid rgb(128, 0, 0);background-color:rgb(255, 77, 77);border-radius:12px;color:black;margin-left:375px;margin-top:50px;">
      <div style="margin:50px 50px 50px 50px"> <br>
        <h3 style="padding-left:110px;color:white;text-border:2px solid white">Delete Account</h3>
        <br>
        <div class="form-group" style="padding-top:10px;width:400px;">

							<label for="exampleInputEmail1" style="padding-left:4px;font-size:13px;" >
								Account name
							</label>
							<input class="form-control" id="exampleInputEmail1" name="user" placeholder="User Name" type="text" autocomplete="off" required>
						</div>
        <div class="form-group" style="padding-top:10px;width:400px;">
          <label for="exampleInputPassword1" style="padding-left:4px;font-size:13px;">
            E-mail
          </label>
          <input class="form-control" id="exampleInputPassword1" type="email"name="email" placeholder="Email" autocomplete="off" required/>
        </div>
          <br>
           <br>
          <button class="btn btn-success"style="margin-top:30px;margin-left:142px;width:120px;font-size:18px;background-color:rgb(128, 0, 0);border:2px solid rgb(128, 0, 0); border-radius: 12px;" type="submit" name="Delete" onclick="myFunction()" >
            Delete
          </button>
          <br>
           <br>
         </div>
       			</form>
          	</div>
			</div>
              <br> <br> <br>
            </div>




<?php  include $Temp. 'footer.php'; ?>
