<?php
function list_action() { // liste des comptes
	$comptes = $_SESSION['banque']->getComptes();
	require 'templates/list.php';
}

function creer_compte_action() {
	require 'templates/creer_compte.php';
}

function creer_compte_post_action() {
	if(isset($_POST['submit'])) {
		// faire des contrôles...
		$client = new Client($_POST['nom'], $_POST['prenom']);
		$compte = new Compte(0, $client);
		$_SESSION['banque']->addCompte($compte);
		header('Location: /index.php');
	}
}
