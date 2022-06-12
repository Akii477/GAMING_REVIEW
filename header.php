<style type="text/css">
	
	body{
    margin: 0;
    background-color: black;
  background-size: 90%;
  background-position: bottom;
  background-image: transparent;
  color: white;

  }
	header{
		height: 8%;
		background-color: #131313;
    padding: 15px;
    position: relative;
    border-bottom: 1px solid #FFB320;

	}
	a {
		text-decoration: none;
		  padding-right: 2px;

		  margin: 20px;
		  padding-left: 2px;
		  color: white;
		  font-weight: 600;
	}
	ul {
  list-style-type: none;
  overflow: visible;
  text-align: center;
}


.menu a:hover{
	color: #f5684c;
}
.menu ul li{
	display: inline;
  padding-left: 10px;
}
.signup{
    float: right;
  
	border-radius: 20px;
	  padding-left: 10px;
	  padding-right: 10px;
	  padding: 10px;
	  text-align: center;
	  margin: 0em;
	  font-size: 0.85em;
	  font-weight: 600;
	  background-color: #fa6648;
	  color: black;
	 
	  outline: none;
  
}

.name p{
	font-family: serif;
	float: left;
	 color: #eee;
    font-size: 2.0em;
    margin: 0em;

}
.name span{
	color: #fa6648;
	margin: 0;
}
.loname{
	float: right;
	display: flex;
}
.loname p{
	color: white;
	margin-right: 10px;
}

</style>
<header>

	<div class="name">
 				
 				<p>Gamers <span> Paradise </span></p>

 			</div>

	<div class="menu">
 		<ul>

 			
                        <li><a href="index.php">Home</a></li>
                      
  						<li><a href="pgames.php">PC Games</a></li>
 					 	<li><a href="agames.php">Android Games</a>  </li>
                        <li><a href="feedback.php">Feedback</a></li>
                        <?php 
                        if (isset($_COOKIE["name"])) {
                        	echo '<div class="loname"><p>Hello, '. $_COOKIE["name"] .'</p>';
                        	echo '<button type="button" class="signup" onclick="window.location.href=\'logout.php\'">Log Out</button></div>';
                        }
                        else{
                        	echo '<button type="button" class="signup" onclick="window.location.href=\'log.php\'">Login / Register</button>';
                        }
                        ?>
         </ul>

</div>
</header>