<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Trouv'pièc</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	

	<!-- Ajout de Bootrap depuis le CDN en ligne -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>

	<!-- This is the header of the all the app -->
	<div class="container">
		<header><h1>Trouv'pièc</h1></header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarText">

		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item <?php echo $_SESSION['menu_active_home']; ?>">
		        <a class="nav-link" href="index.php">Accueil </span></a>
		      </li>
		      <li class="nav-item <?php echo $_SESSION['menu_active_trouv_pro']; ?>">
		        <a class="nav-link" href="Trouve.php">Trouvez le propriétaire</a>
		      </li>
		      <li class="nav-item <?php echo $_SESSION['menu_active_save_piece']; ?>">
		        <a class="nav-link" href="Enregistre.php">Enregistrez une pièce</a>
		      </li>
		      <li class="nav-item <?php echo $_SESSION['menu_active_home_find_piece']; ?>">
		        <a class="nav-link" href="recherche.php">Cherchez une piècee</a>
		      </li>
		    </ul>
		  </div>
		</nav>

		<!--
		Voici ton ancien code que tu dois supprimer toi même
		<div class="row">
			<div class="col-md-12">
				<ul>
				  <li><a href="Trouve.php">Trouvez le propriétaire</a></li>
				  <li><a href="Enregistre.php">Enregistrez une pièce</a></li>
				  <li><a href="recherche.php">Cherchez une pièce</a></li>
				  <li style="float:right"><a class="active" href="#about">Accueil</a></li>
				</ul>
			</div>
			
		</div>

		-->