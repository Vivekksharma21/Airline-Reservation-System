<?php
	session_start();
?>
<html>
	<head>
		<title>
			Bharat Airlines
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
		<link rel="icon" href="images/logo.png">
		
	</head>
	<body>
		
		<div class="navbar">
			<img class="logo" src="images/logo.png"/> 
			<ul>
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true" style="margin-left: 0px;"></i> Home</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"book_tickets.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_ticket_message.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
					?>
				</li>
				<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"customer_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
					?>
				</li>
			</ul>

			<h2 id="title" style="color:white; position: absolute;">
			<p>WELCOME TO BHARAT AIRLINES</p>	
			<p style="font-size: 20px; text-align:center ; font-family:emoji; margin:-47px 0">HAVE A SAFE FLIGHT!
			</h2>
		</div>
		

		<div class="container">
			
			<img src="images/home.jpg" width=100%>
		</div>
		<div class="border">

		</div>
		
		<div class="container2">
			<p>
				ABOUT SECTION
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio ea, sunt veniam provident corporis impedit alias deserunt omnis totam facere velit quasi consequuntur recusandae repellendus ab quaerat id neque voluptas.</p>
		<img src="images/secondBG.jpg" alt="" width="100%" height="450px">
		
		</div>

		<div class="border">

		</div>

		<div class="container3">
			<p>

			</p>
			<img src="images/lastBG.jpg" alt="" width="100%" height="850px">
		</div>
		<div class="border">

		</div>

		<div class="endNavbar">
		 <p>
			Copyright © 2023 Bharat Airlines Ltd. <br>
			All rights reserved. Use of this website indicates your compliance with our Privacy and Policy, Condition of carriage, Terms and Conditions.
		 </p>
		</div>
		<!--check out addling local host in links and other places

			shift login/logout buttons to right side
		-->
	</body>
</html>