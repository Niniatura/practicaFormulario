<?php 
function funcionFormulario($parametros){
	$nombre = $parametros['nombre'];
	$apellido = $parametros['apellido'];
	$telefono = $parametros['telefono'];
	if ($nombre=="") {
		echo "nombre invalido";
	} 	
	if ($apellido=="") {
		echo "apellido invalido";
	} 
	if ($telefono=="") {
		echo "telefono invalido";
	}
}
?>