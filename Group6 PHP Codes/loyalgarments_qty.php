
<html>
	<head>
	
	  		<link rel="stylesheet" type="text/css" href="css.css" />	
			<title> Sales (Loyal Customers)  </title>

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
<h2>  Sales (Loyal Customers) </h2>
	<?php
		error_reporting(E_ALL & ~E_NOTICE); // error fix	
		include 'connect.php'; //mysql connection

		$query = " SELECT cid,sum(quantity) as quantity from sales WHERE cid != 'normalCustomer' GROUP BY cid" ;

		$result = mysqli_query($connect, $query);
		
		echo "<table>"; //start a html table 

		$c = 0;
		while($row = mysqli_fetch_array($result)){
				if($c==0){
						echo "<tr>
								<th> CID  </th>
								<th> Quantity   </th>
							</tr>";
						
					}
					echo "<tr>
							<td>".$row['cid']. "</td>
							<td>". $row['quantity']. "</td>

						</tr>";
					$billno=$brow['billno'];
					$c++; 
				}
				echo "</table>";
			
		








?>


		</div>
		</div>
		</div>


</body>



</html>