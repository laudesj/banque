<?php $titre = "Créer un compte"; ?>
<?php ob_start() ?>
<form action="/index.php/creer_compte_post" method="POST">
<input type="text" name="nom" placeholder="Nom">
<input type="text" name="prenom" placeholder="Prénom">
<input type="submit" name="submit" value="Créer">
</form>
<?php $content = ob_get_clean() ?>
<?php include "layout.php" ?>