<html>

<head>
<title> Fashion Republic </title>

	<link rel="stylesheet" type="text/css" href="css.css" />	
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
		session_start();
		if(isset($_POST['submit'])){
	
		include 'connect.php'; //mysql connection

			$username=$_POST['username'];
			$password=$_POST['password'];
	
			$query="SELECT * FROM login WHERE EmpID='$username' AND Password='$password' ";
			$result =mysqli_query($connect,$query);
	
	
			if(mysqli_num_rows($result)==1){
		
				$_SESSION['user'] = $username;
					
				 $queryt="SELECT Position FROM login WHERE EmpID='$username'";
				$typer=mysqli_query($connect,$queryt);
				$row=mysqli_fetch_array($typer);	
				$type=$row['Position'];
		
				if($type=='salesperson'){			
					header("location:purchase.php");
				}
				else{
					header("location:menu.php");
				} 
		
		
		


	}
	
}

			date_default_timezone_set("Asia/Colombo");
			$date=date('Y-m-d / H:i:s');
	
	?>
	
	<div id=fixedheader> 
		
				<div id=himg> 
				<img align=left src="images/frlogo.png" width=150 height =80 >
				</div>
				
				<div id=htext> 
				<h1 align=center> Fashion Republic </h1> 
  				</div>
				
				
		</div>
				
		<div id=fixedfooter>
						
			<div class=footercols>
			Date & Time :  <br> <?php echo $date; ?> 
			</div>
		
		</div>
		
	<div id=login>
	
	<center>
	<h1>Welcome to Fashion Republic</h1>
	</center>
	
	<center>
	<form action = "" method = "post">
		<fieldset>
			<legend><h3>Sign in to continue..</h3></legend>
			Username:
			<input type = "text" name = "username">
			<br/><br/>Password:
			<input type = "password" name = "password">
			<br/><br/><input type = "submit" name=submit value = "Sign In">
			
		</fieldset>
	</form>
	</center>
	</div>
</body>
</html>