<?php
session_start();
include 'db.php';
include 'head.php';
?>

	<?php
	$name = isset($_POST["lname"]) ? $_POST["lname"] : false;
	$address = isset($_POST["address"]) ? $_POST["address"] : false;
	$type = isset($_POST["type"]) ? $_POST["type"] : false;
	$description = isset($_POST["description"]) ? $_POST["description"] : false;
	$picurl = isset($_POST["dpic"]) ? $_POST["dpic"] : false;


	$idquery = "select * from tbLocations order by projID desc limit 1";
	$res = $mysqli->query($idquery);
	$row = mysqli_fetch_array($res);
	$lastid=$row['projID'];
	$newID=$lastid+1;
	$date = date('Y-m-d H:i:s');
	$own=$_SESSION['username'];
	if($name && $address && $type && $description){
		$query = "INSERT INTO tbLocations (projID,name,address,type,description,creationdate,owner,members,status,pic) VALUES ('$newID', '$name','$address','$type','$description','$date','$own','$own','available','$picurl')";
		$mysqli->query($query);
		echo "<div class='projlabel'>created!</div>";
		echo "<br/><div class='butt'><button id='butt' type='button' class='btn btn-info btn-lg btn-block'>go to locations</button></div>";
	}
	else{
		echo "<div class='projlabel'>could not create project</div>";
	}
	?>
	<script type="text/javascript">
	    document.getElementById("butt").onclick = function () {
	        location.href = "locations.php";
	    };
	</script>
	</div>
</body>
</html>
