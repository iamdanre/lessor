<?php
session_start();
	include 'db.php';
	include 'head.php';
?>
<br/>
	<?php
	$email=$_SESSION['username'];
	$query = "SELECT friends FROM tbUsers WHERE email = '$email'";

	$res = $mysqli->query($query);
	$friendstring=array();
	while ($row = $res->fetch_assoc()) {
    $friendstring = $row['friends'];
}
$friends = explode(',', $friendstring);
foreach ($friends as $friends){
		$query = "SELECT name FROM tbUsers WHERE email = '$friends'";
		$res = $mysqli->query($query);
		echo "<div class='container'>
		<div class='card' style='margin: auto; width: 50%;'>
		<div class='card-body'>
		<h5 class='card-title'>$friends</h5>

		<form action='sendMessage.php' method='POST' enctype='multipart/form-data'>
			<fieldset>
				<div class='row mt-3'>
					<div class='col-12'>
					<input type='hidden' name='email' value='$friends'>
					<input type='text' name='message'>
						<button style='type='submit' class='btn btn-primary'>message<i class='fa fa-angle-right'></i></button>
					</div>
				</div>
			</fieldset>
		</form>

		<form action='deleteFriend.php' method='POST' enctype='multipart/form-data'>
			<fieldset>
				<div class='row mt-3'>
					<div class='col-12'>
					<input type='hidden' name='projID' value='$friends'>
						<button style='type='submit' class='btn btn-danger'>delete<i class='fa fa-angle-right'></i></button>
					</div>
				</div>
			</fieldset>
		</form>

		</div>
		</div>
		</div>";
	}

	?>
	<script type="text/javascript">
			var parent= document.getElementById("navOptions");
			var child=parent.querySelectorAll("a");
			child[1].style.color="#00a5bb";
		</script>
		</div>
</body>
</html>
