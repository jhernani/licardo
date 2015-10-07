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
<title>Employee</title>
<body>
  <div id="banner">
    <img src="images/banner2.jpg">
  </div>
<!--<h2>Employee</h2>-->
<div class="ui two item labeled icon menu">
 <a class="green item" href="employee.php">
    <i class="users icon"></i>
    Nurses
  </a>
  <a class="active green item" href="scheduling.php">
  <i class="calendar outline icon"></i>
    Schedule & Workload Assignment
  </a>
</div>
<div class="ui top attached tabular menu">
  <a class="active item" data-tab="first"> <i class="user icon"></i>
	Employee List
  </a>
  <a class="item" data-tab="second">
    Photos
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




<!-- --------------------------------------------- EMPLOYEE LIST -------------------------------------------------------------- -->
              <table class="ui selectable celled table">
               <thead>
                <tr>
                 <th>Name</th>
                 <th>Position</th>
                 <th>Status</th>      
                 <th>Edit</th>
                 <th>Archive</th>
                </tr>
               </thead>
              <tbody>
                    <?php
                             $con=mysqli_connect("localhost","root","","andalasia");
                             if (mysqli_connect_errno())
                             {
                               echo "Failed to connect to MySQL: " . mysqli_connect_error();
                             }

                             $result = mysqli_query($con,"SELECT * FROM employee");

                             while($row = mysqli_fetch_array($result)) 

                              {
                                 echo '<tr>'; 
                                 echo "<td><a href='jasper.php'>" . $row["emp_fname"]." " .$row["emp_lname"] ."</a></td>";
                                 echo "<td>" . $row["emp_position"] . "</td>";
                                 echo "<td>" . $row["emp_status"] . "</td>";
                                 echo '<td><a href="update.php?id='.$row['emp_id'].'"><i class="edit icon"></i>Edit</a></td>';
                                 echo '<td><a href="update.php?id='.$row['emp_id'].'"><i class="remove user icon"></i>Archive</a></td>';
                                 echo "</tr>";
                              }

                    ?>
               </tbody>
              </table>

                      <button class="ui left floated teal button" id="adduser">
                      <i class=" add user icon"></i>
                        Add Employee
                      </button>
  <br> <br>

  <br>
<button class="ui right floated red button" onclick="window.location.href='home.php'">
                      <i class=" reply icon"></i>
                        Back
                      </button>

</div>


<!-- ----------------------------------------------------------- FORMS ---------------------------------------------------- -->



<div class="ui modal">
  <i class="close icon"></i>
  <div class="header">
    <i class="user icon"></i>
    Add Employee
  </div>
  <div class="image content">
       <form class="ui form" method="POST" action="add.php">

    <h4 class="ui dividing header">Employee Information</h4>
  
   <div class="two fields">
      <div class="field">
        <label>First Name</label>
        <input placeholder="First Name" type="text" name="emp_fname">
      </div>
      <div class="field">
        <label>Last Name</label>
        <input placeholder="Last Name" type="text" name="emp_lname">
      </div>
    </div>

<!-- -------------------- GENDER DROPDOWN ------------ -->
    
  <div class="four fields">
    <div class="field">
   <label>Gender</label>
   <div class="ui selection dropdown">
  <input type="hidden" name="emp_sex">
  <i class="dropdown icon"></i>
  <div class="default text">Gender</div>
  <div class="menu">
    <div class="item" data-value="Male">Male</div>
    <div class="item" data-value="Female">Female</div>
  </div>
</div>
</div>
<!-- -------------------- BIRTHDAY DROPDOWN ---------- -->  
  <div class="field">   
    <label>Birth Date</label>
  <input type="date" name="emp_bday">
  </div>

  <div class="field">
   <label>Position</label>
   <div class="ui selection dropdown">
  <input type="hidden" name="emp_position">
  <i class="dropdown icon"></i>
  <div class="default text">Position</div>
  <div class="menu">
    <div class="item" data-value="Nurse">Nurse</div>
    <div class="item" data-value="Doctor">Doctor</div>
    <div class="item" data-value="Lab in-charge">Lab In-Charge</div>
  </div>
</div>
</div> 

 <div class="field">
   <label>Status</label>
   <div class="ui selection dropdown">
  <input type="hidden" name="emp_status">
  <i class="dropdown icon"></i>
  <div class="default text">Status</div>
  <div class="menu">
    <div class="item" data-value="Available">Available</div>
    <div class="item" data-value="On-leave">On-leave</div>
    <div class="item" data-value="Suspended">Suspended</div>
  </div>
</div>
</div>
<!-- -------------------- POSITION ---------------- -->
    
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





<!-- ---------- PHP CODES -------------------->



<!-- ------------------------- CONTINUE THE STYLE -------------------- -->

<div class="ui bottom attached tab segment" data-tab="second">

</div>





</body>
</html>