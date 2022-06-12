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

.slideshow-containerr {
  max-width: 1000px;
  position: relative;
  margin: auto;
}


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

  <img src="p/bat.jpg" width="90%;" height="40%">

</div>

<div class="mySlide">

 <img src="p/call.jpg" width="90%;" height="40%">
 

</div>

<div class="mySlide">
  
  
  <img src="p/wwe.jpg" width="90%;" height="40%">


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
  setTimeout(showSlid, 5000); // Change image every 2 seconds
}
</script>



<body>
<div class="an">
<h1><b>pc Games</b></h1></div>


<?php
include "pcdropdown.php";
?>

<div class="acontent">
  
<h1>Simulator <span>Free/Paid </span>Game</h1>
<a href="#"><img src="psim/american.jpg" width="20%" height="20%"></a>
<a href="#"><img src="psim/bus.jpg" width="20%" height="20%"></a>
<a href="#"><img src="psim/truck.jpg" width="20%" height="20%"></a>
<a href="#"><img src="psim/.jpg" width="20%" height="20%"></a>
<a href="#"><img src="psim/.jpg" width="20%" height="20%"></a>
<a href="#"><img src="psim/.jpg" width="20%" height="20%"></a>
<a href="#"><img src="psim/.jpg" width="20%" height="20%"></a>

</div>
</body>