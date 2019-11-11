
<?php include ("../include/connexion.php") ; ?>
<?php include ("../include/header.php") ; ?>


<section>
	<div class="row 200%" >
		<div class="12u 12u$(medium)">
			<form enctype="multipart/form-data" method="POST" action="setting.php" name="prjt_add">
				<table >
				<div class="row uniform">
				<tr><td>
				<div class="4u 12u$(xsmall)"> Nom: <br/></td>
						<td><input type="text" name="nom" required/></td>
				</div></tr>
				<tr><td>
				<div class="4u 12u$(xsmall)"> Logo: <br/></td>
						<td><input type="file" name="fileToUpload" id="fileToUpload" required/></td>
				<div></tr>
					<tr><td>
				<div class="4u 12u$(xsmall)"> Path: <br/></td>
						<td><input type='text' name="path" id="path" required/></td>
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
