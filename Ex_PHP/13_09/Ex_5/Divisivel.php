<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 13/09/2018 -->
<!DOCTYPE HTML>
<html>
	<head>
		<title> 13/09 - Ex. 5 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			include_once 'Divisivel.class.php';
			
			$divisivel = new Divisivel();
			
			$divisivel->setNumero($_POST['txtNum1']);
			
			
			echo $divisivel->verificarDivisibilidade();

		?>
		
	</body>
</html>

