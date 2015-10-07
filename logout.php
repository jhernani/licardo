<html>
<head>
		<link rel="stylesheet" type="text/css" href="includes/style.css"/>	
		<script type="text/javascript" src="includes/jquery.js"></script>
		<script type="text/javascript" src="includes/main.js"></script>
		<script type="text/javascript" src="includes/semantic.min.js"></script>
		<script type="text/javascript" src="includes/components/tab.min.js"></script>
		<link rel="stylesheet" type="text/css" href="includes/semantic.min.css">
		<link rel="stylesheet" type="text/css" href="includes/components/tab.min.css">
</head>
<title>
Salutations!
</title>

<body>
<?php session_start();?>

<center>
<font face="Arial" size="-1"/>
<br><br>
<h2> Goodbye! </h2>

<div class="ui input" id="meanie">

<?php
  session_destroy();
  header("Refresh: 1; url=index.php");
?>
	  
</div>
</center>
</font>
</body>
</html>
 