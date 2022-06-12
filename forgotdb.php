

<?php	

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Project";
$connection = mysqli_connect($servername, $username, $password, $dbname);
if(!$connection)
{
	die("Connection Failed!!");
}
else{
	echo "connection sucessfull";
}
if (isset($_POST["email"]))
		{
				$email = $_POST["email"];}
			else
			{
				$email = '';
			}

$email = mysqli_real_escape_string($connection, $_POST['email']);
	$sql = "SELECT * FROM register WHERE email = '$email'";

	$res = mysqli_query($connection, $sql);
	
	if($res->num_rows>0){
		$r = mysqli_fetch_assoc($res);
		$password = $r['password'];
		$to = $r['email'];
		$subject = "Your Recovered Password";

		$message = "Please use this password to login:-- " . $password;
		
		if(mail($to, $subject, $message)){
			
			echo '<script> alert("Your Password has been sent to your email id")</script>';

		}else{
			
			echo '<script> alert("Failed to Recover your password, try again")</script>';
		}

	}else{
		
		echo '<script> alert("User name does not exist in database")</script>';
	}



?>
<script type="text/javascript">
	window.location.href='log.php';
</script>s
