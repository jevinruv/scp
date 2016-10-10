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
	
	
		<h1>Fashion Republic: View Customer-Employee Details</h1>
		
		

		
		<?php
			error_reporting(E_ALL & ~E_NOTICE); // error fix
			include 'connect.php'; //mysql connection

			$search = $_POST['empid'];
			
			$query = "Select employees.EmpID, employees.fName, employees.lName, employees.NIC
					  From customerdetails Inner Join employees On customerdetails.NIC =employees.NIC";
			
			$result = mysqli_query($connect,$query) or die(mysql_error());
			
				echo "<br/><table border='1'>
				<tr>
				<th>Employee ID</th>
				<th>First name</th>
				<th>Last Name</th>
				<th>NIC</th>
				</tr>";
			
			while($row = mysqli_fetch_array($result)){
				echo "<tr>

					<td>" . $row['EmpID'] . "</td>
					<td>" . $row['fName'] . "</td>
					<td>" . $row['lName'] . "</td>
					<td>" . $row['NIC'] . "</td>
					</tr>";
			
			}
			echo "</table>";
			

			mysqli_close($connect);
		
		?>
			</div></div>
		<br/><br/><a href = 'menu.php'>Click here to go back to menu.</a>
	</body>

</html>