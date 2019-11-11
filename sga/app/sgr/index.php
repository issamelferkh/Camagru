<?php  	include("include/config.php"); ?>
<?php  	include("include/header.php"); ?>

							<!-- Content -->
								<section>
									<center>
									<!-- Elements -->
										<h2 id="elements">Bienvenue sur SGR</h2>
										<div class="row 200%">
											<div class="12u$ 12u$(medium)">
												<!-- Form -->
													<h3>Identifiez Vous</h3>
<form method="POST" action="login.php">
														<div class="row uniform">
															<div class="12u$">
<input type="text" name="login" id="demo-name" value="<?php if (isset($_POST['login'])) echo htmlentities(trim($_POST['login'])); ?>" placeholder="Login" required />
															</div>
															<div class="12u$">
<input type="password" name="password" id="demo-name" value="<?php if (isset($_POST['password'])) echo htmlentities(trim($_POST['password'])); ?>" placeholder="Password" required />
															</div>
															<div class="12u$">
																<ul class="actions">
						<li><input type="submit" name="connexion" value="Connexion" class="special" /></li>
																</ul>
															</div>
														</div>
</form>
											</div>
										</div>
									</center>
								</section>

						</div>
					</div>

				<!-- Sidebar -->


			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>