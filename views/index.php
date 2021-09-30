<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
// database connection
include('config.php');

$added = false;


//Add  new vehicle code 

if(isset($_POST['submit'])){
	$u_card = $_POST['card_no'];
	$u_f_name = $_POST['user_first_name'];
	$u_l_name = $_POST['user_last_name'];
	$u_father = $_POST['user_father'];
	$u_aadhar = $_POST['user_aadhar'];
	$u_gender = $_POST['user_gender'];
	$u_email = $_POST['user_email'];
	$u_village = $_POST['village'];
	$u_mother = $_POST['user_mother'];
	
	


	

  	$insert_data = "INSERT INTO student_data(u_reg_no, u_name, u_model, u_chassic, u_aadhar, u_engine, u_man, u_type, u_reg_exp_no, uploaded) VALUES ('u_reg_no', 'u_name', 'u_model', 'u_chassic', 'u_aadhar', 'u_engine', 'u_man', 'u_type', 'u_reg_exp_no',NOW())";
  	$run_data = mysqli_query($con,$insert_data);

  	if($run_data){
		  $added = true;
  	}else{
  		echo "Data not insert";
  	}

}

?>







<!DOCTYPE html>
<html>
<head>
	<title> vehicle</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
<a href="https://lexacademy.in" target="_blank"><img src="https://lexacademy.in/wp-content/uploads/2021/07/lex-academy-online-learning-platform-1.png" alt="" width="350px" ></a><br><hr>

<!-- adding alert notification  -->
<?php
	if($added){
		echo "
			<div class='btn-success' style='padding: 15px; text-align:center;'>
				Your Vehicle Data has been Successfully Added.
			</div><br>
		";
	}

?>





	<a href="logout.php" class="btn btn-success"><i class="fa fa-lock"></i> Logout</a>
	<button class="btn btn-success" type="button" data-toggle="modal" data-target="#myModal">
  <i class="fa fa-plus"></i> Add New Vehicle
  </button>
  
  <hr>
		<table class="table table-bordered table-striped table-hover" id="myTable">
		<thead>
			<tr>
			   <th class="text-center" scope="col">S.N</th>
				<th class="text-center" scope="col">Vehicle Name</th>
				<th class="text-center" scope="col">Registration Number</th>
				<th class="text-center" scope="col">Model</th>
				<th class="text-center" scope="col">Chassis No</th>
				<th class="text-center" scope="col">Group</th>
				<th class="text-center" scope="col">View</th>
				<th class="text-center" scope="col">Edit</th>
				<th class="text-center" scope="col">Delete</th>
			</tr>
		</thead>
			
			
			
		</table>

	</div>


	<!---Add in modal---->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
		<center><img src="#" width="300px" height="80px" alt=""></center>
    
      </div>
      <div class="modal-body">
        <form method="POST" enctype="multipart/form-data">
			
			
<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail4">Registration Number</label>
<input type="text" class="form-control" name="card_no" placeholder="Registration No." maxlength="12" required>
</div>

</div>


<div class="form-row">
<div class="form-group col-md-6">
<label for="firstname">Vehicle Name</label>
<input type="text" class="form-control" name="user_first_name" placeholder="Vehicle Name">
</div>
<div class="form-group col-md-6">
<label for="lastname">Model</label>
<input type="text" class="form-control" name="user_last_name" placeholder="Model">
</div>
</div>


<div class="form-row">
<div class="form-group col-md-6">
<label for="fathername">Chassis No</label>
<input type="text" class="form-control" name="user_father" placeholder="Chassis No">
</div>
<div class="form-group col-md-6">
<label for="mothername">Engine No</label>
<input type="text" class="form-control" name="user_mother" placeholder="Engine No">
</div>
</div>


<div class="form-row" style="color: skyblue;">
<div class="form-group col-md-6">
<label for="email">Manufactured By</label>
<input type="text" class="form-control"  name="user_email" placeholder="Manufactured By">
</div>
<div class="form-group col-md-6">
<label for="aadharno">Aadhar No.</label>
<input type="text" class="form-control" name="user_aadhar" maxlength="12" placeholder="Enter 12-digit Aadhar no. ">
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
<label for="inputState">Vehicle Type</label>
<select id="inputState" name="user_gender" class="form-control">
  <option selected>Choose...</option>
  <option>Bus</option>
  <option>Taxi</option>
  <option>Truck</option>
</select>
</div>
</div>






<div class="form-group">
<label for="inputAddress">Registration Expiry Date</label>
<input type="text" class="form-control" name="village" placeholder="Registration Expiry Date">
</div>
        	
        	 <input type="submit" name="submit" class="btn btn-info btn-large" value="Submit">
        	
        	
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<!------DELETE modal---->




<!-- Modal -->
<?php

$get_data = "SELECT * FROM student_data";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
{
	$id = $row['id'];
	echo "

<div id='$id' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'>&times;</button>
        <h4 class='modal-title text-center'>Are you want to sure??</h4>
      </div>
      <div class='modal-body'>
        <a href='delete.php?id=$id' class='btn btn-danger' style='margin-left:250px'>Delete</a>
      </div>
      
    </div>

  </div>
</div>


	";
	
}


?>


<!-- View modal  -->
<?php 

// <!-- profile modal start -->
$get_data = "SELECT * FROM student_data";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
{
	$id = $row['id'];
	$reg_no = $row['u_reg_no'];
	$name = $row['u_name'];
	$name2 = $row['u_model'];
	$chassic = $row['u_chassic'];
	$aadhar = $row['u_aadhar'];
	$engine = $row['u_engine'];
	$man = $row['u_man'];
	$type = $row['u_type'];
	$reg_exp = $row['u_reg_exp_no'];
	$time = $row['uploaded'];
	echo "

		<div class='modal fade' id='view$id' tabindex='-1' role='dialog' aria-labelledby='userViewModalLabel' aria-hidden='true'>
		<div class='modal-dialog'>
			<div class='modal-content'>
			<div class='modal-header'>
				<h5 class='modal-title' id='exampleModalLabel'>Profile <i class='fa fa-user-circle-o' aria-hidden='true'></i></h5>
				<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
			</div>
			

			</div>   
			</div>
			<div class='modal-footer'>
				<button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
			</div>
			</form>
			</div>
		</div>
		</div> 


    ";
}


// <!-- profile modal end -->


?>





<!----edit Data--->

<?php

$get_data = "SELECT * FROM student_data";
$run_data = mysqli_query($con,$get_data);

while($row = mysqli_fetch_array($run_data))
{
	$id = $row['id'];
	$reg_no = $row['u_reg_no'];
	$name = $row['u_name'];
	$name2 = $row['u_model'];
	$chassic = $row['u_chassic'];
	$aadhar = $row['u_aadhar'];
	$engine = $row['u_engine'];
	$man = $row['u_man'];
	$type = $row['u_type'];
	$reg_exp = $row['u_reg_exp_no'];
	$time = $row['uploaded'];
	echo "

<div id='edit$id' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
             <button type='button' class='close' data-dismiss='modal'>&times;</button>
             <h4 class='modal-title text-center'>Edit your Data</h4> 
      </div>

      
		
		
		

	";
}


?>

<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>

</body>
</html>