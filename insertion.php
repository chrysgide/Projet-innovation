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
            $number = $_POST["number"];
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $mail = $_POST["mail"];
            $comment = $_POST["comment"];

            // information sur la pièce trouvée
            $num_piece = $_POST["num_piece"];
            $type_piece = $_POST["piece"];
            $fnom = $_POST["fnom"];
            $fprenom = $_POST["fprenom"];
            $date_naiss = $_POST["date_naiss"];
            $lieu_naiss = $_POST["lieu_naiss"];

            // prepare sql and bind parameters
            // Insertion dans la table pers_trouv
            $stmt = $conn->prepare("INSERT INTO pers_trouv (numero, Nom, Prenom, Adr_email, Commentaire) 
            VALUES (:numero, :Nom, :Prenom, :Adr_email, :Commentaire)");
            $stmt->bindParam(':numero', $number);//Voici la clé primaire que je souhaite récuperer pour aller inserer dans la prop_piece 
            $stmt->bindParam(':Nom', $nom);
            $stmt->bindParam(':Prenom', $prenom);
            $stmt->bindParam(':Adr_email', $mail);
            $stmt->bindParam(':Commentaire', $comment);
            $stmt->execute();

            
            // On reccupère l'id de la personne pour lié à la pièce qu'il a trouvé
            $id_pers = "";
            $stmt = $conn->prepare("SELECT id_pers FROM pers_trouv WHERE numero = ?");
            if ($stmt->execute(array($number))) {
              while ($row = $stmt->fetch()) {
               $id_pers = $row["id_pers"];
              }
            }


            // Insertion dans la table pièce
            //Insertion dans la table prop_piece
            $stmt2 = $conn->prepare("INSERT INTO prop_piece (Number_piece, Pers_trouv_id, Type_de_piece, Nom, Prenom, Date_naiss, Lieu_naiss) 
            VALUES (:Number_piece, :Pers_trouv_id, :Type_de_piece, :Nom, :Prenom, :Date_naiss, :Lieu_naiss)");
            $stmt2->bindParam(':Number_piece', $num_piece);
            $stmt2->bindParam(':Pers_trouv_id', $id_pers);// c'est ici que je dois l'inserer car elle est ici clé étrangère
            $stmt2->bindParam(':Type_de_piece', $type_piece);
            $stmt2->bindParam(':Nom', $fnom);
            $stmt2->bindParam(':Prenom', $fprenom);
            $stmt2->bindParam(':Date_naiss', $date_naiss);
            $stmt2->bindParam(':Lieu_naiss', $lieu_naiss);
            $stmt2->execute();


            // Vérification si tout s'est bien passé pour les deux requêtes et on enregistre le message de notification
            if( $stmt->execute() AND  $stmt2->execute() )
            {
                $_SESSION['notification'] = "<div class='alert alert-success' role='alert'> Votre pièce ainsi que vos informations ont été bien enregistré! <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span></button></div>";

            }
            else
            { 
                $_SESSION['notification'] = "<div class='alert alert-danger' role='alert'> Une erreur s'est produite lors de l'enregistrement de vos informations! <button type='button' class='close' data-dismiss='alert' aria-label='Close'> <span aria-hidden='true'>&times;</span></button></div>";
            }

            // On redirrige sur la page d'accueil 
            header('location:index.php');
        }

    }
catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
    }
$conn = null;
?>