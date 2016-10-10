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
		<div id=side> <?php  //include 'sidebar.php'; ?>  </div>
		<div id=center>
	
		<h1>Fashion Republic: Membership Payment</h1>
		
		<form action="" method = "post">
		
			<fieldset>
			
			<legend><h3>Membership Payment</h3></legend>
			
				<br/>Customer ID:
				<input type = "text" name = "cid">

				
				<br/><br/>Select payment type:
				<select name = "payment">
					<option value = "Credit">Credit Card</option>
					<option value = "Debit">Debit Card</option>
					<option value = "Cash">Cash</option>
					</select>
					
								
				<br/><br/>Select payment month:  
					<select name = "paymentdue" >
						<option value = "January">January</option>
						<option value = "February">February</option>
						<option value = "March">March</option>
						<option value = "April">April</option>
						<option value = "May">May</option>
						<option value = "June">June</option>
						<option value = "July">July</option>
						<option value = "August">August</option>
						<option value = "September">September</option>
						<option value = "October">October</option>
						<option value = "November">November</option>
						<option value = "December">December</option>
					</select>

				
				<br/><br/> <input type = "submit" name = "Pay" value = "Continue Payment" />
				
				<input type = "reset">
				
			</fieldset>
			
		</form>
		
		
		
		
		<?php
			error_reporting(E_ALL & ~E_NOTICE); // error fix			
			$server = "localhost";
			$username = "root";
			$password = "";
			
			$connect = mysqli_connect($server, $username, $password, "dbfashionrepublic");
			
			if(isset($_POST['Pay'])){
			
				$CID = $_POST['cid'];
				$Payment_Method = $_POST['payment'];
				$Payment_Due = $_POST['paymentdue'];
				
				$sql = "INSERT INTO customerpayments(CID, Payment_Method, Payment_Due) 
				VALUES ('$CID', '$Payment_Method', '$Payment_Due')";
				
				if(mysqli_query($connect, $sql)){
					header("location:complete_annual_pay_msg.php");
				}

				mysqli_close($connect);
				
			}
		
		?>
		
		<br/><br/><a href = 'menu.php'>Click here to go back to menu.</a>
		
		
		</div>
		</div>
		
		
	 </body>

</html>