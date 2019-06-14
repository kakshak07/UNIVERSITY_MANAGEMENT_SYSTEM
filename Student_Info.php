<?php
//connect to my sql

$conn = mysqli_connect('localhost','root','123456','universitymanagment');
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Student Information</title>
		<style>
			h1 {
				font-size: 40px;
				text-shadow: 3px 2px red;
			}

			#container1{
				overflow: hidden;
				color: saddlebrown;
			}

			#container2{
				overflow: hidden;
				color: saddlebrown;
			}

			#borderimg{
				border: 250px solid transparent;
    			padding-top: 5px;
    			background-image: url('');
    			background-repeat: no-repeat;
    		}
			tr:hover {
				background-color: black;
				color: white; 
			}
		</style>
	</head>
	<body>
		<img src="student_image.jpg" width:"400px" height="10%">
		<div id ="container1">
			<fieldset>
				<legend><h1>Personal Details</h1></legend>
					<table>
						<thead>
							<tr align="left">
								<th width="300">Name</th>
								<th width="300">Father's Name</th>
								<th width="300">Mother's Name</th>
								<th width="300">Date of Birth</th>
								<th width="300">Gender</th>
								<th width="300">Address</th>
							</tr>
						</thead>
<?php
			
			
			$c=$_SESSION['aid'];
			$d=$_SESSION['psw'];
			$r="select * from student_details where student_id=$c and PASSWORD=$d";
			$rq="select * from mess where student_id=$c";
			$r1=mysqli_query($conn,$r);
			$r2=mysqli_query($conn,$r);
			$rw2=mysqli_query($conn,$rq);


		/*	while($r2=mysqli_fetch_array($r1))
			{
				echo $r2['student_id'];
				echo $r2['student_name'];
			}*/

		/*<?php while($row = mysqli_fetch_assoc($course)) : ?>
				<li><?php echo $row['course_number'] ;?> <?php echo $row['number_of_credits']; ?>
				<?php echo $row['course_name'];?> </li>
				<?php endwhile;?>
*/

			?>

			<?php while($row=mysqli_fetch_assoc($r1)):?>
						<tbody>
							<tr>
								<td><h3><?php echo $row['student_name'];?></h3></td>
								<td><h3><?php echo $row['father_name'];?></h3></td>
								<td><h3><?php echo $row['mother_name'];?></h3></td>
								<td><h3><?php echo $row['birth_date'];?></h3></td>
								<td><h3><?php echo $row['sex'];?></h3></td>
								<td><h3><?php echo $row['address'];?></h3></td>
							</tr>							
						</tbody>
						<?php endwhile;?>
					</table>
				</fieldset>
		</div>


		<div id ="container2">
			<fieldset>
				<legend><h1>Academic Details</h1></legend>
					<table>
						<thead>
							<tr align="left">
								<th width="300">Application ID</th>
								<th width="300">Hostel ID</th>
								<th width="300">Department Number</th>
								
							</tr>
						</thead>
							
			<?php while($ro=mysqli_fetch_assoc($r2)):?>
						<tbody>
							<tr>
								<td><h3><?php echo $ro['student_id'];?></h3></td>
								<td><h3><?php echo $ro['hostel_id'];?></h3></td>
								<td><h3><?php echo $ro['department_number'];?></h3></td>
								<?php endwhile;?>

								
							</tr>							
						</tbody>
						
					</table>
			</fieldset>



			<fieldset>
				<legend><h1>Mess Details</h1></legend>
					<table>
						<thead>
							<tr align="left">
								<th width="300">Hostel ID</th>
								<th width="300">Student ID</th>
								<th width="300">Mess ID</th>
								<th width="300">Mess Name</th>
							</tr>
						</thead>
							
			<?php while($roqw=mysqli_fetch_assoc($rw2)):?>
						<tbody>
							<tr>
								<td><h3><?php echo $roqw['hostel_id'];?></h3></td>
								<td><h3><?php echo $roqw['student_id'];?></h3></td>
								<td><h3><?php echo $roqw['mess_id'];?></h3></td>
								<td><h3><?php echo $roqw['mess_name'];?></h3></td>
								<?php endwhile;?>

								
							</tr>							
						</tbody>
						
					</table>
			</fieldset>






		</div>
	</body>
</html>





								