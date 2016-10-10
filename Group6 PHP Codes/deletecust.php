<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css.css" />
		<title> Fashion Republic </title>
	</head>

	<!--<style>
		body{background-color:beige;}
	
		h1 {color:MidnightBlue;}
	
		div {
			border: 1px solid black;
			margin: auto;
			background-color: DarkGray;
		}
	</style> -->
	
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
	
		<h1>Fashion Republic: Customer Unregistration</h1>
		
		<form action="" method = "post">
			<fieldset>
			<legend><h3>Enter the CID to continue with unregistering the customer:</h3></legend>
			<br/>
				CID:
				<input type=text name = "cid">
				<br/><br/><input type=submit name= "Unregister" value = "Unregister">
			
				<br/><br/><a href = 'menu.php'>Click here to go back to menu.</a>
					
					
			</fieldset>
		</form>
		
		</div>
	</div>
		
		
		<?php
			error_reporting(E_ALL & ~E_NOTICE); // error fix
			include 'connect.php'; //mysql connection

			$search = $_POST['cid'];
			
			if(isset($_POST['Unregister'])){
				
				$sql = "DELETE FROM customerdetails WHERE CID='$search'";
			
				if(mysqli_query($connect,$sql)){
					header("location:unregister_complete_msg.php");
				}
			
				mysqli_close($connect);
			}
			/* echo "<div>
					Customer was successfully uregistered:
					<br/><a href = 'customer_registration.php'>Click here to go back.</a>
				</div>"; */
			
		?>
		
		
		
	</body>
</html>