<?php  	include("../include/config.php"); ?>
<?php  	include("../include/session.php"); ?>
<?php  	include("../include/destory.php"); ?>
<?php
	if(!empty($_POST)){

$r1 = " UPDATE `requete` SET 
`division_request`='".mysql_escape_string($_POST['division_request'])."',
`mowaten_request`='".mysql_escape_string($_POST['mowaten_request'])."',
`authority`='".mysql_escape_string($_POST['authority'])."',
`date_send_authority`='".mysql_escape_string($_POST['date_send_authority'])."',
`local_request`='".mysql_escape_string($_POST['local_request'])."',
`provincial_request`='".mysql_escape_string($_POST['provincial_request'])."' 
where id='".$_POST['id']."'" ;

		$resultas=mysql_query($r1);
		// echo $r1;
		header('Location: index.php');
	}
?>				
<?php  	include("include/header_admin.php"); ?>				
							<!-- Content -->
								<section>
									<!-- Elements -->
									<div class="row 200%">
										<div class="12u 12u$(medium)">	
											<form enctype="multipart/form-data" action="requete_update.php" method="POST">
												<div class="row uniform">
<?php
$r1 = "select * from `requete` where id='".$_GET['id']."'";	
						$resultas=mysql_query($r1);
						while($la_case=mysql_fetch_array($resultas)) {
							echo"
<input type='hidden' name='id' value='".$la_case['id']."' /> 
								"; } 
?>

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
	<div class="select-wrapper">
		<select name="authority" id="Date de Fin </br>demo-category">
<?php
$r1 = "select * from `requete` where id='".$_GET['id']."'";	
						$resultas=mysql_query($r1);
						while($la_case=mysql_fetch_array($resultas)) {
							echo"
<option type='text' class='form-control1' value='".$la_case['authority']."' selected>".$la_case['authority']."</option>
<option type='text' class='form-control1' value='باشوية خريبكة'>باشوية خريبكة</option>
<option type='text' class='form-control1' value='باشوية وادي زم'>باشوية وادي زم</option>
<option type='text' class='form-control1' value='باشوية ابي الجعد'>باشوية ابي الجعد</option>
<option type='text' class='form-control1' value='باشوية حطان'>باشوية حطان</option>
<option type='text' class='form-control1' value='باشوية بوجنيبة'>باشوية بوجنيبة</option>
<option type='text' class='form-control1' value='دائرة خريبكة'>دائرة خريبكة</option>
<option type='text' class='form-control1' value='دائرة وادي زم'>دائرة وادي زم</option>
<option type='text' class='form-control1' value='دائرة ابي الجعد'>دائرة ابي الجعد</option>
								"; } 
?>
		</select>
	</div>
</div>

<div class="6u 12u$(xsmall)">
	رقم تاريخ الاحالة على السلطة المحلية </br>
<?php
$r1 = "select * from `requete` where id='".$_GET['id']."'";	
						$resultas=mysql_query($r1);
						while($la_case=mysql_fetch_array($resultas)) {
							echo"
<input type='text' name='date_send_authority' id='demo-name' value='".$la_case['date_send_authority']."'  /> 
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
<textarea type='text' name='local_request' id='demo-name'  />".$la_case['local_request']."</textarea> 
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
<textarea type='text' name='division_request' id='demo-name'  />".$la_case['division_request']."</textarea> 
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
<textarea type='text' name='provincial_request' id='demo-name'  />".$la_case['provincial_request']."</textarea> 
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
<textarea type='text' name='mowaten_request' id='demo-name'  />".$la_case['mowaten_request']."</textarea> 
								"; } 
?>
</div>

<div class="12u$">
	<ul class="actions">
		<li><input type="submit" value="Modifier Requete" class="special" /></li>
	</ul>
</div> 
												</div>
											</form>
										</div>
									</div>
								</section>
						</div>
					</div>
<?php  	include("include/menu.php"); ?>