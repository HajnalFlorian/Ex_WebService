<?php

// Classe définissant un client.

// Include des autres fichiers .php
include_once("Constantes.php"); // Inclut une seule fois le fichier Constantes.php
include_once("DbOperations.php"); // Inclut une seule fois le fichier DbOperations.php
include_once("DbConnect.php"); // Inclut une seule fois le fichier DbConnect.php


class Client
{
	private $_NCLI;
	private $_NOM;
	private $_ADRESSE;
	private $_LOCALITE;
	private $_CAT;
	private $_COMPTE;

	// Constructeur
	public function __construct($ncli, $nom, $adresse, $localite, $cat, $compte) 
	{
    	$this->setNCLI($ncli); // Initialisation de ncli.
    	$this->setNOM($nom); // Initialisation de nom.
    	$this->setADRESSE($adresse); // Initialisation de adresse.
    	$this->setLOCALITE($localite); // Initialisation de localite.
    	$this->setCAT($cat); // Initialisation de cat.
    	$this->setCOMPTE($compte); // Initialisation de compte.
	}

	public function setNCLI($ncli)
	{
    	$this->$_NCLI = $ncli;
	}


	public function setNOM($nom)
	{
    	$this->$_NOM = $nom;
	}


	public function setADRESSE($adresse)
	{
    	$this->$_ADRESSE = $adresse;
	}


	public function setLOCALITE($localite)
	{
    	$this->$_LOCALITE = $localite;
	}


	public function setCAT($cat)
	{
    	$this->$_CAT = $cat;
	}


	public function setCOMPTE($compte)
	{
    	$this->$_COMPTE = $compte;
	}
}
