<html>
	<head> 
		<title> Invoice </title>

		<style>
				table {
					border-collapse: collapse;
					width: 44%;
				}
				th, td {
					text-align: left;
					padding: 6px;
				}		
				tr:nth-child(even){background-color: #00FFFF}
		</style> 
		
	</head>
	
	<body> 
		
		<center> <h2><font color=blue > Fashion Republic </font> </h2>
		<h3> Invoice </h3> 


<?php  	//displayBill();  
				include 'connect.php'; //mysql connection
				include 'utils.php'; 

			$billno=displayBill($connect);
			echo "Bill No - ".$billno;
			
			function displayBill($connect){
				
				$tquery="SELECT SUM(subtotal) FROM itemcart";
				$add=mysqli_query($connect,$tquery) or die(mysql_error());
				$sum=mysqli_fetch_array($add);

				$bquery="SELECT * FROM itemcart";
				$bresult=mysqli_query($connect,$bquery);
					
				
		
				echo "<table>"; //start a html table 
					
				$c=0;
				while($brow=mysqli_fetch_array($bresult)){
					if($c==0){
						echo "<tr>
								<th> Item ID  </th>
								<th> Item Name  </th>
								<th> Unit Price </th>
								<th> Quantity </th>
								<th> Price </th>";
							//	<th> Discount </th>";
							if($brow['discount']!= null ){
								
								echo "<th> Discount </th>";

							}
								
							echo "</tr>";
						
					}
					echo "<tr>
							<td>".$brow['itemid']. "</td>
							<td>".$brow['name'] . "</td>
							<td>" .  $brow['price']. "</td>
							<td>" ."x ".$brow['quantity']. "</td>
							<td>" ."= ". $brow['subtotal']. "</td>";
							
							if($brow['discount']!= null ){
								
								echo "<td>". $brow['discount']. "</td>";

							}
						echo "</tr>";
					$billno=$brow['billno'];
					$c++; 
				}
				echo "</div>";
				echo "</table>";
				echo  "<br>". "Your Grand Total is Rs : ". '<input type="text" readonly=true style="background-color:lightblue" value="'.$sum[0].'">'. "<br><br>";
			
				return $billno;
			}
				
				  $cid = $_SESSION['cid']; 

   if (isset($_POST['ncus'])){	
		mysqli_query($connect,"INSERT INTO sales (cid,quantity,billno,date,total,salesPerson) 
								SELECT '$cid',SUM(quantity),billno,date,SUM(subtotal),'$user' FROM itemcart");
									//values that are not in the item cart are inserted as well (cid, user)
//update stocks
			$uquery="UPDATE $branchno INNER JOIN itemcart  ON ($branchno.itemid = itemcart.itemid)
			SET $branchno.quantity = ($branchno.quantity - itemcart.quantity)";  // reduce the quantity from the itemcart

		mysqli_query($connect,$uquery);	

		//unset($_SESSION['cid']);
				  $_SESSION['cid'] = "normalCustomer";  //set back the name to normal

	
		mysqli_query($connect, "TRUNCATE TABLE itemcart");
		header("location:purchase.php");
   }

   
   ?>
   
	<form name=ncustomer method=POST action="" >
		<input type=submit name=ncus value="Next Customer" />
	</form>
	
</center>

	</body>
</html>