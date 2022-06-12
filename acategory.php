<?php
include 'OutInclude.php';

  include "scrollbar.php";
  

// Ye array iske liye cause Action games and adventure games k images alag alag he
$img_src_array = array();
$game_name = array();
if($_GET['hi']=='Action')
{
  $game_name = array("Dead Trigger 2","Battle Prime","Garena Free Fire","PUBG MOBILE","Hitman Sniper","Gangstar Rio: City of Saints","PewDiePie: Legend of Brofist","Wild Blood");
  $img_src_array = array("an/dead.jpg", "an/battle.jpg", "an/free.jpg", "an/apubg.jpg","an/hitman.jpg","an/pgang.jpg","an/pew.jpg","an/wild.jpg");  

}
elseif ($_GET['hi']=='Adventure') {
  $game_name=array("Criminal Case","Clumsy Ninja","The Wolf Among Us","Harry Potter: Hogwarts Mystery","Broken Sword 5: Episode 1","Broken Sword 5: Episode 2","Demon Hunter: Chronicles from Beyond (Full)","Dungeon Nightmares");
	 $img_src_array = array("aad/crime.jpg", "aad/clum.jpg","aad/wolf.jpg", "aad/frne.jpg", "aad/pbroken.jpg","aad/pbroke.jpg" , "aad/phunter.jpg", "aad/pnight.jpg");
}
elseif ($_GET['hi']=='Arcade') {
  $game_name = array("Bruce Lee: Enter The Game","Angry Birds Friends","Subway Surfers","Stupid Zombies","Max Payne","Minecraft","Ski Safari","Sky Dancer Premium");
$img_src_array = array( "ar/frangry.jpg" ,
 "ar/frbruce.jpg","ar/frsubway.jpg" , "ar/frstupid.jpg","ar/max.jpg","ar/min.jpg","ar/ski.jpg" ,"ar/ne.jpg" );
}
elseif($_GET['hi']=='Racing'){
  $game_name = array("Racing Fever: Moto","Asphalt 9","Real Racing 3","Need for Speed™ No Limits","Bike Mayhem Mountain Racing","Drift Mania Championship 2 Pro","Drift Mania: Street Outlaws Pro","Need for Speed™ Most Wanted");
$img_src_array = array("aracing/fever.jpg","aracing/frasphalt.jpg" ,"aracing/frreal.jpg","aracing/frneed.jpg"    ,"aracing/frn.jpg" ,"aracing/bike.jpg" ,"aracing/dm.jpg" ,"aracing/street.jpg"  ,"aracing/need.jpg");
}
?>





<style type="text/css">
  .game-photo{
    width: 20%;
    height: 20%;
    margin-left: 20px;
  }
</style>


<div class="acontent">
  
  
<h1><?php echo $_GET["hi"]; ?> <span>Free </span>Game</h1>
<div class="grid">
<div class="game">
<div class="game-img">


<a href="javascript:submitformm('<?php echo $game_name[0] ?>')"><img src="<?php echo $img_src_array[0] ?>"  class="game-photo"></a>


</div><diV class="game-name" > <?php echo $game_name[0] ?>
</diV>
</div>
</div>

<div class="grid">
<div class="game">
<div class="game-img">


<a href="javascript:submitformm('<?php echo $game_name[1] ?>')"><img src="<?php echo $img_src_array[1] ?>"  class="game-photo"></a>
</div><diV class="game-name" > <?php echo $game_name[1] ?></diV></div></div>

<div class="grid">
<div class="game">
<div class="game-img">
<a href="javascript:submitformm('<?php echo $game_name[2] ?>')"><img src="<?php echo $img_src_array[2] ?>"  class="game-photo"></a>
</div><div class="game-name" ><?php echo $game_name[2] ?></div></div></div>

<div class="grid">
<div class="game">
<div class="game-img">

<a href="javascript:submitformm('<?php echo $game_name[3] ?>')"><img src="<?php echo $img_src_array[3] ?>"  class="game-photo"></a>
</div><div class="game-name" > <?php echo $game_name[3] ?></div></div></div>


<!-- <a href="javascript:submitformm('<?php echo $game_name[1] ?>')"><img src="<?php echo $img_src_array[4] ?>"  class="game-photo"></a>  -->
<!-- <a href="#"><img src="<?php echo $img_src_array[5] ?>"  class="game-photo"></a> -->
<!-- <a href="#"><img src="<?php echo $img_src_array[6] ?>"  class="game-photo"></a> -->
<!-- <a href="#"><img src="<?php echo $img_src_array[7] ?>"  class="game-photo"></a> -->

<!-- Idhar $_GET["in"] ko echo isliye kiya he 
    kyuki yaha pe ye likhna he ki konsa category pe click kiya tha -->
<h1><?php echo $_GET["hi"]; ?> <span>Paid </span>Game</h1>
<div class="grid">
<div class="game">
<div class="game-img">

<a href="javascript:submitformm('<?php echo $game_name[4] ?>')"><img src="<?php echo $img_src_array[4] ?>"  class="game-photo"></a>
</div><div class="game-name" >
 <?php echo $game_name[4] ?></div></div></div>
  <div class="grid">
<div class="game">
<div class="game-img">

<a href="javascript:submitformm('<?php echo $game_name[5] ?>')"><img src="<?php echo $img_src_array[5] ?>"  class="game-photo"></a>
</div><div class="game-name" >
 <?php echo $game_name[5] ?></div></div></div>

  <div class="grid">
<div class="game">
<div class="game-img">
<a href="javascript:submitformm('<?php echo $game_name[6] ?>')"><img src="<?php echo $img_src_array[6] ?>" class="game-photo"></a>
</div><div class="game-name" >
 <?php echo $game_name[6] ?></div></div></div>
<div class="grid">
<div class="game">
<div class="game-img">
<a href="javascript:submitformm('<?php echo $game_name[7] ?>')"><img src="<?php echo $img_src_array[7] ?>" class="game-photo"></a>
</div><div class="game-name" >
 <?php echo $game_name[7] ?></div></div></div>
<!-- <a href="#"><img src="<?php echo $img_src_array[12] ?>" class="game-photo"></a>  -->
 <!-- <a href="#"><img src="<?php echo $img_src_array[13] ?>" class="game-photo"></a>  -->
  <!-- <a href="#"><img src="<?php echo $img_src_array[14] ?>" class="game-photo"></a> --> 
 <!-- <a href="#"><img src="<?php echo $img_src_array[15] ?>" class="game-photo"></a> --> 
</div>
</body>
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
include "footer.php"
?>