<?php
class ChambreDao extends manager{

    public function __construct()
    {
        $this->tableName="chambre";
        $this->className="Chambre";
    }
    public function add($numero, $numeroBat, $type){
        $sql="INSERT INTO $this->tableName ( `numero`, `numeroBat`, `type`) VALUES (?, ?, ?)";
        $this->executeUpdate($sql, $numero, $numeroBat, $type);
    }
   
    public function update($obj){
        $sql="";
    }
 
    public function delete($id){
        $sql="";
    }
  

    // public function add($numChambre,$numBatiment,$typeChambre){
    //     $sql="INSERT INTO `$this->tableName` (`numChambre`, `numBatiment`, `type`) VALUES (?, ?, ?);";
    //     $this->addchambre($sql,$numChambre,$numBatiment,$typeChambre);
    
    //   }
    //   



    // public function addChambre($sql,$numChambre,$numBatiment,$type){
    //     $this->getConnexion();
    //     $req=$this->pdo->prepare($sql);
    //     $req->execute(array($numChambre,$numBatiment,$type));
    //     if ($req) {
    //       // echo "enregistrement réussi";
    //       // echo $sql;
    //     }
        
    //     $this->closeConnexion();
    
    //   }




    // $nombre=rand(1000,9999);
    //         if (strlen($numBatiment)==1) {
    //             $numBatiment="00".$numBatiment;
    //         }elseif (strlen($numBatiment)==2) {
    //             $numBatiment="0".$numBatiment;
    //         }else{
    //             $numBatiment=$numBatiment;
    //         }
    //         $numChambre=$numBatiment."-".$nombre;
    //         $this->dao=new ChambreDao();
    //         $this->dao->add($numChambre,$numBatiment,$type);
    //         $this->view="enregistrer_chambre";
    //         $this->render();
    //     }
    //     $this->view="enregistrer_chambre";
    //     $this->render();



    //     public function add($numChambre,$numBatiment,$typeChambre);

    
}
