<?php require "menu.php";?>
<br>
<h2 id="ancreservation">RESERVATION<h2>
<br><br><br>
<form action="collecte-resa.php" method="post">
    <p>
        <label for="prenom">Votre prénom</label> :
        <input type="text" name="prenom" id="prenom" placeholder="votre prénom"/><br>

        <label for="nom">Votre nom<em>*</em></label> :
        <input type="text" name="nom" id="nom" required placeholder="votre nom"/><br>

        <label for="e-mail">Votre e.mail<em>*</em></label> :
        <input type="text" name="e-mail" id="e-mail" required placeholder="adresse@mail.com"/><br>

        <label for="adresse">Votre adresse</label> :
        <input type="text" name="adresse" id="adresse" placeholder="1, rue de l'église 75000 Paris"/><br>

        <label for="resa">Date </label> :
        <input type="date" name="resa" id="resa" /><br>

        <!--Quand ?<br>
        <label for="midi">midi </label> 
        <input type="checkbox" name="midi" id="midi" /> 

        <label for="soir">soir </label> 
        <input type="checkbox" name="soir" id="soir" /><br> -->

        <label for="convives">Nombre de personne </label> :
        <input type="number" name="convives" id="convives" /><br>

        <label for="tel">Numero de telephone </label> :
        <input type="tel" name="tel" id="tel" placeholder="0607080910"/><br><br><br>
        
        <input type="submit" value="Envoyer la réservation" id="bouton"/>

        <input type="reset" value="Réinitialiser" id="bouton"/>

    </p>
</form>

<br><br>

<h2>NOUS CONTACTER<H2>
<br><br><br>
    <p> id="email">
        <a href="mailto:lafabriquedupetitmangé@gmail.com">ENVOYEZ-NOUS UN E.MAIL.</a>
    </p> 

    <br>
    <?php require "footer.php";?>
    


