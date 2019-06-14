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
        background: linear-gradient(to bottom right, #3333cc 6%, #ffffff 90%);
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
   
    <h2>Register for Admissions</h2>

<form  method="POST" action="Student_Registration.php" style="border:1px solid #ccc">
  <div>
    <class="container1">
      <fieldset>
      <legend>Personal details</legend>
    <label><b>Name  </b> </label>
    <input type="text" placeholder="Enter name" name="sname"  required ><br>
     <label><b>Father's Name</b></label>
       <input type="text" placeholder="Enter Name" name="fname"  required ><br>
      <label><b>Mother's Name</b></label>
    <input type="text" placeholder="Enter Name" name="mname"  required ><br>
      <label><b>Date of Birth</b></label>
    <input type="date" placeholder="Enter DOB in YYYY/MM/DD" name="DOB" required><br>
        <label><b>Select Gender</b></label>
          <select name="gender">
        <option default>Select Gender</option>
    <option value="M">Male</option>
    <option value="F">Female</option>
  </select><br>
      <label><b>Address</b></label>
    <input type="text" placeholder="Enter Gaurdian Address" name="address" required><br>
          </fieldset>


      <br>

     <class="container2">
          <fieldset>
                <legend>Account details</legend>
                 <label><b>Select Department</b></label>
                 <select name="Department">
                <option default>Department Number</option>
                 <option value="100">Computer Science</option>
                  <option value="200">Electrical and electronics</option>
                  <option value="300">Mechanical</option>
                 </select><br>
                 <br>

                 <label><b>Select Hostel</b></label>
                 <select name="hostel">
                <option default>Hostel Name</option>
                 <option value="101">Charles Darwin</option>
                  <option value="102">Albert Einstein</option>
                  <option value="103">Sardar Patel</option>
                 </select>
                 <br>

                <label><b>Student ID</b></label>
                <input type="Number" placeholder="Enter student id" name="student_id" required><br>
                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required><br>

          </fieldset>





                    <fieldset>
                <legend>Mess details</legend>
                 <label><b>Select Mess</b></label>
                 <select name="mess">
                <option default>Select caterer</option>
                 <option value="1">SRRC</option>
                  <option value="2">Darling</option>
                  <option value="3">Buddy and bites</option>
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
  $cou2=$_POST['fname'];
  $cou3=$_POST['mname'];
  $cou4=$_POST['DOB'];
  $cou5=$_POST['gender'];
  $cou6=$_POST['address'];
  $cou7=$_POST['student_id'];
  $cou8=$_POST['password'];
  $cou9=$_POST['Department'];
  $cou10=$_POST['hostel'];
  $cou11=$_POST['mess'];



    $query = "INSERT INTO student_details VALUES($cou7,'$cou3','$cou2','$cou1','$cou5','$cou4',$cou9,$cou8,$cou10,'$cou6')";
  

if($cou11==1)
{
   $query1 = "INSERT INTO mess VALUES($cou11,$cou7,'SRRC',$cou10)";
}
if($cou11==2)
{
   $query1 = "INSERT INTO mess VALUES($cou11,$cou7,'Darling',$cou10)";
}
if($cou11==3)
{
   $query1 = "INSERT INTO mess VALUES($cou11,$cou7,'Buddies and bites',$cou10)";
}
   
    $run=mysqli_query($conn,$query);
    $run1=mysqli_query($conn,$query1);
    if($run && $run1)
    {
      echo "Thank you for registration";
    }
    else
    {
      echo "Not registered";
    }

}
?>




    </body>
</html>