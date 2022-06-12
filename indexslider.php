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
  z-index: -1;
}

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
.acontent h1{
  color: darkred; 
}

.acontent span{
  color: white;
}
.grid{
  display: inline-flex;
}
.game{
  
  padding: 10px;
  color: white;
  float: left;
  text-align: center;
  background-color: black;
}
.game-img img{
 margin-top: 5px;
  margin-left: 5px;
  border-radius: 50px;
width: 250px;
height: 250px;


}

</style></head>

<body>

<center>
<div class="mySlide" style="margin-top:50px;">

 <a href="javascript:submitformm('PUBG MOBILE')"><img src="an/apubg.jpg" width="60%" height="50%" ></a>

</div>

<div class="mySlide" style="margin-top:50px;">
<a href=" javascript:submitformmm('F1® 2020')"><img src="racing/1-1l.jpg" width="60%" height="50%"></a>

</div>
<div class="mySlide" style="margin-top:50px;">
<a href=" javascript:submitformmm('American Truck Simulator')"><img src="psim/american.jpg" width="60%" height="50%"></a>

</div>
<div class="mySlide" style="margin-top:50px;">

 <a href="javascript:submitformm('Real Racing 3')"><img src="an/real.jpg" width="60%" height="50%"></a>
 

</div>
<div class="mySlide" style="margin-top:50px;">

<a href=" javascript:submitformmm('Outer Wilds')"><img src="adventure/2-1l.jpg" width="60%" height="50%"></a>

</div>
<div class="mySlide" style="margin-top:50px;">
  
  
  <a href="javascript:submitformm('Asphalt 9')"><img src="an/asphalt.jpg" width="60%" height="50%"></a>

</div>

<div class="mySlide" style="margin-top:50px;">
  
  
  <a href="javascript:submitformm('Modern Combat 5')"><img src="an/moderncombat.jpg" width="60%" height="50%"></a>


</div>
<div class="mySlide" style="margin-top:50px;">
<a href=" javascript:submitformmm('STAR WARS™ Battlefront™ II')"><img src="action/1-1l.jpg" width="60%" height="50%"></a>

</div>
<div class="mySlide" style="margin-top:50px;">

<a href=" javascript:submitformmm('Battlefield 4™')"><img src="action/2-1l.jpg" width="60%" height="50%"></a>

</div>
</center>
<br>
<div style="text-align:center">
  <span class="dots"></span> 
  <span class="dots"></span> 
  <span class="dots"></span> 
  <span class="dots"></span> 
  <span class="dots"></span> 
  <span class="dots"></span> 
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
  setTimeout(showSlid, 5000); 
}
</script>



<body>


</body>
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
