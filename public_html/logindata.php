<?php
session_start();
	include('ap4673i/ccnnxx547.php');
	include('ap4673i/fncnes5632.php');
	//return $conn variable.
if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$fb_Id = $_POST['fb_Id'];
    $id = $_POST['id'];
		$profilePictureUrl = $_POST['profilePictureUrl'];
    $C001 = "SELECT * FROM u5u405 WHERE fb_id = $fb_Id";
    $S001 = $cnnx4s->query($C001) or die ("Fallo al consultar fb id");
    $efid = $S001->fetch_assoc();
    if($efid['fb_id'] == $fb_Id){
      $usuariom = $efid['u5hUS8ir5'];
      echo $usuariom;
    }
    else{
      $arr = [];
      $arr = [
        'fb_id' => $fb_Id
      ];
      $accion = 'actualizar';
      $parametros = 'u5hID8ir5 = '.$id;
			x3J3cU74DB('u5u405', $arr, $accion, $parametros);
      echo 'Se vinculo la cuenta';
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