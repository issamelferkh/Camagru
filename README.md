# Camagru
## Subject
### Partie commune
- Créer app web permettant de réaliser des montages basiques à l’aide de votre webcam et d’images prédéfinies.
- Evidemment, ces images auront un canal alpha, sinon votre superposition n’aurait pas la prestance escomptée !
- [x] User peux sélectionner une image dans une liste des images (cadres, objets à l’utilité douteuse)
- [x] Prendre une photo depuis sa webcam
- [x] Admirer le résultat d’un montage
- [x] Should have a decent page layout (header, main section and a footer)
- [x] Server-side -> PHP (just standard library).
- [x] Client-side -> HTML, CSS and JavaScript.
- [x] Server-side -> Frameworks: Aucun.
- [x] Client-side -> Frameworks: Bootstrap CSS without JavaScript.
- [x] Files -> index.php -> containing the input in Web App, located at the root of the Web App.
- [x] Files -> config/setup.php -> creating/re-creating the DB using infos in config/database.php.
- [x] Files -> config/database.php -> containing config of DB, that will be instanced via PDO in the following format:
```
<?php
$DB_DSN = ...;
$DB_USER = ...;
$DB_PASSWORD = ...;
```
DSN (Data Source Name) contains required information needed to connect to the database, for instance ’mysql:dbname=testdb;host=127.0.0.1’.
Generally, a DSN is composed of the PDO driver name, followed by a specific syntax for that driver.
- [x] You must use the PDO abstraction driver to communicate with DB. The error mode must be set to PDO::ERRMODE_EXCEPTION.
- [ ] Responsive design
- [ ] Files -> auteur
- [x] Toutes les images prises devront être publiques, like-ables et commentables.
- [ ] App Web ne doit produire aucune erreur, warning ou notice, coté serveur et coté client, dans la console web. Toutefois, en raison de l’absence d’HTTPS, les erreurs relatives à getUserMedia() sur la console web seront tolérées.
- [ ] Votre App ne devra comporter aucune faille de sécurité. Gérer ce qui est indiqué dans la partie obligatoire, mais nous vous engageons à aller plus loin dans la sécurité de votre application, la confidentialité de
vos données en dépendent !
- [ ] Your web application should be at least be compatible with Firefox (>= 41) and Chrome (>= 46).
### Partie utilisateur
- [x] Sign up => by asking at least a valid "email", an "username" and a "password" with at least a minimum level of complexity.
- [x] Sing in => user can connect to App using "username/password".
- [x] The user should be able to disconnect in one click at any time on any page.
- [ ] Sign up => At the end of the registration process, user should confirm his account via an unique link sent at the email address fullfiled in the registration form.
- [ ] Forget PWD => User can reinitialise his pwd -> by send a password reinitialisation mail, if he forget his password.
- [x] Once connected, an user should modify his username, mail address or password.
### Partie galerie -> sans partie notification !!!
- [x] doit afficher l’intégralité des images prises par les membres du site, triées par date de création.
- [x] Elle doit pouvoir permettre à l’utilisateur de les commenter si celui-ci est authentifié.
- [x] La liste des images doit être paginée, avec au moins 5 éléments par page.
- [ ] notification: Lorsque une image reçoit un nouveau commentaire, l’auteur de cette image doit en être informé par mail. Cette préférence est activée par défaut, mais peut être désactivée dans les préférences de l’utilisateur.
- [x] La galerie devra être publique -> accessible sans authentification. => avec les commentaires
- [x] Elle doit pouvoir permettre à l’utilisateur de les liker si celui-ci est authentifié.
### Partie montage
- [x] accessible only to users + gently reject all other users that attempt to access it without being successfully logged in.
- [x] Une section principale, contenant l’apercu de votre webcam, la liste des images superposables disponibles et un bouton permettant de prendre la photo.
- [x] Une section latérale, affichant les miniatures de toutes les photos prises précedemment. ressembler à la Figure V.1
- [x] Les images superposables doivent être sélectionnables.
- [x] Le traitement de l’image finale (donc entre autres la superposition des deux images) doit être fait coté serveur, en PHP.
- [x] L’utilisateur doit pouvoir supprimer ses montages, et uniquement les siens.
- [x] upload img: Parce que tout le monde n’a pas de webcam, vous devez laisser la possibilité d’uploader une image au lieu de la prendre depuis la caméra.
### Security
- [ ] 0%
### Taches ################################################################################################
### Partie utilisateur
- [ ] Sign up => At the end of the registration process, user should confirm his account via an unique link sent at the email address fullfiled in the registration form.
- [ ] Forget PWD => User can reinitialise his pwd -> by send a password reinitialisation mail, if he forget his password.
### Partie galerie -> sans partie notification !!!
- [ ] notification: Lorsque une image reçoit un nouveau commentaire, l’auteur de cette image doit en être informé par mail. Cette préférence est activée par défaut, mais peut être désactivée dans les préférences de l’utilisateur.

#### Issues
* [ ] send mail -> +++ is a BIG BIG PROB -> Should fix it in all parts (-> notification, forget pwd, active pwd ...)
* [ ] Sign up => At the end of the registration process, user should confirm his account via an unique link sent at the email address fullfiled in the registration form.
* [ ] email confirmation -> https://code.tutsplus.com/tutorials/how-to-code-a-signup-form-with-email-confirmation--net-6860
                         -> https://code.tutsplus.com/tutorials/how-to-implement-email-verification-for-new-members--net-3824
* auto redirect http to https
#### Question
- config/setup.php -> how can I connect o DB if not exists ? !!!
- config/setup.php -> execute une fois ou chaque fois ?
- Once connected, user should or can modify his username, mail address or password ???
#### Security Taches
- check source avant delete image !!!
- [ ] crypte all GET data (like, msg ...)
- [ ] PWD encrypted in database.
- [ ] Not able to inject HTML or “user” JavaScriptHTML in all variables
- [ ] Not able to upload unwanted content on the server
- [ ] SQL injection
- [ ] Use an extern form to manipulate so-called private data
- [ ] Cross Site Request Forgery
- [ ] Cross Origin Resource Sharing
- test all forms -> token
- valide all form -> if (isset(post or get)) ...
- crypt all GET data sended !!!
- check queries
```
$stmt = $dbh->prepare("SELECT cle,actif FROM membres WHERE login like :login ");
if($stmt->execute(array(':login' => $login)) && $row = $stmt->fetch())
  {
    $clebdd = $row['cle'];    // Récupération de la clé
    $actif = $row['actif']; // $actif contiendra alors 0 ou 1
  }
```
- check all comments !!!
- delete image file not juste source 
- url manipulation -> deny access other folders with .htaccess
- check image uploaded (extension and header) !!!
- jai un grand probleme au niveau des includes -> gerer tous les includes pour eviter les erreurs -> tester au niveau de visiteur et user aussi !!!
- check php error
- check js console error
* change All URLs "../assets/img/" to paths "https://10.12.100.163/camagru/assets/img/"
#### Optimise + TEST 
* likes
* TEST comments
#### Testing and Check all
- [ ] Responsive design (Menu not responsive with smartphones)
- [ ] Files -> auteur
- [ ] App Web ne doit produire aucune erreur, warning ou notice, coté serveur et coté client, dans la console web. Toutefois, en raison de l’absence d’HTTPS, les erreurs relatives à getUserMedia() sur la console web seront tolérées.
- [ ] Votre App ne devra comporter aucune faille de sécurité. Gérer ce qui est indiqué dans la partie obligatoire, mais nous vous engageons à aller plus loin dans la sécurité de votre application, la confidentialité de
vos données en dépendent !
- [ ] Your web application should be at least be compatible with Firefox (>= 41) and Chrome (>= 46).

* delete db and test db config
* remove table or plus and test db config
* msg d'erruers ou d'info !!!
* gerer includes
* verif if comments is empty + msg info "Write a comment please"
* like -> msg info

### Bonus ################################################################################################
#### Partie galerie 
#### Partie montage
- [ ] Le bouton permettant de prendre la photo ne doit pas être cliquable tant qu’aucune image n’est sélectionnée.
- avant choisir filter -> Choose an effect (Red)
- apres choisir filter -> Shooot ! (Green)
- [ ] PROB -> resize image uploaded
* Comment with AJAX -> not reflesh page
* Like with AJAX -> not reflesh page
- [ ] Modif Comments
- [ ] Modif Likes
- add filters (Red,Green,Blue,Brightness ...)
- add posibility of move a filter in canvas
=====================================================
prob f like -> kolchi kaytlika aw la l3aks kolchi makaytlaykach !!!!!!!!!!!!!!!!!

2019@bU <=> issam.web1337@gmail.com

### Ressources:
* For send mail in php: https://unix.stackexchange.com/questions/419278/configure-sendmail-for-php-email
