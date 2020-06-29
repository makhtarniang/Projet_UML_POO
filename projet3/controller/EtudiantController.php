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

        $this->EtudiantDao=new EtudiantDao();
        $etudiants=$this->EtudiantDao->findAll();

        $this->views="listEtudiant";
        $this->render();
        echo "<pre>";
         var_dump($etudiants);
         echo "</pre>";
    }

    public function RechercherMatricule(){

    }
}