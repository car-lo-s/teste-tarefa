<?php
require_once 'config.php';
require_once 'listaDAO.php';

$info = new listaDAO($pdo);
$id = filter_input(INPUT_GET,'id');

if($id){
    $info->apagar($id);
}