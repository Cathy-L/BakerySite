<?php

session_start();

if (!(isset($_COOKIE['username']) && $_COOKIE['username'] != '')) {
	header("Location: login.php");
}
else {
}

?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Mung Bean Bakery</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./project.css" media="all">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
	<div class="container">
		
		<nav class="nav nav-fill" id="navBar">
			<a class="nav-item nav-link" href="home.html">Home</a>
			<a class="nav-item nav-link" href="menu.html">Menu</a>
			<a class="nav-item nav-link active" href="#">Order</a>
			<a class="nav-item nav-link" href="contact.html">Contact</a>
			<a class="nav-item nav-link" href="myorders.php">My Orders</a>
		</nav>

		<div class="row">
			<div class="col">
				<img id="topimg" src="./images/mbbLogo.png" alt="Mung Bean Bakery Logo">
			</div>
		</div>

		<div class="row">
			<div class="col" id="content">
				<img src="./images/order.png" alt="Order">

				<p>Please select the items and quantity you would like to order!</p>
				<form id = "orderForm" method="post" action = "http://www.cknuckles.com/cgi/echo.cgi" onsubmit = "return validate();">
					<table>
						<tr><td><b>Order:</b></td></tr>
						<tr>
							<td>Macarons (in dozens)</td>
							<td class="item"><input id="macarons" type="text" size="5" name = "macarons"/> x $36.00</td>
						</tr>
						<tr>
							<td>Chocolate Chip Cookies (in dozens)</td>
							<td class="item"><input id="cookies" type="text" size="5" name = "cookies"/> x $20.00</td>
						</tr>
						<tr>
							<td>Mini key lime pie (in dozens)</td>
							<td class="item"><input id="keylime" type="text" size="5" name = "keylime"/> x $30.00</td>
						</tr>
						<tr>
							<td>Cheesecake</td>
							<td class="item"><input id="cheesecake" type="text" size="5" name = "cheesecake"/> x $15.00</td>
						</tr>
						<tr>
							<td>Strawberry Shortcake</td>
							<td class="item"><input id="shortcake" type="text" size="5" name = "shortcake"/> x $20.00</td>
						</tr>
						<tr>
							<td>Chocolate Cake</td>
							<td class="item"><input id="cake" type="text" size="5" name = "cake"/> x $20.00</td>
						</tr>
						<tr>
							<td><button class="btn" type = "button" onclick = "getTotal()">Get Total</button></td>
							<td class="item">Total: <span id = "total">$0.00</span></td>
						</tr>
						<tr><td><br></td></tr>
						<tr><td><b>Contact Information:</b></td></tr>

						<tr>
							<td>Name:</td>
							<td><input id = "name" type = "text" size = "30" name = "name"></td>
						</tr>
						<tr>
							<td>Email:</td>
							<td><input name = "email" id = "email" type = "text" size = "30"></td>
						</tr>
						<tr>
							<td>Phone Number</td>
							<td><input id = "number" name = "number" type = "text" size = "30"></td>
						</tr>
						<tr>
							<td>Delivery Address:</td>
							<td><input id = "address" type = "text" name = "address" size = "30"></td>
						</tr>
						<tr>
							<td>Delivery Date and Time:</td>
							<td><input id = "datetime" type = "text" size = "30" name = "datetime"></td>
						</tr>
						<tr>
							<td>Any other comments about this order::</td>
							<td><input name = "comments" type = "text" size = "30"></td>
						</tr>
						<tr><td><br></td></tr>
						<tr><td><b>Payment Information:</b></td></tr>
						<tr>
							<td>Name on Card:</td>
							<td><input id = "credit" type = "text" size = "30" name = "credit"></td>
						</tr>
						<tr>
							<td>Credit Card Number:</td>
							<td><input id = "creditnum" type = "text" size = "30" name = "creditnum"></td>
						</tr>

						<tr>

							<td>Expiration Date (MM/YY): <input id = "expiration" type = "text" size = "5" name = "expiration"></td>

							<td>Security Code: <input id = "code" type = "text" size = "5" name = "code"></td>
						</tr>

					</table>
					<p>
						<input class="btn" type="submit" value ="Enter"/>
						<input class="btn" type="reset" value="Clear"/>
					</p>
				</form>
			</div>
		</div>

		<hr>

		<div class="row" id="footer">
			<div class ="col-sm">
				<b>Hours</b><br>
				Monday - Saturday<br>
				8 AM - 6 PM<br>
				Closed Sunday
			</div>
			<div class = "col-sm">
				<b>Contact Us</b><br>
				512.555.5555<br>
				info@mungbeanbakery.com
			</div>

			<div class = "col-sm" id="icons">
				<b>Connect</b><br>
				<a href="blank.html"><img src="./icons/facebook.png" alt="Facebook"></a>
				<a href="blank.html"><img src="./icons/instagram.png" alt="Instagram"></a>
				<a href="blank.html"><img src="./icons/twitter.png" alt="Twitter"></a>
				<a href="blank.html"><img src="./icons/pinterest.png" alt="Pinterest"></a>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<p id="signature">Cathy Li &amp; Melanie Klock &copy; April 12 2019</p>
			</div>
		</div>

		
	</div>


	<script type ="text/javascript" src = "./javascript/order.js"></script>

</body>
</html>







