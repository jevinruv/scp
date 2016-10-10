	<html>	
	
	<head>
		<style>
			body {
				text-align: center;
			}
			
			.footercols {

				width: 25%;
				height: 40px;
				margin: 5px;
				background: grey;
				display: inline-block;    
			}
		</style>
	</head>

		<body>
		
		
		


		
		
			<?php 
						error_reporting(E_ALL & ~E_NOTICE); // error fix

			session_start();

			$user= $_SESSION['user'];												 
			if(!isset($_SESSION['user'])){ //must login to access page				
				header('location:index.php');
			}
		
		
			include 'connect.php';
			
			
			
			
			$branchno = selectRetail($connect,$user);
			
			function selectRetail($connect,$user){
				$retail= "SELECT retailshopID FROM login where EmpID='$user' ";
				$retailcheck=mysqli_query($connect,$retail);
				$rowr=mysqli_fetch_array($retailcheck);
				$retailshopID=$rowr['retailshopID'];
			
				return $retailshopID;
			}
			
			
			
			
			
			
			
			
			
			
			$queryl="SELECT Province FROM login WHERE EmpID='$user'";
			$locat= mysqli_query($connect,$queryl);
	
			$row=mysqli_fetch_array($locat);
			$Province=$row['Province'];
			
			date_default_timezone_set("Asia/Colombo");
			$date=date('Y-m-d / H:i:s');
			
			
			echo "<div class=footercols>  
				Username :  $user <br> 
				
				<form method='POST'>			
					<input type=submit name=logout value=Logout >			
				</form>
		
			</div>
			
			<div class=footercols>
			Location :  $Province <br>  Branch No : $branchno 
			</div>
			
			<div class=footercols>
			Date & Time : $date <br> .
			</div> ";
			
			

			 
			 

			
			
			
			
			
			
			
			
			
			if(isset($_POST['logout'])){ //sign out the current user when clicked
				
				mysqli_query($connect, "TRUNCATE TABLE itemcart");
				  $_SESSION['cid'] = "normalCustomer";  //set back the name to normal

				unset($_SESSION['user']);
				header('location:index.php');
			} 
			
					
			?>

	</body>	
</html>