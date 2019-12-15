<?php  	include("../include/config.php"); ?>
<?php  	include("../include/session.php"); ?>
<?php  	include("../include/destory.php"); ?>
<?php  	include("include/header_admin.php"); ?>				
							<!-- Content -->
								<section>
<input type="hidden" name="id_t" value='<?php echo $_GET['id'] ?>' />
<?php $id_t = $_GET['id']; ?>
<!--<a href="imprimer.php?id=<?php echo $id_t; ?>" class="logo">Imprimer</a>-->
<a href="requete_update.php?id=<?php echo $id_t; ?>" class="logo">Modifier</a>
<a href="#" class="logo" onclick="return confirm('Vous devez disposer des droits d\'administrateur pour supprimer !')">Supprimer</a>
								
								</section>	
								<section>
									<!-- Elements -->
										<?php
											if(!empty($_POST)) echo "<b>".$msg."<b><a href='index.php'> Retour</a>";
										?>
										<div class="row 200%">
											<div class="12u 12u$(medium)">	
												<div class="row uniform">
														
<div class="4u 12u$(xsmall)">
	تاريخ التوصل </br>		
<?php
$r1 = "select * from `requete` where id='".$_GET['id']."'";	
						$resultas=mysql_query($r1);
						while($la_case=mysql_fetch_array($resultas)) {
							echo"
<input type='date' name='date_start' id='demo-name' value='".$la_case['date_start']."' disabled/> 
								"; } 
?>
</div>
<div class="4u 12u$(xsmall)">
	رقم التسجيل </br>
<?php
$r1 = "select * from `requete` where id='".$_GET['id']."'";	
						$resultas=mysql_query($r1);
						while($la_case=mysql_fetch_array($resultas)) {
							echo"
<input type='text' name='num_requete' id='demo-name' value='".$la_case['num_requete']."' disabled/> 
								"; } 
?>
</div>
<div class="4u 12u$(xsmall)">
	مصدر الوارد </br>
<?php
$r1 = "select * from `requete` where id='".$_GET['id']."'";	
						$resultas=mysql_query($r1);
						while($la_case=mysql_fetch_array($resultas)) {
							echo"
<input type='text' name='type' id='demo-name' value='".$la_case['type']."' disabled/> 
								"; } 
?>
</div>

<div class="6u 12u$(xsmall)">
	المشتكى </br>
<?php
$r1 = "select * from `requete` where id='".$_GET['id']."'";	
						$resultas=mysql_query($r1);
						while($la_case=mysql_fetch_array($resultas)) {
							echo"
<input type='text' name='send' id='demo-name' value='".$la_case['send']."' disabled/> 
								"; } 
?>
</div>

<div class="6u 12u$(xsmall)">
	المشتكى به </br>
<?php
$r1 = "select * from `requete` where id='".$_GET['id']."'";	
						$resultas=mysql_query($r1);
						while($la_case=mysql_fetch_array($resultas)) {
							echo"
<input type='text' name='receive' id='demo-name' value='".$la_case['receive']."' disabled/> 
								"; } 
?>
</div>

<div class="6u 12u$(xsmall)">
	موضوع الشكاية </br>
<?php
$r1 = "select * from `requete` where id='".$_GET['id']."'";	
						$resultas=mysql_query($r1);
						while($la_case=mysql_fetch_array($resultas)) {
							echo"
<input type='text' name='subject' id='demo-name' value='".$la_case['subject']."' disabled/> 
								"; } 
?>
</div>

<div class="3u 12u$(xsmall)">
	الجهة المختصة </br>
<?php
$r1 = "select * from `requete` where id='".$_GET['id']."'";	
						$resultas=mysql_query($r1);
						while($la_case=mysql_fetch_array($resultas)) {
							echo"
<input type='text' name='division' id='demo-name' value='".$la_case['division']."' disabled/> 
								"; } 
?>
</div>

<div class="3u 12u$(xsmall)">
	تاريخ الاحالة على الجهة المختصة </br>
<?php
$r1 = "select * from `requete` where id='".$_GET['id']."'";	
						$resultas=mysql_query($r1);
						while($la_case=mysql_fetch_array($resultas)) {
							echo"
<input type='date' name='date_send_division' id='demo-name' value='".$la_case['date_send_division']."' disabled/> 
								"; } 
?>
</div>

<div class="6u 12u$(xsmall)">
	السلطة المحلية </br>
<?php
$r1 = "select * from `requete` where id='".$_GET['id']."'";	
						$resultas=mysql_query($r1);
						while($la_case=mysql_fetch_array($resultas)) {
							echo"
<input type='text' name='authority' id='demo-name' value='".$la_case['authority']."' disabled/>"; } 
?>
</div>

<div class="6u 12u$(xsmall)">
	رقم تاريخ الاحالة على السلطة المحلية </br>
<?php
$r1 = "select * from `requete` where id='".$_GET['id']."'";	
						$resultas=mysql_query($r1);
						while($la_case=mysql_fetch_array($resultas)) {
							echo"
<input type='text' name='date_send_authority' id='demo-name' value='".$la_case['date_send_authority']."' disabled/> 
								"; } 
?>
</div>

<div class="12u 12u$(xsmall)">
	جواب السلطة المحلية </br>
<?php
$r1 = "select * from `requete` where id='".$_GET['id']."'";	
						$resultas=mysql_query($r1);
						while($la_case=mysql_fetch_array($resultas)) {
							echo"
<textarea type='text' name='local_request' id='demo-name' disabled/>".$la_case['local_request']."</textarea> 
								"; } 
?>
</div>

<div class="12u 12u$(xsmall)">
	جواب الجهة المختصة </br>
<?php
$r1 = "select * from `requete` where id='".$_GET['id']."'";	
						$resultas=mysql_query($r1);
						while($la_case=mysql_fetch_array($resultas)) {
							echo"
<textarea type='text' name='division_request' id='demo-name' disabled/>".$la_case['division_request']."</textarea> 
								"; } 
?>
</div>

<div class="12u 12u$(xsmall)">
	جواب السلطة الاقليمية الموجه الى المصالح المركزية </br>
<?php
$r1 = "select * from `requete` where id='".$_GET['id']."'";	
						$resultas=mysql_query($r1);
						while($la_case=mysql_fetch_array($resultas)) {
							echo"
<textarea type='text' name='provincial_request' id='demo-name' disabled/>".$la_case['provincial_request']."</textarea> 
								"; } 
?>
</div>

<div class="12u 12u$(xsmall)">
	الجواب  الموجه الى المواطن </br>
<?php
$r1 = "select * from `requete` where id='".$_GET['id']."'";	
						$resultas=mysql_query($r1);
						while($la_case=mysql_fetch_array($resultas)) {
							echo"
<textarea type='text' name='mowaten_request' id='demo-name' disabled/>".$la_case['mowaten_request']."</textarea> 
								"; } 
?>
</div>


												
												</div>
											</div>
										</div>
								</section>




						</div>
					</div>
<?php  	include("include/menu.php"); ?>	
			<!--<div class='3u 12u$(xsmall)'>
				<input type='text' id='demo-name' value=".$la_case['commune']." disabled='disabled' />
			</div>-->