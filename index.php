<?php
session_start();
function __autoload($class_name){
    require('classes/' . $class_name . '.php'); 
}

require_once 'model.php';
require_once 'controllers.php';

// initialisation de la banque
if(!isset($_SESSION['banque'])) {
	$banque = new Banque('Wealth Force 3 Bank');
	$banque->addCompte(new Compte(500, new Client('Einstein', 'Albert')));
	$banque->addCompte(new Compte(1502.20, new Client('Bohr','Niels')));
	$banque->addCompte(new Compte(5000, new Client('Planck','Max')));

	$_SESSION['banque'] = $banque;
}


// "routes"
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
//echo "<small>route = $uri</small><br>";
if('/index.php' === $uri) {
	list_action();
} elseif ('/index.php/creer_compte' === $uri) {
	creer_compte_action();
} elseif ('/index.php/creer_compte_post' === $uri) {
	creer_compte_post_action();
} elseif ('/index.php/reset' === $uri) {
	unset($_SESSION['banque']);
	header('Location: /index.php');	
} else {
	header('Status: 404 Not Found');
	echo '<html><body>Page non trouvée...</body></html>';
}
?>