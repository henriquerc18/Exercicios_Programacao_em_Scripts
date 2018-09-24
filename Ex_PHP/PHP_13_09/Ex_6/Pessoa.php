<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 13/09/2018 -->
<!DOCTYPE HTML>
<html>
	<head>
		<title> 13/09 - Ex. 6 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			include_once 'Pessoa.class.php';
			
			$pessoa = new Pessoa();
			
			$pessoa->setNome($_POST['txtNum1']);
			$pessoa->setSexo($_POST['txtNum2']);
			$pessoa->setIdade($_POST['txtNum3']);
			
			
			echo $pessoa->verificarAdmissao();

		?>
		
	</body>
</html>

