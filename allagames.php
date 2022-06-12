<?php
include 'header.php';

  include "scrollbar.php";

$value=$_GET['hi'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Project";
$conn = mysqli_connect($servername, $username, $password, $dbname);


$sql="select * from androidgameinfo where game_name='$value' ";
$result=mysqli_query($conn,$sql);
$res=$result->fetch_assoc();

?>

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href=http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css>
</head>


<style type="text/css">
.lost{display: inline-table;}
.lost img{
	width: 200px;
	height: 200px;
	border-radius: 20px;
	margin: 20px;
	float: left;
}

.lost h2{
	
margin-right: 20px;
margin-top: 20px;
}
.video video{

	 
	outline-color: red;
color: black;
}
.screen{
	width: 100%;
	display: inline-flex;
	overflow: auto;
}
.screen img{
	margin-right: 10px;
	height: 400px;

}
.word span{
	color: red;
}

.disc {
	margin-left: 25px;
}
.los h2{
margin-right: 400;
}
.lost button{
background-color: yellow;
padding: 16px;

transform: translateY(100%);
  font-size: 16px;

  border-color: red;
  border-radius: 20px;
  cursor: pointer;
  margin-left: 20px;
}

</style>
<form id="fid"  style="display: none;" method="POST">
  
<input type="hidden" name="dd" id="inid">


</form>
<script type="text/javascript">
  
function submitford(v) {
  document.getElementById('inid').value=v;
  document.getElementById('fid').submit();
}

</script>

<div>
	<div class="los" style="text-align: center;">
	<h1 ><?php 

	echo $res['game_name'];

	?></h1></div>

<div class="lost">
<img src="<?php echo $res['logo']?>">


<style>
    .avg-rating {
        padding: 10px;
        /* border: 5px solid yellow; */
        font-size: large;
    }
</style>


<?php 
	if(isset($_POST["dd"]))
	{
		 if (!isset($_COOKIE["name"])){
		 	echo '<script> alert("Please Log in/Sign up for Downloading")</script>';

		 	echo '<script> window.location.href="log.php"</script>';
		 }
		 else{
		 	echo '<script> window.location.href="'.$_POST['dd'].'" </script>';
		 }

	}
echo '<button onclick="submitford(\''.$res['download'].'\')">	Download</button>';
	?>
 


</div>
<div class="avg-rating">Average rating:</div>
</div>
<p><?php 

	echo $res['game_name'];

	?> (Android Game)</p>

<div class="word" align="center">
<h2><span>Official </span>Trailer</h2>

</div>
<?php 
if($res['trailer']!=""){
echo '<div class="video" align="center">
	
<video width="920" height="440" controls poster="'.$res["logo"].'">
	<source src="'.$res["trailer"].'">
	</video></div>';}
	else{
		echo "<h2 align=center>There is no Official Video</h2>";
	}
?>
<div class="word" align="center">
	<h2><span>Scree</span>nshots</h2></div>
<div class="screen">
	
<img src="<?php echo $res['fscreen']?>">
<img src="<?php echo $res['tscreen']?>" >
<img src="<?php echo $res['thscreen']?>">
<img src="<?php echo $res['foscreen']?>">

<?php
if($res['fiscreen']!=""){
echo '<img src="'.$res["fiscreen"].'">';}
?>



</div>
<div class="word" >
	<h3><span>About This</span> Game</h3></div>
<div class="disc">
<p><?php 

echo $res['description'];?></p></div>



<style>


	fieldset, label { margin: 0; padding: 0; }
	body{ margin: 20px; }
	h1 { font-size: 1.5em; margin: 10px; }

    /****** Style Star Rating Widget *****/

    .rating { 
    border: none;
    float: left;
    }

    .rating > input { display: none; } 
    .rating > label:before { 
    margin: 5px;
    font-size: 1.25em;
    font-family: FontAwesome;
    display: inline-block;
    content: "\f005";
    }

    .rating > .half:before { 
    content: "\f089";
    position: absolute;
    }

    .rating > label { 
    color: #ddd; 
    float: right; 
    }

    /***** CSS Magic to Highlight Stars on Hover *****/

    .rating > input:checked ~ label, /* show gold star when clicked */
    .rating:not(:checked) > label:hover, /* hover current star */
    .rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

    .rating > input:checked + label:hover, /* hover current star when changing rating */
    .rating > input:checked ~ label:hover,
    .rating > label:hover ~ input:checked ~ label, /* lighten current selection */
    .rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 

    .container{margin-top:15px;}

    .margin-bottom{150px;}

    textarea{
        width: 100%; 
        border: none;
        background: #E8E8E8; 
        padding: 5px 10px; 
        height: 15%;
        border-radius: 5px 5px 0px 0px; 
        border-bottom: 2px solid #016BA8; 
        transition: all 0.5s;
        margin-top: 15px;
    }

    button.primaryContained{ background: #016ba8; color: #fff; padding: 10px 10px; border: none; margin-top: 0px; cursor: pointer; text-transform: uppercase; letter-spacing: 4px; box-shadow: 0px 2px 6px 0px rgba(0,0,0,0.25); transition: 1s all; font-size: 10px; border-radius: 5px; margin-top: 5px;}

    button.primaryContained:hover{ background: #9201A8; }
</style>

<section id="cmnt-inp" >
    <h2 style="text-align: center;">Add Review</h2>
    <div class="container">
        <div>
            <fieldset class="rating">
                <input type="radio" id="star5"      class="sele" name="rating" value="5"   />   <label class="full" for="star5"     title="Awesome - 5 stars"></label>
                <input type="radio" id="star4half"  class="sele" name="rating" value="4.5" />   <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                <input type="radio" id="star4"      class="sele" name="rating" value="4"   />   <label class="full" for="star4"     title="Pretty good - 4 stars"></label>
                <input type="radio" id="star3half"  class="sele" name="rating" value="3.5" />   <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                <input type="radio" id="star3"      class="sele" name="rating" value="3"   />   <label class="full" for="star3"     title="Meh - 3 stars"></label>
                <input type="radio" id="star2half"  class="sele" name="rating" value="2.5" />   <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                <input type="radio" id="star2"      class="sele" name="rating" value="2"   />   <label class="full" for="star2"     title="Kinda bad - 2 stars"></label>
                <input type="radio" id="star1half"  class="sele" name="rating" value="1.5" />   <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                <input type="radio" id="star1"      class="sele" name="rating" value="1"   />   <label class="full" for="star1"     title="Sucks big time - 1 star"></label>
                <input type="radio" id="starhalf"   class="sele" name="rating" value="0.5" />   <label class="half" for="starhalf"  title="Sucks big time - 0.5 stars"></label>
            </fieldset>
        </div>
        <textarea type="text" id="comm" placeholder="Write a comment" @keyup.enter="addItem()"></textarea><br>
        <button class='primaryContained float-right' onclick="sendCmt()" type="submit">Add Review</button>
    </div><!--End Container -->
</section><!-- end App -->

<style type="text/css">
    section#cmnt-inp {
        border-top: 2px solid red;
        border-bottom: 2px solid red;
        padding: 20px 0;
    }

    section#cmnt-inp > h2 {
        margin: 0;
    }

    .all-cmnts {
        display: flex;
        flex-direction: column;
        border: 1px solid white;
        border-radius: 10px;
        margin-top: 20px;
        padding: 10px;
    }

    .cmnt-body {
        position: relative;
        order: 1;
        margin: 10px;
        border-bottom: 2px solid white;
        display: flex;
        flex-direction: column;
    }

    .cmnt-body .cmntr-name {
        position: relative;
        border-bottom: 1px solid blue;
        width: fit-content;
        font-weight: bold;
        margin-bottom: 7px;
    }

    .cmnt-body .rate {
        position: absolute;
        top: 0;
        right: 0;
    }

    div.read-more {
        order: 99;
        display: grid;
        text-align: center;
        font-size: 1.5rem;
        cursor: pointer;
        border: 1px solid red;
        border-radius: 10px;
    }

    div.read-more:hover {
        background-color: rgba(255, 255, 255, 0.5);
    }

    div.read-more > a {
        margin: 0;
        padding: 0.5rem;
    }

    div.read-more > a:hover {
        /* color: rgb(8, 170, 251); */
        color: black;
    }

    .all-cmnts > h2 {
        text-align: center;
        padding: 10px;
        padding-bottom: 20px;
        margin: 0;
        border-bottom: 1px solid red;
    }

    span.stars {
        margin-left: 2rem;
        font-weight: normal;
    }

    span.stars > span {
        font-family: FontAwesome;
    }

    span.stars > .full-star:before{
        content: "\f005";
    }

    span.stars > .emp-star:before{
        content: "\f006";
    }

    span.stars > .half-star:before{
        content: "\f123";
    }
</style>

<div class="all-cmnts" style="display: none;">
    <h2> Comments </h2>
    <div class="read-more"> <a href="javascript:getCmnts()"> Read More </a> </div>
</div>


<script  type = "text/javascript">
    $(document).ready(function(){ 
        $("#comm").on('keyup.enter', function(e){
            /*if (e.key === 'Enter' || e.keyCode === 13) {
                addCmt();
            }*/
        });//end keyup
    });//End Function

    function getCookie(name) {
        var re = new RegExp(name + "=([^;]+)");
        var value = re.exec(document.cookie);
        return (value != null) ? decodeURIComponent(value[1]) : null;
    }

    function getParams (url) {
        var params = {};
        var parser = document.createElement('a');
        parser.href = url;
        var query = parser.search.substring(1);
        var vars = query.split('&');
        for (var i = 0; i < vars.length; i++) {
            var pair = vars[i].split('=');
            params[pair[0]] = decodeURIComponent(pair[1]);
        }
        return params;
    }
</script>

<script>
    const game = getParams(window.location.href).hi;
    const maxCmts = 5;
    const ratingField = $(".rating");
    var offset = 0;
    var allCmtsDiv = $(".all-cmnts")[0];

    function getGameFromUrl() {
        return getParams(window.location.href).hi;
    }

    function getStarsHtml(numStars) {
        let numEmptyStars = 5 - Math.ceil(numStars),
            numFullStars = Math.floor(numStars),
            hasHalfStar = (Math.floor(numStars) != numStars);
 
        let html = "";

        for (let i = 0; i < numFullStars; i++) {
            html += `<span class="full-star"></span>`;
        }
        if (hasHalfStar) {
            html += `<span class="half-star"></span>`;
        }
        for (let i = 0; i < numEmptyStars; i++) {
            html += `<span class="emp-star"></span>`;
        }
        return html;
    }

    function getCmtHtml(name, cmt, rating) {
        if (allCmtsDiv.style.display == "none") {
            allCmtsDiv.style.display = "flex";
        }

        return `
            <div class="cmnt-body">
                <span class="cmntr-name">` + name + ` <span class="stars"> ` + getStarsHtml(rating) +` </span> </span>
                <div class="cmt">` + cmt + `</div>
            </div>
        `;
    }

    function sendCmt() {
        // Check login by checking cookie
        let name = getCookie("name");
        if(!name) {
            alert("You need to log in to comment");
            window.location.href = "log.php";
            return;
        }

        // Get rating
        let rating = ratingField.find("input[name=rating]:checked")[0]?.value;
        if (!rating) {
            alert("Error: No rating given");
            return;
        }

        console.log(rating);
        // Get comment
        let cmt = comm.value.trim();
        if (cmt === "") {
            alert("Error: Empty comment");
            return;
        }
        comm.value="";

        // Change to add cmt to start and remove last cmt if cmt length > 5
        let cmntBods = $(allCmtsDiv).find(".cmnt-body");
        if (cmntBods.length >= 5) {
            cmntBods.last().remove();
        }
        allCmtsDiv.innerHTML = getCmtHtml(name, cmt, rating) + allCmtsDiv.innerHTML;
        sendCmtAjax(name, cmt, rating);
    }

    function sendCmtAjax(uname, cmnt, rating) {
        $.ajax({
            url:"allpgamesdata.php",
            type:"post",
            data:{
                f:"AC",
                name:uname,
                comment:cmnt,
                rating: rating,
                type:"an",
                game:game
            },
            success: function(data){
                console.log("cmt sent");
                console.log(data);
            },
            error: function(data, xhr, err) {
                console.log("cmt sent error");
                console.log(err);
            }
        });
    }

    function getCmnts() {
        $.ajax({
            url:"allpgamesdata.php",
            type: "GET",
            data: {
                f: "gc",
                max: maxCmts,
                type: "an",
                offset: offset,
                game: game
            },
            dataType: "JSON",
            success: function(data) {
                if (data.error) {
                    alert(data.error);
                    return;
                }

                if (data.length < maxCmts) {
                    $(allCmtsDiv).find("div.read-more").remove();
                }

                offset += maxCmts;
                for(let co of data) {
                    allCmtsDiv.innerHTML += getCmtHtml(co.name, co.cmnt, co.rating);
                }
                console.log("Comments added");
            },
            error: function(data, xhr, err) {
                console.log("cmt get error");
                console.log(err);
            }
        });
    }

    function setAvgRating(rating) {
        $(".avg-rating").html("Average rating: " + rating + "/5");
    }

    (function getAvgRating() {
        $.ajax({
            url:"allpgamesdata.php",
            data: {
                f:"gar",
                type:"an",
                game:game
            },
            dataType: "JSON",
            success: (data) => {
                if (!data) {
                    data = "N/A";
                } else {
                    data = +(Math.round(data + "e+1")  + "e-1");
                }
                setAvgRating(data);
                console.log("Got avg rating");
            },
            error: function(data, xhr, err) {
                console.log("avg rating get error");
                console.log(err);
            }
        })
    })();

    getCmnts();
</script>






<?php
include "footer.php";
?>