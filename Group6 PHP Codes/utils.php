	<html>	
	<head>

	</head>
		<body>
			<?php 
			session_start();

			$user= $_SESSION['user'];
			include 'connect.php';
			
			
			
			
			$branchno = selectRetail($connect,$user);
			
			function selectRetail($connect,$user){
				$retail= "SELECT retailshopID FROM login where EmpID='$user' ";
				$retailcheck=mysqli_query($connect,$retail);
				$rowr=mysqli_fetch_array($retailcheck);
				$branchno=$rowr['retailshopID'];
			
				return $branchno;
			}
			
			
			
			
			
			
			
			
			
			
			$queryl="SELECT Province FROM login WHERE EmpID='$user'";
			$locat= mysqli_query($connect,$queryl);
	
			$row=mysqli_fetch_array($locat);
			$location=$row['Province'];
			
			date_default_timezone_set("Asia/Colombo");
			$date=date('Y-m-d / H:i:s');
			
			echo " <table bgcolor=white > 
						<tr> 
							<td>  Username :  $user </td>
							<td>  Location :  $location  <br>  Branch No : $branchno </td>
							<td>  Date & Time : $date  </td>
									

						</tr>
					</table> <br>";
					
			?>
	</body>	
</html>