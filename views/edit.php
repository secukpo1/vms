<?php
include('config.php');

$id = $_GET['id'];

if(isset($_POST['submit']))
{
	$u_card = $_POST['card_no'];
	$u_f_name = $_POST['user_first_name'];
	$u_l_name = $_POST['user_last_name'];
	$u_father = $_POST['user_father'];
	$u_aadhar = $_POST['user_aadhar'];
	$u_gender = $_POST['user_gender'];
	$u_email = $_POST['user_email'];
	$u_village = $_POST['village'];
	$u_mother = $_POST['user_mother'];
	
	

	$update = "UPDATE student_data SET u_reg_no ='$u_reg_no', u_name='$u_name', u_model ='$u_model', u_chassic ='$u_chassic', u_aadhar ='$u_aadhar', u_engine='$u_engine', u_man='$u_man', u_type='$u_type', u_reg_exp_no='$u_reg_exp_no' WHERE id=$id ";
	$run_update = mysqli_query($con,$update);

	if($run_update){
		header('location:index.php');
	}else{
		echo "Data not update";
	}
}

?>