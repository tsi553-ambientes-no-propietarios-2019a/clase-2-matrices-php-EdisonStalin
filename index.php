<?php


//arrar multidimensional

$datos=array(
	array("Nombre","Tipo",Edad),
	array("Edison","Estudiante",22),
	array("Alex","Estudiante",23),
	array("Maria","Tutor",42),
	);

//obtener el valor

$Fila =3;
$Columna =1;

//echo $datos[$Fila][$Columna];

//recorrer un arreglo
for($Fila=0;$Fila<count($datos);$Fila++):
	for($Columna=0;$Columna<count($datos[$Fila]);$Columna++):
		echo "Dato".$datos[$Fila][$Columna];
	endfor;
echo "\n";
endfor;
)

?>