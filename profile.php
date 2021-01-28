<?php
session_start();
	include 'db.php';
	include 'head.php';
?>
<br/>
	<?php
	$email=$_SESSION['username'];
	$query = "SELECT * FROM tbUsers WHERE email = '$email'";
	$res = $mysqli->query($query);
	$user = mysqli_fetch_array($res);
	if($user){
		$name = $user['name'];
		$pic = $user['picurl'];
		$sname = $user['surname'];
		$bd= $user['birthday'];
	echo 	"<div class='container'>
				 <div class='row'>
				 <div class='col-12 col-sm-6 offset-sm-3'>
					<div class='card'>
					<img class='card-img-top' src='img/userPics/$pic' alt='...profile picture here...'>
					<div class='card-header'>
						$name:
					</div>
					<div class='card-body'>
						<h5 class='card-title'>surname: $sname</h5>
						<h5 class='card-title'>email address: $email</h5>
						<h5 class='card-title'>birthday: $bd</h5>
					</div>
					</div>
					</div>
					</div>
						</div>";
$more= $user['more'];
echo 	"<div class='container'>
				<div class='card'>
				<div class='card-header'>
					more info:
				</div>
				<div class='card-body'>
					<h5 class='card-title'>$more</h5>
				</div>
				</div>
					</div>";

	}
	?>
	<div class="container">
		<br/><br/>
		<section id="forms">
			<div class="row">
				<div class="col-12 col-md-6">

				</div>
				<div class="col-12 col-md-12 mt-12 mt-md-12">
					<div class="card">
						<div class="card-header">add/change information:</div>
						<div class="card-body">
							<form action="addinfo.php" method="POST" enctype="multipart/form-data">
								<fieldset>
									<div class="row">
										<div class="col-12 col-lg-12">
											<input type="text" id="info" class="form-control" placeholder="your info here" name="info" required>
										</div>
									</div>
									<div class="col-12 col-lg-12">
										<label for="ppic">change profile picture to:</label>
										todo
									</div>
									<div class="row mt-3">
										<div class="col-12">
											<button type="submit" class="btn btn-info">change <i class="fa fa-dot-circle"></i></button>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php
echo "
	<div class='container'>
		<form action='deleteMe.php' method='POST' enctype='multipart/form-data'>
			<fieldset>
				<div class='row mt-3'>
					<div class='col-12'>
						<input type='hidden' name='userToDelete' value='$email'>
						<button type='submit' class='btn btn-danger btn-block'>delete me (ಥ﹏ಥ) <i class='fa fa-dot-circle'></i></button>
					</div>
				</div>
			</fieldset>
		</form>
	</div>";
?>
<?php
if ($email=='iamdanre@gmail.com') {
	echo "<div class='container'>
		<form action='admin.php' method='POST' enctype='multipart/form-data'>
			<fieldset>
				<div class='row mt-3'>
					<div class='col-12'>
						<button style='type='submit' class='btn btn-dark btn-block'>admin ╭∩╮(-_-)╭∩╮ <i class='a fa-angle-right'></i></button>
					</div>
				</div>
			</fieldset>
		</form>
	</div>";
}
?>
<script type="text/javascript">
		var parent= document.getElementById("navOptions");
		var child=parent.querySelectorAll("a");
		child[2].style.color="#00a5bb";
	</script>
	</div>
</body>
</html>
