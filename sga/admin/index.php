	<?php 
	//session_start();
//if (!$_SESSION['role'])  header('Location:../index.php');?>
<?php //include ("../include/connexion.php") ; ?>
<?php include ("../include/header.php") ; ?>

	<?php 

		$req = "select * from application";
		$resultas=mysql_query($req);
		echo "<section>
				<header class='major'>
						<h2>Acceuil</h2>
						<a data-id= data-nom= data-logo= data-path= href='ajout.php' >
							<img src='../images/add.png' width='50px' height='30px' />
						</a>
				</header>
				<div class=\"features\">";
		while($row=mysql_fetch_array($resultas)) {
			
			echo "
				
					<article>
						<div class=\"content\">
							<div>
							<h3>
							<center>
							<div>
							<a data-id=".$row[0]." data-nom=".$row[1]." data-logo=".$row[2]." data-path=".$row[3]." href='#myModal' class='pull-left btn sub1' data-toggle='modal' data-target='#myModal'>
							<img src='../images/st.png' width='20px' height='20px' border-radius='50%'  />
							</a>
							
							<a href='http://localhost/".$row[3]."'>
								<div class='hover14 column'>
									<div style=' left:-90px;'>
										<figure>
											<img class='pica' src='".$row[2]."' / >
										</figure>
											<span>".$row[1]."</span>
								</a>
										</div>
									</div>
									</div>
							</center>
							</h3>
							</div>
						</div>
					</article>
				";
		}
				echo"</div>";
		echo "</section>";
	?>
						</div>
						
				</div>


<div class="modal fade" id="myModal">
	<div class="modal-dialog">
    	<div class="modal-content title1">
    		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        			<h4 >Modifier</h4>
    		</div>
			<div class="modal-body">
		        <form class="form-horizontal" action="setting.php" method="POST" enctype="multipart/form-data">
		        	<fieldset>

		        		<div class="form-group">
							<label class="col-md-3 control-label" for="id"></label>  
							<div class="col-md-6">
		  						<input id="id" name="id"  class="form-control input-md" type="hidden">
		    				</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label" for="id"></label>  
		  					<div class="col-md-6">
		  						<input name="img" id="img" placeholder="Selectionner le logo"  class="form-control input-md" type="hidden">
							</div>
						</div>

						<div class="form-group">
		  					<label class="col-md-3 control-label" for="logo"></label>
		   					<div class="col-md-6" id="yabanner"></div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label" for="logo"></label>
		  					<div class="col-md-6">
			    				<input name="fileToUpload" id="fileToUpload" placeholder="Selectionner le logo" class="form-control input-md" type="file">
			    			</div>
		    				<div class="col-md-6" id="yabanner"></div>
		 				</div>

						<div class="form-group">
		  					<label class="col-md-3 control-label" for="nom"></label>  
		  					<div class="col-md-6">
		  						<input id="nom" name="nom" placeholder="Entrer Le nom de l'application" class="form-control input-md" type="text">
		  					</div>
						</div>

						<div class="form-group">
		  					<label class="col-md-3 control-label" for="path"></label>
		  					<div class="col-md-6">
		    					<input id="path" name="path" placeholder="Selectionner le chemin de votre application " class="form-control input-md" type="text">
		    				</div>
						</div>

      		<div class="modal-footer">

        		<button type="submit" name="modifier" class="btn btn-primary">Modifier </button>

       			<button type="reset" class="btn btn-primary">annuler </button>

        		<button type="submit" name="supprimer" class="btn btn-default" onclick="if(window.confirm('Voulez-vous vraiment supprimer ?')){return true;}else{return false;}">Supprimer</button>
        	</div>
					</fieldset>
				</form>
    		</div>
    	</div>
 	</div>
</div>


	<?php include ("../include/menu.php") ; ?>
		
			<script src="../app/assets/js/breakpoints.min.js"></script>
			<script src="../app/assets/js/main.js"></script>


</div>



</body>
</html>