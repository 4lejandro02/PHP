<?php
$Nom = $_POST['txtnom'];
$Ed = $_POST['txtedad'];
$Esta =$_POST['txtesta'];
$Estado =$_POST['txtestado'];
$fecha = $_POST['txtfecha'];
$fechaEntero = strtotime($fecha);
$year = date("y");
$mes = date("m");
$dia = date("d");

/*
echo 
echo $Nom;
echo "<br>";
echo $Ed;
echo "<br>";
echo $Esta;
echo "<br>";
echo $Estado;
*/

echo $fecha;
echo"<br>";
echo $year;
echo"<br>";
echo $mes;
echo"<br>";
echo $dia;
echo"<br>";
if($Estado=="soltero")
{
	echo "Nombre:".$Nom . "Edad:".$Ed;
}
else if($Estado=="casado")
{
	echo "Nombre:".$Nom."<br>"."Estatura:".$Esta;
}
else if($Estado=="union libre")
{
	echo "Edad:" .$Ed."<br>"."Estatura:".$Esta;
}

switch ($mes) {
	case 1:
		if($dia <= 20)
		{
			echo "Su signo ees capricornio";
		}
		else
		{
			echo "Su signo es Acuario";
		}
		break;
	case 2:
		if($dia<= 18)
		{
			echo "Su signo es Acuario";
		}
		else
		{
			echo "Su signo es Piscis";
		}
		break;
		case 3:
		if($dia <= 20)
		{
			echo "Su signo es Piscis";
		}
		else
		{
			echo "Su signo es Aries";
		}
		case 4:
		if($dia <= 20)
		{
			echo "Su signo es Aries";
		}
		else
		{
			echo "Su signo es Tauro";
		}
		case 5:
		if($dia <=21)
		{
			echo "Su signo es Tauro";
		}
		else
		{
			echo "Su signo es Gemi";
		}
		break;
	default:
		echo "Seleccione la fecha de nacimiento";
		break;
}
?>