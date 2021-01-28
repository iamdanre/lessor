<?php
session_start();
include 'db.php';
include 'head.php';
?>
	<?php
	$email = isset($_POST["userToDelete"]) ? $_POST["userToDelete"] : false;
	$query = "DELETE FROM tbUsers WHERE email = '$email'";
	$mysqli->query($query);
	echo "<div class='projlabel'>your projects have not been deleted, hope to see you soon</div>";
	echo "<div class='container'>
				<br/>
				<div class='butt'><button id='butt' type='button' class='btn btn-dark btn-lg btn-block'>leave</button></div>
				</div>";
	?>

	<script type="text/javascript">
	    document.getElementById("butt").onclick = function () {
	        location.href = "index.php";
	    };
	</script>
	</div>
</body>
</html>
