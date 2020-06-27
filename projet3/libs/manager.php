<?php
abstract class manager implements IDao{

    private $pdo=null;
    protected $tableName;
    protected $className;

    // open connexion
    private function getConnexion(){
        if($this->pdo==null){
            try {
                $this->pdo = new pdo("mysql:host=localhost;dbname=projet3", "root", "");
                $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                $erreur="vous avez une erreur lors de la connexion";
            }
        }
    }

    // fermer la connexion
    private function closeConnexion(){
        if($this->pdo!=null){
            $this->pdo==null;
        }
    }

    // les requetes de mis a jour 
    public function executeUpdate($sql){
        $this->getConnexion();

            // traitement
        $nbrLigne= $this->pdo->execute($sql); 
        $this->closeConnexion();
        return $nbrLigne;
    }
    
    // les requetes d'interogation
    public function executeSelect($sql){
        $this->getConnexion();

            // traitement
        $result=$this->pdo->query($sql);
           $data=[]; 
           foreach ($result as $rowDB) {
               $data[]= new $this->className($rowDB);
           }
        $this->closeConnexion();
        return $data;
    }

// lister les informations d'une table
    public function findAll(){
       $sql="SELECT * FROM $this->tableName"; 
       $data= $this->executeSelect($sql);
        var_dump($data);
    }
}