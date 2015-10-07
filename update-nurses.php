<?php
  include('header.php');
  error_reporting(E_ALL ^ E_NOTICE);
    if (isset($_GET['id']))
    {
        $var=$_GET['id'];
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



<div class="ui top attached tabular menu">
 <a class="active item" data-tab="first"> <i class="user icon"></i>
  Profile Information
  </a>
  <a class="item" data-tab="second"> <i class="calendar icon"></i>
    Schedule
  </a>
  <div class="right menu">
    <div class="item">
      <div class="ui transparent icon input">
        <input type="text" placeholder="Search Patient...">
        <i class="search link icon"></i>
      </div>
    </div>
  </div>
</div>




<div class="ui bottom attached tab segment active" data-tab="first">

       <h2 align="center"> P A T I E N T &nbsp; &nbsp; P R O F I L E </h2><br>
  
<!-- --------------------------------------------- PROFILE INFO -------------------------------------------------------------- -->


  <div class="ui items">
  <div class="item">
    <div class="ui medium circular image">
      <img src="images/2x2.png">
    </div>
    <div class="middle aligned content">

<!-- ------------ PATIENT INFO ---------------- -->
      <div class="header"><font family="Century Gothic" size="5px" color="Green">
       <i class="tags icon"></i>&nbsp;<input type="text" name="p_fname" value=<?php $lname?>> <input  type="text" name="p_fname" value= <?php $fname?>>
      </font>
      </div>
      <div class="extra">

              <div class="description">

                <form class="ui form" method="POST" action="add-patient.php">

                  <div class="leftpart">
                  <p><font family="Century Gothic" size="3.5px" color="green">
                    <br><i class="map icon"></i>Address: <?php echo $address; ?> </br>
                    <br><i class="call icon"></i>Contact Number: &nbsp; <?php echo $contact; ?></br>
                    <br><i class="flag icon"></i>Nationality: &nbsp; <?php echo $nationality; ?> </br>
                    <br><i class="world icon"></i>Religion: &nbsp; <?php echo $rel; ?> </br>
                  </p>
                </div>
                <div class="rightpart">
                  <p> <br><i class="child icon"></i>Age: &nbsp; 20 Years Old </br>
                      <br><i class="male icon"></i></i>|<i class="female icon"></i>Gender: &nbsp; <?php echo $sex; ?> </br>
                      <br><i class="cocktail icon"></i>Status: &nbsp; Single </br>
                      <br><i class="map icon"></i>Birth Place: &nbsp; Quezon City </br>
                      <br><i class="gift icon"></i>Birth Date: &nbsp; <?php echo $bday; ?> </br>
                  </p>
                </font>
                </div>

      </div>

      <br>
      <br>

<button class="ui right floated green button" id="editnurse">
  <i class=" setting icon"></i>
  Edit Information
</button>

<button class="ui right floated red button" onclick="window.location.href='headnurse-nurse.php'">
                      <i class=" reply icon"></i>
                        Back
</button>
      </div>
    </div>
  </div>

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
  <input type="Text" placeholder="contact" name="p_age">
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
</div>
</div>

<!-- ----------------------- SECOND TAB ------------------------  -->
<div class="ui bottom attached tab segment" data-tab="second">
</div>





</body>
</html>