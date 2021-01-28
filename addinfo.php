<?php
session_start();
include 'db.php';
include 'head.php';
?>

	<?php
	$info = isset($_POST["info"]) ? $_POST["info"] : false;
	$newpic = isset($_POST["pic"]) ? $_POST["pic"] : false;
	$email=$_SESSION['username'];
	$query = "UPDATE tbUsers SET more = '$info' WHERE email = '$email'";
	$mysqli->query($query);
	$query = "UPDATE tbUsers SET picurl = '$newpic' WHERE email = '$email'";
	$mysqli->query($query);
	echo "<div class='projlabel'>info added!</div>";
	echo "<div class='container'>
				<br/>
				<div class='butt'><button id='butt' type='button' class='btn btn-dark btn-lg btn-block'>back to profile</button></div>
				</div>";
	?>

	<script type="text/javascript">
	    document.getElementById("butt").onclick = function () {
	        location.href = "profile.php";
	    };
	</script>
	</div>
</body>
</html>
