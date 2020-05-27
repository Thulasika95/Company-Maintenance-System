<!DOCTYPE html>
<html>
	<head>
		<title>CAMERAXIS</title>
		<link rel="icon" href="Header & Footer/Camera.png"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel = "stylesheet" type = "text/css" href = "myStyle.css" />
	</head>
	
	<body>

		<div class="row" >

			<div class="col-1">
			</div>

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
			<a href="login.php">LOGIN</a>
			</div>
			
			<div class="col-1">
			</div>

		</div>

		<div class="col-12">
			<img src="Home/login.jpg" style="width:100%;height:500px;">
		</div>
		
		<div class="col-12">
				<h1 Style="background-color:gray;padding:5px" align="center">Login</h1>
		</div>

		<div class="col-12">

			<div class="col-3">
			</div>

			<div class="col-6 login" align="center">
				<form method="POST" action="loginpage.php">
					<label for="fname">User ID</label>
					<input type="text" name="username" placeholder="Your UserId">
					<label for="password">Password</label>
					<input type="password" name="password" placeholder="Your Password">								  
					<button type="submit" name="submit" id="submit">Login</button>
				</form>
				<br><br><br>
				<p align="right">Forgot your password? <a href="#" style="color: blue">Click Here!</a></p>
			</div>

			<div class="col-3">
			</div>

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