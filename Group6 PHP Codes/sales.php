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
				
				<h2> Retailshop Sales </h2>
 
		<?php
			include 'connect.php'; //mysql connection
			sales($connect);
			
		function sales($connect){

			$squery= "SELECT l.Province,l.retailshopID, sum(s.total) as total
					  FROM login l INNER JOIN sales s ON l.EmpID = s.salesPerson group by l.retailshopID";

			$sales=mysqli_query($connect,$squery);
			

			echo "<table >"; //start a html table 

				$c=0;
				while($srow=mysqli_fetch_array($sales)){
					if($c==0){
						echo "<tr>
								<th> Location  </th>
								<th> Retailshop ID  </th>
								<th> Total (Rs.) </th>
							</tr>";
						
					}
					echo "<tr>
							<td>".$srow['Province']. "</td>
							<td>".$srow['retailshopID'] . "</td>
							<td>".$srow['total']. "</td>

						</tr>";
					$c++;
				}
				echo "</table>";
		
		}

		
		?>
		 
		    </div>

		    </div>

		
	</body>

</html>	