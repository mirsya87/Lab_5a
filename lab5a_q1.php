<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
	   <title>Lab 5a Q1</title>
   </head>
   <body>
       
	   <?php
	       $name = "Muhammad Amir Syahir bin Rajab";
		   $matricNo = "CI250073";
		   $course = "Bachelor of information security";
		   $year = "Year 2";
		   $address = "Batu pahat Johor"
	   ?>
	   
	   <h2>Student Information</h2>
	   
	   <table border="1" cellpadding="8">
	   <tr>
	      <td>Name</td>
		  <td><?php echo $name; ?></td>
	   </tr>
	   <tr>
	       <td>Matric Number</td>
		   <td><?php echo $matricNo; ?></td>
	   </tr>
	   <tr>
	       <td>Course</td>
		   <td><?php echo $course; ?></td>
		</tr>
		<tr>
		   <td>Year of study</td>
		   <td><?php echo $year; ?></td>
		</tr>
		<tr>
		   <td>Address</td>
		   <td><?php echo $address; ?></td>
		</tr>
		</table>
   </body>
</html>