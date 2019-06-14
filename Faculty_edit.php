<?php
//connect to my sql

$conn = mysqli_connect('localhost','root','123456','universitymanagment');

session_start();


      
      
      $c=$_SESSION['aid'];
      $d=$_SESSION['psw'];
      $r="select * from faculty where faculty_id=$c and PASSWORD=$d";
      $r1=mysqli_query($conn,$r);

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
   
    <h2>Edit Faculty Details</h2>

<?php while($row=mysqli_fetch_assoc($r1)):?>
<form  method="POST" action="Faculty_edit.php" style="border:1px solid #ccc">
  <div>
    <class="container1">
      <fieldset>
      <legend>Personal details</legend>
    <label><b>Name of faculty</b> </label>
    <input type="text" placeholder="Enter faculty name" name="sname" value="<?php echo $row['faculty_name'];?> " required ><br>
      
    <label><b>Designation</b> </label>
    <input type="text" placeholder="Designation of faculty" name="dname" value="<?php echo $row['designation'];?> " required ><br>
    

        <label><b>Select Gender</b></label>
          <input name="gender"  value="<?php echo $row['gender'];?> "><br>

  <label><b>Salary</b> </label>
    <input type="number" placeholder="Salary" name="sal" value="<?php echo $row['salary'];?>" required ><br>
    
          </fieldset>


      <br>

     <class="container2">
          <fieldset>
                <legend>Account details</legend>
                <label><b>Faculty ID</b></label>
                <input type="Number" placeholder="Enter faculty id" name="facultyid" value="<?php echo $row['faculty_id'];?>" required><br>
                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" value= "<?php echo $row['Password'];?>" required><br>
                    <label><b>Select Department</b></label>
                 <input name="Department"  value="<?php echo $row['department_number'];?>">
                 <br>
          </fieldset>
        <?php endwhile;?>
      </div>
      <br>

      <div class="clearfix">
          <button type="submit" name="submit" class="signupbtn" value="submit">Save Changes</button>
       
      </div>
</form>
    <br>





<?php



  if(isset($_POST['submit']))
  {
      $cou1=$_POST['sname'];
  $cou2=$_POST['dname'];
  $cou3=$_POST['gender'];
  $cou4=$_POST['sal'];
  $cou5=$_POST['facultyid'];
  $cou6=$_POST['password'];
  $cou7=$_POST['Department'];


    $query = "Update faculty SET faculty_name='$cou1', designation='$cou2' , gender='$cou3' , salary=$cou4 , department_number=$cou7 where faculty_id=$cou5";
    $run=mysqli_query($conn,$query);
    if($run)
    {
      header ("location:http://localhost/UNIVERSITY_MANAGEMENT_SYSTEM/Faculty_Info.php");
    }
    else
    {
      echo "There is some problem";
    }

}
?>


    </body>
</html>