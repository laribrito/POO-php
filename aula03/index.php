<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8"/>
	<link rel = "stylesheet" type="text/css" href = "css/estilo.css"/>
	<title>Aula 03</title>
</head>
<body>
	<pre>
	<?php
		require_once "Caneta.php";
		$c1 = new Caneta;
		$c1 -> modelo="FaberCastel";
		$c1 -> cor = "Azul";
		// $c1 -> ponta = 0.5;
		// $c1 -> carga = 99;
		// $c2 -> tampada = true;
		$c1->rabiscar();
		$c1 ->tampar();
		print_r($c1);
	?>
	</pre>
</body>
</html>
