<!DOCTYPE html>
<html>
<head>
	<title>lessor</title>

	<!-- favicon -->
		<link rel="shortcut icon" type="image/png" href="img/fav.png"/>
		<link rel="shortcut icon" type="image/png" href="img/fav.png"/>

		<!-- jquery -->
			<script
	  src="https://code.jquery.com/jquery-3.3.1.min.js"
	  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	  crossorigin="anonymous">
	  </script>
<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style/style.css" />
<!-- FA -->
	<script src="https://kit.fontawesome.com/3779ca5ef6.js"></script>
	<meta charset="utf-8" />
</head>
<body>
	<nav class="navbar navbar-expand navbar-dark bg-dark">
		<a href="login.php">
		<img src="img/fav.png" style="height:75px;width:75px;"></img>
		</a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul id="navOptions" class="navbar-nav mr-auto">
							<a id="navelem" href="locations.php" class="nav-item active nav-link">locations |</a>
              <a id="navelem" href="friends.php" class="nav-item active nav-link">friends |</a>
              <a id="navelem" href="profile.php" class="nav item active nav-link">profile |</a>
							<a id="navelem" href="bookings.php" class="nav item active nav-link">bookings |</a>
							<a id="navelem" href="messages.php" class="nav item active nav-link">messages |</a>
							<a id="navelem" href="index.php" class="nav item active nav-link">logout</a>
          </ul>

          <form id="search" action="search.php" method="post" class="form-inline my-2 mylg-0">
              <input type="search" style="width:300px;" name="search" id="search" class="form-control mr-sm-2" placeholder="                     (•_• ) (•_•) ( •_•)" aria-label="search">
              <button class="btn btn-outline-light" type="submit">search</button>
          </form>
      </div>
  </nav>
	<div class="container">
	<br/><br/>
