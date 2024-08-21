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
	
		.footer {
			background-color: #0E46A3; 
			color: #fff;
			padding: 20px;
			text-align: center;
			clear: both;
		}

		body {
			font-family: Arial, sans-serif;
		}

		.container {
			max-width: 600px;
			margin: 20px auto;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}

		h1 {
			text-align: center;
		}

		form {
			margin-top: 20px;
		}

		label {
			display: block;
			margin-bottom: 5px;
		}

		input[type="text"],
		input[type="email"],
		textarea {
			width: 100%; 
			max-width: 1010px;
			padding: 10px;
			margin-bottom: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-sizing: border-box;
		}

		button {
			width: 30%;
			padding: 10px;
			background-color: #007bff;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			margin-left:350px;
		}

		button:hover {
			background-color: #0056b3;
		}

		.section-tittle {
			text-align: center;
			margin-bottom: 50px;
		}

		.form-container {
			text-align: center;
			margin-top:20;
		}
		form {
			display: inline-block;
			text-align: left;
			width:80%;
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
 
	<h1>SERVICE FORM</h1>
	<div class="form-container">
	
		<form method="post" action="#">
		
			<label for="name">Customer Name:</label><br>
			<input type="text" id="name" name="name" required><br>
    
			<label for="email">Email:</label><br>
			<input type="email" id="email" name="email" required><br>
    
			<label for="phone">Phone number:</label><br>
			<input type="text" id="phone" name="phone" required><br>
    
			<label for="vehicle">Vehicle Details:</label><br>
			<input type="text" id="vehicle" name="vehicle" required><br>
    
			<label for="message">Message:</label><br>
			<textarea id="message" name="message" rows="4" required></textarea><br>
    
			<button type="submit" name="submit">Submit</button><br><br>
		</form>
	</div>
	
	<?php
	
		if(isset($_POST['submit'])){
			error_reporting(1);
			include("config.php");
    
			$name=$_POST['name'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$vehicle=$_POST['vehicle'];
			$message=$_POST['message'];

			$query = "INSERT INTO service(name,email,phone,vehicle,message)VALUES
			('$name','$email','$phone','$vehicle','$message')";
       
			mysqli_query($con,$query) or die(mysqli_error($con));
    
				echo "<script> 
						alert('Service Added Successfully');
						location.href='serform.php';
					</script>";
		}
	?>

	<div class="footer">
		<p>© 2024 Company Name. All rights reserved.</p>
		<p>Contact us: APwash@gmail.com</p>
	</div>

</body>
</html>