<?php
//Database parttttttttttttttttt
$name = $_POST['name'];	
	$email = $_POST['email'];
	$password = $_POST['password'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Project";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn)
{
	die("Connection Failed!!");
}
echo "Connection Successfull";

	if (isset($_POST["name"]) || isset($_POST["email"]) || isset($_POST["password"]))
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
			
			if (isset($_POST["password"]))
			{
				$password = $_POST["password"];
			}
			else
			{
				$password = '';
			}
		





/*$sql = "CREATE TABLE Register (
id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name varchar(50) NOT NULL,
email varchar(50),
password varchar(30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";*/



$sql = "SELECT * FROM Register WHERE email='$email'";
$result=mysqli_query($conn, $sql); 
if($result->num_rows>0){
	echo "<script> alert ('This Email Id is already taken!!')</script>";
}
else{
	$sql = "INSERT INTO Register (
name,email,password) VALUES ('$name','$email','$password')";


if(mysqli_query($conn,$sql)) 
			{ echo "<br>";
				echo "inserted";
				$cookie_name = "name";
				$cookie_value = $name;
setcookie($cookie_name, $cookie_value);
			}
			else
			{
				echo "Error: The value could not be inserted in the database. ".mysqli_error($conn);
			}
	}
}
		mysqli_close($conn);

?>
<script type="text/javascript">
	window.location.href='log.php';
</script>