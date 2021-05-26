<?php
	$con = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($con, 'user_in') or die ("server is not connected");

    
    
	if(isset($_POST['signup'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$district = $_POST['district'];
	    $state = $_POST['state'];
		$pin = $_POST['pin'];
		
    
		$sql = "INSERT INTO register (fname, lname, mobile, email, district,  state, pin) VALUES ('$fname', '$lname', '$mobile', '$email', '$district',  '$state', '$pin')";

		if(mysqli_query($con, $sql)){
			echo "<script type=\"text/javascript\">
			alert('Successfully Registered!');
			window.location='index.php'
			</script>";
		}else{
			echo "Error".$sql."<br>".$con->error;
		}
}


?>