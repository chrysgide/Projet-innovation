<?php
    include('conn.php');
try {
    
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

    //Voici la requête que j'utilise pour recuperer l'id de la table pers_trouv
    //Alino cette requête ne marche pas et c'est suremment un pb de syntaxe.
    //stp vérifie moi ça et envoie moi le faxe, c'est urgent 
    $last_id = 'SELECT numero FROM pers_trouv WHERE numero= $_POST["number"]';
    echo $last_id; 
   

    //Insertion dans la table prop_piece
    $stmt2 = $conn->prepare("INSERT INTO prop_piece (Id_de_la_piece, Pers_trouv_id, Type_de_piece, Nom, Prenom, Date_naiss, Lieu_naiss) 
    VALUES (:Id_de_la_piece, :Pers_trouv_id, :Type_de_piece, :Nom, :Prenom, :Date_naiss, :Lieu_naiss)");
    $stmt2->bindParam(':Id_de_la_piece', $num_piece);
    $stmt2->bindParam(':Pers_trouv_id', $last_id);// c'est ici que je dois l'inserer car elle est ici clé étrangère
    $stmt2->bindParam(':Type_de_piece', $varr);
    $stmt2->bindParam(':Nom', $fnom);
    $stmt2->bindParam(':Prenom', $fprenom);
    $stmt2->bindParam(':Date_naiss', $date_naiss);
    $stmt2->bindParam(':Lieu_naiss', $lieu_naiss);

   
    if( $stmt->execute() AND  $stmt2->execute() ){

        echo "<script>alert('Enregistrement termine avec succes..')</script>";
    }else{ echo "<script>alert('Une erreur s'est produite lors de l'enregistrement')</script>";}

    
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
?>