

<?php
// try pour afficher les erreurs
try
{   // connexion bdd 
    $bdd = new PDO('mysql:host=localhost;dbname=mister-cuisto;charset=utf8', 'sidi', 'ai31080412');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e){
    echo "données non collectées : " . $e->getMessage();
}
    try{

//preparer une requete
        $req = $bdd->prepare('INSERT INTO commentaires (numero, nom, prenom, e-mail, resa, convives, adresse)
        VALUES (:numero, :nom, :prenom, :e-mail, :resa, :convives, :adresse)');
   
       $req->bindParam(':numero', $_POST["tel"]);
       $req->bindParam(':nom', $_POST["nom"]);
       $req->bindParam(':prenom', $_POST["prenom"]);
       $req->bindParam(':e-mail', $_POST["e-mail"]);
       $req->bindParam(':resa', $_POST["resa"]); 
       $req->bindParam(':convives', $_POST["convives"]);
       $req->bindParam(':adresse', $_POST["adresse"]); 



       $req->execute();
        echo "C'est noté !";

    
   
}catch (Exception $e)
{
        echo 'Erreur ' . $e->getMessage();
}
 

}catch (Exception $e)
{
        echo 'Erreur ' . $e->getMessage();
}


?>



