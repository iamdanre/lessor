<?php
session_start();
include 'db.php';
include 'head.php';
?>

<?php
		$email = isset($_POST["email"]) ? $_POST["email"] : false;
		$pass = isset($_POST["pass"]) ? $_POST["pass"] : false;
		if(isset($_SESSION['username'])&&isset($_SESSION['password'])){
			$email=$_SESSION['username'];
			$pass=$_SESSION['password'];
		}
			if($email && $pass){
				$query = "SELECT * FROM tbUsers WHERE email = '$email' AND password = '$pass'";
				$res = $mysqli->query($query);
				if($row = mysqli_fetch_array($res)){
					echo 	"<div class='welcome'>welcome " . $row['name'] ." (｡◕‿◕｡)</div><br/><br/><br/>";

					$_SESSION['username']=$email;
					$_SESSION['password']=$pass;
					$_SESSION['name']=$row['name'];
					$notify=$row['newMessage'];

					if($notify==1){
						echo "<input id='mess' type='hidden' value='message'>";
					}
					else{
						echo "<input id='mess' type='hidden' value='nomessage'>";
					}

					//todo makee three stacks, mine, local, global, move create button to my stack. Also make pic cards
					echo '<div class="row">';
					//your locs
					echo "<div class='col-12 col-md-4'>";
					echo 	"<div class='projlabel'>your locations:</div>";
					$myquery = "SELECT * FROM tbLocations WHERE owner = '$email' ORDER BY creationdate desc";
					$mylocs = $mysqli->query($myquery);
					if($mylocs){
					foreach ($mylocs as $mylocs){
					    $locname = $mylocs['name'];
							$locadd = $mylocs['address'];
							$locdes = $mylocs['description'];
							$locstat = $mylocs['status'];
							$locpic = $mylocs['pic'];

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
								<button type='button' class='btn btn-success'>book</button>
							  </div>
							</div>
							<br/>";

						}
						echo "<br/><div class='butt'><button id='projbutt' type='button' class='btn btn-info btn-lg btn-block'>create a location</button></div>";
						echo "</div>";


								}
					//local locs
					echo "<div class='col-12 col-md-4'>";
					echo 	"<div class='projlabel'>local locations:</div>";
					echo "</div>";

					//global locs
					echo "<div class='col-12 col-md-4'>";
					echo 	"<div class='projlabel'>global locations:</div>";
					$gloquery = "SELECT * FROM tbLocations ORDER BY creationdate desc";
					$glolocs = $mysqli->query($gloquery);
					if($glolocs){
					foreach ($glolocs as $glolocs){
							$locname = $glolocs['name'];
							$locadd = $glolocs['address'];
							$locdes = $glolocs['description'];
							$locstat = $glolocs['status'];
							$locpic = $glolocs['pic'];

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
								<button type='button' class='btn btn-success'>book</button>
								</div>
							</div>
							<br/>";

						}
					}
					echo "</div>";
					//end row
					echo "</div>";
				}


				else{
					echo 	'<div class="alert alert-dark mt-3" role="alert">
	  							TODO: register!
									<a href="index.php">create profile?</a>
	  						</div>';
				}
			}
			else{
				echo 	'<div class="alert alert-dark mt-3" role="alert">
	  						could not log you in (ಥ﹏ಥ)
	  					</div>';
			}
		?>
<script type="text/javascript">
$(function() {
	document.getElementById("projbutt").onclick = function () {
			location.href = "createlocation.php";
	};
	var mess = document.getElementById("mess").getAttribute("value");
	if (mess=='message'){
		alert("new message!");
	}
});

</script>
</div>
</body>
</html>
