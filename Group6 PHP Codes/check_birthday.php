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
	<h1>Fashion Republic: Check Monthly Birthdays</h1>
		<form action="" method = "post">
			<fieldset>
			<legend><h3>Enter Month:</h3></legend>
			<br/>Month:
			<select name = "birthdaymonth">
				<option value = "01">01</option>
				<option value = "02">02</option>
				<option value = "03">03</option>
				<option value = "04">04</option>
				<option value = "05">05</option>
				<option value = "06">06</option>
				<option value = "07">07</option>
				<option value = "08">08</option>
				<option value = "09">09</option>
				<option value = "10">10</option>
				<option value = "11">11</option>
				<option value = "12">12</option>
			</select>
			<br/><br/><br/>

			<br/>
				<?php

					echo "<table border='4' class='stats' cellspacing='0'>
						<tr>
						<th>Month</th>
						<th>Number</th>
						</tr>";

					echo "<tr>";
					echo "<td>" . "January" . "</td>";
					echo "<td>" . "01" . "</td>";
					echo "</tr>";

					echo "<tr>";
					echo "<td>" . "February" . "</td>";
					echo "<td>" . "02" . "</td>";
					echo "</tr>";
					
					echo "<tr>";
					echo "<td>" . "March" . "</td>";
					echo "<td>" . "03" . "</td>";
					echo "</tr>";

					echo "<tr>";
					echo "<td>" . "April" . "</td>";
					echo "<td>" . "04" . "</td>";
					echo "</tr>";
					
					echo "<tr>";
					echo "<td>" . "May" . "</td>";
					echo "<td>" . "05" . "</td>";
					echo "</tr>";
					
					echo "<tr>";
					echo "<td>" . "June" . "</td>";
					echo "<td>" . "06" . "</td>";
					echo "</tr>";
					
					echo "<tr>";
					echo "<td>" . "July" . "</td>";
					echo "<td>" . "07" . "</td>";
					echo "</tr>";
					
					echo "<tr>";
					echo "<td>" . "August" . "</td>";
					echo "<td>" . "08" . "</td>";
					echo "</tr>";
					
					echo "<tr>";
					echo "<td>" . "September" . "</td>";
					echo "<td>" . "09" . "</td>";
					echo "</tr>";
					
					echo "<tr>";
					echo "<td>" . "October" . "</td>";
					echo "<td>" . "10" . "</td>";
					echo "</tr>";
					
					echo "<tr>";
					echo "<td>" . "November" . "</td>";
					echo "<td>" . "11" . "</td>";
					echo "</tr>";
					
					echo "<tr>";
					echo "<td>" . "December" . "</td>";
					echo "<td>" . "12" . "</td>";
					echo "</tr>";

					echo "</table>";

				?>
			<br/>
			<br/><br/>

			<input type = "submit" name = "Search" value = "Search">
			</fieldset>
		</form>
		
		
		
		<?php
				error_reporting(E_ALL & ~E_NOTICE); // error fix
				$server = "localhost";
				$username = "root";
				$password = "";
				$dname = "dbfashionrepublic";
				$search = $_POST['birthdaymonth'];
				$connect = mysqli_connect($server,$username,$password,"dbfashionrepublic");
				
				
				$query = "SELECT CID, First_Name, Last_Name, DOB, Address, Postal_Code, Gender, 
				Telephone, Email_Address, NIC FROM customerdetails WHERE DOB LIKE'%-$search-%'";
				
				
				$result = mysqli_query($connect,$query) or die(mysql_error());
			
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

			mysqli_close($connect);
		
		?>
		
		<br/><br/><a href = 'menupageJ.php'>Click here to go back to menu.</a>
		
		
		  </div>

		    </div>
		
	</body>

</html>	
	
	