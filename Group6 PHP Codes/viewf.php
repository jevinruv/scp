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
				<img align=left src="images/frlogo.png" ridth=150 height =80 >
				</div>
				
				<div id=htext> 
				<h1 align=center> Fashion Republic </h1> 
  				</div>
				
				
		</div>
				
		
		    <div id="fixedfooter">  <?php include 'footer.php'; ?> </div>
			
			<div class="container">
			<div id=side> <?php  include 'sidebar.php'; ?>  </div>

  <div id=center>
	
		<form action ="" method = "post">
	
			
			WarehouseID <select name=rid> 
					<option value=RW3485 > Western Province  </option>
					<option value=RC3810 > Central Province </option>
					<option value=fep1 > Eastern Province </option>
					<option value=fnp1 > Nothern Province </option>
					<option value=RS2422 > Southern Province </option>
					<option value=rnw3881 > North Western Province </option>
					<option value=fncp1 > North Central Province </option>
					<option value=fup1 > Uva Province</option>
					<option value=fsbp1 > Sabaragamuwa Province</option>
					</select> 
			<input type = "submit" name=enter value = "submit"><br/><br/>
			
	
	
		</form>
		
	
	
       

		
<?php 
	
	error_reporting(E_ALL & ~E_NOTICE); 

	$rid=$_POST['rid'];
			include 'connect.php';

	
	if (isset($_POST['enter'])){
	
		if($rid == RW3485){
			
			$val = RW3485;
		}
		else if($rid == RC3810){
			
			$val = RC3810;
		}
		else if($rid == fep1){
			
			$val = fep1;
		}
		else if($rid == fnp1){
			
			$val = fnp1;
		}
		else if($rid == RS2422){
			
			$val = RS2422;
		}
		else if($rid == rnw3881){
			
			$val = rnw3881;
		}
		else if($rid == fncp1){
			
			$val = fncp1;
		}
		else if($rid == fup1){
			
			$val = fup1;
		}
		else if($rid == fsbp1){
			
			$val = fsbp1;
		}
		
		$query="SELECT * FROM `$val` WHERE quantity < 300  ";
		$view = mysqli_query($connect,$query);
		
		
		

		
	
	echo "<table>"; 
	$x=0;
	
	while($row = mysqli_fetch_array($view)){
		
		
		
		
		if($x==0){
			echo "<tr>
					<th> ProductID </th>
					<th> Name </th>
					<th> Quantity </th>
					
				</tr>";
		}
		echo "<tr>
				<td>".$row['itemid']. "</td>
				<td>".$row['name'] . "</td>
				<td>".$row['quantity'] . "</td>
				
			</tr>";
		$x++;
	}

	echo "</table>";
	}
	ob_end_flush();
	?>
	
	<center> <a href=FG.php> Click here to re-order  </a> </center>
	
	
		</body>
	</html>