<?php include 'head.php';
?>
	<div class="container">
		<br/><br/>
		<section id="forms">
			<div class="row">
				<div class="col-12 col-md-6">

				</div>
				<div class="col-12 col-md-12 mt-12 mt-md-12">
					<div class="card">
						<div class="card-header">compose:</div>
						<div class="card-body">
							<form action="sendMessage.php" method="POST" enctype="multipart/form-data">
								<fieldset>

									<div class="row">
										<div class="col-12 col-lg-12">
											<input type="text" id="recip" class="form-control" placeholder="to" name="email">
										</div>
									</div>

									<div class="row">
										<div class="col-12 col-lg-12">
											<input type="text" id="info" class="form-control" placeholder="Message" name="message">
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-12">
											<button type="submit" class="btn btn-dark">send <i class="fa fa-angle-right"></i></button>
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
