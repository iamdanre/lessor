<?php
include 'db.php';
include 'head.php';
?>

<?php
$projquery = "SELECT * FROM tbLocations";
$projresult = $mysqli->query($projquery);
if($projresult){
echo 	"<div class='projlabel'>locations:</div>";
foreach ($projresult as $projresult){
		$projName = $projresult['name'];
		$projLang = $projresult['languages'];
		$projOwn = $projresult['owner'];
		$projVer = $projresult['version'];
		$projId = $projresult['projID'];
		echo "<div class='container'>
		<div class='card' style='margin: auto; width: 50%;'>
		<div class='card-body'>
		<h5 class='card-title'><b>$projName</b></h5>
		<p class='card-text'>$projLang project created by $projOwn</p>
		<p class='card-text'>current version: $projVer</p>
		</div>

		<form action='deleteProject.php' method='POST' enctype='multipart/form-data'>
			<fieldset>
				<div class='row mt-3'>
					<div class='col-12'>
					<input type='hidden' name='projID' value='$projId'>
						<button style='type='submit' class='btn btn-danger btn-block'>delete<i class='fa fa-angle-right'></i></button>
					</div>
				</div>
			</fieldset>
		</form>

		</div>
		</div>";
	}
}

$userquery = "SELECT * FROM tbUsers";
$userresult = $mysqli->query($userquery);
if($userresult){
echo 	"<div class='projlabel'>users:</div>";
foreach ($userresult as $userresult){
		$userName = $userresult['name'];
		$userEmail = $userresult['email'];
		echo "<div class='container'>
		<div class='card' style='margin: auto; width: 50%;'>
		<div class='card-body'>
		<h5 class='card-title'><b>$userName</b></h5>
		<p class='card-text'>username: $userEmail</p>
		</div>

		<form action='deleteMe.php' method='POST' enctype='multipart/form-data'>
			<fieldset>
				<div class='row mt-3'>
					<div class='col-12'>
						<input type='hidden' name='userToDelete' value='$userEmail'>
						<button type='submit' class='btn btn-danger btn-block'>delete<i class='fa fa-angle-right'></i></button>
					</div>
				</div>
			</fieldset>
		</form>

		</div>
		</div>";
	}
}

?>
</div>
</body>
</html>
