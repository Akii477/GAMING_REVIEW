<?php
include 'header.php'; 
  include "scrollbar.php";
 

$value=$_GET['hi'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Project";
$conn = mysqli_connect($servername, $username, $password, $dbname);


$sql="select * from androidgameinfo where game_name='$value' ";
$result=mysqli_query($conn,$sql);
$res=$result->fetch_assoc();




?>
<style type="text/css">
.lost{display: inline-table;}
.lost img{
	width: 180px;
	height: 180px;
	border-radius: 20px;
	margin: 20px;
	float: left;
}

.lost h2{
	
margin-right: 20px;
margin-top: 20px;
}
.video video{

	 
	outline-color: red;
color: black;
}
.screen{
	width: 100%;
	display: inline-flex;
	overflow: auto;
}
.screen img{
	margin-right: 10px;
	height: 400px;

}
.word span{
	color: red;
}

.disc {
	margin-left: 20px;
}
.los h2{
margin-right: 400;
}
.lost button{
background-color: yellow;
padding: 16px;

transform: translateY(100%);
  font-size: 16px;

  border-color: red;
  border-radius: 20px;
  cursor: pointer;
  margin-left: 20px;
}

</style>
<form id="fid"  style="display: none;" method="POST">
  
<input type="hidden" name="dd" id="inid">


</form>
<script type="text/javascript">
  
function submitford(v) {
  document.getElementById('inid').value=v;
  document.getElementById('fid').submit();
}

</script>
<div >
	<div class="los" style="text-align: center;">
	<h1 ><?php 

	echo $res['game_name'];

	?></h1></div>

<div class="lost">
<img src="<?php echo $res['logo']?>">

<?php 
	if(isset($_POST["dd"]))
	{
		 if (!isset($_COOKIE["name"])){
		 	echo '<script> alert("Please Log in/Sign up for Downloading")</script>';
		 	
		 	echo '<script> window.location.href="log.php"</script>';
		 }
		 else{
		 	echo '<script> window.location.href="'.$_POST['dd'].'" </script>';
		 }

	}
echo '<button onclick="submitford(\''.$res['download'].'\')">	Download</button>';
	?>
 



</div>
</div>
<p><?php 

	echo $res['game_name'];

	?> (Android Game)</p>

<div class="word" align="center">
<h2><span>Official </span>Trailer</h2>

</div>
<?php 
if($res['trailer']!=""){
echo '<div class="video" align="center">
	
<video width="920" height="440" controls poster="'.$res["logo"].'">
	<source src="'.$res["trailer"].'">
	</video></div>';}
	else{
		echo "<h2 align=center>There is no Official Video</h2>";
	}
?>
<div class="word" align="center">
	<h2><span>Scree</span>nshots</h2></div>
<div class="screen">
	
<img src="<?php echo $res['fscreen']?>">
<img src="<?php echo $res['tscreen']?>" >
<img src="<?php echo $res['thscreen']?>">
<img src="<?php echo $res['foscreen']?>">

<?php
if($res['fiscreen']!=""){
echo '<img src="'.$res["fiscreen"].'">';}
?>



</div>
<div class="word" align="center">
	<h2><span>About This</span>Game</h2></div>
<div class="disc">
<p><?php 

echo $res['description'];?></p></div>
<?php
include "footer.php";
?>