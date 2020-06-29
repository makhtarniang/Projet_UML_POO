<?php

class EtudiantController extends Controller{

    public function __construct()
    {
        $this->folder="Etudiant";
        $this->layout="default";
    }

    public function addEtudiant(){
        $this->views="addEtudiant";
        $this->render();
    }


    public function listEtudiant(){

        $this->views="listEtudiant";
        $this->render();

    }

    public function RechercherMatricule(){

        if(isset($_POST["btn_recherche"])){
            $this->dao= new EtudiantDao();
            $this->dao->findByMatricule();
            extract($_POST);
            
        }

        $this->views="listEtudiant";
        $this->render();
    }
}