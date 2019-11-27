



<?php

$ip=$_GET['ip'];
$ubicacio=$_GET['ubicacio'];

$mensaje = " ";
if ($ip == "")
$mensaje .= '<script name="accion">alert("SUS DATOS HAN SIDO AGREGADOS CORRECTAMENTE") </script>';


//por último checamos si hubo algún error
if($mensaje != "")
echo $mensaje;
else
{
//lo q quieras
}

$connect=mysqli_connect("localhost:3307","root","","proyecto");
    
   

$CLIENTES_id=$_POST['id_c'];
$EMPLEADOS_idTECNICO=$_POST['id_e'];
$fecha=$_POST['fe'];
$hora =$_POST['ho'];


   

$sql2="INSERT INTO citas VALUES($CLIENTES_id,$EMPLEADOS_idTECNICO,$fech,$hora
)";
$consulta=mysqli_query($connect,$sql2);

if ($consulta) {

	echo "datos agregados"; 
}
else 
{
    echo "error" . $sql2."<br>" . mysqli_error($connect);

}
//return(intento);
mysqli_close($connect);
//}
//}

?>