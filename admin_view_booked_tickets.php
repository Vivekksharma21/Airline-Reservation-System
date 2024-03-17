<?php
	session_start();
?>
<html>
	<head>
		<title>
			View Booked Tickets
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0% 15.8%
			}
			input[type=date] {
				border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 5.5px 44.5px;
			}
			body div.boxing{
				background-color:aquamarine;
                border:2px solid black;
                width:40%;
				height: 30%;
                margin-left:27%;
                border-radius: 18px;

            }
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
		
	</head>
	<body>
	<img class="logo" src="images/logo.png"/> 
		<h1 id="title">
			BHARAT AIRLINES
		</h1>
		<div class="navbar">
			<ul>
				<li><a href="admin_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		<form action="admin_view_booked_tickets_form_handler.php" method="post">
			<h2 style="text-align: center;">VIEW LIST OF BOOKED TICKETS FOR A FLIGHT</h2>

			<div class="boxing">
			<table cellpadding="6">
				<tr>
					<td class="fix_table" style="padding-left: 10%;">Enter the Flight No.</td>
					<td class="fix_table" style="padding-left: 7%;">Enter the Departure Date</td>
				</tr>
				<tr>
					<td class="fix_table"><input style="margin-left:14px;" type="text" name="flight_no" required></td>
					<td class="fix_table"><input style="margin-left: 20px;" type="date" name="departure_date" required></td>
				</tr>
			</table>
			<br>
			<br>
			<input style="margin-left:37%;" type="submit" value="Submit" name="Submit">
			</div>
		</form>
	</body>
</html>