<?php
require_once 'AbstractBO.class.php';
require_once '../dao/PlantaDAO.class.php';

class PlantaBO extends AbstractBO {
    
    private $dao;
    
    function __construct(){
        $this->dao = new PlantaDAO();   
    }
    
    function buscarPlanta($codigoPlanta){
        return $this->getDAO()->buscarPlanta($codigoPlanta);
    }
    
    function populaBean($dados){
        $bean = new PlantaBEAN();
        
        $bean->setAgua($dados['ds_agua']);
        $bean->setColheita($dados['ds_colheita']);
        $bean->setComoPlantar($dados['ds_como_plantar']);
        $bean->setCuidados($dados['ds_cuidados']);
        $bean->setEpoca($dados['ds_epoca']);
        $bean->setImagem($dados['im_planta']);
        $bean->setLuz($dados['ds_luz']);
        $bean->setNome($dados['nm_planta']);
        $bean->setRegiao($dados['ds_regiao']);
        $bean->setTamanhoVazo($dados['ds_tamanho_vazo']);
        $bean->setTemperatura($dados['ds_temperadura']);
        
        return $bean;
    }
    
    protected function getDAO(){
        return $this->dao;
    }
}
