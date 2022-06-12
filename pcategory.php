<?php
include 'same.php';


$img_src_array = array();
$game_name = array();

if($_GET['hi']=='Action')
{
  $game_name = array("Half-Life Alyx","Doom Enternal","STAR WARS™ Battlefront™ II
","Battlefield 4™");
  $img_src_array = array( "pact/alyx.jpg" ,"pact/doom.jpg","action/1-1l.jpg","action/2-1l.jpg",
  "pact/halo.jpg", "pact/heroes.jpg", "pact/last.jpg");  

}
elseif ($_GET['hi']=='Racing') {
  $game_name = array("F1® 2020","Forza Horizon 4","NFS Heat","Need for Speed™ Payback");
	 $img_src_array = array("racing/1-1l.jpg","pracing/forza.jpg","pracing/nfs.jpg","racing/2-1l.jpg");
}
elseif ($_GET['hi']=='Simulator') {
  $game_name = array("American Truck Simulator","Bus Simulator 18","Euro truck simulator","Hand Simulator");
$img_src_array = array("psim/american.jpg","psim/1-2.jpg","psim/truck.jpg","psim/hand.jpg");
}
else{
  $game_name= array("Control","Don\'t Starve Together","Outer Wilds","Paper Dolls 2");
$img_src_array = array("padv/control.jpg" ,"adventure/1-1l.jpg" ,"adventure/2-1l.jpg" ,"adventure/3-1l.jpg");
}
?>





<style


 type="text/css">
  .game-photo{
    width: 20%;
    height: 20%;
    margin-left: 20px;
  }
</style>


<div class="acontent">
  
  
<h1><?php echo $_GET["hi"]; ?> <span> Free/Paid </span>Game</h1>
<div class="grid">
<div class="game">
<div class="game-img">
<a href="javascript:submitformm('<?php echo $game_name[0] ?>')"><img src="<?php echo $img_src_array[0] ?>"  class="game-photo"></a>
</div><div class="game-name" > <?php echo $game_name[0] ?>
</div>
</div>
</div>

<div class="grid">
<div class="game">
<div class="game-img">
<a href="javascript:submitformm('<?php echo $game_name[1] ?>')"><img src="<?php echo $img_src_array[1] ?>"  class="game-photo"></a>
</div><div class="game-name" > <?php echo $game_name[1] ?>
</div>
</div>
</div>

<div class="grid">
<div class="game">
<div class="game-img">
<a href="javascript:submitformm('<?php echo $game_name[2] ?>')"><img src="<?php echo $img_src_array[2] ?>"  class="game-photo"></a>
</div><div class="game-name" > <?php echo $game_name[2] ?>
</div>
</div>
</div>

<div class="grid">
<div class="game">
<div class="game-img">
<a href="javascript:submitformm('<?php echo $game_name[3] ?>')"><img src="<?php echo $img_src_array[3] ?>"  class="game-photo"></a>
</div><div class="game-name" > <?php echo $game_name[3] ?>
</div>
</div>
</div>


<!-- <a href="#"><img src="<?php echo $img_src_array[4] ?>"  class="game-photo"></a>
<a href="#"><img src="<?php echo $img_src_array[5] ?>"  class="game-photo"></a>
<a href="#"><img src="<?php echo $img_src_array[6] ?>"  class="game-photo"></a>
<a href="#"><img src="<?php echo $img_src_array[7] ?>"  class="game-photo"></a> -->
</div>
</body>
<form id="hiii" action="allpgames.php" style="display: none;">
  
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