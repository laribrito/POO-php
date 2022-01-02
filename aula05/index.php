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
		include_once "classContaBanco.php";
		$conta1 = new ContaBanco;
		$conta1->abrirConta("cc","Evilly de Brito");
		$conta1->depositar(20);
		$conta1->sacar(70);
		// $conta1->pagarMensalidade();
		$conta1->fecharConta();
		print_r($conta1);

		$conta2 = new ContaBanco;
		print_r($conta2);
	?>
	</pre>
</body>
</html>
