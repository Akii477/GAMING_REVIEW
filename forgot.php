<?php
include "header.php";
?>
<?php 
  include "scrollbar.php";
  ?>
<style type="text/css">
	.ref a{
	color: #50bcec;
	text-decoration: underline;
}
.signup{
	display: none;
}
</style>
<head>
	<title>Recover Password</title>
	<link rel="stylesheet" type="text/css" href="styleee.css">
</head>
<form  action="forgotdb.php" method="POST">
        
   <div class="sign">
        <b>Enter Email to Recover Password</b>
        <hr>
     
	  <span  id="input"></span>
	  <input type="email" name="email" class="input" placeholder="Email" required>
	
	<br />
        <button class="signup-btn" type="submit">Recover Password</button>
        <div class="ref">
        <a href="log.php">Try Login again?</a>
    </div>
      </form>

</div>
<?php
include "footer.php";
?>