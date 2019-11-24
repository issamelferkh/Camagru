<?php 
	session_start();
if (!$_SESSION['role'])  header('Location:../index.php');?>
<?php include ("../include/connexion.php") ; ?>
<?php include ("../include/header.php") ; ?>

		<?php 
		$id=$_SESSION['id_user'];
		//require_once ("../../include/connexion.php") ;
$req = "select * from application where id_app in (select id_app from definition where id_user=$id)";
		$resultas=mysql_query($req);
		echo "<section>
				<header class='major'>
						<h2>Acceuil</h2>
				</header>
				<div class=\"features\">";
		while($row=mysql_fetch_array($resultas)) {
			
		echo "
				
					<article>
						<div class=\"content\">
							<center>
							<a href='http://localhost/".$row[3]."'>
								<div class='hover14 column'>
									<div>
										<figure>
											<img class='pica' src='".$row[2]."' ></img>
										</figure>
											<span>".$row[1]."</span>
									</div>
								</div>
							</a>
							</center>
						</div>
					</article>
				";
		}
	?>
	<?php
	$req = "select * from application where id_app  not in (select id_app from definition where id_user=$id)";
		$resultas=mysql_query($req);
		while($row=mysql_fetch_array($resultas)) {
			
		echo "
				
					<article>
						<div class=\"content\">
							<center>
							<a href='#'>
								<div class='hover08 column'>
									<div width='300px'>
										<figure>
											<img class='pica' src='".$row[2]."' ></img>
										</figure>
											<span>".$row[1]."</span>
									</div>
								</div>
							</a>
							</center>
						</div>
					</article>
				";
		}
				echo"</div>";
		echo "</section>";
	?>
						</div>
						
				</div>


		
			<script src="../app/assets/js/breakpoints.min.js"></script>
			<script src="../app/assets/js/main.js"></script>


</div>



</body>
</html>