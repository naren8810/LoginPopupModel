<!DOCTYPE html5>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X UA-Compatible" contect="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script>document.createElement("myblock")</script>
	<link rel="stylesheet" href="style.css">
	<title> Loging Popup Model</title>
</head>
<body>
	<h1><center> RESPONSIVE & POPUP LOGIN FORM </center></h1>
	<myblock> THIS IS CUSTOM DEFINED BLOCK, PRESS BUTTON TO LOGIN	<!-- MY BLOCK -->


		<!-- The Button to Call the Popup Modal(div id='mydivmodal') -->
		<button onclick="document.getElementById('mydivmodal').style.display='block'" style="width: auto;margin-left: 24px;" >
			LOGIN
		</button>
		
		<!-- The Modal(div) -->
		<div id="mydivmodal" class="modal">
			<form class="mymodal-content animate" action="index.php" method="get">
				<h3><center>LOGIN FORM<center></h3>

				<div class="imgcontainer">
					<span onclick="document.getElementById('mydivmodal').style.display='none'" class="close" title="Close Modal">
						&times;						
					</span>
					<img src="images/Avatar.png" alt="Avatar" class="imgavatar">
				</div>
				<div class="container">
					<label for="uname"></label>
					<input type="text" name="uname" placeholder="Enter Username" required="required">
					<label for="pass"></label>
					<input type="password" name="pass" placeholder="Enter Password" required="required">
					<button type="submit" name="submit">Login</button>

					<label for="remember">
						<input type="checkbox" checked="checked" name="remember"> 
						Remember Me
					</label>
				</div>
				<div class="container" style="background-color: #f2f2f2;">
					<button type="button" onclick="document.getElementById('mydivmodal').style.display='none'" class="cancelbtn">Cancel</button>
					<span class="psw">Forgot <a href="#">password?</a></span>
				</div>
			</form>
		</div>
	</myblock>
</body>
</html>


<?php 

if (isset($_GET['submit'])) {
	echo 'Thank You! Visit Again!' Refres Page to Try Again;
}
 ?>