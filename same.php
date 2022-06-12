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
  z-index: -1;
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
<?php
  include "header.php"
  ?>
  <?php 
  include "scrollbar.php";
  ?>
<body>

</div>
<center>
<div class="mySlide" style="margin-top:50px;">
<a href=" javascript:submitformm('STAR WARS™ Battlefront™ II')"><img src="action/1-1l.jpg" width="60%" height="50%"></a>
  

</div>

	


<div class="mySlide" style="margin-top:50px;">

 <a href=" javascript:submitformm('NFS Heat')"><img src="pracing/nfs.jpg" width="60%" height="50%"></a>
 

</div>

<div class="mySlide" style="margin-top:50px;">
  
  
  <a href=" javascript:submitformm('American Truck Simulator')"><img src="psim/american.jpg" width="60%" height="50%"></a>


</div>
<div class="mySlide" style="margin-top:50px;">
  
  
 
<a href=" javascript:submitformm('Half-Life Alyx')"><img src="pact/alyx.jpg" width="60%" height="50%"></a>


</div>
</center>

<br>
<div style="text-align:center">
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
  setTimeout(showSlid, 5000); // Change image every 2 seconds
}
</script>



<body>
<div class="an">
<h1><b>PC Games</b></h1></div>


<?php
include "pcdropdown.php";
?>
