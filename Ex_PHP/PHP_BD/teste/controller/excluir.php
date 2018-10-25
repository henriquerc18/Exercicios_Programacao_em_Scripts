<?php
    require_once './Conexao.class.php';
    require_once '../model/Crud.class.php';
    $con = new Conexao();
    $con->connect();

    $crud = new Crud('produto');
    $id = $_GET['id'];
    $crud->excluir("id = $id");
    
    $con->disconnect();
    header("../index.php");
?>
