<?php
session_start();
include 'db.php';
include 'head.php';
?>

	<?php
	$messageId = isset($_POST["messageId"]) ? $_POST["messageId"] : false;
	$query = "DELETE FROM tbMessages WHERE messageId = '$messageId'";
	$mysqli->query($query);
	echo "<div class='projlabel'>message delted (⌐■_■)</div>";
	echo "<div class='container'>
				<br/>
				<div class='butt'><button id='butt' type='button' class='btn btn-dark btn-lg btn-block'>back to messages</button></div>
				</div>";
	?>

	<script type="text/javascript">
	    document.getElementById("butt").onclick = function () {
	        location.href = "messages.php";
	    };
	</script>
	</div>
</body>
</html>
