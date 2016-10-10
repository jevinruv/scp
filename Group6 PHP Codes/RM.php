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
	<center>
	<h1>Fashion Republic - Raw Materials Reorder Form</h1>
	
	
	
		<form action ="" method = "post">
	
			Raw Material Type <input type = "text" name = "rawname" required><br/><br/>
			Product Code <input type = "text" name = "pcode" required><br/><br/>
			Quantity <input type = "number" name = "quantity" required><br/><br/>
			Supplier ID <input type = "text" name = "supid" required><br/><br/>
			Delivery Date <input type = "date" name = "deldate" required><br/><br/>
			WarehouseID <select name=warehouseid> 
					<option value=wwp1 > Western Province  </option>
					<option value=wcp1 > Central Province </option>
					<option value=wep1 > Eastern Province </option>
					<option value=wnp1 > Nothern Province </option>
					<option value=wsp1 > Southern Province </option>
					<option value=wnwp1 > North Western Province </option>
					<option value=wncp1 > North Central Province </option>
					<option value=wup1 > Uva Province</option>
					<option value=wsbp1 > Sabaragamuwa Province</option>
					required</select> <br/><br/>
			<input type = "submit" name=enter value = "submit"><br/><br/>
			<input type="reset">
	
	
		</form>
		
	</center>	
	
	</body>
		
<?php 
	
	error_reporting(E_ALL & ~E_NOTICE); 
	$rname=$_POST['rawname'];
	$prcode=$_POST['pcode'];
	$quant=$_POST['quantity'];
	$sid=$_POST['supid'];
	$ddate=$_POST['deldate'];
	$wid=$_POST['warehouseid'];
	
			include 'connect.php'; //mysql connection

	
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
	
	
	
	if (isset($_POST['enter'])){
	insertrawmaterials($connect,$rname,$prcode,$quant,$sid,$ddate,$wid,$server,$username,$password,$val);
	updaterawmaterials($connect,$prcode,$quant,$wid,$server,$username,$password,$val);
	
	}
		
	function insertrawmaterials($connect,$rname,$prcode,$quant,$sid,$ddate,$wid,$server,$username,$password,$val){
			
	$insertquery="INSERT INTO rawmaterialsrof (Name,Quantity,ProductID,SupplierID,DeliveryDate,WarehouseID) VALUES ('$rname','$quant','$prcode','$sid','$ddate','$wid')";
	mysqli_query($connect,$insertquery);
	header('location:RMS.php');
	
	}
	
	function updaterawmaterials($connect,$prcode,$quant,$wid,$server,$username,$password,$val){
		
	$updatequery="UPDATE $val SET Quantity= $quant WHERE ProductID ='$prcode'";
	mysqli_query($connect,$updatequery);
	}
	
	
	
?>
	
	
		

</html> 
		