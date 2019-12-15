
<!DOCTYPE HTML>
<html>
	<head>
		<title>SGA-System de Gestion des Applications</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../app/assets/css/main.css" />
		<link  rel="stylesheet" href="../app/assets/css/bootstrap.min.css"/>
 		<link  rel="stylesheet" href="../app/assets/css/bootstrap-theme.min.css"/>    
  		<link  rel="stylesheet" href="../app/assets/css/font.css">
  		<script src="../app/assets/js/jquery.min.js"></script>
		<script src="../app/assets/js/browser.min.js"></script>
		<script src="../app/assets/js/breakpoints.min.js"></script>
		<script src="../app/assets/js/util.js"></script>
		<script src="../app/assets/js/main.js"></script>
  		<script src="../app/assets/js/jquery.js" type="text/javascript"></script>
 		<script src="../app/assets/js/bootstrap.min.js"  type="text/javascript"></script>
  		<link rel="stylesheet" type="text/jquery" href="http://code.jquery.com/jquery-1.7.2.js">
  		<script type="text/javascript">
        //modal gestion des applications
		  $(document).on("click", ".pull-left", function () {
		     var id = $(this).data('id');
		     var nom = $(this).data('nom');
		     var img_a = $(this).data('logo');
		     var path = $(this).data('path');
		     $(".modal-body #id").val( id );
		     $(".modal-body #nom").val( nom );
		     $(".modal-body #img").val( img_a );
		     $(".modal-body #path").val( path );
		    $('#myModal').modal('show');
		   var el = document.getElementById("yabanner");
		   el.innerHTML="<img src='"+img_a+"' width=\"100px\" height=\"100px\">";

		});
          //modal modifier users
            $(document).on("click", ".pull-left_", function () {
             var id = $(this).data('id_user');
             var nom = $(this).data('nom');
             var prenom = $(this).data('prenom');
             var division = $(this).data('division');
             var service = $(this).data('service');
             var login = $(this).data('login');
             var password = $(this).data('password');
             var role = $(this).data('role');
             $(".modal-body #id_user").val( id );
             $(".modal-body #nom").val( nom );
             $(".modal-body #prenom").val( prenom );
             $(".modal-body #division").val( division );
             $(".modal-body #service").val( service );
             $(".modal-body #login").val( login );
             $(".modal-body #password").val( password );
             $(".modal-body #role").val( role );
            $('#myModal_').modal('show');

        });

        // modale modifier gestion des access
          	$(document).on("click", ".pull-righ", function () {
		     var iduser = $(this).data('iduser');
		     var idapp = $(this).data('idapp');
		     $(".modal-body #iduser").val( iduser );
		     $(".modal-body #idapp").val( idapp );
		    $('#myModal_modifier').modal('show');
		});

                        function getXhr(){
                                var xhr = null; 
                                if(window.XMLHttpRequest) // Firefox et autres
                                   xhr = new XMLHttpRequest(); 
                                else if(window.ActiveXObject){ // Internet Explorer 
                                   try {
                                        xhr = new ActiveXObject("Msxml2.XMLHTTP");
                                    } catch (e) {
                                        xhr = new ActiveXObject("Microsoft.XMLHTTP");
                                    }
                                }
                                else { // XMLHttpRequest non supporté par le navigateur 
                                   alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest..."); 
                                   xhr = false; 
                                } 
                                return xhr;
                        }
 
                        /**
                        * Méthode qui sera appelée sur le click du bouton
                        */
                        function go(){
                                var xhr = getXhr();
                                // On défini ce qu'on va faire quand on aura la réponse
                                xhr.onreadystatechange = function(){
                                        // On ne fait quelque chose que si on a tout reçu et que le serveur est ok
                                        if(xhr.readyState == 4 && xhr.status == 200){
                                                leselect = xhr.responseText;
                                                // On se sert de innerHTML pour rajouter les options a la liste

                                                document.getElementById('dra').innerHTML = leselect;
                                        }
                                }
 
                                // Ici on va voir comment faire du post
                                xhr.open("POST","droit.php",true);
                                // ne pas oublier ça pour le post
                                xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                                // ne pas oublier de poster les arguments
                                // ici, l'id du concessionnaire
                                sel = document.getElementById('appaj');
                                idapp = sel.options[sel.selectedIndex].value;
                                xhr.send("idapp="+idapp);

                        }
                       
                        function goa(){
                                var xhr = getXhr();
                                // On défini ce qu'on va faire quand on aura la réponse
                                xhr.onreadystatechange = function(){
                                        // On ne fait quelque chose que si on a tout reçu et que le serveur est ok
                                        if(xhr.readyState == 4 && xhr.status == 200){
                                                leselect = xhr.responseText;
                                                // On se sert de innerHTML pour rajouter les options a la liste

                                                document.getElementById('dr').innerHTML = leselect;
                                        }
                                }
 
                                // Ici on va voir comment faire du post
                                xhr.open("POST","droit.php",true);
                                // ne pas oublier ça pour le post
                                xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                                // ne pas oublier de poster les arguments
                                // ici, l'id du concessionnaire
                                sel = document.getElementById('app');
                                idconc = sel.options[sel.selectedIndex].value;
                                xhr.send("idconc="+idconc);

                        }

                </script>
	</head>
	
	<body class="is-preload">
	
			<div id="wrapper">

					<div id="main">
					
						<div class="inner">

								<header id="header">
									<h4><strong>SGA - System de Gestion des Applications de la Province - Khouribga</Strong></h4>
                                    <div class="navigation">
  
                                    <ul class="icons">
                                        <li><a href="../deconnexion.php"><img class="img42" src="../app/img/logout.png"/ ></a></li>
                                    </ul>
								</header>