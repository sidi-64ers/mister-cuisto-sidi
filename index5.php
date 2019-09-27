<?php require "menu.php";?>
<br>
<h2>LIVRE d'OR<h2>
<br><br><br>
<h4>Votre avis nous intéresse</h4>
<form method="post" action="collectavis.php">
<p>
<label for="prenom">Votre prénom</label> :
        <input type="text" name="prenom" id="prenom" placeholder="votre prénom"/><br>

        <label for="nom">Votre nom<em>*</em></label> :
        <input type="text" name="nom" id="nom" required placeholder="votre nom"/><br>

        <label for="email">Votre e.mail<em>*</em></label> :
        <input type="text" name="email" id="email" required placeholder="adresse@mail.com"/><br>
    
    <br/>
    <textarea name="avis" id="avis" rows="10" cols="50">
    </textarea>
    <br><br>
    <input type="submit" value="Envoyer votre avis" id="bouton"/>

        <input type="reset" value="Réinitialiser" id="bouton"/>
</p>
</form>


<?php require "footer.php";?>