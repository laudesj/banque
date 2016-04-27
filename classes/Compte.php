<?php

class Compte {
	private $numero;
	private $solde;
	private $client;

	function __construct($solde, $client) {
		$this->numero = uniqid();
		$this->solde = $solde;
		$this->client = $client;
	}

	public function crediter($montant) {
		if($montant > 0) {
			$this->solde += $montant;
			return $this;
		} else {
			throw new Exception('Le montant doit être supérieur à 0');
		}
		
	}

	public function debiter($montant) {
		if($montant > 0) {
			$this->solde -= $montant;
			return $this;
		} else {
			throw new Exception('Le montant doit être supérieur à 0');
		}
	}

	public function getNumero() {
		return $this->numero;
	}

	public function getSolde() {
		return $this->solde;
	}

	// public function addClient($client) {
	// 	$this->clients[] = $client;
	// 	return $this;
	// }

	public function getClient() {
		return $this->client;
	}

}