<?php
//connect to my sql

$conn = mysqli_connect('localhost','root','123456','universitymanagment');   
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Faculty Information</title>
		<style>
			h1 {
				font-size: 40px;
				text-shadow: 3px 2px red;
			}

			#container1{
				overflow: hidden;
				color: saddlebrown;
				padding-top: 20px 30px 30px 20px ;
			}

			#borderimg{
				border: 250px solid transparent;
    			padding: 15px;
    			background-image: url('faculty_image.jpg');
    			background-repeat: no-repeat;
    		}
			tr:hover {
				background-color: black;
				color: white; 
			}
		</style>
	</head>
	<body>
		<div id="borderimg"></div>
		<div id ="container1">
			<fieldset>
				<legend><h1>Faculty Information</h1></legend>
					<table>
						<thead>
							<tr align="left">
								<th width="300">Name</th>
								<th width="300">Salary</th>
								<th width="300">Designation</th>
								<th width="300">Gender</th>
								<th width="300">Faculty ID</th>
								<th width="300">Department Number</th>
							</tr>
						</thead>



<?php
			
			
			$c=$_SESSION['aid'];
			$d=$_SESSION['psw'];
			$r="select * from faculty where faculty_id=$c and PASSWORD=$d";
			$r1=mysqli_query($conn,$r);
			



	
		
?>


	<?php	while($row=mysqli_fetch_assoc($r1)):?>

						<tbody>
							<tr>
								<td><h3><?php echo $row['faculty_name'];?></h3></td>
								<td><h3><?php echo $row['salary'];?></h3></td>
								<td><h3><?php echo $row['designation'];?></h3></td>
								<td><h3><?php echo $row['gender'];?></h3></td>
								<td><h3><?php echo $row['faculty_id'];?></h3></td>
								<td><h3><?php echo $row['department_number'];?></h3></td>
							</tr>

						</tbody>

 		<?php endwhile;?>
					</table>
				</fieldset>
		</div>
	</body>
</html>
