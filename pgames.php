<?php
include 'same.php';
?>
<body>

<div class="acontent">
  

<!-- <a href=" javascript:submitformm('')"><img src="p/apex.jpg" width="20%" height="25%"></a>
<a href=" javascript:submitformm('')"><img src="p/bat.jpg" width="20%" height="25%"></a>
<a href=" javascript:submitformm('')"><img src="p/call.jpg" width="20%" height="25%"></a>
<a href=" javascript:submitformm('')"><img src="p/fifa20.jpg" width="20%" height="25%"></a>
<a href=" javascript:submitformm('')"><img src="p/for.jpg" width="20%" height="25%"></a> -->
<div class="grid">
<div class="game">
<div class="game-img">
<a href=" javascript:submitformm('Half-Life Alyx')"><img src="pact/alyx.jpg" width="20%" height="25%"></a>
</div><div class="game-name" > Half-Life Alyx
</div>
</div>
</div>
<div class="grid">
<div class="game">
<div class="game-img">
<a href=" javascript:submitformm('Forza Horizon 4')"><img src="pracing/forza.jpg" width="20%" height="25%"></a>
</div><div class="game-name" > Forza Horizon 4
</div>
</div>
</div>
<div class="grid">
<div class="game">
<div class="game-img">
<a href=" javascript:submitformm('NFS Heat')"><img src="pracing/nfs.jpg" width="20%" height="25%"></a>
</div><div class="game-name" > NFS Heat
</div>
</div>
</div>
<div class="grid">
<div class="game">
<div class="game-img">
<a href=" javascript:submitformm('American Truck Simulator')"><img src="psim/american.jpg" width="20%" height="25%"></a>
</div><div class="game-name" > American Truck Simulator
</div>
</div>
</div>
<div class="grid">
<div class="game">
<div class="game-img">

<a href=" javascript:submitformm('Battlefield 4™')"><img src="action/2-1l.jpg" width="20%" height="25%"></a>
</div><div class="game-name" > Twin Mirror
</div>
</div>
</div>
<div class="grid">
<div class="game">
<div class="game-img">
<a href=" javascript:submitformm('Doom Enternal')"><img src="pact/doom.jpg" width="20%" height="25%"></a>
</div><div class="game-name" > Doom Enternal
</div>
</div>
</div>
<div class="grid">
<div class="game">
<div class="game-img">
<a href=" javascript:submitformm('F1® 2020')"><img src="racing/1-1l.jpg" width="20%" height="25%"></a>
</div><div class="game-name" > F1® 2020
</div>
</div>
</div>
<div class="grid">
<div class="game">
<div class="game-img">
<a href=" javascript:submitformm('Outer Wilds')"><img src="adventure/2-1l.jpg" width="20%" height="25%"></a>
</div><div class="game-name" > Outer Wilds
</div>
</div>
</div>
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
include "footer.php";
?>