<?php
	require("includes/connect.php");
	session_start();

	if(isset($_POST['submit'])) {
		if($_POST['username'] AND $_POST['user_pwd']) {
			$username = stripslashes($_POST['username']);
			$password = md5(stripslashes($_POST['user_pwd']));
			$q = mysql_query("SELECT user_id FROM users WHERE user_name ='$username' AND user_password_hash='$password'");
			if(mysql_num_rows($q) == 1) {
				$r = mysql_fetch_assoc($q);
				$_SESSION['user'] = $r['user_id'];
				header("location:home.php");
			} else {
				header("location:index.php");
			}
		} else {
			echo"sayup";
		}	
	} else {
		echo"failed";	
	}

?>