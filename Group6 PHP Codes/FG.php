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
	
	<center>
	<h1>Fashion Republic - Finished Good Reorder Form</h1>
	
	
	
		<form action ="" method = "post">
	
			Finish Good Type <input type = "text" name = "name" required><br/><br/>
			Product Code <input type = "text" name = "pcode" required><br/><br/>
			Quantity <input type = "number" name = "quantity" required><br/><br/>
			Manager ID <input type = "text" name = "mnid" required><br/><br/>
			Delivery Date <input type = "date" name = "deldate" required><br/><br/>
			Retail ID <select name=rid> 
					<option value=RW3485 > Western Province  </option>
					<option value=RC3810 > Central Province </option>
					<option value=fep1 > Eastern Province </option>
					<option value=fnp1 > Nothern Province </option>
					<option value=RS2422 > Southern Province </option>
					<option value=rnw3881 > North Western Province </option>
					<option value=fncp1 > North Central Province </option>
					<option value=fup1 > Uva Province</option>
					<option value=fsbp1 > Sabaragamuwa Province</option>
					required</select> <br/><br/>
			<input type = "submit" name=enter value = "submit"><br/><br/>
			<input type="reset">
	
	
		</form>
		
	</center>
<?php
	
	error_reporting(E_ALL & ~E_NOTICE); 
	$fgname=$_POST['name'];
	$prcode=$_POST['pcode'];
	$quant=$_POST['quantity'];
	$mid=$_POST['mnid'];
	$ddate=$_POST['deldate'];
	$rid=$_POST['rid'];
	
			include 'connect.php';

	
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
	
	if (isset($_POST['enter'])){
 	insertfinishedgoods($connect,$fgname,$prcode,$quant,$mid,$ddate,$rid,$server,$username,$password,$val);
	updatefinishedgoods($connect,$prcode,$quant,$rid,$server,$username,$password,$val);
	
	}
		
	function insertfinishedgoods($connect,$fgname,$prcode,$quant,$mid,$ddate,$rid,$server,$username,$password,$val){
		
	$insertquery="INSERT INTO finishedgoodsrof (Name,Quantity,ProductID,ManagerID,DeliveryDate,WarehouseID)
	VALUES ('$fgname','$quant','$prcode','$mid','$ddate','$rid')";
	mysqli_query($connect,$insertquery);
	
	}
	
	function updatefinishedgoods($connect,$prcode,$quant,$rid,$server,$username,$password,$val){
		
	$updatequery="UPDATE $val SET quantity= '$quant' WHERE itemid ='$prcode'";
	mysqli_query($connect,$updatequery);
	header('location:FGS.php');

	} 
	
					ob_end_flush();

	
?>

			</div>
					</div>


		
</body>
</html> 
		