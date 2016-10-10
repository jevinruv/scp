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
		
	<div id=container>
	<div id=side> <?php  include 'sidebar.php'; ?>  </div>
	   <div id=center>
	
		
		<h1>Fashion Republic: View All Customer Details</h1>

		<?php
			
			error_reporting(E_ALL & ~E_NOTICE); // error fix
				include 'connect.php'; //mysql connection


			$query = "SELECT CID, First_Name, Last_Name, DOB, NIC FROM customerdetails";
			$result = mysqli_query($connect,$query) or die(mysql_error());
			
			echo "<table border='1'>
				<tr>
				<th>CID</th>
				<th>First name</th>
				<th>Last Name</th>
				<th>DOB</th>
				<th>NIC</th>
				</tr>";
			while($row = mysqli_fetch_array($result)){
				echo "<tr>
					<td>" . $row['CID'] . "</td>
					<td>" . $row['First_Name'] . "</td>
					<td>" . $row['Last_Name'] . "</td>
					<td>" . $row['DOB'] . "</td>
					<td>" . $row['NIC'] . "</td>
					</tr>";
			
			}
			echo "</table>
			
			
			";
			
			mysqli_close($connect);
			
		?>


		<br/><br/><br/>
		<form action = "" method = "post">
			<fieldset>
			<legend><h3>Search specific customer: </h3></legend>
			CID:
			<input type = "text" name = "cid">
			
			<input type = "submit" value = "View Customer" name = 'View'>
			
			</fieldset>
		</form>
		
		<?php
			error_reporting(E_ALL & ~E_NOTICE); // error fix

			$search = $_POST['cid'];
		
					
			if(isset($_POST['View'])){
				
				$sql_view = "SELECT * FROM customerdetails WHERE CID='$search' ";
			
			
				$result = mysqli_query($connect,$sql_view) or die(mysql_error());

					echo "
					<table>
					<tr>
					<th>CID</th>
					<th>First name</th>
					<th>Last Name</th>
					<th>DOB</th>
					<th>Address</th>
					<th>Postal Code</th>
					<th>Gender</th>
					<th>Telephone</th>
					<th>Email Address</th>
					<th>NIC</th>
					</tr>";
					
				while($row = mysqli_fetch_array($result)){
					echo "<tr>
						<td>" . $row['CID'] . "</td>
						<td>" . $row['First_Name'] . "</td>
						<td>" . $row['Last_Name'] . "</td>
						<td>" . $row['DOB'] . "</td>
						<td>" . $row['Address'] . "</td>
						<td>" . $row['Postal_Code'] . "</td>
						<td>" . $row['Gender'] . "</td>
						<td>" . $row['Telephone'] . "</td>
						<td>" . $row['Email_Address'] . "</td>
						<td>" . $row['NIC'] . "</td>
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




			