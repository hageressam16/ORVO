<?php
    error_reporting(0);
    $noNavbar = '';
    include 'Init.php';
?>

<?php
    include_once 'OOP/Person.php';
    $person = new Person();
?>

<?php
    if ($_SERVER ['REQUES_METHOD'] = 'POST' && isset($_POST['forget']) ){
      $person = $person->Forgetpassword($_POST);
      header("Location:Index.php");
    }
?>

<div class="row">
  <div class="col-md-12">
    <form role="form" action="" method="POST" style="width:500px;height:480px;border:2px solid rgb(102, 0, 102);border-radius: 12px;color:white;background-color:rgb(231, 179, 255);color:black;margin-left:375px;margin-top:50px;">
      <div style="margin:50px 50px 50px 50px"> <br>
        <h3 style="padding-left:110px;color:white;text-border:2px solid white">Forget Password</h3>
        <br>
        <div class="form-group" style="padding-top:10px;width:400px;">
          <label for="exampleInputPassword1" style="padding-left:4px;font-size:13px;">
            E-mail
          </label>
          <input class="form-control" id="exampleInputPassword1" type="email"name="email" autocomplete="off" required/>
        </div>
        <div class="form-group"style="padding-top:20px;width:400px;">
          <label for="exampleInputEmail1" style="padding-left:4px;font-size:13px;">
            New Passoword
          </label>
          <input class="form-control" id="exampleInputEmail1" type="password"name="pass" required>
          <br>
           <br>
          <button class="btn btn-success"style="margin-top:30px;margin-left:142px;width:120px;font-size:18px;background-color:rgb(102, 0, 102);border:2px solid rgb(102, 0, 102); border-radius: 12px;" type="submit" name="forget" onclick="myFunction()" >
            Submit
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
