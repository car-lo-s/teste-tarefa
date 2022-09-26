<?php
require_once 'lista.php';
require_once 'config.php';



class listaDAO{
    private $pdo;

    public function __construct(PDO $driver){
        $this->pdo = $driver;
    }
    public function all(){
        $lista = [];
        $sql = $this->pdo->query("SELECT*FROM cad_tarefas");
        if($sql->rowCount()>0){
            $dado = $sql->fetchAll();
            foreach ($dado as $item) {
                $tarefa = new lista();
                $tarefa->setId($item['id']);
                $tarefa->setNome($item['nome']);
                $tarefa->setCusto($item['custo']);
                $tarefa->setData($item['data']);
                $tarefa->setOrdem($item['ordem']);
                $lista[] = $tarefa;
            }
            return $lista;
        }
    }
}