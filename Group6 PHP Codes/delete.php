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
				
		
		    <div id="fixedfooter">  <?php //include 'footer.php'; ?> </div>
			
			<div class="container">
			<div id=side> <?php  include 'sidebar.php'; ?>  </div>

				<div id=center>
		
	<fieldset>
	<legend><p><h1> Retail Shop Unregistration form</h1></p></legend>
		
			<form action="" method=post>

	<br/> Retail Shop ID:  <input type = "text" name = "rid" required />
	
	
	<br/><br/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type = "submit" name =unreg value = "Unregister"/>
	</form>
		
	</fieldset>
	

	<?php
			include 'connect.php';

		if(isset($_POST['unreg'])){
			
		session_start();
		error_reporting(E_ALL & ~E_NOTICE);
		
		$search = $_POST["rid"];
		$SESSION["rid"] = $search;
		
		$sql = "DELETE FROM retailshopdetails2 WHERE RetailID = '$search'";
		mysqli_query($connect, $sql);
		header("location:unreg_redirect.php");
		mysqli_close($connect);
			
			
	}
		
		
		
		
	?>
		

</body>
</html>
