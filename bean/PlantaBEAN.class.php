<?php

class PlantaBEAN {
    
    private $agua;
    private $colheita;
    private $comoPlantar;
    private $cuidados;
    private $epoca;
    private $luz;
    private $regiao;
    private $tamanhoVazo;
    private $temperatura;
    private $imagem;
    private $nome;
    
    function getAgua() {
        return $this->agua;
    }

    function getColheita() {
        return $this->colheita;
    }

    function getComoPlantar() {
        return $this->comoPlantar;
    }

    function getCuidados() {
        return $this->cuidados;
    }

    function getEpoca() {
        return $this->epoca;
    }

    function getLuz() {
        return $this->luz;
    }

    function getRegiao() {
        return $this->regiao;
    }

    function getTamanhoVazo() {
        return $this->tamanhoVazo;
    }

    function getTemperatura() {
        return $this->temperatura;
    }

    function getImagem() {
        return $this->imagem;
    }

    function getNome() {
        return $this->nome;
    }

    function setAgua($agua) {
        $this->agua = $agua;
    }

    function setColheita($colheita) {
        $this->colheita = $colheita;
    }

    function setComoPlantar($comoPlantar) {
        $this->comoPlantar = $comoPlantar;
    }

    function setCuidados($cuidados) {
        $this->cuidados = $cuidados;
    }

    function setEpoca($epoca) {
        $this->epoca = $epoca;
    }

    function setLuz($luz) {
        $this->luz = $luz;
    }

    function setRegiao($regiao) {
        $this->regiao = $regiao;
    }

    function setTamanhoVazo($tamanhoVazo) {
        $this->tamanhoVazo = $tamanhoVazo;
    }

    function setTemperatura($temperatura) {
        $this->temperatura = $temperatura;
    }

    function setImagem($imagem) {
        $this->imagem = $imagem;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }


}
