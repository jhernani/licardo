<html>
<head>
<link rel="stylesheet" type="text/css" href="includes/style.css">
  <script type="text/javascript" src="includes/jquery.js"></script>
    <script type="text/javascript" src="includes/main.js"></script>
    <script type="text/javascript" src="includes/semantic.min.js"></script>
    <script type="text/javascript" src="includes/components/tab.min.js"></script>
    <link rel="stylesheet" type="text/css" href="includes/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="includes/components/tab.min.css">
</head>
<title>Home</title>
<body>
<?php session_start();?>

  <div id="banner">
    <img src="images/banner2.jpg">
  </div>
  
  <div align='right'>
<br>
<?php
$user_id= $_SESSION['id'];
				
if(isset($_SESSION['logged']))
{
	$link = mysqli_connect("localhost","root","","andalasia") or die("Error " . mysqli_error($link));	
		if (mysqli_connect_errno()) 
		{ 
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		}
		else 
		{
			$query = "SELECT * FROM users WHERE id=$user_id";
			if ($stmt = mysqli_prepare($link, $query)) 
			{
				$stmt->execute();
				$stmt->bind_result($user_id,$username,$user_pwd);
				while ($stmt->fetch()) 
				{
					echo ' <b>Name: </b>'.$username;
				}
				$stmt->close();
			}
		}
}
else{}
?>  

	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  </div>
  
<div class="ui two item labeled icon menu">
  <a class="item" href="headnurse-nurse.php">
    <i class="users icon"></i>
    Nurses  
  </a>
  <a class="item" href="headnurse-scheduling.php">
  <i class="calendar outline icon"></i>
    Schedule  & Workload Assignment
  </a>
</div>
</body>
</html>