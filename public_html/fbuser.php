<?php
require 'connection.php';
function checkuser($conn, $facebook_id, $username, $email)
{
    $sql1 = "select * from registered_users where facebook_id='$facebook_id'";
    $check = mysqli_query($conn,$sql1);
    $checkdta = mysqli_num_rows($check);
    if (empty($checkdta)) { // New user Insertion       
        $query = "INSERT INTO registered_users (facebook_id,name,email) VALUES ('$facebook_id','$username','$email')";
        mysqli_query($conn,$query);
    mysqli_error($query);
    } else { // Returned user data update        
        $queryupdate = "UPDATE registered_users SET name='$username', email='$email' where facebook_id='$facebook_id'";
        mysqli_query($conn,$queryupdate);      
        mysqli_error($query);
    }
}
?>