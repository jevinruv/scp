
<html>
	<head>
	
	  		<link rel="stylesheet" type="text/css" href="css.css" />	
			<title> Discount  </title>

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




  <div id=right>
  
       	<?php 
			error_reporting(E_ALL & ~E_NOTICE); // error fix

			include 'connect.php'; //mysql connection
			
			$itemid = $_POST['itemida'];
					
			$quantity=	displayBill($connect);
			
			if(isset($_POST['Generate'])){				
				discount($connect,$itemid,$branchno,$quantity);
				header("Refresh:0"); // refresh the page when discount is added
			}
			
			
			
							
			function displayBill($connect){
				$bquery="SELECT * FROM itemcart";
				$bresult=mysqli_query($connect,$bquery);
				
				$tquery="SELECT SUM(discount) FROM itemcart";
				$add=mysqli_query($connect,$tquery) or die(mysql_error());
				$sum=mysqli_fetch_array($add);
				

		
				echo "<table>"; //start a html table 


					
				$c=0;
				while($brow=mysqli_fetch_array($bresult)){
					if($c==0){
						echo "<tr>
								<th> Item ID  </th>
								<th> Item Name  </th>
								<th> Unit Price </th>
								<th> Quantity </th>
								<th> Price </th>
								<th> Discount % </th>
							</tr>";
						
					}
					echo "<tr>
							<td>".$brow['itemid']. "</td>
							<td>".$brow['name'] . "</td>
							<td>" .  $brow['price']. "</td>
							<td>" ."x ".$quantity=$brow['quantity']. "</td>
							<td>" ."= ". $brow['subtotal']. "</td>
							<td>". $brow['discount']. "</td>

						</tr>";
					$billno=$brow['billno'];
					$c++; 
				}
				echo "</table>";
				echo  "<br>". "Your Grand Total is Rs: ". '<input type="text" readonly=true style="background-color:lightblue" value="'.$sum[0].'">'. "<br><br>";
		
			
				return $quantity;
			}

	

		
		
	 // functions 
		 
		
			
			function discount($connect,$itemid,$branchno,$quantity){
			
				$discounttab = "SELECT discount,price FROM $branchno WHERE itemid = '$itemid' ";
				$result2=mysqli_query($connect,$discounttab);
			
			
				while($row=mysqli_fetch_array($result2)){

					$discount=$row['discount'];
					$price=$row['price'];

					$newprice = $price - (($discount / 100) * $price);
					
					
					
					$newtotal = $quantity * $newprice;
					
					$newprices = "UPDATE itemcart SET discount='$newtotal' WHERE itemid='$itemid' ";

					mysqli_query($connect,$newprices);
				}
						
			}
			
			
			// thiss
			function discountvals($branchno,$connect){
				
				$dvalues = "SELECT itemid, discount FROM $branchno WHERE itemid IN (SELECT itemid FROM itemcart)";
				$discountv = mysqli_query($connect,$dvalues);
				
				
				echo "<table>"; //start a html table 
					
				$c=0;
				while($brow=mysqli_fetch_array($discountv)){
					if($c==0){
						echo "<tr><th> Item ID  </th><th> Discount </th></tr>";
						
					}
					echo "<tr>
							<td>".$brow['itemid']. "</td>
							<td>".$brow['discount'] . "</td>
						</tr>";
					$billno=$brow['billno'];
					$c++; 
				}
				echo "</div>";
				echo "</table>";
				
			}
		
		
		
		
		
		
		?>
  
  </div>
  
  
  
      <div id=left>
	  			<?php echo "Discount for " .  $_SESSION['cid'];?>

		<form method="POST" action="" > 
			<br> Item ID : <input type="text" name="itemida"> 
			<input name="Generate" type='submit'  value="Generate"/>  <br>
		
		</form>
		

	
	<form method='POST' action="checkout.php" >
			<input type=submit name=cout  value="Check Out" />   		
		</form>

		      
      <?php  discountvals($branchno,$connect);   ?> 
	  
	  
    </div>

  </div>


  
  
  
  
  
  
  
  
  
</body>



</html>
