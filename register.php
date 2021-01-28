<?php
include 'db.php';

	$name = $_POST["fname"];
	$surname = $_POST["lname"];
	$email = $_POST["email"];
	$date = $_POST["date"];
	$pass = $_POST["pass"];
	//$pic = $_POST["ppic"];
	$num = $_POST["number"];

	$idquery = "select * from tbUsers order by user_id desc limit 1";
	$res = $mysqli->query($idquery);
	$row = mysqli_fetch_array($res);
	$lastid=$row['user_id'];
	$newID=$lastid+1;

	if($name && $surname && $email && $date && $pass){
		$query = "INSERT INTO tbUsers (user_id,name,surname,password,email,birthday,cnumber) VALUES ('$newID', '$name','$surname','$pass','$email','$date','$num')";
		$mysqli->query($query);
		echo "<div class='projlabel'>you have been registered</div>";
		echo "<div class='container'>
					<br/>
					<div class='butt'><button id='projbutt' type='button' class='btn btn-dark btn-lg btn-block'>go ahead, log in...</button></div>
					</div>";

	}
	else{
		echo "<div class='projlabel'>could not register you</div>";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>lessor</title>

	<!-- favicon -->
		<link rel="shortcut icon" type="image/png" href="img/fav.png"/>
		<link rel="shortcut icon" type="image/png" href="img/fav.png"/>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style/style.css" />

</head>
<body>
<script type="text/javascript">
	    document.getElementById("projbutt").onclick = function () {
	        location.href = "index.php";
	    };
</script>
</body>
</html>
