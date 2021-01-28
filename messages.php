<?php
session_start();
include 'db.php';
include 'head.php';
	?>

	<div class='welcome'>messages:</div><br/><br/>
	<div class='container'>
				<br/>
				<div class='butt'><button id='projbutt' type='button' class='btn btn-dark btn-lg btn-block' >new message</button></div></br>
	</div>
	<?php
	$email=$_SESSION['username'];
	$query = "SELECT * FROM tbMessages WHERE toEmail = '$email'";
	$messages = $mysqli->query($query);
	if($messages){
	foreach ($messages as $messages){
			$from = $messages['fromEmail'];
			$text = $messages['message'];
			$messageId = $messages['messageId'];
			echo "<div class='container'>
			<div class='card' style='margin: auto; width: 50%;'>
			<div class='card-body'>
			<h5 class='card-title'>message from $from:</h5>
			<p class='card-text'>$text</p>

			<form action='deleteMessage.php' method='POST' enctype='multipart/form-data'>
				<fieldset>
					<div class='row mt-3'>
						<div class='col-12'>
						<input type='hidden' name='messageId' value='$messageId'>
							<button style='type='submit' class='btn btn-danger'>delete<i class='fa fa-angle-right'></i></button>
						</div>
					</div>
				</fieldset>
			</form>

			</div>
			</div>
			</div>";
		}
	}
	$query = "UPDATE tbUsers SET newMessage = '0' WHERE email = '$email'";
	$mysqli->query($query);
	?>
	<script type="text/javascript">
	    document.getElementById("projbutt").onclick = function () {
	        location.href = "newMessage.php";
	    };
			var parent= document.getElementById("navOptions");
			var child=parent.querySelectorAll("a");
			child[4].style.color="#00a5bb";
	</script>
	</div>
</body>
</html>
