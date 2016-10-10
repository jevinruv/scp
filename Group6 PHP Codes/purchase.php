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



		

		<?php   
			error_reporting(E_ALL & ~E_NOTICE); // error fix
			include 'connect.php'; //mysql connection
			 

								
			$itemid=$_POST['itemid'];
			$quantity= $_POST['quantity'];
			

			
			if(isset($_POST['Calculate'])){
			
				$status=itemStatus($itemid,$quantity,$connect,$branchno); //catch return
				$check=itemCheck($itemid,$connect,$branchno); //catch return 				
				
				 if(!$check==$itemid){
					echo "<font color=red>" . "Invalid Item ID" ."</font>";
				} 
				
				else{
					if($status>=$quantity){
						//echo " Stock Available ". "<br>";
						list($sum,$tot,$billno)=calculate($connect,$itemid,$quantity,$date,$branchno); // catch 2 returns to an array list
					}
					
					else{
						echo " Only " . $status . " remaining" ;			
					}				
				}
			
			}

			if(isset($_POST['Remove'])){
				
				deleteItem($connect,$itemid);
			}
			
			function deleteItem($connect,$itemid){
				
				$queryd=" DELETE FROM itemcart WHERE itemid='$itemid' ";
				mysqli_query($connect,$queryd);
			}
				
			function calculate($connect,$itemid,$quantity,$date,$branchno){
								
			//function billno($connect){
							
				$querydb="SELECT billno FROM sales ORDER BY billno DESC LIMIT 1";
				$billn=mysqli_query($connect,$querydb);

				$row=mysqli_fetch_array($billn);
		
				$billno=$row['billno']; 
			
				$billno++;
				//echo "Bill number = " .$billno;
				
				
			//}
				
				$query2="SELECT * FROM $branchno WHERE itemid='$itemid' ";
				$result2=mysqli_query($connect,$query2) or die(mysql_error());
			
								
				while($row=mysqli_fetch_array($result2)){
					
					$iname=$row['name'];
					$iprice=$row['price'];
					$id=$row['itemid'];
					
					$tot = $quantity * $iprice;			

					$sql = "INSERT INTO itemcart (itemid,name,price,quantity,subtotal,date,billno)
							VALUES ('$id','$iname', '$iprice','$quantity','$tot','$date','$billno') ";
					mysqli_query($connect,$sql);

								
					//calculate total
					$tquery="SELECT SUM(subtotal) FROM itemcart";
					$add=mysqli_query($connect,$tquery) or die(mysql_error());
					$sum=mysqli_fetch_array($add);
				
				
				}

				
			
				return array($sum,$tot,$billno);
				
			}
			
			
			function itemStatus($itemid,$quantity,$connect,$branchno){
	
				$squery="SELECT * FROM $branchno WHERE itemid='$itemid' ";
				$result=mysqli_query($connect,$squery);
	
				$row=mysqli_fetch_array($result);
		
				$status=$row['quantity']; //check entered items quantity
	
			return $status;
		}
		
		
			function itemCheck($itemid,$connect,$branchno){
	
				$squery="SELECT * FROM $branchno WHERE itemid='$itemid' ";
				$result=mysqli_query($connect,$squery);
	
				$row=mysqli_fetch_array($result);
		
				$check=$row['itemid']; //check for item id
	
				return $check;
			}
				
	   ?>
	   
	   <div class="container">
		<div id=left>
	   
	   
	   <?php  
			if(!$check==$itemid){
					echo "<font color=red>" . "Invalid Item ID" ."</font>";
			}
			
			
			else{
					echo "Bill number = " .$billno.  "<br><br>";

					if($status>=$quantity){
						echo " Stock Available ". "<br>";
					}
					
					else{
						echo " Only " . $status . " remaining" ;			
					}				
				}
	   
?>	   
	   
	   
	   
	   
	   	<form method='POST' action="" >
			Item ID: <input type=text name="itemid" required >
			Quantity : <input type=number name='quantity' min="1" value="1">   <?php echo " Price is  ". $tot; ?>  <br> <br>
			<input name="Calculate" type='submit' value="Calculate" /> <br> <br>
	   
			<input name="Remove" type='submit' value="Remove" /> <br> <br>
		</form>
		
		 
		 <form method='POST' action="">
		 <fieldset>
		 <legend><h3>Enter: </h3></legend>
			Customer ID <input type=text name=cid required>
			<input name=cidsubmit type=submit value="Check" />
			
			<a href=customer_registration.php> Add Customer</a>

		</fieldset>
		</form>
			
			<?php 
				if (isset($_POST['cidsubmit'])){
				$cid = $_POST['cid'];
				
					$cidquery= "SELECT CID FROM `customerdetails` WHERE CID='$cid' ";
					$result=mysqli_query($connect,$cidquery);
	
					$row=mysqli_fetch_array($result);
					

					if ($row['CID'] == $cid){
						$_SESSION['cid'] = $cid;

						header('location:discount.php');
					
					}
					
					else {
						echo "<font color=red>" . "Invalid CID" ."</font>";					} 
				}
				
			?>
		 
		 
		 
		 

		<form method='POST' action="" >
			<input type=submit name=cout  value="Check Out" />   		
		</form>
		
		

  </div>
	   
   
  <div id=right>
			<?php  	//displayBill();   
			if(isset($_POST['cout'])){
				$queryc= "SELECT billno FROM itemcart";
				$bno=mysqli_query($connect,$queryc);
				$row=mysqli_fetch_array($bno);
				if ($row['billno']){
					header('location:checkout.php');
				}
			}
			displaybill($connect,$sum);
			
			function displaybill($connect,$sum){
				$bquery="SELECT * FROM itemcart";
				$bresult=mysqli_query($connect,$bquery);
				
				
				echo "<table >"; //start a html table 

				$c=0;
				while($brow=mysqli_fetch_array($bresult)){
					if($c==0){
						echo "<tr>
								<th> Item ID  </th>
								<th> Item Name  </th>
								<th> Unit Price </th>
								<th> Quantity </th>
								<th> Price </th>
							</tr>";
						
					}
					echo "<tr>
							<td>".$brow['itemid']. "</td>
							<td>".$brow['name'] . "</td>
							<td>" .  $brow['price']. "</td>
							<td>" ."x ". $brow['quantity']. "</td>
							<td>" ."= ". $brow['subtotal']. "</td>

						</tr>";
					$c++;
				}
				echo "</div>";
				echo "</table>";
				echo  "<br>". "Your Grand Total is Rs: ". '<input type="text" readonly=true style="background-color:lightblue" value="'.$sum[0].'">'. "<br>";

				

			}
			
			
			

			
		
			
			mysqli_close($connect);
	   ?>   
  </div>
	   
	    
	   
	   
	   
	   
	   
	   
	   </div>
	   
	

		
	</body>
</html>

