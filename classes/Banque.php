<?php

class Banque {
	// propriétés
	private $nom;
	private $comptes;

	// constructeur
	function __construct($nom) {
		$this->nom = $nom;
	}

	// méthodes
	public function getNom() { // getter
		return $this->nom;
	}
	public function setNom($nom) { // setter
		$this->nom = $nom;
	}

	public function addCompte(Compte $compte) {
		$this->comptes[] = $compte;
		return $this;
	}

	public function getComptes() {
		return $this->comptes;
	}

}