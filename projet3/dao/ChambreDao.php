<?php
class ChambreDao extends manager{

    public function __construct()
    {
        $this->tableName="chambre";
        $this->className="Chambre";
    }
    public function add($obj){
        $sql= $this->pdo->prepare("INSERT INTO $this->tableName (`id`, `numero`, `numeroBat`, `type`, `statut`) VALUES (NULL, ?, ?, ?, ?)");
        $this->executeUpdate($sql);
    }
   
    public function update($obj){
        $sql="";
    }
 
    public function delete($id){
        $sql="";
    }
  

}