<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>TREINANDO PHP</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div>
	<?php
	$atual = $_GET["aa"]; # essa linha vai pegar o ano pela URL
	echo "O ano atual é $atual, portanto o ano passado foi ".--$atual;
	?>
</div>
</body>
</html>