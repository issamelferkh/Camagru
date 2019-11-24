<?php  	include("../include/config.php"); ?>
<?php  	include("../include/session.php"); ?>
<?php  	include("../include/destory.php"); ?>
<?php  	include("include/header_admin.php"); ?>				
							<!-- Content -->
								<section>
									<!-- Elements -->
<form enctype="multipart/form-data" action="requete_stat.php" method="POST" name="projet_add">
	<div class="row uniform">
		<div class="3u 12u$(xsmall)">
			Date Debut </br>		
			<input type="date" name="date1" id="demo-name" required />
		</div>															
		<div class="3u 12u$(xsmall)">
			Date Fin </br>		
			<input type="date" name="date2" id="demo-name" required />
		</div>
		<div class="3u 12u$(xsmall)">
			الجهة المختصة </br>
			<div class="select-wrapper">
				<select name="div" id="Date de Fin </br>demo-category">
		<option type="text" class="form-control1"  value="Tous" selected>الجميع</option>
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
			<ul class="actions">
				<li><input type="submit" value="Soumettre la demande" class="special" /></li>
			</ul>
		</div> 
	</div>
</form>
										<div class='row 200%'>
											<div class='12u 12u$(medium)'>
												<table id="" class="display">
													<thead>
														<tr>
<th><center><h4>عدد الشكايات في طور البحث</h4></center></th>
<th><center><h4>عدد الشكايات التي تمت الاجابة عنها</h4></center></th>
<th><center><h4>عدد الشكايات الواردة على الجهة المختصة</h4></center></th>
<th><center><h4>مصدر الوارد</h4></center></th>
														</tr>
													</thead>
													<tbody>
														<tr>

<?php 
if(!empty($_POST))
{
	if ($_POST['div'] == 'Tous')
	{
		$r1 = "SELECT COUNT(type) AS nbr, count(case mowaten_request when '' then null else 1 end) AS rep, count(if (mowaten_request = '', 1 , null)) AS not_rep, `type` from `requete` where `date_start` BETWEEN '".$_POST['date1']."' AND '".$_POST['date2']."' GROUP BY type ";

		$r2 = "SELECT SUM(nbr) AS t_nbr, SUM(rep) AS t_rep, SUM(not_rep) AS t_not_rep FROM (".$r1.") mon_toto";
		$resultas=mysql_query($r1);
		$resultas2=mysql_query($r2);
		$cpt=0;
		$msg = "";
		while($la_case=mysql_fetch_array($resultas)) 
		{
			$msg = $msg."							
				<tr>
					<td><center>".$la_case['not_rep']."</center></td>
					<td><center>".$la_case['rep']."</center></td>
					<td><center>".$la_case['nbr']."</center></td>
					<td><center><h4>".$la_case['type']."</center></h4></td>
				</tr>					
					";
			$cpt++;
		}
		if($cpt!= 0) echo $msg;

		while($la_case2=mysql_fetch_array($resultas2))
		{
			echo"							
				<tr>
<td><a href='requete_stat_detail.php?date1=".$_POST['date1']."&date2=".$_POST['date2']."&req=t_not_rep'><center><h4>".$la_case2['t_not_rep']."</h4></center></a></td>
<td><a href='requete_stat_detail.php?date1=".$_POST['date1']."&date2=".$_POST['date2']."&req=t_rep'><center><h4>".$la_case2['t_rep']."</h4></center></a></td>
<td><a href='requete_stat_detail.php?date1=".$_POST['date1']."&date2=".$_POST['date2']."&req=t_nbr'><center><h4>".$la_case2['t_nbr']."</h4></center></a></td>
<td><center><h4>المجموع</h4></center></td>
				</tr>					
					";
		}
	}
	if ($_POST['div'] != 'Tous')
	{	
		$r1 = "SELECT COUNT(type) AS nbr, count(case mowaten_request when '' then null else 1 end) AS rep, count(if (mowaten_request = '', 1 , null)) AS not_rep, `type` from `requete` where `division` = '".$_POST['div']."' AND `date_start` BETWEEN '".$_POST['date1']."' AND '".$_POST['date2']."' GROUP BY type ";

		$r2 = "SELECT SUM(nbr) AS t_nbr, SUM(rep) AS t_rep, SUM(not_rep) AS t_not_rep FROM (".$r1.") mon_toto";
		$resultas=mysql_query($r1);
		$resultas2=mysql_query($r2);
		$cpt=0;
		$msg = "";
		while($la_case=mysql_fetch_array($resultas)) 
		{
			$msg = $msg."							
				<tr>
					<td><center>".$la_case['not_rep']."</center></td>
					<td><center>".$la_case['rep']."</center></td>
					<td><center>".$la_case['nbr']."</center></td>
					<td><center><h4>".$la_case['type']."</h4></center></td>
				</tr>					
					";
			$cpt++;
		}
		if($cpt!= 0) echo $msg;

		while($la_case2=mysql_fetch_array($resultas2))
		{
			echo"							
				<tr>
					<td><a href='requete_stat_detail.php?date1=".$_POST['date1']."&date2=".$_POST['date2']."&req=t_not_rep&division=".$_POST['div']."'><center><h4>".$la_case2['t_not_rep']."</h4></center></a></td>
					<td><a href='requete_stat_detail.php?date1=".$_POST['date1']."&date2=".$_POST['date2']."&req=t_rep&division=".$_POST['div']."'><center><h4>".$la_case2['t_rep']."</h4></center></a></td>
					<td><a href='requete_stat_detail.php?date1=".$_POST['date1']."&date2=".$_POST['date2']."&req=t_nbr&division=".$_POST['div']."'><center><h4>".$la_case2['t_nbr']."</center></h4></a></td>
					<td><center><h4>المجموع</h4></center></td>
				</tr>					
					";
		}
	}		
}
?>

													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</section>
						</div>
					</div>
<?php  	include("include/menu_table.php"); ?>