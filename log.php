

<?php
include "header.php";
?>
<?php 
  include "scrollbar.php";
  ?>
<style type="text/css">
body{
	background: #111111;
}
.signup{
	display: none;
}
.ref a{
	color: #50bcec;
	text-decoration: underline;
}
</style>
<html>
<head>
	<title>LOGIN/REGISTER</title>
	<link rel="stylesheet" type="text/css" href="styleee.css">
</head>
<body>
	<div class="sign">
		<b> Log In to Gamers Paradise </b> 
		<hr>
		
		<form action="logd.php" method="POST">
			<input type="email" name="email" class="input" placeholder="Your Email">
			<input type="password" name="password" class="input" placeholder="Your Password"><br>
			
			<button type="submit" class="signup-btn">Log In</button>
			<div class="ref">
		<p> or <a href="forgot.php">Recover Password</a> </p>
		<p> Don't have an account? <a href="register.php">Sign up</a> </p>
	</div>


		</form>


	</div>
</body>
</html>
<?php
include "footer.php";
?>