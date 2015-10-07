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
  <div class="ui top attached tabular menu">
 <a class="active item" data-tab="first"> <i class="pencil icon"></i>
  Edit Profile Information
  </a>
</div>

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

<div class="ui bottom attached tab segment" data-tab="first">

<h2 align="center"> C O N T A C T &nbsp; &nbsp; P E R S O N </h2>

<div class="ui items">
    <div class="item">
        <div class="ui medium circular image">
          <img src="images/default-shadowed.png">
        </div>


        <?php 

  echo '<form method="POST" action="update-patient.php">

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

        <input type="submit" class="ui left floated  green button" value="Update" />
          </form>
        </font>
            </div>
            </div>
            </div>
            '; 
?>
    </div>
</div>
</div>
</body>
</html>