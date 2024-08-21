<!doctype html>
<html>
<head>
<title>AP car Wash</title>
<style>
		body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
			display:flex;
			padding-left: 20px;
			background-color: #0E46A3;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
        }
		
		nav img {
            height:90px;       
		}			

        nav ul li a {
            display: inline-block;
			padding: 20px 15px; 
			text-decoration: none;
			color: white;
			font-size: 16px; 
			letter-spacing: 1px; 
        }

        nav ul li a:hover {
            background-color: #555;
        }
	
		.footer {
			background-color: #0E46A3;
			color: #fff;
			padding: 20px;
			text-align: center;
			clear: both; 
		}
		
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background-color: #f2f2f2;
		}

		.container {
			max-width: 1200px;
			margin: 20px auto;
			padding: 0 20px;
		}

		.service {
			display: flex; 
			background-color: #fff;
			border-radius: 8px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
			overflow: hidden;
			margin-bottom: 20px;
		}

		.service img {
			width: 200px; 
			height: auto;
			border-bottom: 1px solid #eee;
		}

		.service-content {
			padding: 20px;
			flex: 1; 
		}

		.service-title {
			font-size: 24px;
			margin: 0 0 10px; 
		}

		.service-description {
			font-size: 16px;
			color: #666;
			line-height: 1.6;
		}
 
		.small-btn {
			display: inline-block;
			padding: 6px 12px;
			font-size: 14px;
			text-align: center;
			cursor: pointer;
			border: 1px solid #ccc;
			background-color: #f0f0f0;
			color: white;
			border-radius: 4px;
			background-color:blue;	
		}
		
		.section-tittle {
			text-align: center;
			margin-bottom: 50px; /* Adjust as needed */
		}

</style>
</head>
<body>
	<nav>
		<img src="car11.png" alt="Logo">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="service.php">Services</a></li>
				<li><a href="about.php">About Us</a></li>  
			</ul>
	</nav>

	<div class="container">
	
		<div class="service">
			<img src="3.jpg" alt="Service 1">
				<div class="service-content">
					<h2 class="service-title">CAR WASH</h2>
						<p class="service-description">Car wash services offer a convenient solution for 
						keeping vehicles clean and well-maintained. Whether it's a simple exterior wash 
						or a comprehensive detailing package, car wash facilities provide a range of options 
						to suit various needs and preferences.Types of Car Wash Services:Exterior Wash,Interior Wash</p>
							
							<button class="small-btn" id="redirectBtn">Service Request</button>
							
							<script>
								document.getElementById("redirectBtn").onclick = function() {
								window.location.href = "serform.php";
								};
							</script>
				</div>
		</div>

		<div class="service">
			<img src="det.jpg">
				<div class="service-content">
					<h2 class="service-title">DETAILING</h2>
						<p class="service-description">Car detailing involves a comprehensive and meticulous 
						cleaning and restoration process to enhance the appearance and condition of a vehicle, 
						both inside and out. Detailing goes beyond a regular car wash, addressing every nook 
						and cranny of the vehicle to achieve a showroom-quality finish.</p>
							
							<button class="small-btn" id="redirectBtn1">Service Request</button>
			
							<script>
								document.getElementById("redirectBtn1").onclick = function() {
								window.location.href = "serform.php";
								};
							</script>
			
				</div>
		</div>

		<div class="service">
			<img src="pol.jpg" alt="Service 3">
				<div class="service-content">
					<h2 class="service-title">POLISHING</h2>
						<p class="service-description">Polishing a car is a vital step in the detailing process 
						that aims to restore and enhance the vehicle's paintwork, giving it a glossy and smooth 
						finish. Unlike waxing, which primarily adds a protective layer, polishing focuses on 
						correcting imperfections, enhancing shine, and rejuvenating the paint surface.</p>
			
							<button class="small-btn" id="redirectBtn3">Service Request</button>
							
							<script>
								document.getElementById("redirectBtn3").onclick = function() {
								window.location.href = "serform.php";
								};
							</script>
				</div>
		</div>
	
		<div class="service">
			<img src="paint.jpg" alt="Service 3">
				<div class="service-content">
					<h2 class="service-title">REPAINTING</h2>
						<p class="service-description">Repainting a car involves applying a fresh coat of paint 
						to the vehicle's exterior to restore its appearance, protect the underlying metal, and 
						enhance its overall aesthetic appeal. Whether it's due to cosmetic reasons, damage repair,
						or customization, repainting requires careful preparation, skill, and attention to detail.</p>
						
							<button class="small-btn" id="redirectBtn2">Service Request</button>
			
							<script>
								document.getElementById("redirectBtn2").onclick = function() {
								window.location.href = "serform.php";
								};
							</script>

				</div>
		</div>
	</div>
	
	<div class="footer">
		<p>© 2024 Company Name. All rights reserved.</p>
		<p>Contact us : APwash@gmail.com</p>
	</div>
</body>
</html>