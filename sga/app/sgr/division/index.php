<?php  	include("../include/config.php"); ?>
<?php  	include("../include/session.php"); ?>
<?php  	include("../include/destory.php"); ?>
<?php  	include("include/header_admin.php"); ?>				
							<!-- Content -->
								<section>
									<!-- Elements -->
										<div class='row 200%'>
											<div class='12u 12u$(medium)'>
												<table id="example" class="display">
													<thead>
														<tr>
<th style="display:none;"><h4>الجواب  الموجه الى المواطن</h4></th>
<th style="display:none;"><h4>جواب السلطة الاقليمية الموجه الى المصالح المركزية</h4></th>
<th style="display:none;"><h4>جواب الجهة المختصة</h4></th>
<th><center><h4>جواب السلطة المحلية</h4></center></th>
<th><center><h4>رقم تاريخ الاحالة على السلطة المحلية</h4></center></th>
<th><center><h4>السلطة المحلية</h4></center></th>
<th><center><h4>تاريخ الاحالة </h4></center></th>
<th style="display:none;"><h4>الجهة المختصة</h4></th>
<th style="display:none;"><h4>موضوع الشكاية</h4></th>
<th style="display:none;"><h4>المشتكى به</h4></th>
<th style="display:none;"><h4>المشتكى</h4></th>
<th><center><h4>مصدر الوارد</h4></center></th>
<th><center><h4>رقم التسجيل</h4></center></th>
<th><center><h4>تاريخ التوصل</h4></center></th>
														</tr>
													</thead>
													<tbody>				
				<?php 
$r1 = "select * from `requete` where `division` like '".$_SESSION['division']."' ";
$resultas=mysql_query($r1);
$cpt=0;
$msg = "";
while($la_case=mysql_fetch_array($resultas)) 
	{
	$msg = $msg."
														<tr>
<td style='display:none;'><a href='requete_detail.php?id=".$la_case['id']."'>".$la_case['mowaten_request']."</a></td>
<td style='display:none;'><a href='requete_detail.php?id=".$la_case['id']."'>".$la_case['provincial_request']."</a></td>
<td style='display:none;'><a href='requete_detail.php?id=".$la_case['id']."'>".$la_case['division_request']."</a></td>
<td><center><a href='requete_detail.php?id=".$la_case['id']."'>".$la_case['local_request']."</a></center></td>
<td><center><a href='requete_detail.php?id=".$la_case['id']."'>".$la_case['date_send_authority']."</a></center></td>
<td><center><a href='requete_detail.php?id=".$la_case['id']."'>".$la_case['authority']."</a></center></td>

<td><center><a href='requete_detail.php?id=".$la_case['id']."'>".$la_case['date_send_division']."</a></center></td>
<td  style='display:none;'><a href='requete_detail.php?id=".$la_case['id']."'>".$la_case['division']."</a></td>
<td style='display:none;'><a href='requete_detail.php?id=".$la_case['id']."'>".$la_case['subject']."</a></td>
<td style='display:none;'><a href='requete_detail.php?id=".$la_case['id']."'>".$la_case['receive']."</a></td>
<td style='display:none;'><a href='requete_detail.php?id=".$la_case['id']."'>".$la_case['send']."</a></td>
<td><center><a href='requete_detail.php?id=".$la_case['id']."'>".$la_case['type']."</a></center></td>
<td><center><a href='requete_detail.php?id=".$la_case['id']."'>".$la_case['num_requete']."</a></center></td>
<td><center><a href='requete_detail.php?id=".$la_case['id']."'>".$la_case['date_start']."</a></center></td>
														</tr>					
									";
							$cpt++;
						}
						if($cpt!= 0) echo $msg;			
				?>
													</tbody>
												</table>
											</div>
										</div>
								</section>
						</div>
					</div>
<?php  	include("include/menu_table.php"); ?>