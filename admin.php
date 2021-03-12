<?php include 'Init.php';
      include 'connect.php';?>

<?php
$stmt = $con->prepare("SELECT * FROM supervisor ");
$stmt->execute();
$row = $stmt->fetchAll();

$stmt = $con->prepare("SELECT * FROM users ");
$stmt->execute();
$ROW = $stmt->fetchAll();

$stmt = $con->prepare("SELECT * FROM report ");
$stmt->execute();
$result = $stmt->fetchAll();
?>




<div class="container-fluid" style="background-image:url('image/Earth1.jpg');background-repeat: no-repeat;background-attachment: fixed;background-position:full">
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
            <br> <br> <br>
						<br>
			<img alt="Bootstrap Image Preview" src="image/IMG_20171109_202913_882.jpg" height="300px" width="300px" style="margin-left:50px">
			<h3 class="text-center">
				Huda Almowafy <br> <br>
			</h3>
		</div>
		<div class="col-md-4">
		</div>
	</div>
	<div class="row">

		<div class="col-md-12">
			<table class="table table-bordered" id="SupTable">
				<thead style="background-color:rgb(142,190,255,.5)">
					<tr>
						<th style="text-align:center;">
							#
						</th>
						<th style="text-align:center;">
							Supervisor Name
						</th>
						<th style="text-align:center;">
							E-mail
						</th>
						<th style="text-align:center;">
							Action
						</th>
					</tr>
				</thead>
				<tbody style="text-align:center;">
						<?php
						foreach ($row as $row ) {
							echo "<tr class='success'>";
							echo "<td>" . $row['Supervisor_ID']   . "</td>";
							echo "<td>" . $row['SU_Username'] . "</td>";
							echo "<td>" . $row['SU_Email']    . "</td>";
							echo "<td>
							<a href='deletesupervisor.php'  class='btn btn-danger'>Delete</a>
							</td>";
							echo "</tr>";
						}
						?>

				</tbody>
			</table>
			<div style="padding-left:1px;">
				<a href="Addsupervisor.php" class="btn btn-primary">+ Add New Supervisor</a>
			</div>
			<br>
			<br>
			<br>

			<table class="table table-bordered">
                <thead style="background-color:rgb(142,190,255,.5)">
					<tr >
						<th style="text-align:center;">
							#
						</th>
						<th style="text-align:center;">
							Account name
						</th>
						<th style="text-align:center;">
							E-mail
						</th>
						<th style="text-align:center;">
							Action
						</th>
					</tr>
				</thead>
				<tbody style="text-align:center;">
          <?php
          foreach ($ROW as $ROW ) {
            echo "<tr class='success'>";
            echo "<td>" . $ROW['UserID']   . "</td>";
            echo "<td>" . $ROW['Username'] . "</td>";
            echo "<td>" . $ROW['US_Email']    . "</td>";
            echo "<td>
            <a href='deleteaccount.php'  class='btn btn-danger'>Delete</a>
              <a href='closeaccount.php'  class='btn btn-success'>Close</a>
            </td>";
            echo "</tr>";
          }
          ?>
				</tbody>
			</table>
		</div>
	</div>
        <br> <br> <br>

        <div class="row">
      		<div class="col-md-12">
      			<table class="table table-bordered" id="SupTable">
      				<thead style="background-color:rgb(142,190,255,.5)">
      					<tr>
      						<th style="text-align:center;">
      							#
      						</th>
      						<th style="text-align:center;">
      							Report Title
      						</th>
      						<th style="text-align:center;">
      							Report Description
      						</th>
      						<th style="text-align:center;">
      								Report Date
      						</th>
                  <th style="text-align:center;">
                      SupervisorID
                  </th>



            </tr>
      				</thead>
				<tbody style="text-align:center;">
          <?php
          foreach ($result as $result ) {
            echo "<tr class='success'>";
            echo "<td>" . $result['ReportID']   . "</td>";
            echo "<td>" . $result['Re_Title'] . "</td>";
            echo "<td>" . $result['Re_Description']    . "</td>";
            echo "<td>" . $result['Re_date']    . "</td>";
            echo "<td>" . $result['SupervisorID']    . "</td>";
            echo "</tr>";
          }
          ?>

				</tbody>
			</table>
		</div>
	</div>
        <br> <br> <br>
	</div>

    <script>
function myFunction() {
    var table = document.getElementById("SupTable");
    var row = table.insertRow(-1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    cell1.innerHTML = "0";
    counter++;
    cell2.innerHTML = "Gamal";
    cell3.innerHTML = "gamal@gmail.com";
}
   </script>

<?php  include $Temp. 'footer.php'; ?>
