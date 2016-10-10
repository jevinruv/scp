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

<?php
error_reporting(E_ALL & ~E_NOTICE);
 $name = $SESSION["rid"];
		echo "<h2 style = color:Maroon;><br/>Unregistered successfully!!</h2>";
		echo "<div>";
		
		echo "<br/><a href = 'retailshop_registration.php'>Click here to go back.</a>";
		
?>
			</div>
		</div>

</body>
</html>