<?php

class Router{

    private $ctrl;


    public function route(){

        try {
            spl_autoload_register(function($class){
                $pathDao= './Dao/'.$class.'.php';
                $pathModel= './models/'.$class.'.php';
                $pathLibs= './libs/'.$class.'.php';
                if (file_exists($pathModel)){
                    require_once($pathModel);
                }
                elseif(file_exists($pathDao)){
                    require_once($pathDao);
                }
                elseif(file_exists($pathLibs)){
                    require_once($pathLibs);
                }
                
            });
    
             //Url => index.php?url=security/index
            //Reecrire URL =>security/index
    
            if(isset($_GET['url'])){
                
                $url=explode("/",filter_var($_GET['url'],FILTER_SANITIZE_URL));
                // var_dump($url);


                $ctrl=ucfirst(strtolower($url[0])).'controller';
                $pathCtrl="./controller/".$ctrl.".php";
                if(file_exists($pathCtrl)){
                    // la page existe
                    require_once($pathCtrl);
                    $this->ctrl=new $ctrl();
                    $action=$url[1];
                    if(method_exists($this->ctrl,$action)){
                        // si la methode existe
                        $this->ctrl->{$action}();

                    }else{

                         // la page n'existe pas
                    $pathCtrl="./controller/ErreurController.php";
                    require_once($pathCtrl);
                    $erreur= new ErreurController();
                    $erreur->showError('cette methode existe null part');

                    }
                }else{
                    // la page n'existe pas
                    $pathCtrl="./controller/ErreurController.php";
                    require_once($pathCtrl);
                    $erreur= new ErreurController();
                    $erreur->showError('cette url existe null part');

                }
            }else{
                // la page n'existe pas
                $pathCtrl="./controller/SecurityController.php";
                require_once($pathCtrl);
                $this->ctrl= new SecurityController();
                $this->ctrl->index();

            }
        } catch (Exception $ex) {
            //throw $th;
        }
    }

}