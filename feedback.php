<?php
include "header.php";
?>
<?php 
  include "scrollbar.php";
  ?>
<style type="text/css">
body{
	background: #111111;
	font-family: sans-serif;

	background-position: center;
	margin: 0;
	padding: 0;
	
}
.feedhr hr
{
        height: 1px;
        background-color: red;
        border: none;
}

.signnn
{
	width: 300px;
background-color: #000000;
	border: 1px solid red;
	padding: 20px;
	margin: 8% auto 0;
	text-align: center;
}


.signnn button
{
	color: #fff;
	width: 100%;
	padding: 10px;
	font-size: 15px;
	margin: 10px 0;
	border: none;
	outline: none;
	cursor: pointer;
}
.signup-b
{
	background-color: #e64040;

}

	

</style>
<html>
<head>
	<title>Feedback</title>
	
</head>
<body>
	<div class="signnn">
		<div class="feedhr">
		<b>Feedback form</b>
		<hr>
		</div>
		<form  method="POST">
			<textarea name="feed" placeholder="Enter Your Feedback"></textarea>
			<button type="submit" class="signup-b">Submit</button>
	</div>


		</form>


	</div>
</body>
</html>
<?php
include "footer.php";
?>
<style type="text/css">
	
footer{
	position: fixed;
	width: 100%;
	bottom: 0;
}

</style>
<?php
//Database parttttttttttttttttt

	
	

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Project";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn)
{
	die("Connection Failed!!");
}

	
			if (isset($_POST["feed"]))
			{
				$feedd = $_POST["feed"];
				$sql = "CREATE TABLE Feedback (
	 	id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	 feedbackk varchar(200),
	 	reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
 	)";
mysqli_query($conn, $sql); 
	$sql = "INSERT INTO Feedback (feedbackk) VALUES ('$feedd')";

	 	mysqli_query($conn, $sql); 
			}
			else
			{
				$feedd = '';
			}
			


?>