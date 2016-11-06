<?php
include_once 'AbstractDAO.class.php';
include_once '../conexao/Conexao.class.php';

class PlantaDAO extends AbstractDAO {
    private $con;
    
    function __construct(){
        $this->con = new Conexao();
    }
    
    public function buscarPlanta($cdPlanta){
        
        $query = "Select * FROM planta WHERE cd_planta = {$cdPlanta}";
        $pdo = $this->getCon()->getConexao()->prepare($query);
        $pdo -> execute();
        
        $dados = $pdo->fetch(PDO::FETCH_ASSOC);
        
        return $dados;
    }
    
   protected function getTabela(){
       return "planta";
   } 
    
   protected function getCon(){
       return $this->con;
   }
   
    
}
