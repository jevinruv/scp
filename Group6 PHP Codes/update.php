<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css.css" />
		<title>Retail Shop Registration form</title>
		
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
<div class="container">
<div id=side> <?php  include 'sidebar.php'; ?>  </div>
<div id=center>

	
		<h1>Fashion Republic: Updating Retailshop Details</h1>
		

		<form action="" method ="post">
			<fieldset>
			<legend><h3>Enter New Retail Shop Details: </h3></legend>
			<br>Retailer ID:<br/>
			<input type=text name = "rid">	

			<br>New Name: <br><input type=text name =newName>	
			<input type=submit value =Update name=update_Name>
			
			<br>New Contact Number:<br><input type=text name =newContact>	
			<input type=submit value =Update name=update_Number>	
						
			<br>New Address:<br><input type=text name =newAddress>	
			<input type=submit value =Update name=update_Address>	
			
			<br>New Province:<br><input type=text name =newProvince>
			<input type=submit value =Update name=update_Province>
			
			<br>New City:<br><input type=text name =newCity>
			<input type=submit value =Update name=update_City>
			
			<br>New Email:<br><input type=text name =newEmail>
			<input type=submit value =Update name=update_Email>
			<br><br><br>
			</fieldset>
		<form>
		<br/>
		<h1>Retail Shop Information</h1>
			
		<?php		
			error_reporting(E_ALL & ~E_NOTICE); // error fix
			
			include 'connect.php';
			
			//viewing all
			
		 	$sql = "SELECT * FROM retailshopdetails2";
			$result = mysqli_query ($connect, $sql);
		
				echo "<table>
						<tr>
							<th>RID</th>
							<th>Retail Shop Name</th>
							<th>Province Code</th>
							<th>City</th>
						</tr>";
						
			
			while($row = mysqli_fetch_array($result)){
			echo 	
						"<tr>
							<td>" . $row['Retailid'] . "</td>
							<td>" . $row['Name'] . "</td>
							<td>" . $row['Province'] . "</td>
							<td>" . $row['City'] . "</td>
						</tr>";
			
			}
			echo "</table>"; 
		
			if(isset($_POST['Update'])){
				
			$rid = $_POST['rid'];
			
			$nname = $_POST['newName'];
			$ncontact = $_POST['newContact'];
			$naddress = $_POST['newAddress'];
			$ncity = $_POST['newCity'];
			$nemail = $_POST['newEmail'];

			if($nname != ""){
				$sql_update = "UPDATE retailshopdetails2 SET Name = '$nname' WHERE Retailid = '$rid'";
				mysqli_query($connect, $sql_update);
				header('Refresh:0');
				
			}
			
			if($ncontact != ""){
				$sql_update = "UPDATE retailshopdetails2 SET Name = '$ncontact' WHERE Retailid = '$rid'";
				mysqli_query($connect, $sql_update);
				header('Refresh:0');
				
			}
			
			if($naddress != ""){
				$sql_update = "UPDATE retailshopdetails2 SET Name = '$naddress' WHERE Retailid = '$rid'";
				mysqli_query($connect, $sql_update);
				header('Refresh:0');
				
			}
			
			if($ncity != ""){
				$sql_update = "UPDATE retailshopdetails2 SET Name = '$ncity' WHERE Retailid = '$rid'";
				mysqli_query($connect, $sql_update);
				header('Refresh:0');
				
			}
			
			if($nemail != ""){
				$sql_update = "UPDATE retailshopdetails2 SET Name = '$nemail' WHERE Retailid = '$rid'";
				mysqli_query($connect, $sql_update);
				header('Refresh:0');
				
			}
					
		}

			mysqli_close($connect);
			
			
			?>

			<br/><br/><a href = 'menu.php'> <center>Click here to go back to menu.</center></a>
				
			</div>
			</div>
	</body>
</html>
