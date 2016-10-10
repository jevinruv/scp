<?php 
ob_start();
?>

<html>

	<head>
		
		<title> Fashion Republic </title>
				<link rel="stylesheet" type="text/css" href="css.css" />		

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
	
		   <div id=side> <?php echo include 'sidebar.php'; ?>  </div>

		   <div class="container">
		<div id=center>
	   
		<h1>Fashion Republic: Employee Registration</h1>
		  
		<form method = "post" action = "">
			<fieldset>
			
			<legend><h3>Personal information:</h3></legend>
		
			<br/>First Name:
			<input type = "text" name = "fname" required>
 
			<br/><br/>Last Name:
			<input type = "text" name = "lname" required>
			
			<br/><br/>National Identity<br/> Card No.:
			<input text = "text" name = "NIC" required>
			
			<br/><br/>Position:
			<select name = "position">
				<option value = "R_manager">Retail Manager</option>
				<option value = "W_manager">Warehouse Manager</option>
				<option value = "R_salesperson">Retail Salesperson</option>
				<option value = "W_worker">Warehouse Worker</option>
			</select>
			
			<br/><br/>City:
			<input text = "text" name = "city" required>
			
			
			<br/><br/>Province:
			<select name = "province">
				<option value = "central">Central</option>
				<option value = "eastern">Eastern</option>
				<option value = "northCentral">North Central</option>
				<option value = "Northern">Northern</option>
				<option value = "northWest">North Western</option>
				<option value = "sabaragamuwa">Sabaragamuwa</option>
				<option value = "southern">Southern</option>
				<option value = "uva">Uva</option>
				<option value = "western">Western</option>
			</select>
			
			<br/><br/>Gender:
			<input type = "radio" name = "gender" value = "female" required>Female
			<input type = "radio" name = "gender" value = "male" required>Male
			
			<br/><br/>Date of Birth:
			<input type = "text" name = "dob" required> (yyyy-mm-dd)
						
			<br/><br/>Retail Shop ID:
			<input type = "text" name = "retailshopID">
			
			<br/><br/>Warehouse ID:
			<input type = "text" name = "warehouseID">
													
			<br/><br/><br/> <input type = "submit" name = "Register" value = "Register" >
			<input type = "reset">
			
			
			<br/><br/><a href = 'menu.php'>Click here to go back to menu.</a>
			</fieldset>
			
		</form>

		
		
		<?php
			error_reporting(E_ALL & ~E_NOTICE); // error fix	

							include 'connect.php';
			
			if(isset($_POST['Register'])){

				$fName = $_POST["fname"];
				$lName = $_POST["lname"];
				$NIC = $_POST["NIC"];
				$Position = $_POST["position"];
				$City = $_POST["city"];
				$Province = $_POST["province"];
				$Gender = $_POST["gender"];
				$DOB = $_POST["dob"];
				$retailshopID = $_POST["retailshopID"];
				$warehouseID = $_POST["warehouseID"];
				
				if($_POST['position'] == 'R_manager' || 'W_manager'){
					$EmpID = EM. rand(1000,5000);
				}
				
				else if($_POST['position'] == 'R_salesperson'){
					$EmpID = ES. rand(1000,5000);
				}
				
				else if($_POST['position'] == 'W_worker'){
					$EmpID = EW. rand(1000,5000);
				}

				else{
					echo "not working";
				}
				
				
				$sql = "INSERT INTO employees(EmpID, fName, lName, NIC, Position, City, Province, 
						Gender, DOB, retailshopID, warehouseID) 
						VALUES ('$EmpID','$fName','$lName', '$NIC', '$Position', '$City', '$Province', '$Gender',
						'$DOB', '$retailshopID', '$warehouseID')";								
			mysqli_query($connect, $sql);
			
			$sqllogin = "INSERT INTO login(EmpID, Position, City, Province, retailshopID,Username,Password) 
						VALUES ('$EmpID','$Position', '$City','$Province','$retailshopID','$EmpID','$EmpID')";
						

			mysqli_query($connect, $sqllogin);
			
			header("location:complete_emp_registration_msg.php");
			ob_end_flush();
				
	

				mysqli_close($connect);
				
				
			}
		?>
		
		  </div>
		  </div>


		

	</body>
	
</html>