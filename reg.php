<html>
<head>
	<style type="text/css">
		h1
		{
			font-family: serif;
		}
		body
		
		.content
		{
            max-width:400px;
            padding: 40px;
            background: #ffffff;
            position: absolute;
            top:50%;
            left:50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
		}
		button
		{
			font-family: serif;
			padding: 5px;
			margin: 5px 0 5px 0;
			display: inline-block;
		}
		input[type= text], input[type= password],textarea
		{
			width: 280px;
			height:30px; 
			font-size:12pt; 
			padding:3px 10px;
			border: 0.5px solid black;
			border-radius: 4px;
		}
		pre
		{
			font-family: Arial;
		}
		.submitbutton{
			width: 305px;
			height:37px; 
			border: none;
			font-size:12pt; 
			background: #37474f;
			border-radius: 4px;
			color: white;
		}
		.cancelbutton{
			width: 305px;
			height:37px; 
			border: none;
			font-size:12pt; 
			background: #37474f;
			border-radius: 4px;
			color: white;
		}
	</style>
</head>
<body background="22.png">
	<div class="content"><center>
	<h1 >Registration Form</h1>
	<center><img alt="Logo couldn't load" src="logo1.jpeg" height="150px"  width="200px"> </center>
	
<form action="<?php $_PHP_SElF ?>" method="POST">
	
	<center><label>Name:</label><input type="text" name="name" size="18" placeholder="Enter Name" /><br><br></center>
	<label>Email:</label><input type="text" name="email" size="18" placeholder="Enter EmailId" /><br><br>
	<label>Telephone:</label><input type="text" name="telephone" size="15" placeholder="Enter Telephone No." /><br><br>
	<label>Username:</label><input type="text" name="username" size="15" placeholder="Enter Username" /><br><br>
	<label>Password:</label><input type="password" name="password" size="15" placeholder="Enter Password" /><br><br>
	<pre><label>Address:</label><textarea name="address" placeholder="Enter Address" rows="5" cols="30"></textarea></pre><br>
	<input id="check" name="acceptcheck" type="checkbox" required>
	<label for="acceptcheck"> All the details that i have entered are correct </label>
			<br><br>
	<input type="submit" value="Submit" class="submitbutton"><br>
	<button type="button" class="cancelbutton" value="cancel">Cancel</button>
	</center></div>
</form>
<script type="text/javascript">
	if (CTC == ) 
	{
		
	}
</script>
</body>
</html>


<?php

$name= filter_input(INPUT_POST, 'name');
$email=filter_input(INPUT_POST, 'email');
$telephone=filter_input(INPUT_POST, 'telephone');
$username=filter_input(INPUT_POST, 'username');
$password=filter_input(INPUT_POST, 'password');
$address=filter_input(INPUT_POST, 'address');


	if (isset($_POST["name"]) || isset($_POST["email"]) || isset($_POST["telephone"]) || isset($_POST["username"]) || isset($_POST["password"]) || isset($_POST["address"]))
		{
			if (isset($_POST["name"]))
			{
				$name = $_POST["name"];
			}
			else
			{
				$name = '';
			}
			if (isset($_POST["email"]))
			{
				$email = $_POST["email"];
			}
			else
			{
				$email = '';
			}
			if (isset($_POST["telephone"]))
			{
				$telephone = $_POST["telephone"];
			}
			else
			{
				$telephone = '';
			}
			if (isset($_POST["username"]))
			{
				$username = $_POST["username"];
			}
			else
			{
				$username = '';
			}
			if (isset($_POST["password"]))
			{
				$password = $_POST["password"];
			}
			else
			{
				$password = '';
			}
			if (isset($_POST["address"]))
			{
				$address = $_POST["address"];
			}
			else
			{
				$address = '';
			}
		}


$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "members";
$conn = mysqli_connect($servername, $username, $pass, $dbname);
if(!$conn)
{
	die("Connection Failed...");
}
#echo "Connection Successfull";


$Sql_Create_Table = "CREATE TABLE Student (
id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name varchar(50) NOT NULL,
email varchar(50),
telephone int(10) NOT NULL,
username varchar(20) NOT NULL,
password varchar(30) NOT NULL,
address varchar(100),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";


$Sql_Insert_Into_Table = "INSERT INTO Student (
name,email,telephone,username,password,address) VALUES ('$name','$email','$telephone','$username','$password','$address')";
mysqli_query($conn, $Sql_Create_Table);
mysqli_query($conn, $Sql_Insert_Into_Table);
?>