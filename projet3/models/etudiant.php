<?php

class Etudiant implements IChambre{

    protected $matricule;
    protected $prenom;
    protected $nom;
    protected $email;
    protected $telephone;
    protected $dateNaiss;


    public function __construct($row=null)
	{
		if ($row!=null) {
			$this->hydrate($row);
		}
	}

	public function hydrate( $row){
		$this->matricule=$row['matricule'];
		$this->prenom=$row['prenom'];
		$this->nom=$row['nom'];
		$this->email=$row['email'];
		$this->telephone=$row['telephone'];
		$this->dateNaiss=$row['dateNaiss'];
		
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
		$this->$matricule = $matricule;
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