
<?php 
	session_start();
	// variable de session qui permette de gerer simplement le menu actif
	$_SESSION['menu_active_home'] = "";
	$_SESSION['menu_active_trouv_pro'] = "";
	$_SESSION['menu_active_save_piece'] = "active";
	$_SESSION['menu_active_home_find_piece'] = "";

	// integration du header de l'application
	include "header.php";
 ?>

<!-- Ici c'est le contenu de la page enregistrer les information -->
	<div class="row">
		<div class="col-md-12">
			<form method="post" action="insertion.php">
				<p style="text-align: center; font-size: 150%; padding-bottom: 0px;"> Veuillez renseigner les informations de la pièce que vous possédez</p>
				 <label for="doc">Type de document</label>
				 <select id="piece" name="piece" style="width: 30%;">
			      <option value="piec_ident">Carte d'identité</option>
			      <option value="pass">Passeport</option>
			      <option value="titresejour">Titre de séjour</option>
			     </select>
			     <label for="num_piece">Numéro de la pièce</label>
			    <input type="number" id="fname" name="num_piece" placeholder="Entrez le numéro de la pièce" style="padding: 12px 20px;  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box; width: 30%;"><br>
			    <label for="fname">Nom</label>
			    <span id="fnom_manquant" style="font-size:12px; font-style: italic;"></span>
			    <input type="text" id="fname" name="fnom" required="required" placeholder="Entrez votre nom comme marqué sur la pièce">

			     <label for="fprenom">Prénom</label>
			      <span id="fprenom_manquant" style="font-size:12px; font-style: italic;"></span>
			    <input type="text" id="fprenom" name="fprenom" required="required" placeholder="Entrez votre prénom comme marqué sur la pièce">

			     <label for="date_naiss">Date de naissance</label>
			    <input type="date" id="date" name="date_naiss" required="required" placeholder="Entrez votre date de naissance" style="padding: 12px 20px;  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box;">
			     <label for="lieu_naiss">Lieu de naissance</label>
			    <input type="text" id="lieu_naiss" name="lieu_naiss" required="required" placeholder="Entrez votre lieu de naissance" style=" width: 40%;padding: 12px 20px;  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box;">
                <span id="lieu_manquant" style="font-size:12px; font-style: italic;"></span>
			    <p style="text-align: center; font-size: 150%; padding-bottom: 0px; padding-top: 20px;">Veuillez renseigner vos informations pour que le propriétaire de la carte/passeport puisse vous contacter pour pouvoir entrer en possession de sa pièce</p>
			    
			    <label for="name">Nom</label>
			    <span id="nom_manquant" style="font-size:12px; font-style: italic;"></span>
			    <input type="text" id="name" name="nom"  required="required" placeholder="Entrez votre nom">
			     <label for="prenom">Prénom</label>
			     <span id="prenom_manquant" style="font-size:12px; font-style: italic;"></span>
			    <input type="text" id="prenom" name="prenom" required="required" placeholder="Entrez votre prénom">
			   
			    <label for="tel">Numéro de téléphone</label>
			    <input type="number" id="number" name="number" required="required" placeholder="Entrez votre numéro" style="width: 20%; padding: 12px 20px;  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box;">
			    <label for="mail">Adresse mail</label>
			    <input type="email" id="mail" name="mail" required="required" placeholder="Entrez votre adresse mail" style="width: 30%; padding: 12px 20px;  margin: 8px 0;  display: inline-block;  border: 1px solid #ccc;  border-radius: 4px;  box-sizing: border-box;">
                <span id="mail_manquant" style="font-size:12px; font-style: italic;"></span><br>
			    <label> Commentaire: </label> 
			    <textarea name="comment" rows="6" cols="80"></textarea>
				<br><br>
			    	


				  <?php

				  	/* J'aimerai bien savoir à quoi te sert ce code si */
        				if(isset($_POST['piece'])){
                			if($_POST['piece']=="piec_ident"){
			                        $varr="Carte d'identité";
			                }elseif($_POST['piece']=="pass"){
			                        $varr="Passeport";
			                }elseif($_POST['piece']=="titresejour"){
			                        $varr="Titre de Séjour";
			                }
			            }
        
					?>
			    <input type="submit" name="submit" onclick="confirm('Vous voulez-vous confirmer votre sauvégarde ?')" value="Enregistrez" id="bouton_envoi">
				</form>
			     		 
			  				    
		</div>
	</div>
<!-- fin du contenu de la page enregistrer les information -->		
	
<?php 
	// Intégration du footer de l'application
	include "footer.php";
?>