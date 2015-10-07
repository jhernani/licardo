<?php

$username = $_POST['username'];
$password = $_POST['user_pwd'];

$con=mysqli_connect("localhost", "root", "", "andalasia");

if(mysqli_connect_errno())
	{
		echo "Error in connecting with the database";
		exit();
	}
	global $con;
	echo $username;
	echo $password;
	$query = mysqli_query($con,"SELECT user_id FROM users WHERE username = '".$username."' AND user_pwd = '".$password."' ");
	if($query)
	{
	$row = mysqli_fetch_array($query,MYSQL_BOTH);
	echo $row['username'];
	echo $row['user_pwd'];
	$_SESSION['username'] = $row['user_id'];
	header("location:home.php");
	}
	else
	header("location:index.php");
	
?>