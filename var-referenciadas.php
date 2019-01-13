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
	$a = 3;
	$b = &$a;
	$b += 5;
	echo "A variável A vale $a";
	echo "<br>A variável B vale $b";
	?>
</div>
</body>
</html>