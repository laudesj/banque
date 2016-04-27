<?php $titre = "Liste des comptes"; ?>
<?php ob_start() ?>
<ol>
	<?php foreach ($comptes as $compte): ?>
		<li>
			<span><strong><?= $compte->getNumero() ?></strong> : <?= $compte->getSolde()?> €</span>
			<span><?= $compte->getClient()->getNom() ?> <?= $compte->getClient()->getPrenom() ?> <small>[<?= $compte->getClient()->getNumero() ?>]</small></span>
		</li>
	<?php endforeach ?>
</ol>
<?php $content = ob_get_clean() ?>
<?php include "layout.php" ?>