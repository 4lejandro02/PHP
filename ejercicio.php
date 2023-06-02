<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio</title>
</head>
<body>
	<h1>EJERCICIO</h1>
<?PHP
	$Num = rand(1,5);
	if($Num === 1){}
 	for($i=0;$i < $Num; $i++)
 	{
 		$circulo = rand(1,5);
 		echo "<img src=\"exe/$circulo.jpg\" width=\"60\" height=\"60\">\n" ;
 	}
?>
</body>

</html>