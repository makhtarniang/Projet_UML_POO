<?php

class ChambreController extends Controller{

    public function __construct()
    {
        $this->folder="chambre";
        $this->layout="default";
    }

    public function addRoom(){
        $this->views="addRoom";
        $this->render();
        
    }

    public function listChambre(){
        $this->views="listChambre";
        $this->render();

    }
    public function modifierChambre(){

    }
    public function SupprimerChambre(){

    }

}