<html>

	<head>
		<link rel="stylesheet" type="text/css" href="css.css" />
		<title> Fashion Republic </title>
	</head>

	<body>
	
		<div id=fixedheader> 
		
				<div id=himg> 
				<img align=left src="images/frlogo.png" width=150 height =80 >
				</div>
				
				<div id=htext> 
				<h1 align=center> Fashion Republic </h1> 
  				</div>
				
				
		</div>
		
		
	<div id="fixedfooter">  <?php include 'footer.php'; ?> </div>

		   <div class="container">
		   <div id=side> <?php  include 'sidebar.php'; ?>  </div>
		<div id=center>
	
		<h1>Fashion Republic: View Employee Details</h1>
		
		
		<?php
			error_reporting(E_ALL & ~E_NOTICE); // error fix
			include 'connect.php'; //mysql connection

			$search = $_POST['empid'];
			
			$query = "SELECT EmpID, fName, lName, Position, City, Province, retailshopID, warehouseID FROM employees";
			
			$result = mysqli_query($connect,$query) or die(mysql_error());
			
				echo "<br/><table border='1'>
				<tr>
				<th>EmpID</th>
				<th>First name</th>
				<th>Last Name</th>
				<th>Position name</th>
				<th>City</th>
				<th>Province</th>
				<th>Retailshop ID</th>
				<th>Warehouse ID</th>
				</tr>";
			
			while($row = mysqli_fetch_array($result)){
				echo "<tr>
					<td>" . $row['EmpID'] . "</td>
					<td>" . $row['fName'] . "</td>
					<td>" . $row['lName'] . "</td>
					<td>" . $row['Position'] . "</td>
					<td>" . $row['City'] . "</td>
					<td>" . $row['Province'] . "</td>
					<td>" . $row['retailshopID'] . "</td>
					<td>" . $row['warehouseID'] . "</td>
					</tr>";
			
			}
			echo "</table>";
			
		
			mysqli_close($connect);
		
		?>
		
		

		<form action = "" method = "post">
			<fieldset>
			<legend><h3>Search employee: </h3></legend>
			
			Employee ID:
			<input type = "text" name = "empid">	
			<input type = "submit" value = "View Employee" name = 'View'>
			</fieldset>
		</form>
		
		<?php
			error_reporting(E_ALL & ~E_NOTICE); // error fix
			include 'connect.php'; //mysql connection

			$search = $_POST['empid'];
		
					
			if(isset($_POST['View'])){
				
				$sql_view = "SELECT * FROM employees WHERE EmpID='$search' ";
			
			
				$result = mysqli_query($connect,$sql_view) or die(mysql_error());

					echo "
					<table>
					<tr>
					<th>EmpID</th>
					<th>First name</th>
					<th>Last Name</th>
					<th>NIC</th>
					<th>Position</th>
					<th>City</th>
					<th>Province</th>
					<th>Gender</th>
					<th>DOB</th>
					<th>Retail Shop ID</th>
					<th>Warehouse ID</th>
					
					</tr>";
					
				while($row = mysqli_fetch_array($result)){
					echo "<tr>
						<td>" . $row['EmpID'] . "</td>
						<td>" . $row['fName'] . "</td>
						<td>" . $row['lName'] . "</td>
						<td>" . $row['NIC'] . "</td>
						<td>" . $row['Position'] . "</td>
						<td>" . $row['City'] . "</td>
						<td>" . $row['Province'] . "</td>
						<td>" . $row['Gender'] . "</td>
						<td>" . $row['DOB'] . "</td>
						<td>" . $row['retailshopID'] . "</td>
						<td>" . $row['warehouseID'] . "</td>
						</tr>";
				
				}
				echo "</table>";
				
				
			}

		?>
		<br/><br/><a href = 'menu.php'>Click here to go back to menu.</a>
		
		
		</div>
		</div>
		
	</body>

</html>