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

		   <div class="container">
		   <div id=side> <?php  include 'sidebar.php'; ?>  </div>
		<div id=center>
	   
		<h1>Fashion Republic: Customer Registration</h1>
		  
		<form method = "post" action = "">
			<fieldset>
			
			<legend><h3>Personal information:</h3></legend>
		
			<br/>First Name:
			<input type = "text" name = "fname" required>
 
			<br/><br/>Last Name:
			<input type = "text" name = "lname" required>
			
		
			<br/><br/>Date of Birth:
			<input type = "text" name = "dob" required> (yyyy-mm-dd)
			
			
			<br/><br/>Address:
			<input type = "text" name = "address" required>
			
						
			<br/><br/>Postal Code:
			<input type = "text" name = "postal">
			
	
			<br/><br/>Gender:
			<input type = "radio" name = "gender" value = "female" required>Female
			<input type = "radio" name = "gender" value = "male" required>Male
			
	
			<br/><br/>Telephone:
			<input type = "tel" name = "telephone" required>
			
	
			<br/><br/>Email address:
			<input type = "email" name = "email" required>
			
	
			<br/><br/>National Identity<br/> Card No.:
			<input text = "text" name = "NIC" required>	
											
			<br/><br/><br/> <input type = "submit" name = "Register" value = "Register" >
			<input type = "reset">
			
			
			<br/><br/><a href = 'menu.php'>Click here to go back to menu.</a>
			</fieldset>
			<br/><br/><br/>
		</form>


		
		<?php
			error_reporting(E_ALL & ~E_NOTICE); // error fix			
							include 'connect.php';
	
			if(isset($_POST['Register'])){
				
				$First_Name = $_POST["fname"];
				$Last_Name = $_POST["lname"];
				$DOB = $_POST["dob"];
				$Address = $_POST["address"];
				$Postal_Code = $_POST["postal"];
				$Gender = $_POST["gender"];
				$Telephone = $_POST["telephone"];
				$Email_Address = $_POST["email"];
				$NIC = $_POST["NIC"];
				$CID = C. rand(1000,5000);

				
				$sql = "INSERT INTO customerdetails(CID, First_Name, Last_Name, DOB, 
						Address, Postal_Code, Gender, Telephone, Email_Address, NIC) 
						VALUES ('$CID','$First_Name','$Last_Name','$DOB','$Address',
						'$Postal_Code','$Gender','$Telephone', '$Email_Address', '$NIC')";
				
				
				
				if(mysqli_query($connect, $sql)){
					header("location:complete_registration_msg.php");

				} 
				
 				else{
					echo "not inserted";
				}  
		
				ob_end_flush();
				mysqli_close($connect);
				
				
			}
		?>
			
		
		  </div>
		  </div>


	</body>
	
</html>