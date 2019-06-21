
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Trouv'pièc</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
	<div class="container">
		<header>Trouv'pièc</header>
		
		<div class="row">
			<div class="col-md-12">
				<ul>
				   <li><a class="active" href="Trouve.php">Trouvez le propriétaire</a></li>
				  <li><a href="Enregistre.php">Enregistrez une pièce</a></li>
				  <li><a href="recherche.php">Cherchez une pièce</a></li>
				  <li style="float:right"><a href="index.php">Accueil</a></li>
				</ul>
			</div>
			
		</div>
		<div class="row">
			<div class="col-md-12">
				<form action="/action_page.php">
					 <label for="country">Type de document</label>
					 <select id="piece" name="piece" style="width: 30%;">
				      <option value="piec_ident">Carte nationale d'identité</option>
				      <option value="pass">Passeport</option>
				      <option value="pass">Titre de séjour</option>
				     </select>
				    <label for="fname">Numéro de la pièce</label>
				    <input type="number" id="fname" name="Num_piece" required="required" placeholder="Entrez le numéro de la pièce"  style="padding: 12px 20px;  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box; width: 30%;">

				    		   		 
				  
				    <input type="submit" value="Recherchez">
  				</form>
			</div>
		</div>
		<footer>Bonsoir</footer>
	</div>
</body>
</html>
