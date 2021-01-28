<?php
//destroy session on splash
if (!isset($_SESSION))
  {
    session_start();
  }
$_SESSION = array();
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(),'',time()-42000,
        $params["path"],$params["domain"],
        $params["secure"],$params["httponly"]
    );
}
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title>lessor</title>
	<meta charset="utf-8" />
	<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" /> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style/style.css" />

<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="img/fav.png"/>
	<link rel="shortcut icon" type="image/png" href="img/fav.png"/>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 	crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

</head>
<body>
  	<div class="container">
	    <img class="img-fluid" src="img/logo.png" alt="oops">
      <div class="text-center">
	<div class="vc">holiday accommodation leasing</div>
      </div>
		<br/><br/>
		<section id="forms">
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="card">
						<div class="card-header">login</div>
						<div class="card-body">
							<form action="login.php" method="POST">
								<fieldset>
									<div class="row">
										<div class="col-12 col-lg-6">
											<label for="loginEmail">email-address:</label>
											<input type="email" id="loginEmail" class="form-control" placeholder="me@less.com" name="email">
										</div>
										<div class="col-12 col-lg-6">
											<label for="loginPass">password:</label>
											<input type="password" id="loginPass" class="form-control" placeholder="(ಠ__ಠ)" name="pass">
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-12">
											<button type="submit" class="btn btn-info">login <i class="fa fa-dot-circle"></i></button>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 mt-3 mt-md-0">
					<div class="card">
						<div class="card-header">register</div>
						<div class="card-body">
							<form action="register.php" method="POST">
								<fieldset>
									<div class="row">
										<div class="col-12 col-lg-6">
											<label for="regName">first name:</label>
											<input type="text" id="regName" class="form-control" placeholder="name" name="fname">
										</div>
										<div class="col-12 col-lg-6">
											<label for="regSurname">last name:</label>
											<input type="text" id="regSurname" class="form-control" placeholder="surname" name="lname">
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-12 col-lg-6">
											<label for="regEmail">email-address:</label>
											<input type="email" id="regEmail" class="form-control" placeholder="me@less.com" name="email">
										</div>
										<div class="col-12 col-lg-6">
											<label for="regBirthDate">date-of-birth:</label>
											<input type="date" id="regBirthDate" class="form-control" name="date">
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-12 col-lg-6">
											<label for="regEmail">create password:</label>
											<input type="password" id="pass1" class="form-control" placeholder="(ಠ__ಠ)" name="pass">
										</div>
										<div class="col-12 col-lg-6">
											<label for="regEmail">confirm password:</label>
											<input type="password" id="pass2" class="form-control" placeholder="(ಠ__ಠ)">
										</div>
                    <div class="col-12 col-lg-6">
											<label for="regNumber">contact number:</label>
											<input type="text" id="number" class="form-control" placeholder="only for interested lessees" name="number">
										</div>
                    <div class="col-12 col-lg-12">
											<label for="ppic">profile picture:</label>
										<label>todo</label>
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-12">
											<button type="submit" class="btn btn-info">register <i class="fa fa-dot-circle"></i></button>
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
</body>
</html>
