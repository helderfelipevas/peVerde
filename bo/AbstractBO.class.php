<?php

abstract class AbstractBO {
    abstract protected function getDAO();
    
    //Lista todos os registros
    
    public function listAll(){
        $dados = $this->getDAO()->listAll();
        
        return $dados;
    }
}
