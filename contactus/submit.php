<?php
require_once('../include/connect.php');
$name	= $_POST['name'];
$email	= $_POST['email'];
$msg	= $_POST['message'];

if ($name != '' && $email != '' && $msg != '')
	{
	mysqli_query($con,"INSERT INTO report(name,email,message) VALUES('$name','$email','$msg')");
	}
header('Location: ./');
?>