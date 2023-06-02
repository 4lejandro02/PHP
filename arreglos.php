<?php
$dia[0]="Lunes";
$dia[1]="Martes";
$dia[2]="Miercoles";
$dia[3]="Jueves";
$dia[4]="Viernes";
$dia[5]="Sabado";
$dia[6]="Domingo";

echo $dia[1];

echo "<br>";

echo count($dia);

echo "<br>";

$autos = array("Nissan","Toyota","BMW");
echo "Las marcas de auto son: ".$autos[0].", ".$autos[1].", ".$autos[2];

echo "<br>";

$color =array("Azul","Amarillo","Rojo");
/*echo "Los colores primarios son: ".$color[0].", ".$color[1].", ".$color[2];*/
$tan=count($autos);
for($x=0; $x<$tan;$x++)
{
	echo $autos[$x];
	echo "<br>";
}
echo "<br>";

//Arreglos asociativos

$registros = array('Docu' => 404141, 'Nombre' => "Felipe",'Direccion' => "Cenigraf");

	echo $registros['Docu'];
	echo "<br>";
	echo "<br>";

$articulos = array('Codigo' => 100,'Nombrep' => "Fresas", 'Precio' => 7000);
foreach ($articulos as $key => $value) {
	echo "Para la llave: ".$key." su valor es: ".$value;
	echo "<br>";

}
echo "<br>";

$aprendices = array('Docu' => 28540,'NombreA' => "Alejandro", 'Programa' => "adso",'trimestre' =>5);

foreach($aprendices as $fi => $valor)
{
	echo "Para los datos: " .$fi. " su valor es: ".$valor;
	echo "<br>";

}
