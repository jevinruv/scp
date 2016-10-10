<html>

	<head>
	
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
		<?php 
		
			include 'connect.php';
		
			   
			echo "<div id=left>";	   		
				sales($connect);
			echo  "</div>";
		
		
			echo "<div id=right>";
				currentStock($connect);
			echo  "</div>";

		

		function sales($connect){

			$squery= "SELECT l.location,l.branchno, sum(s.total) as total
			FROM logincheck l INNER JOIN sales s ON l.Username = s.salesPerson group by l.location";

			$sales=mysqli_query($connect,$squery);
			

			echo "<table >"; //start a html table 

				$c=0;
				while($srow=mysqli_fetch_array($sales)){
					if($c==0){
						echo "<tr>
								<th> location  </th>
								<th> branchno  </th>
								<th> total </th>
							</tr>";
						
					}
					echo "<tr>
							<td>".$srow['location']. "</td>
							<td>".$srow['branchno'] . "</td>
							<td>".$srow['total']. "</td>

						</tr>";
					$c++;
				}
				echo "</table>";
		
		}

		
			
		
		function currentStock($connect){
			
			$stock = "SELECT 
						wp11.itemid,
						wp11.quantity AS wp11_quantity,
						cp11.quantity AS cp11_quantity,
						sp11.quantity AS sp11_quantity
					  FROM
						cp11 INNER JOIN sp11
						ON cp11.itemid = sp11.itemid 
						Inner JOIN wp11 ON sp11.itemid = wp11.itemid ";
						
					$cStock = mysqli_query($connect,$stock);


				echo "<table >"; //start a html table 

				$c=0;
				while($srow=mysqli_fetch_array($cStock)){
					if($c==0){
						echo "<tr>
								<th> Item ID  </th>
								<th> wp11_quantity  </th>
								<th> sp11_quantity </th>
								<th> cp11_quantity </th>
							</tr>";
						
					}
					echo "<tr>
							<td>".$srow['itemid']. "</td>
							<td>".$srow['wp11_quantity'] . "</td>
							<td>".$srow['sp11_quantity']. "</td>
							<td>".$srow['cp11_quantity']. "</td>

						</tr>";
					$c++;
				}
				echo "</div>";
				echo "</table>";
		
		
		
			
			
		}
		
		?>

		
		
		
		  </div>

		
		
	
</body>



</html>