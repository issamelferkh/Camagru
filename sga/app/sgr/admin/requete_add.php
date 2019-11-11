<?php  	include("../include/config.php"); ?>
<?php  	include("../include/session.php"); ?>
<?php  	include("../include/destory.php"); ?>
<?php
	if(!empty($_POST)){

		$sql  = "INSERT INTO `requete` (`date_start`,`num_requete`,`type`,`authority`,`send`,`receive`,`subject`,`division`,`date_send_division`,`division_request`,`local_request`,`provincial_request`,`date_send_authority`,`mowaten_request`)
		VALUES ('".mysql_escape_string($_POST['date_start'])."',
		 '".mysql_escape_string($_POST['num_requete'])."',
		 '".mysql_escape_string($_POST['type'])."',
		 '".mysql_escape_string($_POST['authority'])."',
		 '".mysql_escape_string($_POST['send'])."',
		 '".mysql_escape_string($_POST['receive'])."',
		 '".mysql_escape_string($_POST['subject'])."',
		 '".mysql_escape_string($_POST['division'])."',
		 '".mysql_escape_string($_POST['date_send_division'])."',
		 '".mysql_escape_string($_POST['division_request'])."',
		 '".mysql_escape_string($_POST['local_request'])."',
		 '".mysql_escape_string($_POST['provincial_request'])."',
		 '".mysql_escape_string($_POST['date_send_authority'])."',
		 '".mysql_escape_string($_POST['mowaten_request'])."')";

		$resultas=mysql_query($sql);
		$msg=" Votre Requete a bien été enregistré ! Merci d'avoir utilisé notre Application.";
	}
?>				
<?php  	include("include/header_admin.php"); ?>				
							<!-- Content -->
								<section>
									<!-- Elements -->
										<?php
											if(!empty($_POST)) echo "<b>".$msg."<b><a href='index.php'> Retour</a>";
										?>
										<div class="row 200%">
											<div class="12u 12u$(medium)">	
													<form enctype="multipart/form-data" action="requete_add.php" method="POST" name="projet_add">
														<div class="row uniform">

<div class="4u 12u$(xsmall)">
	تاريخ التوصل </br>		
	<input type="date" name="date_start" id="demo-name" required/>
</div>															
<div class="4u 12u$(xsmall)">
	رقم التسجيل </br>
	<input type="text" name="num_requete" id="demo-name" required/>
</div>
<div class="4u 12u$(xsmall)">
	مصدر الوارد </br>
	<div class="select-wrapper">
		<select name="type" id="Date de Fin </br>demo-category" required>
<option type="text" class="form-control1"  value="" >مصدر الوارد</option>
<option type="text" class="form-control1"  value="محلي" >محلي</option>
<option type="text" class="form-control1"  value="جهوي" >جهوي</option>
<option type="text" class="form-control1"  value="مركزي" >مركزي</option>
<option type="text" class="form-control1"  value="إلكتروني" >إلكتروني</option>
		</select>
	</div>
</div>
<div class="6u 12u$(xsmall)">
	المشتكى </br>
	<input type="text" name="send" id="demo-name" required/>
</div>
<div class="6u 12u$(xsmall)">
	المشتكى به </br>
	<input type="text" name="receive" id="demo-name" required/>
</div>
<div class="6u 12u$(xsmall)">
	موضوع الشكاية </br>
	<input type="text" name="subject" id="demo-name" required/>
</div>
<div class="3u 12u$(xsmall)">
	الجهة المختصة </br>
	<div class="select-wrapper">
		<select name="division" id="Date de Fin </br>demo-category" required>
<option type="text" class="form-control1"  value="" >الجهة المختصة</option>
<option type="text" class="form-control1"  value="SG" >SG</option>
<option type="text" class="form-control1"  value="DAI" >DAI</option>
<option type="text" class="form-control1"  value="DRHMG" >DRHMG</option>
<option type="text" class="form-control1"  value="DAS" >DAS</option>
<option type="text" class="form-control1"  value="DCL" >DCL</option>
<option type="text" class="form-control1"  value="DAR" >DAR</option>
<option type="text" class="form-control1"  value="DBM" >DBM</option>
<option type="text" class="form-control1"  value="DAE" >DAE</option>
<option type="text" class="form-control1"  value="DUE" >DUE</option>
<option type="text" class="form-control1"  value="DE" >DE</option>
<option type="text" class="form-control1"  value="PN" >PN</option>
<option type="text" class="form-control1"  value="SSIC" >SSIC</option>
<option type="text" class="form-control1"  value="AI" >Audit Interne</option>
		</select>
	</div>
</div>
<div class="3u 12u$(xsmall)">
	تاريخ الاحالة على الجهة المختصة </br>
	<input type="date" name="date_send_division" id="demo-name" required/>
</div>
<div class="6u 12u$(xsmall)">
	السلطة المحلية </br>
	<div class="select-wrapper">
		<select name="authority" id="Date de Fin </br>demo-category">
<option type="text" class="form-control1"  value="" >السلطة المحلية</option>
<option type="text" class="form-control1"  value="باشوية خريبكة" >باشوية خريبكة</option>
<option type="text" class="form-control1"  value="باشوية وادي زم" >باشوية وادي زم</option>
<option type="text" class="form-control1"  value="باشوية ابي الجعد" >باشوية ابي الجعد</option>
<option type="text" class="form-control1"  value="باشوية حطان" >باشوية حطان</option>
<option type="text" class="form-control1"  value="باشوية بوجنيبة" >باشوية بوجنيبة</option>
<option type="text" class="form-control1"  value="دائرة خريبكة" >دائرة خريبكة</option>
<option type="text" class="form-control1"  value="دائرة وادي زم" >دائرة وادي زم</option>
<option type="text" class="form-control1"  value="دائرة ابي الجعد" >دائرة ابي الجعد</option>
		</select>
	</div>
</div>
<div class="6u 12u$(xsmall)">
	رقم تاريخ الاحالة على السلطة المحلية  </br>
	<input type="text" name="date_send_authority" id="demo-name"/>
</div>
<div class="12u 12u$(xsmall)">
	جواب السلطة المحلية </br>
	<textarea type="text" name="local_request" id="demo-name"></textarea>
</div>
<div class="12u 12u$(xsmall)">
	جواب الجهة المختصة </br>
	<textarea type="text" name="division_request" id="demo-name"></textarea>
</div>
<div class="12u 12u$(xsmall)">
	جواب السلطة الاقليمية الموجه الى المصالح المركزية </br>
	<textarea type="text" name="provincial_request" id="demo-name"></textarea>
</div>

<div class="12u 12u$(xsmall)">
	الجواب  الموجه الى المواطن </br>
	<textarea type="text" name="mowaten_request" id="demo-name"></textarea>
</div>
<div class="12u$">
	<ul class="actions">
		<li><input type="submit" value="Ajouter Requete" class="special" /></li>
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