<?php
	include('ap4673i/ccnnxx547.php');
	//return $conn variable.
/*if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$fb_Id = $_POST['fb_Id'];
		$profilePictureUrl = $_POST['profilePictureUrl'];*/
		/*$query = "INSERT INTO student(name,email,fb_Id,profilePictureUrl) VALUES ('".$name."','".$email."','".$fb_Id."','".$profilePictureUrl."')";
		$result = mysqli_query($conn , $query) or die(mysqli_error());
		if ($result) {
			// header("LOCATION: fblogin.php?success");
			echo "successful entry";
		}else{
			echo "fuck ho gya";
		}*/
    echo '<pre>';
    print_r($_REQUEST);
    echo '</pre>';

/*}else{
	echo "Try again Later";
}*/

 ?> 