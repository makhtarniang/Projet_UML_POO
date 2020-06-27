<?php
class SecurityController extends Controller{

    public function __construct()
    {
        $this->folder="accueil";
        $this->layout="default";
    }

    public function index(){
       $this->views="accueil";
       $this->render();
    }

}