<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 11/10/2018 -->

<?php
	require_once 'conexao.class.php';
	require_once 'crud.class.php';
	
	$con = new Conexao();
	$con->connect();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset = "UTF-8"/>
		<title> Página Inicial </title>
	</head>
	<body>
		<?php
			if($con->connect()){
				echo 'Conectou!';
			}else{
				echo 'Não conectou!';
			}	
	
		?>
		
		<a href = "formulario.php"> Novo </a>
		<table style = "border: 1px solid red;">
			<thead>
				<tr>
					<th colspan = "4"> CADASTRO DE PRODUTOS </th>
				</tr>
				<tr>
					<th> Nome </th>
					<th> Descrição </th>
				</tr>
			</thead>
			<tbody>
				<?php
					$consulta = @mysqli_query("SELECT * FROM produto");
					while($campo = @mysqli_fetch_array($consulta)){
				?>
				<tr>
					<td>
						<?php echo $campo['nome']; ?>
					</td>
					<td>
						<?php echo $campo['descricao']; ?>
					</td>
					<td>
						<a href = "formulario.php?id=<?php echo $campo['id']; ?> "> Editar </a>
					</td>
					<td>
						<a href="excluir.php?id=<?php echo $campo['id']; ?> "> Excluir </a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</body>
</html>
<?php $con->disconnect(); ?>
