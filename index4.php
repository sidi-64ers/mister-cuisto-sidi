<?php require "menu.php";?>
<br>
<h2>RESERVATION<h2>
<br><br><br>
<form>
    <p>
        <label for="prénom">Votre prénom</label> :
        <input type="text" name="prénom" id="prénom" placeholder="votre prénom"/><br>

        <label for="nom">Votre nom<em>*</em></label> :
        <input type="text" name="nom" id="nom" required placeholder="votre nom"/><br>

        <label for="e.mail">Votre e.mail<em>*</em></label> :
        <input type="text" name="e.mail" id="e.mail" required placeholder="adresse@mail.com"/><br>

        <label for="adresse">Votre adresse</label> :
        <input type="text" name="adresse" id="adresse" placeholder="1, rue de l'église 75000 Paris"/><br>

        <label for="date">Date </label> :
        <input type="date" name="date" id="date" /><br>

        Quand ?<br>
        <label for="midi">midi </label> 
        <input type="checkbox" name="midi" id="midi" />

        <label for="soir">soir </label> 
        <input type="checkbox" name="soir" id="soir" /><br>

        <label for="number">Nombre de personne </label> :
        <input type="number" name="number" id="number" /><br>

        <label for="tel">Numero de telephone </label> :
        <input type="tel" name="tel" id="tel" placeholder="0607080910"/><br><br><br>
        
        <input type="submit" value="Envoyer la réservation" id="bouton"/>

        <input type="reset" value="Réinitialiser" id="bouton"/>

    </p>
</form>

<br><br>

<h2>NOUS CONTACTER<H2>
<br><br><br>
<form>
    <p><a href="mailto:lafabriquedupetitmangé@gmail.com">ENVOYEZ-NOUS UN E.MAIL.</a></p> 


    


