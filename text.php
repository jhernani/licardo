<?php

  include('header.php');

if (isset($_GET['editID']))
    {
        $var=$_GET['editID'];
    }


$con=mysqli_connect("localhost","root","","andalasia");
    
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

  $result = mysqli_query($con,"SELECT * FROM employee WHERE emp_id = '$var'");

  while($row = mysqli_fetch_array($result)) 
  {
    //id  first last  email gender  birthday  phone uname pword
    $id = $row['emp_id'];
    $fname = $row['emp_fname'];
    $lname = $row['emp_lname'];
    $bday = $row['emp_bday'];
    $sex = $row['emp_sex'];
    $position = $row['emp_position'];
    $regDate  = $row['emp_register'];
    $address =$row['emp_address'];
    $contact = $row['emp_contact'];
    $rel = $row['emp_religion'];
    $nationality = $row['emp_nationality'];
  }
?>




<div class="ui bottom attached tab segment active" data-tab="first">

       <h2 align="center"> N U R S E &nbsp; &nbsp; P R O F I L E </h2><br>
  
<!-- --------------------------------------------- PROFILE INFO -------------------------------------------------------------- -->


  <div class="ui items">
  <div class="item">
    <div class="ui medium circular image">
      <img src="images/2x2.png">
    </div>
    <div class="middle aligned content">

<!-- ------------ PATIENT INFO ---------------- -->

<?php 

	echo '

	  <div class="header">
	  <font family="Century Gothic" size="5px" color="Green">

	  <div class="ui form">

	  				<div class="inline field">
  					<i class="tags icon"></i>
    				<input type="text" name="emp_fname" value='.$fname.'>
    				<input type="text" name="emp_lname" value='.$lname.'>
 	 				</div>
 	  </div>
      </font>
      </div>
      <div class="extra">

             <div class="description">

              	<div class="ui form">

                <div class="leftpart">
                  <font color="green">

                    <div class="inline field">
  					<i class="map icon"></i>
   					<label>Address</label>
    				<input type="text" name="emp_address" value='.$address.'>
 	 				</div>

 	 				<div class="inline field">
  					<i class="call icon"></i>
   					<label>Contact Number</label>
    				<input type="text" name="emp_contact" value='.$contact.'>
 	 				</div>

 	 				<div class="inline field">
  					<i class="flag icon"></i>
   					<label>Nationality</label>
    				<input type="text" name="emp_nationality" value='.$nationality.'>
 	 				</div>

 	 				<div class="inline field">
  					<i class="world icon"></i>
   					<label>Religion</label>
    				<input type="text" name="emp_religion" value='.$rel.'>
 	 				</div>

                </div>

                <div class="rightpart">

                	<div class="inline field">
  					<i class="male icon"></i></i>|<i class="female icon"></i>
   					<label>Gender</label>
    				<input type="text" name="emp_sex" value='.$sex.'>
 	 				</div>

 	 				<div class="inline field">
  					<i class="gift icon"></i>
   					<label>Birthdate</label>
    				<input type="text" name="emp_bday" value='.$bday.'>
 	 				</div>

 	 				<div class="inline field">
  					<i class="calendar icon"></i>
   					<label>Register Date</label>
    				<input type="text" name="emp_register" value='.$regDate.'>
 	 				</div>

 	 				<div class="inline field">
  					<i class="treatment icon"></i>
   					<label>Position</label>
    				<input type="text" name="emp_position" value='.$position.'>
 	 				</div>
                </font>
                </div>
            </div>



      </div>'
      ; 

 ?>
 		<br>
 		<br>
 		<form method="GET" action="text.php">
   		 <?php echo '<input type="hidden" name="editID" value="'.$id.'" />'; ?>
   		 <input type="submit" class="ui right floated  green button" value="Update" />
		 </form>

      </div>
    </div>
  </div>
</div>
</div>

</body>
</html>