<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Conteo</title>
</head>
<body>
<h1>CONTEO DE PUNTOS</h1>

<?PHP
 $Num = rand(1,10);
 $Total = 0;

 if($Num === 1)
 	{
 	 	echo "<h2>Dados: $Num </h2>\n";
 	}else{
 		echo "<h2>Dados: $Num </h2>\n";
 	}
 	echo "\n";
 	for($i=0;$i < $Num; $i++)
 	{
 		$dado = rand(1,6);
 		echo "<img src=\"img/$dado.jpg\" width=\"120\" height=\"120\">\n";

 		$Total += $dado;

 	}
 	echo "<br>";
 	echo "El total de puntos son:".$Total;

?>

</body>
</html>