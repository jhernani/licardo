	<?php 

	if (isset($_POST['UpdateNurse']))
		{
		$id = $_POST['emp_id'];
   		$fname = $_POST['emp_fname'];
    	$lname = $_POST['emp_lname'];
    	$bday = $_POST['emp_bday'];
    	$sex = $_POST['emp_sex'];
    	$position = $_POST['emp_position'];
    	$regDate  = $_POST['emp_register'];
    	$address =$_POST['emp_address'];
    	$contact = $_POST['emp_contact'];
    	$rel = $_POST['emp_religion'];
    	$nationality = $_POST['emp_nationality'];

			$con=mysqli_connect("localhost","root","","andalasia");
		
			if (mysqli_connect_errno())
		 	{
		 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  	}		
			$result = mysqli_query($con,"UPDATE employee
			SET	emp_fname='$fname', emp_lname='$lname', emp_bday='$bday', emp_sex='$sex', emp_position='$position', emp_register='$regDate',
			emp_address='$address', emp_contact='$contact', emp_religion = '$rel', emp_nationality = '$nationality'	WHERE emp_id='$id'");
			echo'<meta http-equiv="refresh" content="0;URL=headnurse-nurse.php">';
		}

	?>