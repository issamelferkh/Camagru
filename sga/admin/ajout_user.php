<?php include ("../include/connexion.php") ; ?>
<?php include ("../include/header.php") ; ?>


<section>
	<div class="row 200%" >
		<div class="12u 12u$(medium)">
			<form enctype="multipart/form-data" method="POST" action="setting_user.php" >
				<table >
				<div class="row uniform">
				<tr><td>
				<div class="4u 12u$(xsmall)"> Nom: <br/></td>
						<td><input type="text" name="nom" required/></td>
				</div></tr>
				<tr><td>
				<div class="4u 12u$(xsmall)"> Prenom: <br/></td>
						<td><input type="text" name="prenom"  required/></td>
				<div></tr>
					<tr><td>
				<div class="4u 12u$(xsmall)"> Division: <br/></td>
						<td><input type='text' name="division"  required/></td>
				</div></tr>
				<tr><td>
				<div class="4u 12u$(xsmall)"> Service: <br/></td>
						<td><input type='text' name="service" required/></td>
				</div></tr>
				<tr><td>
				<div class="4u 12u$(xsmall)"> Login: <br/></td>
						<td><input type='text' name="login"  required/></td>
				</div></tr>
				<tr><td>
				<div class="4u 12u$(xsmall)"> password: <br/></td>
						<td><input type='password' name="password" required/></td>
				</div></tr>
				<tr><td>
				<div class="4u 12u$(xsmall)"> Role: <br/></td>
						<td>
							<input type="radio" name="lst" value="1" id="ch1" /> <label for="ch1">Admin</label>
    						<input type="radio" name="lst" value="2" id="ch2" /> <label for="ch2">User</label>
    					</td>
				</div></tr>

				<tr><td colspan="2"><div class="12u$">
					<ul class="actions">
						<li><input type="submit" name="ajouter" value="ajouter" class="special" /></li>
						<li><input type="reset" value="Effacer" class="special" /></li>
					</ul>
				</div> </td></tr>
			</table>
			</form>
		</div>
	</div>
</section>
</div>
						
				</div>
	<?php include ("../include/menu.php") ; ?>
						</div>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>