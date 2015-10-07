<?php 
include("header.php");
?>

<body>
<?php session_start();?>

<center>
<font face="Arial" size="-1"/>
<br><br>
<h2> Please Log-in </h2>

<div class="ui input" id="meanie">

<?php
 if(isset($_POST['submit'])){
          //values has been submitted
          //comment out flags during employment
          //echo "Flag -- Values has been submitted";
          
          //do the cleaning or validations here
          
          //assign the values to the variables
          $name=$_POST['username'];
          $pass=$_POST['user_pwd'];
          
          //establish a connection with the database
          $con=mysqli_connect("localhost","root", "", "andalasia");
          
          if(mysqli_connect_errno())
            {
            //value is >=1 meaning with error(true)
            echo "Error in connecting with the database";
            }
            else
            {
            //value is equal to 0 meaning no error (false)
            //create an sql statement
            $sqlstmt="SELECT * FROM users WHERE username=? AND user_pwd=?";
            //prepare the statement
            if($stmt= mysqli_prepare($con,$sqlstmt))
              {
              //successful
            
              //bind the values
              mysqli_stmt_bind_param($stmt,"ss",$name,$pass);
              
              //execute
              mysqli_stmt_execute($stmt);
              
              //bind values to a variable where we are going to store the result
              mysqli_stmt_bind_result($stmt,$user_id,$username,$user_pwd,$user_type);
              
              if(mysqli_stmt_fetch($stmt))
                {
                $_SESSION['id']=$user_id;
                $_SESSION['name']=$username;
                $_SESSION['type']=$user_type;
                $_SESSION['logged']=1;
                  echo 'Log in successful!!';

                  switch ($_SESSION['type']) 
                  {
                    case 'admin':
                       header("refresh:1, url=admin.php");
                      break;
                    case 'hn':
                       header("refresh:1, url=headnurse-index.php");
                      break;
                    case 'n':
                       header("refresh:1, url=patient.php");
                      break;
                      case 'p':
                       header("refresh:1, url=physician-index.php");
                      break;

                    default:
                      # code...
                      break;
                  }
				 
                }
              else
                {
                  echo 'Incorrect Username or Password';
                }
             
            }
            else
            {
              //unsuccessful
            }
           
          
          }
          }
        
        
        ?>	
	
	
	<form role="form" method="post" action=" ">
        <input type="text" name = "username" placeholder="Username" required autofocus class="active">
        <input type="password" name = "user_pwd" placeholder="Password" required>
        <div style="padding-top:5px">
        <button class="ui green button" name="submit" type="submit"><i class="sign in icon"></i>Log in</button>
		</div>    
    </form>
	  
</div>
</center>
</font>
</body>
</html>