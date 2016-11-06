<?php

/* Carrega automáticamente as classes */

function __autoload($Class){
    
    $cDir = ['bo','dao','bean','conexao'];
    $iDir = null;
    
    foreach($cDir as $dirName){
        if(!$iDir && file_exists(__DIR__."/{$dirName}/{$Class}.class.php") && !is_dir(__DIR__."/{$dirName}/{$Class}.class.php")){
            include_once (__DIR__."/{$dirName}/{$Class}.class.php");
            $iDir = true;
        }
    }
    
    if(!$iDir){
        echo "Não foi possivel incluir {$Class}";
        die;
    }
    
}