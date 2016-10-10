<html>
	<head>
		<title>Fashion Republic</title>
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
	<center><h1>Fashion Republic - Raw Materials Reorder Inventory</h1></center>
	
		<form action ="" method = "post">
	
			
			WarehouseID 
			<select name=warehouseid> 
					<option value=wwp1 > Western Province  </option>
					<option value=wcp1 > Central Province </option>
					<option value=wep1 > Eastern Province </option>
					<option value=wnp1 > Nothern Province </option>
					<option value=wsp1 > Southern Province </option>
					<option value=wnwp1 > North Western Province </option>
					<option value=wncp1 > North Central Province </option>
					<option value=wup1 > Uva Province</option>
					<option value=wsbp1 > Sabaragamuwa Province</option>
					</select>
			<input type = "submit" name=enter value = "submit"><br/><br/>
	
	
		</form>
		
	
	
       

		
<?php 
	
	error_reporting(E_ALL & ~E_NOTICE); 

	$wid=$_POST['warehouseid'];
	
			include 'connect.php'; //mysql connection

	
	if (isset($_POST['enter'])){
	
		if($wid == wwp1){
			
			$val = wwp1;
		}
		else if($wid == wcp1){
			
			$val = wcp1;
		}
		else if($wid == wep1){
			
			$val = wep1;
		}
		else if($wid == wnp1){
			
			$val = wnp1;
		}
		else if($wid == wsp1){
			
			$val = wsp1;
		}
		else if($wid == wnwp1){
			
			$val = wnwp1;
		}
		else if($wid == wncp1){
			
			$val = wncp1;
		}
		else if($wid == wup1){
			
			$val = wup1;
		}
		else if($wid == wsbp1){
			
			$val = wsbp1;
		}
		
		$query="SELECT * FROM `$val` WHERE Quantity < 600  ";
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
				<td>".$row['ProductID']. "</td>
				<td>".$row['Name'] . "</td>
				<td>".$row['Quantity'] . "</td>
				
			</tr>";
		$x++;
	}

	echo "</table>";
	}
	
	?>
	
	<center> <a href=RM.php> Click here to re-order  </a> </center>
	
	
		</body>
	</html>