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
			padding: 20px 15px; /* Adjust as needed */
			text-decoration: none;
			color: white;
			font-size: 16px; /* Adjust as needed */
			letter-spacing: 1px; /* Adjust as needed */
		}

        nav ul li a:hover {
            background-color: #555;
        }

        .banner {
            position: relative;
        }

        .banner img {
            display: allow;
            width: 100%;
            height:550px;
			filter: blur(1.5px);
			object-fit:cover;
        }

        .banner-text {
            position: absolute;
			font-family: "Poppins", sans-serif;
			color: #fff;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
        }

        .banner-text h2 {
            font-size: 3rem; 
            font-weight: bold; 
            text-transform: uppercase;
            letter-spacing: 2px; 
            margin-bottom: 10px; 
        }
		.banner-text h2 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
		 .services-section {
            background-color: #f7f7f7;
            padding: 50px 20px;
            text-align: center;
        }

        .services-section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .services-section p {
            font-size: 1.1rem;
            line-height: 1.6;
        }
		.service-img {
            display: block;
            margin: 0 auto;
            width: 50%; 
            max-width: 400px; 
            margin-top: 50px; 
        }
		
		.column {
			width: 25%;
			padding: 0 10px;
		}

		.row {
			margin: 0 -5px;
		}

		.row{
			display: flex;
			flex-direction:rows;
			justify-content: space-evenly; 
		}

		@media screen and (max-width: 600px) {
			.column {
				width: 100%;
				display: block;
				margin-bottom: 20px;
			}
		}

		.card {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			padding: 16px;
			padding_bottom:20px;
			text-align: center;
			background-color: #0E46A3;
			width:180px;
			color:white;
		}

		.card1 {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			padding: 15px;
			margin-bottom: 20px;
			text-align: center;
			background-color: #0E46A3;
			width:180px;
			color:white;
		}
 
		.footer {
			background-color: #0E46A3;
			color: #fff;
			padding: 20px;
			text-align: center;
			clear: both;
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

	<div class="banner">
		<img src="pexels-tima-miroshnichenko-6873088.jpg" alt="Banner Image">
			<div class="banner-text">
				<h2>Car Wash</h2>
				<h2>& Detailing</h2>
			</div>
	</div>

	<div class="services-section">
		<h2>Our Services</h2>
		<p>We Provide Best Services to Our Customer </p>
			
			<img class="service-img " src="polish.jpg">
			
	</div>

	<div class="row">
		<a href="service.php">
			<div class="card">
				<h3>CAR WASH</h3>
					<p>STARTS AT</p>
					<p>RS:500</p>
			</div>
 
		<a href="service.php">
			<div class="card">
				<h3>DETAILING</h3>
				<p>STARTS AT</p>
				<p>RS:1500</p>
			</div>
  
		<a href="service.php">
			<div class="card1">
				<h3>WASH AND DETAILING</h3>
				<p>STARTS AT</p>
				<p>RS:2500</p>
			</div>

		<a href="service.php">
			<div class="card1">
				<h3>WASH AND DETAILING</h3>
				<p>STARTS AT</p>
				<p>RS:2500</p>
			</div>
	
	</div>
	
	<div class="footer">
		<p>© 2024 Company Name. All rights reserved.</p>
		<p>Contact us: APwash@gmail.com</p>
	</div>
  
</body>
</html>


