<?php 
ob_start();
?>
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

	
		<h1>Fashion Republic: Updating Customer Details</h1>
		
		<form action="" method ="post">
			<fieldset>
			<legend><h3>Enter New Customer Details: </h3></legend>
			<br>CID:
			<input type=text name = "cid">
			
			<br><br>New Address:
			<input type=text name = "newaddress">
			<input type=submit value = "Update" name = "UpdateAdd">
			
			<br><br>New Postal Code:
			<input type=text name = "newpostal">
			<input type=submit value = "Update" name = "UpdatePost">
			
			<br><br>New Telephone:
			<input type=text name = "newtelephone">
			<input type=submit value = "Update" name = "UpdateTel">
			
			<br><br>New Email Address:
			<input type=text name = "newemail">
			<input type=submit value = "Update" name = "UpdateEmail">
		
			</fieldset>
		<form>
		
		
		<?php		
			error_reporting(E_ALL & ~E_NOTICE); // error fix
						include 'connect.php'; //mysql connection

			$sql = "SELECT * FROM customerdetails";
			$result = mysqli_query($connect, $sql);
		
				echo "<br/><table border='1'>
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
			
			$CID = $_POST["cid"];
			$newAddress = $_POST["newaddress"];
			$newPostal= $_POST["newpostal"];
			$newTelephone = $_POST["newtelephone"];
			$newEmail = $_POST["newemail"];
			
			if($newAddress != ""){
				$sql_update = "UPDATE customerdetails SET Address = '$newAddress' WHERE CID = '$CID'";
				mysqli_query($connect, $sql_update);
				header('Refresh:0');
			}
			
			else if($newPostal != ""){
				$sql_update = "UPDATE customerdetails SET Postal_Code = '$newPostal' WHERE CID = '$CID'";
				mysqli_query($connect, $sql_update);
				header('Refresh:0');
			}
			
			else if($newTelephone != ""){
				$sql_update = "UPDATE customerdetails SET Telephone = '$newTelephone' WHERE CID = '$CID'";
				mysqli_query($connect, $sql_update);
				header('Refresh:0');
			}
			
			else if($newEmail != ""){
				$sql_update = "UPDATE customerdetails SET Email_Address = '$newEmail' WHERE CID = '$CID'";
				mysqli_query($connect, $sql_update);
				header('Refresh:0');
			}
					ob_end_flush();

			mysqli_close($connect);

		
		?>
		
		<br/><br/><a href = 'menu.php'>Click here to go back to menu.</a>
		
		
		</div>
		</div>
	</body>
</html>