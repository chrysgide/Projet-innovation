<?php 
	session_start();
	// variable de session qui permette de gerer simplement le menu actif
	$_SESSION['menu_active_home'] = "active";
	$_SESSION['menu_active_trouv_pro'] = "";
	$_SESSION['menu_active_save_piece'] = "";
	$_SESSION['menu_active_home_find_piece'] = "";

	// integration du header de l'application
	include "header.php";
 ?>

<!-- Ici c'est le contenu de la page d'accueil -->
		<div class="row">
			<div class="col-md-12">
				<p style="text-align: center;">
					L'application Trouv'pièc vient répondre à un problème fréquent que plein de français et résidents étrangers en france rencontre très souvent.
				</p>
				<ol>
					<li> Problème  1</li>
					<li> Problème  2 </li>
					<li> Problème  3 </li>
				</ol>
			</div>
		</div>
<!-- fin du contenu de la page d'accueil -->		
	
<?php 
	// Intégration du footer de l'application
	include "footer.php";
?>