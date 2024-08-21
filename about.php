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
		
		.section-tittle {
			text-align: center;
			margin-bottom: 35px;
		}

		.section-tittle span {
			display: block;
			font-size: 18px;
			color: #333;
		}

		.section-tittle h2 {
			font-size: 36px;
			color: #333;
			margin-top: 10px;
		}

		.about-container {
			font-family:italic;
			display: flex;
			align-items:middle;
			justify-content: space-between;
			margin-bottom: 60px;
		}

		.about-text {
			flex: 0 0 50%;
		}

		.about-img {
			flex: 0 0 50%;
			position: relative;
		}

		.about-font-img img {
			height: 350px;
			width: 100%;
		}

		.about-back-img {
			position: absolute;
			top: 0;
			left: 0;
			bottom: 0;
			right: 0;
			display: none;
		}

		@media (min-width: 992px) {
		.about-back-img {
		display: block;
		}
		}
	
		.footer {
			background-color: #0E46A3;
			color: #fff;
			padding: 20px;
			text-align: center;
			clear: both;
	
		.section-tittle {
			text-align: center;
			margin-bottom: 50px; /* Adjust as needed */
		}

		.about-container {
			display: flex;
			align-items: flex-start; /* Align items at the start of the flex container */
			margin-bottom: 80px;
		}

		.about-img {
			flex: 1;
			margin-right: 50px;
		}

		.about-img img {
			max-width: 100%;
			height: 100px;
			width:200px;
			border-radius: 20px;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
			margin-right: 50px; /* Add margin to create space between the image and text */
		}

		.about-text {
			flex: 2; 
			text-align: justify;
			margin-left: 50px;	
		}


		.about-text h3 {
			font-size: 24px;
			margin-bottom: 20px;
			color: #333;
		}

		.about-text p {
			font-size: 16px;
			line-height: 1.6;
			color: #555;
			margin-bottom: 10px;
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

	<div class="section-tittle mb-35">
		<h1>About Our Company</h1>
		<h2>Auto Care Service </h2>
	</div>

	<div class="about-container">
		<div class="about-img">
			<div class="about-font-img">
				<br><img src="4.jpg" alt "image">
			</div>
        
			<div class="about-back-img d-none d-lg-block">
				<img src="assets/img/gallery/about1.png" alt="">
			</div>
		</div>
	
		<div class="about-text">
			<h3>About Our Company</h3>
				<p>Autocare Car and Bike Wash Company stands out not only for its top-notch 
				services but also for its commitment to environmental sustainability.</p>
				<p>In addition to using eco-friendly products, the company implements water-saving
				techniques and responsible waste disposal practices, contributing to a cleaner and 
				greener future.</p>
				<p>Furthermore, their dedication to innovation is evident through ongoing research 
				and development efforts aimed at enhancing their cleaning processes and introducing 
				new services to meet evolving customer demands.</p>
				<p>Whether it's a regular maintenance wash or a comprehensive detailing package, 
				Autocare ensures that each vehicle receives personalized attention and expert care.</p>
				<p>As they continue to uphold their values of integrity, professionalism, and environmental 
				stewardship, Autocare Car and Bike Wash Company remains a trusted name in the automotive 
				cleaning industry, earning the loyalty and admiration of customers across the region.</p>
		</div>
	</div>

	<div class="footer">
		<p>© 2024 Company Name. All rights reserved.</p>
		<p>Contact us: APwash@gmail.com</p>
	</div>
</body>
</html>