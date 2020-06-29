<?php

class ChambreController extends Controller{

    public function __construct()
    {
        $this->folder="chambre";
        $this->layout="default";
        $this->validator=new Validator();
    }

    public function addRoom(){

        if (isset($_POST['btn_enregistrer'])) {
            extract($_POST);
            
            // $this->validator->isVide($numeroBat,"numeroBat","Le numero de batimat est vide");
            $nombre=rand(1000,9999);

            if (strlen($numeroBat)==1) {
                $numeroBat="00".$numeroBat;
            }elseif (strlen($numeroBat)==2) {
                $numeroBat="0".$numeroBat;
            }else{
                $numeroBat=$numeroBat;
            }
            $numero=$numeroBat."-".$nombre;
            $this->dao=new ChambreDao();
            $this->dao->add($numero,$numeroBat,$type);
            // $this->view="addRoom";
            // $this->render();
        }
        $this->views="addRoom";
        $this->render();
        
    }

    public function listChambre(){
        $this->views="listChambre";
        $this->render();
        $this->dao=new ChambreDao();
        $this->dao->findAll();


    }

    public function modifierChambre(){

    }
    public function SupprimerChambre(){

    }

}