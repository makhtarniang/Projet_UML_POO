<?php

class Etudiant{

    protected $matricule;
    protected $prenom;
    protected $nom;
    protected $email;
    protected $telephone;
    protected $dateNaiss;

    public function __construct($row)
	{
		
	}

	public function getMatricule() {
		return $this->matricule;
    }
    
	public function getPrenom() {
		return $this->prenom;
	}

	
	public function getNom() {
		return $this->nom;
	}

	public function getEmail() {
		return $this->email;
	}

	public function getTelephone() {
		return $this->telephone;
	}

	public function getDateNaiss() {
		return $this->dateNaiss;
    }

    public function setMatricule( $matricule) {
		$this.$matricule = $matricule;
	}


	public function setPrenom($prenom) {
		$this->prenom = $prenom;
    }
    
    public function setNom($nom) {
		$this->nom = $nom;
	}

    public function setEmail($email) {
		$this->email = $email;
	}
    
	public function setTelephone($telephone) {
		$this->telephone = $telephone;
    }
    
	public function setDateNaiss($dateNaiss) {
		$this->dateNaiss = $dateNaiss;
	}


}