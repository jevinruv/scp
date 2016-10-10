<html>
 <head>
 
	<style>
		ul {

			width: 15%;
			background-color: #f1f1f1;
			height: 71%;
			overflow: auto;
		} 

		li a {

			color: #000000;
			padding: 5px ;
			text-decoration: none;
		}

		li a.active {
			background-color: DarkGray;
			color: white;
		}

		li a:hover:not(.active) {
			background-color: DarkGray;
			color: White;
		}
		
								
.dropbtn {
    padding: 10px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;

}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 110px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);

}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;

}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
				
						
	
		<link rel="stylesheet" type="text/css" href="css.css" />	
		

	</style>
 </head>
	
		
	<body>		


		<ul>
		
			<li><a href="menu.php">Home</a></li>

			<div class="dropdown">
				<button class="dropbtn">Customer</button>

				<div class="dropdown-content">
					<a href=customer_registration.php>Register </a>
					<a href=deletecust.php>Unregister</a>
					<a href=viewAllCustomers.php>View All</a>
				</div>
			</div>
			
			<li><a href="sales.php">Sales</a></li>
			
			<li><a href=viewr.php>Warehouse</a></li>
			<li><a href=viewf.php>Stocks </a></li>
			<li><a href=check_birthday.php>Customer Birthdays</a></li>


			
			<div class="dropdown">
				<button class="dropbtn">Retail Shop</button>

				<div class="dropdown-content">
					<a href=retailshop_registration.php>Register </a>
					<a href=delete.php>Unregister</a>
					<a href=update.php>Update </a>
				</div>
			</div>
		</ul>

	</body>
</html>

