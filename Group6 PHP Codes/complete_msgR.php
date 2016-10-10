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
	<div id="fixedfooter">  <?php include 'footer.php'; ?> </div>
	
	<div id=side> <?php echo include 'sidebar.php'; ?>  </div>				
 <div class="container">

  <div id=center>

	<?php
	
		$province = $_POST['prov'];
		
		if ($province == "Western" || $province == "western")
		{
			$rid = 'RW'. rand(1000,5000);	
		}
		
		elseif ($province == "Eastern" || $province == "eastern")  
		{
			$rid = 'RE'. rand(1000,5000);	
		}
		
		elseif ($province == "North Central" || $province == "north central")  
		{
			$rid = 'RNC'. rand(1000,5000);	
		}
		
		elseif ($province == "Uva" || $province == "uva")  
		{
			$rid = 'RU'. rand(1000,5000);	
		}
		
		elseif ($province == "Southern" || $province == "southern")  
		{
			$rid = 'RS'. rand(1000,5000);	
		}
		
		elseif ($province == "Northern" || $province == "northern")  
		{
			$rid = 'RN'. rand(1000,5000);	
		}
		
		elseif ($province == "Central" || $province == "central")  
		{
			$rid = 'RC'. rand(1000,5000);	
		}
		
		elseif ($province == "Sabaragamuwa" || $province == "sabaragamuwa")  
		{
			$rid = 'RSG'. rand(1000,5000);	
		}
		
		elseif ($province == "North Western" || $province == "north western")  
		{
			$rid = 'RNW'. rand(1000,5000);	
		}
	
	
		echo "<center><h2>Welcome " . $_POST["retailname"] . "</h2>";
		echo "<h2 style = color:Maroon;><br/>Registration was successful!!</h2>";
		echo "<div>";
		//$rid = 'R'. rand(1000,5000);
		echo ("<h3>Your Retail shop ID is: $rid</h3></div></center>");
		echo "<br/><a href = 'retailshop_registration.php'>Click here to go back.</a>";
		
		
	
	//inserting to the database
			
		$retailname = $_POST['retailname'];
		$contact = $_POST['contact'];
		$address = $_POST['address'];
		//$province = $_POST['prov'];
		$city = $_POST['city'];
		$dateJ = $_POST['DateJ'];
		$shpE = $_POST['shpE'];
		

		include 'connect.php';
		
		$query = "INSERT INTO retailshopdetails2(Retailid, Name, Contact, Address, Province, City, Shopemail, DateJ) VALUES('$rid','$retailname','$contact','$address','$province','$city','$shpE','$dateJ')";
		mysqli_query($connect, $query);
		
		$newt= "CREATE TABLE `$rid`(PRIMARY key (itemid)) SELECT * FROM rc3810" ;				
		mysqli_query($connect, $newt);

	
	?>
			</div>
		</div>

</body>
</html>