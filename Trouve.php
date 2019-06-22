
<?php 
	session_start();
	// variable de session qui permette de gerer simplement le menu actif
	$_SESSION['menu_active_home'] = "";
	$_SESSION['menu_active_trouv_pro'] = "active";
	$_SESSION['menu_active_save_piece'] = "";
	$_SESSION['menu_active_home_find_piece'] = "";

	// integration du header de l'application
	require "header.php";
 ?>

<!-- Ici c'est le contenu de la page Trouver le propriétaire -->
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
				    <input type="submit" value="Recherchez" class="searh_btn">
  				</form>
			</div>
		</div>
<!-- fin du contenu de la page Trouver le propriétaire -->		
	
<?php 
	// Intégration du footer de l'application
	include "footer.php";
?>
