<?php
//connect to my sql

$conn = mysqli_connect('localhost','root','123456','universitymanagment');
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
		<title>Login Page</title>
		<style>
			
			.imgcontainer {
			    text-align: center;
			    margin: 100px 40% 60px 20%;
			    width: 60%;
			    padding right: 50px;
			}
			.container {
    			display: box;
    			margin: auto;
    			text-align: center;
			}

			.container label1 {
				font-size: 70px;
				padding-right: 75px;
			}


			.container label {
				font-size: 70px;
				padding-right: 55px;
			}

			input[type=text]{
			    width: 30%;
			    padding: 20px 15px;
			    margin: 30px 20;
			    display: inline-block;
			    border: 10px solid #ccc;
			    box-sizing: border-box;
			    font-size: 50px;
			}


			input[type=password] {
				width: 30%;
			    padding: 20px 15px;
			    margin-left: 100px;
			    display: inline-block;
			    border: 10px solid #ccc;
			    font-size: 50px;

			}

			button {
			    background-color: #4CAF50;
			    color: white;
			    padding: 30px 40px;
			    margin: 50px 0;
			    border: none;
			    cursor: pointer;
			    width: 20%;
			    font-size: 60px;
			}


			#11
    		{
        		text-align: center;
    		}
			img.avatar {image-align: center;
    			width: 45%;
    			border-radius: 50%;
    		}

  			#am{
        		width :60%;
        		align-items: center;
         		background-color: aliceblue;
    			left: 0;
    			right: 0;
    			margin: auto;
    		}

    		@media screen and (max-width: 300px) {
    			span.psw {
       				display: block;
       				float: none;
    			}
    			.cancelbtn {
       				width: 100%;
    			}
			}

			h2
    		{
    			color : saddlebrown;
			        background-color: gainsboro;
			        text-align: center;
			        font-size: 66px;
			        margin:0;
    			padding:20px;

    		}
			
		</style>
	</head>
	<body>
		
		<img src="Untitled.png" alt="some_text" height="100%" width="100%">
		<div id = 'am'>
		<form action="Student_Login.php" method="post">
  			<div class="imgcontainer">
      			<h2>Student Login </h2>
    			<img src="img_avatar2.png" alt="Avatar" class="avatar" >
  			</div>

  			<div class="container">		    
			    <label><b>Application id</b></label>
			    <input type="text" placeholder="Enter application id" name="aid" required><br><br>
			    <label1><b>Password</b></label1>
			    <input type="password" placeholder="Enter Password" name="psw" required><br>
			    <button type="submit" name="submit" value="submit"><b>Login</b></button>
  				<button type="submit" name="edit" value="edit"><b>Edit</b></button>
  			</div>
  		</div>




<?php

 if(isset($_POST['submit']))
 {
	$a=$_POST['aid'];
	$b=$_POST['psw'];
 
 	$sq="select * from student_details where student_id='$a' and PASSWORD='$b'";

 	$res1=mysqli_query($conn,$sq); 
 	$count = mysqli_num_rows($res1); 
 	
 	if ($count==1)
 		{	

			$_SESSION['aid'] = $a;
			$_SESSION['psw'] = $b;
	 		header ("location:http://localhost/UNIVERSITY_MANAGEMENT_SYSTEM/Student_Info.php");
 		}
 	else
 		header ("location:sign_up.html");

}




if(isset($_POST['edit']))
 {
	$a=$_POST['aid'];
	$b=$_POST['psw'];
 
 	$sq="select * from student_details where student_id='$a' and PASSWORD='$b'";

 	$res1=mysqli_query($conn,$sq); 
 	$count = mysqli_num_rows($res1); 
 	
 	if ($count==1)
 		{	

			$_SESSION['aid'] = $a;
			$_SESSION['psw'] = $b;
	 		header ("location:http://localhost/UNIVERSITY_MANAGEMENT_SYSTEM/Student_edit.php");
 		}
 	else
	 echo "Failed to login! sorry";
}

?>





	</body>
</html>