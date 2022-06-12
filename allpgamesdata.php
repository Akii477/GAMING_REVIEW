<?php
$host="localhost";
$user="root";
$pass="";
$db="project";
$conn = new mysqli($host,$user,$pass,$db);
if(!$conn) {
	die("No Connection with database found".mysqli_connect_error());
}

function doom() {
	global $conn;
	mysqli_close($conn);
	exit();
}

if(isset($_REQUEST["f"])) {
	if($_REQUEST["f"]=="AC") {
		$name=$_POST['name'];
		$comment=$_POST['comment'];
		$game=$_POST['game'];
		$type=$_POST['type'];
		$rating=$_POST['rating'];
		$sql= "INSERT INTO comment (namee, comment, rating, game, typee) 
				VALUES('$name','$comment', '$rating','$game','$type')";

		if($conn->query($sql)) {
			echo "Comment added";
		} else {
			echo "Error in adding data",mysqli_error($conn);
		}
    } elseif ($_REQUEST["f"]=="gc") {
    	// Return chats in Json object form
    	$sendArr = array();
    	$sql = "SELECT * FROM comment
    			WHERE typee='".$_GET["type"]."' AND game='".$_GET["game"]."' 
    			ORDER BY time DESC
    			LIMIT ".$_GET["max"]."
				OFFSET ".$_GET["offset"];
    	$res = $conn->query($sql);

    	if (!$res) {
    		$sendArr["error"] = "Error in getting comments";
    		doom();
    	}


    	while ($row = $res->fetch_assoc()) {
    		$obj = new stdClass();
    		$obj->name = $row["namee"];
    		$obj->cmnt = $row["comment"];
			$obj->rating = $row["rating"];
    		array_push($sendArr, $obj);
    	}

    	echo json_encode($sendArr);
    } elseif ($_REQUEST["f"] == "gar") {
		$sql = "SELECT AVG(rating) FROM comment WHERE typee='".$_GET["type"]."' AND game='".$_GET["game"]."' ";
		// $sql = "SELECT AVG(rating) FROM comment WHERE typee='".$_GET["type"]."' AND game='aaa' ";
		$res = $conn->query($sql);
		
    	if (!$res) {
			$sendArr["error"] = "Error in getting average rating";
    		doom();
    	}
		
		$val = $res->fetch_assoc()["AVG(rating)"];
		$obj = array();
		$obj["avg"] = $val;
		echo json_encode($val);
		// $obj["avg"] = ($val === null) ? echo "'null'" : echo $res->fetch_assoc()["AVG(rating)"];
		// if ($val === null) {
		// 	echo "'null'";
		// } else {
		// 	echo $res->fetch_assoc()["AVG(rating)"];
		// }
		// var_dump($res->fetch_assoc()["AVG(rating)"]);
	}
}

doom();
?>