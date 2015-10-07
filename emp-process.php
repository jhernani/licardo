<?php
$emp_fname=$_POST['emp_fname'];
$emp_lname=$_POST['emp_lname'];
$emp_bday=$_POST['emp_bday'];
$emp_sex=$_POST['emp_sex'];
$emp_position=$_POST['emp_position'];
$emp_image=$_POST('emp_image');
$emp_register=$_POST('emo_register');
$emp_status=$_POST('emp_status');

// DATABASE CONNECT ------------------------------------------

$con=mysqli_connect("localhost","root","","andalasia");
if(mysqli_connect_errno())
{
  echo "ERROR CONNECTING DESU!";
  exit();
}
else
{
  $query = "INSERT INTO employee(idno,target,method,reason) VALUES ('".$emp_fname."','".$emp_lname."','".$emp_bday."',
    '".$emp_sex."','".$emp_position."','".$emp_image"','".$emp_register."','".$emp_status."')";
  echo $query;
  
  $result=mysqli_query($con,$query);
  if($result)
  {
    echo "Success" ;
    //header("Refresh:1; URL=home.html");
    
  }
  else
    echo "Fail";
  
}

?>