<?php
session_start();
include 'db.php';
include 'head.php';
?>

	<?php
	$toEmail = isset($_POST["email"]) ? $_POST["email"] : false;
	$message = isset($_POST["message"]) ? $_POST["message"] : false;
	$fromEmail=$_SESSION['username'];
	$idquery = "select * from tbMessages order by messageId desc limit 1";
	$res = $mysqli->query($idquery);
	$row = mysqli_fetch_array($res);
	$lastid=$row['messageId'];
	$newID=$lastid+1;

	$query = "INSERT INTO tbMessages (toEmail,fromEmail,message,messageId) VALUES ('$toEmail', '$fromEmail','$message','$newID')";
	$mysqli->query($query);
	echo "<div class='projlabel'>message sent (͡° ͜ʖ ͡°)</div>";
	echo "<div class='container'>
				<br/>
				<div class='butt'><button id='butt' type='button' class='btn btn-dark btn-lg btn-block'>go to messages</button></div>
				</div>";
	$query = "UPDATE tbUsers SET newMessage = '1' WHERE email = '$toEmail'";
	$mysqli->query($query);
	?>

	<script type="text/javascript">
	    document.getElementById("butt").onclick = function () {
	        location.href = "messages.php";
	    };
	</script>
	</div>
</body>
</html>
