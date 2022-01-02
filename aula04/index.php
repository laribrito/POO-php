<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8"/>
	<link rel = "stylesheet" type="text/css" href = "css/estilo.css"/>
	<title></title>
</head>
<body>
	<pre>
	<?php
		// require_once "classCaneta.php";
		// $c1=new Caneta("Bic", "Azul", 0.4);
		// $c1->setModelo("Bic");
		// // $c1->modelo="BIC";
		// $c1->setPonta(0.5);
		// // $c1->ponta=0.3;
		// echo "Eu criei uma caneta de modelo {$c1->getModelo()} e de ponta {$c1->getPonta()}";
		// print_r($c1);

		require_once "classBola.php";
		$bolaFutebol = new Bola("Futebol", 1.6, "Azul e rosa");
		// $bolaFutebol->setTipo("Futebol");
		// $bolaFutebol->setCor("Preto e branco");
		// $bolaFutebol->setPeso(1.5);
		$bolaFutebol->pegar();
		$bolaFutebol->brincar();
		print_r($bolaFutebol);
		$bolaFutebol->guardar();
		$bolaFutebol->brincar();
		print_r($bolaFutebol);
	?>
	</pre>
</body>
</html>
