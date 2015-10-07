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
<!-- ---- start ---- -->

<!-- ------------------- paitient profile ---------------- -->

<?php

if (isset($_GET['editID']))
    {
        $var=$_GET['editID'];
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

<div class="ui bottom attached tab segment active" data-tab="first">

       <h2 align="center"> P A T I E N T &nbsp; &nbsp; P R O F I L E </h2>

  <div class="ui items">
  <div class="item">
    <div class="ui medium circular image">
      <img src="images/patient-default.png">
    </div>
    <div class="middle aligned content">

<?php

echo '<div class="header"><font family="Century Gothic" size="4px" color="Green">
    <div class="ui form">

            <div class="inline field">
            <i class="tags icon"></i>
            <label>Patient Name:</label>
            <input type="text" name="p_fname" value='.$fname.'>
            <input type="text" name="p_lname" value='.$lname.'>
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
            <i class="marker icon"></i>
            <label>Address:</label>
            <input type="text" name="p_address" value='.$address.'>
            </div>

            <div class="inline field">
            <i class="call icon"></i>
            <label>Contact Number:</label>
            <input type="text" name="p_contact" value='.$contact.'>
            </div>


            <div class="inline field">
            <i class="flag icon"></i>
            <label>Nationality:</label>
            <input type="text" name="p_nationality" value='.$nationality.'>
            </div>

            <div class="inline field">
            <i class="world icon"></i>
            <label>Religion:</label>
            <input type="text" name="p_religion" value='.$religion.'>
            </div>


            <div class="inline field">
            <i class="male icon"></i>
            <label>Name of Father:</label>
            <input type="text" name="p_father_name" value='.$father.'>
            </div>
     
      </div>

     <div class="rightpart"> <font color="green">

                <div class="inline field">
            <i class="female icon"></i>
            <label>Name of Mother:</label>
            <input type="text" name="p_mother_name" value='.$mother.'>
            </div>

                <div class="inline field">
                <i class="child icon"></i>
                <label>Age:</label>
                <input type="text" name="p_age" value='.$age.'>
                </div>

                <div class="inline field">
            <i class="male icon"></i></i>|<i class="female icon"></i>
            <label>Gender:</label>
            <input type="text" name="p_sex" value='.$sex.'>
          </div>

          <div class="inline field">
            <i class="cocktail icon"></i>
            <label>Civil Status:</label>
            <input type="text" name="p_status" value='.$status.'>
          </div>

          <div class="inline field">
            <i class="map icon"></i>
            <label>Birthplace:</label>
            <input type="text" name="p_birthplace" value='.$birthplace.'>
          </div>

          <div class="inline field">
            <i class="gift icon"></i>
            <label>Birthdate</label>
            <input type="text" name="p_birthdate" value='.$bday.'>
          </div>

      </div>
      </div>
      </div>
      </div>
      </div>
      '
;
?>
</div>
  </div>
  </div>
</div></div>


<!-- ------------------- contact person ---------------- -->

<?php

if (isset($_GET['editID']))
    {
        $var=$_GET['editID'];
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


        <?php 

  echo '

    <div class="header">
            <font family="Century Gothic" size="5px" color="Green">

            <div class="ui form">

            <div class="inline field">
            <i class="call icon"></i>
            <label>Contact Person:</label>
            <input type="text" name="cp_name" value='.$cpname.'>
            </div>
            </div>
            </font>
    </div>
      <div class="extra">

      <div class="description">

      <div class="ui form">

        
        <font color="green">

          <div class="inline field">
            <i class="marker icon"></i>
            <label>Address:</label>
            <input type="text" name="cp_address" value='.$address.'>
          </div>

          <div class="inline field">
            <i class="call icon"></i>
            <label>Contact Number:</label>
            <input type="text" name="cp_contact" value='.$contact.'>
          </div>

          <div class="inline field">
            <i class="users icon"></i>
            <label>Relationship:</label>
            <input type="text" name="cp_relationship" value='.$rel.'>
          </div>

          <div class="inline field">
            <i class="suitcase icon"></i>
            <label>occupation:</label>
            <input type="text" name="cp_occupation" value='.$occupation.'>
          </div>

        
        </font>
            </div>
            </div>
            </div>
            '; 
?>
 <form method="GET" action="text.php">
       <?php echo '<input type="hidden" name="editID" value="'.$id.'" />'; ?>
       <input type="submit" class="ui right floated  green button" value="Update" />
     </form>
    </div>
</div>
</div>

<!-- -------------- DIAGNOSIS -------------->

<?php

if (isset($_GET['editID']))
    {
        $var=$_GET['editID'];
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
           
            
        <?php 

  echo '

    <div class="header">
            <font family="Century Gothic" size="5px" color="Green">

            <div class="ui form">

            <div class="inline field">
            <i class="doctor icon"></i>
            <label>Physician:</label>
            <input type="text" name="d_physician" value='.$physc.'>
            </div>
            </div>
            </font>
    </div>
      <div class="extra">

      <div class="description">

      <div class="ui form">

        
        <font color="green">

          <div class="inline field">
            <i class="checkmark icon"></i>
            <label>Provisional Diagnosis:</label>
            <input type="text" name="d_provisional_diagnosis" value='.$prov.'>
          </div>

          <div class="inline field">
            <i class="checkmark icon"></i>
            <label>Final Diagnosis:</label>
            <input type="text" name="d_final_diagnosis" value='.$final.'>
          </div>

          <div class="inline field">
            <i class="checkmark icon"></i>
            <label>Surgical Procedure:</label>
            <input type="text" name="d_surgical_procedure" value='.$surgical.'>
          </div>

          <div class="inline field">
            <i class="calendar icon"></i>
            <label>Date:</label>
            <input type="text" name="d_date" value='.$date.'>
          </div>

        
        </font>
            </div>
            </div>
            </div>'
      ; 

 ?>
 <form method="GET" action="text.php">
       <?php echo '<input type="hidden" name="editID" value="'.$id.'" />'; ?>
       <input type="submit" class="ui right floated  green button" value="Update" />
     </form>
</div>
</div>
</div>

<!-- -------------- WORK IFORMATION -------------->
<?php

if (isset($_GET['editID']))
    {
        $var=$_GET['editID'];
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
            <?php 

  echo '

    <div class="header">
            <font family="Century Gothic" size="5px" color="Green">

            <div class="ui form">

            <div class="inline field">
            <i class="building outline icon"></i>
            <label>Name of Work:</label>
            <input type="text" name="w_name" value='.$wname.'>
            </div>
            </div>
            </font>
    </div>
      <div class="extra">

      <div class="description">

      <div class="ui form">

        
        <font color="green">

          <div class="inline field">
            <i class="file text icon"></i>
            <label>Description of Work:</label>
            <input type="text" name="w_description" value='.$wdesc.'>
          </div>

          <div class="inline field">
            <i class="user icon"></i>
            <label>Employer:</label>
            <input type="text" name="w_employer" value='.$wemployer.'>
          </div>

          <div class="inline field">
            <i class="call icon"></i>
            <label>Contact Number of Employer:</label>
            <input type="text" name="w_contact" value='.$wcontact.'>
          </div>
        
        </font>
            </div>
            </div>
            </div>'
      ; 

 ?>
  <form method="GET" action="text.php">
       <?php echo '<input type="hidden" name="editID" value="'.$id.'" />'; ?>
       <input type="submit" class="ui right floated  green button" value="Update" />
     </form>
</div>
</div>
</div>

<!-- -------------- LABORATORY -------------->
<?php

if (isset($_GET['editID']))
    {
        $var=$_GET['editID'];
    }


$con=mysqli_connect("localhost","root","","andalasia");
    
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

  $result = mysqli_query($con,"SELECT * FROM laboratory WHERE lab_id = '$var'");

  while($row = mysqli_fetch_array($result)) 
  {
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
<?php 

  echo '

    <div class="header">
            <font family="Century Gothic" size="5px" color="Green">

            <div class="ui form">

            <div class="inline field">
            <i class="theme icon"></i>
            <label>Specimen:</label>
            <input type="text" name="lab_specimen" value='.$spec.'>
            </div>
            </div>
            </font>
    </div>
      <div class="extra">

      <div class="description">

      <div class="ui form">

        
        <font color="green">

          <div class="inline field">
            <i class="calendar icon"></i>
            <label>Date of Laboratory:</label>
            <input type="text" name="lab_date" value='.$date.'>
          </div>

          <div class="inline field">
            <i class="teatment icon"></i>
            <label>Laboratory Examination:</label>
            <input type="text" name="lab_examination" value='.$exam.'>
          </div>

          <div class="inline field">
            <i class="warning icon"></i>
            <label>Laboratory Status:</label>
            <input type="text" name="lab_status" value='.$stat.'>
          </div>

          <div class="inline field">
            <i class="doctor icon"></i>
            <label>In-Charge of Laboratory:</label>
            <input type="text" name="lab_inCharge" value='.$incharge.'>
          </div>
        
        </font>
            </div>
            </div>
            </div>'
      ; 

 ?>

 <form method="GET" action="text.php">
       <?php echo '<input type="hidden" name="editID" value="'.$id.'" />'; ?>
       <input type="submit" class="ui right floated  green button" value="Update" />
     </form>

</div>
</div>
</div>

<!-- -------------- ADMISSION -------------->
<?php

if (isset($_GET['editID']))
    {
        $var=$_GET['editID'];
    }


$con=mysqli_connect("localhost","root","","andalasia");
    
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

  $result = mysqli_query($con,"SELECT * FROM admission WHERE adm_id = '$var'");

  while($row = mysqli_fetch_array($result)) 
  {
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

<?php 

  echo '

    <div class="header">
            <font family="Century Gothic" size="5px" color="Green">

            <div class="ui form">

            <div class="inline field">
            <i class="building icon"></i>
            <label>Room:</label>
            <input type="text" name="adm_room" value='.$room.'>
            </div>
            </div>
            </font>
    </div>
      <div class="extra">

      <div class="description">

      <div class="ui form">

        
        <font color="green">
        <div class="leftpart">

          <div class="inline field">
            <i class="money icon"></i>
            <label>Room Rate:</label>
            <input type="text" name="adm_room_rate" value='.$rate.'>
          </div>

          <div class="inline field">
            <i class="checkmark icon"></i>
            <label>Hospital Plan:</label>
            <input type="text" name="adm_hospital_plan" value='.$plan.'>
          </div>

          <div class="inline field">
            <i class="emergency icon"></i>
            <label>Date Admitted:</label>
            <input type="text" name="adm_admission_date" value='.$date.'>
          </div>

          <div class="inline field">
            <i class="clock icon"></i>
            <label>Time Admitted:</label>
            <input type="text" name="adm_admission_time" value='.$time.'>
          </div>
        </div>

        <div class="rightpart">
        <div class="inline field">
            <i class="clock icon"></i>
            <label>Date Discharged:</label>
            <input type="text" name="adm_discharge_date" value='.$ddate.'>
          </div>

        <div class="inline field">
            <i class="clock icon"></i>
            <label>Time Admitted:</label>
            <input type="text" name="adm_admission_time" value='.$dtime.'>
          </div>

          <div class="inline field">
            <i class="file outline icon"></i>
            <label>Discharge Note:</label>
            <input type="text" name="adm_admission_note" value='.$dnote.'>
          </div>

        </font>
        </div>
            </div>
            </div>
            </div>'
      ; 

 ?>

 <form method="GET" action="text.php">
       <?php echo '<input type="hidden" name="editID" value="'.$id.'" />'; ?>
       <input type="submit" class="ui right floated  green button" value="Update" />
     </form>

</div>
</div>
</div>

<!-- -----end----- -->
</body>
</html>