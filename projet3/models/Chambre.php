<?php

class Chambre implements IChambre {
    private $numero;
    private $numeroBat;
    private $type;


    
    // cest la methode qui cree un objet 
    // __contruct est appele c'est la classe qui est appele

    // surcharge
    public function __construct($row=null)
    {
        if ($row!=null) {
            $this->hydrate($row);
        } 
    }

    // la redefinition
    public function hydrate($row){
        $this->numero=$row['numero'];
        $this->numeroBat=$row['numeroBat'];
        $this->type=$row['type'];
    }


	public function getNumero() {
		return $this->numero;
	}

	public function setNumero($numero) {
		$this->numero = $numero;
	}

	public function getNumeroBat() {
		return $this->numeroBat;
	}

	public function setNumeroBat($numeroBat) {
		$this->numeroBat = $numeroBat;
	}

	public function getType() {
		return $this->type;
	}

	public function setType($type) {
		$this->type = $type;
	}


    
}