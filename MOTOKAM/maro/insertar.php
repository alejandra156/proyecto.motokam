<?php
	require_once"../conexion.php";
	require_once"../metodoscrud.php";



$CLIENTES_id=$_POST['id_c'];
$EMPLEADOS_idTECNICO=$_POST['id_e'];
$fecha=$_POST['fe'];
$hora =$_POST['ho'];

$datos= array(	
				$CLIENTES_id,
				$EMPLEADOS_idTECNICO,
				$fecha,
				$hora );

$obj= new metodos();
if ($obj->insertarDatoscliente_id($datos)==1) {
	header("location:../index.php");
	
}else{
	echo "fallo al agregar";

}



?>
