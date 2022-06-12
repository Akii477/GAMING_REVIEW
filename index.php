<head>
	<title>Gamers Paradise</title>

<style type="text/css">

.body{
	font-family:  "Lobster", serif;
	
}
.body h1{
	color: white;
	text-align: center;
}
.body span{

	color: #fa6648;
}
.body hr{
  border-color: #fa6648;
}
.paimage{
  width: 50%;
}
.paimage img{
  
	width: 280px;
  height: 410px;

  
  border-radius:  50px;

    
}
.android h1{
background-color: #706d7d;
  color: darkred;
}
.android span{
  color: white;
}

.pc h1{
	background-color: #706d7d;
	color: darkred;
	

}
.pc span{
	color: white;
}


/* Slideshow container */
 .mySlides img{
  margin: 0px;
  padding-left: 2px;
 }

/* Caption text */

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
}

.active {
  background-color: #717171;
}

/* On smaller 
screens, decrease text size */
.box{
    background : radial-gradient(lightgreen, lightblue);
    height: 70px;
  }
  .whole-fifa{
  background-image: url(fifa21b.png);
  background-repeat: no-repeat;
  background-size: 100%;
    height: 70%;
  }
</style>
<head><?php 
  include "header.php";
  ?></head>
<?php 
  include "scrollbar.php";
  ?>

  <?php
include "indexslider.php";
  ?>
<div class="body">
<hr>
<h1> Welcome<span> Gamers</span></h1>
<hr>
</div>
<div style="display: inline-flex; width: 100%;">
<div class="paimage" align="center">
<a href="pgames.php"><img src="images/pcgames.jpg"></a></div>
<div class="paimage" align="center">
<a href="agames.php"><img src="images/Android-Games.jpg" ></a>
</div>
</div>
<div class="pc">
<h1>Top <span>PC </span>Games</h1>
</div>
<div class="grid">
<div class="game">
<div class="game-img">
<a href=" javascript:submitformmm('Half-Life Alyx')"><img src="pact/alyx.jpg" width="20%" height="25%"></a>
</div><div class="game-name" > Half-Life Alyx
</div>
</div>
</div>
<div class="grid">
<div class="game">
<div class="game-img">
<a href=" javascript:submitformmm('NFS Heat')"><img src="pracing/nfs.jpg" width="20%" height="25%"></a>
</div><div class="game-name" > NFS Heat
</div>
</div>
</div>
<div class="grid">
<div class="game">
<div class="game-img">

<a href=" javascript:submitformmm('STAR WARS™ Battlefront™ II')"><img src="action/1-1l.jpg" width="20%" height="25%"></a>
</div><div class="game-name" > STAR WARS™ Battlefront™ II
</div>
</div>
</div>
<div class="grid">
<div class="game">
<div class="game-img">

<a href=" javascript:submitformmm('Don\'t Starve Together')"><img src="adventure/1-1l.jpg" width="20%" height="25%"></a>
</div><div class="game-name" > Don't Starve Together
</div>
</div>
</div>
<div class="android">
<h1>Top <span>Android </span>Games</h1>
</div>

<div class="grid">
<div class="game">
<div class="game-img">

<a href="javascript:submitformm('Asphalt 9')"><img src="an/asphalt.jpg" width="20%" height="25%"></a>
</div><div class="game-name" > Asphalt 9
</div>
</div>
</div>
<div class="grid">
<div class="game">
<div class="game-img">

<!-- <a href="javascript:submitformm('')"><img src="an/ludo.jpg" width="20%" height="25%"></a> -->
<a href="javascript:submitformm('Demon Hunter: Chronicles from Beyond (Full)')"><img src="aad/phunter.jpg" width="20%" height="25%"></a>
</div><div class="game-name" > Demon Hunter: Chronicles from Beyond (Full)
</div>
</div>
</div>
<div class="grid">
<div class="game">
<div class="game-img">
<!-- <a href="javascript:submitformm(' ')"><img src="an/acod.jpg" width="20%" height="25%"></a> -->
<a href="javascript:submitformm('PUBG MOBILE')"><img src="an/apubg.jpg" width="20%" height="25%"></a>
</div><div class="game-name" > PUBG MOBILE
</div>
</div>
</div>
<div class="grid">
<div class="game">
<div class="game-img">
<!-- <a href="javascript:submitformm(' ')"><img src="an/acod.jpg" width="20%" height="25%"></a> -->
<a href="javascript:submitformm('Garena Free Fire')"><img src="an/free.jpg" width="20%" height="25%"></a>
</div><div class="game-name" > Garena Free Fire
</div>
</div>
</div>
<div style="background-color: #999999; width: 100%; height: 40px;"> </div>


<div class ="box">
  <div style="font-size: 30px; font-family: cursive; padding-top: 15px; padding-left: 150px;">THE BEST WAY TO PLAY FIFA 21</div>
</div>


<div class="whole-fifa">
  <img src="fifa21.png" style="float: left; height: 100%; width: 60%; margin-left: 30px;  ">
<p style="float: left; font-size: 32px; color: white;  margin-top: 110px; ">PRE-ORDER NOW</p><br>
 <p style="color: white;  font-size: 18px; padding-top: 190px;"> Pre-order the FIFA 21 Ultimate Edition before August 14th and get an untradeable FUT 21 Ones To Watch Item!
</p>
   
 <a href="https://www.ea.com/games/fifa/fifa-21/buy" target="_blank"><button style="width: 200px; height: 50px; background-color:#64ed91;  border: 2px solid#64ed91; font-size: 20px;">Order Now</button></a>
</div>

<form id="formmm" action="allpdgames.php" style="display: none;">
  
<input type="hidden" name="in" id="valll">


</form>



<script type="text/javascript">
  
function submitformmm(v) {
  document.getElementById('valll').value=v;
  document.getElementById('formmm').submit();
}

</script>
<form id="hiii" action="allagames.php" style="display: none;">
  
<input type="hidden" name="hi" id="hihii">


</form>
<script type="text/javascript">
  
function submitformm(v) {
  document.getElementById('hihii').value=v;
  document.getElementById('hiii').submit();
}

</script>

<?php
include "footer.php";
?>