<?php
    require_once('head.html')
?>
    </head>

<form action="POST">
    <div>Information Personelle</div>
    <label for="nom">nom :</label><input type="text" name="nom" id="nom"><br>
    <label for="prenom">prenom :</label><input type="text" name="prenom" id="prenom"><br>
    <label for=""></label><input type="date" name="age" id="age"><br>
    <input type="text" name="username" id="username"><br>
    <input type="text" name="password" id="password"><br>
    <div>Profil Physique</div>
    <input type="radio" name="Mr" id="Mr">
    <input type="radio" name="Mme" id="Mme"><br>
    <input type="text" name="poids" id="poids"><br>
    <input type="text" name="taille" id="taille"><br>
    <input type="text" name="menstruation" id="menstruation"><br>
</form>