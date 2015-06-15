<!Doctype html>
	<?php include "connect.php"; ?>
<html>
<head lang="pt-BR">
	<meta charset="utf-8">
	<title>Scrap</title>
	<link rel="stylesheet" type="text/css" href="css/default.css"/>
	<link rel="stylesheet" type="text/css" href="css/convite.css"/>
	<link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>
<body>
	
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>

	<header><h1>Home</h1>
	<h2><a href="index.php">Sair</a></h2>
	</header>
	<div class="container">
		<div class="box-left">
			<figure>
				<img src="images/user.png">
			</figure>
		</div>
		<div class="box-center">
			<?php include "includes/content-text-area.php"; ?>
			<?php include "includes/content-post.php"; ?>

			<div class="footer">
				<a href="#">Carregar mais</a>
			</div>
		</div>
		<div class="box-right">right
			<?php include "includes/convite.php" ?>
		</div>

	</div>

</body>

</html>