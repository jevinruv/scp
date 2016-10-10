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
			
	<div id=side> <?php  include 'sidebar.php'; ?>  </div>
			
 <div class="container">

  <div id=center>
		<h1>Fashion Republic: Retail Shop Registration form</h1>
	<form action = "complete_msgR.php" method = "post">
		
		
	<fieldset>
	<legend><p><h3> Enter new details: </h3></p></legend>
		
		
	<br/> Name of Retail Shop:  <input type = "text" name = "retailname" required />
	
	<br/><br/> Contact Number: <input type = "text" name = "contact" required />
	
	<br/><br/> Address: <input type = "text" name = "address" required />
	
	
	<br/><br/> Province:
	<select name="prov">
	<option name="Central">---please select---</option>
	<option name="Central">Central</option>
	<option name="Eastern">Eastern</option>
	<option name="Northern">Northern</option>
	<option name="NC">North Central</option>
	<option name="NW">North Western</option>
	<option name="Sabaragamuwa">Sabaragamuwa</option>
	<option name="Southern">Southern</option>
	<option name="Uva">Uva</option>
    <option name="Western">Western</option>
	
  </select>
	
	
	<br/><br/> City: <input type = "text" name = "city" required />
	
	<br/><br/> Date Joined: <input type = "date" name = "DateJ" required />
	
	<br/><br/> Shop Email: <input type = "email" name = "shpE" required />
	
	<br/><br/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
	<input type = "submit" name = "Submit" value = "Submit"/>
	
		</fieldset>
		
		
	<?php
			include 'connect.php';

		//inserting to the database
		error_reporting(E_ALL & ~E_NOTICE);
		$retailname = $_POST['retailname'];
		$contact = $_POST['contact'];
		$address = $_POST['address'];
		$province = $_POST['prov'];
		$city = $_POST['city'];
		$dateJ = $_POST['DateJ'];
		$shpE = $_POST['shpE'];
		
		
		if(isset($_POST['Submit'])) 
		{
			$query = "INSERT INTO retailshopdetails2(Retailid, Name, Contact, Address, Province, City, Shopemail, DateJ) 
						VALUES('$rid','$retailname','$contact','$address','$province','$city','$shpE','$dateJ')";
			mysqli_query($connect, $query);
		}
	
	
	?>
		</div>
		</div>

			</body>
			</html>
			