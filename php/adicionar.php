<?php
require_once 'config.php';
require_once 'listaDAO.php';

$info = new listaDAO($pdo);

$tarefa = filter_input(INPUT_GET,'tarefa');
$custo = filter_input(INPUT_GET,'custo');
$data = filter_input(INPUT_GET,'data');

    if($tarefa && $custo && $data){
        $tarefa = $info->add($tarefa,$custo,$data);
    }else{
        header("Location: index.php");
        exit;
    }
