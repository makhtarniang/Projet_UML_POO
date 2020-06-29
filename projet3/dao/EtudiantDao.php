<?php
class EtudiantDao extends manager{

    public function __construct()
    {
        $this->tableName="etudiant";
        $this->className="Etudiant";

    } 
    public function add($numero,$numeroBat,$type){
        $sql="";
        // return $this->executeUpdate($sql)!=0;
    }

    public function findByMatricule($matricule){
        $sql= "SELECT `matricule` FROM $this->tableName WHERE matricule=$matricule";
        $data= $this->executeSelect($sql);
        var_dump($data);
    }

    public function findByBourse($bourse){
        $sql= "SELECT `bourse` FROM $this->tableName WHERE bourse=$bourse";

    }

    public function findByDepartement($departement){
        // $sql= "SELECT * FROM $this->tableName WHERE numeroBat=$departement";
    }


}