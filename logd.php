
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
echo "Connection Successfull";

	if (isset($_POST["email"]) || isset($_POST["password"]))
		{
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

/*$sql = "CREATE TABLE Login (
id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email varchar(50),
password varchar(30) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";*/


$sql = "SELECT * FROM Register WHERE email='$email' AND password='$password'";
$result=mysqli_query($conn, $sql); 
if($result->num_rows>0){
  $sql = "INSERT INTO Login (email,password) VALUES ('$email','$password')";
mysqli_query($conn, $sql);
$cookie_name = "name";
$cookie_value = $result->fetch_assoc()["name"];
setcookie($cookie_name, $cookie_value);
echo "<script>
	window.location.href='index.php';
</script>";
}
else{
	echo '<script> alert("Username or password is wrong")</script>';
 
}

}
		mysqli_close($conn);


?>
<script type="text/javascript">
	window.location.href='log.php';
</script>