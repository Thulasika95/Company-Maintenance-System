<!DOCTYPE html>
<html>
	<head>
		<title>CAMERAXIS</title>
		<link rel="icon" href="Header & Footer/Camera.png"/>		
		<link rel = "stylesheet" type = "text/css" href = "myStyle.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	
	<body>

		<div class="row" >

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
				<a href="login.php">LOGIN</a>
			</div>
			
			<div class="col-1"></div>

		</div>

		<div class="col-12">
			<div class="slideshow-container">
				
				<div class="mySlides fade" >
					<div class="numbertext"></div>
					<img src="Home/home1.jpg" style="width:100%;height:400px;">
				</div>

				<div class="mySlides fade">
					<div class="numbertext"></div>
					<img src="Home/home2.jpg" style="width:100%;height:400px;">
				</div>

				<div class="mySlides fade">
					<div class="numbertext"> </div>
					<img src="Home/home3.jpg" style="width:100%;height:400px;">
				</div>
				<div class="mySlides fade">
					<div class="numbertext"></div>
					<img src="Home/home4.jpg" style="width:100%;height:400px;">
				</div>

				<div class="mySlides fade">
					<div class="numbertext"></div>
					<img src="Home/home5.jpg" style="width:100%;height:400px;">
				</div>
				
				<a class="prev" onclick="plusSlides(0)" style="color: white;">&#10094;</a>
				<a class="next" onclick="plusSlides(1)"style="color: white;">&#10095;</a>
			</div>
			<br>

				<div style="text-align:center">
					<span class="dot" onclick="currentSlide(0)"></span> 
					<span class="dot" onclick="currentSlide(1)"></span> 
					<span class="dot" onclick="currentSlide(2)"></span> 
					<span class="dot" onclick="currentSlide(3)"></span> 
					<span class="dot" onclick="currentSlide(4)"></span> 
				</div>
				
				

			<script>
				var slideIndex = 0;
				showSlides();
				
				function plusSlides(n) {
					showSlides(slideIndex += n);
				}
				
				function currentSlide(n) {
					showSlides(slideIndex = n);
				}

				function showSlides() {
				var i;
				var slides = document.getElementsByClassName("mySlides");
				var dots = document.getElementsByClassName("dot");
				for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";  
										}
				slideIndex++;
				if (slideIndex > slides.length) {slideIndex = 1}    
				for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
								}	
				slides[slideIndex-1].style.display = "block";  
				dots[slideIndex-1].className += " active";
				setTimeout(showSlides, 10000); // Change image every 3 seconds
				}
			</script>
		</div>

		<div class="col-12">
		
			<div class="row" >

				<div class="col-6" style="height:400px">
					<img src="Home/home7.jpg" style="width:100%;height:100%"/>
				</div>
				
				<div class="col-6" style="height:400px">
					<h3 align="center" style="font-family:Britannic Bold;color:#9ac0c5;font-size:42px">CHALLENGES MAKES YOU STONGER</h3>
					
					<p style="font-family:Britannic Bold;color:#767e7f;font-size:20px">
						Challenges are a part of everyday life. They make us stronger and without them life becomes somewhat meaningless because we have nothing to compare the good times to.
						These challenges come in many forms. For some, the challenge is doing well at school, for others it is getting to grips with financial worries.
						But, regardless of the challenge, facing up to it is key. Doing so will make you feel like you can take care of yourself, it will also make you understand the value of what you have now.
					</p>
				</div>

			</div>
					
		</div>
		
		<div class="col-12">
		
			<div class="row" >
				
				<div class="col-6" style="height:400px">
					<h3 align="center" style="font-family:Britannic Bold;color:#9ac0c5;font-size:42px">OUR VISION</h3>
					
					<p style="font-family:Britannic Bold;color:#767e7f;font-size:20px">
					Our proven success in visualizing and monetizing data using innovative and proven open source technologies, and our continued investment in research and development 
					create maximum efficiency for an outlay that brings the benefits of an integrated or boundaryless solution within the reach of more enterprises. Our dedicated team 
					equips organisations with the tools for success quickly and creatively, with minimal disruption to our customers’ business.
					</p>
				</div>
				
				<div class="col-6" style="height:400px">
					<img src="Home/home6.jpg" style="width:100%;height: 350px"/>
				</div>
				
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