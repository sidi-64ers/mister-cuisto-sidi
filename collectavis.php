<?php require "menu.php";?>

<?php

try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=mister-cuisto;charset=utf8', 'sidi', 'ai31080412');
    //bonne pratrique pour détail des erreurs
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        echo 'Erreur : '.$e->getMessage();
}
    /* On test si les champs spécifiés du formulaire sont remplis, 
       sécurité supplémentaire du code HTML required */
if (!empty($_POST['nom']) && !empty($_POST['email']) && 
!empty($_POST['avis'])); 

    try {
        // var_dump($_POST);
        //méthode ->prepare plus sécurisée que ->query 
        $req = $bdd->prepare('INSERT INTO commentaires( prenom, nom, email, avis)
        VALUES (:prenom,:nom,:email,:avis)');
            // possibilité de changer le sens des champs à condition de mettre le même sens dans INSERT INTO et VALUES 
    
            //lier les champs 
            // $req->bindParam(':id', null);
            $req->bindParam(':prenom', $_POST["prenom"]);
            $req->bindParam(':nom', $_POST["nom"]);
            $req->bindParam(':email', $_POST["email"]);
            $req->bindParam(':avis', $_POST["avis"]); 
         
            // var_dump($bdd);
    $req->execute();
    
    echo "merci pour votre commentaire !";

    } 
    catch (PDOException $e) {

    echo ' avis non envoyée '.$e->getMessage();
    }    



?>
