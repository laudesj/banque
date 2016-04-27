<?php

class Client {
	private $numero;
	private $nom;
	private $prenom;

	function __construct($nom, $prenom) {
		$this->numero = uniqid();
		$this->nom = $nom;
		$this->prenom = $prenom;
	}

	public function getNumero() {
		return $this->numero;
	}
	public function getNom() {
		return $this->nom;
	}
	public function getPrenom() {
		return $this->prenom;
	}
}