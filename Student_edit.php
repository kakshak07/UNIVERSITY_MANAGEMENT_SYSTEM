<?php
//connect to my sql

$conn = mysqli_connect('localhost','root','123456','universitymanagment');
session_start();

 
      
      
      $c=$_SESSION['aid'];
      $d=$_SESSION['psw'];
      $r="select * from student_details where student_id=$c and PASSWORD=$d";
      $rm="select * from mess where student_id=$c";
      $r1=mysqli_query($conn,$r);
      $r2=mysqli_query($conn,$r);
      $rm1=mysqli_query($conn,$rm);
?>

<html>
<head>
     
	  </head>
<body>


<style>
     div{
        background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1));
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
   
    <h2>Edit Student Information</h2>
    <?php while($row=mysqli_fetch_assoc($r1)):?>
<form  method="POST" action="Student_edit.php" style="border:1px solid #ccc">
  <div>
    <class="container1">
      <fieldset>
      <legend>Personal details</legend>
    <label><b>Name  </b> </label>
    <input type="text" placeholder="Enter name" name="sname" value="<?php echo $row['student_name'];?> " required ><br>
     <label><b>Father's Name</b></label>
       <input type="text" placeholder="Enter Name" name="fname" value="<?php echo $row['father_name'];?>" required ><br>
      <label><b>Mother's Name</b></label>
    <input type="text" placeholder="Enter Name" name="mname" value="<?php echo $row['mother_name'];?>"  required ><br>
      <label><b>Date of Birth</b></label>
    <input type="date" placeholder="Enter DOB in YYYY/MM/DD" name="DOB" value="<?php echo $row['birth_date'];?>" required><br>
        <label><b>Select Gender</b></label>
    <input name="sex1" value="<?php echo $row['sex'];?>">
    <br>
      <label><b>Address</b></label>
    <input type="text" placeholder="Enter Gaurdian Address" name="address" value="<?php echo $row['address'];?>"  required><br>


            <?php endwhile;?>
          </fieldset>


      <br>

     <class="container2">
          <fieldset>
             <?php while($ro=mysqli_fetch_assoc($r2)):?>
                <legend>Account details</legend>
                 <label><b>Select Department</b></label>
                 <input name="Department" value="<?php echo $ro['department_number'];?>">
                
                 <br><br>

                 <label><b>Select Hostel</b></label>
                 <input name="hostel" value="<?php echo $ro['hostel_id'];?>">
                
                 <br>

                <label><b>Student ID</b></label>
                <input type="Number" placeholder="Enter student id" name="student_id" value="<?php echo $ro['student_id'];?>" required><br>
                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required><br>

                <?php endwhile;?>

          </fieldset>



                     <fieldset>
                      <?php while($ro1=mysqli_fetch_assoc($rm1)):?>
                      <legend>Mess details</legend>
                       <label><b>Select Mess</b></label>
                          <input name="mess" value="<?php echo $ro1['mess_id'];?>">
                  <br>
                     <br>                
                      <?php endwhile;?>
          </fieldset>


      </div>


      <br>

      <div class="clearfix">
          <button type="submit" name="submit" class="signupbtn" value="submit">Save changes</button>
       
      </div>
</form>
    <br>



<?php

 
  if(isset($_POST['submit']))
  {
     $cou1=$_POST['sname'];
  $cou2=$_POST['fname'];
  $cou3=$_POST['mname'];
  $cou4=$_POST['DOB'];
  $cou5=$_POST['sex1'];
  $cou6=$_POST['address'];
  $cou7=$_POST['student_id'];
  $cou8=$_POST['password'];
  $cou9=$_POST['Department'];
  $cou10=$_POST['hostel'];
  $cou11=$_POST['mess'];


    $query = "Update student_details SET student_name='$cou1' , father_name='$cou2' , mother_name='$cou3' , birth_date='$cou4' , sex='$cou5' where student_id=$cou7";




if($cou11==1)
{
  $query1 = "Update mess SET mess_id='$cou11',mess_name='SRRC' where student_id=$cou7";
}
if($cou11==2)
{
  $query1 = "Update mess SET mess_id='$cou11',mess_name='Darling' where student_id=$cou7";
}
if($cou11==3)
{
  $query1 = "Update mess SET mess_id='$cou11',mess_name='Buddies and bites' where student_id=$cou7";
}




    $run=mysqli_query($conn,$query);
     $run12=mysqli_query($conn,$query1);

    if($run)
    {
      header ("location:http://localhost/UNIVERSITY_MANAGEMENT_SYSTEM/Student_Info.php");
    }
    else
    {
      echo "There is some problem";
    }

}
?>




    </body>
</html>
