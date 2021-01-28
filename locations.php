<?php
session_start();
include 'db.php';
include 'head.php';
?>

	<div class='container'>
				<div class='butt'><button id='projbutt' type='button' class='btn btn-info btn-lg btn-block' >create a location</button></div>
	</div>
	<br/><br/>
<?php
echo '<div class="row">';
$email=$_SESSION['username'];
$myquery = "SELECT * FROM tbLocations WHERE owner = '$email' ORDER BY creationdate desc";
$mylocs = $mysqli->query($myquery);
if($mylocs){
foreach ($mylocs as $mylocs){
	$locname = $mylocs['name'];
	$locadd = $mylocs['address'];
	$locdes = $mylocs['description'];
	$locstat = $mylocs['status'];
	$locpic = $mylocs['pic'];

	echo "<div class='col-12 col-md-4'>";

	echo "<div class='card' style='width: 100%;'>
		<img src='img/locPics/$locpic' class='card-img-top' alt='...'>
		<div class='card-body'>
			<h5 class='card-title'>$locname</h5>
			<p class='card-text'>$locdes.</p>
		</div>
		<ul class='list-group list-group-flush'>
			<li class='list-group-item'>$locadd</li>
			<li class='list-group-item'>$locstat</li>
		</ul>
		<div class='card-body'>
			<button type='button' class='btn btn-info'>view</button>
			<button type='button' class='btn btn-danger'>delete</button>
		</div>
	</div>
	<br/>";
	echo "</div>";
	}
}
echo "</div>";
?>
	<script type="text/javascript">
	    document.getElementById("projbutt").onclick = function () {
	        location.href = "createlocation.php";
	    };
			var parent= document.getElementById("navOptions");
			var child=parent.querySelectorAll("a");
			child[0].style.color="#00a5bb";
		</script>
		</div>
</body>
</html>
