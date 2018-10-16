<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 11/10/2018 -->

<?php
	require_once 'conexao.class.php';
	require_once 'crud.class.php';
	
	$con = new Conexao();
	$con->Connect();
	
	$crud = new Crud('produto');
	$id = $_GET['id'];
	$crud->excluir("id = $id");
	
	$con->disconnect();
	
	header("index.php");
?>