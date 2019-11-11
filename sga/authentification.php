<!DOCTYPE HTML>
<html>
	<head>
		<title>Welcome</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<h1>Application Manager</h1>
				<p>A simple way to manage your applications.</p>
			</header>

		<!-- Signup Form -->
			<form method="post" action="verifier.php" id="signup-form" >
				<input type="text" name="login" id="login" value="<?php if (isset($_POST['login'])) echo htmlentities(trim($_POST['login'])); ?>" placeholder="votre utilisateur" /> <br>
				 
				<input type="Password" value="<?php if (isset($_POST['password'])) echo htmlentities(trim($_POST['password'])); ?>" name="password" id="password" placeholder="Password" />
				<input type="submit" name="connexion" value="Connexion" value="Sign In " />
			</form>

		<!-- Footer -->
			<footer id="footer">
				<ul class="copyright">
					<li>&copy; Untitled.</li>
				</ul>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/main.js"></script>

	</body>
</html>