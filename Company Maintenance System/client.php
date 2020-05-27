<?php
session_start();
$connect = mysqli_connect("localhost", "root","", "company maintenance system");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>CAMERAXIS</title>
		<link rel="icon" href="Header & Footer/Camera.png"/>
		<link rel = "stylesheet" type = "text/css" href = "myStyle.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	
	<body>
		<div class="col-12" >
			<div class="col-1"></div>

			<div class="col-2" align="center" >
				<a href="aboutus.php">ABOUT US</a>
			</div>

			<div class="col-2" align="center">
				<a href="services.php">SERVICES</a>
			</div>

			<div class="col-2" align="center">
				<a href="CompanyMaintenanceSystem.php"><img src="Header & Footer/Camera.png" style="height:25%;width:25%"></a>
			</div>

			<div class="col-2" align="center">
				<a href="contactus.php">CONTACT US</a>
			</div>

			<div class="col-2" align="center">
				<?php
					if(isset($_SESSION['username'])){
        				echo $_SESSION['username'].'<br/>';
        				echo '<a href="logout.php?logout">Logout</a>';
    				}
    				else{
        				header("location:CompanyMaintenanceSystem.php");
    				}
				?>
			</div>
			
			<div class="col-1"></div>
		</div>

		<div class="col-12">
				<img src="Client/client1.jpg" style="width:100%;height:400px;">
		</div>
		
		<div class="col-12">
			<h1 Style="background-color:gray" align="center">Do You Have Task?</h1>
		</div>

		<div class="col-12">
			<div class="col-6">
					<img src="Client/client.jpg" style="width:100%;height:300px;">
			</div>

			<div class="col-6">
				<form method="POST" action="taskinsert.php">

					<table>

						<tr>
							<td><label for="mail">Email</label></td>
							<td><input type="text" name="mail" placeholder="Your Email Id" pattern=".+@gmail.com" required></td>
						</tr>

							  		<tr>
							  			<td><label for="lname">Task Name</label></td>
							  			<td><select name="taskname">
						  						<option value="Typhography">Typhography</option>
						  						<option value="Invitation">Invitation</option>
						  						<option value="Banner">Banner</option>
						  						<option value="Wedding">Wedding</option>
						  						<option value="Christmas">Christmas</option>
											</select>
										</td>
							  		</tr>

							  		<tr>
							  			<td><label for="lname">Task Description</label></td>
							  			<td><textarea rows="4" cols="50" name="description" placeholder="Enter your Description" required="required"></textarea></td>
							  		</tr>

							  		<tr>
							  			<td><label for="lname">Dead Line</label></td>
							  			<td><input type="date" name="ddate" required></td>
							  		</tr>

							  		<tr>
							  			<td></td>
							  			<td><input type="submit" value="Submit"style="background-color:#bbb;"><input type="reset" value="Clear"style="background-color:#bbb;" required></td>
							  		</tr>
							  	</table>
						</form>
			</div>
					
			
		</div>

		<div class="col-12">
			<h1 Style="background-color:gray" align="center">Approvals Checking</h1>
		</div>

		<div class="col-12">
			<div class="col-3"></div>
		
			<div class="form col-6">
				<form  action="client.php" method="POST">
					<label>Task Id</label>
					<input type="text" name="ClientTaskId" required> 
					<input type="submit" name="submit" value="View Details">
				</form> 
			</div>

			<div class="col-3"></div>
		</div>

		<div class="row col-12">
			<div class="col-3"></div>
	
			<?php
	  			if(isset($_POST["submit"])){
				$ClientTaskId =  $_POST['ClientTaskId'];		
				$query = "SELECT * from clienttask WHERE ClientTaskId = '$ClientTaskId'";
				$sqldata=mysqli_query($connect, $query)or die('error getting');

				echo "<div class='form col-6'>";
				echo "<form action='client.php' method='POST'>";
				echo "<table>";

					while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
						echo "<tr>";
						echo "<td>ClientTaskId</td>";
						echo "<td><input type='text' name='ClientTaskId' value=".$row['ClientTaskId']."  readonly></td>";
						echo "</tr>";
		
						echo "<tr>";
						echo "<td>Task Name</td>";
						echo "<td><input type='text' name='TaskName' value=".$row['TaskName']." readonly></td>";
						echo "</tr>";
					
						echo "<tr>";
						echo "<td>Approve Status</td>";
						echo "<td><textarea name='Approve_Status' readonly>".$row['Approve_Status']."</textarea></td>";
						echo "</tr>";
					}
				echo "</table>";
				echo "</form>";
				echo "</div>";
	  			}
	  		?>

  			<div class="col-3"></div>
		</div>

		<div class="col-12">
			<h1 Style="background-color:gray" align="center">Do You Have FeedBack?</h1>
		</div>
			
			<div class="col-6">
				<form method="POST" action="feedbackinsert.php">
					<table>

						<tr>
							<td><label>Task Name</label></td>
							<td><select name="Task_Name">
						  			<option value="Typhography">Typhography</option>
						  			<option value="Invitation">Invitation</option>
						  			<option value="Banner">Banner</option>
						  			<option value="Wedding">Wedding</option>
						  			<option value="Christmas">Christmas</option>
								</select>
							</td>
						</tr>

						<tr>
							<td><label>Email</label></td>
							<td><input type="text" id="lname" name="Email" placeholder="your mail id" required></td>
						</tr>

						<tr>
							<td><label>Dead Line</label></td>
							<td><input type="date" name="Feedback_Date" required></td>
						</tr>

						<tr>
							<td><label>Your Rate for Task Submission</label></td>
							<td><input type="radio" name="Client_Sub_Rate" value="1"> 1 <br>
	 							<input type="radio" name="Client_Sub_Rate" value="2"> 2 <br>
	 							<input type="radio" name="Client_Sub_Rate" value="3"> 3 <br>
					 			<input type="radio" name="Client_Sub_Rate" value="4"> 4 <br>
	 							<input type="radio" name="Client_Sub_Rate" value="5"> 5 <br>
	 						</td>
						</tr>

						<tr>
							<td><label>Comment</label></td>
							<td><input type="text" id="lname" name="Comment" placeholder="Enter your comment" required></td>
						</tr>

						<tr>
							<td><label>Service Status</label></td>
							<td><input type="radio" name="Service_Status" value="1"> Very Statisefied <br>
	 							<input type="radio" name="Service_Status" value="2"> Statisefied <br>
	 							<input type="radio" name="Service_Status" value="3"> Normal <br>
					 			<input type="radio" name="Service_Status" value="4"> Poor <br>
	 							<input type="radio" name="Service_Status" value="5"> Very Poor <br>
	 						</td>
						</tr>

						<tr>
							<td></td>
							<td><input type="submit" value="Submit"></td>
						</tr>
					</table>
				</form>
			</div>
					
			<div class="col-6">
				<img src="Client/client3.jpg" style="width:100%;height:300px;">
			</div>

			<div class="col-12 footer">
			<div class="row">
				<div class="col-12" id="googleMap" style="width:100%;height:300px;background-color:gray">
					<!--a href="https://www.google.com/maps/place/Ridgeway+Pl,+Colombo/@6.8798504,79.8554955,17z/data=!3m1!4b1!4m5!3m4!1s0x3ae25bc6d5e20acd:0xd0eb67a7aefc8ff1!8m2!3d6.8798504!4d79.8576842"><img src="Header & Footer/map.png" style="height:300px;width:100%"></a-->
					<script>
						function myMap() {
							var mapProp= {center:new google.maps.LatLng(-25.363, 131.044),zoom:5,};
							var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
						}
					</script>

					<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYzXj5wF4L6mChyyc5xwfb2QT1QEZ9VN8&callback=myMap"></script>
				</div>
			</div>

			<div class="row">
				<div class="col-6">
					<div class="row">
						<div class="col-12">
							<img src="Header & Footer/62516.png">No 12, Ridgeway place Colombo 04
						</div>
						<div class="col-12">
							<img src="Header & Footer/img_286083.png">011-2547658
						</div>
						<div class="col-12">
							<img src="Header & Footer/email.png">www.cameraxis@gmail.com
						</div>
					</div>
				</div>
				
				<div class="col-6">
					<a href="https://www.facebook.com/cameraxis/"><img src="Header & Footer/facebook-4dd1631e86173638d2c9aaa051dd7f8f.png" style="height:9%;width:9%"></a>&nbsp &nbsp &nbsp
					<a href="https://www.instagram.com/cameraxisapp/?hl=en"><img src="Header & Footer/md_5a98273a4e62e.png" style="height:10%;width:10%"></a>&nbsp &nbsp &nbsp
					<a href="https://plus.google.com/+Cameraxis"><img src="Header & Footer/md_5a98273aeeb5a.png" style="height:9%;width:9%"></a>&nbsp &nbsp &nbsp
					<a href="https://twitter.com/cameraxis"><img src="Header & Footer/md_5a98273bb9a60.png" style="height:9%;width:9%"></a>&nbsp &nbsp &nbsp
				</div>
			</div>		
		</div>

	</body>
</html>