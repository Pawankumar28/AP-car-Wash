<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Panel</title>
<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
		
		#sidebar {
			position: fixed;
			width: 250px;
			height: 100%;
        background-color: #333;
        padding-top: 20px;
		}
		
		#content {
			margin-left: 250px;
			padding: 20px;
		}
		
		.nav-link {
			display: block;
			color: white;
			text-decoration: none;
			padding: 10px;
			border-bottom: 1px solid #666;
		}
    
		.nav-link:hover {
			background-color: #555;
		}
    
		table {
			width: 100%;
			border-collapse: collapse;
			margin-top: 20px;
		}
		
		th,td {
			border: 1px solid #ddd;
			padding: 8px;
			text-align: left;
		}
		
		th {
			background-color: #f2f2f2;
		}
</style>
</head>
<body>
    
	<div id="sidebar">
        <a href="#" class="nav-link" onclick="showTable('userTable')">View Service</a>
        <a href="index.php" class="nav-link" onclick="index.php">Logout</a>
    </div>
    
	<div id="content">
        <table id="userTable" style="display:none;">
            <thead>
                <tr>
					<th >S/N</th>
                    <th>Customer Name</th>
					<th>Email</th>
                    <th>Phone Number</th>
                    <th>Vehicle Details</th>
					<th>Message</th>               
                </tr>
            </thead>
            <tbody>

	<?php
		include("config.php");

			$query = "SELECT * FROM service"; // Change 'services' to your actual table name
			$result = mysqli_query($con, $query);

		if (mysqli_num_rows($result) > 0) {
  
			echo"<table>
					<thead>
						<tr>
							<th>S/N</th>
							<th>Customer Name</th>
							<th>Email</th>
							<th>Phone Number</th>
							<th>Vehicle Details</th>
							<th>Message</th>
						</tr>
					</thead>
				<tbody>";
   
				while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>" . $row['id'] . "</td>"; 
				echo "<td>" . $row['name'] . "</td>"; 
				echo "<td>" . $row['email'] . "</td>";
				echo "<td>" . $row['phone'] . "</td>";
				echo "<td>" . $row['vehicle'] . "</td>";
				echo "<td>" . $row['message'] . "</td>";
				echo "</tr>";
			}

			echo "</tbody></table>";
	
		} else {
    
			echo "No services added yet.";
		}

		mysqli_close($con);
	?>
				</tbody>
			</table>
        
			<script>
				function showTable(tableId) {
					var tables = document.querySelectorAll('table');
					tables.forEach(function(table) {
					table.style.display = 'none';
				});
				document.getElementById(tableId).style.display = 'table';
			}
			</script>
</body>
</html>
