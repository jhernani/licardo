<?php

include("header.php");

?>

<div class="ui top attached tabular menu">
  <a class="active item" data-tab="first"> <i class="user icon"></i>
	Patient List
  </a>
  <div class="right menu">
    <div class="item">
      <div class="ui transparent icon input">
        <input type="text" placeholder="Search users...">
        <i class="search link icon"></i>
      </div>
    </div>
  </div>
</div>
<div class="ui bottom attached tab segment active" data-tab="first">

<button class="ui left floated teal button" id="adduser">
  <i class=" user icon"></i>
  Add Patient
</button>
<br>
<br>
<!-- --------------------------------------------- EMPLOYEE LIST -------------------------------------------------------------- -->
   <table class="ui striped table">
  <thead>
    <tr>
      <th>Name</th>
      <th>Last Admitted</th>
  
      
    </tr>
  </thead>
  <tbody>
   <?php
    $con=mysqli_connect("localhost","root","","andalasia");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$query = "SELECT patient.p_id as ID, patient.p_lname as Lname, patient.p_fname as Fname, admission.adm_admission_date as admDate FROM patient INNER JOIN admission ON patient.p_id = admission.adm_id";

$result = mysqli_query($con,$query);

    while($row = mysqli_fetch_array($result)) 

        {
          extract($row);
          echo '<tr>';
          echo '<td><a href="patient-profile.php?id='.$ID.'"> '.$Fname.' '.$Lname.' </a></td>';
          echo "<td> ".$admDate." </td>";
          echo '</tr>';
        }

?>
  </tbody>
</table>
</div>
<!-- ----------------------------------------------------------- FORMS ---------------------------------------------------- -->


<div class="ui modal">
  <i class="close icon"></i>
  <div class="header">
    <i class="user icon"></i>
    Add Patient
  </div>
  <div class="image content">
       <form class="ui form" method="POST" action="add-patient.php">

    <h4 class="ui dividing header">Patient Information</h4>
  
   <div class="two fields">
      <div class="field">
        <label>First Name</label>
        <input placeholder="First Name" type="text" name="p_fname">
      </div>
      <div class="field">
        <label>Last Name</label>
        <input placeholder="Last Name" type="text" name="p_lname">
      </div>
    </div>

    <div class="two fields">

      <div class="field">
        <label>Address</label>
        <input placeholder="Address" type="text" name="p_address">
      </div>
      <div class="field">
        <label>Contact</label>
        <input placeholder="Contact" type="text" name="p_contact">
      </div>
    </div>
   

<!-- -------------------- GENDER DROPDOWN ------------ -->
    
  <div class="three fields">
    <div class="field">
   <label>Gender</label>
   <div class="ui selection dropdown">
  <input type="hidden" name="p_sex">
  <i class="dropdown icon"></i>
  <div class="default text">Gender</div>
  <div class="menu">
    <div class="item" data-value="Male">Male</div>
    <div class="item" data-value="Female">Female</div>
  </div>
</div>
</div>

  <div class="field">
   <label>Age</label>
  <input type="Text" placeholder="Age" name="p_age">
</div>

<div class="field">   
    <label>Birth Date</label>
  <input type="date" name="p_birthdate">
  </div> 
</div>

<!-- ---------------DIFFERENT FIELD------------ -->
 <div class="four fields">
  <div class="field">
        <label>Birthplace</label>
        <input placeholder="Birthplace" type="text" name="p_birthplace">
      </div>
      <div class="field">
        <label>Nationality</label>
        <input placeholder="Nationality" type="text" name="p_nationality">
      </div>
      <div class="field">
        <label>Religion</label>
        <input placeholder="Religion" type="text" name="p_religion">
      </div>

      <div class="field">
   <label>Civil Status</label>
   <div class="ui selection dropdown">
  <input type="hidden" name="p_status">
  <i class="dropdown icon"></i>
  <div class="default text">Civil Status</div>
  <div class="menu">
    <div class="item" data-value="Single">Single</div>
    <div class="item" data-value="Married">Married</div>
    <div class="item" data-value="Widowed">Widowed</div>
  </div>
</div>
</div>

    </div>

<div class="two fields">
<div class="field">
    <label>Father's Name</label>
    <input placeholder="Father's Name" type="text" name="p_father_name">
  </div>
<div class="field">
    <label>Mother's Name</label>
  <input placeholder="Mother's Name" type="text" name="p_mother_name">
  </div>


<!-- -------------- END desu desu ne ------------------------ -->

    
</div>
<div class="actions">
    <div class="ui red deny button">
      Cancel
    </div>
    <button class="ui positive right labaled icon button" type="submit">Submit
  <i class="checkmark icon"></i>
  </button>
  </div>
</form>
  </div>
  
</div>
</body>
</html>