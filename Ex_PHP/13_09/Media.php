<!-- Escola Técnica Santo Inácio - 2018/2 -->
<!-- Nome: Henrique Rosa Carvalho -->
<!-- Data: 13/09/2018 -->
<!DOCTYPE HTML>
<html>
	<head>
		<title> 13/09 - Ex. 1 </title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			include_once 'Media.class.php';
			
			$media = new Media();
			
			$media->setPrimeiraNota($_POST['txtNum1']);
			$media->setSegundaNota($_POST['txtNum2']);
			
			
			echo "A média das notas é: ". $media->calcularMedia(). "<br>";

		?>
		
	</body>
</html>

