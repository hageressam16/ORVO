<?php
     error_reporting(0);
     include 'Init.php';
     include 'connect.php';

     include_once 'Library/Database.php';
     $db = new Database();
  ?>

  <?php
  if (isset($_GET['u'])) {
	$username = mysqli_real_escape_string($_GET['u']);
  if ($query = "SELECT Username FROM users WHERE  Username = '$username' ") {
    $result = $db->Select($query);
    if ($result==true) {
      $value = $result->fetch_assoc();
      $username = $value['Username'];
    }
  }
}

$check_pic = "SELECT US_Image FROM users WHERE  Username = '$username' ";
  $result = $db->Select($check_pic);
    $value = mysqli_fetch_assoc($result );
    $profile_pic_db = $value['US_Image'];
    if ($profile_pic_db == "") {
      $profile_pic = "image/2721167_orig.png";
  }
  else
  {
  $profile_pic = "image/".$profile_pic_db;
  }
 ?>


<?php

$stmt = $con->prepare("SELECT * FROM experience ");
$stmt->execute();
$row = $stmt->fetchAll();

?>

<br><br><br><br>
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
		</div>
	</div>
  <br>
  <br>
	<div class="row">
    <div class='col-md-2'>
    <?php
    echo "

      <img class='img-thumbnail' alt='Bootstrap Image Preview' src='$profile_pic' height='400px' width='400px'>
      ";
      ?>


            <br> <br>
            <h3>Experiences:</h3>
			<ul>
        <?php
        foreach ($row as $row ) {

          echo "<li>" . $row['Organization name']   . "</li>";
        }
        ?>

			</ul>
			<button class="btn btn-success"  type="button" onclick="location.href ='Addexperience.php'">
				Edit Experience

			</button>
		</div>

        <br> <br> <br>
		<div class="col-md-10">
			<div class="tabbable" id="tabs-935299">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#panel-391294" data-toggle="tab">About</a>
					</li>
					<li>
						<a href="#panel-921629" data-toggle="tab">Posts</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="panel-391294">
						<h3>
				About Me
			</h3>
			<dl>
				<dt>
					Birth Of Date:
				</dt>
				<dd>
					19 Oct 1999
				</dd>
				<dt>
					Mobile Number:
				</dt>
				<dd>
					0111111111
				</dd>
				<dt>
					Lived in:
				</dt>
				<dd>
					October
				</dd>
				<dt>
					Date Of Joined:
				</dt>
				<dd>
                    22 Nov 2017
				</dd>
			</dl>
			<button class="btn btn-success" type="button" onclick="location.href ='AboutMe.php'">
				Edit About me
			</button>
                        <br><br>
			<div class="progress">
				<div class="progress-bar progress-success">
				</div>
			</div>
					</div>
					<div class="tab-pane" id="panel-921629">
		<div class="col-md-10">
            <br>
			<form role="form" action="" style="border: 5px solid white;border-radius:5px;background-color:#f2f2f2;padding: 20px;">
        <?php
        echo "
        <div class='col-md-2'>
          <img class='img-thumbnail' alt='Bootstrap Image Preview' src='$profile_pic' height='100px' width='100px'  style='margin:20px'>
          </div>;"

          ?>
          <br>
          <br>
                <div style="margin:20px 40px 0 40px;">
				<div class="form-group">

					<label for="exampleInputEmail1" style="margin-left:10px">
						<br><br>Write Post
					</label>
					<input class="form-control" id="exampleInputEmail1" type="text" name="post" placeholder="Write Your post" required/>
				</div>
				<div class="form-group">

					<label for="exampleInputFile">
						Add Photo
					</label>
					<input id="exampleInputFile" type="file">
					<p class="help-block">
						Optional
					</p>
				</div>
				<div class="checkbox">

					<label>
						<input type="checkbox">Friends
					</label>
				</div>
				<button class="btn btn-default" type="submit">
					Post
                    </button></div>
			</form> <br> <br>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-10">
		</div>
	</div>
	<div class="row">
        <br> <br> <br>
		<div class="col-md-12">
			<div class="carousel slide" id="carousel-847662">
				<ol class="carousel-indicators">
					<li class="active" data-target="#carousel-847662" data-slide-to="0">
					</li>
					<li data-target="#carousel-847662" data-slide-to="1">
					</li>
					<li data-target="#carousel-847662" data-slide-to="2">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img alt="Carousel Bootstrap First" src="image/golden-palace.jpg">
						<div class="carousel-caption">
							<h4>
								Most important achievments
							</h4>
							<p>
								Welcome to my profile ❤
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="Carousel Bootstrap Second" src="image/india44.jpg">
						<div class="carousel-caption">
							<h4>
								Second Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="Carousel Bootstrap Third" src="image/india-Taj-Mahal-shows-details.jpg">
						<div class="carousel-caption">
							<h4>
								Third Thumbnail label
							</h4>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
						</div>
					</div>
				</div> <a class="left carousel-control" href="#carousel-847662" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-847662" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
            <div>
                <input id="exampleInputFile" type="file" required/>
			</div>
            <div><br><br></div>
			<table class="table" style="border:2px solid black">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Organization
						</th>
						<th>
							Position
						</th>
						<th>
							My Rate
						</th>
					</tr>
				</thead>
				<tbody>
					<tr class="active">
						<td>
							1
						</td>
						<td>
							AAS
						</td>
						<td>
							Organizer
						</td>
						<td>
							8
						</td>
					</tr>
					<tr class="success">
						<td>
							2
						</td>
						<td>
							Fab Lab
						</td>
						<td>
							Multimedia member
						</td>
						<td>
							7
						</td>
					</tr>
				</tbody>
			</table>
            <div><br><br></div>

		</div>
	</div>
</div>


<?php  include $Temp. 'footer.php'; ?>
