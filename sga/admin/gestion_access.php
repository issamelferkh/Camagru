
<?php include ("../include/connexion.php") ; ?>
<?php include ("../include/header.php") ; ?>

		<?php 
		/*echo "<a data-id= data-nom= data-logo= data-path= href='#myModal' class='pull-righ btn sub1' data-toggle='modal' data-target='#myModal'>
							<img src='../images/add.png' width='50px' height='30px'  '/>
							</a>";*/
		//require_once ("../../include/connexion.php") ;
		$req = "select u.id_user,app.id_app,u.nom,app.nom from utilisateur u,definition d,application app where u.id_user=d.id_user and d.id_app=app.id_app";
		$resultas=mysql_query($req);
		echo "<section>
				<header class='major'>
						<h2>Acceuil</h2>
						<a data-id= data-nom= data-logo= data-path= href='#myModal' class='pull-right btn sub1' data-toggle='modal' data-target='#myModal' >
							<img src='../images/add.png' width='50px' height='30px' />
						</a>
				</header>
				<div class='..features'>
				<table><th>User</th><th>Application</th><th>Setting</th>";
		while($row=mysql_fetch_array($resultas)) {
			echo "<tr><td>".$row[2]."</td><td>".$row[3]."</td><td>
			      <a data-iduser=".$row[0]." data-idapp=".$row[1]." href='#myModal_modifier' class='pull-righ btn sub1' data-toggle='modal' data-target='#myModal_modifier'>
							<img src='../images/st.png' width='20px' height='20px' />
							</a></td></tr>";
		}
				echo"</table>";
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
        			<h4 >Definir Access pour un utilisateur</h4>
    		</div>
			<div class="modal-body">
		        <form class="form-horizontal" action="setting_access.php" method="POST" enctype="multipart/form-data">
		        	<fieldset>

						<div class="form-group">
							<label class="col-md-3 control-label" for="user"></label>
		  					<div class="col-md-6">
			    				<select name="usera">
			    					<?php
			    						$req = "select * from utilisateur";
			    						$resultas=mysql_query($req);
			    						while($row=mysql_fetch_array($resultas)) 
			    						{
			    							echo "<option value=".$row[0].">".$row[1]." ".$row[2]."</option>";
			    					    }
                                    ?>
			    				</select>
			    			</div>
		 				</div>

						<div class="form-group">
		  					<label class="col-md-3 control-label" for="application"></label>
		  					<div class="col-md-6">  
		  					  	<select name='appaj' id='appaj' onchange='go()'>
			    					<option value="">-- application --</option>
			    					<?php
			    						$req = "select * from application";
			    						$resultas=mysql_query($req);
			    						while($row=mysql_fetch_array($resultas)) 
			    						{
			    							echo "<option value=".$row[0].">".$row[1]."</option>";
			    					    }
                                    ?>
			    				</select>
			    			</div>
						</div>


      		<div class="modal-footer">

        		<button type="submit" name="ajouter" class="btn btn-primary" onclick="if(window.confirm('Voulez-vous vraiment Attribuer cet access a cet Utilisateur?')){return true;}else{return false;}">Ajouter </button>

       			<button type="reset" class="btn btn-primary">annuler </button>

        	</div>
					</fieldset>
				</form>
    		</div>
    	</div>
 	</div>
</div>


 <div class="modal fade" id="myModal_modifier">
	<div class="modal-dialog">
    	<div class="modal-content title1">
    		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        			<h4 >Modifier</h4>
    		</div>
			<div class="modal-body">
		        <form class="form-horizontal" action="setting_access.php" method="POST" enctype="multipart/form-data">
		        	<fieldset>

		        		<div class="form-group">
							<label class="col-md-3 control-label" for="iduser"></label>  
							<div class="col-md-6">
		  						<input id="iduser" name="iduser"  class="form-control input-md" type="hidden">
		    				</div>
		    				<div class="col-md-6">
		  						<input id="idapp" name="idapp"  class="form-control input-md" type="hidden">
		    				</div>
						</div>

						<div class="form-group">
							<label class="col-md-3 control-label" for="application"></label>  
		  					<div class="col-md-6">
		  						<select name='appm' id='app' onchange='goa()'>
			    					<option value="">-- application --</option>
			    					<?php
			    						$req = "select * from application";
			    						$resultas=mysql_query($req);
			    						while($row=mysql_fetch_array($resultas)) 
			    						{
			    							echo "<option value=".$row[0].">".$row[1]."</option>";
			    					    }
                                    ?>
			    				</select>
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

