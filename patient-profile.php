<?php
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

  $result = mysqli_query($con,"SELECT * FROM patient WHERE p_id = '$var'");

  while($row = mysqli_fetch_array($result)) 
  {
    //id  first last  email gender  birthday  phone uname pword
    $id = $row['p_id'];
    $fname = $row['p_fname'];
    $lname = $row['p_lname'];
    $address = $row['p_address'];
    $contact = $row['p_contact'];
    $age = $row['p_age'];
    $sex = $row['p_sex'];
    $status = $row['p_status'];
    $nationality = $row['p_nationality'];
    $religion = $row['p_religion'];
    $birthplace = $row['p_birthplace'];
    $bday = $row['p_birthdate'];
    $father = $row['p_father_name'];
    $mother = $row['p_mother_name'];
  }
?>


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
<title>Patient Profile</title>
<body>
  <div id="banner">
    <img src="images/Banner0.0.png">
  </div>
<div class="ui top attached tabular menu">
 <a class="active item" data-tab="first"> <i class="user icon"></i>
  Profile Information
  </a>
  <a class="item" data-tab="second"> <i class="call icon"></i>
    Contact Person
  </a>
    <a class="item" data-tab="third"> <i class="lab icon"></i>
    Diagnosis
  </a>
   </a>
    <a class="item" data-tab="fourth"> <i class="info icon"></i>
    Work Information
  </a>
   </a>
    <a class="item" data-tab="fifth"> <i class="doctor  icon"></i>
    Laboratory
  </a>
  <a class="item" data-tab="sixth"> <i class="emergency icon"></i>
    Admission
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



<!-- ---------------- FIRST TAB --------------- -->
<div class="ui bottom attached tab segment active" data-tab="first">

       <h2 align="center"> P A T I E N T &nbsp; &nbsp; P R O F I L E </h2>

  <div class="ui items">
  <div class="item">
    <div class="ui medium circular image">
      <img src="images/patient-default.png">
    </div>
    <div class="middle aligned content">

<!-- ------------ PATIENT INFO ---------------- -->
      <div class="header"><font family="Century Gothic" size="5px" color="Green">
       <i class="tags icon"></i>&nbsp;<?php echo $fname ,"&nbsp;", $lname; ?>
      </font>
      </div>
      <div class="extra">

              <div class="description">

                           <div class="leftpart">
                  <p><font family="Century Gothic" size="3.5px" color="green">
                    <br><i class="marker icon"></i>Address: &nbsp; <?php echo $address; ?> </br>
                    <br><i class="call icon"></i>Contact Number: &nbsp; <?php echo $contact; ?></br>
                    <br><i class="flag icon"></i>Nationality: &nbsp; <?php echo $nationality; ?> </br>
                    <br><i class="world icon"></i>Religion: &nbsp; <?php echo $religion; ?> </br>
                    <br><i class="female icon"></i>Mother's Name: &nbsp; <?php echo $mother; ?> </br>
                    <br><i class="male icon"></i>Father's Name: &nbsp; <?php echo $father; ?> </br>
                   
                  </p>
                </div>

                <div class="rightpart">
                  <p> <br><i class="child icon"></i>Age: &nbsp; <?php echo $age; ?> Years Old </br>
                      <br><i class="male icon"></i></i>|<i class="female icon"></i>Gender: &nbsp; <?php echo $sex; ?> </br>
                      <br><i class="cocktail icon"></i>Status: &nbsp; <?php echo $status; ?> </br>
                      <br><i class="map icon"></i>Birth Place: &nbsp; <?php echo $birthplace; ?> </br>
                      <br><i class="gift icon"></i>Birth Date: &nbsp; <?php echo $bday; ?> </br>
                  </p>
                </font>
                </div>

      </div>

      <br>
      <br>

<form method="GET" action="edit-Pprofile.php">
    <?php echo '<input type="hidden" name="editID" value="'.$id.'" />'; ?>
    <input type="submit" class="ui left floated green button" value="Edit Profile Information" />
</form>


<button class="ui right floated red button" onclick="window.location.href='patient.php'">
                      <i class=" reply icon"></i>
                        Back
</button>
      </div>
    </div>
  </div>


  </div>
  
</div>
</div>
</div>

<!-- ----------------------- SECOND TAB ------------------------  -->
<?php
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

  $result = mysqli_query($con,"SELECT * FROM contact_person WHERE cp_id = '$var'");

  while($row = mysqli_fetch_array($result)) 
  {
    //id  first last  email gender  birthday  phone uname pword
    $id = $row['cp_id'];
    $cpname = $row['cp_name'];
    $rel = $row['cp_relationship'];
    $address = $row['cp_address'];
    $contact = $row['cp_contact'];
    $occupation = $row['cp_occupation/business'];
  }
?>

<div class="ui bottom attached tab segment" data-tab="second">

<h2 align="center"> C O N T A C T &nbsp; &nbsp; P E R S O N </h2>

<div class="ui items">
    <div class="item">
        <div class="ui medium circular image">
          <img src="images/default-shadowed.png">
        </div>

        <div class="middle aligned content">

           <div class="header"><font family="Century Gothic" size="4px" color="Green">
              <i class="call square icon"></i>&nbsp; <?php echo $cpname; ?>
                               </font>
          </div> 
             <div class="extra">
                <div class="description">
                    <div class="leftpart">
                      <p><font family="Century Gothic" size="3.5px" color="green">
                         <br><i class="marker icon"></i>Address: &nbsp; <?php echo $address; ?> </br>
                         <br><i class="call icon"></i>Contact Number: &nbsp; <?php echo $contact; ?></br>
                         <br><i class="users icon"></i>Relationship: &nbsp; <?php echo $rel; ?></br>
                        <br><i class="suitcase icon"></i>Occupation: &nbsp; <?php echo $occupation; ?> </br>
                      </font></p>
                    </div>
                </div>

              </div>
              <br><br>
              <form method="GET" action="edit-ContactPerson.php">
    <?php echo '<input type="hidden" name="editID" value="'.$id.'" />'; ?>
    <input type="submit" class="ui left floated green button" value="Edit Contact Person" />
</form>

              <button class="ui right floated red button" onclick="window.location.href='patient.php'">
                      <i class=" reply icon"></i>
                        Back
              </button>

             </div>
             
        </div>

    </div> 
</div>

<!-- ----------------------- THIRD TAB ------------------------  -->

<?php
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

  $result = mysqli_query($con,"SELECT * FROM diagnosis WHERE d_id = '$var'");

  while($row = mysqli_fetch_array($result)) 
  {
    //id  first last  email gender  birthday  phone uname pword
    $id = $row['d_id'];
    $physc = $row['d_physician'];
    $prov = $row['d_provisional_diagnosis'];
    $final = $row['d_final_diagnosis'];
    $surgical = $row['d_surgical_procedure'];
    $date = $row['d_date'];
  }
?>

<div class="ui bottom attached tab segment" data-tab="third">

<h2 align="center"> D I A G N O S I S &nbsp; &nbsp; L O G S </h2>

    <div class="ui items">
      <div class="item">
            <div class="ui medium circular image">
          <img src="images/default-nurse.png">
           </div>
           
            <div class="middle aligned content">

           <div class="header"><font family="Century Gothic" size="4px" color="Green">
              <i class="doctor icon"></i> Physician: &nbsp; <?php echo $physc; ?>
                               </font>
          </div> 
             <div class="extra">
                <div class="description">
                    <div class="leftpart">
                      <p><font family="Century Gothic" size="3.5px" color="green">
                         <br><i class="checkmark icon"></i>Provisional Diagnosis: &nbsp; <?php echo $prov; ?> </br>
                         <br><i class="checkmark icon"></i>Final Diagnosis: &nbsp; <?php echo $final; ?></br>
                         <br><i class="treatment icon"></i>Surgical Procedure: &nbsp; <?php echo $surgical; ?> </br>
                        <br><i class="wait icon"></i>Date: &nbsp; <?php echo $date; ?> </br>
                      </font></p>
                    </div>
                </div>

              </div>

              <button class="ui right floated red button" onclick="window.location.href='patient.php'">
                      <i class=" reply icon"></i>
                        Back
              </button>

             </div>

      </div>
    </div>

</div>

<!-- ----------------------- FOURTH TAB ------------------------  -->
<?php
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

  $result = mysqli_query($con,"SELECT * FROM work_info WHERE w_id = '$var'");

  while($row = mysqli_fetch_array($result)) 
  {
    //id  first last  email gender  birthday  phone uname pword
    $id = $row['w_id'];
    $wname = $row['w_name'];
    $wdesc = $row['w_description'];
    $wemployer = $row['w_employer'];
    $wcontact = $row['w_contact'];
  }
?>

<div class="ui bottom attached tab segment" data-tab="fourth">

  <h2 align="center">W O R K &nbsp; &nbsp; I N F O R M A T I O N </h2>

    <div class="ui items">
      <div class="item">
            <div class="ui medium circular image">
          <img src="images/patient-default.png">
           </div>
              <div class="middle aligned content">
                  <div class="header"><font family="Century Gothic" size="4px" color="Green">
                    <i class="building outline icon"></i> Name of Work: &nbsp; <?php echo $wname; ?>
                               </font>
                  </div>
                  <div class="extra">
                <div class="description">
                    <div class="leftpart">
                      <p><font family="Century Gothic" size="3.5px" color="green">
                         <br><i class="file text icon"></i>Description of Work: &nbsp;<br><i><?php echo $wdesc; ?></i> </br>
                         <br><i class="user icon"></i>Employer: &nbsp; <?php echo $wemployer; ?></br>
                         <br><i class="call icon"></i>Employer's Contact Number: &nbsp; <?php echo $wcontact; ?> </br>
                      </font></p>
                    </div>
                </div>

              </div>
                    <button class="ui right floated red button" onclick="window.location.href='patient.php'">
                      <i class=" reply icon"></i>
                        Back
                    </button>

              </div>

      </div>
    </div>

</div>

<!-- ----------------------- FIFTH TAB ------------------------  -->
<?php
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

  $result = mysqli_query($con,"SELECT * FROM laboratory WHERE lab_id = '$var'");

  while($row = mysqli_fetch_array($result)) 
  {
    //id  first last  email gender  birthday  phone uname pword
    $id = $row['lab_id'];
    $spec = $row['lab_specimen'];
    $date = $row['lab_date'];
    $exam = $row['lab_examination'];
    $stat = $row['lab_status'];
    $incharge = $row['lab_inCharge'];
  }
?>

<div class="ui bottom attached tab segment" data-tab="fifth">

  <h2 align="center"> L A B O R A T O R Y</h2>

    <div class="ui items">
      <div class="item">
            <div class="ui medium circular image">
          <img src="images/default-nurse.png">
           </div>
               <div class="middle aligned content">
                  <div class="header"><font family="Century Gothic" size="4px" color="Green">
                    <i class="theme icon"></i> Specimen: &nbsp; <?php echo $spec; ?>
                               </font>
                  </div>
                  <div class="extra">
                <div class="description">
                    <div class="leftpart">
                      <p><font family="Century Gothic" size="3.5px" color="green">
                         <br><i class="calendar icon"></i>Date of Laboratory: &nbsp;<?php echo $date; ?></br>
                         <br><i class="treatment icon"></i>Laboratory Examination: &nbsp; <?php echo $exam; ?></br>
                         <br><i class="warning sign icon"></i>Laboratory Status: &nbsp; <?php echo $stat; ?> </br>
                         <br><i class="doctor icon"></i>In-Charge of Laboratory: &nbsp; <?php echo $incharge; ?> </br>
                      </font></p>
                    </div>
                </div>

              </div>

              <button class="ui right floated red button" onclick="window.location.href='patient.php'">
                      <i class=" reply icon"></i>
                        Back
              </button>
              </div>

      </div>
    </div>

</div>

<!-- ----------------------- SIXTH TAB ------------------------  -->
<?php
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

  $result = mysqli_query($con,"SELECT * FROM admission WHERE adm_id = '$var'");

  while($row = mysqli_fetch_array($result)) 
  {
    //id  first last  email gender  birthday  phone uname pword
    $id = $row['adm_id'];
    $room = $row['adm_room'];
    $rate = $row['adm_room_rate'];
    $plan = $row['adm_hospital_plan'];
    $date = $row['adm_admission_date'];
    $time = $row['adm_admission_time'];
    $ddate = $row['adm_discharge_date'];
    $dtime = $row['adm_discharge_time'];
    $dnote = $row['adm_discharge_note'];
  }
?>


<div class="ui bottom attached tab segment" data-tab="sixth">

  <h2 align="center"> A D M I S S I O N </h2>

    <div class="ui items">
      <div class="item">
            <div class="ui medium circular image">
          <img src="images/patient-default.png">
           </div>
              <div class="middle aligned content">
                <div class="header"><font family="Century Gothic" size="4px" color="Green">
                    <i class="building icon"></i> Room: &nbsp; <?php echo $room; ?>
                               </font>
                  </div>
              <div class="extra">
                <div class="description">
                      <div class="leftpart">
                      <p><font family="Century Gothic" size="3.5px" color="green">
                         <br><i class="money icon"></i>Room Rate: &nbsp; Php&nbsp;<?php echo $rate; ?> </br>
                         <br><i class="checkmark icon"></i>Hospital Plan: &nbsp; <?php echo $plan; ?></br>
                         <br><i class="emergency icon"></i>Date Admitted: &nbsp; <?php echo $date; ?> </br>
                        <br><i class="clock icon"></i>Time Admitted: &nbsp; <?php echo $time; ?> </br>
                      </div>
                      <div class="rightpart">
                        <br><i class="first aid icon"></i>Date Discharged: &nbsp; <?php echo $ddate; ?> </br>
                        <br><i class="clock icon"></i>Time Discharged: &nbsp; <?php echo $dtime; ?> </br>
                        <br><i class="file outline icon"></i>Discharge Note: &nbsp; <?php echo $dnote; ?> </br>
                      </font></p>
                    </div>
                </div>
              </div>

                <button class="ui right floated red button" onclick="window.location.href='patient.php'">
                      <i class=" reply icon"></i>
                        Back
                </button>
              </div>

      </div>
    </div>

</div>





</body>
</html>