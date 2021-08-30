<?php
	include('ap4673i/ccnnxx547.php');
	include('ap4673i/fncnes5632.php');
	//return $conn variable.
if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$fb_Id = $_POST['fb_Id'];
		$profilePictureUrl = $_POST['profilePictureUrl'];
    $C001 = "SELECT * FROM u5u405 WHERE fb_id = $fb_Id";
    $S001 = $cnnx4s->query($C001) or die ("Fallo al consultar fb id");
    $efid = $S001->fetch_assoc();
    if($efid['fb_id'] == $fb_Id){
      echo 'Cuenta Vinculada';
    }
    else{
      $arr = [];
      $arr = [
        'fb_id' => $fb_Id
      ];
      $accion = 'actualizar';
      $parametros = '';
			//x3J3cU74DB('u5u405', $arr, $accion, $p4r4);
    }
		/*$query = "INSERT INTO student(name,email,fb_Id,profilePictureUrl) VALUES ('".$name."','".$email."','".$fb_Id."','".$profilePictureUrl."')";
		$result = mysqli_query($conn , $query) or die(mysqli_error());
		if ($result) {
			// header("LOCATION: fblogin.php?success");
			echo "successful entry";
		}else{
			echo "fuck ho gya";
		}*/
    /*echo '<pre>';
    print_r($_POST);
    echo '</pre>';*/

}else{
	echo "Try again Later";
}

 ?> 