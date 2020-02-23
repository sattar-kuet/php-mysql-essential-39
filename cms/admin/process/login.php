<?php
include('../../database/connect.php');

// Login 
extract($_POST);
//$email
$password = sha1($password);

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

$result = mysqli_query($connection,$sql);

if(mysqli_num_rows($result)==1){
  // login
  // redirect to dashboard
	echo 'login successful!';
}else{
	echo 'email/password miss match';
}

?>