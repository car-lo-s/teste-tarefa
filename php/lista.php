<?php
class lista{
    private $id;
    private $nome;
    private $custo;
    private $data;
    private $ordem;
    
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getCusto(){
        return $this->custo;
    }
    public function setCusto($custo){
        $this->custo = $custo;
    }
    public function getData(){
        return $this->data;
    }
    public function setData($data){
        $this->data = $data;
    }
    public function getOrdem(){
        return $this->ordem;
    }
    public function setOrdem($ordem){
        $this->ordem = $ordem;
    }
}