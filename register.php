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
	.ref a{
	color: #50bcec;
	text-decoration: underline;
}
.signup{
	display: none;
}
</style>
<html>
<script type="text/javascript">
	
function checkval() {
	if (formm.hihi.checked == false) {
		alert('You must have to check the checkbox to submit form');
		return false;
	}
	return true;
}
</script>
		
<head>
	<title>Sign in</title>
	<link rel="stylesheet" type="text/css" href="styleee.css">
</head>
<body>
	<div class="sign">
		<b> Sign In!!! </b>
		<hr>

		<form name="formm" action="asign.php" onsubmit="return cp()" method="POST">
			<label>Name:</label><input type="text" class="input" name="name" placeholder="Your Name" required /><br>
	<label>Email:</label><input type="text" class="input" name="email"  placeholder="Your EmailId" required /><br>
	<label>Password:</label><input type="password" class="input" name="password" id="passs" placeholder="Your Password" required/><br>

	<label>Confirm Password:</label><input type="password" class="input" name="cppassword" id="cpass" placeholder="Your Password" required/><br>
	<p><span><input type="checkbox" name="hihi" value="Agree" ></span> I am in for emails with exciting discounts and personalized recommendations</p>
	
		<div class="ref">
	<p> Already have an account <a href="log.php"> Log In</a> </p>
</div>

			<button type="submit" value="submit" name="submit" class="signup-btn" onclick="return checkval();">Submit</button>
		

		</form>

	</div>
	</body>

</html>
	<script type="text/javascript">
		
		function cp(){
			var pass = document.getElementById("passs").value;
		var c_pass = document.getElementById("cpass").value;
			if (pass==c_pass) {
				
				return true;
		
			}
			else{alert('Both Passwords do not match');
				return false;
						

			}
		}
	</script>


<?php
include "footer.php";
?>