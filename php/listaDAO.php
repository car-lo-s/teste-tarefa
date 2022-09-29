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
                $tarefa->setOrdem($item['id']);
                $lista[] = $tarefa;
            }
            return $lista;
        }
    }
    public function edicao($id,$novaTarefa,$novoCusto,$novaData){
        $sql = $this->pdo->prepare("SELECT*FROM cad_tarefas WHERE id=:id");
        $sql->bindValue(':id',$id);
        $sql->execute();
        if($sql->rowCount()>0){
            $sql = $this->pdo->prepare("SELECT*FROM cad_tarefas WHERE nome=:nome");
            $sql->bindValue(':nome',$novaTarefa);
            $sql->execute();

            if($sql->rowCount()==0){
                $sql = $this->pdo->prepare("UPDATE cad_tarefas SET nome = :novaTarefa, custo = :novoCusto, data = :novaData WHERE id=:id");
                $sql->bindValue(':id',$id);
                $sql->bindValue(':novaTarefa',$novaTarefa);
                $sql->bindValue(':novoCusto',$novoCusto);
                $sql->bindValue(':novaData',$novaData);
                $sql->execute();
                header("Location: index.php");
                exit;
            }
            // $sql = $this->pdo->prepare("UPDATE cad_tarefas SET nome = :novaTarefa, custo = :novoCusto, data = :novaData WHERE id=:id");
            // $sql->bindValue(':id',$id);
            // $sql->bindValue(':novaTarefa',$novaTarefa);
            // $sql->bindValue(':novoCusto',$novoCusto);
            // $sql->bindValue(':novaData',$novaData);
            // $sql->execute();
            header("Location: index.php");
            exit;
        }
    }
    public function apagar($id){
        $sql = $this->pdo->prepare("DELETE FROM cad_tarefas WHERE id=:id");
        $sql->bindValue(":id",$id);
        $sql->execute();
        header("Location: index.php");
        exit;
    }
    public function add($nome,$custo,$data){
        $sql = $this->pdo->prepare("SELECT*FROM cad_tarefas WHERE nome = :nome");
        $sql->bindValue(":nome",$nome);
        $sql->execute();
        if($sql->rowCount()==0){
            $sql=$this->pdo->prepare("INSERT INTO cad_tarefas (nome,custo,data) VALUES(:nome,:custo,:data) ");
            $sql->bindValue(":nome",$nome);
            $sql->bindValue(":custo",$custo);
            $sql->bindValue(":data",$data);
            $sql->execute();
            header("Location: index.php");
            exit;
        }
    }
}