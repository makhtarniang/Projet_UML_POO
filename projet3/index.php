<?php

// require_once './models/Chambre.php';

define('BASE_URL','http://localhost/projet3');
require_once("./libs/router.php");

$route= new Router();
$route->route();
// $chambre= new ChambreDao ();

// $chambre->findAll();

// $Chambre = new Chambre();
// var_dump($Chambre);

