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
	// Pegando dados para variáveis pelo browser (?a=2&b=5) e Operações aritméticas
		$numero1 = $_GET["a"];
		$numero2 = $_GET["b"];
		$soma = $numero1 + $numero2;
		$media = ($numero1 + $numero2) / 2;

		echo "<h2>Valores recebidos: $numero1 e $numero2</h2>";
		echo "<br>A soma vale $soma";
		echo "<br>A subtração vale ".($numero1-$numero2);
		echo "<br>A multiplicação vale ".($numero1*$numero2);
		echo "<br>A divisão vale ".($numero1/$numero2);
		echo "<br>O resto vale ".($numero1%$numero2);
		echo "<br>A media vale $media";
		echo "<br>O valor absoluto de $numero1 é ".abs($numero1);
		echo "<br>O valor de $numero1<sup>$numero2</sup> é ".pow($numero1, $numero2);
		echo "<br>A raiz quadrada de $numero2 é ".sqrt($numero2);
		echo "<br>O valor de $numero1 arrendondado é ".round($numero1);
		// ceil sempre arrendonda pra cima
		// floar sempre arrendonda pra baixa
		echo "<br>A parte inteira de $numero1 é ".intval($numero1);
		echo "<br>O valor de $numero1 em moeda é R$".number_format($numero1, 2, ",", ".");

	// Oferecendo desconto ou aumentando valor do produto
		$preco = $_GET["p"];
		echo "O preço do produto é de R$ ".number_format($preco,2,",",".");

		//$preco += $preco * 10 / 100;
		//echo "<br>Com 10% de aumento o preço do produto será R$ ".number_format($preco,2,",",".");

		$preco -= $preco * 10 / 100;
		echo "<br>Com 10% de desconto o preço do produto será R$ ".number_format($preco,2,",",".");
	?>
	</div>
</body>
</html>