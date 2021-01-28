<?php include 'head.php' ?>

	<div class='welcome'>create a new location:</div><br/><br/><br/>

	<div class="container">
		<br/><br/>
		<section id="forms">
			<div class="row">
				<div class="col-12 col-md-6">

				</div>
				<div class="col-12 col-md-12 mt-12 mt-md-12">
					<div class="card">
						<div class="card-header">new location</div>
						<div class="card-body">
							<form action="createscript.php" method="POST" enctype="multipart/form-data">
								<fieldset>
									<div class="row">
										<div class="col-12 col-lg-6">
											<label for="regName">name:</label>
											<input type="text" id="lName" class="form-control" placeholder="lessor manor" name="lname">
										</div>
										<div class="col-12 col-lg-6">
											<label for="regSurname">address:</label>
											<input type="text" id="address" class="form-control" placeholder="123 lessor street" name="address">
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-12 col-lg-6">
											<label for="pType">type:</label>
											<select name="type">
										    <option value="desktop">appartment</option>
										    <option value="mobile">house</option>
										    <option value="web">cottage</option>
										    <option value="framework">garden flat</option>
												<option value="library">room</option>
										  </select>
										</div>
										<div class="col-12 col-lg-6">
											<label for="regBirthDate">description:</label>
											<input type="text" id="pVer" class="form-control" name="description">
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-12 col-lg-6">
											<label for="regEmail">display picture:</label>
											<input type="text" name="dpic" id="dpic">
										</div>
										<div class="col-12 col-lg-6">
											<label for="regEmail">more pictures:</label>
											<input type="file" name="projfiles" id="pictures">
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-12">
											<button type="submit" class="btn btn-info">create <i class="fa fa-dot-circle"></i></button>
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
	</div>
</body>
</html>
