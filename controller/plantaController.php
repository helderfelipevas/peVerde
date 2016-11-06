<?php
require_once '../bo/PlantaBO.class.php';
session_start();

$acao = $_SESSION['acao'];
$cdPlanta = $_SESSION['cd_planta'];

switch ($acao){
    case "buscar":
        $bo = new PlantaBO();
        
        $descricao = $bo->buscarPlanta($cdPlanta);

    break;
    
}