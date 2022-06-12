<?php

include 'OutInclude.php';


$img_src_array = array();

if ($_GET["in"] == "Action") {
	// Form me Action input hua tha isliye Action k images ka src set kiye array me
	$img_src_array = array("an/dead.jpg", "an/battle.jpg", "an/free.jpg", "an/vegas.jpg", "an/apubg.jpg", "an/moderncombat.jpg", "aracing/ne.jpg", "aracing/new.jpg");	
} elseif ($_GET["in"] == "Adventure") {
	// Form me Adventure input hua tha isliye Adventure k images ka src set kiye array me
	$img_src_array = array("aad/crime.jpg", "aad/clum.jpg", "aad/dead.jpg", "aad/dead2.jpg", "aad/devil.jpg", "aad/wolf.jpg", "aracing/frne.jpg", "aracing/frnew.jpg");
} 
//Aage elseif elseif karke baki k categories k liye b aisa kar sakta he

?>

<style type="text/css">
	.game-photo{
		width: 20%;
		height: 20%;
	}
</style>


<div class="acontent">
  
  <!-- Idhar $_GET["in"] ko echo isliye kiya he 
  		kyuki yaha pe ye likhna he ki konsa category pe click kiya tha -->
<h1><?php echo $_GET["in"]; ?> <span>Free </span>Game</h1>
<a href="#"><img src="<?php echo $img_src_array[0] ?>"  class="game-photo"></a>
<a href="#"><img src="<?php echo $img_src_array[1] ?>"  class="game-photo"></a>
<a href="#"><img src="<?php echo $img_src_array[2] ?>"  class="game-photo"></a>
<a href="#"><img src="<?php echo $img_src_array[3] ?>"  class="game-photo"></a>
<a href="#"><img src="<?php echo $img_src_array[4] ?>"  class="game-photo"></a>
<a href="#"><img src="<?php echo $img_src_array[5] ?>"  class="game-photo"></a>
<a href="#"><img src="<?php echo $img_src_array[6] ?>"  class="game-photo"></a>
<a href="#"><img src="<?php echo $img_src_array[7] ?>"  class="game-photo"></a>

<!-- Idhar $_GET["in"] ko echo isliye kiya he 
		kyuki yaha pe ye likhna he ki konsa category pe click kiya tha -->
<h1><?php echo $_GET["in"]; ?> <span>Paid </span>Game</h1>

<a href="#"><img src="<?php echo $img_src_array[8] ?>"  class="game-photo"></a>
<a href="#"><img src="<?php echo $img_src_array[9] ?>"  class="game-photo"></a>
<a href="#"><img src="<?php echo $img_src_array[10] ?>" class="game-photo"></a>
<a href="#"><img src="<?php echo $img_src_array[11] ?>" class="game-photo"></a>
<a href="#"><img src="<?php echo $img_src_array[12] ?>" class="game-photo"></a>
<a href="#"><img src="<?php echo $img_src_array[13] ?>" class="game-photo"></a>
<a href="#"><img src="<?php echo $img_src_array[14] ?>" class="game-photo"></a>
<a href="#"><img src="<?php echo $img_src_array[15] ?>" class="game-photo"></a>
</div>
</body>
