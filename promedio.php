<?php
//Calcular el promedio del peso de 5 personas x medio del array


/*$Pesos[0]=62.5;
$Pesos[1]=95.5;
$Pesos[2]=70.2;
$Pesos[3]=55.5;
$Pesos[4]=92.6;

//echo count($Pesos);
/*for($i=0;$i<count($Pesos);$i++)
{
	$promedio = $promedio + $Pesos[$i];
}

$pro = $promedio/5;

for($i=0;$i<count($Pesos);$i++){

	if($Pesos[$i] > $pro)
	{
		$alto++;
	}
	else
	{
		$bajo++;
	}	
}
*/
$promedio=0;
$grupoA[0] = 10;
$grupoA[1] = 7;
$grupoA[2] = 8;
$grupoA[3] = 9;
$grupoA[4] = 6;
$grupoA[5] = 10;
$grupoA[6] = 8;
$grupoA[7] = 8;
$grupoA[8] = 5;
$grupoA[9] = 10;

$promedioa=0;
$grupoB[0] = 4;
$grupoB[1] = 8;
$grupoB[2] = 2;
$grupoB[3] = 6;
$grupoB[4] = 9;
$grupoB[5] = 1;
$grupoB[6] = 7;
$grupoB[7] = 3;
$grupoB[8] = 6;
$grupoB[9] = 8;

/*$grupoA = [10,7,8,9,6,10,8,8,5,10];
$grupoB = [4,8,2,6,9,1,7,3,6,8];
*/
for($i=0;$i<count($grupoA);$i++)
	{
		$promedio = $promedio + $grupoA[$i];
	}
$proA = $promedio/10;

for($i=0;$i<count($grupoB);$i++)
	{
		$promedioa = $promedioa + $grupoB[$i];
	}
$proB = $promedioa/10;

$proTotal = ($proA+$proB)/2;


echo "El promedio registrado en el grupo A es: ".$proA;
echo "<br>";
echo "El promedio registrado en el grupo B es: ".$proB;
echo "<br>";
echo "El promedio de los dos grupos es de: ".$proTotal;
echo "<br>";
if($proA > $proB)
	{
		echo "El grupo con mejor promedio es: ".$proA;
	}
	else
	{
		echo "El grupo con mejor promedio es: ".$proB;
	}

//echo "Por encima  del promedio: ".$alto;
echo "<br>";
//echo "Por debajo del promedio: ".$bajo;
?>