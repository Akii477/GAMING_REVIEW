<head>

<style>

	.an h1{
  background-color: #706d7d;
  color: darkred;
  text-align: center;
}

img {
  font-variant-east-asian: middle;
      
      margin-left: 50px;
      }

/* Slideshow container */
.slideshow-containerr {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */

/* The dots/bullets/indicators */
.dots {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
}

.activee {
  background-color: #717171;
}
.an{color: darkred;

   font-family: 'Stylish';

}



.acontent img{
  margin-top: 20px;
  margin-left: 20px;
}
.acontent h1{

  color: darkred;
  
}
.acontent span{
  color: white;
}
</style></head>
<?php
  include "header.php"
  ?>
<body>

</div>
	<div class="slideshow-containerr">

<div class="mySlide">

  <img src="images/afifa.jpg" width="90%;" height="40%">

</div>

<div class="mySlide">

 <img src="images/rc.jpg" width="90%;" height="40%">
 

</div>

<div class="mySlide">
  
  
  <img src="images/ludo.jpg" width="90%;" height="40%">


</div>

</div>
<br>
<div style="text-align:center">
  <span class="dots"></span> 
  <span class="dots"></span> 
  <span class="dots"></span> 
</div>
 
<script>
var sslideIndex = 0;
showSlid();

function showSlid() {
  var j;
  var slide = document.getElementsByClassName("mySlide");
  var dot = document.getElementsByClassName("dots");
  for (j = 0; j < slide.length; j++) {
    slide[j].style.display = "none";  
  }
  sslideIndex++;
  if (sslideIndex > slide.length) {sslideIndex = 1}    
  for (j = 0; j < dot.length; j++) {
    dot[j].className = dot[j].className.replace(" activee", "");
  }
  slide[sslideIndex-1].style.display = "block";  
  dot[sslideIndex-1].className += " activee";
  setTimeout(showSlid, 1000); // Change image every 2 seconds
}
</script>



<body>
<div class="an">
<h1><b>Android Games</b></h1></div>

<?php
include "dropdown.php";
?>




<div class="acontent">
  
<h1>Android <span>Free </span>Game</h1>
<a href="#"><img src="an/dead.jpg" width="20%" height="20%"></a>
<a href="#"><img src="an/battle.jpg" width="20%" height="20%"></a>
<a href="#"><img src="an/free.jpg" width="20%" height="20%"></a>
<a href="#"><img src="an/vegas.jpg" width="20%" height="20%"></a>

<a href="#"><img src="an/moderncombat.jpg" width="20%" height="20%"></a>
<a href="#"><img src="an/ne.jpg" width="20%" height="25%"></a>
<a href="#"><img src="an/apubg.jpg" width="20%" height="20%"></a>
<a href="#"><img src="an/new.jpg" width="20%" height="25%"></a>


<h1>Android <span>Paid </span>Game</h1>

<a href="#"><img src="an/hitman.jpg" width="20%" height="20%"></a>
<a href="#"><img src="an/pgang.jpg" width="20%" height="20%"></a>
<a href="#"><img src="an/pmodern.jpg" width="20%" height="20%"></a>
<a href="#"><img src="an/pew.jpg" width="20%" height="20%"></a>
<a href="#"><img src="an/pgrand.jpg" width="20%" height="20%"></a>
<a href="#"><img src="an/wild.jpg" width="20%" height="20%"></a>
<a href="#"><img src="an/pne.jpg" width="20%" height="25%"></a>
<a href="#"><img src="an/pnew.jpg" width="20%" height="25%"></a>
</div>



</body>