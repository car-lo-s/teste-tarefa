<?php
require_once 'config.php';
require_once 'listaDAO.php';

$info = new listaDAO($pdo);

$id = filter_input(INPUT_GET,'id');
$novaTarefa = filter_input(INPUT_GET,'tarefa');
$novoCusto = filter_input(INPUT_GET,'custo');
$novaData = filter_input(INPUT_GET,'data');
if($id){
    if($novaData && $novoCusto && $novaData){
        $tarefa = $info->edicao($id,$novaTarefa,$novoCusto,$novaData);
    }
}