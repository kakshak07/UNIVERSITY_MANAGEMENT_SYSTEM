<?php
//connect to my sql

$conn = mysqli_connect('localhost','root','123456','universitymanagment');
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
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

			.container label {
				font-size: 50px; 
			}

			input[type=text], input[type=password]{
			    width: 40%;
			    padding: 10px 15px;
			    margin: 30px 20;
			    display: inline-block;
			    border: 10px solid #ccc;
			    box-sizing: border-box;
			    font-size: 50px;
			}

			input[type=checkbox]{
				
			}


			button {
			    background-color: #4CAF50;
			    color: white;
			    padding: 30px 40px;
			    margin: 50px 0;
			    border: none;
			    cursor: pointer;
			    width: 25%;
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
		<img src="Untitled.png" alt="some_text" height="1000px" width="100%">
		<div id = 'am'>
		<form action="Faculty_Login.php" method="post">
  			<div class="imgcontainer">
      			<h2>Faculty Login </h2>
    			<img src="img_avatar2.png" alt="Avatar" class="avatar" >
  			</div>

  			<div class="container">		    
			    <label><b>Application id</b></label>
			    <input type="text" placeholder="Enter application id" name="aid" required><br><br>
			    <label><b>Password</b></label>
			    <input type="password" placeholder="Enter Password" name="psw" required><br>
			    <button type="submit" value="submit" name="submit"><b>Login</b></button>
			    <button type="submit" name="edit" value="edit"><b>Edit</b></button>
  
  			</div>



<?php

 if(isset($_POST['submit']))
 {
	$a=$_POST['aid'];
	$b=$_POST['psw'];
 
 	$sq="select * from faculty where faculty_id='$a' and PASSWORD='$b'";

 	$res1=mysqli_query($conn,$sq); 
 	$count = mysqli_num_rows($res1); 
 	
 	if ($count==1)
 		{	

			$_SESSION['aid'] = $a;
			$_SESSION['psw'] = $b;
			
	 		header ("location:http://localhost/UNIVERSITY_MANAGEMENT_SYSTEM/Faculty_Info.php");
 		}
 	else
	 header ("location:sign_up1.html");
}



if(isset($_POST['edit']))
 {
	$a=$_POST['aid'];
	$b=$_POST['psw'];
 
 	$sq="select * from faculty where faculty_id='$a' and PASSWORD='$b'";

 	$res1=mysqli_query($conn,$sq); 
 	$count = mysqli_num_rows($res1); 
 	
 	if ($count==1)
 		{	

			$_SESSION['aid'] = $a;
			$_SESSION['psw'] = $b;
	 		header ("location:http://localhost/UNIVERSITY_MANAGEMENT_SYSTEM/Faculty_edit.php");
 		}
 	else
	 echo "Failed to login! sorry";
}
 
?>


	</body>
</html>