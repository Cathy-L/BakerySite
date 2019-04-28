<?php

session_start();

$usernames = array();
$passwords = array();
$file = fopen("passwd", "r");
while (!feof($file)) {
	$line = fgets($file);
	if ($line != "") {
		$pair = explode(":", $line);
		array_push($usernames, $pair[0]);
		array_push($passwords, $pair[1]);
	}
}
fclose($file);
$accounts = array_combine($usernames, $passwords);

if (isset($_POST['submit'])) {
	if (!isset($_POST['username']) || !isset($_POST['password']) || empty($_POST['username']) || empty($_POST['password']) ) {
		$output = "Please provide a username and a password.";
	} else {
		$un = $_POST['username'];
		$pw = $_POST['password'];
		if (in_array($un, $usernames) && $accounts[$un] = $pw) {
			setcookie('username', $un, time()+3600);
			header("location:success.php");
		} else {
			$output = "Login Failed.";
		}
	}
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
			<a class="nav-item nav-link" href="order_form.php">Order</a>
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
				<img src="./images/login.png" alt="Login">

				<p>Please log in or register an account first before viewing this page.</p>
				
				<form name="login" method="post" action="">
				<table>
				  	<tr>
				  		<td>Username:</td>
				  		<td><input type="text" name="username"></td>
						</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td><input class="btn" type="submit" name="submit" value="Login"></td>
						<td><input class="btn" type="reset" name="reset" value="Reset"></td>
					</tr>
				</table>
				</form>

				<?php echo $output ?>
								
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

</body>
</html>