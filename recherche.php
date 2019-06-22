
<?php 
	session_start();
	// variable de session qui permette de gerer simplement le menu actif
	$_SESSION['menu_active_home'] = "";
	$_SESSION['menu_active_trouv_pro'] = "";
	$_SESSION['menu_active_save_piece'] = "";
	$_SESSION['menu_active_home_find_piece'] = "active";

	// integration du header de l'application
	include "header.php";
 ?>

<!-- Ici c'est le contenu de la page recherche -->
		<div class="row">
			<div class="col-md-12">
				<form action="/action_page.php">
					 <label for="country">Type de document</label>
					 <select id="piece" name="piece">
				      <option value="piec_ident">Carte nationale d'identité</option>
				      <option value="pass">Passeport</option>
				      <option value="pass">Titre de séjour</option>
				     </select>
				    <label for="name">Nom</label>
				    <span id="nom_manquant" style="font-size:12px; font-style: italic;"></span>

				    <input type="text" id="name" name="Nom" required="required" placeholder="Entrez votre nom comme marqué sur la pièce">
				    
				    <label for="prenom">Prénom</label>
				    <span id="prenom_manquant" style="font-size:12px; font-style: italic;"></span>

				    <input type="text" id="prenom" name="prenom" required="required" placeholder="Entrez votre prénom comme marqué sur la pièce">

				    <label for="date_naiss">Date de naissance</label>
				    <input type="date" id="date_naiss" name="date_naiss" required="required" placeholder="Entrez votre date de naissance">

				    <label for="lieu_naiss">Lieu de naissance</label>
				    <input type="text" id="lieu_naiss" name="lieu_naiss" required="required" placeholder="Entrez votre lieu de naissance" style=" width: 40%;padding: 12px 20px;  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box;">
				    <span id="lieu_manquant" style="font-size:12px; font-style: italic;"></span>
				    <input type="submit" value="Recherchez" id="bouton_envoi">
  				</form>
			</div>
		</div>
		
	</div>
	<script type="text/javascript" src="script1.js"></script>

	<!-- fin du contenu de la page d'accueil -->		
	
<?php 
	// Intégration du footer de l'application
	include "footer.php";
?>
