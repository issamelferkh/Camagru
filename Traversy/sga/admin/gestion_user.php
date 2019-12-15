<?php include ("../include/connexion.php") ; ?>
<?php include ("../include/header.php") ; ?>
<?php
$req = "select * from utilisateur";
		$resultas=mysql_query($req);
		echo "<section>
				<header class='major'>
						<h2>Acceuil</h2>
						<a data-id= data-nom= data-logo= data-path= href='ajout_user.php' class='pull-left btn sub1'  >
							<img src='../images/add.png' width='50px' height='30px' />
						</a>
												
				</header>
				<div class='..features'>
				<table><th>Nom</th><th>prenom</th><th>Division</th><th>UserName</th><th>Setting</th>";
				while($row=mysql_fetch_array($resultas)) {
			echo "<tr><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[5]."</td>
					<td>
			      <a data-id_user=".$row[0]."  data-nom=".$row[1]." data-prenom=".$row[2]." data-division=".$row[3]." data-service=".$row[4]." data-login=".$row[5]." data-password=".$row[6]." data-role=".$row[7]." href='#myModal_' class='pull-left_ btn sub1' data-toggle='modal' data-target='#myModal_'>
							<img src='../images/st.png' width='20px' height='20px' />
							</a></td></tr>";
		}
				echo"</table>";
				echo"</div>";
		echo "</section>";
	?>
</div>
</div>
<div class="modal fade" id="myModal_">
	<div class="modal-dialog">
    	<div class="modal-content title1">
    		<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        			<h4 >Modifier</h4>
    		</div>
			<div class="modal-body">
		        <form class="form-horizontal" action="setting_user.php" method="POST" >
		        	<fieldset>

		        		<div class="form-group">
							<label class="col-md-3 control-label" for="id_user"></label>  
							<div class="col-md-6">
		  						<input id="id_user" name="id_user"  class="form-control input-md" type="text">
		    				</div>
						</div>

						<div class="form-group">
		  					<label class="col-md-3 control-label" for="nom"></label>  
		  					<div class="col-md-6">
		  						<input id="nom" name="nom" class="form-control input-md" type="text">
		  					</div>
						</div>
						<div class="form-group">
		  					<label class="col-md-3 control-label" for="prenom"></label>  
		  					<div class="col-md-6">
		  						<input id="prenom" name="prenom" class="form-control input-md" type="text">
		  					</div>
						</div>
						<div class="form-group">
		  					<label class="col-md-3 control-label" for="division"></label>  
		  					<div class="col-md-6">
		  						<input id="division" name="division"  class="form-control input-md" type="text">
		  					</div>
						</div>
						<div class="form-group">
		  					<label class="col-md-3 control-label" for="service"></label>  
		  					<div class="col-md-6">
		  						<input id="service" name="service"  class="form-control input-md" type="text">
		  					</div>
						</div>
						<div class="form-group">
		  					<label class="col-md-3 control-label" for="login"></label>  
		  					<div class="col-md-6">
		  						<input id="login" name="login" class="form-control input-md" type="text">
		  					</div>
						</div>
						<div class="form-group">
		  					<label class="col-md-3 control-label" for="password"></label>  
		  					<div class="col-md-6">
		  						<input id="password" name="password" class="form-control input-md" type="password">
		  					</div>
						</div>
						<div class="form-group">
		  					<label class="col-md-3 control-label" for="role"></label>
		  					<div class="col-md-6">
		    					<input id="role" name="role"  class="form-control input-md" type="text">
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