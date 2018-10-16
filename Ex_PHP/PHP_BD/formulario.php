<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 11/10/2018 -->

<?php
	require_once 'conexao.class.php';
	require_once 'crud.class.php';
	
	$con = new Conexao();
	$con->connect();
	
	@$getId = $_GET['id'];
	if($getId){
		$consulta = mysql_query("SELECT * FROM produto WHERE id = + $getId");
		$campo = @mysql_fetch_array($consulta);
	}if(isset($_POST['Cadastrar'])){
		$nome = $_POST['nome'];
		$descricao = $_POST['descricao'];
		$crud = new Crud('produto');
		$crud->inserir("nome,descricao","'nome','$descricao'");
		header("Location: index.php");
	}if(isset($_POST['Editar'])){
		$nome = $_POST['nome'];
		$descricao = $_POST['descricao'];
		$crud = new Crud('produto');
		$crud->atualizar("nome='$nome',descricao='$descricao'","id='$getId'");
		header("Location: index.php");
	}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title> Formulário de Cadastro de Produtos </title>
	</head>
	<body>
		<form action="" method="post">
			<label> Nome: </label>
			<input type="text" name="nome" value="<?php echo @$campo['nome']; ?>" />
			<br> <br>
			<label> Descrição: </label>
			<input type="text" name="descricao" value="<?php echo @$campo['descricao']; ?>" />
			<?php
				if(@!campo['id']){
			?>
			<input type="submit" name="Cadastrar" value="Cadastrar" />
			<?php }else{ ?>
			<input type="submit" name="Editar" value="Editar" />
			<?php } ?>
		</form>
	</body>
</html>
<?php $con->disconnect(); ?>