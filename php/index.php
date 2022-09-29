<?php
require 'config.php';
require 'listaDAO.php';

$listaDAO = new listaDAO($pdo);
$lista = $listaDAO->all();
// print_r($lista);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista-tarefas</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <h1>
            Lista de Tarefas
        </h1>
    </header>
    <section class="box">
    <section class="add">
        <form action="adicionar.php" method="get">
            <input type="text" name="tarefa" id="" placeholder="Nova tarefa: ">
            <input type="text" name="custo" id="" placeholder="Custo:">
            <input type="date" name="data" id="">
            <button type="submit">Adicionar</button>
        </form>
    </section>
        <table>
            <tr>
                <th>ID</th>
                <th>Tarefa</th>
                <th>Custo</th>
                <th>Data</th>
                <!-- <th>Ordem</th>   -->
                <th>Editar</th>
                <th>Apagar</th>
            </tr>
            <?php foreach ($lista as $tarefa):?>
                <tr id="row">
                    <td><?= $tarefa->getId(); ?></td>
                    <td><?= $tarefa->getNome(); ?></td>
                    <td><?= $tarefa->getCusto(); ?></td>
                    <td><?= $tarefa->getData(); ?></td>
                    <!-- <td><?= $tarefa->getOrdem(); ?></td> -->
                    <td onclick="edicao(<?=$tarefa->getId(); ?>)" class="icone um"><img src="../img/pencil-square.svg" alt=""></td>
                    <td onclick="apagar(<?=$tarefa->getId(); ?>)" class="icone dois"><img src="../img/trash.svg" alt=""></td>
                </tr>
            <?php endforeach;?>
        </table>
            
        <section class="edicao">
            <form action="edicao.php" method="get">
                <input type="text" name="id" id="identificao" readonly>
                <input type="text" name="tarefa" id="" placeholder="Tarefa">
                <input type="text" name="custo" id="" placeholder="Custo">
                <input type="date" name="data" id="">
                <button type="submit">Editar</button>
            </form>
        </section>
        <section class="apagar">
            <p>Deseja apagar a tarefa?</p>
            <section>
                <div class="sim"><a href="">SIM</a></div>
                
                <div class="nao"><a href="">NÃO</a></div>
            </section>
        </section>
    </section>

    <script src="script.js"></script>
</body>
</html>