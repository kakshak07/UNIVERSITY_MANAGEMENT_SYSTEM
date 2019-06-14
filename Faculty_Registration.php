<?php
//connect to my sql

$conn = mysqli_connect('localhost','root','123456','universitymanagment');

?>
<html>
<head>
     
	  </head>
<body>


<style>
     div{
        background: linear-gradient(to bottom right, #3333cc 6%, #ffffff 100%);
        height: auto;
        }
      
    /* Full-width input fields */
input[type=text], input[type=password],input[type=Number],input[type=date] {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    height:10px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: green;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 25%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
    width=25%;
}
/* Float cancel and signup buttons and add an equal width */
 

/* Add padding to container elements 
.container1 {
    width:100%;
    padding: 16px;
    background: url(C:\Users\hp\Desktop\images.jpg);
    background-size: contain;
    background-repeat: no-repeat;
  }*/

  

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
    height:30px;
    }

/* Change styles for cancel button and signup button on extra small screens */

    
  
    
       label{
min-width:180px;
display: inline-block;
}


    </style> 
    <title>
    Register</title>

   <br><br>
    <h1><b>Registration for faculty login</b></h1>

<form  method="POST" action="Faculty_Registration.php" style="border:1px solid #ccc">
  <div>
    <class="container1">
      <fieldset>
      <legend>Personal details</legend>
    <label><b>Name of faculty</b> </label>
    <input type="text" placeholder="Enter faculty name" name="sname"  required ><br>
      
    <label><b>Designation</b> </label>
    <input type="text" placeholder="Designation of faculty" name="dname"  required ><br>
    

        <label><b>Select Gender</b></label>
          <select name="gender">
        <option default>Select Gender</option>
    <option value="M">Male</option>
    <option value="F">Female</option>
  </select><br>

  <label><b>Salary</b> </label>
    <input type="number" placeholder="Salary" name="dnum"  required ><br>
    
          </fieldset>


      <br>

     <class="container2">
          <fieldset>
                <legend>Account details</legend>
                <label><b>Faculty ID</b></label>
                <input type="Number" placeholder="Enter faculty id" name="faculty_id" required><br>
                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required><br>
                    <label><b>Select Department</b></label>
                 <select name="Department">
                <option default>Department Number</option>
                 <option value="100">Computer Science</option>
                  <option value="200">Electrical and electronics</option>
                  <option value="300">Mechanical</option>
                 </select><br>
                 <br>
          </fieldset>
      </div>
      <br>

      <div1 class="clearfix">
          <button type="button" class="cancelbtn" >Cancel</button>
          <button type="submit" name="submit" class="signupbtn" value="Submit">Register</button>
       
      </div1>
</form>
    <br>





<?php



  if(isset($_POST['submit']))
  {
      $cou1=$_POST['sname'];
  $cou2=$_POST['dname'];
  $cou3=$_POST['gender'];
  $cou4=$_POST['dnum'];
  $cou5=$_POST['faculty_id'];
  $cou6=$_POST['password'];
  $cou7=$_POST['Department'];


    $query = "INSERT INTO faculty VALUES($cou4,$cou7,$cou5,'$cou1','$cou3','$cou2',$cou6)";
    $run=mysqli_query($conn,$query);
    if($run)
    {
      header ("location:http://localhost/UNIVERSITY_MANAGEMENT_SYSTEM/Faculty_Info.php");
      //echo "Thank you for registration";
    }
    else
    {
      echo "Not registered";
    }

}
?>


    </body>
</html>