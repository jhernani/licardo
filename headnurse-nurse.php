<?php 
include("header.php");
?>

 <div class="ui two item labeled icon menu">
 <a class="active green item" href="headnurse-nurse.php">
    <i class="users icon"></i>
    Nurses
  </a>
  <a class="pink item" href="headnurse-scheduling.php">
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
                                 echo '<td><a href="nurse-profile.php?id='.$row['emp_id'].'"> '. $row["emp_fname"].' ' .$row["emp_lname"] .'</a></td>';
                                 echo "<td>" . $row["emp_position"] . "</td>";
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
    Add Patient
  </div>
  <div class="image content">
       <form class="ui form" method="POST" action="add-employee.php">

    <h4 class="ui dividing header">Patient Information</h4>
  
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

    <div class="three fields">

      <div class="field">
        <label>Address</label>
        <input placeholder="Address" type="text" name="emp_address">
      </div>
      <div class="field">
        <label>Contact</label>
        <input placeholder="Contact" type="text" name="emp_contact">
      </div>
      <div class="field">
          <label>Position</label>
            <div class="ui selection dropdown">
              <input type="hidden" name="emp_position">
                 <i class="dropdown icon"></i>
            <div class="default text">Position</div>
            <div class="menu">
            <div class="item" data-value="Nurse I">Nurse I</div>
            <div class="item" data-value="Nurse II">Nurse II</div>
            <div class="item" data-value="Nurse Volunteer">Nurse Volunteer</div>
          </div>
          </div>
    </div>
    </div>
      
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
 <div class="field">   
    <label>Birth Date</label>
  <input type="date" name="emp_bday">
  </div> 

<div class="field">
        <label>Nationality</label>
        <input placeholder="Nationality" type="text" name="emp_nationality">
      </div>
      <div class="field">
        <label>Religion</label>
        <input placeholder="Religion" type="text" name="emp_religion">
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





<!-- ---------- PHP CODES -------------------->



<!-- ------------------------- CONTINUE THE STYLE -------------------- -->

<div class="ui bottom attached tab segment" data-tab="second">

</div>





</body>
</html>