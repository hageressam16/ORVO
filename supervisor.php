<?php
    error_reporting(0);
    include 'Init.php';
    include 'connect.php';
    ?>
    <?php
         include_once 'OOP/Supervisor.php';
         $supervisor = new Supervisor();
     ?>


    <?php
          if ($_SERVER ['REQUES_METHOD'] = 'POST' && isset($_POST['send']))
          {
            $send = $supervisor->SendReport($_POST);
          }else {

            $send = $supervisor->sendWaring($_POST);
          }

          ?>

<?php
    $stmt = $con->prepare("SELECT * FROM report_complement ");
    $stmt->execute();
    $row = $stmt->fetchAll();
 ?>


    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
				</div>

				<div class="col-md-4">
        <br>
        <br>
        <br>
        <br>
					<img alt="Bootstrap Image Preview" src="image/IMG_20171109_202913_882.jpg" height="200px" width="200px">
					<h3 class="text-center text-danger" style="margin-left:-220px">
						Supervisor name
					</h3>
				</div>
				<div class="col-md-4">
				</div>
			</div>
					<div class="row">
						<div class="col-md-12">
                            <div class="tabbable" id="tabs-735699">
						<ul class="nav nav-tabs">
							<li>
								<a href="#panel-645945" data-toggle="tab">Warning</a>
							</li>
							<li class="active">
								<a href="#panel-700951" data-toggle="tab">Report</a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane" id="panel-645945">

                                <h3 class="text-left text-danger">
						Warning
					</h3>
                                <form role="form" method="POST">

            <div class="input-group">
                 <label>Email</label>
                 <input type="Email" name="email"  class="form-control" size="50" autocomplete="off" required/>
               </div>
               <br>
               <div class="input-group">
                    <label>Waringmessage</label>
                    <input type="text" name="Waringmessage"  class="form-control" size="50" autocomplete="off" required/>
                  </div>
                  <br>
						<button class="btn btn-default" type="submit" name="warining">
							Send
						</button>
					</form>
							</div>
							<div class="tab-pane active" id="panel-700951">
								<p>

					<form role="form" method="post">
						<div class="form-group">
							 <h3 class="text-left text-danger">
						Report
					</h3>
          <div class="input-group">
               <label>Report Title</label>
               <input type="text" name="reporttitle"  class="form-control" size="50" autocomplete="off" required/>
             </div>
             <br>
             <div class="input-group">
                  <label>Report Description</label>
                  <input type="text" name="reportdescription"  class="form-control" size="43" autocomplete="off" required/>
                </div>
                 <br>
                <div class="input-group">
                     <label>Report Date</label>
                     <input type="text" name="reportdate"  class="form-control" size="50" placeholder="YYYY-MM-DD" autocomplete="off" required/>
                   </div>
                    <br>
                   <div class="input-group">
                        <label>Supervisor ID</label>
                        <input type="text" name="supervisorid" class="form-control" size="48" autocomplete="off" required/>
                      </div>
                       <br>
                      <div class="form-group">

						<button class="btn btn-default" type="submit" name="send">
							Send Report
						</button>
					</form>
							</div>
						</div>
					</div>
				</div>
			</div>
      <br>
      <br>
      <div class="row">
        <div class="col-md-12">
          <table class="table table-bordered" id="SupTable">
            <thead style="background-color:rgb(142,190,255,.5)">
              <tr>
                <th style="text-align:center;">
                  #
                </th>
                <th style="text-align:center;">
                  Complaint Title
                </th>
                <th style="text-align:center;">
                  Complaint Description
                </th>
                <th style="text-align:center;">
                    Complaint Date
                </th>
                <th style="text-align:center;">
                    User ID
                </th>
          </tr>
            </thead>
      <tbody style="text-align:center;">
        <?php
       foreach ($row as $row ) {
         echo "<tr class='success'>";
         echo "<td>" . $row['comID']   . "</td>";
         echo "<td>" . $row['Co_Title'] . "</td>";
         echo "<td>" . $row['Co_Description']    . "</td>";
         echo "<td>" . $row['Co_Date']    . "</td>";
         echo "<td>" . $row['UserID']    . "</td>";
         echo "</tr>";
       }
       ?>



      </tbody>
    </table>
  </div>
</div>
      <br> <br> <br>
        </div>
	</div>
</div>


<?php  include $Temp. 'footer.php'; ?>
