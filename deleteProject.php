<?php
session_start();
include 'db.php';
include 'head.php';
?>

	<?php
	$projID = isset($_POST["projID"]) ? $_POST["projID"] : false;
	$query = "DELETE FROM tbProjects WHERE projID = '$projID'";
	$mysqli->query($query);
	echo "<div class='projlabel'>project delted (⌐■_■)</div>";
	echo "<div class='container'>
				<br/>
				<div class='butt'><button id='butt' type='button' class='btn btn-dark btn-lg btn-block'>back to projects</button></div>
				</div>";
	?>

	<script type="text/javascript">
	    document.getElementById("butt").onclick = function () {
	        location.href = "projects.php";
	    };
	</script>
	</div>
</body>
</html>
