<?php
    session_start();
    $_SESSION['notification'] = ""; // Variable de session qui contiendra l'ensemble des messages de notification de l'application
    // import du fichier de connexion à la base de donnée
    include('conn.php');


try 
    {
    
        if ($_POST['submit']){
            // Si le formulaire est validé, on reccupère ses valeurs

            // information de la personne qui a trouver la pièce
            $piece = $_POST["piece"];
            $num = $_POST["Num_piece"];

            // On reccupère les information de la personne de la pièce trouvée
            $stmt = $conn->prepare("SELECT * FROM bdd_etat WHERE (Num_piece = ? AND Type_piece = ?)");
            if ($stmt->execute(array($num,$piece))) {
            	$i=1;
            	$result = [];
              while ($row = $stmt->fetch()) {
              	//print_r($row);
              	$result[$i] = $row;
              	$i++;
              }
              $_SESSION ['resultat'] = $result[1]; // Car le resultat de cette recherche sera uniquement un élément
            }



            // Vérification si tout s'est bien passé pour la requête et on enregistre le message de notification
            if( isset($_SESSION ['resultat']))
            {
                $_SESSION['notification'] = "<div class='alert alert-success' role='alert'><center> Nous avons trouvé le propriétaire de la pièce!</center> <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span></button></div>";

            }
            else
            { 
                $_SESSION['notification'] = "<div class='alert alert-danger' role='alert'><center> Nous n'avons pas de resultat pour votre recherche! </center><button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span></button></div>";
            }

            header('location:Trouve.php');
        }

    }
catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
    }
$conn = null;
?>