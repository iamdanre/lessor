<?php
include 'db.php';
include 'head.php';
?>

<?php
$look = isset($_POST["search"]) ? $_POST["search"] : false;
$projquery = "SELECT * FROM tbProjects WHERE languages = '$look'";
$projresult = $mysqli->query($projquery);
if($projresult){
echo 	"<div class='projlabel'>found projects:</div>";
foreach ($projresult as $projresult){
		$projName = $projresult['name'];
		$projLang = $projresult['languages'];
		$projOwn = $projresult['owner'];
		$projVer = $projresult['version'];
		echo "<div class='container'>
		<div class='card' style='margin: auto; width: 50%;'>
		<div class='card-body'>
		<h5 class='card-title'><b>$projName</b></h5>
		<p class='card-text'>$projLang project created by $projOwn</p>
		<p class='card-text'>current version: $projVer</p>
		</div>
		</div>
		</div>";
	}
}

$userquery = "SELECT * FROM tbUsers WHERE name = '$look' OR email='$look'";
$userresult = $mysqli->query($userquery);
if($userresult){
echo 	"<div class='projlabel'>found users:</div>";
foreach ($userresult as $userresult){
		$userName = $userresult['name'];
		$userEmail = $userresult['email'];
		echo "<div class='container'>
		<div class='card' style='margin: auto; width: 50%;'>
		<div class='card-body'>
		<h5 class='card-title'><b>$userName</b></h5>
		<p class='card-text'>username: $userEmail</p>
		</div>
		</div>
		</div>";
	}
}

?>
</div>
</body>
</html>
