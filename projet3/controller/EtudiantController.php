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

    }
}