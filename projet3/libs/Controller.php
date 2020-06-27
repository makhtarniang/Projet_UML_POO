<?php
class Controller{

    protected $views;
    protected $layout;
    protected $folder;


    public function render(){

        $pathViews= "./views/".$this->folder."/".$this->views.".php";
        $pathLayout= "./views/layout/".$this->layout.".php";
        ob_start();
        require_once($pathViews);
            
        $content_for_layout= ob_get_clean();

        require_once($pathLayout);
    }
}