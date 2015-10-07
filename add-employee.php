<?php

	if (isset($_POST))

	{
    $fname = $_POST['emp_fname'];
    $lname = $_POST['emp_lname'];
    $bday = $_POST['emp_bday'];
    $sex = $_POST['emp_sex'];
    $position = $_POST['emp_position'];
    $address =$_POST['emp_address'];
    $contact = $_POST['emp_contact'];
    $rel = $_POST['emp_religion'];
    $nationality = $_POST['emp_nationality'];

		    $con=mysqli_connect("localhost","root","","andalasia");
                      
                      if(mysqli_connect_errno())
                      {
                        
                        echo"error in connecting with the database";
                        exit();
                      }
                      
                      else
                      {
                        
                        $query = "Insert into employee(emp_fname,emp_lname,emp_bday,emp_sex,emp_position,emp_register,emp_address,emp_contact,emp_religion,emp_nationality) 
                        values ('$fname','$lname','$bday','$sex','$position',CURDATE(),'$address','$contact','$rel','$nationality')";
                        
                        mysqli_query($con,$query);
                        //$stmt= $con->prepare($sqlstmt);
                        //$stmt->bind_param("ssssss", $fname, $lname,$bday,$sex,$pos,$status);
                        ///$stmt->execute();
                        header("Refresh:0;  URL = headnurse-nurse.php");
                     }

                     
    }
    
    else
    {
    echo "FAIL";
    }


?>