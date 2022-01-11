<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8"/>
	<link rel = "stylesheet" type="text/css" href = "css/estilo.css"/>
	<title>Encapsulamento</title>
</head>
<body>
	<h1>Objeto controle remoto</h1>
	<?php
		require_once "classeControleRemoto.php";
		$c = new ControleRemoto();
		$c->ligar();
		$c->maisVolume();
		$c->maisVolume();
		$c->maisVolume();
		$c->maisVolume();
		$c->abrirMenu();
	?>
</body>
</html>
